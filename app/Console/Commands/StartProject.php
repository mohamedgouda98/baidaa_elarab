<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class StartProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Handle Admin Login';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        $this->info('Database Was Migrated Successfully');

        $name     = $this->ask('Enter Your Name');
        $email    = $this->ask('Enter Your Email');
        $password = $this->secret('Enter Your Password');

        User::create([
            'name'     => $name,
            'email'    => $email,
            'password' => Hash::make($password)
        ]);

        $this->info('Your Super Account Was Created');

        return Command::SUCCESS;

    }
}
