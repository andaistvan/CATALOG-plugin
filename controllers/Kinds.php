<?php namespace Arteriaweb\Catalog\Controllers;

use Model;
use BackendMenu;
use Backend\Classes\Controller;

/**
 * Types Back-end Controller
 */
class Kinds extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
        // 'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    // public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arteriaweb.Catalog', 'catalog', 'kinds');
    }
}
