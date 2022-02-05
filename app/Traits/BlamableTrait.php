<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait BlamableTrait
{
    public static function bootBlamableTrait()
    {

        static::creating(function (Model $model){

            if(Auth::check()){
                $user = Auth::id();
            }else{
                $user = 1;
            }

            $model->created_by = $user;
            $model->updated_by = 0;
        });

        static::updating(function (Model $model) {

            if(Auth::check()){
                $user = Auth::id();
            }else{
                $user = 1;
            }

            $model->updated_by = $user;

        });

        static::deleting(function (Model $model) {

            if(Auth::check()){
                $user = Auth::id();
            }else{
                $user = 1;
            }

            $model->updated_by = $user;

        });
    }
}
