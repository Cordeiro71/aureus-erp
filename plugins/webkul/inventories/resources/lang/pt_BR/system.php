<?php

return [
    'inventory-manager' => [
        'check-availability' => [
            'no-moves' => 'Nothing para check the availability para.',
        ],

        'cancel-move' => [
            'already-done' => 'You cannot cancel a stock move that has been set to \'Done\'You cannot cancelar a estoque movimento aquele has been set para \'Concluído\'. Criar a return in pedido para reverse the movimentos which took place.',
        ],

        'unreserve-move' => [
            'already-done' => "You can não unreserve a estoque movimento aquele has been set para 'Concluído'.",
        ],

        'validate' => [
            'quantity-rounding-mismatch' => 'The quantity done for the product ":product" doesn\'The quantidade concluído para the produto ":produto" doesn\'t respect the rounding precisão defined ligado the unidade de medida ":unidade". Please change the quantidade concluído ou the rounding precisão de your unidade de medida.',
            'no-negative-quantities'     => 'Não negative quantidades permitido',
            'missing-lot-serial-number'  => "You need para supply a Lote/Número de série para produto:\\n:produtos",
        ],

        'run-procurement' => [
            'no-rule-found'      => "No rule has been found to replenish \":product\" in \":location\"Não regra has been found para replenish \":produto\" in \":localização\".\\nVerify the rotas configuração ligado the produto.",
            'no-source-location' => 'Não origem localização defined ligado estoque regra: :nome!',
            'no-vendor-price'    => 'There is não matching fornecedor preço para gerar the pedido de compra para produto :produto (não fornecedor defined, mínimo quantidade não reached, datas não válido, ...). Go ligado the produto formulário e complete the list de fornecedores.',
        ],

        'return' => [
            'origin' => 'Return de :operation_name',
        ],
    ],

    'move-line' => [
        'negative-quantity-not-allowed' => 'Reserving a negative quantidade is não permitido.',
    ],

    'product-quantity' => [
        'quantity-not-set'                 => 'Quantidade ou Reservado Quantidade should be set.',
        'removal-strategy-not-implemented' => 'Removal strategy :strategy não implemented.',
        'unreserve-more-than-stock'        => 'It is não possible para unreserve more produtos de :nome than you have in estoque.',
    ],

    'product' => [
        'endless-loop-rule' => "Inválido regra's configuração, the seguinte regra causes an endless loop: :nome",
    ],

    'move' => [
        'quantity-rounding-mismatch' => 'The quantity done for the product :product doesn\'The quantidade concluído para the produto :produto doesn\'t respect the rounding precisão defined ligado the unidade de medida :unidade. Please change the quantidade concluído ou the rounding precisão de your unidade de medida.',
        'split-done-or-cancel'       => 'You cannot split a stock move that has been set to \'Done\' or \'Cancel\'You cannot split a estoque movimento aquele has been set para \'Concluído\' ou \'Cancelar\'.',
        'split-draft'                => 'You cannot split a rascunho movimento. It needs para be confirmado primeiro.',
    ],

    'rule' => [
        'delay-on'     => 'Delay ligado :nome',
        'days'         => '+ :dias dia(s)',
        'time-horizon' => 'Hora Horizon',
    ],
];
