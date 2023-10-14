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
        Schema::table('sach', function (Blueprint $table) {
            $table->foreignId('idnhaxb')->constrained('nhaxb');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sach', function (Blueprint $table) {
            $table->dropForeign('sach_idnhaxb_foreign');
        });
    }
};
