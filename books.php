<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['tittle'];
    public function author()
    {
        return $this->belongsToMany(authors::class,'book_author','author_id','book_id');

    }
}
