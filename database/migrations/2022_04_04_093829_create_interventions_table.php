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
        Schema::create('interventions', function (Blueprint $table) {
            $table->string('Emp_id');
            $table->unsignedBigInteger('Par_id');
            $table->date('debut');
            $table->integer('N_jour');
            $table->foreign('Emp_id')->references('emp_nss')->on('employes')
            ->onDelete('cascade');
            $table->foreign('Par_id')->references('id')->on('parcelles')
            ->onDelete('cascade');
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
        Schema::dropIfExists('interventions');
    }
};
