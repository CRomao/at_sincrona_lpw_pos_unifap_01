<?php

namespace App\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;

class MGPost{

    public function up(){
        Capsule::schema()->create("posts", function($table){
            $table->increments("id");
            $table->integer("user_id");
            $table->string("title");
            $table->text("content");
            $table->timestamps();
        });
    }

    public function down(){
        Capsule::schema()->drop("posts");
    }
}
