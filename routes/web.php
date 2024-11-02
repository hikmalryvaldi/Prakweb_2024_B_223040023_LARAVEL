<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ["name" => "Hikmal Ryvaldi", "title" => "About"]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog",
        "posts" => [
            [
                "id" => 1,
                "title" => "Article 1",
                "author" => "Hikmal Ryvaldi",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nemo qui aliquid laboriosam doloribus sapiente sed. Maxime, neque ipsum commodi, facere maiores inventore voluptatibus iste tempore quia aspernatur modi assumenda?"
            ],
            [
                "id" => 2,
                "title" => "Article 2",
                "author" => "Balkis Innayah",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam recusandae neque quas repudiandae nobis, earum pariatur sunt, eius omnis totam cumque minima quis quibusdam, voluptatum ullam accusamus obcaecati itaque architecto. "
            ]
        ]
    ]);
});

Route::get("/post/{id}", function ($id) {
    $posts = [
        [
            "id" => 1,
            "title" => "Article 1",
            "author" => "Hikmal Ryvaldi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nemo qui aliquid laboriosam doloribus sapiente sed. Maxime, neque ipsum commodi, facere maiores inventore voluptatibus iste tempore quia aspernatur modi assumenda?"
        ],
        [
            "id" => 2,
            "title" => "Article 2",
            "author" => "Balkis Innayah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam recusandae neque quas repudiandae nobis, earum pariatur sunt, eius omnis totam cumque minima quis quibusdam, voluptatum ullam accusamus obcaecati itaque architecto. "
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post["id"] == $id;
    });

    return view("post", ["title" => "Single Post", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
