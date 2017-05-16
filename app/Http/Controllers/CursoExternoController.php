<?php

namespace App\Http\Controllers;

use App\Repositories\CursoExternoRepositoryEloquent;
use ErpNET\Models\v1\Controllers\ResourceController;

class CursoExternoController extends ResourceController
{
    protected $routeName = 'cursoExterno';
    protected $repositoryClass = CursoExternoRepositoryEloquent::class;

    protected $paginateItemCount=3;

    protected $defaultCriterias = [
//        PartnerActiveCriteria::class,
    ];

}
