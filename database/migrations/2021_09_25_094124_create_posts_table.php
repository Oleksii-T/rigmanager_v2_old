<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); //
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); 
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->foreignId('country_id')->nullable()->constrained('countries')->nullOnDelete();
            $table->string('slug')->unique();
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_urgent')->default(false);
            $table->boolean('is_import')->default(false);
            $table->boolean('is_export')->default(false);
            $table->integer('thread');
            $table->string('type'); // sell/buy/loan/lease/give_se/get_se
            $table->integer('condition')->nullable(); // new/used/for_parts
            $table->string('manufacturer')->nullable();
            $table->string('manufactured_date')->nullable();
            $table->string('part_number')->nullable();
            $table->string('amount')->nullable();
            $table->double('cost', 50, 2)->nullable();
            $table->foreignId('currency_id')->nullable()->constrained('currencies')->nullOnDelete();
            $table->string('email', 255)->nullable();
            $table->string('phone', 11)->nullable();
            $table->date('active_to')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
