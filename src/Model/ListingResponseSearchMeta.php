<?php
/**
 * ListingResponseSearchMeta
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

use ArrayAccess;
use AllegroApi\ObjectSerializer;
use ReturnTypeWillChange;

/**
 * ListingResponseSearchMeta Class Doc Comment
 *
 * @category Class
 * @description Search metadata.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListingResponseSearchMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ListingResponseSearchMeta';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'available_count' => 'int',
        'total_count' => 'int',
        'fallback' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'available_count' => null,
        'total_count' => null,
        'fallback' => null
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'available_count' => 'availableCount',
        'total_count' => 'totalCount',
        'fallback' => 'fallback'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_count' => 'setAvailableCount',
        'total_count' => 'setTotalCount',
        'fallback' => 'setFallback'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_count' => 'getAvailableCount',
        'total_count' => 'getTotalCount',
        'fallback' => 'getFallback'
    ];
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['available_count'] = isset($data['available_count']) ? $data['available_count'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
        $this->container['fallback'] = isset($data['fallback']) ? $data['fallback'] : null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Gets available_count
     *
     * @return int|null
     */
    public function getAvailableCount()
    {
        return $this->container['available_count'];
    }

    /**
     * Sets available_count
     *
     * @param int|null $available_count The number of results available for navigation. If this number is less than total count, the search criteria (categories, filters, etc.) should be narrowed down to make all results available.
     *
     * @return $this
     */
    public function setAvailableCount($available_count)
    {
        $this->container['available_count'] = $available_count;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int|null $total_count The total number of search results with given parameters.
     *
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets fallback
     *
     * @return bool|null
     */
    public function getFallback()
    {
        return $this->container['fallback'];
    }

    /**
     * Sets fallback
     *
     * @param bool|null $fallback Indicates whether the search fallback was used. If true, no items matching exact given phrase were found and related items are presented.
     *
     * @return $this
     */
    public function setFallback($fallback)
    {
        $this->container['fallback'] = $fallback;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


