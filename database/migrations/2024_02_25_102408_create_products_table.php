<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('product_id')->unique();
            $table->string('name');

            $table->text('description');
            $table->unsignedBigInteger('user_id'); // Foreign key
            $table->unsignedBigInteger('warehouse_id'); // The user provides this ID
            $table->string('image')->nullable();
            $table->string('status')->default('Pending'); // Active or inactive
            $table->boolean('payment_status')->default(true); // Paid or unpaid
            $table->timestamps(); // Created_at and updated_at columns

            // Foreign key constraint

        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
