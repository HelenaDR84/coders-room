<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;
    protected $guarded = []; //indicamos que campos de la tabla no se puede manipular a traves del modelo con guarded
    public function resources(): HasMany{
        return $this->hasMany(Resource::class,'type_id');
    }
}
