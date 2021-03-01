# AdminVD

## Not for Production

## Install

```
composer require twodevs/adminvd
```

## Setup

```
php artisan vendor:publish --tag=adminvd-publish
```

Will seed the tables after migrate
```
php artisan migrate
```

### Update assets

```
php artisan vendor:publish --tag=adminvd-assets --force
```

### Create User

```
php artisan adminvd:users-create
```

