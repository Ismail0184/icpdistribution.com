<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $category;

    public static function storeCategory($request)
    {
        self::$category = new Category;
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = $request->image;
        self::$category->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$category = Category::findOrfail($id);
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = $request->image;
        self::$category->status = $request->status;
        self::$category->save();
    }

    public static function destroyCategory($id)
    {
        Category::where('id',$id)->update(['status'=>'0']);
    }
}
