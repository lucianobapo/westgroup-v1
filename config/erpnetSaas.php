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
    'gestao' => [
        'key' => 'gestao',
        'icon' => 'fa fa-fw fa-file',
        'name' => 'Gestão de Curso / Treinamento',
        'apiUrl' => 'gestao',
        'columns' => [
            [ 'name' => 'id',  'displayName' => 'Id',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'nome', 'displayName' => 'Nome do Aluno',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'curso  ', 'displayName' => 'Curso / Treinamento',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'tipo', 'displayName' => 'Curso Interno ou Externo',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],

            [ 'name' => 'periodo', 'displayName' => 'Período – Início / Fim',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'duracao', 'displayName' => 'Duração do Curso',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'validade', 'displayName' => 'Validade',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'status', 'displayName' => 'Status – Aprovado ou Reprovado',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'nota_teorica', 'displayName' => 'Nota Teórica',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'nota_pratica', 'displayName' => 'Nota Prática',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'certificado', 'displayName' => 'Upload do Certificado',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
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
            ],
            [ 'name' => 'nome', 'displayName' => 'Name',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'carga_horaria', 'displayName' => 'Duration',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'holograma', 'displayName' => 'Hologram',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],

            [ 'name' => 'validade', 'displayName' => 'Expiration',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'anexo', 'displayName' => 'Attach',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],

        ],
    ],
    'externalCourse' => [
        'key' => 'externalCourse',
        'icon' => 'fa fa-fw fa-file',
        'name' => 'Curso Externo',
        'apiUrl' => 'cursoExterno',
        'columns' => [
            [ 'name' => 'id',  'displayName' => 'Id',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'nome', 'displayName' => 'Name',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'carga_horaria', 'displayName' => 'Duration',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'preco', 'displayName' => 'Price',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'empresa', 'displayName' => 'Vendor',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],

            [ 'name' => 'validade', 'displayName' => 'Expiration',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
            ],
            [ 'name' => 'anexo', 'displayName' => 'Attach',
                'formInputType' => 'text',
                'formInputPlaceholder' => '',
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