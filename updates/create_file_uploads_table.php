<?php namespace Stefan\ImageUploadExtended\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateFileUploadsTable extends Migration
{
    public function up()
    {
        Schema::create('stefan_imageuploadextended_file_uploads', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stefan_imageuploadextended_file_uploads');
    }
}
