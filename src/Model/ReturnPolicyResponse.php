<?php
/**
 * ReturnPolicyResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * ReturnPolicyResponse Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReturnPolicyResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnPolicyResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'seller' => '\AllegroApi\Model\Seller',
        'name' => 'string',
        'availability' => '\AllegroApi\Model\ReturnPolicyAvailability',
        'withdrawal_period' => 'string',
        'return_cost' => '\AllegroApi\Model\ReturnPolicyReturnCost',
        'attachment' => '\AllegroApi\Model\ReturnPolicyResponseAttachment',
        'address' => '\AllegroApi\Model\ReturnPolicyAddress',
        'description' => 'string',
        'contact' => '\AllegroApi\Model\ReturnPolicyContact',
        'options' => '\AllegroApi\Model\ReturnPolicyOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'seller' => null,
        'name' => null,
        'availability' => null,
        'withdrawal_period' => null,
        'return_cost' => null,
        'attachment' => null,
        'address' => null,
        'description' => null,
        'contact' => null,
        'options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'seller' => false,
		'name' => false,
		'availability' => false,
		'withdrawal_period' => false,
		'return_cost' => false,
		'attachment' => true,
		'address' => false,
		'description' => false,
		'contact' => false,
		'options' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'seller' => 'seller',
        'name' => 'name',
        'availability' => 'availability',
        'withdrawal_period' => 'withdrawalPeriod',
        'return_cost' => 'returnCost',
        'attachment' => 'attachment',
        'address' => 'address',
        'description' => 'description',
        'contact' => 'contact',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'seller' => 'setSeller',
        'name' => 'setName',
        'availability' => 'setAvailability',
        'withdrawal_period' => 'setWithdrawalPeriod',
        'return_cost' => 'setReturnCost',
        'attachment' => 'setAttachment',
        'address' => 'setAddress',
        'description' => 'setDescription',
        'contact' => 'setContact',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'seller' => 'getSeller',
        'name' => 'getName',
        'availability' => 'getAvailability',
        'withdrawal_period' => 'getWithdrawalPeriod',
        'return_cost' => 'getReturnCost',
        'attachment' => 'getAttachment',
        'address' => 'getAddress',
        'description' => 'getDescription',
        'contact' => 'getContact',
        'options' => 'getOptions'
    ];

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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('seller', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('availability', $data ?? [], null);
        $this->setIfExists('withdrawal_period', $data ?? [], null);
        $this->setIfExists('return_cost', $data ?? [], null);
        $this->setIfExists('attachment', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['availability'] === null) {
            $invalidProperties[] = "'availability' can't be null";
        }
        if ($this->container['return_cost'] === null) {
            $invalidProperties[] = "'return_cost' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 10240)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 10240.";
        }

        return $invalidProperties;
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
     * @param string|null $id The ID of the return policy definition.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \AllegroApi\Model\Seller|null
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \AllegroApi\Model\Seller|null $seller seller
     *
     * @return self
     */
    public function setSeller($seller)
    {
        if (is_null($seller)) {
            throw new \InvalidArgumentException('non-nullable seller cannot be null');
        }
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Return policy name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ReturnPolicyResponse., must be smaller than or equal to 200.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return \AllegroApi\Model\ReturnPolicyAvailability
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \AllegroApi\Model\ReturnPolicyAvailability $availability availability
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        if (is_null($availability)) {
            throw new \InvalidArgumentException('non-nullable availability cannot be null');
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets withdrawal_period
     *
     * @return string|null
     */
    public function getWithdrawalPeriod()
    {
        return $this->container['withdrawal_period'];
    }

    /**
     * Sets withdrawal_period
     *
     * @param string|null $withdrawal_period Period in ISO 8601 format.
     *
     * @return self
     */
    public function setWithdrawalPeriod($withdrawal_period)
    {
        if (is_null($withdrawal_period)) {
            throw new \InvalidArgumentException('non-nullable withdrawal_period cannot be null');
        }
        $this->container['withdrawal_period'] = $withdrawal_period;

        return $this;
    }

    /**
     * Gets return_cost
     *
     * @return \AllegroApi\Model\ReturnPolicyReturnCost
     */
    public function getReturnCost()
    {
        return $this->container['return_cost'];
    }

    /**
     * Sets return_cost
     *
     * @param \AllegroApi\Model\ReturnPolicyReturnCost $return_cost return_cost
     *
     * @return self
     */
    public function setReturnCost($return_cost)
    {
        if (is_null($return_cost)) {
            throw new \InvalidArgumentException('non-nullable return_cost cannot be null');
        }
        $this->container['return_cost'] = $return_cost;

        return $this;
    }

    /**
     * Gets attachment
     *
     * @return \AllegroApi\Model\ReturnPolicyResponseAttachment|null
     * @deprecated
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param \AllegroApi\Model\ReturnPolicyResponseAttachment|null $attachment attachment
     *
     * @return self
     * @deprecated
     */
    public function setAttachment($attachment)
    {
        if (is_null($attachment)) {
            array_push($this->openAPINullablesSetToNull, 'attachment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attachment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \AllegroApi\Model\ReturnPolicyAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \AllegroApi\Model\ReturnPolicyAddress $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Return policy description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 10240)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ReturnPolicyResponse., must be smaller than or equal to 10240.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \AllegroApi\Model\ReturnPolicyContact|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \AllegroApi\Model\ReturnPolicyContact|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            throw new \InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \AllegroApi\Model\ReturnPolicyOptions|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \AllegroApi\Model\ReturnPolicyOptions|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


