<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
=======
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
<<<<<<< HEAD
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
=======
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
<<<<<<< HEAD
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
=======
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
