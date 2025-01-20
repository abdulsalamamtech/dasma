<?php 

namespace App\Helpers;

class Setup {

    public static function siteName(){
        return 'Dasma';
    }

    public static function siteDescription(){
        return 'Dasma is a premium e-commerce website with a focus on luxury and sustainable products.';
    }

    public static function siteKeywords(){
        return 'e-commerce, luxury, sustainable, clothing, shoes, accessories, Nigeria';
    }

    public static function siteLogo(){
        return asset('/assets/img/logo.png');
    }

    public static function siteFavicon(){
        return asset('/assets/img/favicon.png');
    }

    /** 
     * @param string sign, word or code
     * @return string | mixed
     */
    public static function currency(string $val = 'sign'){
        $currency =  [
            // Date of introduction	1 January 1973
            'sign' => '₦',
            'word' => 'Naira',
            'code' => 'NGN',
        ];
        if($val && array_key_exists($val,$currency)){
            return $currency[$val];
        }
        return $currency;

    }


}