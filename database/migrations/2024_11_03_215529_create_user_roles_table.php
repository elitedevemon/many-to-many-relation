<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('user_roles', function (Blueprint $table) {
      $table->foreignId('employee_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
      $table->foreignId('role_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('user_roles');
  }
};