<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    private static $photo,$image,$imageName,$imageUrl,$directory,$extension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'photo-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newPhoto($request)
    {
        self::$photo = new Photo();
        self::$photo->photo_category_id  = $request->photo_category_id;
        self::$photo->image  = self::getImageUrl($request);
        self::$photo->status  = $request->status;
        self::$photo->save();
    }
    public static function updatePhoto($request ,$id)
    {
        self::$photo = self::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$photo->image))
            {
                unlink(self::$photo->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$photo->image;
        }
        self::$photo->photo_category_id  = $request->photo_category_id;
        self::$photo->image = self::$imageUrl;
        self::$photo->status  = $request->status;
        self::$photo->save();

    }
    public static function deletePhoto($id)
    {
        self::$photo = Gallery::find($id);
        if (file_exists(self::$photo->image))
        {
            unlink(self::$photo->image);
        }
        self::$photo->delete();
    }
}
