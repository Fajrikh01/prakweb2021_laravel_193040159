<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        /*
        User:: create([
            'name' => 'Fajri Khoirunnisa',
            'email' => 'fajrikhoi@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        User:: create([
            'name' => 'Park Woojin',
            'email' => 'ujin@gmail.com',
            'password' => bcrypt('12345')
        ]);
        */

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
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

        /*
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis sequi nobis cupiditate,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis sequi nobis cupiditate, labore pariatur totam culpa magnam, deserunt, in quidem eaque expedita reiciendis! Corporis assumenda labore numquam, doloribus molestiae fugiat quibusdam sit veritatis ipsum tempore cum, dicta atque, quo sint nobis perferendis! Necessitatibus beatae, sapiente blanditiis commodi provident nulla repellendus molestias tempora earum repellat minima! Ut recusandae deleniti fuga accusantium unde deserunt nisi at, laudantium placeat, rerum magnam nihil aut optio molestiae. Qui, odit laboriosam, sed quaerat delectus similique fugiat consequatur alias earum, minus debitis repellat voluptates sapiente? Accusantium officiis eius commodi atque laudantium repudiandae labore dolor maiores libero.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis sequi nobis cupiditate,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis sequi nobis cupiditate, labore pariatur totam culpa magnam, deserunt, in quidem eaque expedita reiciendis! Corporis assumenda labore numquam, doloribus molestiae fugiat quibusdam sit veritatis ipsum tempore cum, dicta atque, quo sint nobis perferendis! Necessitatibus beatae, sapiente blanditiis commodi provident nulla repellendus molestias tempora earum repellat minima! Ut recusandae deleniti fuga accusantium unde deserunt nisi at, laudantium placeat, rerum magnam nihil aut optio molestiae. Qui, odit laboriosam, sed quaerat delectus similique fugiat consequatur alias earum, minus debitis repellat voluptates sapiente? Accusantium officiis eius commodi atque laudantium repudiandae labore dolor maiores libero.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis sequi nobis cupiditate,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis sequi nobis cupiditate, labore pariatur totam culpa magnam, deserunt, in quidem eaque expedita reiciendis! Corporis assumenda labore numquam, doloribus molestiae fugiat quibusdam sit veritatis ipsum tempore cum, dicta atque, quo sint nobis perferendis! Necessitatibus beatae, sapiente blanditiis commodi provident nulla repellendus molestias tempora earum repellat minima! Ut recusandae deleniti fuga accusantium unde deserunt nisi at, laudantium placeat, rerum magnam nihil aut optio molestiae. Qui, odit laboriosam, sed quaerat delectus similique fugiat consequatur alias earum, minus debitis repellat voluptates sapiente? Accusantium officiis eius commodi atque laudantium repudiandae labore dolor maiores libero.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis sequi nobis cupiditate,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis debitis sequi nobis cupiditate, labore pariatur totam culpa magnam, deserunt, in quidem eaque expedita reiciendis! Corporis assumenda labore numquam, doloribus molestiae fugiat quibusdam sit veritatis ipsum tempore cum, dicta atque, quo sint nobis perferendis! Necessitatibus beatae, sapiente blanditiis commodi provident nulla repellendus molestias tempora earum repellat minima! Ut recusandae deleniti fuga accusantium unde deserunt nisi at, laudantium placeat, rerum magnam nihil aut optio molestiae. Qui, odit laboriosam, sed quaerat delectus similique fugiat consequatur alias earum, minus debitis repellat voluptates sapiente? Accusantium officiis eius commodi atque laudantium repudiandae labore dolor maiores libero.',
            'category_id' => 2,
            'user_id' => 2
        ]);*/
    }
}
