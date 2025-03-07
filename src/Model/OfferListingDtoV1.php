<?php
/**
 * OfferListingDtoV1
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
 * OpenAPI spec version: 1.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.2-SNAPSHOT
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
 * OfferListingDtoV1 Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferListingDtoV1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'OfferListingDtoV1';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'category' => '\AllegroApi\Model\OfferListingDtoV1Category',
        'primary_image' => '\AllegroApi\Model\OfferListingDtoV1Image',
        'selling_mode' => '\AllegroApi\Model\OfferListingDtoV1SellingMode',
        'sale_info' => '\AllegroApi\Model\OfferListingDtoV1SaleInfo',
        'stock' => '\AllegroApi\Model\OfferListingDtoV1Stock',
        'stats' => '\AllegroApi\Model\OfferListingDtoV1Stats',
        'publication' => '\AllegroApi\Model\OfferListingDtoV1Publication',
        'after_sales_services' => '\AllegroApi\Model\AfterSalesServices',
        'additional_services' => '\AllegroApi\Model\JustId'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'category' => null,
        'primary_image' => null,
        'selling_mode' => null,
        'sale_info' => null,
        'stock' => null,
        'stats' => null,
        'publication' => null,
        'after_sales_services' => null,
        'additional_services' => null
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'category' => 'category',
        'primary_image' => 'primaryImage',
        'selling_mode' => 'sellingMode',
        'sale_info' => 'saleInfo',
        'stock' => 'stock',
        'stats' => 'stats',
        'publication' => 'publication',
        'after_sales_services' => 'afterSalesServices',
        'additional_services' => 'additionalServices'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'category' => 'setCategory',
        'primary_image' => 'setPrimaryImage',
        'selling_mode' => 'setSellingMode',
        'sale_info' => 'setSaleInfo',
        'stock' => 'setStock',
        'stats' => 'setStats',
        'publication' => 'setPublication',
        'after_sales_services' => 'setAfterSalesServices',
        'additional_services' => 'setAdditionalServices'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'category' => 'getCategory',
        'primary_image' => 'getPrimaryImage',
        'selling_mode' => 'getSellingMode',
        'sale_info' => 'getSaleInfo',
        'stock' => 'getStock',
        'stats' => 'getStats',
        'publication' => 'getPublication',
        'after_sales_services' => 'getAfterSalesServices',
        'additional_services' => 'getAdditionalServices'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['primary_image'] = isset($data['primary_image']) ? $data['primary_image'] : null;
        $this->container['selling_mode'] = isset($data['selling_mode']) ? $data['selling_mode'] : null;
        $this->container['sale_info'] = isset($data['sale_info']) ? $data['sale_info'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['publication'] = isset($data['publication']) ? $data['publication'] : null;
        $this->container['after_sales_services'] = isset($data['after_sales_services']) ? $data['after_sales_services'] : null;
        $this->container['additional_services'] = isset($data['additional_services']) ? $data['additional_services'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category
     *
     * @return OfferListingDtoV1Category|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param OfferListingDtoV1Category|null $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets primary_image
     *
     * @return OfferListingDtoV1Image|null
     */
    public function getPrimaryImage()
    {
        return $this->container['primary_image'];
    }

    /**
     * Sets primary_image
     *
     * @param OfferListingDtoV1Image|null $primary_image primary_image
     *
     * @return $this
     */
    public function setPrimaryImage($primary_image)
    {
        $this->container['primary_image'] = $primary_image;

        return $this;
    }

    /**
     * Gets selling_mode
     *
     * @return OfferListingDtoV1SellingMode|null
     */
    public function getSellingMode()
    {
        return $this->container['selling_mode'];
    }

    /**
     * Sets selling_mode
     *
     * @param OfferListingDtoV1SellingMode|null $selling_mode selling_mode
     *
     * @return $this
     */
    public function setSellingMode($selling_mode)
    {
        $this->container['selling_mode'] = $selling_mode;

        return $this;
    }

    /**
     * Gets sale_info
     *
     * @return OfferListingDtoV1SaleInfo|null
     */
    public function getSaleInfo()
    {
        return $this->container['sale_info'];
    }

    /**
     * Sets sale_info
     *
     * @param OfferListingDtoV1SaleInfo|null $sale_info sale_info
     *
     * @return $this
     */
    public function setSaleInfo($sale_info)
    {
        $this->container['sale_info'] = $sale_info;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return OfferListingDtoV1Stock|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param OfferListingDtoV1Stock|null $stock stock
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return OfferListingDtoV1Stats|null
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param OfferListingDtoV1Stats|null $stats stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets publication
     *
     * @return OfferListingDtoV1Publication|null
     */
    public function getPublication()
    {
        return $this->container['publication'];
    }

    /**
     * Sets publication
     *
     * @param OfferListingDtoV1Publication|null $publication publication
     *
     * @return $this
     */
    public function setPublication($publication)
    {
        $this->container['publication'] = $publication;

        return $this;
    }

    /**
     * Gets after_sales_services
     *
     * @return AfterSalesServices|null
     */
    public function getAfterSalesServices()
    {
        return $this->container['after_sales_services'];
    }

    /**
     * Sets after_sales_services
     *
     * @param AfterSalesServices|null $after_sales_services after_sales_services
     *
     * @return $this
     */
    public function setAfterSalesServices($after_sales_services)
    {
        $this->container['after_sales_services'] = $after_sales_services;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return JustId|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param JustId|null $additional_services additional_services
     *
     * @return $this
     */
    public function setAdditionalServices($additional_services)
    {
        $this->container['additional_services'] = $additional_services;

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
}


