# TremendKrumoBundle - Krumo debug tool for Symfony2

![TremendKrumoBundle](https://github.com/petrica/TremendKrumoBundle/raw/master/Resources/doc/images/krumo.jpg)

## Installation (Symfony2)

Download TremendKrumoBundle to the vendor directory under bundles/Tremend/KrumoBundle.
You can use the Symfony’s vendor script for the automated procces. Add the following in your deps file:

    [TremendKrumoBundle]
        git=git://github.com/petrica/TremendKrumoBundle.git
        target=/bundles/Tremend/KrumoBundle

and run the vendors script to download bundles:

    php bin/vendors install

Register Bundle in AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            //...
            new Tremend\KrumoBundle\TremendKrumoBundle(),
            //...
        );
        return $bundles;
    }


Autoload

    'Tremend'          => __DIR__.'/../vendor/bundles',


## Usage

The Krumo class is defined inside the global namespace, that is why you can call the krumo function anywhere in your code like this:

    \krumo($variableToDump);

Krumo class is defined as a service for Symfony2 and it is loaded automatically at the bundle boot process.

## To Do

- Fix CSS images background path

## Sponsor

This plugin is sponsored by [Tremend Software Consulting Romania](http://www.tremend.ro)

![Tremend Software Consulting](http://www.tremend.ro/sites/all/themes/tremend/images/logo.png)

