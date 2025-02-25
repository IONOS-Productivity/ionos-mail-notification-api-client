<?php
/**
 * ShareMessageByLinkLanguage
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
 * ShareMessageByLinkLanguage Class Doc Comment
 *
 * @category Class
 * @description Language preference for the notification. If not set, market Locale of contract is selected.
 * @package  IONOS\MailNotificationAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShareMessageByLinkLanguage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShareMessageByLink_language';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'displayCountry' => 'string',
        'displayLanguage' => 'string',
        'displayName' => 'string',
        'displayScript' => 'string',
        'displayVariant' => 'string',
        'extensionKeys' => 'string[]',
        'iso3Country' => 'string',
        'iso3Language' => 'string',
        'language' => 'string',
        'script' => 'string',
        'unicodeLocaleAttributes' => 'string[]',
        'unicodeLocaleKeys' => 'string[]',
        'variant' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'displayCountry' => null,
        'displayLanguage' => null,
        'displayName' => null,
        'displayScript' => null,
        'displayVariant' => null,
        'extensionKeys' => null,
        'iso3Country' => null,
        'iso3Language' => null,
        'language' => null,
        'script' => null,
        'unicodeLocaleAttributes' => null,
        'unicodeLocaleKeys' => null,
        'variant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country' => false,
        'displayCountry' => false,
        'displayLanguage' => false,
        'displayName' => false,
        'displayScript' => false,
        'displayVariant' => false,
        'extensionKeys' => false,
        'iso3Country' => false,
        'iso3Language' => false,
        'language' => false,
        'script' => false,
        'unicodeLocaleAttributes' => false,
        'unicodeLocaleKeys' => false,
        'variant' => false
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
        'country' => 'country',
        'displayCountry' => 'displayCountry',
        'displayLanguage' => 'displayLanguage',
        'displayName' => 'displayName',
        'displayScript' => 'displayScript',
        'displayVariant' => 'displayVariant',
        'extensionKeys' => 'extensionKeys',
        'iso3Country' => 'iso3Country',
        'iso3Language' => 'iso3Language',
        'language' => 'language',
        'script' => 'script',
        'unicodeLocaleAttributes' => 'unicodeLocaleAttributes',
        'unicodeLocaleKeys' => 'unicodeLocaleKeys',
        'variant' => 'variant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'displayCountry' => 'setDisplayCountry',
        'displayLanguage' => 'setDisplayLanguage',
        'displayName' => 'setDisplayName',
        'displayScript' => 'setDisplayScript',
        'displayVariant' => 'setDisplayVariant',
        'extensionKeys' => 'setExtensionKeys',
        'iso3Country' => 'setIso3Country',
        'iso3Language' => 'setIso3Language',
        'language' => 'setLanguage',
        'script' => 'setScript',
        'unicodeLocaleAttributes' => 'setUnicodeLocaleAttributes',
        'unicodeLocaleKeys' => 'setUnicodeLocaleKeys',
        'variant' => 'setVariant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'displayCountry' => 'getDisplayCountry',
        'displayLanguage' => 'getDisplayLanguage',
        'displayName' => 'getDisplayName',
        'displayScript' => 'getDisplayScript',
        'displayVariant' => 'getDisplayVariant',
        'extensionKeys' => 'getExtensionKeys',
        'iso3Country' => 'getIso3Country',
        'iso3Language' => 'getIso3Language',
        'language' => 'getLanguage',
        'script' => 'getScript',
        'unicodeLocaleAttributes' => 'getUnicodeLocaleAttributes',
        'unicodeLocaleKeys' => 'getUnicodeLocaleKeys',
        'variant' => 'getVariant'
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('displayCountry', $data ?? [], null);
        $this->setIfExists('displayLanguage', $data ?? [], null);
        $this->setIfExists('displayName', $data ?? [], null);
        $this->setIfExists('displayScript', $data ?? [], null);
        $this->setIfExists('displayVariant', $data ?? [], null);
        $this->setIfExists('extensionKeys', $data ?? [], null);
        $this->setIfExists('iso3Country', $data ?? [], null);
        $this->setIfExists('iso3Language', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('script', $data ?? [], null);
        $this->setIfExists('unicodeLocaleAttributes', $data ?? [], null);
        $this->setIfExists('unicodeLocaleKeys', $data ?? [], null);
        $this->setIfExists('variant', $data ?? [], null);
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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets displayCountry
     *
     * @return string|null
     */
    public function getDisplayCountry()
    {
        return $this->container['displayCountry'];
    }

    /**
     * Sets displayCountry
     *
     * @param string|null $displayCountry displayCountry
     *
     * @return self
     */
    public function setDisplayCountry($displayCountry)
    {
        if (is_null($displayCountry)) {
            throw new \InvalidArgumentException('non-nullable displayCountry cannot be null');
        }
        $this->container['displayCountry'] = $displayCountry;

        return $this;
    }

    /**
     * Gets displayLanguage
     *
     * @return string|null
     */
    public function getDisplayLanguage()
    {
        return $this->container['displayLanguage'];
    }

    /**
     * Sets displayLanguage
     *
     * @param string|null $displayLanguage displayLanguage
     *
     * @return self
     */
    public function setDisplayLanguage($displayLanguage)
    {
        if (is_null($displayLanguage)) {
            throw new \InvalidArgumentException('non-nullable displayLanguage cannot be null');
        }
        $this->container['displayLanguage'] = $displayLanguage;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string|null $displayName displayName
     *
     * @return self
     */
    public function setDisplayName($displayName)
    {
        if (is_null($displayName)) {
            throw new \InvalidArgumentException('non-nullable displayName cannot be null');
        }
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets displayScript
     *
     * @return string|null
     */
    public function getDisplayScript()
    {
        return $this->container['displayScript'];
    }

    /**
     * Sets displayScript
     *
     * @param string|null $displayScript displayScript
     *
     * @return self
     */
    public function setDisplayScript($displayScript)
    {
        if (is_null($displayScript)) {
            throw new \InvalidArgumentException('non-nullable displayScript cannot be null');
        }
        $this->container['displayScript'] = $displayScript;

        return $this;
    }

    /**
     * Gets displayVariant
     *
     * @return string|null
     */
    public function getDisplayVariant()
    {
        return $this->container['displayVariant'];
    }

    /**
     * Sets displayVariant
     *
     * @param string|null $displayVariant displayVariant
     *
     * @return self
     */
    public function setDisplayVariant($displayVariant)
    {
        if (is_null($displayVariant)) {
            throw new \InvalidArgumentException('non-nullable displayVariant cannot be null');
        }
        $this->container['displayVariant'] = $displayVariant;

        return $this;
    }

    /**
     * Gets extensionKeys
     *
     * @return string[]|null
     */
    public function getExtensionKeys()
    {
        return $this->container['extensionKeys'];
    }

    /**
     * Sets extensionKeys
     *
     * @param string[]|null $extensionKeys extensionKeys
     *
     * @return self
     */
    public function setExtensionKeys($extensionKeys)
    {
        if (is_null($extensionKeys)) {
            throw new \InvalidArgumentException('non-nullable extensionKeys cannot be null');
        }


        $this->container['extensionKeys'] = $extensionKeys;

        return $this;
    }

    /**
     * Gets iso3Country
     *
     * @return string|null
     */
    public function getIso3Country()
    {
        return $this->container['iso3Country'];
    }

    /**
     * Sets iso3Country
     *
     * @param string|null $iso3Country iso3Country
     *
     * @return self
     */
    public function setIso3Country($iso3Country)
    {
        if (is_null($iso3Country)) {
            throw new \InvalidArgumentException('non-nullable iso3Country cannot be null');
        }
        $this->container['iso3Country'] = $iso3Country;

        return $this;
    }

    /**
     * Gets iso3Language
     *
     * @return string|null
     */
    public function getIso3Language()
    {
        return $this->container['iso3Language'];
    }

    /**
     * Sets iso3Language
     *
     * @param string|null $iso3Language iso3Language
     *
     * @return self
     */
    public function setIso3Language($iso3Language)
    {
        if (is_null($iso3Language)) {
            throw new \InvalidArgumentException('non-nullable iso3Language cannot be null');
        }
        $this->container['iso3Language'] = $iso3Language;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets script
     *
     * @return string|null
     */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
     * Sets script
     *
     * @param string|null $script script
     *
     * @return self
     */
    public function setScript($script)
    {
        if (is_null($script)) {
            throw new \InvalidArgumentException('non-nullable script cannot be null');
        }
        $this->container['script'] = $script;

        return $this;
    }

    /**
     * Gets unicodeLocaleAttributes
     *
     * @return string[]|null
     */
    public function getUnicodeLocaleAttributes()
    {
        return $this->container['unicodeLocaleAttributes'];
    }

    /**
     * Sets unicodeLocaleAttributes
     *
     * @param string[]|null $unicodeLocaleAttributes unicodeLocaleAttributes
     *
     * @return self
     */
    public function setUnicodeLocaleAttributes($unicodeLocaleAttributes)
    {
        if (is_null($unicodeLocaleAttributes)) {
            throw new \InvalidArgumentException('non-nullable unicodeLocaleAttributes cannot be null');
        }


        $this->container['unicodeLocaleAttributes'] = $unicodeLocaleAttributes;

        return $this;
    }

    /**
     * Gets unicodeLocaleKeys
     *
     * @return string[]|null
     */
    public function getUnicodeLocaleKeys()
    {
        return $this->container['unicodeLocaleKeys'];
    }

    /**
     * Sets unicodeLocaleKeys
     *
     * @param string[]|null $unicodeLocaleKeys unicodeLocaleKeys
     *
     * @return self
     */
    public function setUnicodeLocaleKeys($unicodeLocaleKeys)
    {
        if (is_null($unicodeLocaleKeys)) {
            throw new \InvalidArgumentException('non-nullable unicodeLocaleKeys cannot be null');
        }


        $this->container['unicodeLocaleKeys'] = $unicodeLocaleKeys;

        return $this;
    }

    /**
     * Gets variant
     *
     * @return string|null
     */
    public function getVariant()
    {
        return $this->container['variant'];
    }

    /**
     * Sets variant
     *
     * @param string|null $variant variant
     *
     * @return self
     */
    public function setVariant($variant)
    {
        if (is_null($variant)) {
            throw new \InvalidArgumentException('non-nullable variant cannot be null');
        }
        $this->container['variant'] = $variant;

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
