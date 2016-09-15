<?php

namespace Tokenly\BvamApiClient;

use Exception;
use Tokenly\APIClient\TokenlyAPI;

class BVAMClient extends TokenlyAPI
{

    function __construct($api_base_url) {
        parent::__construct($api_base_url);
    }
    
    public function getBvamList() {
        return $this->getPublic('api/v1/bvam/all');
    }

    public function getCategoryList() {
        return $this->getPublic('api/v1/category/all');
    }

    public function getAssetInfo($asset_name) {
        return $this->getPublic('api/v1/asset/'.$asset_name);
    }

    public function getMultipleAssetsInfo($asset_names) {
        return $this->getPublic('api/v1/asset', ['assets' => implode(',', $asset_names)]);
    }


    public function addBvamJson($bvam_json) {
        return $this->postPublic('api/v1/bvam', ['bvam' => $bvam_json]);
    }

    public function addCategoryJson($category_json) {
        return $this->postPublic('api/v1/category', ['category' => $category_json]);
    }

}
