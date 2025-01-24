<?php
/**
 * TaxCollection
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\OrdersV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * TaxCollection Class Doc Comment
 *
 * @category Class
 * @description Information about withheld taxes.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaxCollection extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxCollection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model' => 'string',
        'responsible_party' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'model' => null,
        'responsible_party' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'model' => 'Model',
        'responsible_party' => 'ResponsibleParty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model' => 'setModel',
        'responsible_party' => 'setResponsibleParty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model' => 'getModel',
        'responsible_party' => 'getResponsibleParty'
    ];



    const MODEL_MARKETPLACE_FACILITATOR = 'MarketplaceFacilitator';
    const MODEL_LOW_VALUE_GOODS = 'LowValueGoods';
    

    const RESPONSIBLE_PARTY_SERVICES_INC = 'Amazon Services, Inc.';
    const RESPONSIBLE_PARTY_COMMERCIAL_SERVICES_PTY_LTD = 'Amazon Commercial Services Pty Ltd';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModelAllowableValues()
    {
        $baseVals = [
            self::MODEL_MARKETPLACE_FACILITATOR,
            self::MODEL_LOW_VALUE_GOODS,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResponsiblePartyAllowableValues()
    {
        $baseVals = [
            '',
            self::RESPONSIBLE_PARTY_SERVICES_INC,
            self::RESPONSIBLE_PARTY_COMMERCIAL_SERVICES_PTY_LTD,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
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
        $this->container['model'] = $data['model'] ?? null;
        $this->container['responsible_party'] = $data['responsible_party'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getModelAllowableValues();
        if (
            !is_null($this->container['model']) &&
            !in_array(strtoupper($this->container['model']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'model', must be one of '%s'",
                $this->container['model'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResponsiblePartyAllowableValues();
        if (
            !is_null($this->container['responsible_party']) &&
            !in_array(strtoupper($this->container['responsible_party']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'responsible_party', must be one of '%s'",
                $this->container['responsible_party'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model The tax collection model applied to the item.
     *
     * @return self
     */
    public function setModel($model)
    {
        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($model) &&!in_array(strtoupper($model), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'model', must be one of '%s'",
                    $model,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['model'] = $model;

        return $this;
    }
    /**
     * Gets responsible_party
     *
     * @return string|null
     */
    public function getResponsibleParty()
    {
        return $this->container['responsible_party'];
    }

    /**
     * Sets responsible_party
     *
     * @param string|null $responsible_party The party responsible for withholding the taxes and remitting them to the taxing authority.
     *
     * @return self
     */
    public function setResponsibleParty($responsible_party)
    {
        if (empty($responsible_party)) {
            $responsible_party = null;
        }
        $allowedValues = $this->getResponsiblePartyAllowableValues();
        if (!is_null($responsible_party) &&!in_array(strtoupper($responsible_party), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'responsible_party', must be one of '%s'",
                    $responsible_party,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['responsible_party'] = $responsible_party;

        return $this;
    }
}


