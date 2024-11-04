<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('works')->insert([
            ['title' => 'O Pequeno Príncipe',
                'description' => 'O Pequeno Príncipe description',
                'year_of_publication' => 1999,
                'code' => 'O Pequeno Príncipe code',
                'number_of_pages' => 200,
                'number_of_volumes' => 100,
                'work_type_id' => 1,
                'created_at' => now(),
                'updated_at' => now()],
            ['title' => 'Luisiadas',
                'description' => 'Luisiadas description',
                'year_of_publication' => 1572,
                'code' => 'Luisiadas',
                'number_of_pages' => 288,
                'number_of_volumes' => 60,
                'work_type_id' => 1,
                'created_at' => now(),
                'updated_at' => now()]

        ]);
        Work::factory(50)->create();
        Work::factory(10)->books()->create();
        Work::factory(10)->dvds()->create();
    }
}
