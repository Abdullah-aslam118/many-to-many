<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class authors extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['name'];
    public function book()
    {
        return $this->belongsToMany(books::class,'book_author','book_id','author_id');

    }
}
