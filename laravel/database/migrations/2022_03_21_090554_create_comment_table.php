<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Serietv;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->string('status');
            
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Serietv::class);
            $table->foreignIdFor(Post::class);

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
        Schema::dropIfExists('comment');
    }
};
