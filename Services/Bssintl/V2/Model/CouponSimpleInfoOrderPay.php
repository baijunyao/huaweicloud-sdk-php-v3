<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CouponSimpleInfoOrderPay implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CouponSimpleInfoOrderPay';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  |参数名称：优惠券ID，同种类型的优惠券，列表前面会优先使用| |参数约束及描述：优惠券ID，同种类型的优惠券，列表前面会优先使用|
    * type  |参数名称：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡| |参数的约束及描述：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  |参数名称：优惠券ID，同种类型的优惠券，列表前面会优先使用| |参数约束及描述：优惠券ID，同种类型的优惠券，列表前面会优先使用|
    * type  |参数名称：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡| |参数的约束及描述：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => 'int32'
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
    * id  |参数名称：优惠券ID，同种类型的优惠券，列表前面会优先使用| |参数约束及描述：优惠券ID，同种类型的优惠券，列表前面会优先使用|
    * type  |参数名称：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡| |参数的约束及描述：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  |参数名称：优惠券ID，同种类型的优惠券，列表前面会优先使用| |参数约束及描述：优惠券ID，同种类型的优惠券，列表前面会优先使用|
    * type  |参数名称：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡| |参数的约束及描述：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡|
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  |参数名称：优惠券ID，同种类型的优惠券，列表前面会优先使用| |参数约束及描述：优惠券ID，同种类型的优惠券，列表前面会优先使用|
    * type  |参数名称：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡| |参数的约束及描述：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡|
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (($this->container['type'] > 303)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 303.";
            }
            if (($this->container['type'] < 300)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 300.";
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
    *  |参数名称：优惠券ID，同种类型的优惠券，列表前面会优先使用| |参数约束及描述：优惠券ID，同种类型的优惠券，列表前面会优先使用|
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
    * @param string $id |参数名称：优惠券ID，同种类型的优惠券，列表前面会优先使用| |参数约束及描述：优惠券ID，同种类型的优惠券，列表前面会优先使用|
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  |参数名称：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡| |参数的约束及描述：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡|
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type |参数名称：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡| |参数的约束及描述：折扣类型：取值为300-折扣卷 301-促销代金券302-促销现金券303-促销储值卡|
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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
