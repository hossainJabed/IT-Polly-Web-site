<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    private static $gallery,$image,$imageName,$imageUrl,$directory,$extension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'gallery-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newGallery($request)
    {
        self::$gallery = new Gallery();
        self::$gallery->image       =self::getImageUrl($request);
        self::$gallery->save();
    }
    public static function updateGallery($request ,$id)
    {
        self::$gallery = self::find($id);
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
        self::$gallery->image = self::$imageUrl;
        self::$gallery->save();

    }
    public static function deleteGallery($id)
    {
        self::$gallery = Gallery::find($id);
        if (file_exists(self::$gallery->image))
        {
            unlink(self::$gallery->image);
        }
        self::$gallery->delete();
    }
}
