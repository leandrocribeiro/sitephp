<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Models\ModelBook;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book): void
    {
     
    $book->create([
    'title'=>'O Silmarillion', 
    'author'=>'J.R.R. Tolkien',
    'pages'=>'190',
    'price'=>'99.99',
    'user_id'=>'1',
    ]); 
     
    $book->create([
    'title'=>'O Hobbit', 
    'author'=>'J.R.R. Tolkien',
    'pages'=>'195',
    'price'=>'119.99',
    'user_id'=>'1',
    ]); 

    $book->create([
    'title'=>'O Senhor dos Anéis Vol.1', 
    'author'=>'J.R.R. Tolkien',
    'pages'=>'200',
    'price'=>'109.99',
    'user_id'=>'1',
     ]); 

     $book->create([
    'title'=>'O Senhor dos Anéis Vol.2', 
    'author'=>'J.R.R. Tolkien',
    'pages'=>'210',
    'price'=>'119.99',
    'user_id'=>'1',
    ]); 

    $book->create([
    'title'=>'O Senhor dos Anéis Vol.3', 
    'author'=>'J.R.R. Tolkien',
    'pages'=>'220',
    'price'=>'129.99',
    'user_id'=>'1',
    ]); 
    
    }
}
