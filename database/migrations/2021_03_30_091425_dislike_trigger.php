<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DislikeTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER dislike_trigger AFTER DELETE ON `post_likes` FOR EACH ROW
            BEGIN
                DECLARE likesPost INT unsigned DEFAULT 1; 
               
                SET likesPost = (SELECT count(post_id) from post_likes WHERE post_id = OLD.post_id);
                
                UPDATE posts SET likes = likesPost WHERE id = OLD.post_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `dislike_trigger`');
    }
}
