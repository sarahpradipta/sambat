<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $post_id
 * @property string $comment
 * @property string $created_at
 * @property User $user
 * @property Post $post
 */
class Comment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'post_id', 'comment', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
