<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaSemestarPredmet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('predmets', function (Blueprint $table) {
            $table->after('espb', function ($table) {
                $table->string('semestar')->unique();
            });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('predmets', function (Blueprint $table) {
            $table->dropColumn('semestar');
        });
    }
}
