<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resource extends Model
{
    use HasFactory;
    protected $guarded = []; //indicamos que campos de la tabla no se puede manipular a traves del modelo con guarded
    public function type():BelongsTo{
        return $this->belongsTo(Type::class,'type_id');
    }
    public function category():BelongsTo{
        return $this->belongsTo(Category::class,'category_id');
    }
    public function extraResource1():BelongsTo{
        return $this->belongsTo(ExtraResource::class,'extra_resource_id1');
    }
    public function extraResource2():BelongsTo{
        return $this->belongsTo(ExtraResource::class,'extra_resource_id2');
    }
    public function extraResource3():BelongsTo{
        return $this->belongsTo(ExtraResource::class,'extra_resource_id3');
    }
}
