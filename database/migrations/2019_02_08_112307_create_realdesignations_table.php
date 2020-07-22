<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealdesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realdesignations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id');
            $table->string('designation_name');
            $table->integer('added_by');
            $table->integer('designation_status')->default(1)->comment('1=active,2=deactive');
			
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
        Schema::dropIfExists('realdesignations');
    }
}
