<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'description', 'cover_image', 'content','tecnologies', 'git_link', 'categories','link'];


    /**
     * Get all the category that Project
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo;
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function tecnologies(): BelongsToMany
    {
        return $this->belongsToMany(Tecnology::class);
    }
}




