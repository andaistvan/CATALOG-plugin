<?php namespace Arteriaweb\Catalog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Packagings Back-end Controller
 */
class Packagings extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arteriaweb.Catalog', 'catalog', 'packagings');
    }
}
