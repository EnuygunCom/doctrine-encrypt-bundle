#Installation

1. Download EnuygunComDoctrineEncryptBundle using composer
2. Enable the Bundle

### Step 1: Download EnuygunComDoctrineEncryptBundle using composer

Add EnuygunComDoctrineEncryptBundle in your composer.json:

```js
{
    "require": {
        "enuyguncom/doctrine-encrypt-bundle": "dev-master"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update enuyguncom/doctrine-encrypt-bundle
```

Composer will install the bundle to your project's `vendor/enuyguncom` directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel by adding it:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new EnuygunCom\DoctrineEncryptBundle\EnuygunComDoctrineEncryptBundle(),
    );
}
```