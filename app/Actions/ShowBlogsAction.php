<?php

namespace App\Actions;

use App\Models\Blog;
use Exception;

class ShowBlogsAction
{
    public function handle()
    {
        try {
            return Blog::all();
        } catch (Exception $e) {
            throw new \RuntimeException('Blogs fetching failed.  '.$e->getMessage());
        }
    }
} 