<?php

namespace App\Jobs;

use App\Models\Account;
use App\Models\AccountLedger;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RecalculateAccountLedgerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $account_ledger;
    public function __construct($account_ledger)
    {
        $this->account_ledger = $account_ledger;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->account_ledger->account()->update([
            'balance' => AccountLedger::where('account_id', $this->account_ledger->account_id)->sum('value')
        ]);
    }
}
