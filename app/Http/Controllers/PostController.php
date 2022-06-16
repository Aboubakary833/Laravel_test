<?php

namespace App\Http\Controllers;

use App\Events\PostNotificationEvent;
use App\Jobs\SendPostNotificationJob;
use App\Models\Post;
use App\Models\Website;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function publish(Request $request, $website_uuid) {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if(!$website_uuid) {
            return response()->json([
                'error' => "Not have not permission to publish on this website."
            ], 403);
        }

        $data = array_merge(
            $request->all(),
            ['website_uuid' => $website_uuid]
        );

        $post = Post::create($data);
        $website = Website::find($website_uuid);
        
        dispatch(new SendPostNotificationJob(
            $website->subscribers,
            $website->url,
            $post
        ));

        return response()->json([
            'success' => "Your post was published successfully."
        ]);
    }
}
