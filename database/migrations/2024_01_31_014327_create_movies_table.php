<?php

use App\Enums\MovieStatus;
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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rated_id');
            $table->string('slug', 350)->unique();
            $table->string('title');
            $table->text('poster');
            $table->string('description', config('validation.movie.description.max'))->nullable();
            $table->string('director');
            $table->string('casts');
            $table->string('genre');
            $table->date('release_date');
            $table->integer('duration')->unsigned();
            $table->boolean('status')->default(MovieStatus::COMING_SOON);
            $table->string('trailer_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
