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
            $table->foreignId('author_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->string('isbn', 13);
            $table->string('title');
            $table->string('cover_url');
            $table->unsignedInteger('release_year');
            $table->string('publisher');
            $table->string('published_from');
            $table->string('language');
            $table->unsignedInteger('total_page');
            $table->text('synopsis');
            $table->unsignedDecimal('rating');
            $table->boolean('hard_copy_available')->default(true);
            $table->boolean('ebook_available')->default(true);
            $table->boolean('audio_book_available')->default(true);
            $table->boolean('status')->default(true);
            $table->string('bookshelf');
            $table->timestamps();

            $table->index(['title', 'isbn']);
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
