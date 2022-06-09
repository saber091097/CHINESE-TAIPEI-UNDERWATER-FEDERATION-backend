<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $eventimg_type
 * @property string $eventimg_name
 */
class EventImg_List extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eventimg_lists';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'eventimg_type', 'eventimg_name'];

    public function eventimg(){
        return $this->hasMany(EventImg::class,'event_id','id');
    }
}
