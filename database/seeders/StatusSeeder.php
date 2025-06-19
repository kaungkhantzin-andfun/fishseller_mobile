<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'Active', 'slug' => 'active'],
            ['name' => 'Inactive', 'slug' => 'inactive'],
            ['name' => 'Banned', 'slug' => 'banned'],
            ['name' => 'Approved', 'slug' => 'approved'],
            ['name' => 'In Stock', 'slug' => 'in_stock'],
            ['name' => 'Out of Stock', 'slug' => 'out_of_stock'],
            ['name' => 'Available', 'slug' => 'available'],
            ['name' => 'Unavailable', 'slug' => 'unavailable'],
            ['name' => 'Pending', 'slug' => 'pending'],
            ['name' => 'Processing', 'slug' => 'processing'],
            ['name' => 'Shipped', 'slug' => 'shipped'],
            ['name' => 'Completed', 'slug' => 'completed'],
            ['name' => 'Cancelled', 'slug' => 'cancelled'],
            ['name' => 'Failed', 'slug' => 'failed'],
            ['name' => 'Refunded', 'slug' => 'refunded'],
            ['name' => 'Initiated', 'slug' => 'initiated'],
            ['name' => 'Successful', 'slug' => 'successful'],
            ['name' => 'New', 'slug' => 'new'],
            ['name' => 'Read', 'slug' => 'read'],
            ['name' => 'Replied', 'slug' => 'replied'],
        ];

        foreach ($statuses as $status) {
            Status::updateOrCreate(
                ['slug' => $status['slug']],
                ['name' => $status['name']]
            );
        }
    }
}
