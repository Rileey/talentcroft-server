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
        Schema::table('movies', function (Blueprint $table) {
            $table->string('age_rating');
            $table->text('director');
            $table->string('year');
            $table->string('genre');
            $table->string('title_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('age_rating');
            $table->dropColumn('director');
            $table->dropColumn('year');
            $table->dropColumn('genre');
            $table->dropColumn('title_image');
        });
    }
};
