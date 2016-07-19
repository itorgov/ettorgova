<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id')->comment('Идентификатор записи.');
            $table->string('name')->comment('Имя клиента.');
            $table->string('phone', 18)->unique()->comment('Номер телефона клиента.');
            $table->boolean('confirmed')->default(0)->comment('Подтверждены ли контактные данные клиента.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
