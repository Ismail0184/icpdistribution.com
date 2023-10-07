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

            self::$image = $request->file('logo');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'assets/website/businessPartnerLogo/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory . self::$imageName;

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
        if ($request->file('logo'))
        {
            if (file_exists(self::$bp->logo))
            {
                unlink(self::$bp->logo);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$bp->logo;
        }
        self::$bp->serial     = $request->serial;
        self::$bp->partner_name   = $request->partner_name;
        self::$bp->website    = $request->website;
        self::$bp->description    = $request->description;
        self::$bp->logo      = self::$imageUrl;
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
