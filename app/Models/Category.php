<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static function rules()
    {
           return [
               'name' => 'required|max:50'
           ];
    }

    public static function feedback(){
        return [
          'name.required' => 'Preencha a categoria',
          'name.max' => 'A categoria deve conter até 50 caracteres'
        ];
    }
}
