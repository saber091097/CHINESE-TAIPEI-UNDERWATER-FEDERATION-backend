<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $headshot
 * @property integer $user_id
 */
class HeadShot extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'headshots';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'headshot', 'user_id'];
}
