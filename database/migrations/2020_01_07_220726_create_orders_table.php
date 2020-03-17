<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {

    /**2014_10_12_000000_create_users_table
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('forename', 15);
            $table->string('name', 30);
            $table->string('email', 50);
            $table->string('tel_number', 11);
            $table->enum('payments_methods', ['PayPal', 'DotPay', 'Przelew', 'Karta'])->default('PayPal');
            $table->set('products', ['AORUS GeForce RTX 2080 Ti', 'MSI GeForce RTX 2080 Ti', 'Zotac GeForce RTX 2080',
                                        'Gigabyte GeForce RTX 2080', 'Gigabyte GeForce RTX 2070', 'MSI GeForce RTX 2070',
                                        'Palit GeForce RTX 2060', 'Gainward GeForce RTX 2060', 'MSI GeForce GTX 1660 Ti',
                                        'Gigabyte GeForce GTX 1660 Ti', 'MSI GeForce GTX 1050 Ti', 'ASUS GeForce GTX 1050 Ti',
                                        'XFX Radeon RX 590', 'Gigabyte Radeon RX 580', 'ASRock Radeon VII',
                                        'MSI Radeon VII', 'AMD Radeon Pro WX 5100', 'AMD Radeon Pro SSG VEGA']);
            $table->unsignedInteger('amount');
            $table->enum('status', ['aktywne', 'zrealizowane', 'wycofane'])->default('aktywne');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('orders');
    }

}
