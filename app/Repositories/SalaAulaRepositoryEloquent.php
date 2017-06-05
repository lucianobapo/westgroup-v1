<?php

namespace App\Repositories;

use App\Entities\SalaAulaEloquent;
use ErpNET\Models\v1\Repositories\BaseRepositoryEloquent;

/**
 * Class SalaAulaRepositoryEloquent
 * @package namespace ErpNET\Models\v1\Repositories;
 */
class SalaAulaRepositoryEloquent extends BaseRepositoryEloquent
{
    protected $modelClass = SalaAulaEloquent::class;

    protected $fieldSearchable = [
//        'nome'=>'like',
    ];


}
