<?php

namespace App\Models;

class Post
{
    private static $blogPosts = [
        [
            "title" => 'Judul Pertama',
            "slug" => 'judul-pertama',
            "author" => 'Alwan H.',
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sit eaque adipisci reiciendis officiis harum saepe quaerat perspiciatis aliquam. Tempore, neque necessitatibus. Unde cum qui perspiciatis voluptate iste dolores eaque."
        ],
        [
            "title" => 'Judul Kedua',
            "slug" => 'judul-kedua',
            "author" => 'Budi H.',
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quos accusantium eius dolorem sit tempore culpa beatae nesciunt blanditiis suscipit provident debitis repudiandae hic incidunt eum ducimus voluptatum, doloribus eveniet atque harum, obcaecati reprehenderit, a illum! Placeat, iste ipsum? Nostrum, ratione obcaecati voluptatum facilis quasi quia tempora tenetur mollitia cum recusandae a sapiente libero magnam saepe nam in molestiae quam ex voluptatem iure neque reiciendis magni. Asperiores earum, est qui, repellat doloribus iste reiciendis aperiam aliquam ea, cum totam! Harum."
        ],
        [
            "title" => 'Judul Ketiga',
            "slug" => 'judul-ketiga',
            "author" => 'Cecep S.',
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, saepe vero magni reprehenderit omnis consectetur alias laudantium eligendi, repellat iusto minima aspernatur porro magnam veniam quod numquam aliquam, sunt non inventore pariatur cumque quis voluptatem mollitia velit. Ab, incidunt? Eaque rem iusto sed amet perferendis dolore aliquid animi! Adipisci eveniet quo quos tenetur magni est nisi illo amet deserunt qui voluptatibus veritatis temporibus veniam optio dicta quasi incidunt molestiae excepturi sunt, et laudantium praesentium mollitia nam ea. Deserunt magnam consectetur quas iure veniam voluptas a natus soluta nihil vero velit, assumenda obcaecati qui totam voluptatem distinctio tenetur suscipit ipsa. Asperiores?"
        ],

    ];

    public static function all()
    {
        // return self::$blogPosts;

        // fitur collection laravel
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        // Notes (PHP):
        // kalo method static pake static::nama_function()
        // kalo properti static pake self::nama_property

        $posts = static::all();

        // ambil semua posts lalu cari data pertama
        // dimana slug === $slug
        return $posts->firstWhere('slug', $slug);
    }
}
