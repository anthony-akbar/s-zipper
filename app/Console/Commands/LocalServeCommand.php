<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LocalServeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'serve:local';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $localIP = getHostByName(getHostName());
        $this->call('serve', [
            '--host' => $localIP,
            '--port' => 6006
        ]);
    }
}
