<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Alwan Hibatullah',
        'email' => 'alwanhibatullah@gmail.com',
        'image' => 'poto.jpg'
    ]);
});



Route::get('/blog', function () {
    $blogPosts = [
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

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blogPosts
    ]);
});


// halaman single post
Route::get('/posts/{slug}', function ($slug) {
    $blogPosts = [
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

    $newPost = [];
    foreach ($blogPosts as $post) {
        if ($post["slug"] === $slug) {
            $newPost = $post;
        }
    }
    return view('post', [
        "title" => 'Single Post',
        "post" => $newPost
    ]);
});
