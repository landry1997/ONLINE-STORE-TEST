<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ChangeAbonnement extends Command
{

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Changes le abonnement du user en abonne.';
    protected $signature = 'users:abonnement';

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

        $prix=DB::table('user_abonnents')->where('dateFin',Carbon::now())->get()[0];
            DB::table('users')
            ->where('id',$prix->user)
            ->update(['abonnement'=>'désaboné']);
    }
}
