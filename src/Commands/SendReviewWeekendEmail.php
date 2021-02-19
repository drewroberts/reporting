<?php

declare(strict_types=1);

namespace Tipoff\Reviews\Commands;

use Tipoff\Reviews\Mail\ReviewWeekend;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendReviewWeekendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:reviewweekend';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the Monday recap of Google Reviews over the weekend';

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
     * @return void
     */
    public function handle()
    {
        $managers = [
            'orlandomgr@thegreatescaperoom.com',
            'tampamgr@thegreatescaperoom.com',
            'jacksonvillemgr@thegreatescaperoom.com',
            'akronmgr@thegreatescaperoom.com',
            'grandrapidsmgr@thegreatescaperoom.com',
            'providencemgr@thegreatescaperoom.com',
            'rochestermgr@thegreatescaperoom.com',
            'chicagomgr@thegreatescaperoom.com',
            'royaloakmgr@thegreatescaperoom.com',
            'pittsburghmgr@thegreatescaperoom.com',
        ];
        $execs = [
            'kirk@thegreatescaperoom.com',
            'julie@thegreatescaperoom.com',
            'nicole@thegreatescaperoom.com',
            'kelleigh@thegreatescaperoom.com',
            'scott@thegreatescaperoom.com',
            'igug@thegreatescaperoom.com',
        ];

        Mail::to($managers)
            ->cc($execs)
            ->bcc('digitalmgr@thegreatescaperoom.com')
            ->send(new ReviewWeekend());
    }
}
