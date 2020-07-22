<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class changerole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'changerole {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will change the role';

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
     * @return mixed
     */
    public function handle()
    {
        $ami = $this->arguments('id');
		User::find($ami['id'])->update([
		   'user_type' => 1
		]);
		echo 'done';
    }
}
