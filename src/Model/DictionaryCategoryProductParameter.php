<?php
/**
 * DictionaryCategoryProductParameter
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

use AllegroApi\ObjectSerializer;
use ReturnTypeWillChange;

/**
 * DictionaryCategoryProductParameter Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DictionaryCategoryProductParameter extends CategoryProductParameter
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DictionaryCategoryProductParameter';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'type' => 'string',
        'restrictions' => '\AllegroApi\Model\DictionaryCategoryProductParameterAllOfRestrictions',
        'dictionary' => '\AllegroApi\Model\DictionaryCategoryProductParameterAllOfDictionary[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'type' => null,
        'restrictions' => null,
        'dictionary' => null
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'restrictions' => 'restrictions',
        'dictionary' => 'dictionary'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'restrictions' => 'setRestrictions',
        'dictionary' => 'setDictionary'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'restrictions' => 'getRestrictions',
        'dictionary' => 'getDictionary'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['type'] = isset($data['type']) ? $data['type'] : 'dictionary';
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
        $this->container['dictionary'] = isset($data['dictionary']) ? $data['dictionary'] : null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return DictionaryCategoryProductParameterAllOfRestrictions|null
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param DictionaryCategoryProductParameterAllOfRestrictions|null $restrictions restrictions
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets dictionary
     *
     * @return DictionaryCategoryProductParameterAllOfDictionary[]|null
     */
    public function getDictionary()
    {
        return $this->container['dictionary'];
    }

    /**
     * Sets dictionary
     *
     * @param DictionaryCategoryProductParameterAllOfDictionary[]|null $dictionary Defines the values accepted for this parameter.
     *
     * @return $this
     */
    public function setDictionary($dictionary)
    {
        $this->container['dictionary'] = $dictionary;

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


