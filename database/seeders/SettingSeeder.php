<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
            Setting::create([
           'app_name'  =>  ['en'=> 'Active4web', 'ar'=> 'اكتيف فور ويب '],
           'description' => ['en'=> 'Active4web', 'ar'=> 'اكتيف فور ويب '],
           'logo'       =>   '1659607371.jpg',
           'email'      =>  'Web.active.smart@gmail.com',
           'address'    =>  ['en'=> 'Active4web', 'ar'=> 'اكتيف فور ويب '],
           'phone'      =>   '01234567898',
           'service_desc' => ['en'=> 'Active4web', 'ar'=> 'اكتيف فور ويب '],
           'work_desc'  => ['en'=> 'Active4web', 'ar'=> 'اكتيف فور ويب '],
           'blog_desc'  => ['en'=> 'Active4web', 'ar'=> 'اكتيف فور ويب '],

             ]);
       
  
    }
}
