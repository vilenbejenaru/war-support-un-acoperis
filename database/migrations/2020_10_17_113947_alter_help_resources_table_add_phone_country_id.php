<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterHelpResourcesTableAddPhoneCountryId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('help_resources', function (Blueprint $table) {
            $table->unsignedBigInteger('phone_country_id')
                ->nullable()
                ->after('address');

            $table->foreign('phone_country_id')
                ->references('id')
                ->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('help_resources', function (Blueprint $table) {
            $table->dropForeign(['phone_country_id']);
            $table->dropColumn('phone_country_id');
        });
    }
}
