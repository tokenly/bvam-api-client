<?php

namespace Tokenly\BvamApiClient;

use Exception;
use Tokenly\APIClient\TokenlyAPI;

class BVAMClient extends TokenlyAPI
{

    function __construct($api_base_url) {
        if($api_base_url == null){
            $api_base_url = 'http://bvam.tokenly.com';
        }        
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
        $get = $this->getPublic('api/v1/assets', ['assets' => implode(',', $asset_names)]);
        if($get){
            //use asset names as array keys
            $output = array();
            foreach($get as $asset){
                $output[$asset['asset']] = $asset;
            }
            return $output;
        }
    }


    public function addBvamJson($bvam_json) {
        return $this->postPublic('api/v1/bvam', ['bvam' => $bvam_json]);
    }

    public function addCategoryJson($category_json) {
        return $this->postPublic('api/v1/category', ['category' => $category_json]);
    }

}
