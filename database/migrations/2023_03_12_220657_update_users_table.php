<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Enums\UserStatus;
use App\Enums\UserRole;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->default(UserStatus::ACTIVE->value);
            $table->string('role')->default(UserRole::MEMBER->value);
            $table->string('account_number')->unique();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('city')->nullable();
            $table->string('mobile')->nullable();
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->timestamp('last_login_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('role');
            $table->dropColumn('account_number');
            $table->dropColumn('dob');
            $table->dropColumn('address');
            $table->dropColumn('avatar');
            $table->dropColumn('city');
            $table->dropColumn('mobile');
            $table->dropColumn('zip');
            $table->dropColumn('state');
            $table->dropColumn('country');
            $table->dropColumn('last_login_at');
        });
    }
};
