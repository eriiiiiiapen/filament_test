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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->comment('メールアドレス');
            $table->string('number')->comment('会員番号');
            $table->string('last_name')->comment('苗字');
            $table->string('first_name')->comment('名前');
            $table->string('last_name_kana')->comment('苗字かな');
            $table->string('first_name_kana')->comment('名前かな');
            $table->date('birthday')->comment('誕生日');
            $table->text('remarks')->nullable()->comment('備考');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
