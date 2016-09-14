<?php

use Tokenly\BvamApiClient\BVAMClient;

$api = new BVAMClient('https://bvam.tokenly.com');
$asset_info = $api->getAssetInfo('SOUP');

