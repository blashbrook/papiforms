<?php

namespace Blashbrook\PAPIForms\App\Console\Commands;

    use Blashbrook\PAPIForms\App\Services\PatronUdfFetcher;
    use Illuminate\Console\Command;

    // Import the new service class

    class UpdatePatronUdfs extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'papi:fetch-patronudfs';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Fetches Patron UDFs from Polaris and populates the local database.';

        /**
         * The ApiDataFetcher service instance.
         *
         * @var PatronUdfFetcher
         */
        protected PatronUdfFetcher $patronUdfFetcher;

        /**
         * Create a new command instance.
         *
         * The service is injected automatically by Laravel's service container.
         *
         * @param  PatronUdfFetcher  $patronUdfFetcher
         * @return void
         */
        public function __construct(PatronUdfFetcher $patronUdfFetcher)
        {
            parent::__construct();
            $this->patronUdfFetcher = $patronUdfFetcher;
        }

        /**
         * Execute the console command.
         */
        public function handle()
        {
            $this->info('Starting data fetch from external API...');

            $this->patronUdfFetcher->fetch();

            $this->info('Successfully imported Patron UDFs from Polaris into local database.');

            return Command::SUCCESS;
        }
    }
