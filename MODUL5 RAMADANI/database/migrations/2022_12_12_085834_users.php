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
        schema::create('table_users', function (Blueprint $table) {
            $table->bigIncrements('id', 20)->unsigned;
            $table->string('name', 255);
            $table->string('no_hp', 255);
            $table->string('email', 255); 
            $table->string('password', 255); 
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
