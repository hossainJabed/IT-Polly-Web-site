<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    private static $member,$image,$imageName,$imageUrl,$directory,$extension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'member-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newMember($request)
    {
        self::$member = new Member();
        self::$member->name           = $request->name;
        self::$member->company     = $request->company;
        self::$member->address           = $request->address;
        self::$member->mobile           = $request->mobile;
        self::$member->description           = $request->description;
        self::$member->image       =self::getImageUrl($request);
        self::$member->save();
    }
    public static function updateMember($request ,$id)
    {
        self::$member = self::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$member->image))
            {
                unlink(self::$member->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$member->image;
        }
        self::$member->name = $request->name;
        self::$member->company = $request->company;
        self::$member->address = $request->address;
        self::$member->mobile = $request->mobile;
        self::$member->description = $request->description;
        self::$member->image = self::$imageUrl;
        self::$member->save();

    }
    public static function deleteMember($id)
    {
        self::$member = Member::find($id);
        if (file_exists(self::$member->image))
        {
            unlink(self::$member->image);
        }
        self::$member->delete();
    }
}
