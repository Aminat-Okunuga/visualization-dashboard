<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;


class RelevanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seeders/Data.csv'), 'r');
        $csv->setHeaderOffset(0); // Assuming the first row contains headers

        foreach ($csv as $row) {
            DB::table('relevances')->insert([
                'relevance' => $row['relevance'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
