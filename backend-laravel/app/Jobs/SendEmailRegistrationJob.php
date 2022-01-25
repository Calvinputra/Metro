<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailRegistrationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $customer, $token;
    public function __construct($customer, $token)
    {
        $this->customer = $customer;
        $this->token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $name =  $this->customer->first_name ?? '' . ' ' . $this->customer->last_name ?? '';
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.register', [
            'name' => $name,
            'url' => env('SANCTUM_STATEFUL_DOMAINS') . '/verify_email/' . $this->token,
        ], function ($message) use ($name) {
            $message
                ->from('admin@gmail.com')
                ->to(env('TESTING_EMAIL'), $name)
                ->subject('Welcome!');
        });
    }
}
