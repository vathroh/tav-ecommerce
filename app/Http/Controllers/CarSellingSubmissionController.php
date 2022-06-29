<?php

namespace App\Http\Controllers;

use App\Models\ContactPeople;
use Illuminate\Support\Facades\DB;
use App\Models\SalesRequest;
use Illuminate\Http\Request;
use Validator;

class CarSellingSubmissionController extends Controller
{
    public function carMerk()
    {
        $data = DB::Table('car_merk');
        return response()->json($data);
    }

    public function autoCreateContactPeople($PhoneNumber)
    {
        $uuid = uniqid();
        $input = ContactPeople::create([
            'code' => 'contact-' . $uuid,
            'first_name'    => 'default',
            'last_name' => 'Customer',
            'type'    => 'Customer',
            'phone_number'    => $PhoneNumber,
            'identity'    => 'KTP',
            'identity_number' => "XXXXXXXXXXXXXXXX",
            'email'    => $uuid . '@email.com',
            'is_active'    => 1
        ]);

        return $input->id;
    }

    public function getCustomerIdByPhoneNumber($PhoneNumber)
    {
        $contactPeople = ContactPeople::where('phone_number', $PhoneNumber)->get();

        if (count($contactPeople)) {
            return $contactPeople[0]->id;
        } else {
            return $this->autoCreateContactPeople($PhoneNumber);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'merk_id' => ['required', 'numeric'],
            'model_id' => ['required', 'numeric'],
            'year' => ['required', 'numeric'],
            'mobile_phone'  => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors()], 400);
        }

        $customerId = $this->getCustomerIdByPhoneNumber($request->mobile_phone);
        $code = uniqid('sales-');

        $input = SalesRequest::create([
            'code' => $code,
            'customer_id' => $customerId,
            'brand_id' => $request->merk_id,
            'merk_id' => $request->model_id,
            'year' => $request->year,
            'status_request' => 2,
            'is_active' => 0
        ]);

        return response()->json([
            'data' => $input,
            'message' => 'The submission has been successfully saved.'
        ], 201);
    }
}
