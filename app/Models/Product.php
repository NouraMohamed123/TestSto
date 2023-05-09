<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Product extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $guarded = [];
    public $translatable = ['name', 'desc', 'descLong'];
    public function advantages()
    {
        return $this->hasMany(Advantage::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
