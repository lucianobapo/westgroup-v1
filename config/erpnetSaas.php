<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 07/05/17
 * Time: 19:51
 */

return [
    'bindInterfaces' => [
        \ErpNET\Saas\v1\Contracts\Repositories\UserRepository::class=>\ErpNET\Saas\v1\Repositories\UserRepository::class,
        \ErpNET\Saas\v1\Contracts\Repositories\TeamRepository::class=>\ErpNET\Saas\v1\Repositories\TeamRepository::class,
    ],

    'defaultLocale' => env('APP_LOCALE', 'pt_BR'),
    'appName' => env('APP_NAME', 'Laravel'),
    'defaultMandante' => 'westgroup',

    'employee' => [
        'key' => 'employee',
        'icon' => 'fa fa-fw fa-file',
        'name' => 'Funcionários',
        'apiUrl' => 'partner',
        'columns' => [
            [ 'name' => 'id',  'displayName' => 'Id',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'nome', 'displayName' => 'Name',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'data_nascimento', 'displayName' => 'Birth date',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
//        [ 'name' => 'observacao', 'displayName' => 'Note',
//            'formInputType' => 'text',
//            'formInputPlaceholder' => '',
//            'newItemModel' => '',
//            'fillItemModel' => ''
//        ],

            [ 'name' => 'admissao', 'displayName' => 'Data de Admissão',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],

            [ 'name' => 'cpf', 'displayName' => 'CPF',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'identidade', 'displayName' => 'Identidade',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'passaporte', 'displayName' => 'Passaporte',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'matricula', 'displayName' => 'Matrícula',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],

            [ 'name' => 'endereco', 'displayName' => 'Endereço',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'numero', 'displayName' => 'Número',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'complemento', 'displayName' => 'Complemento',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'bairro', 'displayName' => 'Bairro',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'cidade', 'displayName' => 'Cidade',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'estado', 'displayName' => 'Estado',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'pais', 'displayName' => 'País',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],

            [ 'name' => 'gerencia', 'displayName' => 'Gerencia',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'unidade', 'displayName' => 'Unidade',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'departamento', 'displayName' => 'Departamento',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'funcao', 'displayName' => 'Função',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'telefone1', 'displayName' => 'Telefone 1',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'telefone2', 'displayName' => 'Telefone 2',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'email', 'displayName' => 'Email',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
        ],
    ],
    'internalCourse' => [
        'key' => 'internalCourse',
        'icon' => 'fa fa-fw fa-file',
        'name' => 'Curso Interno',
        'apiUrl' => 'cursoInterno',
        'columns' => [
            [ 'name' => 'id',  'displayName' => 'Id',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'nome', 'displayName' => 'Name',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'carga_horaria', 'displayName' => 'Duration',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'holograma', 'displayName' => 'Hologram',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],

            [ 'name' => 'validade', 'displayName' => 'Expiration',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],
            [ 'name' => 'anexo', 'displayName' => 'Attach',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
                'newItemModel' => '',
                'fillItemModel' => ''
            ],

        ],
    ],
    'employeeApiUrl' => '/erpnet-api/partner',
    'employeeColumns' => [
        [ 'name' => 'id',  'displayName' => 'Id',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'nome', 'displayName' => 'Name',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'data_nascimento', 'displayName' => 'Birth date',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
//        [ 'name' => 'observacao', 'displayName' => 'Note',
//            'formInputType' => 'text',
//            'formInputPlaceholder' => '',
//            'newItemModel' => '',
//            'fillItemModel' => ''
//        ],

        [ 'name' => 'admissao', 'displayName' => 'Data de Admissão',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],

        [ 'name' => 'cpf', 'displayName' => 'CPF',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'identidade', 'displayName' => 'Identidade',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'passaporte', 'displayName' => 'Passaporte',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'matricula', 'displayName' => 'Matrícula',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],

        [ 'name' => 'endereco', 'displayName' => 'Endereço',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'numero', 'displayName' => 'Número',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'complemento', 'displayName' => 'Complemento',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'bairro', 'displayName' => 'Bairro',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'cidade', 'displayName' => 'Cidade',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'estado', 'displayName' => 'Estado',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'pais', 'displayName' => 'País',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],

        [ 'name' => 'gerencia', 'displayName' => 'Gerencia',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'unidade', 'displayName' => 'Unidade',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'departamento', 'displayName' => 'Departamento',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'funcao', 'displayName' => 'Função',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'telefone1', 'displayName' => 'Telefone 1',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'telefone2', 'displayName' => 'Telefone 2',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
        [ 'name' => 'email', 'displayName' => 'Email',
            'formInputType' => 'text',
            'formInputPlaceholder' => '',
            'newItemModel' => '',
            'fillItemModel' => ''
        ],
    ],
];