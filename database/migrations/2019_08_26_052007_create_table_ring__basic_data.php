<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRingBasicData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ring_basic_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shortName',50);
            $table->string('formalName',100);
            $table->string('pageURL',255);
            $table->string('subjectEntry',100)->nullable();
            $table->text('bodyEntry')->nullable();
            $table->string('subjectApply',100)->nullable();
            $table->text('bodyApply')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ring_basic_data');
    }
}
