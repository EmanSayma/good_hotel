<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealSeeder extends Seeder
{
    public function run()
    {
        $tagNames = ['top deal', 'top rated', 'only a few left!'];
        foreach ($tagNames as $name) {
            DB::table('tags')->insert([
                'name' => $name
           ]);
        }

        $deals = [
            [
                'name' => 'Romantic package',
                'image' => 'images/coffee.png',
                'meta_description' => 'Give your partner a fun surprise',
                'description' => 'If you enjoy a romantic getaway or just want to indulge in extra luxury, get rose petals in your room and luxury bath salt to create a great atmosphere when you check-in with us.
                Click "Take Deal" to request this offer now.',
                'how_it_works' => '1- Choose and book your deal or experience.
                2- Our team will send you a confirmation e-mail.
                3- The fee gets added to your bill.',
                'total_amount' => 40,
                'discount_amount' => 5,
                'currency' => '€',
                'tag_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [
                'name' => 'Romantic package',
                'image' => 'images/coffee.png',
                'meta_description' => 'Give your partner a fun surprise',
                'description' => 'If you enjoy a romantic getaway or just want to indulge in extra luxury, get rose petals in your room and luxury bath salt to create a great atmosphere when you check-in with us.
                Click "Take Deal" to request this offer now.',
                'how_it_works' => '1- Choose and book your deal or experience.
                2- Our team will send you a confirmation e-mail.
                3- The fee gets added to your bill.',
                'total_amount' => 40,
                'discount_amount' => 5,
                'currency' => '€',
                'tag_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [
                'name' => 'Romantic package',
                'image' => 'images/coffee.png',
                'meta_description' => 'Give your partner a fun surprise',
                'description' => 'If you enjoy a romantic getaway or just want to indulge in extra luxury, get rose petals in your room and luxury bath salt to create a great atmosphere when you check-in with us.
                Click "Take Deal" to request this offer now.',
                'how_it_works' => '1- Choose and book your deal or experience.
                2- Our team will send you a confirmation e-mail.
                3- The fee gets added to your bill.',
                'total_amount' => 40,
                'discount_amount' => 5,
                'currency' => '€',
                'tag_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        ];
        foreach ($deals as $deal) {
            DB::table('deals')->insert([
                'name' => $deal['name'],
                'image' => $deal['image'],
                'meta_description' => $deal['meta_description'],
                'description' => $deal['description'],
                'how_it_works' => $deal['how_it_works'],
                'total_amount' => $deal['total_amount'],
                'discount_amount' => $deal['discount_amount'],
                'currency' => $deal['currency'],
                'tag_id' => $deal['tag_id'],
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now()
           ]);
        }
    }
}
