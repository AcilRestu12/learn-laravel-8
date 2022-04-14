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

// Route untuk halaman home
Route::get('/', function () {
    return view('home', [           // Akan memanggil file view home.blade.php di folder resources/views
        "title" => 'Home'           // Akan mengirimkan data ke file view dan disimpan sebagai variabel title
    ]); 
});


// Route untuk halaman about
Route::get('/about', function () {
    return view('about', [          // Akan memanggil file view about.blade.php di folder resources/views
        "title" => 'About',                         // Akan mengirimkan data ke file view dan disimpan sebagai variabel title
        "name" => "Arieska Restu",                  // Akan mengirimkan data ke file view dan disimpan sebagai variabel name
        "email" => "arieskarestu214@gmail.com",     // Akan mengirimkan data ke file view dan disimpan sebagai variabel email
        "image" => 'ice.jpg'                        // Akan mengirimkan data ke file view dan disimpan sebagai variabel image
    ]);           
});


// Route untuk halaman posts
Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Arieska Restu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ullam repellat praesentium accusantium aspernatur! Commodi illum odio cum deserunt. Magnam, dolorem sunt. Quasi voluptate recusandae ipsa ea reiciendis, distinctio architecto harum facilis sit debitis ullam reprehenderit, nesciunt nam! Dolor eaque neque, delectus iure mollitia esse odit officiis. Quibusdam dolore tempora inventore ex dolorem mollitia quis corrupti, facilis sed incidunt dolores id reprehenderit amet, vero omnis libero nisi molestiae cum beatae ab earum, et provident temporibus? Omnis rem exercitationem mollitia necessitatibus?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Evory Restu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aut, dolor repellat explicabo delectus assumenda est eum commodi similique reprehenderit cum blanditiis non magni cupiditate ducimus beatae recusandae doloremque maxime praesentium pariatur consequuntur asperiores totam maiores? Earum ducimus dolores nulla praesentium molestiae, inventore aperiam autem soluta accusamus pariatur? Maxime eveniet enim quo debitis. Quaerat, beatae. Quibusdam quae rem atque excepturi, minus aperiam repellat possimus fugiat. Tenetur accusamus necessitatibus delectus harum tempore. Laboriosam, deleniti maiores harum eius odio saepe quod vel! Quod hic rem aliquam culpa deserunt harum molestiae ad dignissimos unde. Ut odit esse minima explicabo corporis sunt voluptatum quidem?'
        ]
    ];
    
    return view('posts', [              // Akan memanggil file view home.blade.php di folder resources/views
        "title" => 'Posts',             // Akan mengirimkan data title ke file view dan disimpan sebagai variabel title
        'posts' => $blog_posts          // Akan mengirimkan data posts ke file view dan disimpan sebagai variabel posts
    ]); 
});


// Route untuk halaman single post
Route::get('posts/{slug}', function($slug) {        // Mengambil parameter slug dari url
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Arieska Restu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ullam repellat praesentium accusantium aspernatur! Commodi illum odio cum deserunt. Magnam, dolorem sunt. Quasi voluptate recusandae ipsa ea reiciendis, distinctio architecto harum facilis sit debitis ullam reprehenderit, nesciunt nam! Dolor eaque neque, delectus iure mollitia esse odit officiis. Quibusdam dolore tempora inventore ex dolorem mollitia quis corrupti, facilis sed incidunt dolores id reprehenderit amet, vero omnis libero nisi molestiae cum beatae ab earum, et provident temporibus? Omnis rem exercitationem mollitia necessitatibus?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Evory Restu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aut, dolor repellat explicabo delectus assumenda est eum commodi similique reprehenderit cum blanditiis non magni cupiditate ducimus beatae recusandae doloremque maxime praesentium pariatur consequuntur asperiores totam maiores? Earum ducimus dolores nulla praesentium molestiae, inventore aperiam autem soluta accusamus pariatur? Maxime eveniet enim quo debitis. Quaerat, beatae. Quibusdam quae rem atque excepturi, minus aperiam repellat possimus fugiat. Tenetur accusamus necessitatibus delectus harum tempore. Laboriosam, deleniti maiores harum eius odio saepe quod vel! Quod hic rem aliquam culpa deserunt harum molestiae ad dignissimos unde. Ut odit esse minima explicabo corporis sunt voluptatum quidem?'
        ]
    ];

    $new_post = [];                             // Array kosong untuk menampung post yg akan ditampilkan
    foreach ($blog_posts as $post) {            // Melakukan looping untuk setiap post
        if ( $post['slug'] === $slug ) {        // Jika slug dari url sama seperti slug di suatu blog
            $new_post = $post;                  // Menaruh post di varibel $new_post
        }
    }
    
    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);

});

