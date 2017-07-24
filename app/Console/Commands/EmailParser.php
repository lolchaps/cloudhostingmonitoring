<?php

namespace App\Console\Commands;

use App\Report;
use Illuminate\Console\Command;
use PhpMimeMailParser\Parser;

class EmailParser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parses an incoming email.';

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
     * @return mixed
     */
    public function handle()
    {
        // parse content
        $parser = new Parser();
        $parser->setStream(fopen('php://stdin', 'r'));

        // create object
        $email = new Report();
        $email->from = $parser->getHeader('from');
        $email->to = $parser->getHeader('to');
        $email->subject = $parser->getHeader('subject');
        $email->text = $parser->getMessageBody('text');
        $email->html = $parser->getMessageBody('html');
        $email->headers = serialize($parser->getHeaders());
        $email->save();

        $this->info('Test');
    }
}
