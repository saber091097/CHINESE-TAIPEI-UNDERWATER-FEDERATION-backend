<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $img_path
 * @property string $event_id
 */
class EventImg extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'img_paths';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'img_path', 'event_id','event_type'];

    public function event(){
        return $this->belongto(EventImg::class,'id','event_id');
    }

}
