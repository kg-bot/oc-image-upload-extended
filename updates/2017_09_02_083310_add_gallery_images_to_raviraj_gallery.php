<?php namespace Stefan\ImageUploadExtended\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddGalleryImagesToRavirajGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('raviraj_rjgallery_galleries', function ($table) {
            $table->json('gallery_images')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('raviraj_rjgallery_galleries', function ($table) {
            $table->dropColumn('gallery_images');
        });
    }
}
