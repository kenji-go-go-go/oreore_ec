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
            DestinationsTableSeeder::class,
            DeliveriesTableSeeder::class,
            Delivery_methodsTableSeeder::class,
            StatususTableSeeder::class,
            AdministratorsTableSeeder::class,
            TracksTableSeeder::class,
            Transport_managersTableSeeder::class,
            ProductsTableSeeder::class,
            OrdersTableSeeder::class,
            Order_detailsTableSeeder::class,
            Order_breakdownsTableSeeder::class,
            Site_mastersTableSeeder::class,
            Transport_managementsTableSeeder::class,
        ]);
    }
}
