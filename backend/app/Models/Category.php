<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'categories';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        "name_ar",
        "name_en",
        "slug",
        "icon",
        "parent_id"
    ];

    public function children()
    {
        return $this->hasMany(Category::class, "parent_id");
    }

}
