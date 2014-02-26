<?php

class BillingPlansTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('Billing_Plans')->truncate();

		/*$billingplans = array(

		);*/
		
		$billingPlanSM = new BillingPlan;
		$billingPlanSM->id = 1;
		$billingPlanSM->plan_name = 'Small DCAF';
		$billingPlanSM->payment_amount = '500.00';
		$billingPlanSM->payment_frequency = 'upfront'; //upfront, or monthly
		$billingPlanSM->duration = '2';	//in months
		$billingPlanSM->description = 'Small DCAF plan features xyz';
		$billingPlanSM->save();

		$billingPlanMD = new BillingPlan;
		$billingPlanMD->id = 2;
		$billingPlanMD->plan_name = 'Medium DCAF';
		$billingPlanMD->payment_amount = '1000.00';
		$billingPlanMD->payment_frequency = 'monthly';
		$billingPlanMD->duration = '2';
		$billingPlanMD->description = 'Medium DCAF plan features xyz';
		$billingPlanMD->save();

		$billingPlanLG = new BillingPlan;
		$billingPlanLG->id = 3;
		$billingPlanLG->plan_name = 'Large DCAF';
		$billingPlanLG->payment_amount = '12000.00';
		$billingPlanLG->payment_frequency = 'upfront';
		$billingPlanLG->duration = '12';
		$billingPlanLG->description = 'Large DCAF plan features xyz';
		$billingPlanLG->save();

		$billingPlanXLG = new BillingPlan;
		$billingPlanXLG->id = 4;
		$billingPlanXLG->plan_name = 'Extra-Large DCAF';
		$billingPlanXLG->payment_amount = '24000.00';
		$billingPlanXLG->payment_frequency = 'monthly';
		$billingPlanXLG->duration = '24';
		$billingPlanXLG->description = 'Extra-Large DCAF plan features xyz';
		$billingPlanXLG->save();

		// Uncomment the below to run the seeder
		// DB::table('billingplans')->insert($billingplans);
	}

}
