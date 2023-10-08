<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteAbout extends Model
{
    use HasFactory;

    public static $about;

    public static function storeAbout($request)
    {
        self::$about = new WebsiteAbout();
        self::$about->section_name = $request->section_name;
        self::$about->section_name = $request->section_name;
        self::$about->section_name = $request->section_name;
        self::$about->section_name = $request->section_name;
        self::$about->save();
    }
}
