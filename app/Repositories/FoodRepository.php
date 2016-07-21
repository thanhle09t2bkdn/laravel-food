<?php

namespace App\Repositories;

use App\Models\Food;
use InfyOm\Generator\Common\BaseRepository;

class FoodRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image',
        'category_id',
        'content',
        'author'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Food::class;
    }
}
