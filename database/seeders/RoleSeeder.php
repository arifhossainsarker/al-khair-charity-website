<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [];

        $roles[] = [
            'id'=>1,
            'name'=>'Admin',
        ];
        $roles[] = [
            'id'=>2,
            'name'=>'Faculty',
        ];
        $roles[] = [
            'id'=>3,
            'name'=>'Editor',
        ];
        $roles[] = [
            'id'=>4,
            'name'=>'Alumni',
        ];
        Role::insert($roles);
    }
}
