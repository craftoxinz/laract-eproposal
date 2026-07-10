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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organization_number')->unique();
            $table->enum('type', ['himpunan', 'ukm']);
            $table->foreignId('advisor_id')->nullable()->constrained('users'); // pembina organisasi
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('organization_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained(); // id organisasi
            $table->foreignId('user_id')->constrained(); // id user
            $table->enum('position', ['ketua', 'sekretaris', 'bendahara', 'koordinator', 'anggota']);
            $table->string('period')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
        Schema::dropIfExists('organization_members');
    }
};
