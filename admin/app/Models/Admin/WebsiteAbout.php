<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteAbout extends Model
{
    use HasFactory;

    public static $about, $image, $imageUrl, $imageName, $directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'assets/aboutUs/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function storeAbout($request)
    {
        self::$about = new WebsiteAbout();
        self::$about->section_name = $request->section_name;
        self::$about->description = $request->description;
        self::$about->image = self::getImageUrl($request);
        self::$about->save();
        return self::$about;
    }

    public static function updateProduct($request, $id)
    {
        self::$about = WebsiteAbout::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$about->image))
            {
                unlink(self::$about->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$about->image;
        }
        self::$about->section_name = $request->section_name;
        self::$about->description = $request->description;
        self::$about->image = self::$imageUrl;
        self::$about->save();
    }
}
