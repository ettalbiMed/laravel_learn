<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::create(array('name'=> 'mustapha', 'email'=> 'mustapha@free.fr', 'password'=> 'mustapha')); 
        $users = factory(App\User::class, 3)->create()
       ->each(function ($u) {
          $u->categories()->saveMany(factory(App\Category::class,3)->make());
          $categories = App\Category::where('user_id',$u->id)->get();
        $products = $u->products()->saveMany(factory(App\Product::class,3)->make())->each(function ($p) use($categories){
            $p->categories()->sync($categories);

        });
    });

        
    }
}
