<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $id_card_img_reverse
 * @property integer $user_id
 */
class Id_Card_Img_Reverse extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'id_card_img_reverses';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'id_card_img_reverse', 'user_id'];
}
