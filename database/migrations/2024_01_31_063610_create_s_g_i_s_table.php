<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('s_g_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('month');
            $table->integer('year');
            $table->string('details');
            $table->float('total_sale');
            $table->float('total_expenditure');
            $table->float('total_customer_due');
            $table->float('current_balance');
            $table->integer('made_by');
            $table->integer('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_g_i_s');
    }
};
