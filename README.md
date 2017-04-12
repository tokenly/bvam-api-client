# Tokenly BVAM Provider client.

Use this client for interacting the tokenly BVAM provider

# Installation


### Add the Laravel package via composer

```
composer require tokenly/bvam-api-client
```

### Add the Service Provider

Add the following to the `providers` array in your application config:

```
Tokenly\BvamApiClient\BVAMClientServiceProvider::class
```

### Use the API

```php
$bvam_client = app('Tokenly\BvamApiClient\BVAMClient');
$asset_info = $bvam_client->getAssetInfo('SOUP');
```
