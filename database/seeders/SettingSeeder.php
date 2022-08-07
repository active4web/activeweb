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
           'app_name'  =>  json_encode(['en'=> 'Active4web', 'ar'=> 'اكتيف فور ويب ']),
            'description' => json_encode( ['en'=> 'Active4web', 'ar'=> 'اكتيف فور ويب ']),
           'logo'       =>   '1659607371.jpg',
            'email'      =>  'Web.active.smart@gmail.com',
           'address'    => json_encode( ['en'=> 'Active4web', 'ar'=> 'اكتيف فور ويب ']),
          'phone'      =>   '01234567898'
             ]);
       
  
    }
}
