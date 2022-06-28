<?php

namespace App\Http\Controllers;

use App\Models\EcommerceCarSellingSubmission;
use Illuminate\Http\Request;
use Validator;

class CarSellingSubmissionController extends Controller
{
    public function carMerk(){
        $data = DB::Table('car_merk');
        
        return response()->json($data);
    }
    
    public function store(Request $request)
    {        
        $validator = Validator::make($request->all(),[
            'merk_id' => ['required'],
            'model_id' => ['required'],
            'year' => ['required'],
            'mobile_phone'  => ['required']
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }


        $input = EcommerceCarSellingSubmission::create([
            'merk_id' => $request->merk_id,
            'model_id' => $request->model_id,
            'year' => $request->year,
            'mobile_phone' => $request->mobile_phone
        ]);

        return response()->json([
            'data' => $input,
            'message' => 'The submission has been successfully saved.'
        ], 201);
    }

    
    public function show($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
