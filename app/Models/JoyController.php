<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class JoyController
 * @package App\Models
 * @version October 28, 2021, 8:37 pm UTC
 *
 * @property string $location
 * @property string $price
 * @property string $foods
 */
class JoyController extends Model
{

    use HasFactory;

    public $table = 'joy_resort';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'location',
        'price',
        'foods'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'string',
        'price' => 'string',
        'foods' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'location' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'foods' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
