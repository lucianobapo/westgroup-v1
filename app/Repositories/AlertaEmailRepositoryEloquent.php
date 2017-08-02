<?php

namespace App\Repositories;

use App\Entities\AlertaEmailEloquent;
use ErpNET\Models\v1\Repositories\BaseRepositoryEloquent;

/**
 * Class AlertaEmailRepositoryEloquent
 * @package namespace ErpNET\Models\v1\Repositories;
 */
class AlertaEmailRepositoryEloquent extends BaseRepositoryEloquent
{
    protected $modelClass = AlertaEmailEloquent::class;
//    protected $validatorClass = PartnerValidator::class;
//    protected $presenterClass = PartnerPresenter::class;

    protected $fieldSearchable = [
//        'nome'=>'like',
    ];


}
