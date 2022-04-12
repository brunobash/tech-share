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
        Schema::create('mentorias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mentor');
            $table->string('cargo');
            $table->text('skills');
            $table->date('data_e_hora'); //data da mentoria
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentorias');
    }
};
