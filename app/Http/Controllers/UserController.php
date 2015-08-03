<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {
	/**
	 * Show the profile for the given user.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function showProfile($id) {
		/*
		 * return view ( 'user.profile', [
		 * 'user' => User::findOrFail ( $id )
		 * ] );
		 */
		return view ( 'user.profile', [ 
				'userid' => $id 
		] );
	}
	/**
	 * Responds to requests to GET /users
	 */
	public function getIndex() {
		return "getIndex function";
	}
	
	/**
	 * Responds to requests to GET /users/show/1
	 */
	public function getShow($id) {
		return "getShow function";
	}
	
	/**
	 * Responds to requests to Post /users/show/1
	 */
	public function postShow($id) {
		return "getShow function";
	}
	
	/**
	 * Responds to requests to GET /users/admin-profile
	 */
	public function getAdminProfile() {
		return "getAdminProfile function";
	}
}
