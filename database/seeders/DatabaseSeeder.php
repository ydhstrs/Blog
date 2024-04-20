<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\LandingPageContent;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        LandingPageContent::create([
            'section_number' => 1,
            'title_head' => 'Haloo',
            'desc' => 'Selamat datang di website blog xplay w3',
        ]);
        LandingPageContent::create([
            'section_number' => 2,
            'title_head' => 'title',
            'desc' => 'desc',
            'subtitle1' => 'sub 1',
            'subtitle2' => 'sub 2',
            'subtitle3' => 'sub 3',
            'desc1' => 'desc 1',
            'desc2' => 'desc 2',
            'desc3' => 'desc 3',
        ]);
        LandingPageContent::create([
            'section_number' => 3,
            'title_head' => 'How can we help you grow your business?',
            'desc' => 'desc',
            'subtitle1' => 'sub 1',
            'subtitle2' => 'sub 2',
            'subtitle3' => 'sub 3',
            'desc1' => 'desc 1',
            'desc2' => 'desc 2',
            'desc3' => 'desc 3',
        ]);
        LandingPageContent::create([
            'section_number' => 4,
            'title_head' => 'Lupa',
            'desc' => 'desc',
            'subtitle1' => 'sub 1',
            'subtitle2' => 'sub 2',
            'subtitle3' => 'sub 3',
            'desc1' => 'desc 1',
            'desc2' => 'desc 2',
            'desc3' => 'desc 3',
        ]);
        Category::create([
            'name' => 'Airdrop Gratis',
        ]);
        Category::create([
            'name' => 'Berita Airdrop',
        ]);
        Category::create([
            'name' => 'Tutor',
        ]);
    }
}
