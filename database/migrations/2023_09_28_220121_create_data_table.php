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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->integer('end_year');
            $table->string('citylng');
            $table->string('citylat');
            $table->integer('intensity');
            $table->string('sector');
            $table->string('topic');
            $table->string('insight')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('swot');
            $table->string('url');
            $table->string('region');
            $table->string('start_year');
            $table->string('impact');
            $table->string('added');
            $table->string('published');
            $table->string('city');
            $table->string('country');
            $table->integer('relevance');
            $table->string('pestle');
            $table->string('source');
            $table->string('title');
            $table->integer('Likelihood');
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
        Schema::dropIfExists('data');
    }
};
