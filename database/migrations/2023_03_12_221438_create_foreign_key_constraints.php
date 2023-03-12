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
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('package_id')->references('id')->on('packages');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('cycle_id')->references('id')->on('cycles');
        });

        Schema::table('packages', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('cycle_id')->references('id')->on('cycles');
        });

        Schema::table('activities', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('package_id');
            $table->dropForeign('service_id');
            $table->dropForeign('cycle_id');
        });

        Schema::table('packages', function (Blueprint $table) {
            $table->dropForeign('package_id');
            $table->dropForeign('service_id');
        });

        Schema::table('activities', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });
    }
};
