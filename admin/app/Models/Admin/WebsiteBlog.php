<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteBlog extends Model
{
    use HasFactory;

    public static $blog, $directory, $image, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'assets/website/blog/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function storeBlog($request)
    {
        self::$blog             = new WebsiteBlog();
        self::$blog->serial     = $request->serial;
        self::$blog->headline   = $request->headline;
        self::$blog->description    = $request->description;
        self::$blog->image      = self::$blog->image = self::getImageUrl($request);
        self::$blog->entry_by   = $request->entry_by;
        self::$blog->save();
        return self::$blog;
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = WebsiteBlog::findOrfail($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$blog->image;
        }
        self::$blog->serial     = $request->serial;
        self::$blog->headline   = $request->headline;
        self::$blog->description    = $request->description;
        self::$blog->image      = self::$imageUrl;
        self::$blog->entry_by  = $request->entry_by;
        self::$blog->status     = $request->status;
        self::$blog->save();
    }


    public static function destroyBlog($id)
    {
        self::$blog = WebsiteBlog::findOrfail($id);
        if (file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
}
