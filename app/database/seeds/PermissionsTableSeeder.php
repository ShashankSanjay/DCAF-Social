<?php

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();

        $manageBilling = new Permission();
        $manageBilling->id = 1;
        $manageBilling->name = 'manage_billing';
        $manageBilling->display_name = 'manage billing';
        $manageBilling->save();
        
        //$r->perms()->attach($manageBilling); //works
        
        //$r->perms()->sync(array($manageBilling->id)); //works
    }

}
