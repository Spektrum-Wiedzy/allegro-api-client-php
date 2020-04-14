<?php
/**
 * CheckoutFormStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;
use \AllegroApi\ObjectSerializer;

/**
 * CheckoutFormStatus Class Doc Comment
 *
 * @category Class
 * @description Describes status of the form delivery and purchase options based on payment and purchase status. * &#x60;BOUGHT&#x60; - purchase without checkout form filled in * &#x60;FILLED_IN&#x60; - checkout form filled in but payment is not completed yet so data could still change * &#x60;READY_FOR_PROCESSING&#x60; - payment completed. Purchase is ready for processing.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormStatus
{
    /**
     * Possible values of this enum
     */
    const BOUGHT = 'BOUGHT';
    const FILLED_IN = 'FILLED_IN';
    const READY_FOR_PROCESSING = 'READY_FOR_PROCESSING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOUGHT,
            self::FILLED_IN,
            self::READY_FOR_PROCESSING,
        ];
    }
}


