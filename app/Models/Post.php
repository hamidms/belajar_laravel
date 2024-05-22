<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Hamid Machfudin Sukardi',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptates eius deserunt accusamus, doloribus repellendus? Hic temporibus, doloribus quis voluptas harum officia! Animi omnis autem nihil veritatis aut eos veniam.'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'Hamid Machfudin Sukardi',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non tempore cum exercitationem perspiciatis necessitatibus sit saepe laboriosam eos cupiditate enim laborum nemo ducimus repellat tempora obcaecati qui recusandae, voluptatem atque porro explicabo!'
            ],
        ];
    }
    
    public static function find($slug): array {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        };
        
        return $post;
    }
}
