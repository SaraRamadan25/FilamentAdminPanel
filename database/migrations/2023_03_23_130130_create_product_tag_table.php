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
        Schema::create('product_tag', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained();
            $table->foreignId('tag_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_tag');
    }
};

