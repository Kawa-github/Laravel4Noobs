<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; 

    protected $fillable = [ // fillable algum dado que pode ser preenchido
        'user_id',
        'title',
        'content',
        'published', //boolean
    ];

    protected $casts = [
        'published' => 'boolean'
    ];

    public function user(){
        return $this->belongsTo(User::class); //belongs pertence
    }

}
