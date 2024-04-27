<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Ebook;
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
        Contact::create([
            'email' => 'admin@xplay-w3.com',
            'tiktok' => 'https://www.tiktok.com/@xplay.w3',
            'youtube' => 'https://www.youtube.com/@xplay-w3',
            'linkedin' => '',
            'instagram' => 'https://www.instagram.com/wildan_alansyar/',
            'twitter' => '',
            'discord' => 'https://discord.gg/HcYpsA6x',
            'telegram' => 'https://t.me/xplayw3',
        ]);
        Ebook::create([
            'title' => 'Your Step-By-Step Plan for Creating an Effective Sales Funnel',
            'image' => 'Your Step-By-Step Plan for Creating an Effective Sales Funnel',
            'pdf' => 'Your Step-By-Step Plan for Creating an Effective Sales Funnel',
            'body' => '· Create your 5-part sales funnel thats proven to grow revenue<br>
            · Apply the StoryBrand Framework to your marketing <br>
            · Watch your business grow! ',
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
