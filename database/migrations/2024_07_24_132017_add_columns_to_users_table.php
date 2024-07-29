<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('kana')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable() ;
            $table->date('birthday')->nullable();
            $table->string('occupation')->nullable();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('kana');
            $table->dropColumn('postal_code');
            $table->dropColumn('address');
            $table->dropColumn('phone_number');
            $table->dropColumn('birthday');
            $table->dropColumn('occupation');
        });
    }
};
