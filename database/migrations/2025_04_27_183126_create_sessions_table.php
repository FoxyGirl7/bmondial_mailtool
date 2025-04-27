<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('sessions', function (Blueprint $table) {
        $table->string('id')->primary();
        $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
        $table->text('payload');
        $table->integer('last_activity');
        $table->string('ip_address')->nullable(); // Adding the 'ip_address' column
        $table->string('user_agent')->nullable(); // Adding the 'user_agent' column
    });
}

public function down()
{
    Schema::dropIfExists('sessions');
}

};
