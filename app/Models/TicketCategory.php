<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class TicketCategory extends Model
{
    use HasFactory;

    protected $table = 'ticket_categories';

    protected $fillable = [
        'title',
        'text_color',
        'bg_color',
        'slug',
        'parent_id',
    ];

    public function subCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id')
            ->select('parent_id', 'title');
    }

    public static function getSubCategories($slug)
    {
        if ($slug){
            $category_id = self::where('slug', $slug)->pluck('id')->first();
            return self::where('parent_id', $category_id)->pluck('title', 'slug')->toArray();
        }
        return subcategories_list();
    }

    public static function getCategories($slug)
    {
        if ($slug){
            $category_id = self::where('slug', $slug)->pluck('parent_id')->first();
            return self::where('id', $category_id)->pluck('slug')->first();
        }
    }

    public static function getCategoriesByParentId($id)
    {
        if ($id){
            return self::where('id', $id)->pluck('title', 'id')->first();
        }
    }
}
