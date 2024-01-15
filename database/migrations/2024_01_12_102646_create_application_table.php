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
        Schema::create('application', function (Blueprint $table) {
            $table->id('ApplicationID');
            $table->string('ApplicationStatus', 25);
            $table->string('CIFKey', 20)->nullable();
            $table->date('ApplicationDate');
            
            $table->string('Firstname', 50);
            $table->string('MI', 50);
            $table->string('Lastname', 50);
            $table->string('Spouse', 50);
            $table->string('Address', 50);
            $table->date('BirthDate');
            $table->string('MemberType', 20);

            $table->string('Municipality', 50);
            $table->string('Barangay', 50);
            $table->string('Citizenship', 20);
            $table->string('Sex', 20);
            $table->string('Ownership', 20);
            $table->string('TellNo', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application');
    }
};
