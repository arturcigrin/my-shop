<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMattressToppersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mattress_toppers', function (Blueprint $table) {
            $table->tinyInteger('id')->unsigned()->unique()->autoIncrement();
            $table->char('vendor_code', 15)->unique();
            $table->string('title',150);
            $table->text('description')->nullable();
            $table->string('bad_type');
            $table->char('size');
            $table->float('supplier_price');
            $table->float('my_price');
            $table->string('path_images');
            $table->smallInteger('views_product')->unsigned();
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mattress_toppers');
    }
}