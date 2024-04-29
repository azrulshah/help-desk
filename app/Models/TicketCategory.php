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
        'slug',
        'parent_id',
    ];

    public function subCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id')
            ->select('parent_id', 'title');
    }
}
