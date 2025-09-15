<?php

namespace Blashbrook\PAPIForms\App\Console\Commands;

    use Blashbrook\PAPIForms\App\Services\PatronCodeFetcher;
    use Illuminate\Console\Command; // Import the new service class

    class UpdatePatronCodes extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'papi:fetch-patroncodes';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Fetches Patron Codes from Polaris API and populates the local database.';

        /**
         * The PatronCodeFetcher service instance.
         *
         * @var PatronCodeFetcher
         */
        protected PatronCodeFetcher $patronCodeFetcher;

        /**
         * Create a new command instance.
         *
         * The service is injected automatically by Laravel's service container.
         *
         * @param  PatronCodeFetcher  $patronCodeFetcher
         * @return void
         */
        public function __construct(PatronCodeFetcher $patronCodeFetcher)
        {
            parent::__construct();
            $this->patronCodeFetcher = $patronCodeFetcher;
        }

        /**
         * Execute the console command.
         */
        public function handle()
        {
            $this->info('Starting data fetch from external API...');

            /*           try {*/
            // Call the service to perform the core logic.
            $this->patronCodeFetcher->fetch();

            $this->info('Successfully imported Patron Codes from Polaris.');

            return Command::SUCCESS;
        }
    }
