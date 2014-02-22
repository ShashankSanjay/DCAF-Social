<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('DCAF_Roles')->delete();

        $adminRole = new DcafRole;
        $adminRole->role_name = 'admin';
        $adminRole->save();

        $commentRole = new DcafRole;
        $commentRole->role_name = 'comment';
        $commentRole->save();

        /*$user = DcafUser::where('username','=','admin')->first();
        $user->attachRole( $adminRole );*/

        $user = DcafUser::where('username','=','user')->first();
        $user->attachRole( $commentRole );
    }

}
