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
        Schema::create('website_business_partners', function (Blueprint $table) {
            $table->id();
            $table->integer('serial')->nullable();
            $table->string('partner_name');
            $table->string('website')->nullable();
            $table->text('logo')->nullable();
            $table->longText('description')->nullable();
            $table->integer('status')->default(1);
            $table->integer('entry_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_business_partners');
    }
};
