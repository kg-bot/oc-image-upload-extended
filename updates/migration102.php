<?php namespace Stefan\ImageUploadExtended\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration102 extends Migration
{
    public function up()
    {
        Schema::table('system_files', function($table) {
            $table->json('tags')->nullable();
        });
    }

    public function down()
    {
        Schema::table('system_files', function($table) {
            $table->dropColumn('tags');
        });
    }
}