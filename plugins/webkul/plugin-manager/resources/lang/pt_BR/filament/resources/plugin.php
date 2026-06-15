<?php

return [

    'navigation' => [
        'group' => 'Plugins',
    ],

    'title' => 'Plugin',

    'table' => [
        'version'             => 'Versão',
        'dependencies'        => 'Dependências',
        'dependencies_suffix' => 'dependências',
    ],

    'status' => [
        'installed'     => 'Installed',
        'not_installed' => 'Não Installed',
    ],

    'filters' => [
        'installation_status' => 'Installation Status',
        'all_plugins'         => 'Todos os plugins',
        'installed'           => 'Installed',
        'not_installed'       => 'Não Installed',
        'active_status'       => 'Status ativo',
        'author'              => 'Autor',
        'webkul'              => 'Webkul',
        'third_party'         => 'Third Party',
    ],

    'actions' => [
        'install' => [
            'title'       => 'Instalação',
            'heading'     => 'Instalação Plugin :nome',
            'description' => "Tem certeza de que deseja instalar o plugin ':name'? isso executará migrações e seeders.",
            'submit'      => 'Instalação Plugin',
        ],
        'uninstall' => [
            'title'      => 'Desinstalação',
            'heading'    => 'Desinstalação Plugin',
            'submit'     => 'Desinstalação Plugin',
        ],
    ],

    'notifications' => [
        'installed' => [
            'title' => 'Plugin Installed Successfully',
            'body'  => "The ':nome' plugin has been installed.",
        ],
        'installed-failed' => [
            'title' => 'Installation Falhou',
        ],
        'uninstalled' => [
            'title' => 'Plugin Uninstalled Successfully',
            'body'  => "The ':nome' plugin has been uninstalled.",
        ],
        'uninstalled-failed' => [
            'title' => 'Uninstallation Falhou',
        ],
    ],

    'infolist' => [
        'section'  => [
            'plugin'       => 'informações do plugin',
            'dependencies' => 'Dependências',
        ],
        'name'         => 'Plugin Nome',
        'version'      => 'Versão',
        'dependencies' => 'Obrigatório Plugins',
        'dependents'   => 'Plugins Aquele Depend Ligado Este',
        'is_installed' => 'Installation Status',
        'license'      => 'License',
        'summary'      => 'Descrição',

        'dependencies-repeater' => [
            'title'        => 'Obrigatório Plugins',
            'name'         => 'Plugin Nome',
            'is_installed' => 'Installed',
            'placeholder'  => 'Não dependências obrigatório',
        ],

        'dependents-repeater' => [
            'title'        => 'Plugins Aquele Depend Ligado Este',
            'name'         => 'Plugin Nome',
            'is_installed' => 'Installed',
            'placeholder'  => 'Não dependents',
        ],

    ],

];
