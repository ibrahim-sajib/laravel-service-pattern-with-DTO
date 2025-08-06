<?php

namespace Database\Seeders;

use App\Enums\BlogSource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {

        \App\Models\Blog::create([
            'title' => 'Sample Blog Title',
            'body' => 'This is the body of the sample blog.',
            'source' => BlogSource::Api, 
        ]);
    }
}
