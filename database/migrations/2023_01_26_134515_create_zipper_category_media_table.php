<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipper_category_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('media_id');
            $table->timestamps();
            $table->softDeletes();

            //IDX
            $table->index('category_id', 'category_media_category_idx');
            $table->index('media_id', 'category_media_media_idx');
            //FK
            $table->foreign('category_id', 'category_media_category_fk')
                ->on('zipper_categories')->references('id');
            $table->foreign('media_id', 'category_media_media_fk')
                ->on('zipper_media')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zipper_category_media');
    }
};
