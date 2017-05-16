<?php

namespace App\Repositories;

use App\Entities\GestaoEloquent;
use ErpNET\Models\v1\Repositories\BaseRepositoryEloquent;

/**
 * Class GestaoRepositoryEloquent
 * @package namespace ErpNET\Models\v1\Repositories;
 */
class GestaoRepositoryEloquent extends BaseRepositoryEloquent
{
    protected $modelClass = GestaoEloquent::class;

    protected $fieldSearchable = [
//        'nome'=>'like',
    ];


}
