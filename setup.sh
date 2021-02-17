# Edit this file for easier deployment through SSH
echo "Installing..."
mv .env.example .env
sed -ie 's/homesteadDB/ichardde_mrea/ig' .env
sed -ie 's/homesteadUSER/ichardde_WPZMK/ig' .env
sed -ie 's/secret/'$1'/ig' .env
composer install
php artisan key:generate
php artisan migrate
echo "Deploying..."
cp -rf ./public/* ./../../"public_html"/$2/
cp -rf ./public/.htaccess ./../../"public_html"/$2/
