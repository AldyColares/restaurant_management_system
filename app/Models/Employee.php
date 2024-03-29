<?php

namespace App\Models;

use Database\Seeders\TopunchTheClockSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    use HasFactory;

    public function adminUser(): BelongsToMany
    {
        return $this->belongsToMany(AdminUser::class);
    }

    public function ToPunchTheClock(): BelongsToMany
    {
        return $this->belongsToMany(TopunchTheClock::class);
    }
}
