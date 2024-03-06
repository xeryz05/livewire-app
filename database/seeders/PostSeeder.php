<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $imageUrls = [
            'https://picsum.photos/id/1015/400/300',
            'https://picsum.photos/id/1016/400/300',
            'https://picsum.photos/id/1018/400/300',
            'https://picsum.photos/id/1019/400/300',
            'https://picsum.photos/id/1020/400/300',
            'https://picsum.photos/id/1021/400/300',
            'https://picsum.photos/id/1022/400/300',
            'https://picsum.photos/id/1023/400/300',
            'https://picsum.photos/id/1024/400/300',
            'https://picsum.photos/id/1025/400/300',
        ];

        for ($i = 0; $i < 10; $i++) {
            $post = Post::create([
                'image' => $faker->randomElement($imageUrls),
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
            ]);

            // Optionally, you can store the image in the local storage
            $image = file_get_contents($post->image);
            Storage::disk('local')->put($post->id . '.jpg', $image);
        }
    }
}
