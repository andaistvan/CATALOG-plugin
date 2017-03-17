<?php namespace Arteriaweb\Catalog\Models;

use Model;

/**
 * Packaging Model
 */
class Packaging extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_catalog_packagings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
