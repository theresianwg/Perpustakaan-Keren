<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookUser;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* ======== seed users table ======== */
        User::factory(10)->create();

        /* ======== seed categories table ======== */
        $categories = ['Horror', 'Fiction', 'Sci-fi', 'Thriller', 'Comedy', 'Romance', 'History', 'Academic'];
        foreach($categories as $category){
            Category::factory()->create(['name' => $category, 'slug' => Str::slug($category, '-')]);
        }
        
        /* ======== seed books table ======== */
        Category::all()->each(function($category){
            Book::factory(5)->create(['category_id' => $category->id]);
        });

        /* ======== seed book_user table ======== */
        User::all()->each(function($user){
            if($user->role === 'student'){
                Book::inRandomOrder()->limit(5)->get()->each(function($book) use($user) {
                    BookUser::factory()->create(['user_id' => $user->id, 'book_id' => $book->id]);
                });
            }
        });
    }
}
