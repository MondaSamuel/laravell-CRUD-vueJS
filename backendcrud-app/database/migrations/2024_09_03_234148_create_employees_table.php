<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing UNSIGNED BIGINT (primary key) column named 'id'
            $table->string('name');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->timestamps(); // Creates 'created_at' and 'updated_at' columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
