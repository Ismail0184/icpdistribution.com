<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public static $brand;

    public static function storeBrand($request)
    {
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->image = $request->image;
        self::$brand->save();
    }

    public static function updateBrand($request, $id)
    {
        self::$brand = Brand::findOrfail($id);
        self::$brand->name = $request->name;
        self::$brand->image = $request->image;
        self::$brand->save();
    }

    public static function destroyBrand($id)
    {
        Brand::where('id',$id)->update(['status'=>'0']);
    }
}
