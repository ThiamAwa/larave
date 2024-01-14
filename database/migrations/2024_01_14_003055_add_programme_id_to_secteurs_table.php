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
        Schema::table('secteurs', function (Blueprint $table) {
            // $table->unsignedBigInteger('programme_id');
            // $table->foreign('programme_id')->references('id')->on('programme')->onDelete('cascade');
            $table->foreignIdFor(\App\Models\programme::class)->nullable()->constrained()->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('secteurs', function (Blueprint $table) {
            //
        });
    }
};
