<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('DCAF_Roles')->delete();

        $adminRole = new DcafRole();
        $adminRole->role_name = 'Site Administrator';
        $adminRole->save();

        $managerRole = new DcafRole();
        $managerRole->role_name = 'Team Manager';
        $managerRole->save();

        /*$user = DcafUser::where('username','=','admin')->first();
        $user->attachRole($adminRole);*/

        $user = DcafUser::where('username','=','user')->first();
        $user->attachRole($managerRole);
    }

}
