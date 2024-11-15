<?php

namespace App\Models;

use Illuminate\Support\Arr;

class post
{
  public static function all()
  {
    return [
      [
        'id' => '1',
        'slug' => 'judul-artikel-1',
        'title' => 'judul artikel 1',
        'author' => 'ahmad mulia huda',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magnam, a aliquam, sed voluptatem dolorem ipsa nostrum eos corrupti, possimus repellat consectetur velit veniam cum quod. Officia fuga iure dolorum.'
      ],
      [
        'id' => '2',
        'slug' => 'judul-artikel-2',
        'title' => 'judul artikel 2',
        'author' => 'ahmad mulia huda',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magnam, a aliquam, sed voluptatem dolorem ipsa nostrum eos corrupti, possimus repellat consectetur velit veniam cum quod. Officia fuga iure dolorum.'
      ]
    ];
  }

  public static function find($slug): array
  {
    // return Arr::first(static::all(), function ($post) use ($slug){
    //     return $post['slug'] == $slug;

    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (! $post) {
      abort(404);
    }
    return $post;
  }
}
