<?php
use App\models\lesson;
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
        Schema::create('lessons', function (Blueprint $table) {
            $table->foreignId('subject_id')->references('subject_id')->on('Subjects');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->date('achieve');
            $table->tinyInteger('status')->default(0); // megy vagy nem megy az óra
            $table->timestamps();
        });
        lesson::create(['subject_id'=>1,'user_id'=>1,'achieve'=>'2022-10-05']);
        lesson::create(['subject_id'=>1,'user_id'=>2,'achieve'=>'2022-10-04']);
        lesson::create(['subject_id'=>1,'user_id'=>3,'achieve'=>'2022-10-05']);
        lesson::create(['subject_id'=>2,'user_id'=>1,'achieve'=>'2023-01-05']);
        lesson::create(['subject_id'=>2,'user_id'=>2,'achieve'=>'2023-01-06']);
        lesson::create(['subject_id'=>3,'user_id'=>1,'achieve'=>'2021-10-15']);
        lesson::create(['subject_id'=>3,'user_id'=>4,'achieve'=>'2021-09-05']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
