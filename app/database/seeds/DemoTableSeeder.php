<?php

class DemoTableSeeder extends Seeder {

	public function run()
	{
		/*
		*	Delete all existing data
		*/

		/* Detach all relations 
		$userAdmin = DcafUser::find(1);
        if (!is_null($userAdmin)) {
        	$userAdmin->detachRole( $siteAdmin );
        }

        $userManager = DcafUser::find(2);
        if (!is_null($userManager)) {
        	$userManager->detachRole( $teamManager );
    	}

        $userMember = DcafUser::find(3);
        if (!is_null($userMember)) {
        	$userMember->detachRole( $teamMember );
		}*/
		
        // Drop current seeds
    	//DB::table('assigned_roles')->truncate();
    	//DB::table('DCAF_Users')->delete();
    	//DB::table('DCAF_Roles')->delete();
    	DB::table('Client_Companies')->truncate();
    	DB::table('Billing_Accounts')->truncate();

		// Create users for demo
		$userAdmin = new DcafUser;
		$userAdmin->id = 1;
		$userAdmin->username = 'Site_Admin';
		$userAdmin->email = 'site@admin.com';
		$userAdmin->password = '123456';
		$userAdmin->password_confirmation = '123456';
		$userAdmin->confirmed = '1';
		$userAdmin->save();

		$userManager = new DcafUser;
		$userManager->id = 2;
		$userManager->username = 'Manager';
		$userManager->email = 'user@manager.com';
		$userManager->password = '123456';
		$userManager->password_confirmation = '123456';
		$userManager->confirmed = '1';
		$userManager->save();

		$userMember = new DcafUser;
		$userMember->id = 3;
		$userMember->username = 'Member';
		$userMember->email = 'user@member.com';
		$userMember->password = '123456';
		$userMember->password_confirmation = '123456';
		$userMember->confirmed = '1';
		$userMember->save();

		// Roles
		$siteAdmin = new DcafRole;
		$siteAdmin->role_id = 1;
		$siteAdmin->role_name = 'Site Admin';
		$siteAdmin->save();

        $teamManager = new DcafRole;
		$teamManager->role_id = 2;
        $teamManager->role_name = 'Team Manager';
        $teamManager->save();

        $teamMember = new DcafRole;
		$teamMember->role_id = 3;
        $teamMember->role_name = 'Team Member';
        $teamMember->save();
		
		// Create a test company
		$company = new ClientCompany();
		$company->Name = 'Corporation X';
		$company->Industry = 'Industry X';
		$company->save();

		// Create a billing account
		$billing = new BillingAccount;
		$billing->billing_name = 'Corporation X';
		$billing->billing_address = '000 X St, X City, 00000, NY';
		$billing->save();

		// Attach everything
		//$userAdmin = DcafUser::where('username', 'Site_Admin')->first();
		//$siteAdmin = DcafRole::find(1);
        //$userAdmin->DcafRole()->attach( $siteAdmin );
		$userAdmin->attachRole( $siteAdmin );

        //$userManager = DcafUser::where('username', 'Manager')->first();
        //$userManager = DcafRole::find(2);
        //$userManager->DcafRole()->attach( $teamManager );
        $userManager->attachRole( $teamManager );

        //$userMember = DcafUser::where('username', 'Member')->first();
        //$userMember = DcafRole::find(3);
        //$userMember->DcafRole()->attach( $teamMember );
        $userMember->attachRole( $teamMember );

        $userManager->billingContact()->associate($billing);
		$userManager->save();

		//$company = new ClientCompany::find(1);
		$company->employees()->attach($userManager);
		$company->employees()->attach($userMember);

		//attach permissions to role
		$manageBilling = Permission::find(1);
		$teamManager->perms()->attach($manageBilling);
	}

}
