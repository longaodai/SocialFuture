<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'slug', 'tag', 'icon', 'description', 'active'];

    public function setSlugAttribute($slug)
{
    $this->attributes['slug'] = Str::slug($slug, '-');
}
}
