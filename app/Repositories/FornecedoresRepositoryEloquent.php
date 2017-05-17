<?php

namespace App\Repositories;

use App\Entities\FornecedoresEloquent;
use ErpNET\Models\v1\Repositories\BaseRepositoryEloquent;

/**
 * Class FornecedoresRepositoryEloquent
 * @package namespace ErpNET\Models\v1\Repositories;
 */
class FornecedoresRepositoryEloquent extends BaseRepositoryEloquent
{
    protected $modelClass = FornecedoresEloquent::class;

    protected $fieldSearchable = [
//        'nome'=>'like',
    ];


}
