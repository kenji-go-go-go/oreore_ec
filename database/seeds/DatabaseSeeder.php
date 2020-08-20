<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            Delivery_methodsTableSeeder::class,
            StatusesTableSeeder::class,
            ProductsTableSeeder::class,
            DeliveriesTableSeeder::class,
            AdministratorsTableSeeder::class,
            TracksTableSeeder::class,
            Transport_managersTableSeeder::class,
            DestinationsTableSeeder::class,
            OrdersTableSeeder::class,
            Order_detailsTableSeeder::class,
            Order_breakdownsTableSeeder::class,
            Site_mastersTableSeeder::class,
            Transport_managementsTableSeeder::class,
        ]);
    }
}
