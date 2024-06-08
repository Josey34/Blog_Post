<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Josey Alexander',
            'username' => 'joseyalexander',
            'email' => 'josetakesan46@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Dodi',
        //     'email' => 'dodi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=> 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name'=> 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'Slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum exercitationem in amet minus magni voluptate, recusandae eaque repellat officia.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum exercitationem in amet minus magni voluptate, recusandae eaque repellat officia, illum perferendis dolorum reprehenderit et fuga doloremque esse illo quod consequatur alias quaerat ipsum delectus. Odio placeat repellat distinctio, reiciendis deleniti corporis quod voluptates provident laudantium veniam dolor tempora molestias, voluptatum excepturi repudiandae molestiae eligendi quo laboriosam! Vel, earum architecto repudiandae rem aspernatur quibusdam nulla cum accusantium voluptas aliquid repellendus quaerat reiciendis placeat animi aperiam suscipit omnis, deleniti veritatis quia fugiat dignissimos cumque. Nulla, cumque eos. Est ipsa perferendis magnam fugiat quo suscipit nisi ut quisquam velit, similique repellendus nemo.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'Slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum exercitationem in amet minus magni voluptate, recusandae eaque repellat officia.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum exercitationem in amet minus magni voluptate, recusandae eaque repellat officia, illum perferendis dolorum reprehenderit et fuga doloremque esse illo quod consequatur alias quaerat ipsum delectus. Odio placeat repellat distinctio, reiciendis deleniti corporis quod voluptates provident laudantium veniam dolor tempora molestias, voluptatum excepturi repudiandae molestiae eligendi quo laboriosam! Vel, earum architecto repudiandae rem aspernatur quibusdam nulla cum accusantium voluptas aliquid repellendus quaerat reiciendis placeat animi aperiam suscipit omnis, deleniti veritatis quia fugiat dignissimos cumque. Nulla, cumque eos. Est ipsa perferendis magnam fugiat quo suscipit nisi ut quisquam velit, similique repellendus nemo.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'Slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum exercitationem in amet minus magni voluptate, recusandae eaque repellat officia.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum exercitationem in amet minus magni voluptate, recusandae eaque repellat officia, illum perferendis dolorum reprehenderit et fuga doloremque esse illo quod consequatur alias quaerat ipsum delectus. Odio placeat repellat distinctio, reiciendis deleniti corporis quod voluptates provident laudantium veniam dolor tempora molestias, voluptatum excepturi repudiandae molestiae eligendi quo laboriosam! Vel, earum architecto repudiandae rem aspernatur quibusdam nulla cum accusantium voluptas aliquid repellendus quaerat reiciendis placeat animi aperiam suscipit omnis, deleniti veritatis quia fugiat dignissimos cumque. Nulla, cumque eos. Est ipsa perferendis magnam fugiat quo suscipit nisi ut quisquam velit, similique repellendus nemo.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'Slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum exercitationem in amet minus magni voluptate, recusandae eaque repellat officia.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nostrum exercitationem in amet minus magni voluptate, recusandae eaque repellat officia, illum perferendis dolorum reprehenderit et fuga doloremque esse illo quod consequatur alias quaerat ipsum delectus. Odio placeat repellat distinctio, reiciendis deleniti corporis quod voluptates provident laudantium veniam dolor tempora molestias, voluptatum excepturi repudiandae molestiae eligendi quo laboriosam! Vel, earum architecto repudiandae rem aspernatur quibusdam nulla cum accusantium voluptas aliquid repellendus quaerat reiciendis placeat animi aperiam suscipit omnis, deleniti veritatis quia fugiat dignissimos cumque. Nulla, cumque eos. Est ipsa perferendis magnam fugiat quo suscipit nisi ut quisquam velit, similique repellendus nemo.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        Post::factory(20)->create();
    }
}
