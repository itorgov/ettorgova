<?php

namespace App;

use App\Traits\Encryptable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $description
 * @property bool $confirmed
 * @property string $created_at
 * @property string $updated_at
 *
 * @package App
 */
class Client extends Model
{
    use Encryptable;

    protected $encryptable = ['name', 'phone'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'phone', 'description'];

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = ['name'];
}
