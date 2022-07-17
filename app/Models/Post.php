<?php

namespace App\Models;

class Post extends Model
{
    private static $blog_posts = [
        [
            "judul" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "yafi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit tempore libero similique, ipsa officiis necessitatibus aspernatur tempora sint error molestias repellendus nihil aliquid maxime provident possimus itaque autem animi saepe odio quod! Ea alias ipsam iste totam, et doloremque earum, maxime quis nisi non recusandae nihil, necessitatibus veritatis eveniet corrupti sunt. Accusantium, perspiciatis similique. Magnam, animi atque? Optio, unde repudiandae! Aliquam natus, recusandae deserunt fuga consequuntur et fugit minima, rerum placeat quod repellat laboriosam eos rem ipsam nihil facilis? Voluptatum nulla expedita vel accusantium asperiores itaque debitis, atque ipsa temporibus non reprehenderit voluptatibus tenetur consectetur nostrum praesentium in quia?"
        ],
    
        [
            "judul" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "yafi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam velit tempore libero similique, ipsa officiis necessitatibus aspernatur tempora sint error molestias repellendus nihil aliquid maxime provident possimus itaque autem animi saepe odio quod! Ea alias ipsam iste totam, et doloremque earum, maxime quis nisi non recusandae nihil, necessitatibus veritatis eveniet corrupti sunt. Accusantium, perspiciatis similique. Magnam, animi atque? Optio, unde repudiandae! Aliquam natus, recusandae deserunt fuga consequuntur et fugit minima, rerum placeat quod repellat laboriosam eos rem ipsam nihil facilis? Voluptatum nulla expedita vel accusantium asperiores itaque debitis, atque ipsa temporibus non reprehenderit voluptatibus tenetur consectetur nostrum praesentium in quia?"
        ]
    ];

    public static function all(){
        return self::$blog_posts;
    }
}
