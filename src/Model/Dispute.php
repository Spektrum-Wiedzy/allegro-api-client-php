<?php
/**
 * Dispute
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
 * Dispute Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Dispute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Dispute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'subject' => '\AllegroApi\Model\Subject',
        'status' => 'string',
        'messages_status' => 'string',
        'buyer' => '\AllegroApi\Model\DisputeUser',
        'checkout_form' => '\AllegroApi\Model\DisputeCheckoutForm',
        'message' => '\AllegroApi\Model\DisputeFirstMessage',
        'messages_count' => 'int',
        'last_message_creation_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'subject' => null,
        'status' => null,
        'messages_status' => null,
        'buyer' => null,
        'checkout_form' => null,
        'message' => null,
        'messages_count' => 'int32',
        'last_message_creation_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'subject' => false,
		'status' => false,
		'messages_status' => false,
		'buyer' => false,
		'checkout_form' => false,
		'message' => false,
		'messages_count' => false,
		'last_message_creation_date' => false
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
        'subject' => 'subject',
        'status' => 'status',
        'messages_status' => 'messagesStatus',
        'buyer' => 'buyer',
        'checkout_form' => 'checkoutForm',
        'message' => 'message',
        'messages_count' => 'messagesCount',
        'last_message_creation_date' => 'lastMessageCreationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'subject' => 'setSubject',
        'status' => 'setStatus',
        'messages_status' => 'setMessagesStatus',
        'buyer' => 'setBuyer',
        'checkout_form' => 'setCheckoutForm',
        'message' => 'setMessage',
        'messages_count' => 'setMessagesCount',
        'last_message_creation_date' => 'setLastMessageCreationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'subject' => 'getSubject',
        'status' => 'getStatus',
        'messages_status' => 'getMessagesStatus',
        'buyer' => 'getBuyer',
        'checkout_form' => 'getCheckoutForm',
        'message' => 'getMessage',
        'messages_count' => 'getMessagesCount',
        'last_message_creation_date' => 'getLastMessageCreationDate'
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

    public const STATUS_CLOSED = 'CLOSED';
    public const STATUS_ONGOING = 'ONGOING';
    public const STATUS_UNRESOLVED = 'UNRESOLVED';
    public const MESSAGES_STATUS__NEW = 'NEW';
    public const MESSAGES_STATUS_SELLER_REPLIED = 'SELLER_REPLIED';
    public const MESSAGES_STATUS_BUYER_REPLIED = 'BUYER_REPLIED';
    public const MESSAGES_STATUS_ALLEGRO_ADVISOR_REPLIED = 'ALLEGRO_ADVISOR_REPLIED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CLOSED,
            self::STATUS_ONGOING,
            self::STATUS_UNRESOLVED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessagesStatusAllowableValues()
    {
        return [
            self::MESSAGES_STATUS__NEW,
            self::MESSAGES_STATUS_SELLER_REPLIED,
            self::MESSAGES_STATUS_BUYER_REPLIED,
            self::MESSAGES_STATUS_ALLEGRO_ADVISOR_REPLIED,
        ];
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
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('messages_status', $data ?? [], null);
        $this->setIfExists('buyer', $data ?? [], null);
        $this->setIfExists('checkout_form', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('messages_count', $data ?? [], null);
        $this->setIfExists('last_message_creation_date', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['messages_status'] === null) {
            $invalidProperties[] = "'messages_status' can't be null";
        }
        $allowedValues = $this->getMessagesStatusAllowableValues();
        if (!is_null($this->container['messages_status']) && !in_array($this->container['messages_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'messages_status', must be one of '%s'",
                $this->container['messages_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        if ($this->container['checkout_form'] === null) {
            $invalidProperties[] = "'checkout_form' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['messages_count'] === null) {
            $invalidProperties[] = "'messages_count' can't be null";
        }
        if (($this->container['messages_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'messages_count', must be bigger than or equal to 0.";
        }

        if ($this->container['last_message_creation_date'] === null) {
            $invalidProperties[] = "'last_message_creation_date' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Identifier of the dispute
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
     * Gets subject
     *
     * @return \AllegroApi\Model\Subject
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \AllegroApi\Model\Subject $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets messages_status
     *
     * @return string
     */
    public function getMessagesStatus()
    {
        return $this->container['messages_status'];
    }

    /**
     * Sets messages_status
     *
     * @param string $messages_status messages_status
     *
     * @return self
     */
    public function setMessagesStatus($messages_status)
    {
        if (is_null($messages_status)) {
            throw new \InvalidArgumentException('non-nullable messages_status cannot be null');
        }
        $allowedValues = $this->getMessagesStatusAllowableValues();
        if (!in_array($messages_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'messages_status', must be one of '%s'",
                    $messages_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['messages_status'] = $messages_status;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \AllegroApi\Model\DisputeUser
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \AllegroApi\Model\DisputeUser $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            throw new \InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets checkout_form
     *
     * @return \AllegroApi\Model\DisputeCheckoutForm
     */
    public function getCheckoutForm()
    {
        return $this->container['checkout_form'];
    }

    /**
     * Sets checkout_form
     *
     * @param \AllegroApi\Model\DisputeCheckoutForm $checkout_form checkout_form
     *
     * @return self
     */
    public function setCheckoutForm($checkout_form)
    {
        if (is_null($checkout_form)) {
            throw new \InvalidArgumentException('non-nullable checkout_form cannot be null');
        }
        $this->container['checkout_form'] = $checkout_form;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \AllegroApi\Model\DisputeFirstMessage
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \AllegroApi\Model\DisputeFirstMessage $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets messages_count
     *
     * @return int
     */
    public function getMessagesCount()
    {
        return $this->container['messages_count'];
    }

    /**
     * Sets messages_count
     *
     * @param int $messages_count messages_count
     *
     * @return self
     */
    public function setMessagesCount($messages_count)
    {
        if (is_null($messages_count)) {
            throw new \InvalidArgumentException('non-nullable messages_count cannot be null');
        }

        if (($messages_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $messages_count when calling Dispute., must be bigger than or equal to 0.');
        }

        $this->container['messages_count'] = $messages_count;

        return $this;
    }

    /**
     * Gets last_message_creation_date
     *
     * @return \DateTime
     */
    public function getLastMessageCreationDate()
    {
        return $this->container['last_message_creation_date'];
    }

    /**
     * Sets last_message_creation_date
     *
     * @param \DateTime $last_message_creation_date last_message_creation_date
     *
     * @return self
     */
    public function setLastMessageCreationDate($last_message_creation_date)
    {
        if (is_null($last_message_creation_date)) {
            throw new \InvalidArgumentException('non-nullable last_message_creation_date cannot be null');
        }
        $this->container['last_message_creation_date'] = $last_message_creation_date;

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


