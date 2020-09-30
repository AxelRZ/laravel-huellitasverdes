<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = 'news';

    protected $fillable = ['id','title','subtitle','relevance','body','image','bgcolor','fgcolor','body_raw','last_editor'];
    

    
}
