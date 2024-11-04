<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert(['name' => 'Miguel', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('authors')->insert(['name' => 'Fernando Pessoa','biography' => 'Fernando Pessoa biography' , 'created_at' => now(), 'updated_at' => now()]);
        DB::table('authors')->insert(['name' => 'José Saramago ','biography' => 'José Saramago biography',  'created_at' => now(), 'updated_at' => now()]);
        Author::factory(20)->create();
    }
}
