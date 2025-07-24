<?php
// database/migrations/xxxx_xx_xx_create_accreditations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccreditationsTable extends Migration
{
    public function up()
    {
        Schema::create('accreditations', function (Blueprint $table) {
            $table->id();
            $table->string('institution_name');
            $table->string('campus')->nullable();
            $table->string('activity_type')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('record_date')->nullable();
            $table->text('programmes')->nullable();
            $table->string('accreditation_status')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accreditations');
    }
}
