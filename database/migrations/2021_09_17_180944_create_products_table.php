<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id_number')->nullable();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('associated_product_id')->nullable();
            $table->string('order_title')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->longText('details')->nullable();
            $table->enum('service_type', ['corrective', 'preventive'])->default('preventive');
            $table->string('priority_level ')->nullable();
            $table->enum('type', ['corrective', 'preventive'])->default('preventive');
            $table->string('how_often')->nullable();
            $table->string('how_often_type')->nullable();
            $table->dateTime('when')->nullable();

            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('contract_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->dateTime('date_time')->nullable();
            $table->unsignedBigInteger('assign_user_id')->nullable();
            $table->string('file')->nullable();

            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_archive')->default(0);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
