<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticleNumToWriterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('writer', function (Blueprint $table) {
            $table->integer('article_num')->nullable()->default(0);  //カラム追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('writer', function (Blueprint $table) {
            $table->dropColumn('article_num');  //カラムの削除
        });
    }
}
