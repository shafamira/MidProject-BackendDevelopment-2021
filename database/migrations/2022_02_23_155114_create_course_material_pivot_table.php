<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseMaterialPivotTable extends Migration
{
    public function up()
    {
        Schema::create('course_material', function (Blueprint $table) {
            $table->unsignedInteger('course_id');

            $table->foreign('course_id', 'course_id_fk_538846')->references('id')->on('courses')->onDelete('cascade');

            $table->unsignedInteger('material_id');

            $table->foreign('material_id', 'material_id_fk_538846')->references('id')->on('materials')->onDelete('cascade');
        });
    }
}
