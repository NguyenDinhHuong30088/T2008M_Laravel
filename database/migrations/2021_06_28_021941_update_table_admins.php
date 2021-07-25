<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableAdmins extends Migration
{
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->string("role")->after("password");// them 1 column role
        });
    }
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            // nguoc lai voi ham up
            $table->dropColumn("role");
        });
    }
}
