<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Product;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            // Logic to update days for accepted products
            // Fetch all products with status "Accepted"
            $acceptedProducts = Product::where('status', 'Accepted')->get();

            // Increment the "days" column for each product
            foreach ($acceptedProducts as $product) {
                $product->increment('days');
            }

            // Log or send notifications if necessary
        })->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }



}
