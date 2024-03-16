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
        Schema::create('user_notifications', function (Blueprint $table) {
            $table->id();
            $table->String('warehouse_id');
            $table->boolean('read')->default(false);

            $table->String('user_id');
            $table->text('message');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('user_notifications');
    }
};
