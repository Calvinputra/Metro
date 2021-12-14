<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailResetPasswordRequestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $customer, $token;
    /**
     * Create a new job instance.
     *
     * @return void
     */
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
        $beautymail->send('emails.reset_password', [
            'name' => $name,
            'url' => 'http://localhost:8000/verify_email/' . $this->token,
        ], function ($message) use ($name) {
            $message
                ->from('admin@gmail.com')
                ->to(env('TESTING_EMAIL'), $name)
                ->subject('Send Password Confirmation!');
        });
    }
}