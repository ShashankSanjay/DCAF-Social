<?php

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        //DB::table('permissions')->delete();

        $manageBilling = Permission::firstOrCreate(array(
            'name' => 'manage_billing',
            'display_name' => 'manage billing'
            )
        );
        //$r->perms()->attach($manageBilling); //works
        
        //$r->perms()->sync(array($manageBilling->id)); //works
    }

}
