<?php

namespace App\Console\Commands;

use App\Models\EmployeeAttendence;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class EmployeeScheduler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add.user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Add';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        EmployeeAttendence::create([
            'employee' => 'hello'
        ]);
        
    }
}
