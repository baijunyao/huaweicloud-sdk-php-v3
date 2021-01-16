<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeServerOsWithCloudInitOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeServerOsWithCloudInitOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminpass' => 'string',
            'keyname' => 'string',
            'userid' => 'string',
            'imageid' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Ecs\V2\Model\ChangeSeversOsMetadata',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminpass' => null,
        'keyname' => null,
        'userid' => null,
        'imageid' => null,
        'metadata' => null,
        'mode' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminpass' => 'adminpass',
            'keyname' => 'keyname',
            'userid' => 'userid',
            'imageid' => 'imageid',
            'metadata' => 'metadata',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'adminpass' => 'setAdminpass',
            'keyname' => 'setKeyname',
            'userid' => 'setUserid',
            'imageid' => 'setImageid',
            'metadata' => 'setMetadata',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'adminpass' => 'getAdminpass',
            'keyname' => 'getKeyname',
            'userid' => 'getUserid',
            'imageid' => 'getImageid',
            'metadata' => 'getMetadata',
            'mode' => 'getMode'
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
        $this->container['adminpass'] = isset($data['adminpass']) ? $data['adminpass'] : null;
        $this->container['keyname'] = isset($data['keyname']) ? $data['keyname'] : null;
        $this->container['userid'] = isset($data['userid']) ? $data['userid'] : null;
        $this->container['imageid'] = isset($data['imageid']) ? $data['imageid'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageid'] === null) {
            $invalidProperties[] = "'imageid' can't be null";
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
    * Gets adminpass
    *
    * @return string|null
    */
    public function getAdminpass()
    {
        return $this->container['adminpass'];
    }

    /**
    * Sets adminpass
    *
    * @param string|null $adminpass 云服务器管理员帐户的初始登录密码。  其中，Windows管理员帐户的用户名为Administrator。  建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。  > 说明： >  - Windows云服务器的密码，不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - 对于Linux弹性云服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。 - adminpass和keyname不能同时有值。 - adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。 - 对于已安装Cloud-init的云服务器，使用adminpass字段切换操作系统时，系统如果提示您使用keypair方式切换操作系统，表示当前区域暂不支持使用密码方式。
    *
    * @return $this
    */
    public function setAdminpass($adminpass)
    {
        $this->container['adminpass'] = $adminpass;
        return $this;
    }

    /**
    * Gets keyname
    *
    * @return string|null
    */
    public function getKeyname()
    {
        return $this->container['keyname'];
    }

    /**
    * Sets keyname
    *
    * @param string|null $keyname 密钥名称。
    *
    * @return $this
    */
    public function setKeyname($keyname)
    {
        $this->container['keyname'] = $keyname;
        return $this;
    }

    /**
    * Gets userid
    *
    * @return string|null
    */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
    * Sets userid
    *
    * @param string|null $userid 用户ID。 说明 如果使用秘钥方式切换操作系统，则该字段为必选字段。
    *
    * @return $this
    */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;
        return $this;
    }

    /**
    * Gets imageid
    *
    * @return string
    */
    public function getImageid()
    {
        return $this->container['imageid'];
    }

    /**
    * Sets imageid
    *
    * @param string $imageid 切换系统所使用的新镜像的ID，格式为UUID。
    *
    * @return $this
    */
    public function setImageid($imageid)
    {
        $this->container['imageid'] = $imageid;
        return $this;
    }

    /**
    * Gets metadata
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ChangeSeversOsMetadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ChangeSeversOsMetadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets mode
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 取值为withStopServer ，支持开机状态下切换弹性云服务器操作系统。 mode取值为withStopServer时，对开机状态的弹性云服务器执行切换操作系统操作，系统自动对云服务器先执行关机，再切换操作系统。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

