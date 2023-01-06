<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumbotrons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            $table->text('imageJumbotron');
            $table->text('judulJumbotron');
            $table->text('slug');
            $table->text('judulUtama');
            $table->text('organic');
            $table->text('deskripsi');
            $table->text('action');

            // primary
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('jumbotrons');
    }
};
