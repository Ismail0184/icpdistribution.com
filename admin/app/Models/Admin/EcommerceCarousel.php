<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcommerceCarousel extends Model
{
    use HasFactory;

    public static $carousel, $directory, $image, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'assets/website/carousel/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function storeCarousel($request)
    {
        self::$carousel             = new EcommerceCarousel();
        self::$carousel->serial     = $request->serial;
        self::$carousel->headline   = $request->headline;
        self::$carousel->details    = $request->details;
        self::$carousel->image      = self::$carousel->image = self::getImageUrl($request);
        self::$carousel->entry_by   = $request->entry_by;
        self::$carousel->position   = $request->position;
        self::$carousel->save();
        return self::$carousel;
    }

    public static function updateCarousel($request, $id)
    {
        self::$carousel = EcommerceCarousel::findOrfail($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$carousel->image))
            {
                unlink(self::$carousel->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$carousel->image;
        }
        self::$carousel->serial     = $request->serial;
        self::$carousel->headline   = $request->headline;
        self::$carousel->details    = $request->details;
        self::$carousel->image      = self::$imageUrl;
        self::$carousel->update_by  = $request->entry_by;
        self::$carousel->status     = $request->status;
        self::$carousel->position   = $request->position;
        self::$carousel->save();
    }


    public static function destroyCarousel($id)
    {
        self::$carousel = EcommerceCarousel::findOrfail($id);
        if (file_exists(self::$carousel->image))
        {
            unlink(self::$carousel->image);
        }
        self::$carousel->delete();
    }
}
