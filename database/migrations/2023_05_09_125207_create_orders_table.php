<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('payment_method');
            $table
                ->enum('status', [
                    'pending',
                    'processing',
                    'delivering',
                    'completed',
                    'cancelled',
                    'refunded',
                ])
                ->default('pending');
            $table
                ->enum('payment_status', ['pending', 'paid', 'failed'])
                ->default('pending');
            $table->float('amount')->default(0);
            $table
                ->foreignId('product_id')
                ->nullable()
                ->constrained('products')
                ->nullOnDelete();
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
        Schema::dropIfExists('orders');
    }
}
