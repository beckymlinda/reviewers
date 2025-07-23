<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviewers', function (Blueprint $table) {
    $table->id();
    $table->string('full_name');
    $table->string('title')->nullable();
    $table->enum('gender', ['male', 'female', 'other'])->nullable();
    $table->string('qualification')->nullable();
    $table->string('field_of_study')->nullable();
    $table->string('area_of_specialisation')->nullable();
    $table->string('awarding_institution')->nullable();
    $table->year('year_obtained')->nullable();
    $table->string('institution_of_work')->nullable();
    $table->string('designation')->nullable();
    $table->integer('assessment_review_count')->default(0);
    $table->string('mobilephone')->nullable();
    $table->string('emailaddress')->nullable();
    $table->text('physicaladdress')->nullable();
    $table->text('postal_address')->nullable();
    $table->string('place_of_residence')->nullable();
    $table->enum('training_status', ['Trained', 'Not Trained'])->default('Not Trained');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviewers');
    }
};
