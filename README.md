# Ninit

**Don't Panic.**

A Laravel installer from [Nzoko](https://nzoko.com). Pack a towel. Point people at `/install`. When `storage/installed` shows up, the universe is ready. The answer is still 42.

```bash
composer config repositories.ninit vcs https://github.com/nzokocom/laravel-ninit.git
composer require nzoko/ninit
php artisan vendor:publish --tag=installer-config
```

PHP 8.2+ · Laravel 10–13 · Livewire 3/4 · MIT

So long, and thanks for all the fish.
