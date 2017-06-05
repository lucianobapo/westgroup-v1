<?php

namespace App\Http\Controllers;

use App\Repositories\SalaAulaRepositoryEloquent;
use ErpNET\Models\v1\Controllers\ResourceController;

class SalaAulaController extends ResourceController
{
    protected $routeName = 'sala_aula';
    protected $repositoryClass = SalaAulaRepositoryEloquent::class;

    protected $paginateItemCount=3;

    protected $defaultCriterias = [
//        PartnerActiveCriteria::class,
    ];

}
