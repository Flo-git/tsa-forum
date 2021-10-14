<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user= new User();
        $user->name = "Gil";
        $user->email = "pares.gilbert@free.fr";
        $user->password = Hash::make('12345678');
        $user->save();

        for ($i=0;$i<5;$i++)
        {
            $post= new Post();
            $post->title='Mon article'.$i;
            $post->slug='mon-article-'.$i;
            $post->user_id=$user->id;
            $post->save();
        }
    }
}
