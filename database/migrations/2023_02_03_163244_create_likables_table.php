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
    public function up() {
        Schema::create('likables', function (Blueprint $table) {
            $table->primary(['likable_id', 'user_id', 'likable_type']);
            $table->unsignedBigInteger('likable_id');
            $table->unsignedBigInteger('user_id');
            $table->string('likable_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('post_user');
    }
};
