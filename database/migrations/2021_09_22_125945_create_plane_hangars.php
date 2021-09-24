<?php
declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreatePlaneHangars
 */
class CreatePlaneHangars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plane_hangars', function (Blueprint $table) {
            $table->id(); # bigint autoincrement
            $table->integer('plane_id');
            $table->integer('hangar_id');
            
            $table->index(['hangar_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plane_hangars');
    }
}
