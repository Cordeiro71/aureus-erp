<?php

return [
    'tooltip' => 'Filtros',

    'fields'  => [
        'search'             => 'Buscar',
        'search-placeholder' => 'Buscar mensagens...',
        'type'               => 'Tipo',
        'date'               => 'Data',
        'sort-by'            => 'Ordenar por',
        'pinned-only'        => 'Pinned only',
    ],
    'type-options' => [
        'all'          => 'Todos os tipos',
        'note'         => 'Notas',
        'comment'      => 'Comentários',
        'notification' => 'Notificações',
        'activity'     => 'Atividades',
    ],
    'date-options' => [
        ''          => 'A qualquer momento',
        'today'     => 'Hoje',
        'yesterday' => 'Ontem',
        'week'      => 'Último 7 dias',
        'month'     => 'Último 30 dias',
        'quarter'   => 'Último 3 meses',
        'year'      => 'Último ano',
    ],
    'sort-options' => [
        'created_at_desc' => 'Newest primeiro',
        'created_at_asc'  => 'Oldest primeiro',
        'updated_at_desc' => 'Recently atualizado',
        'priority'        => 'Prioridade',
    ],
    'actions' => [
        'apply' => 'Aplicar filtros',
    ],
];
