<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emps', function (Blueprint $table) {
            $table->id();
            $table->string("firstName",191);
            $table->string("lastName",191);
            $table->string("gender",191);
            $table->string("city",191);
            $table->integer("age");
            $table->string("idProof");
            $table->string("image");
            $table->string("email",191);
            $table->string("password",191);
            $table->string("state",191);
            $table->string("country",191);
            $table->integer("phoneNumber");
            $table->integer("pincode");
            $table->date("dob");
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
        Schema::dropIfExists('emps');
    }
}
