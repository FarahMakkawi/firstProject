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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->decimal('price',12,2)->nullable();
            $table->longtext('description')->nullable();
            // اذا ما ملتزمة بالتسمية لازم مرر اسم الجدول واسم العمود الي عم ارتبط فيه 
           // $table->foreignId('category_id')->constrained('categories','اسم العمود اذا غير ايدي');
           $table->foreignId('category_id')->constrained()->cascadeOnDelete();
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
