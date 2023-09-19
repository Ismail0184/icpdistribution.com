<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public static $unit;

    public static function storeUnit($request)
    {
        self::$unit = new Unit();
        self::$unit->name = $request->name;
        self::$unit->details = $request->details;
        self::$unit->save();
    }

    public static function updateUnit($request, $id)
    {
        self::$unit = Unit::findOrfail($id);
        self::$unit->name = $request->name;
        self::$unit->details = $request->details;
        self::$unit->status = $request->status;
        self::$unit->save();
    }

    public static function destroyUnit($id)
    {
        Unit::where('id',$id)->update(['status'=>'0']);
    }
}
