<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App_Entity_Lista' => 0,
'App_Entity_Tarefa' => 1,
'App_Entity_Usuario' => 2,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\Serializer\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Serializer\\Mapping\\ClassMetadata')),
            clone ($p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata')),
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Lista',
                    'id',
                    'nome',
                    'usuario',
                    'tarefas',
                    'usuariosCompartilhados',
                ],
                'attributesMetadata' => [
                    [
                        'id' => $o[1],
                        'nome' => $o[2],
                        'usuario' => $o[3],
                        'tarefas' => $o[4],
                        'usuariosCompartilhados' => $o[5],
                    ],
                ],
                'groups' => [
                    1 => [
                        'lista:read',
                        'usuario:read',
                    ],
                    [
                        'lista:read',
                        'usuario:read',
                    ],
                    [
                        'lista:read',
                    ],
                    [
                        'lista:read',
                    ],
                    [
                        'lista:read',
                    ],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\Serializer\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Serializer\\Mapping\\ClassMetadata')),
            clone ($p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata')),
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Tarefa',
                    'id',
                    'descricao',
                    'concluida',
                    'dataCriacao',
                    'dataConclusao',
                    'lista',
                ],
                'attributesMetadata' => [
                    [
                        'id' => $o[1],
                        'descricao' => $o[2],
                        'concluida' => $o[3],
                        'dataCriacao' => $o[4],
                        'dataConclusao' => $o[5],
                        'lista' => $o[6],
                    ],
                ],
                'groups' => [
                    1 => [
                        'tarefa:read',
                        'lista:read',
                    ],
                    [
                        'tarefa:read',
                        'lista:read',
                    ],
                    [
                        'tarefa:read',
                        'lista:read',
                    ],
                    [
                        'tarefa:read',
                        'lista:read',
                    ],
                    [
                        'tarefa:read',
                        'lista:read',
                    ],
                    [
                        'tarefa:read',
                    ],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\Serializer\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Serializer\\Mapping\\ClassMetadata')),
            clone ($p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata')),
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
            clone $p['Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata'],
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Usuario',
                    'id',
                    'email',
                    'roles',
                    'password',
                    'listas',
                    'listasCompartilhadas',
                    'userIdentifier',
                ],
                'attributesMetadata' => [
                    [
                        'id' => $o[1],
                        'email' => $o[2],
                        'roles' => $o[3],
                        'password' => $o[4],
                        'listas' => $o[5],
                        'listasCompartilhadas' => $o[6],
                        'userIdentifier' => $o[7],
                    ],
                ],
                'groups' => [
                    1 => [
                        'usuario:read',
                    ],
                    [
                        'usuario:read',
                    ],
                    [
                        'usuario:read',
                    ],
                    5 => [
                        'usuario:read',
                    ],
                    [
                        'usuario:read',
                    ],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
