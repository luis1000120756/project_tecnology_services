<?php

namespace App\Models\products;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'description',
        'price',
        'image_path',
    ];

    // Convierte el campo image_path en array automáticamente
    protected $casts = [
        'image_path' => 'array',
    ];

    // 👇 Esto hace que el atributo calculado siempre aparezca en JSON
    protected $appends = ['first_image_url'];

    // Accesor: devuelve la primera imagen o una por defecto
    public function getFirstImageUrlAttribute()
    {
        if (is_array($this->image_path) && count($this->image_path) > 0) {
            return asset('storage/' . $this->image_path[0]);
        }

        // Imagen por defecto si no hay ninguna
        return asset('img/default-product.jpg');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
