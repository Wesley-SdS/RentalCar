<?php
use App\Models\User;
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
            $table->string(column: 'models', length: 2000);
            $table->string(column: 'brand', length: 2000);
            $table->string(column: 'plate', length: 2000);
            $table->string(column: 'category', length: 2000);
            $table->longText(column: 'description')->nullable();
            $table->decimal(column: 'rent', total: 10, places: 2);
            $table->string(column: 'slug', length: 2000);
            $table->string(column: 'image', length: 2000)->nullable();
            $table->string(column: 'image_mini')->nullable();
            $table->integer(column: 'image_size')->nullable();            
            $table->foreignIdFor(model: User::class, column: 'created_by')->nullable();
            $table->foreignIdFor(model: User::class, column: 'updated_by')->nullable();
            $table->softDeletes();
            $table->foreignIdFor(model: User::class, column: 'deleted_by')->nullable();
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
