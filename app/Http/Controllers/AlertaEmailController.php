<?php

namespace App\Http\Controllers;

use App\Repositories\AlertaEmailRepositoryEloquent;
use ErpNET\Models\v1\Controllers\ResourceController;

class AlertaEmailController extends ResourceController
{
    protected $routeName = 'alerta';
    protected $repositoryClass = AlertaEmailRepositoryEloquent::class;
//    protected $serviceClass = PartnerService::class;
//    protected $validatorClass = PartnerValidator::class;

    protected $paginateItemCount=3;

    protected $defaultCriterias = [
//        PartnerActiveCriteria::class,
    ];

}
