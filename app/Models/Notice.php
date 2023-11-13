<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    private static $notice,$image,$imageName,$imageUrl,$directory,$extension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'notice-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newNotice($request)
    {
        self::$notice = new Notice();
        self::$notice->title           = $request->title;
        self::$notice->description     = $request->description;
        self::$notice->date           = $request->date;
        self::$notice->image       =self::getImageUrl($request);
        self::$notice->save();
    }
    public static function updateNotice($request ,$id)
    {
        self::$notice = self::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$notice->image))
            {
                unlink(self::$notice->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$notice->image;
        }
        self::$notice->title = $request->title;
        self::$notice->description = $request->description;
        self::$notice->date = $request->date;
        self::$notice->image = self::$imageUrl;
        self::$notice->save();

    }
    public static function deleteNotice($id)
    {
        self::$notice = Notice::find($id);
        if (file_exists(self::$notice->image))
        {
            unlink(self::$notice->image);
        }
        self::$notice->delete();
    }
}
