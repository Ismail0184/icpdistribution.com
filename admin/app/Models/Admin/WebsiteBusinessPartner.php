<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteBusinessPartner extends Model
{
    use HasFactory;

    public static $bp, $directory, $image, $imageName, $imageUrl;


    public static function getImageUrl($request)
    {
        if ($request->file('image')>0) {
            self::$image = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'assets/website/business-partner-logo/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory . self::$imageName;
        }
    }

    public static function storeBP($request)
    {
        self::$bp             = new WebsiteBusinessPartner();
        self::$bp->serial     = $request->serial;
        self::$bp->partner_name   = $request->partner_name;
        self::$bp->website    = $request->website;
        self::$bp->description    = $request->description;
        self::$bp->logo      = self::$bp->logo = self::getImageUrl($request);
        self::$bp->entry_by   = $request->entry_by;
        self::$bp->save();
        return self::$bp;
    }

    public static function updateBP($request, $id)
    {
        self::$bp = WebsiteBusinessPartner::findOrfail($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$bp->image))
            {
                unlink(self::$bp->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$bp->image;
        }
        self::$bp->serial     = $request->serial;
        self::$bp->partner_name   = $request->partner_name;
        self::$bp->website    = $request->website;
        self::$bp->description    = $request->description;
        self::$bp->loho      = self::$imageUrl;
        self::$bp->status     = $request->status;
        self::$bp->save();
    }


    public static function destroyBP($id)
    {
        self::$bp = WebsiteBusinessPartner::findOrfail($id);
        if (file_exists(self::$bp->image))
        {
            unlink(self::$bp->image);
        }
        self::$bp->delete();
    }
}
