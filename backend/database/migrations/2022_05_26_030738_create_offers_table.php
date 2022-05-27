<?php

use App\Enums\OrderTypesEnum;
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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id');
            $table->string('name');
            $table->enum('type', OrderTypesEnum::values());
            $table->decimal('price');
            $table->unsignedSmallInteger('rooms');
            $table->string('yandex_mark')->nullable();
            $table->string('location');
            $table->text('description');
            $table->boolean('is_group');
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
        Schema::dropIfExists('offers');
    }
};
