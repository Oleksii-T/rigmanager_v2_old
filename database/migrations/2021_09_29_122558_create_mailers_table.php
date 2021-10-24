<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->boolean('is_active')->default(true);
            $table->string('title');
            $table->string('thread'); // eq/se
            $table->string('official_only');
            $table->string('author_id')->nullable()->constrained('users')->nullOnDelete(); 
            $table->string('keyword')->nullable();
            $table->foreignId('currency_id')->nullable()->constrained('currencies')->nullOnDelete();
            $table->double('cost_from', 50, 2)->nullable();
            $table->double('cost_to', 50, 2)->nullable();
            $table->string('condition'); // new/sh/parts
            $table->string('type'); // sell/buy/loan/leas/provide/reqeust/tender
            $table->json('found_posts')->nullable(); // ids of posts found be mailer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mailers');
    }
}
