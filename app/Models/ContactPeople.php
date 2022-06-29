<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactPeople extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImageAttribute($avatar)
    {
        if ($avatar != null) {
            return asset('storage/admin/contact/' . $avatar);
        }
        return 'https://ui-avatars.com/api/?name=' . str_replace(' ', '+', $this->first_name . ' ' . $this->last_name) . '&background=4e73df&color=ffffff&size=100';
    }

    public static function getPossibleEnumValues($name)
    {
        $instance = new static; // create an instance of the model to be able to get the table name
        $type = DB::select(DB::raw('SHOW COLUMNS FROM ' . $instance->getTable() . ' WHERE Field = "' . $name . '"'))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach (explode(',', $matches[1]) as $value) {
            $v = trim($value, "'");
            $enum[] = $v;
        }
        return $enum;
    }

    public function Jabatan()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public static function getCountType($type)
    {
        return ContactPeople::where('type', $type)->count();
    }

    public static function maxCode()
    {
        return ContactPeople::get()->max('code') + 1;
    }

    public static function getPeople()
    {
        return ContactPeople::where('is_active', 1)->get(['first_name', 'id', 'last_name', 'type']);
    }

    public static function getBank($id)
    {
        // $bank_id = BankAccount::where('contact_people_id', $id)->get(['bank_id']);
        // $bank = Bank::where('is_active', 1)->whereNotIn('id', $bank_id)->get();
        $bank = Bank::where('is_active', 1)->get();
        return $bank;
    }

    public static function getContactPeopleBankAccount($id)
    {
        return BankAccount::join('banks', 'banks.id', '=', 'bank_accounts.bank_id')
            ->select('bank_accounts.*')
            ->where('contact_people_id', $id)
            ->orderBy('banks.bank_name', 'ASC')
            ->get();
    }

    public static function getContactPeopleAddress($id)
    {
        return ContactPeopleAddress::where('contact_people_id', $id)->get();
    }
}
