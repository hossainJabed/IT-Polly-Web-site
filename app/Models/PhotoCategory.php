<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoCategory extends Model
{
    use HasFactory;
    private static $photoCategory;

    public static function newPhotoCategory($request)
    {
        self::$photoCategory = new PhotoCategory();
        self::$photoCategory->name           = $request->name;
        self::$photoCategory->description    = $request->description;
        self::$photoCategory->status         = $request->status;
        self::$photoCategory->save();
    }
    public static function updatePhotoCategory($request ,$id)
    {
        self::$photoCategory = self::find($id);
        self::$photoCategory->name           = $request->name;
        self::$photoCategory->description    = $request->description;
        self::$photoCategory->status         = $request->status;
        self::$photoCategory->save();

    }

}
