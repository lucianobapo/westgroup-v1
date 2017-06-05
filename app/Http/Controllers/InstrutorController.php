<?php

namespace App\Http\Controllers;

use App\Repositories\InstrutorRepositoryEloquent;
use ErpNET\Models\v1\Controllers\ResourceController;

class InstrutorController extends ResourceController
{
    protected $routeName = 'instrutor';
    protected $repositoryClass = InstrutorRepositoryEloquent::class;

    protected $paginateItemCount=3;

    protected $defaultCriterias = [
//        PartnerActiveCriteria::class,
    ];

}
