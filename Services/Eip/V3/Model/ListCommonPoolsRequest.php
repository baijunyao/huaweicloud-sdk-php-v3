<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCommonPoolsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCommonPoolsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  显示，形式为\"fields=id&fields=name&...\"  支持字段：id/name/status/type/used/allow_share_bandwidth_types/public_border_group
    * name  公共池名称
    * publicBorderGroup  公共池位于中心还是边缘
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => 'string',
            'name' => 'string',
            'publicBorderGroup' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  显示，形式为\"fields=id&fields=name&...\"  支持字段：id/name/status/type/used/allow_share_bandwidth_types/public_border_group
    * name  公共池名称
    * publicBorderGroup  公共池位于中心还是边缘
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'name' => null,
        'publicBorderGroup' => null
    ];

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
    * fields  显示，形式为\"fields=id&fields=name&...\"  支持字段：id/name/status/type/used/allow_share_bandwidth_types/public_border_group
    * name  公共池名称
    * publicBorderGroup  公共池位于中心还是边缘
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'name' => 'name',
            'publicBorderGroup' => 'public_border_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  显示，形式为\"fields=id&fields=name&...\"  支持字段：id/name/status/type/used/allow_share_bandwidth_types/public_border_group
    * name  公共池名称
    * publicBorderGroup  公共池位于中心还是边缘
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'name' => 'setName',
            'publicBorderGroup' => 'setPublicBorderGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  显示，形式为\"fields=id&fields=name&...\"  支持字段：id/name/status/type/used/allow_share_bandwidth_types/public_border_group
    * name  公共池名称
    * publicBorderGroup  公共池位于中心还是边缘
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'name' => 'getName',
            'publicBorderGroup' => 'getPublicBorderGroup'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fields']) && (mb_strlen($this->container['fields']) > 1024)) {
                $invalidProperties[] = "invalid value for 'fields', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fields']) && (mb_strlen($this->container['fields']) < 0)) {
                $invalidProperties[] = "invalid value for 'fields', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 36)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 0.";
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
    * Gets fields
    *  显示，形式为\"fields=id&fields=name&...\"  支持字段：id/name/status/type/used/allow_share_bandwidth_types/public_border_group
    *
    * @return string|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string|null $fields 显示，形式为\"fields=id&fields=name&...\"  支持字段：id/name/status/type/used/allow_share_bandwidth_types/public_border_group
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets name
    *  公共池名称
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
    * @param string|null $name 公共池名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  公共池位于中心还是边缘
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 公共池位于中心还是边缘
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
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
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
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

