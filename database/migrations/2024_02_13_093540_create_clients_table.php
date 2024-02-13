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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->char('name', 250)->nullable(false);
            $table->char('slug', 100)->nullable(false);
            $table->string('is_project', 30)->nullable(false)->default(0);
            $table->char('self_capture', 1)->nullable(false)->default(1);
            $table->char('client_prefix', 4)->nullable(false);
            $table->char('client_logo', 255)->nullable(false)->default('no-image.jpg');
            $table->text('address')->nullable()->default(null);
            $table->char('phone_number', 50)->nullable(false)->default(null);
            $table->char('city', 50)->nullable(false)->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
