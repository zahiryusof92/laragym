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
            $table->unsignedBigInteger('package_id')->nullable();
        });

        Schema::table('subscription_items', function (Blueprint $table) {
            $table->unsignedBigInteger('package_id')->nullable();
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
            $table->dropColumn('package_id');
        });

        Schema::table('subscription_items', function (Blueprint $table) {
            $table->dropColumn('package_id');
        });
    }
};
