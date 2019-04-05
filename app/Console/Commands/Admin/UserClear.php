<?php

namespace App\Console\Commands\Admin;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

use App\User;

class UserClear extends Command
{

    protected $signature = 'user:clean';

    protected $description = 'Command delete user with wait status, after 24 hours';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = Carbon::now();
        $date = Carbon::parse($this->created_at);

        $users = DB::table('users')->where([
                    ['status', '==', 'wait'],
                    [$now->diffInHours($date), '>', 24],
                ])->get();
        // Если разница больше 24 часов и статус STATUS_WAIT, то true

        if($now->diffInHours($date) > 24 && $this->isWait()){
            return 'true';
        }
        return false;
    }
}
