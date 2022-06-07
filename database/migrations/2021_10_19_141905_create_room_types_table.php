<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('room_name')->nullable();
            $table->price();
        });

        DB::table('room_types')->insert([
            ['room_name' => 'Single', 'price' => '100'],
            ['room_name' => 'Double', 'price' => '200'],
            ['room_name' => 'Queen', 'price' => '500'],
            ['room_name' => 'King', 'price' => '600'],
            ['room_name' => 'Suite', 'price' => '800'],
            ['room_name' => 'Villa', 'price' => '1000'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_types');
    }
}
