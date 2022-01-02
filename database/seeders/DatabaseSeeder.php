<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Alwan Hibatullah',
        //     'email' => 'alwan@email.com',
        //     'password' => bcrypt('admin')
        // ]);

        // User::create([
        //     'name' => 'Budi Hartono',
        //     'email' => 'budi@email.com',
        //     'password' => bcrypt('admin')
        // ]);





        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, magnam quam. Ratione nobis, necessitatibus eius id perspiciatis tempora excepturi nostrum!',
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non nam ex earum neque fugiat iure assumenda ab temporibus aliquid eius voluptatem consectetur deserunt magnam, commodi dicta voluptas aliquam illum dolorum. Numquam eum cupiditate ut ex explicabo quia laudantium assumenda neque.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt laudantium vero ipsam eum nam expedita molestias, facilis illum optio laboriosam. Voluptatum facere aspernatur eligendi tempora perferendis ratione alias odio recusandae animi consectetur illum neque amet libero, eaque placeat, velit debitis.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum eos similique voluptas magnam eligendi sed voluptate consequatur fuga, ab, odio aliquid ea rerum nisi repellendus minus sint neque inventore, mollitia facere corporis. Labore ratione eum, nulla id qui possimus aut?</p>",
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, magnam quam. Ratione nobis, necessitatibus eius id perspiciatis tempora excepturi nostrum!',
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non nam ex earum neque fugiat iure assumenda ab temporibus aliquid eius voluptatem consectetur deserunt magnam, commodi dicta voluptas aliquam illum dolorum. Numquam eum cupiditate ut ex explicabo quia laudantium assumenda neque.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt laudantium vero ipsam eum nam expedita molestias, facilis illum optio laboriosam. Voluptatum facere aspernatur eligendi tempora perferendis ratione alias odio recusandae animi consectetur illum neque amet libero, eaque placeat, velit debitis.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum eos similique voluptas magnam eligendi sed voluptate consequatur fuga, ab, odio aliquid ea rerum nisi repellendus minus sint neque inventore, mollitia facere corporis. Labore ratione eum, nulla id qui possimus aut?</p>",
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, magnam quam. Ratione nobis, necessitatibus eius id perspiciatis tempora excepturi nostrum!',
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non nam ex earum neque fugiat iure assumenda ab temporibus aliquid eius voluptatem consectetur deserunt magnam, commodi dicta voluptas aliquam illum dolorum. Numquam eum cupiditate ut ex explicabo quia laudantium assumenda neque.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt laudantium vero ipsam eum nam expedita molestias, facilis illum optio laboriosam. Voluptatum facere aspernatur eligendi tempora perferendis ratione alias odio recusandae animi consectetur illum neque amet libero, eaque placeat, velit debitis.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum eos similique voluptas magnam eligendi sed voluptate consequatur fuga, ab, odio aliquid ea rerum nisi repellendus minus sint neque inventore, mollitia facere corporis. Labore ratione eum, nulla id qui possimus aut?</p>",
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, magnam quam. Ratione nobis, necessitatibus eius id perspiciatis tempora excepturi nostrum!',
        //     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non nam ex earum neque fugiat iure assumenda ab temporibus aliquid eius voluptatem consectetur deserunt magnam, commodi dicta voluptas aliquam illum dolorum. Numquam eum cupiditate ut ex explicabo quia laudantium assumenda neque.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt laudantium vero ipsam eum nam expedita molestias, facilis illum optio laboriosam. Voluptatum facere aspernatur eligendi tempora perferendis ratione alias odio recusandae animi consectetur illum neque amet libero, eaque placeat, velit debitis.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum eos similique voluptas magnam eligendi sed voluptate consequatur fuga, ab, odio aliquid ea rerum nisi repellendus minus sint neque inventore, mollitia facere corporis. Labore ratione eum, nulla id qui possimus aut?</p>",
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
