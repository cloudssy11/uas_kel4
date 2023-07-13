<?php

namespace App\Models;


class Post 
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Ammar Ayyasy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur totam illum maxime? Vero quae, quam maxime magnam cupiditate accusantium laudantium at vel odit saepe animi error, porro doloremque laborum. Nesciunt repudiandae enim asperiores ab! Nihil earum eveniet velit sequi? Consequatur blanditiis perspiciatis et quisquam saepe eum recusandae! Expedita distinctio consequatur, provident in maxime quo officiis laborum, quasi ex deserunt dolores dolorum quis sequi ducimus cum quae eligendi nulla sit ullam sint eum asperiores obcaecati libero? Molestiae suscipit quod non aperiam?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Suchiana Dea Eka",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi a necessitatibus, laudantium doloremque doloribus porro sint vel animi quod minus, quibusdam quo enim ipsa eum fugit quaerat. Nostrum, ratione rem deserunt dolor tempora sunt, ea distinctio, ad unde veritatis culpa? Quis eaque eveniet molestias deserunt minus dolor. Aut itaque perferendis libero iste enim at expedita ullam, minima autem unde rem molestias soluta? Perferendis fuga rerum perspiciatis quaerat aspernatur dicta quo ipsa. Tenetur autem quod maiores vitae asperiores, ab aperiam libero ipsa est tempore cupiditate illo hic officia. Qui praesentium possimus porro ipsum. Quia, neque magnam modi ipsum officiis qui sunt."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
