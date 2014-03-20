<?php
	

class SocialTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		/**
		*	Save a new facebook user
		*/
		$fbUser = FacebookUser::firstOrCreate(array(
			'FB_User_ID' => '699492603',
			'gender' => 'male',
			'age_range_min' => '21',
			//'hometown' => ,
			'locale' => 'en_US',
			//'location' => ,
			'timezone' => -4,
			)
		);
		//$fbUser-> = ;
			
		/**
		*	Save user location
		*/
		
		$fbHometown = new Location;
		$fbHometown->FB_Location_ID = '110521052';
		$fbHometown->city = 'Queens';
		$fbHometown->state = 'New York';
		$fbHometown->save();
		$fbHometown = Location::find(110521052);
		//$fbHometown-> = ;

		$fbLocation = new Location;
		$fbLocation->FB_Location_ID = '109920975';
		$fbLocation->city = 'Belgrade';
		$fbLocation->state = 'Serbia';
		$fbLocation->save();
		$fbLocation = Location::find(109920975);
		//$fblocation-> = ;
		

		/**
		*	Link locations appropriately
		*/
		$fbUser = FacebookUser::find(699492603);
		
		$fbUser->hometown()->associate($fbHometown);
		$fbUser->location()->associate($fbLocation);
		$fbUser->save();
		
		/**
		*	Save a facebook post entry
		**/
		$fbPost = FacebookPost::firstOrCreate(array(
			'FB_Post_ID' => '3537132',
			//'User_ID' => '111077157538',
			//'Content' => ;
			'created_time' => '2014-02-13T21:57:09+000',
			//'from_user_id' => '111077157538',
			'message' => "Congrats to Jonathan El Kordi-Hubbard from Hofstra University for winning $500 for his pitch on his company DCAF Social as part of yesterday's FlashNotes live VC chat!",
			)
		);

		/**
		*	Save a facebook comment entry
		**/
		$fbComment = FacebookComment::firstOrCreate(array(
			'FB_Comment_ID' => '11261559',
			'created_time' => '2014-02-27T23:35:07+0000',
			'like_count' => 0,
			'message' => "heyo db seed",
			'comment_count' => 0,
			)
		);
		
		/**
		*	Connect comment to post, and post to user
		*/
		$fbComment = FacebookComment::find(11261559);
		$FBPost = FacebookPost::find(3537132);
		$fbComment->FBPost()->associate($fbPost);
		$fbComment->save();

		$fbPost->FBUser()->associate($fbUser);
		$fbPost->save();

		/**
		*	Save a facebook page entry
		*/
		//$fbPage = new FacebookPage;
		//$fbPage-> ;


		/**
		*	Link page and user, post and page
		*/

	}

}


?>