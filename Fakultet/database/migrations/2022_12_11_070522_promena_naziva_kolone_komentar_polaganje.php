<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaNazivaKoloneKomentarPolaganje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('polaganjes', function (Blueprint $table) {
            $table->renameColumn('komentar', 'napomena');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('polaganjes', function (Blueprint $table) {
            $table->renameColumn('napomena', 'komentar');
        });
    }
}
