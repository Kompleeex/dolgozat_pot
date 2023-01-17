<?php

use App\Models\subject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->id('subject_id');
            $table->string('name');
            $table->string('description');
            $table->integer('limit');
            $table->timestamps();
        });

        
        subject::create(['name'=>'Matek','description'=>'Matematika','limit'=>35]);
        subject::create(['name'=>'Irodalom','description'=>'Magyar Irodalom','limit'=>25]);
        subject::create(['name'=>'Info','description'=>'Informatika','limit'=>45]);
        subject::create(['name'=>'Angol','description'=>'Angol nyelv','limit'=>50]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
};
