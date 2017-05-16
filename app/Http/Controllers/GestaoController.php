<?php

namespace App\Http\Controllers;

use App\Repositories\GestaoRepositoryEloquent;
use ErpNET\Models\v1\Controllers\ResourceController;

class GestaoController extends ResourceController
{
    protected $routeName = 'gestao';
    protected $repositoryClass = GestaoRepositoryEloquent::class;

    protected $paginateItemCount=3;

    protected $defaultCriterias = [
//        PartnerActiveCriteria::class,
    ];

}
