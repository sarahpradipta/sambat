<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $post
 * @property string $location
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Comment[] $comments
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'post', 'location', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
