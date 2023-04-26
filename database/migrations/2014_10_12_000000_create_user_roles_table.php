<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name');
            $table->timestamps();
        });

        // Insert default roles
        DB::table('user_roles')->insert(
            [
                ['role_name' => 'user',
                    'created_at' => now(),
                    'updated_at' => now(),],
                ['role_name' => 'Admin',
                    'created_at' => now(),
                    'updated_at' => now(),],
                ['role_name' => 'Customer',
                    'created_at' => now(),
                    'updated_at' => now(),]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
};
