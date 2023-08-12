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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('from_name');
            $table->string('from_email');
            $table->string('from_phone');
            $table->string('to');
            $table->string('receiver_type');
            $table->string('subject');
            $table->text('body');
            $table->tinyInteger('status')->default(\App\Models\ContactUs::STATUS_UNREAD);;
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
