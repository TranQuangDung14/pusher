get the code in pusher.com 

<!-- run -->
composer require pusher/pusher-php-server



app_id = "1749433"
key = "6d1034ea2dd1ce215057"
secret = "39b2730f6dcbfef47f7b"
cluster = "ap1"

create event :
php artisan make:event PostCreated

check (pusher.blade.php)

use anywhere in controller
event(new MyEvent('hello world'));
