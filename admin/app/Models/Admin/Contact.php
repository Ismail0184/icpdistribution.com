<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public static $contact;

    public static function storeContact($request)
    {
        self::$contact = new Contact();
        self::$contact->headline = $request->headline;
        self::$contact->description = $request->description;
        self::$contact->location = $request->location;
        self::$contact->phone = $request->phone;
        self::$contact->mobile = $request->mobile;
        self::$contact->map = $request->map;
        self::$contact->email = $request->email;
        self::$contact->save();
    }

    public static function updateContact($request, $id)
    {
        self::$contact = Contact::findOrfail($id);
        self::$contact->headline = $request->headline;
        self::$contact->description = $request->description;
        self::$contact->location = $request->location;
        self::$contact->phone = $request->phone;
        self::$contact->mobile = $request->mobile;
        self::$contact->map = $request->map;
        self::$contact->email = $request->email;
        self::$contact->save();
    }

    public static function destroyContact($id)
    {
        self::$contact = Contact::findOrfail($id);
        self::$contact->delete();
    }


}
