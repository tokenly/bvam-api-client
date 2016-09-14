<?php

namespace Tokenly\BvamApiClient;

use Exception;
use Tokenly\APIClient\TokenlyAPI;

class BVAMClient extends TokenlyAPI
{

    function __construct($api_base_url, $client_id=null, $client_secret=null) {
        parent::__construct($api_base_url, null, $client_id, $client_secret);
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


    public function addBvamJson($bvam_json) {
        return $this->postPublic('api/v1/bvam', ['bvam' => $bvam_json]);
    }

    public function addCategoryJson($category_json) {
        return $this->postPublic('api/v1/category', ['category' => $category_json]);
    }

}
