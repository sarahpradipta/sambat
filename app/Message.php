<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id_a
 * @property int $user_id_b
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property User $user
 */
class Message extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id_a', 'user_id_b', 'message', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id_a');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id_b');
    }
}
