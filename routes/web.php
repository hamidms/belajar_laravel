<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Hamid Sukardi', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Hamid Machfudin Sukardi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptates eius deserunt accusamus, doloribus repellendus? Hic temporibus, doloribus quis voluptas harum officia! Animi omnis autem nihil veritatis aut eos veniam.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Hamid Machfudin Sukardi',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non tempore cum exercitationem perspiciatis necessitatibus sit saepe laboriosam eos cupiditate enim laborum nemo ducimus repellat tempora obcaecati qui recusandae, voluptatem atque porro explicabo!'
        ],
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
