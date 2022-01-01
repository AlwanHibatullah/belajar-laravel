<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'excerpt',
    //     'body'
    // ];
    protected $guarded = ['id'];

    public function category()
    {
        // satu post mempunyai satu kategori (One-to-One)
        return $this->belongsTo(Category::class);
    }
}
