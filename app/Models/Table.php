<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Table extends Model
{
    use HasFactory;

     /**
     * Get the comments for the blog post.
     */
    public function reservationTables(): HasMany
    {
        return $this->hasMany(ReservationTable::class);
    }
}
