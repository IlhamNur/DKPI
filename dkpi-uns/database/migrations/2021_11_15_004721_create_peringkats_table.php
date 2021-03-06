<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeringkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peringkats', function (Blueprint $table) {
            $table->id();

            $table->enum('jenis', ['THES', 'QSstar']);
            $table->integer('peringkat');
            $table->string('judul');
            $table->text('berita');
            $table->string('link');

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
        Schema::dropIfExists('peringkats');
    }
}
