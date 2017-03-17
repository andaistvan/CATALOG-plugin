<?php namespace Arteriaweb\Catalog\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use Arteriaweb\Catalog\Models\Size;

/**
 * Sizebox Form Widget
 */
class Sizebox extends FormWidgetBase
{
    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'arteriaweb_catalog_sizebox';

    /**
     * {@inheritDoc}
     */
    public function init()
    {
    }

    public function widgetDetails()
    {
        return [
            'name' => 'Sizebox',
            'description' => 'Widget to sizes',
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('sizebox');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $this->addCss('css/sizebox.css', 'Arteriaweb.Catalog');
        $this->addJs('js/sizebox.js', 'Arteriaweb.Catalog');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
