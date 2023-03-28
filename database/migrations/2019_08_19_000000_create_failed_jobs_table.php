<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateFailedJobsTable extends Migration
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
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
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
        Schema::dropIfExists('failed_jobs');
    }
}
=======
     */
    public function down(): void
    {
        Schema::dropIfExists('failed_jobs');
    }
};
>>>>>>> 44b5072bf795bb32a140c729f27fb070017649c7
