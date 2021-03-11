<?php

namespace App\Models;

use App\Scopes\CareerJobScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'job_id',
        'message',
        'resume',
        'phone'
    ];

    /**
     * The "booting" method of the model.
     */
    protected static function boot(): void
    {
        parent::boot();
        static::addGlobalScope(new CareerJobScope());
    }

    /**
     * Return the post's author
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Return the post's author
     */
    public function careerJob(): BelongsTo
    {
        return $this->belongsTo(CareerJob::class, 'job_id');
    }
}
