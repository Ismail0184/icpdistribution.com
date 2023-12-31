<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $category, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'assets/category-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function storeCategory($request)
    {
        self::$category = new Category;
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = $request->image;
        self::$category->image = self::getImageUrl($request);
        self::$category->save();
        return self::$category;
    }

    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }

        self::$category = Category::findOrfail($id);
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = $request->image;
        self::$category->status = $request->status;
        self::$category->image = self::$imageUrl;
        self::$category->save();
    }

    public static function destroyCategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
}
