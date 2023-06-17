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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->text('cover_url');
            $table->string('name');
            $table->string('author');
            $table->integer('release_year', false, true);
            $table->decimal('rating', 8, 2, true);
            $table->boolean('hard_copy_available')->default(true);
            $table->boolean('ebook_available')->default(true);
            $table->boolean('audio_book_available')->default(true);
            $table->boolean('status')->default(true);
            $table->string('bookshelf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
