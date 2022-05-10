<?php
/**
 * AverageRates
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
use InvalidArgumentException;
use ReturnTypeWillChange;

/**
 * AverageRates Class Doc Comment
 *
 * @category Class
 * @description The rates broken down into detailed categories. Note that this information is only available if the seller has received enough detailed ratings.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AverageRates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'AverageRates';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'delivery' => 'double',
        'delivery_cost' => 'double',
        'description' => 'double',
        'service' => 'double'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'delivery' => 'double',
        'delivery_cost' => 'double',
        'description' => 'double',
        'service' => 'double'
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'delivery' => 'delivery',
        'delivery_cost' => 'deliveryCost',
        'description' => 'description',
        'service' => 'service'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery' => 'setDelivery',
        'delivery_cost' => 'setDeliveryCost',
        'description' => 'setDescription',
        'service' => 'setService'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery' => 'getDelivery',
        'delivery_cost' => 'getDeliveryCost',
        'description' => 'getDescription',
        'service' => 'getService'
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
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
        $this->container['delivery_cost'] = isset($data['delivery_cost']) ? $data['delivery_cost'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
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

        if (!is_null($this->container['delivery']) && ($this->container['delivery'] > 5)) {
            $invalidProperties[] = "invalid value for 'delivery', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['delivery']) && ($this->container['delivery'] < 0)) {
            $invalidProperties[] = "invalid value for 'delivery', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['delivery_cost']) && ($this->container['delivery_cost'] > 5)) {
            $invalidProperties[] = "invalid value for 'delivery_cost', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['delivery_cost']) && ($this->container['delivery_cost'] < 0)) {
            $invalidProperties[] = "invalid value for 'delivery_cost', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && ($this->container['description'] > 5)) {
            $invalidProperties[] = "invalid value for 'description', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['description']) && ($this->container['description'] < 0)) {
            $invalidProperties[] = "invalid value for 'description', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['service']) && ($this->container['service'] > 5)) {
            $invalidProperties[] = "invalid value for 'service', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['service']) && ($this->container['service'] < 0)) {
            $invalidProperties[] = "invalid value for 'service', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Gets delivery
     *
     * @return double|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param double|null $delivery The average value of delivery rate.
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {

        if (!is_null($delivery) && ($delivery > 5)) {
            throw new InvalidArgumentException('invalid value for $delivery when calling AverageRates., must be smaller than or equal to 5.');
        }
        if (!is_null($delivery) && ($delivery < 0)) {
            throw new InvalidArgumentException('invalid value for $delivery when calling AverageRates., must be bigger than or equal to 0.');
        }

        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets delivery_cost
     *
     * @return double|null
     */
    public function getDeliveryCost()
    {
        return $this->container['delivery_cost'];
    }

    /**
     * Sets delivery_cost
     *
     * @param double|null $delivery_cost The average value of delivery cost rate.
     *
     * @return $this
     */
    public function setDeliveryCost($delivery_cost)
    {

        if (!is_null($delivery_cost) && ($delivery_cost > 5)) {
            throw new InvalidArgumentException('invalid value for $delivery_cost when calling AverageRates., must be smaller than or equal to 5.');
        }
        if (!is_null($delivery_cost) && ($delivery_cost < 0)) {
            throw new InvalidArgumentException('invalid value for $delivery_cost when calling AverageRates., must be bigger than or equal to 0.');
        }

        $this->container['delivery_cost'] = $delivery_cost;

        return $this;
    }

    /**
     * Gets description
     *
     * @return double|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param double|null $description The average value of description rate.
     *
     * @return $this
     */
    public function setDescription($description)
    {

        if (!is_null($description) && ($description > 5)) {
            throw new InvalidArgumentException('invalid value for $description when calling AverageRates., must be smaller than or equal to 5.');
        }
        if (!is_null($description) && ($description < 0)) {
            throw new InvalidArgumentException('invalid value for $description when calling AverageRates., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets service
     *
     * @return double|null
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param double|null $service The average value of service rate.
     *
     * @return $this
     */
    public function setService($service)
    {

        if (!is_null($service) && ($service > 5)) {
            throw new InvalidArgumentException('invalid value for $service when calling AverageRates., must be smaller than or equal to 5.');
        }
        if (!is_null($service) && ($service < 0)) {
            throw new InvalidArgumentException('invalid value for $service when calling AverageRates., must be bigger than or equal to 0.');
        }

        $this->container['service'] = $service;

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


