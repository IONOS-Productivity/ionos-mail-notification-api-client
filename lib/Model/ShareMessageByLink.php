<?php
/**
 * ShareMessageByLink
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  IONOS\MailNotificationAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Event Notification Handler
 *
 * This is the API client for the Mail Notification API
 *
 * The version of the OpenAPI document: 1.0.0-20241219115512
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace IONOS\MailNotificationAPI\Client\Model;

use \ArrayAccess;
use \IONOS\MailNotificationAPI\Client\ObjectSerializer;

/**
 * ShareMessageByLink Class Doc Comment
 *
 * @category Class
 * @package  IONOS\MailNotificationAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShareMessageByLink implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShareMessageByLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expirationDate' => 'int',
        'fileName' => 'string',
        'language' => '\IONOS\MailNotificationAPI\Client\Model\ShareMessageByLinkLanguage',
        'note' => 'string',
        'receiverEmails' => 'string[]',
        'resourceUrl' => 'string',
        'senderUserId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expirationDate' => 'int64',
        'fileName' => null,
        'language' => null,
        'note' => null,
        'receiverEmails' => null,
        'resourceUrl' => null,
        'senderUserId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'expirationDate' => true,
        'fileName' => false,
        'language' => true,
        'note' => true,
        'receiverEmails' => false,
        'resourceUrl' => false,
        'senderUserId' => false
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
        'expirationDate' => 'expirationDate',
        'fileName' => 'fileName',
        'language' => 'language',
        'note' => 'note',
        'receiverEmails' => 'receiverEmails',
        'resourceUrl' => 'resourceUrl',
        'senderUserId' => 'senderUserId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expirationDate' => 'setExpirationDate',
        'fileName' => 'setFileName',
        'language' => 'setLanguage',
        'note' => 'setNote',
        'receiverEmails' => 'setReceiverEmails',
        'resourceUrl' => 'setResourceUrl',
        'senderUserId' => 'setSenderUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expirationDate' => 'getExpirationDate',
        'fileName' => 'getFileName',
        'language' => 'getLanguage',
        'note' => 'getNote',
        'receiverEmails' => 'getReceiverEmails',
        'resourceUrl' => 'getResourceUrl',
        'senderUserId' => 'getSenderUserId'
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
        $this->setIfExists('expirationDate', $data ?? [], null);
        $this->setIfExists('fileName', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('receiverEmails', $data ?? [], null);
        $this->setIfExists('resourceUrl', $data ?? [], null);
        $this->setIfExists('senderUserId', $data ?? [], null);
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

        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
        if ($this->container['receiverEmails'] === null) {
            $invalidProperties[] = "'receiverEmails' can't be null";
        }
        if ($this->container['resourceUrl'] === null) {
            $invalidProperties[] = "'resourceUrl' can't be null";
        }
        if ($this->container['senderUserId'] === null) {
            $invalidProperties[] = "'senderUserId' can't be null";
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
     * Gets expirationDate
     *
     * @return int|null
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param int|null $expirationDate Expiration date of the link in milliseconds since epoch
     *
     * @return self
     */
    public function setExpirationDate($expirationDate)
    {
        if (is_null($expirationDate)) {
            array_push($this->openAPINullablesSetToNull, 'expirationDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expirationDate', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expirationDate'] = $expirationDate;

        return $this;
    }

    /**
     * Gets fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
     * Sets fileName
     *
     * @param string $fileName Name of the file being shared
     *
     * @return self
     */
    public function setFileName($fileName)
    {
        if (is_null($fileName)) {
            throw new \InvalidArgumentException('non-nullable fileName cannot be null');
        }
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \IONOS\MailNotificationAPI\Client\Model\ShareMessageByLinkLanguage|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \IONOS\MailNotificationAPI\Client\Model\ShareMessageByLinkLanguage|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            array_push($this->openAPINullablesSetToNull, 'language');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('language', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Optional note from the sender
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            array_push($this->openAPINullablesSetToNull, 'note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('note', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets receiverEmails
     *
     * @return string[]
     */
    public function getReceiverEmails()
    {
        return $this->container['receiverEmails'];
    }

    /**
     * Sets receiverEmails
     *
     * @param string[] $receiverEmails List of receiver email addresses
     *
     * @return self
     */
    public function setReceiverEmails($receiverEmails)
    {
        if (is_null($receiverEmails)) {
            throw new \InvalidArgumentException('non-nullable receiverEmails cannot be null');
        }
        $this->container['receiverEmails'] = $receiverEmails;

        return $this;
    }

    /**
     * Gets resourceUrl
     *
     * @return string
     */
    public function getResourceUrl()
    {
        return $this->container['resourceUrl'];
    }

    /**
     * Sets resourceUrl
     *
     * @param string $resourceUrl URL of the shared resource
     *
     * @return self
     */
    public function setResourceUrl($resourceUrl)
    {
        if (is_null($resourceUrl)) {
            throw new \InvalidArgumentException('non-nullable resourceUrl cannot be null');
        }
        $this->container['resourceUrl'] = $resourceUrl;

        return $this;
    }

    /**
     * Gets senderUserId
     *
     * @return string
     */
    public function getSenderUserId()
    {
        return $this->container['senderUserId'];
    }

    /**
     * Sets senderUserId
     *
     * @param string $senderUserId Nextcloud User ID of the sender
     *
     * @return self
     */
    public function setSenderUserId($senderUserId)
    {
        if (is_null($senderUserId)) {
            throw new \InvalidArgumentException('non-nullable senderUserId cannot be null');
        }
        $this->container['senderUserId'] = $senderUserId;

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
