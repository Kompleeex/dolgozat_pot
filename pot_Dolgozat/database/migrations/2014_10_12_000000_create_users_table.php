<?php
use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name'=>'Jani', 'email'=>'jani@gmail.com']);
        User::create(['name'=>'Zsuzsi', 'email'=>'Zsuzsi@gmail.com']);
        User::create(['name'=>'Szusza', 'email'=>'Szusza@gmail.com']);
        User::create(['name'=>'Gabi', 'email'=>'Gabi@gmail.com']);
        User::create(['name'=>'Hanna', 'email'=>'Hanna@gmail.com']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
