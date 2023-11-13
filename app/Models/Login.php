<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    public static $client;
    public static function createClient($request)
    {
        self::$client = new Login();
        self::$client->fullname = $request->fullname;
        self::$client->email = $request->email;
        self::$client->password = bcrypt($request->password);
        self::$client->save();
        return self::$client;
    }
}
