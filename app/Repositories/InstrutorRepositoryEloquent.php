<?php

namespace App\Repositories;

use App\Entities\InstrutorEloquent;
use ErpNET\Models\v1\Repositories\BaseRepositoryEloquent;

/**
 * Class InstrutorRepositoryEloquent
 * @package namespace ErpNET\Models\v1\Repositories;
 */
class InstrutorRepositoryEloquent extends BaseRepositoryEloquent
{
    protected $modelClass = InstrutorEloquent::class;

    protected $fieldSearchable = [
//        'nome'=>'like',
    ];


}
