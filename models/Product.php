<?php namespace Arteriaweb\Catalog\Models;

use Model;
// use October\Rain\Database\Attach\File;

/**
 * Product Model
 */
class Product extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_catalog_products';


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $hasMany = [
        'items' => [Item::class],
    ];

    public $attachOne = [
        'featimage' => 'System\Models\File',
    ];

    public $attachMany = [
        'imagegallery' => 'System\Models\File',
    ];

    public $hasOne = [

    ];
    public $belongsTo = [
        'kind' => [Kind::class],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];


    public function getKindOptions()
    {
        return Kind::all()->lists('kind_name');
    }
}
