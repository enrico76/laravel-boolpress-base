<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeingKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function (Blueprint $table) {
        $table->bigInteger('category_id')->unsigned()->index();
        $table->foreign('category_id', 'relazioneCategoryPost')
              ->references('id')
              ->on('categories');

      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('posts', function (Blueprint $table) {
        $table->dropForeign('relazioneCategoryPost');
        $table->dropColumn('category_id');

      });

    }
}
