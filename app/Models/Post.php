<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'content', 'image', 'source', 'link_source','user_id', 'category_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function rules(){
        return [
            'title' => 'required',
            'description' => 'required',
            'source' => 'required',
            'link_source' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'category' => 'required',
        ];
    }

    public static function feedback(){
        return [
            'required' => 'Você precisa preencher esse campo!',

        ];
    }
}
