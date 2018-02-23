<?php

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::all()
       ->each(function (App\User $user) {
        		$user->galleries()->saveMany(factory(App\Gallery::class, 3)
        			->make()
        	);
        });
    }
}