<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


class Commerce extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'type',
        'lat',
        'lng',
    ];

    public function scopeSearch(Builder $builder, float $lat, float $lng, float $radius, array $types = null): Builder
    {
        return $builder->when($types, function ($query, $types) {
            return $query->whereIn('type', $types);
        })
            ->selectRaw(
                'id, name, address, phone, type, lat, lng, ( 6371 * acos( cos( radians(?) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(?) ) + sin( radians(?) ) * sin( radians( lat ) ) ) ) AS distance', [$lat, $lng, $lat])
            ->havingRaw('distance <= ?', [$radius])
            ->orderBy('distance');

    }
}
