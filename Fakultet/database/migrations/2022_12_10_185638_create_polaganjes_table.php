<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolaganjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polaganjes', function (Blueprint $table) {
            $table->id();
            $table->string('datum');
            $table->string('bodovi');
            $table->string('ocena');
            $table->string('komentar');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('predmet_id')->constrained('predmets');
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
        Schema::dropIfExists('polaganjes');
    }
}
