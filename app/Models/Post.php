<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{

    public static function all(): array
    {
        $files = File::files(resource_path("posts/"));

        return array_map(function ($file) {
            return $file->getContents();
        }, $files);

        // arrow function
        // return array_map(fn($file)=>$file->getContents(), $files);
    }

    public static function find($slug)
    {

        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", now()->addMinutes(20), function () use ($path) {
            return file_get_contents($path);
        });
    }
}
