<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengirim_id')->unsigned();
            $table->bigInteger('penerima_id')->unsigned();
            $table->text('alamat');
            $table->integer('priority');
            $table->timestamps();

            $table->foreign('pengirim_id')
                ->references('id')->on('pengirims')
                ->onDelete('CASCADE');

            $table->foreign('penerima_id')
                ->references('id')->on('penerimas')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
