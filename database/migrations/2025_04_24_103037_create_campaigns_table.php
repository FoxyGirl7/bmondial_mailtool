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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('template_id')->constrained('templates');
            $table->string('name');
            $table->string('subject');
            $table->text('body');
            $table->enum('status', ['draft', 'scheduled', 'sent']);
            $table->timestamp('scheduled_at')->nullable();
            $table->foreignId('category_id')->constrained('email_categories');
            $table->foreignId('segment_id')->constrained('segments');
            $table->string('sender_email');
            $table->string('sender_name');
            $table->boolean('tracking_enabled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
