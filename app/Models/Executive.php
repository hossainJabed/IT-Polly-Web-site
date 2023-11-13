<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executive extends Model
{
    use HasFactory;
    private static $executive,$image,$imageName,$imageUrl,$directory,$extension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'executive-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newExecutive($request)
    {
        self::$executive = new Executive();
        self::$executive->name           = $request->name;
        self::$executive->designation     = $request->designation;
        self::$executive->company     = $request->company;
        self::$executive->image       =self::getImageUrl($request);
        self::$executive->save();
    }
    public static function updateExecutive($request ,$id)
    {
        self::$executive = self::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$executive->image))
            {
                unlink(self::$executive->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$executive->image;
        }
        self::$executive->name            = $request->name;
        self::$executive->designation     = $request->designation;
        self::$executive->company         = $request->company;
        self::$executive->image           = self::$imageUrl;
        self::$executive->save();

    }
    public static function deleteExecutive($id)
    {
        self::$executive = Executive::find($id);
        if (file_exists(self::$executive->image))
        {
            unlink(self::$executive->image);
        }
        self::$executive->delete();
    }
}
