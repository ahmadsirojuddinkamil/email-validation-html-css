<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Jumbotron;
use App\Models\Product;
use App\Models\Promo;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'alexander',
            'username' => 'alexander graham',
            'slug' => 'alexander-graham',
            'email' => 'alexander@gmail.com',
            'password' => bcrypt('12345678')
        ]);



        // // start jumbotron
        Jumbotron::create([
            'imageJumbotron' => 'img/hero/banner.jpg',
            'judulJumbotron' => 'FRUIT FRESH',
            'judulUtama' => 'Vegetable',
            'organic' => '100% Organic',
            'deskripsi' => 'Free Pickup and Delivery Available',
            'action' => 'SHOP NOW',
            'user_id' => 1,
            'slug' => 'jumbotron'
        ]);
        // // end jumbotron



        // // start categorie
        Categorie::create([
            'judulCategory' => 'Fruits',
            'slug' => 'Fruits',
            'imageCategory' => 'img/categories/cat-1.jpg',
            'user_id' => 1,
        ]);

        Categorie::create([
            'judulCategory' => 'Fresh Meat',
            'slug' => 'Fresh-Meat',
            'imageCategory' => 'img/categories/cat-2.jpg',
            'user_id' => 1,
        ]);

        Categorie::create([
            'judulCategory' => 'Vegetables',
            'slug' => 'Vegetables',
            'imageCategory' => 'img/categories/cat-3.jpg',
            'user_id' => 1,
        ]);

        Categorie::create([
            'judulCategory' => 'Fastfood',
            'slug' => 'Fastfood',
            'imageCategory' => 'img/categories/cat-4.jpg',
            'user_id' => 1,
        ]);
        // // end categorie



        // // start product
        Product::create([
            'categorie_id' => 2,
            'user_id' => 1,
            'imageProduct' => 'img/featured/feature-1.jpg',
            'judulProduct' => 'Raw Meat',
            'slug' => 'Raw-Meat',
            'price' => '70.00',
            'produkBox' => 'fresh-meat',

            'deskripsi' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form',

            'detail' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.'
        ]);

        Product::create([
            'categorie_id' => 1,
            'user_id' => 1,
            'imageProduct' => 'img/featured/feature-2.jpg',
            'judulProduct' => 'Banana',
            'slug' => 'Banana',
            'price' => '20.00',
            'produkBox' => 'vegetables oranges',

            'deskripsi' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form',

            'detail' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.'
        ]);

        Product::create([
            'categorie_id' => 1,
            'user_id' => 1,
            'imageProduct' => 'img/featured/feature-3.jpg',
            'judulProduct' => 'Guava',
            'slug' => 'Guava',
            'price' => '25.00',
            'produkBox' => 'vegetables',

            'deskripsi' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form',

            'detail' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.'
        ]);

        Product::create([
            'categorie_id' => 1,
            'user_id' => 1,
            'imageProduct' => 'img/featured/feature-4.jpg',
            'judulProduct' => 'Watermelon',
            'slug' => 'Watermelon',
            'price' => '40.00',
            'produkBox' => 'vegetables',

            'deskripsi' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form',

            'detail' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.'
        ]);

        Product::create([
            'categorie_id' => 3,
            'user_id' => 1,
            'imageProduct' => 'img/featured/feature-5.jpg',
            'judulProduct' => 'Grape',
            'slug' => 'Grape',
            'price' => '45.00',
            'produkBox' => 'vegetables',

            'deskripsi' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form',

            'detail' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.'
        ]);

        Product::create([
            'categorie_id' => 4,
            'user_id' => 1,
            'imageProduct' => 'img/featured/feature-6.jpg',
            'judulProduct' => 'hamburger',
            'slug' => 'hamburger',
            'price' => '40.00',
            'produkBox' => 'fastfood',

            'deskripsi' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form',

            'detail' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.'
        ]);

        Product::create([
            'categorie_id' => 3,
            'user_id' => 1,
            'imageProduct' => 'img/featured/feature-7.jpg',
            'judulProduct' => 'Mango',
            'slug' => 'Mango',
            'price' => '25.00',
            'produkBox' => 'vegetables oranges',

            'deskripsi' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form',

            'detail' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.'
        ]);

        Product::create([
            'categorie_id' => 3,
            'user_id' => 1,
            'imageProduct' => 'img/featured/feature-8.jpg',
            'judulProduct' => 'Apple',
            'slug' => 'Apple',
            'price' => '50.00',
            'produkBox' => 'vegetables',

            'deskripsi' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form',

            'detail' => 'There are many variations of Lorem Ipsums writing available, but most of them have undergone a change in form, either because of the humor element or the sentences being scrambled to make it look very unreasonable. If you want to use Lorem Ipsums writing, you have to make sure that there are no embarrassing passages hidden in the middle of the script. All Lorem Ipsum generators on the internet tend to repeat certain parts. Thats why this is the first real generator on the internet. He uses a vocabulary dictionary of 200 Latin words, combined with lots of example sentence structures to produce Lorem Ipsun that seems plausible. Because of that Lorem Ipsun produced will always be free from repetition, elements of humor that are intentionally included, words that do not match their characteristics and so on.'
        ]);
        // // end product



        // // start banner
        Banner::create([
            'image' => 'img/banner/banner-1.jpg',
            'user_id' => 1,
            'title' => 'healthy food and drink',
            'slug' => 'healthy-food'
        ]);

        Banner::create([
            'image' => 'img/banner/banner-2.jpg',
            'user_id' => 1,
            'title' => 'low sugar food and drink',
            'slug' => 'low-sugar'
        ]);
        // // end banner



        // // start promo product
        Promo::create([
            'imagePromo' => 'img/latest-product/lp-1.jpg',
            'namePromo' => 'mustard',
            'pricePromo' => '20.00',
            'categorie_id' => 1,
            'user_id' => 1,
            'slug' => 'mustard'
        ]);

        Promo::create([
            'imagePromo' => 'img/latest-product/lp-2.jpg',
            'namePromo' => 'paprika',
            'pricePromo' => '30.00',
            'categorie_id' => 1,
            'user_id' => 1,
            'slug' => 'paprika'
        ]);

        Promo::create([
            'imagePromo' => 'img/latest-product/lp-9.jpg',
            'namePromo' => 'apple',
            'pricePromo' => '70.00',
            'categorie_id' => 2,
            'user_id' => 1,
            'slug' => 'apple'
        ]);

        Promo::create([
            'imagePromo' => 'img/latest-product/lp-4.jpg',
            'namePromo' => 'fresh meat',
            'pricePromo' => '50.00',
            'categorie_id' => 2,
            'user_id' => 1,
            'slug' => 'fresh-meat'
        ]);

        Promo::create([
            'imagePromo' => 'img/latest-product/lp-5.jpg',
            'namePromo' => 'banana',
            'pricePromo' => '10.00',
            'categorie_id' => 3,
            'user_id' => 1,
            'slug' => 'banana'
        ]);

        Promo::create([
            'imagePromo' => 'img/latest-product/lp-6.jpg',
            'namePromo' => 'guava',
            'pricePromo' => '15.00',
            'categorie_id' => 3,
            'user_id' => 1,
            'slug' => 'guava'
        ]);

        Promo::create([
            'imagePromo' => 'img/latest-product/lp-7.jpg',
            'namePromo' => 'watermellon',
            'pricePromo' => '55.00',
            'categorie_id' => 4,
            'user_id' => 1,
            'slug' => 'watermellon'
        ]);

        Promo::create([
            'imagePromo' => 'img/latest-product/lp-8.jpg',
            'namePromo' => 'grape',
            'pricePromo' => '100.00',
            'categorie_id' => 4,
            'user_id' => 1,
            'slug' => 'grape'
        ]);
        // // end promo product



        // // start blog
        Blog::create([
            'imageBlog' => 'img/blog/blog-1.jpg',
            'date' => 'May 4,2022',
            'comment' => '5',
            'nameBlog' => 'Cooking tips make cooking simple',

            'deskripsi' => 'Daily Cooking Menu for 1 Month - Everyone can always need food, so almost every day someone will process food. Everyones appetite is not always the same, some prefer processed Indonesian dishes, certain Indonesian dishes, Asian dishes, European dishes, and so on. If so, where do you prefer Grameds to cook from? Wherever a dish comes from, as long as it is made or cooked with the right mix and method, it will taste delicious. Whats more, if cooked wholeheartedly, the taste will be even more delicious. For Grameds who are still confused about the daily menu for a month, dont worry, because this article will discuss a suitable menu to accompany your daily meals for a month. So, check out the review, Grameds.',

            'slug' => 'Cooking-tips',
            'user_id' => 1,
        ]);

        Blog::create([
            'imageBlog' => 'img/blog/blog-2.jpg',
            'date' => 'july 16,2022',
            'comment' => '7',
            'nameBlog' => '6 ways to prepare breakfast for 30',

            'deskripsi' => 'Daily Cooking Menu for 1 Month - Everyone can always need food, so almost every day someone will process food. Everyones appetite is not always the same, some prefer processed Indonesian dishes, certain Indonesian dishes, Asian dishes, European dishes, and so on. If so, where do you prefer Grameds to cook from? Wherever a dish comes from, as long as it is made or cooked with the right mix and method, it will taste delicious. Whats more, if cooked wholeheartedly, the taste will be even more delicious. For Grameds who are still confused about the daily menu for a month, dont worry, because this article will discuss a suitable menu to accompany your daily meals for a month. So, check out the review, Grameds.',

            'slug' => '6-ways-to',
            'user_id' => 1,
        ]);

        Blog::create([
            'imageBlog' => 'img/blog/blog-3.jpg',
            'date' => 'maret 26,2022',
            'comment' => '10',
            'nameBlog' => 'Visit the clean farm in the US',

            'deskripsi' => 'Daily Cooking Menu for 1 Month - Everyone can always need food, so almost every day someone will process food. Everyones appetite is not always the same, some prefer processed Indonesian dishes, certain Indonesian dishes, Asian dishes, European dishes, and so on. If so, where do you prefer Grameds to cook from? Wherever a dish comes from, as long as it is made or cooked with the right mix and method, it will taste delicious. Whats more, if cooked wholeheartedly, the taste will be even more delicious. For Grameds who are still confused about the daily menu for a month, dont worry, because this article will discuss a suitable menu to accompany your daily meals for a month. So, check out the review, Grameds.',

            'slug' => 'Visit-the-clean',
            'user_id' => 1,
        ]);
        // // end blog

    }
}
