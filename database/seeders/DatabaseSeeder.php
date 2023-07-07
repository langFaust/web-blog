<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Galang Pratama',
            'username' => 'galangfausto',
            'email' => 'galang@gmail.com',
            'password' => bcrypt('1234')
        ]);
        
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'Daffa Pandita',
        //     'email' => 'Daffa@gmail.com',
        //     'password' => bcrypt('16253')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design Grafis',
            'slug' => 'design-grafis'
        ]);

        Category::create([
            'name' => 'IT Networking',
            'slug' => 'it-networking'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quibusdam odio reiciendis nobis provident quidem labore quisquam officia numquam. Corporis eum nostrum et at unde natus earum excepturi molestiae id quibusdam voluptatem deleniti ullam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quibusdam odio reiciendis nobis provident quidem labore quisquam officia numquam. Corporis eum nostrum et at unde natus earum excepturi molestiae id quibusdam voluptatem deleniti ullam, sit repellendus quidem officia. Repellendus atque, aut quaerat repellat reiciendis quae dolores magni dicta veniam ad. Animi voluptatibus, est pariatur deserunt iusto architecto vero aspernatur facilis. Est dicta iusto, esse error ducimus quae, architecto soluta enim at ipsum praesentium deleniti natus nesciunt porro tempora molestiae quos obcaecati impedit, labore consectetur tenetur unde voluptatum perferendis. Quam quidem facilis aliquam saepe aspernatur eveniet expedita, accusantium neque quod cupiditate! Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quibusdam odio reiciendis nobis provident quidem labore quisquam officia numquam. Corporis eum nostrum et at unde natus earum excepturi molestiae id quibusdam voluptatem deleniti ullam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quibusdam odio reiciendis nobis provident quidem labore quisquam officia numquam. Corporis eum nostrum et at unde natus earum excepturi molestiae id quibusdam voluptatem deleniti ullam, sit repellendus quidem officia. Repellendus atque, aut quaerat repellat reiciendis quae dolores magni dicta veniam ad. Animi voluptatibus, est pariatur deserunt iusto architecto vero aspernatur facilis. Est dicta iusto, esse error ducimus quae, architecto soluta enim at ipsum praesentium deleniti natus nesciunt porro tempora molestiae quos obcaecati impedit, labore consectetur tenetur unde voluptatum perferendis. Quam quidem facilis aliquam saepe aspernatur eveniet expedita, accusantium neque quod cupiditate! Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quibusdam odio reiciendis nobis provident quidem labore quisquam officia numquam. Corporis eum nostrum et at unde natus earum excepturi molestiae id quibusdam voluptatem deleniti ullam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quibusdam odio reiciendis nobis provident quidem labore quisquam officia numquam. Corporis eum nostrum et at unde natus earum excepturi molestiae id quibusdam voluptatem deleniti ullam, sit repellendus quidem officia. Repellendus atque, aut quaerat repellat reiciendis quae dolores magni dicta veniam ad. Animi voluptatibus, est pariatur deserunt iusto architecto vero aspernatur facilis. Est dicta iusto, esse error ducimus quae, architecto soluta enim at ipsum praesentium deleniti natus nesciunt porro tempora molestiae quos obcaecati impedit, labore consectetur tenetur unde voluptatum perferendis. Quam quidem facilis aliquam saepe aspernatur eveniet expedita, accusantium neque quod cupiditate! Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quibusdam odio reiciendis nobis provident quidem labore quisquam officia numquam. Corporis eum nostrum et at unde natus earum excepturi molestiae id quibusdam voluptatem deleniti ullam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quibusdam odio reiciendis nobis provident quidem labore quisquam officia numquam. Corporis eum nostrum et at unde natus earum excepturi molestiae id quibusdam voluptatem deleniti ullam, sit repellendus quidem officia. Repellendus atque, aut quaerat repellat reiciendis quae dolores magni dicta veniam ad. Animi voluptatibus, est pariatur deserunt iusto architecto vero aspernatur facilis. Est dicta iusto, esse error ducimus quae, architecto soluta enim at ipsum praesentium deleniti natus nesciunt porro tempora molestiae quos obcaecati impedit, labore consectetur tenetur unde voluptatum perferendis. Quam quidem facilis aliquam saepe aspernatur eveniet expedita, accusantium neque quod cupiditate! Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
