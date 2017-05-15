<?php

namespace App\Http\Controllers;

use App\Repositories\CursoInternoRepositoryEloquent;
use ErpNET\Models\v1\Controllers\ResourceController;

class CursoInternoControler extends ResourceController
{
    protected $routeName = 'cursoInterno';
    protected $repositoryClass = CursoInternoRepositoryEloquent::class;
//    protected $serviceClass = PartnerService::class;
//    protected $validatorClass = PartnerValidator::class;

    protected $paginateItemCount=3;

    protected $defaultCriterias = [
//        PartnerActiveCriteria::class,
    ];

}
