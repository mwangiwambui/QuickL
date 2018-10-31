<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAcceptedToRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Requests', function (Blueprint $table) {
            $table->tinyInteger('accepted',50)->default('0')->after('companyname');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Requests', function (Blueprint $table) {
            $table->dropColumn('accepted');
        });
    }
}
