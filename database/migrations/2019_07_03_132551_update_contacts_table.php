<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
            $table->biginteger('source_id')->unsigned();
            $table->foreign('source_id')->references('id')->on('contact_sources');

            $table->biginteger('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts');
            
            $table->biginteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('contact_statuses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
}
