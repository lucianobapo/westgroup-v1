<?php

return [
    'forceProductStockCache'=>true,
    'tables' => [
        /*
         * Config example
         *
         * 'table_name' => [
         *  'bindInterface' => 'ExampleInterface',
         *  'bindRepository' => 'ExampleRepository',
         *  'routeController' => 'ExampleController',
         *  'routeLinkName' => 'Example',
         *  'routePrefix' => 'example',
         *  'fields' => [
         *      'field1',
         *      'field2',
         *   ],
         * ],
         */
        'agenda_treinamento' => [
            'routeLinkName' => 'Agenda de Treinamento',
            'routePrefix' => 'agendaTreinamento',
            'fields' => [
                'id',
                'nome'=>[
                    'displayName'=>'Nome do Funcionário'
                ],
                'data'=>[
                    'displayName'=>'Data do Treinamento'
                ],
                'empresa'=>[
                    'displayName'=>'Empresa de Treinamento'
                ],
                'transporte'=>[
                    'displayName'=>'Transporte'
                ],
                'nome_transporte'=>[
                    'displayName'=>'Nome da Empresa de Transporte'
                ],
                'hotel'=>[
                    'displayName'=>'Hotel'
                ],
                'nome_hotel'=>[
                    'displayName'=>'Nome do Hotel'
                ],
                'curso1'=>[
                    'displayName'=>'Curso 1'
                ],
                'curso1_data'=>[
                    'displayName'=>'Curso 1 - Data'
                ],
                'curso1_duração'=>[
                    'displayName'=>'Curso 1 - Duração'
                ],
                'curso1_nome_sala'=>[
                    'displayName'=>'Curso 1 - Nome da Sala'
                ],
                'curso1_instrutor'=>[
                    'displayName'=>'Curso 1 - Instrutor'
                ],

                'curso2'=>[
                    'displayName'=>'Curso 2'
                ],
                'curso2_data'=>[
                    'displayName'=>'Curso 2 - Data'
                ],
                'curso2_duração'=>[
                    'displayName'=>'Curso 2 - Duração'
                ],
                'curso2_nome_sala'=>[
                    'displayName'=>'Curso 2 - Nome da Sala'
                ],
                'curso2_instrutor'=>[
                    'displayName'=>'Curso 2 - Instrutor'
                ],

                'curso3'=>[
                    'displayName'=>'Curso 3'
                ],
                'curso3_data'=>[
                    'displayName'=>'Curso 2 - Data'
                ],
                'curso3_duração'=>[
                    'displayName'=>'Curso 3 - Duração'
                ],
                'curso3_nome_sala'=>[
                    'displayName'=>'Curso 3 - Nome da Sala'
                ],
                'curso3_instrutor'=>[
                    'displayName'=>'Curso 3 - Instrutor'
                ],
            ],
        ],
        'sala_aula' => [
            'routeLinkName' => 'Sala de Aula',
            'fields' => [
                'id',
                'local',
                'capacidade',
            ],
        ],
        'instrutor' => [
            'fields' => [
                'id',
                'nome',
                'funcao'=>[
                    'displayName'=>'Função'
                ],
                'idiomas',
            ],
        ],
        'gestao' => [
            'routeLinkName' => 'Gestão de Curso / Treinamento',
            'fields' => [
                'id',
                'nome'=>[
                    'displayName'=>'Nome do Aluno'
                ],
                'curso'=>[
                    'displayName'=>'Curso',
                ],
                'tipo'=>[
                    'displayName'=>'Tipo'
                ],
                'periodo'=>[
                    'displayName'=>'Período'
                ],
                'duracao'=>[
                    'displayName'=>'Duração'
                ],
                'validade'=>[
                    'displayName'=>'Expiration'
                ],
                'status'=>[
                    'displayName'=>'Status'
                ],
                'nota_teorica'=>[
                    'displayName'=>'Nota Teórica'
                ],
                'nota_pratica'=>[
                    'displayName'=>'Nota Prática'
                ],
                'certificado'=>[
                    'displayName'=>'Certificado',
                    'formInputType'=>'file'
                ],
            ],
        ],
        'curso_externo' => [
            'routeLinkName' => 'Curso Externo',
            'routePrefix' => 'cursoExterno',
            'fields' => [
                'id',
                'nome',
                'carga_horaria'=>[
                    'displayName'=>'Duration',
                ],
                'preco'=>[
                    'displayName'=>'Price',
                ],
                'empresa',
                'validade',
                'anexo',
            ],
        ],
        'curso_interno' => [
            'routeLinkName' => 'Curso Interno',
            'routePrefix' => 'cursoInterno',
            'fields' => [
                'id',
                'nome',
                'carga_horaria'=>[
                    'displayName'=>'Duration',
                ],
                'holograma',
                'validade',
                'anexo',
            ],
        ],
        'fornecedores' => [
            'fields' => [
                'id',
                'fornecedor',
                'nome'=>[
                    'displayName'=>'Nome / Razão Social',
                ],
                'cpf_cnpj'=>[
                    'displayName'=>'CPF / CNPJ',
                ],
                'fantasia',
                'insc_estadual'=>[
                    'displayName'=>'Inscrição Estadual',
                ],
                'insc_municipal'=>[
                    'displayName'=>'Inscrição Municipal',
                ],
                'endereco',
                'numero'=>[
                    'displayName'=>'Número',
                ],
                'complemento',
                'bairro',
                'cidade',
                'estado',
                'pais'=>[
                    'displayName'=>'País',
                ],
                'contato',
                'telefone',
                'celular',
                'email',
                'preco'=>[
                    'displayName'=>'Price',
                ],
            ],
        ],
        'users' => [
            'routeLinkName' => 'Gestão de Usuários',
            'routePrefix' => 'user',
            'fields' => [
                'id',
//                'mandante',
                'name',
//                'avatar',
//                'password',
//                'username',
                'email',
//                'provider',
//                'provider_id',
//                'activation_code',
//                'active',
//                'partner',
//                'providers',
            ],
        ],
//        'subscriptions' => [
//            'fields' => [
//                'user_id',
//                'name',
//                'braintree_id',
//                'braintree_plan',
//                'quantity',
//                'trial_ends_at',
//                'ends_at',
//            ],
//        ],
//        'providers' => [
//            'fields' => [
//                'mandante',
//                'provider',
//                'provider_id',
//                'user_id',
//            ],
//        ],
//        'orders' => [
////            'transformPresenter' => [
////                'id' => function(\Illuminate\Database\Eloquent\Model $model){ return (int) $model->id; },
////            ],
//            'fields' => [
//                'id' => [
//                    'header' => true,
//                    'customShow' => function ($item) {
//                        $formatter = new \NumberFormatter(config('app.locale'), \NumberFormatter::CURRENCY);
//                        $header = \Carbon\Carbon::parse($item['posted_at'])->formatLocalized('%d/%m/%Y %X');
//                        $total = 0;
//                        foreach ($item['orderItems'] as $orderItem) {
//                            $total = $total + ($orderItem['quantidade'] * $orderItem['valor_unitario']);
//                        }
//                        $header = $header . ' ' . t('Total') . ': ' . $formatter->format($total);
//
//                        return $header;
//                    },
//                ],
//                'mandante',
//                'currency_id' => [
////                    'label' => t('Partner'),
//                    'customShow' => function ($item) {
//                        return $item['sharedCurrency']['nome_universal'].' - '.$item['sharedCurrency']['descricao'];
//                    },
//                ],
//                'type_id' => [
////                    'label' => t('Partner'),
//                    'customShow' => function ($item) {
//                        return $item['sharedOrderType']['descricao'];
//                    },
//                ],
//                'payment_id' => [
////                    'label' => t('Partner'),
//                    'customShow' => function ($item) {
//                        return $item['sharedOrderPayment']['descricao'];
//                    },
//                ],
//                'partner_id' => [
////                    'label' => t('Partner'),
//                    'customShow' => function ($item) {
//                        return $item['partner']['nome'];
//                    },
//                ],
//                'address_id' => [
////                    'label' => t('Address'),
//                    'customShow' => function ($item) {
//                        $address = $item['address']['cep'] . ' - ' . $item['address']['logradouro'] . ', ' . $item['address']['numero'];
//
//                        if (!empty($item['address']['complemento']))
//                            $address = $address . ' - ' . $item['address']['complemento'];
//
//                        if (!empty($item['address']['obs']))
//                            $address = $address . ' (' . $item['address']['obs'] . ')';
//                        return $address;
//                    },
//                ],
//                'posted_at',
//                'orderSharedStats' => [
////                    'label' => t('Status'),
//                    'customShow' => function ($item) {
//                        if (count($item['orderSharedStats']) > 0) {
//                            $line = '';
//                            foreach ($item['orderSharedStats'] as $orderSharedStat) {
//                                $line = $line . $orderSharedStat['descricao'] . ', ';
//                            }
//                            return substr($line, 0, -2);
//                        } else
//                            return t('No Status');
//                    },
//                ],
//                'orderItems' => [
////                    'label' => t('Items'),
//                    'customShow' => function ($item) {
//                        if (count($item['orderItems']) > 0) {
//                            $formatter = new NumberFormatter(config('app.locale'), NumberFormatter::CURRENCY);
//                            $line = '';
//                            $total = 0;
//                            foreach ($item['orderItems'] as $orderItem) {
//                                $total = $total + ($orderItem['quantidade'] * $orderItem['valor_unitario']);
//                                $line = $line . '<li>' . $orderItem['product']['nome'] . ' - ' . $orderItem['quantidade'] . 'x ' . $formatter->format($orderItem['valor_unitario']) . '</li>';
//                            }
////                        $line = $line . '<li>'. t('Total') . ': ' . $formatter->format($total) . '</li>';
//                            return '(' . t('Total') . ': <strong>' . $formatter->format($total) . '</strong>)<ul>' . $line . '</ul>';
//                        } else
//                            return t('No Items');
//                    },
//                ],
//                'observacao',
//            ],
//        ],
//        'mandantes' => [
//            'fields' => [
//                'mandante',
//            ],
//        ],
        'partners' => [
            'routeLinkName' => 'Funcionários',
            'routePrefix' => 'partner',
            'fields' => [
//                'id' => [
//                    'header' => true,
//                    'customShow' => function ($item) {
//                        return $item['nome'];
//                    },
//                ],
//                'mandante',
                'id',
                'nome'=>[
                    'displayName'=>'Name'
                ],
                'data_nascimento'=>[
                    'displayName'=>'Birth date'
                ],
                'admissao'=>[
                    'displayName'=>'Data de Admissão'
                ],
                'cpf',
                'identidade',
                'passaporte',
                'matricula'=>[
                    'displayName'=>'Matrícula'
                ],
                'endereco'=>[
                    'displayName'=>'Endereço'
                ],
                'numero'=>[
                    'displayName'=>'Número'
                ],
                'complemento',
                'bairro',
                'cidade',
                'estado',
                'pais'=>[
                    'displayName'=>'País'
                ],
                'gerencia'=>[
                    'displayName'=>'Gerência'
                ],
                'unidade',
                'departamento',
                'funcao'=>[
                    'displayName'=>'Função'
                ],
                'telefone1'=>[
                    'displayName'=>'Telefone 1'
                ],
                'telefone2'=>[
                    'displayName'=>'Telefone 2'
                ],
                'email',
//                'partnerSharedStats' => [
////                    'label' => t('Status'),
//                    'customShow' => function ($item) {
//                        if (count($item['partnerSharedStats']) > 0) {
//                            $line = '';
//                            foreach ($item['partnerSharedStats'] as $sharedStat) {
//                                $line = $line . $sharedStat['descricao'] . ', ';
//                            }
//                            return substr($line, 0, -2);
//                        } else
//                            return t('No Status');
//                    },
//                ],
            ],
        ],

        'alerta_email' => [
            'routeLinkName' => 'Alertas de Email',
            'routePrefix' => 'alerta',
            'fields' => [
                'id',
                'email',
                'data',
                'mensagem',
            ],
        ],

        'partner_shared_stat' => [
            'tabDisplay'=>false,
        ],
        'product_groups' => [
            'tabDisplay' => false,
            'routeLinkName' => 'Product Groups',
            'fields' => [
                'mandante',
                'grupo',
                'icone',
            ],
        ],
        'product_shared_stat' => [
            'tabDisplay' => false,
        ],
        'products' => [
            'tabDisplay' => false,
//            'transformPresenter' => [
//                'id' => function(\Illuminate\Database\Eloquent\Model $model){ return (int) $model->id; },
//                'nome' => function(\Illuminate\Database\Eloquent\Model $model){ return $model->nome; },
//            ],
            'fields' => [
                'id' => [
                    'header' => true,
                    'customShow' => function ($item) {
                        return $item['nome'];
                    },
                ],
                'mandante',
                'nome',
            ],
        ],
        'addresses' => [
            'tabDisplay' => false,
            'fields' => [
                'mandante',
                'cep',
                'logradouro',
                'numero',
                'complemento',
                'bairro',
            ],
        ],
        'contacts' => [
            'tabDisplay' => false,
            'fields' => [
                'partner_id',
                'mandante',
                'contact_type',
                'contact_data',
            ],
        ],
        'attachments' => [
            'tabDisplay' => false,
            'fields' => [
                'order_id',
                'mandante',
                'file',
            ],
        ],
        'item_orders' => [
            'tabDisplay' => false,
            'fields' => [
                'mandante',
                'quantidade',
                'valor_unitario',
                'cost_id',
                'product_id',
            ],
        ],
        'shared_stats' => [
            'tabDisplay' => false,
            'fields' => [
                'status',
                'descricao',
            ],
        ],
        'shared_order_types' => [
            'tabDisplay' => false,
            'fields' => [
                'tipo',
                'descricao',
            ],
        ],
        'shared_order_payments' => [
            'tabDisplay' => false,
            'fields' => [
                'pagamento',
                'descricao',
            ],
        ],
        'shared_currencies' => [
            'tabDisplay' => false,
            'fields' => [
                'nome_universal',
                'descricao',
            ],
        ],
//        'pages' => [
//            'fields' => [
//                'ordem',
//                'rota',
//                'nome',
//                'h1',
//                'h2',
//                'view',
//                'conteudo',
//            ],
//        ],
        'sessions' => [
            'tabDisplay' => false,
            'fields' => [
                'user_id',
                'ip_address',
                'user_agent',
                'payload',
                'last_activity',
            ],
        ],
        'cache' => [
            'tabDisplay' => false,
            'fields' => [
                'key',
                'value',
                'expiration',
            ],
        ],
//        'posts' => [
////            'transformPresenter' => [
////                'id' => function(\Illuminate\Database\Eloquent\Model $model){ return (int) $model->id; },
////            ],
//            'fields' => [
//                'mandante' => ['value' => 'testesdivertidos'],
//                'title'=> ['customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return link_to_route('post.show', $item['title'], [$item], ['title'=>'Abrir '.$item['title']]); }],
//                'titleSlug',
//                'description',
//                'hint',
//                'paramName'=>['component' => 'widgetCheckbox', 'value' => '1', 'label' => 'Mostrar Nome do Perfil'],
//                'paramFirstName'=>['component' => 'widgetCheckbox', 'value' => '1', 'label' => 'Mostrar Somente Primeiro Nome do Perfil'],
//                'paramNameSize'=>['attributes' => ['placeholder' => 'ex.: 10'], 'label' => 'Tamanho do Nome do Perfil'],
//                'paramNameColor'=>['attributes' => ['placeholder' => 'ex.: FFFFFF'], 'label' => 'Cor do Nome do Perfil'],
//                'paramNameX'=>['attributes' => ['placeholder' => 'ex.: 270'], 'label' => 'Posição X do Nome do Perfil'],
//                'paramNameY'=>['attributes' => ['placeholder' => 'ex.: 230'], 'label' => 'Posição Y do Nome do Perfil'],
//                'paramProfileImageSize'=>['attributes' => ['placeholder' => 'ex.: 116x116'], 'label' => 'Tamanho da Imagem do Perfil'],
//                'paramProfileImageX'=>['attributes' => ['placeholder' => 'ex.: 10'], 'label' => 'Posição X da Imagem do Perfil'],
//                'paramProfileImageY'=>['attributes' => ['placeholder' => 'ex.: 20'], 'label' => 'Posição Y da Imagem do Perfil'],
//                'file'=>['component' => 'widgetFile', 'label' => 'Imagem Antes do Teste', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file'); }],
//                'file1' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 1', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file1'); }],
//                'file2' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 2', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file2'); }],
//                'file3' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 3', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file3'); }],
//                'file4' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 4', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file4'); }],
//                'file5' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 5', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file5'); }],
//                'file6' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 6', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file6'); }],
//                'file7' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 7', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file7'); }],
//                'file8' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 8', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file8'); }],
//                'file9' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 9', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file9'); }],
//                'file10' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 10', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file10'); }],
//                'file11' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 11', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file11'); }],
//                'file12' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 12', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file12'); }],
//                'file13' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 13', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file13'); }],
//                'file14' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 14', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file14'); }],
//                'file15' => ['component' => 'widgetFile', 'label' => 'Imagem Aleatória do Teste 15', 'customShow'=> function(\ErpNET\Models\v1\Entities\PostEloquent $item){ return $item->fileImageField('file15'); }],
//            ],
//
//        ],
    ],
];