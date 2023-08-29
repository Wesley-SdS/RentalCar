<?php
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();           
            $table->string( column:'first_name');
            $table->string( column:'last_name');
            $table->string( column:'phone')->nullable();
            $table->string( column:'email')->nullable();
            $table->string( column:'booking')->nullable();
            $table->string( column:'rental')->nullable();       
            $table->string( column:'reservation_view')->nullable();
            $table->decimal(column: 'total_price', total: 20, places: 2);
            $table->string(column: 'status', length: 45);
            $table->timestamps();
            $table->foreignIdFor( model:User::class, column: 'created_by')->nullable();
            $table->foreignIdFor( model:User::class, column: 'updated_by')->nullable();
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};