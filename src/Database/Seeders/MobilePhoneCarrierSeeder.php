<?php

namespace Database\Seeders;

use Blashbrook\PAPIForms\App\Models\MobilePhoneCarrier;
use Illuminate\Database\Seeder;

class MobilePhoneCarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MobilePhoneCarrier::create(['CarrierID' => 1,
            'CarrierName'                       => 'AT&T',
            'Email2SMSEmailAddress'             => '@txt.att.net',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 2,
            'CarrierName'                       => 'Bell Canada',
            'Email2SMSEmailAddress'             => '@txt.bellmobility.ca',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 3,
            'CarrierName'                       => 'Cellular One',
            'Email2SMSEmailAddress'             => '@mobile.celloneusa.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 4,
            'CarrierName'                       => 'Cingular (Now AT&T)',
            'Email2SMSEmailAddress'             => '@txt.att.net',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 5,
            'CarrierName'                       => 'Nextel',
            'Email2SMSEmailAddress'             => '@messaging.nextel.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 6,
            'CarrierName'                       => 'Qwest',
            'Email2SMSEmailAddress'             => '@qwestmp.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 7,
            'CarrierName'                       => 'Southwestern Bell',
            'Email2SMSEmailAddress'             => '@email.swbw.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 8,
            'CarrierName'                       => 'Sprint',
            'Email2SMSEmailAddress'             => '@messaging.sprintpcs.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 9,
            'CarrierName'                       => 'T-Mobile',
            'Email2SMSEmailAddress'             => '@tmomail.net',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 10,
            'CarrierName'                       => 'Tracfone',
            'Email2SMSEmailAddress'             => '@txt.att.net',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 11,
            'CarrierName'                       => 'Verizon',
            'Email2SMSEmailAddress'             => '@vtext.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 12,
            'CarrierName'                       => 'Virgin Mobile',
            'Email2SMSEmailAddress'             => '@vmobl.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 13,
            'CarrierName'                       => 'Virgin Mobile Canada',
            'Email2SMSEmailAddress'             => '@vmobile.ca',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 14,
            'CarrierName'                       => 'USA Mobility',
            'Email2SMSEmailAddress'             => '@airmessage.net',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 15,
            'CarrierName'                       => 'Bell South',
            'Email2SMSEmailAddress'             => '@bellsouth.net',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 16,
            'CarrierName'                       => 'MetroPCS',
            'Email2SMSEmailAddress'             => '@mymetropcs.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 17,
            'CarrierName'                       => 'Boost Mobile',
            'Email2SMSEmailAddress'             => '@myboostmobile.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 18,
            'CarrierName'                       => 'Helio',
            'Email2SMSEmailAddress'             => '@myhelio.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 19,
            'CarrierName'                       => 'Fido',
            'Email2SMSEmailAddress'             => '@fido.ca',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 20,
            'CarrierName'                       => 'Telus',
            'Email2SMSEmailAddress'             => '@msg.telus.com',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
        MobilePhoneCarrier::create(['CarrierID' => 23,
            'CarrierName'                       => 'Wind Mobile Canada',
            'Email2SMSEmailAddress'             => '@txt.windmobile.ca',
            'NumberOfDigits'                    => '10',
            'Display'                           => 1,
        ]);
    }
}
