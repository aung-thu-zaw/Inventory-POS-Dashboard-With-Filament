<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            UnitSeeder::class,
            WarrantySeeder::class,
            CouponSeeder::class,
            ExpenseCategorySeeder::class,
            ExpenseSeeder::class,
            CountrySeeder::class,
            ProvinceSeeder::class,
            CitySeeder::class,
            CustomerSeeder::class,
            SupplierSeeder::class,
            WarehouseSeeder::class,
            ProductSeeder::class
        ]);
    }
}
