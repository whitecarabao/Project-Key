<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPropertiesTable extends Migration
{
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('address');
            $table->integer('beds');
            $table->integer('bath');
            $table->string('zipcode');
            // If 'photos' should be an array or JSON, use text or JSON type based on your database
            // $table->json('photos'); // For MySQL or PostgreSQL
            // $table->text('photos'); // For a text representation, if you're not using a DB that supports JSON
        });
    }

    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn(['address', 'beds', 'bath', 'zipcode']);
            // Include 'photos' if you're adding it here
            // $table->dropColumn('photos');
        });
    }
}
