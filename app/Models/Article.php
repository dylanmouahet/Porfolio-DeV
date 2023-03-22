<?php

namespace App\Models;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use UsesUuid;

    public function categorie()
    {
        return $this->belongsTo(CategoryArticle::class, "category_article_id", "id");
    }
}
