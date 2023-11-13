<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    private static $news,$image,$imageName,$imageUrl,$directory,$extension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'news-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newNews($request)
    {
        self::$news = new News();
        self::$news->type           = $request->type;
        self::$news->name     = $request->name;
        self::$news->description     = $request->description;
        self::$news->image       =self::getImageUrl($request);
        self::$news->save();
    }
    public static function updateNews($request ,$id)
    {
        self::$news = self::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$news->image))
            {
                unlink(self::$news->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$news->image;
        }
        self::$news->type = $request->type;
        self::$news->name = $request->name;
        self::$news->description = $request->description;
        self::$news->image = self::$imageUrl;
        self::$news->save();

    }
    public static function deleteNews($id)
    {
        self::$news = News::find($id);
        if (file_exists(self::$news->image))
        {
            unlink(self::$news->image);
        }
        self::$news->delete();
    }
}
