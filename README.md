# Tokenly BVAM Provider client.

Use this client for querying the tokenly BVAM provider

# Installation


### Add the Laravel package via composer

```
composer require tokenly/bvam-api-client
```


### Use the API

```php
$api = new BVAMClient('https://bvam.tokenly.com');
$asset_info = $api->getAssetInfo('SOUP');
```
