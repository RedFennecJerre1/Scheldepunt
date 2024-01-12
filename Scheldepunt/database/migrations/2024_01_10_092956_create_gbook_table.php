<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGBookTable extends Migration
{
    public function up()
    {
        Schema::create('g_books', function (Blueprint $table) {
            $table->id();
            $table->string('gbookuser_name');
            $table->text('gbookcontent');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('g_books');
    }
}
