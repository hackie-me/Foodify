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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('contacts_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('subject', 255);
            $table->text('body');
            $table->string('attachment_path', 255)->nullable();
            $table->boolean('is_flagged')->default(false);
            $table->boolean('is_sent')->default(true);
            $table->boolean('is_archived')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
};
