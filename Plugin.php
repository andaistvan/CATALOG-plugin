<?php namespace Arteriaweb\Catalog;

use Backend;
use System\Classes\PluginBase;

/**
 * Catalog Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Catalog',
            'description' => 'OctoberCms - Catalog plugin (Alpha)',
            'author'      => 'Arteriaweb',
            'icon'        => 'icon-cog'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Arteriaweb\Catalog\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        // return []; // Remove this line to activate

        return [
            'arteriaweb.catalog.some_permission' => [
                'tab' => 'Catalog',
                'label' => 'Some permission'
            ],
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Arteriaweb\Catalog\FormWidgets\Sizebox' => [
                'label' => 'Sizebox Fields',
                'code' => 'sizebox',
            ]
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        // return []; // Remove this line to activate

        return [
            // 'catalog' => [
            //     'label'       => 'Catalog (Alpha)',
            //     'url'         => Backend::url('arteriaweb/catalog/maincontrollers'),
            //     'icon'        => 'icon-cog',
            //     'permissions' => ['arteriaweb.catalog.*'],
            //     'order'       => 500,
            // ],
            'catalog' => [
                'label'       => 'Mycontrollers',
                'url'         => Backend::url('arteriaweb/catalog/mycontrollers'),
                'icon'        => 'icon-bug',
                // 'permissions' => ['arteriaweb.catalog.*'],
                'order'       => 500,

                'sideMenu' => [
                    'mycontrollers'=> [
                        'label'       => 'Mycontrollers',
                        'url'         => Backend::url('arteriaweb/catalog/mycontrollers'),
                        'icon'        => 'icon-bug',
                    ],
                    'kinds'=> [
                        'label'       => 'Kinds',
                        'url'         => Backend::url('arteriaweb/catalog/kinds'),
                        'icon'        => 'icon-cogs',
                    ],
                    'packagings'=> [
                        'label'       => 'Packagings',
                        'url'         => Backend::url('arteriaweb/catalog/packagings'),
                        'icon'        => 'icon-archive',
                    ],
                    'sizes'=> [
                        'label'       => 'Sizes',
                        'url'         => Backend::url('arteriaweb/catalog/sizes'),
                        'icon'        => 'icon-signal',
                    ],
                    'units'=> [
                        'label'       => 'Units',
                        'url'         => Backend::url('arteriaweb/catalog/units'),
                        'icon'        => 'icon-cubes',
                    ],
                ]
            ]
        ];
    }
}
