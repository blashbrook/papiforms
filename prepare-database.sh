echo You are currently in the directory
pwd
echo Enter the full path to the Laravel root directory
read path
cd $path
echo the path you have chosen is:
pwd
while true; do
    read -p "Is this the correct path?" yn
    case $yn in
        [Yy]* ) 
        cp vendor/blashbrook/papiforms/src/Database/Seeders/DeliveryOptionSeeder.php  database/seeders/DeliveryOptionSeeder.php;
		cp vendor/blashbrook/papiforms/src/Database/Seeders/MobilePhoneCarrierSeeder.php  database/seeders/MobilePhoneCarrierSeeder.php;
		cp vendor/blashbrook/papiforms/src/Database/Seeders/PatronCodeSeeder.php  database/seeders/PatronCodeSeeder.php;
		cp vendor/blashbrook/papiforms/src/Database/Seeders/PatronStatClassCodeSeeder.php  database/seeders/PatronStatClassCodeSeeder.php;
		cp vendor/blashbrook/papiforms/src/Database/Seeders/PostalCodeSeeder.php  database/seeders/PostalCodeSeeder.php;
		cp vendor/blashbrook/papiforms/src/Database/Seeders/UdfOptionSeeder.php  database/seeders/UdfOptionSeeder.php;
		cp vendor/blashbrook/papiforms/src/Database/Seeders/UdfOptionDefSeeder.php  database/seeders/UdfOptionDefSeeder.php; 
		break;;
        [Nn]* ) exit;;
        * ) echo "Please answer yes or no.";;
    esac
done
sed 's/namespace Blashbrook\\PAPIForms\\Database\\Seeders;/namespace Database\\Seeders;/g' database/seeders/DeliveryOptionSeeder.php
sed 's/namespace Blashbrook\\PAPIForms\\Database\\Seeders;/namespace Database\Seeders;/g' database/seeders/MobilePhoneCarrierSeeder.php
sed 's/namespace Blashbrook\\PAPIForms\\Database\\Seeders;/namespace Database\\Seeders;/g' database/seeders/PatronCodeSeeder.php
sed 's/namespace Blashbrook\\PAPIForms\\Database\\Seeders;/namespace Database\\Seeders;/g' database/seeders/PatronStatClassCodeSeeder.php
sed 's/namespace Blashbrook\PAPIForms\\Database\\Seeders;/namespace Database\\Seeders;/g' database/seeders/PostalCodeSeeder.php
sed 's/namespace Blashbrook\PAPIForms\\Database\\Seeders;/namespace Database\\Seeders;/g' database/seeders/UdfOptionDefSeeder.php
sed 's/namespace Blashbrook\\PAPIForms\\Database\\Seeders;/namespace Database\\Seeders;/g' database/seeders/UdfOptionSeeder.php
echo Creating database tables ...
php artisan db:seed --class=DeliveryOptionSeeder
php artisan db:seed --class=MobilePhoneCarrierSeeder
php artisan db:seed --class=PatronCodeSeeder
php artisan db:seed --class=PatronStatClassCodeSeeder
php artisan db:seed --class=PostalCodeSeeder
php artisan db:seed --class=UdfOptionSeeder
php artisan db:seed --class=UdfOptionDefSeeder


