<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class era extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public static function rules(){
        return [
            'name'=>'required|string|min:3',
        ];
    }
}
