<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $table = "phones";

    //public static string $length;
    public static string $number1;
    //public static string $number2;

    public function author(){
        return $this->belongsTo('App\Models\Author');
    }

 
}
