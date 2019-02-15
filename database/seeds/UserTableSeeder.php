<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
       $role_employee = Role::where('name', 'employee')->first();
       $role_manager  = Role::where('name', 'admin')->first();
       $role_saler = Role::where('name', 'saler')->first();

       $employee = new User();
       $employee->name = 'Lê Vĩnh Trường';
       $employee->email = 'vinhtruong@gmail.com';
       $employee->password = bcrypt('123456');
       $employee->money = 300000;
       $employee->endDate = '2019-11-11';
       $employee->sex = 'Nam';
       $employee->birth = '1991-11-14';
       $employee->save();
       $employee->roles()->attach($role_employee);

       $saler = new User();
       $saler->name = 'Nguyễn Phương Thúy';
       $saler->email = 'phuongthuy@gmail.com';
       $saler->password = bcrypt('123456');
       $saler->money = 200000;
       $saler->endDate = '2019-10-11';
       $saler->sex = 'Nữ';
       $saler->birth = '1992-11-14';
       $saler->save();
       $saler->roles()->attach($role_saler);

       $manager = new User();
       $manager->name = 'Admin';
       $manager->email = 'admin@gmail.com';
       $manager->password = bcrypt('123456');
       $manager->money = 100000;
       $manager->endDate = '2019-5-11';
       $manager->sex = 'Nam';
       $manager->birth = '1993-11-14';
       $manager->save();
       $manager->roles()->attach($role_manager);
   }
}
