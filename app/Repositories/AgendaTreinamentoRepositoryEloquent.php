<?php

namespace App\Repositories;

use App\Entities\AgendaTreinamentoEloquent;
use ErpNET\Models\v1\Repositories\BaseRepositoryEloquent;

/**
 * Class AgendaTreinamentoRepositoryEloquent
 * @package namespace ErpNET\Models\v1\Repositories;
 */
class AgendaTreinamentoRepositoryEloquent extends BaseRepositoryEloquent
{
    protected $modelClass = AgendaTreinamentoEloquent::class;

    protected $fieldSearchable = [
//        'nome'=>'like',
    ];


}
