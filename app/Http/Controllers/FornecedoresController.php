<?php

namespace App\Http\Controllers;

use App\Repositories\FornecedoresRepositoryEloquent;
use ErpNET\Models\v1\Controllers\ResourceController;

class FornecedoresController extends ResourceController
{
    protected $routeName = 'fornecedores';
    protected $repositoryClass = FornecedoresRepositoryEloquent::class;

    protected $paginateItemCount=3;

    protected $defaultCriterias = [
//        PartnerActiveCriteria::class,
    ];

}
