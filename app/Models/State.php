<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class State extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name'];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
