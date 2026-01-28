<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // 1. Önce Kategorilerini Oluştur (İstediğin isimlerle)
    $categories = [
        ['name' => 'Thedelay', 'slug' => 'thedelay'],
        ['name' => 'Error', 'slug' => 'error'],
        ['name' => 'AI', 'slug' => 'ai'],
        ['name' => 'Let\'s Think', 'slug' => 'lets-think'],
        ['name' => 'CvOrGpa', 'slug' => 'CvOrGpa'],
        ['name' => 'Motivation', 'slug' => 'motivation']
    ];
    foreach ($categories as $cat) {
        \App\Models\Category::create($cat);
    }

}
}
