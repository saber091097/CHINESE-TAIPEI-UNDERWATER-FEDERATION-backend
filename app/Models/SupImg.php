<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $supimg
 */
class SupImg extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'index_sup_imgs';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'supimg'];
}
