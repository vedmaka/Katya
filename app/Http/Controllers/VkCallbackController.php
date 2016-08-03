<?php

namespace App\Http\Controllers;

use App\VkEvent;
use Illuminate\Http\Request;

use App\Http\Requests;

class VkCallbackController extends Controller
{

	public function index( Request $request )
	{

		$type = $request->json('type');
		$groupId = $request->json('group_id');
		$object = $request->json('object');

		if( $type === 'confirmation' && $groupId == 126207102 ) {
			return response( 'ff0fe0bc' );
		}

		if( $type === 'wall_post_new' ) {
			$event = new VkEvent();
			$event->type = 'wall_post_new';
			$event->group_id = $groupId;
			$event->post_id = array_get( $object, 'id', '');
			$event->from_id = array_get( $object, 'from_id', '');
			$event->date_unix = array_get( $object, 'date', '');
			$event->text = array_get( $object, 'text', '');
			$event->post_type = array_get( $object, 'post_type', '');
			$event->signer_id = array_get( $object, 'signer_id', '');
			$event->save();
		}

		return response('ok');

	}

}
