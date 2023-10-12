<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteGallery extends Model
{
    use HasFactory;

    public static $gallery, $images, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'assets/website/gallery/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function getImageUrlMultiple($image)
    {
        self::$imageName    = $image->getClientOriginalName();
        self::$directory    = 'assets/website/gallery/';

        $image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function storeGallery($request)
    {
        self::$images = $request->file('images');
        foreach (self::$images as $image)
        {
            self::$gallery = new WebsiteGallery();
            self::$gallery->image = self::getImageUrlMultiple($image);
            self::$gallery->image_name = $image->getClientOriginalName();
            self::$gallery->save();
        }
    }

    public static function updateGallery($request, $id)
    {
        self::$gallery = WebsiteGallery::findOrfail($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$gallery->image))
            {
                unlink(self::$gallery->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$gallery->image;
        }

        self::$gallery->image      = self::$imageUrl;
        self::$gallery->status     = $request->status;
        self::$gallery->save();
    }

    public static function destroyGallery($id)
    {
        self::$gallery = WebsiteGallery::findOrfail($id);
        if (file_exists(self::$gallery->image))
        {
            unlink(self::$gallery->image);
        }
        self::$gallery->delete();
    }
}
