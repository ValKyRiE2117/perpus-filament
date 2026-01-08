<?php

namespace Database\Seeders;

use App\Models\MembersModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MembersModel::create([
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com',
            'phone' => '123-456-7890',
            'address' => '123 Main St, City, Country',
        ]);

        MembersModel::create([
            'name' => 'Bob Smith',
            'email' => 'bob.smith@example.com',
            'phone' => '098-765-4321',
            'address' => '456 Oak Ave, City, Country',
        ]);

        MembersModel::create([
            'name' => 'Carol Williams',
            'email' => 'carol.williams@example.com',
            'phone' => '555-123-4567',
            'address' => '789 Pine Rd, City, Country',
        ]);

        MembersModel::create([
            'name' => 'David Brown',
            'email' => 'david.brown@example.com',
            'phone' => '111-222-3333',
            'address' => '101 Elm St, City, Country',
        ]);
    }
}
