<?php

namespace App\Http\Controllers;

use App\Repositories\AgendaTreinamentoRepositoryEloquent;
use ErpNET\Models\v1\Controllers\ResourceController;

class AgendaTreinamentoController extends ResourceController
{
    protected $routeName = 'agendaTreinamento';
    protected $repositoryClass = AgendaTreinamentoRepositoryEloquent::class;

    protected $paginateItemCount=3;

    protected $defaultCriterias = [
//        PartnerActiveCriteria::class,
    ];

}
