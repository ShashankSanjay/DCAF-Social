<?php

/**
 * Facebook Page Model
 * 
 * @author	Shashank Sanjay
 * @version	1.0
 */
class FBPage extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $table = 'FB_Pages';
	
	public $FB_Page_ID;
	public $access_token;
	public $name;
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function FacebookUser()
	{
		return $this->belongstoMany('FacebookUsers');
	}
	
	/*
		All fields for page. URL: https://developers.facebook.com/docs/graph-api/reference/page

		id,about,attire,band_members,best_page,birthday,booking_agent,can_post,category,category_list,
		checkins,company_overview,cover.fields(id,source,offset_y,offset_x),current_location,description,
		directed_by,founded,general_info,general_manager,hometown,hours.fields({day}_{number}_{status}),
		is_permanently_closed,is_published,is_unclaimed,likes,link,location.fields(country,city,longitude,
		zip,state,street,located_in,latitude),mission,name,parking.fields(street,lot,valet),phone,press_contact,
		price_range,products,restaurant_services.fields(kids,delivery,walkins,catering,reserve,groups,waiter,
		outdoor,takeout),restaurant_specialties.fields(coffee,drinks,breakfast,dinner,lunch),talking_about_count,
		username,website,were_here_count
	*/
}

?>