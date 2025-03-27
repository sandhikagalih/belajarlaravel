<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Sandhika Galih',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed magni quam eum provident expedita cumque non ducimus maxime. Quaerat commodi harum ducimus laborum ratione modi velit. Distinctio vero exercitationem esse!'
      ],
      [
        'id' => 2,
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'Sandhika Galih',
        'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi corrupti nesciunt nemo fugiat vero tempore, ducimus saepe facilis iste quasi recusandae, itaque odio aliquam doloribus! Ipsa beatae quo laborum a.'
      ]
    ];
  }

  public static function find($slug)
  {
    return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
  }
}
