<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Termwind\renderUsing;

class SubCategory extends Model
{
    use HasFactory;

    public static $subCategory;

    public static function storeSubCategory($request)
    {
        self::$subCategory = new SubCategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->description = $request->description;
        self::$subCategory->image = $request->image;
        self::$subCategory->save();
    }

    public static function updateSubCategory($request, $id)
    {
        self::$subCategory = SubCategory::findOrfail($id);
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->description = $request->description;
        self::$subCategory->status = $request->status;
        self::$subCategory->image = $request->image;
        self::$subCategory->save();
    }

    public static function destroySubCategory($id)
    {
        SubCategory::where('id',$id)->update(['status'=>'0']);
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
