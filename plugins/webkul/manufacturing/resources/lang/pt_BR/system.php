<?php

return [
    'manufacturing-manager' => [
        'unplan-order' => [
            'work-orders-already-done'    => "Some ordens de trabalho are already concluído, so you cannot un-plan este manufatura pedido.\\n\\nIt'd be a shame para waste todos aquele progresso, direita?",
            'work-orders-already-started' => "Some ordens de trabalho have already started, so you cannot un-plan este manufatura pedido.\\n\\nIt'd be a shame para waste todos aquele progresso, direita?",
        ],
    ],

    'work-center-productivity-log' => [
        'time-tracking'                    => 'Hora Tracking: :nome',
        'no-performance-productivity-loss' => "You need para define at least one un arquivar productivity loss in the categoria 'Performance'. Criar de configuração configurações.",
    ],

    'work-center' => [
        'already-unblocked' => 'It has already been unblocked.',
    ],

    'work-order' => [
        'unblock-work-center'        => 'Please unblock the centro de trabalho para iniciar the ordem de trabalho.',
        'already-done-or-cancelled'  => 'You cannot iniciar a ordem de trabalho aquele is already concluído ou cancelado',
        'no-calendar-on-work-center' => 'There is não defined calendário ligado centro de trabalho :nome.',
        'no-productivity-loss'       => "You need para define at least one productivity loss in the categoria 'Productivity'. Criar Configuração configurações.",
        'no-performance-loss'        => "You need para define at least one productivity loss in the categoria 'Performance'. Criar Configuração configurações.",
        'impossible-to-plan'         => 'Impossible para plan the ordem de trabalho. Please check the centro de trabalho availabilities.',
    ],

    'order' => [
        'product-in-byproducts'                    => 'You cannot have :produto as the finished produto e in the Byproducts',
        'missing-lot-serial-number'                => 'You need para supply Lote/Número de série para produtos e "consume" them: :missing_products',
        'serial-number-already-produced'           => 'Este número de série para produto :produto has already been produced',
        'byproduct-serial-number-already-produced' => 'The número de série :number used para byproduct :produto has already been produced',
        'component-serial-number-consumed'         => 'The número de série :number used para component :component has already been consumed',
        'components-availability'                  => [
            'available'     => 'Disponível',
            'not-available' => 'Não Disponível',
            'expected'      => 'Expected :data',
        ],
    ],
];
