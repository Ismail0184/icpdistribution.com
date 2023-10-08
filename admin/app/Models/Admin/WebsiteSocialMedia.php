<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSocialMedia extends Model
{
    use HasFactory;

    public static $socialmedia;

    public static function updateSocialMedia($request, $id)
    {
        self::$socialmedia              = WebsiteSocialMedia::findOrfail($id);
        self::$socialmedia->facebook    = $request->facebook;
        self::$socialmedia->twitter    = $request->twitter;
        self::$socialmedia->linkedin    = $request->linkedin;
        self::$socialmedia->youtube    = $request->youtube;
        self::$socialmedia->instagram    = $request->instagram;
        self::$socialmedia->save();
    }
}
