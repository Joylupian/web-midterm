<?php

namespace App\Repositories;

use App\Models\JoyController;
use App\Repositories\BaseRepository;

/**
 * Class JoyControllerRepository
 * @package App\Repositories
 * @version October 28, 2021, 8:37 pm UTC
*/

class JoyControllerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'location',
        'price',
        'foods'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JoyController::class;
    }
}
