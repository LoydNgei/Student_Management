<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Lecturer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $imageFiles = File::files(public_path('images/course_images'));


        // User::factory(10)->create();

        Lecturer::factory()->create()->each(function ($lecturer) use ($imageFiles) {
            $randomImage = $imageFiles[array_rand($imageFiles)];

            $filename = pathinfo($randomImage, PATHINFO_FILENAME) . '.' . pathinfo($randomImage, PATHINFO_EXTENSION);

            $lecturer->update(['course_images' => $filename]);
        });

    }
}


// Lecturer::query()->delete();