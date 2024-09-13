<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = config('books');

        foreach ($books as $book) {
            $new_book = new Book();
            $new_book->title = $book['title'];
            $new_book->slug = Str::slug($book['title'], '-');
            $new_book->vote = $book['vote'];
            $new_book->img_url = $book['img_url'];
            $new_book->isbn = $book['isbn'];
            $new_book->save();
        }
    }
}
