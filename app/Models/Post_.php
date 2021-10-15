<?php

namespace App\Models;

class Post
{
    static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fajri Khoirunnisa",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae atque officia voluptates harum ratione quae dolorum ipsa doloribus, officiis placeat, error sit odit mollitia, molestias ullam labore! Hic eum tempore reiciendis incidunt, magnam recusandae necessitatibus nesciunt et nostrum expedita totam qui ea eaque sequi id veritatis quidem, nisi eligendi, debitis ducimus dignissimos? Fuga in ipsa placeat aperiam, quam nemo rerum? Quos ipsum minus sequi distinctio quae, nam esse laudantium error impedit blanditiis reprehenderit quis suscipit molestias veritatis omnis! Assumenda et voluptatem temporibus sint modi nemo quae repellat, quia laboriosam perspiciatis dolor impedit cupiditate doloribus saepe unde rem ex tempora inventore!"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Park Woojin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni reiciendis suscipit quia maiores vel sit sint, ad voluptatibus. Soluta amet repellat rerum optio vero, accusantium ratione fuga nemo quia odio ipsa a laborum dolorum alias iusto assumenda maxime quaerat quo delectus neque distinctio. Eaque, quos voluptates ipsum error illum consequatur, quia accusantium repellendus ea, magni illo sint. Nesciunt, id, nam necessitatibus architecto placeat quo soluta alias maxime et iure molestiae suscipit. Modi illo aperiam doloribus est error provident magnam similique?"
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstwhere('slug', $slug);
    }
}
