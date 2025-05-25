<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Department extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name', ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
