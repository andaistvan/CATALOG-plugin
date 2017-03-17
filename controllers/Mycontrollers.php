<?php namespace Arteriaweb\Catalog\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use Arteriaweb\Catalog\Models\Packaging;

/**
 * Mycontroller Back-end Controller
 */
class Mycontrollers extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arteriaweb.Catalog', 'catalog', 'mycontrollers');
    }

}
