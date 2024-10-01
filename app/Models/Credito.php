<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'monto_credito', 'tasa_interes', 'estado_credito', 'dia_gracia', 'dia_atraso', 'monto_mora_diario', 'dias_atraso', 'monto_total_mora'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
}
