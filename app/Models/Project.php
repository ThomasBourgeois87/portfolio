<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function scopeVisibility($query)
    {
        return $query->where('visible', '=', true)->orderBy('position', 'asc');
    }
    

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function whereMade()
    {
        return $this->belongsTo(WhereMade::class, 'where_made_id');
    }
    

    public function projectArticleSection()
    {
        return $this->hasMany(ProjectArticleSection::class, 'project_id')->orderBy('position', 'asc');
    }
}
