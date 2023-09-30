<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categorias_id');
    }

    public function pago()
    {
        return $this->belongsTo(Pago::class, 'pagos_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'gastos_id');
    }

    public function etiquetas()
    {
        return $this->belongsToMany(Etiqueta::class, 'etiquetas_gastos', 'gastos_id', 'etiquetas_id');
    }
}
