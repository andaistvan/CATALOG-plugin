<?php namespace Arteriaweb\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTables extends Migration
{
    public function up()
    {
        // product ------------------------
        Schema::create('arteriaweb_catalog_products', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('kind_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('slug');
            $table->timestamps();
        });

        // types ------------------------
        Schema::create('arteriaweb_catalog_kinds', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('kind_name');
            $table->string('slug');
            $table->timestamps();
        });

        // items ------------------------
        Schema::create('arteriaweb_catalog_items', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable()->default(null);
            $table->decimal('price', 8)->nullable()->default(null);
            $table->integer('qty')->default(1);
            $table->string('code');
            $table->timestamps();
            $table->integer('size_id')->unsigned()->nullable()->default(null);
            $table->integer('packaging_id')->unsigned()->nullable()->default(null);
            $table->integer('unit_id')->unsigned()->nullable()->default(null);
        });

        // sizes ------------------------
        Schema::create('arteriaweb_catalog_sizes', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('size_name');
            $table->string('slug');
            $table->timestamps();
        });

        // packaging ------------------------
        Schema::create('arteriaweb_catalog_packagings', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('packaging_name');
            $table->string('slug');
            $table->timestamps();
        });

        // units ------------------------
        Schema::create('arteriaweb_catalog_units', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('unit_name');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_catalog_products');
        Schema::dropIfExists('arteriaweb_catalog_kinds');        
        Schema::dropIfExists('arteriaweb_catalog_items');
        Schema::dropIfExists('arteriaweb_catalog_sizes');
        Schema::dropIfExists('arteriaweb_catalog_packagings');
        Schema::dropIfExists('arteriaweb_catalog_units');
    }
}
