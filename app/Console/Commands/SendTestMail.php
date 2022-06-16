<?php

namespace App\Console\Commands;

use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendTestMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendmail:to {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test mail to users.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::where('email', $this->argument('user'))->first();
        Mail::to($user->email)->send(new TestMail($user->name));
    }
}
