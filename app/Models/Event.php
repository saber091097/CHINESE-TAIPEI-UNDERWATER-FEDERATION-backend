<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $event_type
 * @property string $event
 * @property integer $anno_type
 * @property string $event_intr
 * @property string $event_proc
 * @property string $event_dire
 * @property string $event_notice
 * @property string $name
 * @property integer $price
 */
class Event extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'event_type', 'event', 'anno_type', 'event_intr', 'event_proc', 'event_dire', 'event_notice', 'name', 'price' , 'startdate' , 'enddate' , 'closedate' ,'link'];

    public function imgs(){
        return $this->hasMany(New_img::class,'new_id','id');
    }

    public function videos(){
        return $this->hasMany(Video::class,'event_id','id');
    }

    public function signup(){
        return $this->hasone(SignUp::class,'event_id','id');
    }

}
