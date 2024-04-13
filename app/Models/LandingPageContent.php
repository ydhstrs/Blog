<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPageContent extends Model
{
    use HasFactory;
    protected $fillable = [
    'section_number',
    'title_head',
    'desc',
    'subtitle1',
    'subtitle2',
    'subtitle3',
    'desc1',
    'desc2',
    'desc3',
    ];
    
}
