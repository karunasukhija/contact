<?php

namespace rano\contact\models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $fillable = [
       'user',
       'email',
       'mobile',
       'msg'
   ];
}
