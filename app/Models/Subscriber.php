<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    public static $subscriber;


    public static function create($request){
        self::$subscriber = new Subscriber();              //Created object from Subscriber model class

        self::$subscriber->name = $request->name;          //First name is database column name, 2nd is from request , Form Input
        self::$subscriber->email = $request->email;        //First email is database column email, 2nd is from request , Form Input
        self::$subscriber->mobile = $request->mobile;      //First mobile is database column mobile, 2nd is from request , Form Input
        self::$subscriber->message = $request->message;    //First message is database column message, 2nd is from request , Form Input
        self::$subscriber->save();
    }

    public static function updatesub($request,$id){
        self::$subscriber= Subscriber::find($id);          //using edit which subscriber is in edit mode that is matching with existing database subscriber

        self::$subscriber->name = $request->name;          //First name is database column name, 2nd is from request , Form Input
        self::$subscriber->email = $request->email;        //First email is database column email, 2nd is from request , Form Input
        self::$subscriber->mobile = $request->mobile;      //First mobile is database column mobile, 2nd is from request , Form Input
        self::$subscriber->message = $request->message;    //First message is database column message, 2nd is from request , Form Input
        self::$subscriber->status = $request->status;  
        self::$subscriber->save();
    }

    public static function deletesub($id)
    {
        self::$subscriber = Subscriber::find($id);

        self::$subscriber->delete();
    }
}
