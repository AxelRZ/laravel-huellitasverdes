<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  title: Titulo de la noticia
    // Relevance: 0-2. 
    /**
     * 0: Ocupa full width en el panel de noticias
     * 1: Se agrupa hasta con 1/2 con otros elementos 
     * 2: Se agrupa hasta con 1/3 width con otros elementos
     * 
     * keywords: guardadas como string y separadas por comas
     * para posterior casting en array
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('subtitle')->nullable();
            $table->text('keywords')->nullable();
            $table->smallInteger('relevance')->default(0);  
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('bgcolor')->default('#FFFFFF');
            $table->string('fgcolor')->default('#FFFFFF');
            $table->text('body_raw')->nullable();
            $table->string('last_editor')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
