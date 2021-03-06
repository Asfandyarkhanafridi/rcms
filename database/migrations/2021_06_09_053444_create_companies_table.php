<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("company_name");
            $table->string("contact_person");
            $table->string("address")->nullable();
            $table->string("phone")->nullable();
            $table->timestamps();
            $table->timestamp("deleted_at")->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
