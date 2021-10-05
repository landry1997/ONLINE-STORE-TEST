<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

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

    public function handle()
    {
        \Log::info("Cron is working fine!");

        $abonnements = DB::table('user_abonnents')->where('dateFin',date('y-m-d'))->get();
        \Log::info($abonnements);

        foreach ($abonnements as $key => $value) {
            DB::table('users')
            ->where('id',$value->user)
            ->update(['abonnement'=>'désaboné']);
        }
    }
}
