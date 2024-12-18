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
        Schema::create('assignment_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Task::class)->constrained();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            // unique(['task_id', 'user_id']);
            $table->unique(['task_id', 'user_id']);
            //$table->primary(['task_id', 'user_id']); // Clave primaria compuesta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_tasks');
    }
};
