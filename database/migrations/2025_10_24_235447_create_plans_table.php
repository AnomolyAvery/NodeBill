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
        Schema::create("plan_categories", function (Blueprint $table) {
            $table->id();

            $table->string('name', 150);
            $table->longText('description');
            $table->boolean('enabled')->default(true);

            $table->timestamps();
        });

        Schema::create("plans", function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->longText('description');

            $table->unsignedBigInteger('price_monthly')->nullable();
            $table->unsignedBigInteger('price_quarterly')->nullable();
            $table->unsignedBigInteger('price_semiannually')->nullable();
            $table->unsignedBigInteger('price_annually')->nullable();

            $table->foreignId('plan_category_id')
                ->constrained()
                ->restrictOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("plans");
        Schema::dropIfExists("plan_categories");
    }
};
