# scripturepub-dallas

This is based on the [Yii2 Starter Kit](https://github.com/trntv/yii2-starter-kit).

Please consult their [Readme](https://github.com/trntv/yii2-starter-kit/blob/master/README.md) for full details.

## TABLE OF CONTENTS
- [Default Users](#users)
- [Installation](docs/installation.md)
    - [Manual installation](docs/installation.md#manual-installation)
    - [Docker installation](docs/installation.md#docker-installation)
    - [Vagrant installation](docs/installation.md#vagrant-installation)
- [Console commands](docs/console.md)

## Notes

I was able to get this running on my Mac using [Docker for Mac](https://docs.docker.com/engine/installation/mac/).

I did have to run one additional command before running `composer install ...`
```
composer global require "fxp/composer-asset-plugin:^1.2.2"
```

When manually updating your hosts file, use `app-publishing-service.dev` instead of `yii2-starter-kit.dev`.
-- Chris Hubbard

## Users
`administrator` role account
```
Login: webmaster
Password: webmaster
```

`manager` role account
```
Login: manager
Password: manager
```

`user` role account
```
Login: user
Password: user
```

##READ MORE
https://github.com/yiisoft/yii2/blob/master/apps/advanced/README.md
https://github.com/yiisoft/yii2/tree/master/docs

