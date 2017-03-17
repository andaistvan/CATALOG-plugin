<?php namespace Arteriaweb\Catalog\Models;

use Model;

/**
 * Item Model
 */
class Item extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_catalog_items';


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    // protected $fillable = [];

    /**
     * @var array Relations
     */

    public $belongsTo = [
        'product' => [Product::class],
        'size' => [Size::class],
        'packaging' => [Packaging::class],
        'unit' => [Unit::class],
    ];
    public $hasMany = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
