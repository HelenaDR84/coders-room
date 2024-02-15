<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExtraResource extends Model
{
    use HasFactory;
    protected $guarded = []; //indicamos que campos de la tabla no se puede manipular a traves del modelo con guarded
    public function resource1(): HasMany{
        return $this->hasMany(Resource::class,'extra_resource_id1');
    }
    
    public function resource2(): HasMany{
        return $this->hasMany(Resource::class,'extra_resource_id2');
    }
    
    public function resource3(): HasMany{
        return $this->hasMany(Resource::class,'extra_resource_id3');
    }
}
