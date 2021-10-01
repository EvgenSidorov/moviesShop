<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voidmovies
     */
    public function run()
    {
        $rating = [];

        for($i = 1; $i < 501; $i++) {
            $rating[] = floatval(rand(1,10));
        }
//        dd($rating);
//        DB::table('movies')->update([
//            'rating' => floatval(rand(1,10))
//        ]);
        Movie::each(function($movie){
            $movie->rating = floatval(rand(1,10));
            $movie->save();
        });
    }
}
