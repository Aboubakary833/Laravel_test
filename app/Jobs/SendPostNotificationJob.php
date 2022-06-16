<?php

namespace App\Jobs;

use App\Mail\PostNotificationMail;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendPostNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $users;
    public $websiteUrl;
    public $post;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        Collection $users,
        string $websiteUrl,
        Post $post
    )
    {
        $this->users = $users;
        $this->websiteUrl = $websiteUrl;
        $this->post = $post;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->users as $user) {
            Mail::to($user->email)->send(new PostNotificationMail(
                $user->name,
                $this->websiteUrl,
                $this->post->title,
                $this->post->description
            ));
        }
    }
}
