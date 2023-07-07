<?php

namespace App\Models;

class posting
{
    private static $blog_post = 
    [
        [
            "title" => " The Journey of Faust",
            "slug" => "judul-post-pertama",
            "author" => "Galang Pratama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore fugit, esse obcaecati dicta ullam nihil, et eum assumenda sapiente omnis soluta animi unde excepturi eligendi cupiditate laborum quis corporis suscipit! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam nobis aliquam eveniet fugiat reiciendis nihil enim quia quasi eius exercitationem soluta et tempora aspernatur, quis nisi excepturi aut mollitia veritatis."
        ],
        [
            "title" => " Hebikura no Kiseki",
            "slug" => "judul-post-kedua",
            "author" => "Daffa Pandita",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore fugit, esse obcaecati dicta ullam nihil, et eum assumenda sapiente omnis soluta animi unde excepturi eligendi cupiditate laborum quis corporis suscipit! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam nobis aliquam eveniet fugiat reiciendis nihil enim quia quasi eius exercitationem soluta et tempora aspernatur, quis nisi excepturi aut mollitia veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore fugit, esse obcaecati dicta ullam nihil, et eum assumenda sapiente omnis soluta animi unde excepturi eligendi cupiditate laborum quis corporis suscipit! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam nobis aliquam eveniet fugiat reiciendis nihil enim quia quasi eius exercitationem soluta et tempora aspernatur, quis nisi excepturi aut mollitia veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore fugit, esse obcaecati dicta ullam nihil, et eum assumenda sapiente omnis soluta animi unde excepturi eligendi cupiditate laborum quis corporis suscipit! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam nobis aliquam eveniet fugiat reiciendis nihil enim quia quasi eius exercitationem soluta et tempora aspernatur, quis nisi excepturi aut mollitia veritatis."
        ]
    
    ];    

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
    //     $post = [];
    //     foreach($posts as $p){
    //     if ($p["slug"] === $slug) {
    //         $post = $p;
    //     }
    // }
    return $posts->firstWhere('slug', $slug);
    }
}

