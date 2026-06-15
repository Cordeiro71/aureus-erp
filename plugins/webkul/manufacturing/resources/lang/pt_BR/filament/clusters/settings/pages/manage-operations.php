<?php

return [
    'title' => 'Manage Operações',

    'form' => [
        'enable-work-orders' => [
            'label'       => 'Ordens de trabalho',
            'helper-text' => 'Execute operações at designated centros de trabalho.',
            'link-text'   => 'Configure centros de trabalho',
        ],

        'enable-work-order-dependencies' => [
            'label'       => 'Ordem de trabalho Dependências',
            'helper-text' => 'Set the sequence in which ordens de trabalho should be processado. Ativar este feature de the Miscellaneous aba de each Ldm.',
        ],

        'enable-byproducts' => [
            'label'       => 'Byproducts',
            'helper-text' => 'Gerar por-produtos durante produção (A + B → C + D).',
        ],
    ],
];
