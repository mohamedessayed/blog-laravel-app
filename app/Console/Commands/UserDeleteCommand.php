<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UserDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete non admin users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $users = User::where('role','0')->get();

        foreach ($users as $user) {
            # code...
            $user->delete();
        }
    }
}
