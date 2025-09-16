<?php

namespace Blashbrook\PAPIForms\App\Console\Commands;

    use Blashbrook\PAPIForms\App\Services\PatronStatClassCodeFetcher;
    use Illuminate\Console\Command;

    // Import the new service class

    class UpdatePatronStatCodes extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'papi:fetch-patronstatclasscodes';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Fetches Patron Statistical Class Codes from Polaris and populates the local database.';

        /**
         * The ApiDataFetcher service instance.
         *
         * @var PatronStatClassCodeFetcher
         */
        protected PatronStatClassCodeFetcher $patronStatClassCode;

        /**
         * Create a new command instance.
         *
         * The service is injected automatically by Laravel's service container.
         *
         * @param  PatronStatClassCodeFetcher  $patronStatClassCode
         * @return void
         */
        public function __construct(PatronStatClassCodeFetcher $patronStatClassCode)
        {
            parent::__construct();
            $this->patronStatClassCode = $patronStatClassCode;
        }

        /**
         * Execute the console command.
         */
        public function handle()
        {
            $this->info('Starting data fetch from external API...');

            $this->patronStatClassCode->fetch();

            $this->info('Successfully imported Patron Statistical Class Codes from Polaris into local database.');

            return Command::SUCCESS;
        }
    }
