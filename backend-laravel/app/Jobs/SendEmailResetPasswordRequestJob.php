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
            'url' => env('SANCTUM_STATEFUL_DOMAINS') . '/reset_password/' . $this->token,
        ], function ($message) use ($name) {
            $message
                ->from(env('MAIL_FROM_ADDRESS', 'no-reply@metrojayaindonesia.com'))
                ->to($this->customer->email)
                ->subject('Password Reset Request!');
        });
    }
}
