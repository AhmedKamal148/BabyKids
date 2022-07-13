<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(Schema::hasColumn('locations', 'event_id'))
      {
          Schema::table('locations',function (Blueprint $table)
          {
              $table->dropForeign('locations_event_id_foreign');
             $table->dropColumn('event_id');
          });

      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
