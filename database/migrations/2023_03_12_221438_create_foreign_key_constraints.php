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
        Schema::table('packages', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('cycle_id')->references('id')->on('cycles');
        });

        Schema::table('activities', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->foreign('package_id')->references('id')->on('packages');
        });

        Schema::table('subscription_items', function (Blueprint $table) {
            $table->foreign('package_id')->references('id')->on('packages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropForeign('service_id');
            $table->dropForeign('cycle_id');
        });

        Schema::table('activities', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropForeign('package_id');
        });

        Schema::table('subscription_items', function (Blueprint $table) {
            $table->dropForeign('package_id');
        });
    }
};
