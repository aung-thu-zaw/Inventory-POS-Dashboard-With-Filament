<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Province>
     */
    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<City>
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Warehouse>
     */
    public function warehouses(): HasMany
    {
        return $this->hasMany(Warehouse::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Supplier>
     */
    public function suppliers(): HasMany
    {
        return $this->hasMany(Supplier::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Customer>
     */
    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
