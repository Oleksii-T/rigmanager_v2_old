<?php

namespace App\Models;

use App\Traits\TranslationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory, TranslationTrait;


    protected $fillable = [
        'category_id',
        'slug',
        'thread',
        'image'
    ];

    public static $translatable = [
        'name'
    ];    
    
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translatable');
    }

    public function children()
    {
        return $this->hasMany(Category::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getImageSrcAttribute()
    {
        if (!$this->image) {
            return null;
        }
		return Storage::disk('categories')->url($this->image);
    }

    //posts of this category and all subcategories
    public function postsDeep()
    {
        // todo
    }

    public static function equipments()
    {
        return self::where('thread', 1);
    }

    public static function services()
    {
        return self::where('thread', 2);
    }

    public static function tenders()
    {
        return self::where('thread', 3);
    }
}
