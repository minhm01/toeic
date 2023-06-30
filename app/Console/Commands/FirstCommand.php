<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class FirstCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'first';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $name=rand(10,30);
        $a = array('a','b','c','d');
        $ten=array_rand($a);
        DB::table('test')->insert(['name' => $name, 'ten' => $ten]);
        return 0;
    }
}
