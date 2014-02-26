<?php

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();

        $manageUsers = new Permission();
        $manageUsers->name = 'cp';
        $manageUsers->display_name = 'cp';
        $manageUsers->save();
        
        //$r->perms()->attach($manageUsers); //works
        
        //$r->perms()->sync(array($manageUsers->id)); //works
    }

}
