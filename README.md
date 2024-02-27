get the code in pusher.com 

<!-- run -->
composer require pusher/pusher-php-server

<!-- seting .env -->
/***
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=1749433
PUSHER_APP_KEY=6d1034ea2dd1ce215057
PUSHER_APP_SECRET=39b2730f6dcbfef47f7b
PUSHER_APP_CLUSTER=ap1

***/

<!-- create event : -->
/***
php artisan make:event PostCreated
***/

<!-- check  -->
/***
(pusher.blade.php)
***/
<!-- use anywhere in controller -->
/***
event(new MyEvent('hello world'));
***/
