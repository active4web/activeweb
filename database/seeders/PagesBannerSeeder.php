<?php

namespace Database\Seeders;

use App\Models\PagesBanner;
use Illuminate\Database\Seeder;

class PagesBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners=[ 
            ['title' => 'aboutus', 'image' => 'about.jpg'],
            ['title' => 'ourworks', 'image' => 'ourwork.jpg'],
            ['title' => 'services', 'image' => 'services.jpg'],
            ['title' => 'blogs', 'image' => 'blogs.jpg'],
            ['title'=> 'contactus','image' => 'contactus.jpg'],
            ['title'=> 'technicalsupport','image' => 'technicalsupport.jpg'],
       ];
       foreach($banners as $banner){
            PagesBanner::create([
          'title'=>$banner['title'],
         'image'=>$banner['image'],

             ]);
            }
    }
}
