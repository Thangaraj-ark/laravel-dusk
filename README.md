<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Install Steps
1. Copy .env example to .env
2. Run `composer install`
3. Run `npm i`
4. Run `npm run dev`
5. Run `php artisan migrate`
6. Run `php artisan dusk:chrome-driver`
7. Run `php artisan dusk`
8. If showing the error `Failed to connect to localhost port 49293 after 0 ms: Couldn't connect to server`, need to intialize the manual chrome.
`vendor/laravel/dusk/bin/chromedriver-mac-intel`
Take the port number and set to .env file `DUSK_DRIVER_URL=http://localhost:######/`
9. php artisan storage:link
10. php artisan serve
11. Again run the `php artisan dusk`
