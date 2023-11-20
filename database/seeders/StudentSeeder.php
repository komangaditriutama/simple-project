<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'tina','gender' => 'P','nis' => '3221', 'class_id' => 1],
        //     ['name' => 'adi','gender' => 'L','nis' => '3222', 'class_id' => 2],
        //     ['name' => 'yanik','gender' => 'P','nis' => '3223', 'class_id' => 3],
        //     ['name' => 'Budi','gender' => 'L','nis' => '3224', 'class_id' => 4],
        // ];

        // foreach ($data as $value) {
        //     student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nis' => $value['nis'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);

        student::factory()-> count(100) ->create();
    }
}

