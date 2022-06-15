<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $event_id
 * @property string $name
 * @property string $id_card
 * @property integer $gender
 * @property string $phone
 * @property string $email
 * @property string $addr
 * @property string $line_id
 * @property string $emer_name
 * @property string $emer_phone
 * @property string $headshot
 * @property string $id_card_img_front
 * @property string $id_card_img_reverse
 * @property integer $plus1
 * @property integer $plus2
 * @property integer $plus3
 * @property integer $plus4
 */
class SignUp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sign_up_lists';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'event_id', 'name', 'id_card', 'gender', 'phone', 'email', 'addr', 'line_id', 'emer_name', 'emer_phone',  'plus1', 'plus2', 'plus3', 'plus4','user_id'];

    
}
