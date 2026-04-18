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
    Schema::create('films', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('genre');
        $table->year('tahun_rilis');
        $table->string('sutradara'); // director
        $table->string('negara'); // country
        $table->integer('durasi'); // menit
        $table->decimal('rating', 3, 1)->nullable(); // contoh: 8.5
        $table->text('deskripsi')->nullable();
        $table->string('poster')->nullable(); // path gambar
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
