<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
            $socials=[ 
                 ['name' => 'telegram', 'link' => 'https://www.facebook.com/'],
                 ['name' => 'whatsapp', 'link' => 'https://www.facebook.com/'],
                 ['name' => 'youtube', 'link' => 'https://www.facebook.com/'],
                 ['name' => 'instagram', 'link' => 'https://www.facebook.com/'],
                 ['name'=> 'twitter','link' => 'https://www.facebook.com/'],
                 ['name'=> 'facebook-f','link' => 'https://www.facebook.com/']
            ];
            foreach($socials as $social){
                 SocialMedia::create([
               'name'=>$social['name'],
              'link'=>$social['link'],
     
                  ]);
            }
       
    }
}
