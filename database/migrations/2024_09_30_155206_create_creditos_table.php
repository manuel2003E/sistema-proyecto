<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditosTable extends Migration
{
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->decimal('monto_credito', 10, 2);
            $table->decimal('tasa_interes', 5, 2);
            $table->string('estado_credito');
            $table->integer('dia_gracia');
            $table->integer('dia_atraso');
            $table->decimal('monto_mora_diario', 10, 2);
            $table->integer('dias_atraso');
            $table->decimal('monto_total_mora', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('creditos');
    }
}
