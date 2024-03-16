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
        Schema::create('warehouse_notifications', function (Blueprint $table) {
            $table->id();
            $table->String('user_id');
            $table->String('warehouse_id');
            $table->boolean('read')->default(false);
            $table->text('message');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('warehouse_notifications');
    }
};
