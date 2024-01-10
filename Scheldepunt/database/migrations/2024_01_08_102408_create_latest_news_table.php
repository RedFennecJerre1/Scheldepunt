<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatestNewsTable extends Migration
{
    public function up()
    {
        Schema::create('latest_news', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('title');
            $table->string('img')->nullable();
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('latest_news');
    }
}
