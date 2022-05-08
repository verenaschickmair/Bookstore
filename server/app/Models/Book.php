<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['isbn', 'title', 'subtitle', 'published',
        'rating', 'description', 'user_id'];

    public function isFavorite():bool{
        return $this->rating >= 4;
    }

    public function scopeFavorite($query){
        return $query->where('rating', '>=', '4');
    }

    //hasMany Relation 1:n
    public function images() : hasMany{
        return $this->hasMany(Image::class);
    }

    //belongsTo Relation n:1
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    //belongsTo Relation n:1
    public function authors():BelongsToMany{
        return $this->belongsToMany(Author::class)->withTimeStamps();
    }
}
