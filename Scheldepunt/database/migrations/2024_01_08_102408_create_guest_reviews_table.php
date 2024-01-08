<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('guest_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guest_reviews');
    }
}
