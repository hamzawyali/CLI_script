<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class OffersFilterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'offers:filter {input : The input file path} {method : The command to execute (count_by_price_range or count_by_vendor_id)} {--price_from= : The minimum price} {--price_to= : The maximum price} {--vendor_id= : The vendor ID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $inp
    }
}
