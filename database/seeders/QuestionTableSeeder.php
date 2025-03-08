<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'user_id' => 1,
                'title' => 'Question 1',
                'content' => 'Content for question 1',
                'answer' => 'Answer for question 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => 'Question 2',
                'content' => 'Content for question 2',
                'answer' => 'Answer for question 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more questions as needed
        ]);
    }
}
