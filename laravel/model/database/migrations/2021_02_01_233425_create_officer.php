<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->id();
            $table->string("FirstName",191);
            $table->string("LastName",191);
            $table->string("Gender",191);
            $table->string("City",191);
            $table->integer("Age");
            $table->string("IdProof");
            $table->string("Image");
            $table->string("Email",191);
            $table->string("Password",191);
            $table->string("State",191);
            $table->string("Country",191);
            $table->integer("PhoneNumber");
            $table->integer("Pincode");
            $table->date("DOB");
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
        Schema::dropIfExists('officers');
    }
}
