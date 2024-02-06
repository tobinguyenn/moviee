<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Enums\MovieStatus;

class Movie extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'rated_id',
        'title',
        'poster',
        'description',
        'director',
        'casts',
        'genre',
        'release_date',
        'duration',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => MovieStatus::class,
        'release_date' => 'date',
    ];

    /**
     * Scope a query to only include status
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatus($query, MovieStatus|array $status)
    {
        if (is_array($status)) {
            return $query->whereIn('status', $status);
        }

        return $query->where('status', $status);
    }

    /**
     * Get the rated that owns the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rated(): BelongsTo
    {
        return $this->belongsTo(Rated::class);
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function durationLabel(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->duration . Str::plural(__(' minute'), $this->duration)
        );
    }
}
