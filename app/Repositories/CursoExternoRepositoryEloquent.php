<?php

namespace App\Repositories;

use App\Entities\CursoExternoEloquent;
use ErpNET\Models\v1\Repositories\BaseRepositoryEloquent;

/**
 * Class CursoExternoRepositoryEloquent
 * @package namespace ErpNET\Models\v1\Repositories;
 */
class CursoExternoRepositoryEloquent extends BaseRepositoryEloquent
{
    protected $modelClass = CursoExternoEloquent::class;

    protected $fieldSearchable = [
//        'nome'=>'like',
    ];


}
