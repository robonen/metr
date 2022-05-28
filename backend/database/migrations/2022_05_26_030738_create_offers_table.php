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
            $table->string('name');
            $table->enum('type', OrderTypesEnum::values());
            $table->decimal('price');
            $table->unsignedSmallInteger('rooms');
            $table->decimal('space');
            $table->string('yandex_mark')->nullable();
            $table->string('location');
            $table->text('description');
            $table->boolean('is_group');
            $table->timestamps();

            $table
                ->foreignId('user_id')
                ->constrained()
                ->onDelete('set null')
                ->onUpdate('cascade');
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
