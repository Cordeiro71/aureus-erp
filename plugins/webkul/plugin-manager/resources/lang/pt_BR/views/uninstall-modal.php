<?php

return [

    'uninstall' => [
        'title'   => 'Desinstalação Confirmation',
        'message' => 'Tem certeza de que deseja desinstalar o plugin :name?',
        'warning' => '⚠️ Este ação cannot be undone e will permanently excluir data.',
    ],

    'dependents' => [
        'title'         => 'Dependent Plugins',
        'description'   => 'Estes plugins depend ligado este one e will also be uninstalled.',
        'installed'     => 'Installed',
        'not_installed' => 'Não Installed',
    ],

    'data_impact' => [
        'title'       => 'Data Impact',
        'description' => 'The seguinte database tabelas contain data aquele will be permanently deleted.',
        'records'     => ':contagem records',
    ],

];
