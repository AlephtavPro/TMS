<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropWebsiteadressFromTenderTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tender_tables', function (Blueprint $table) {
              $table->dropColumn('web_adress');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tender_tables', function (Blueprint $table) {
                $table->string('web_adress');
        });
    }
}
