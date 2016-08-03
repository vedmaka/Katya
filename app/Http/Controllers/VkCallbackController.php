<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VkCallbackController extends Controller
{

	public function index( Request $request )
	{

		$type = $request->json('type');
		$groupId = $request->json('group_id');

		if( $type === 'confirmation' && $groupId == 126207102 ) {
			return response( 'ff0fe0bc' );
		}

	}

}
