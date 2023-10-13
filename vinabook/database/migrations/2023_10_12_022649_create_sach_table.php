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
        Schema::create('sach', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->double('gia');
            $table->string('hinhanh');
            $table->bigInteger('idnhaxb');
            $table->string('nhaphathanh');
            $table->text('mota');
            $table->date('date');
            $table->double('giakhuyenmai');
            $table->string('tacgia');
            $table->string('giayphep');
            $table->string('ngonngu');
            $table->string('kichthuoc');
            $table->string('sotrang');
            $table->string('khoiluong');
            $table->string('dinhdang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sach');
    }
};
