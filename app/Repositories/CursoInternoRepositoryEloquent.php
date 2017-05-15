<?php

namespace App\Repositories;

use App\Entities\CursoInternoEloquent;
use ErpNET\Models\v1\Repositories\BaseRepositoryEloquent;

/**
 * Class CursoInternoRepositoryEloquent
 * @package namespace ErpNET\Models\v1\Repositories;
 */
class CursoInternoRepositoryEloquent extends BaseRepositoryEloquent
{
    protected $modelClass = CursoInternoEloquent::class;
//    protected $validatorClass = PartnerValidator::class;
//    protected $presenterClass = PartnerPresenter::class;

    protected $fieldSearchable = [
//        'nome'=>'like',
    ];


}
