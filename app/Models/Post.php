<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'body', 'excerpt', 'slug', 'image', 'category_id', 'label_id1', 'label_id2', 'label_id3'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function label1()
    {
        return $this->belongsTo(Label::class, 'label_id1');
    }

    public function label2()
    {
        return $this->belongsTo(Label::class, 'label_id2');
    }

    public function label3()
    {
        return $this->belongsTo(Label::class, 'label_id2');
    }
}
