<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/single_use_coupons/coupon.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Coupon Details
 *
 * Generated from protobuf message <code>single_use_coupons.Coupon</code>
 */
class Coupon extends \Google\Protobuf\Internal\Message
{
    /**
     * PassKit generated coupon id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * This can be used to set the 'external' ID of the coupon (i.e. the unique coupon code as it's being used in your system). If provided then this can be used to query & update coupon. This field will be treated as unique within the campaign, and cannot be updated at a later stage.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     */
    protected $externalId = '';
    /**
     * The coupon offer id that the coupon belongs to.
     *
     * Generated from protobuf field <code>string offerId = 3;</code>
     */
    protected $offerId = '';
    /**
     * The coupon campaign id the the coupon belongs to.
     *
     * Generated from protobuf field <code>string campaignId = 4;</code>
     */
    protected $campaignId = '';
    /**
     * Optional field if you would like to add PII to the individual coupon. Person is stored encrypted.
     *
     * Generated from protobuf field <code>.io.Person person = 5;</code>
     */
    protected $person = null;
    /**
     * Any other meta fields for the coupon that are not covered in the protocol (i.e. you might want to captures sign-up location, or favourite perfume, for segmenting later on).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 6;</code>
     */
    private $metaData;
    /**
     * Optional SKU. Can be used in the barcode by setting ${coupon.sku} in the template barcode settings.
     *
     * Generated from protobuf field <code>string sku = 7;</code>
     */
    protected $sku = '';
    /**
     * Indicates if the user of the coupon opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 8;</code>
     */
    protected $optOut = false;
    /**
     * Holds the coupon status.
     *
     * Generated from protobuf field <code>.single_use_coupons.CouponStatus status = 10;</code>
     */
    protected $status = 0;
    /**
     * Optional field to set when the coupon expires. When the expiry date hits, it will automatically gray out the barcode. Only applicable if the template for the offer is set to EXPIRE_ON_VARIABLE_DATE_TIME.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 11;</code>
     */
    protected $expiryDate = null;
    /**
     * Contains details about the redemption (if the coupon is in a redeemed state).
     *
     * Generated from protobuf field <code>.single_use_coupons.RedemptionDetails redemptionDetails = 12;</code>
     */
    protected $redemptionDetails = null;
    /**
     * Optional Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 13;</code>
     */
    protected $passOverrides = null;
    /**
     * Pass Metadata hold meta data about the pass like status, lifecycle, utm details and installation data.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 14;</code>
     */
    protected $passMetaData = null;
    /**
     * The date the coupon was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 15;</code>
     */
    protected $created = null;
    /**
     * The date the coupon was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 16;</code>
     */
    protected $updated = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           PassKit generated coupon id (22 characters).
     *     @type string $externalId
     *           This can be used to set the 'external' ID of the coupon (i.e. the unique coupon code as it's being used in your system). If provided then this can be used to query & update coupon. This field will be treated as unique within the campaign, and cannot be updated at a later stage.
     *     @type string $offerId
     *           The coupon offer id that the coupon belongs to.
     *     @type string $campaignId
     *           The coupon campaign id the the coupon belongs to.
     *     @type \Io\Person $person
     *           Optional field if you would like to add PII to the individual coupon. Person is stored encrypted.
     *     @type array|\Google\Protobuf\Internal\MapField $metaData
     *           Any other meta fields for the coupon that are not covered in the protocol (i.e. you might want to captures sign-up location, or favourite perfume, for segmenting later on).
     *     @type string $sku
     *           Optional SKU. Can be used in the barcode by setting ${coupon.sku} in the template barcode settings.
     *     @type bool $optOut
     *           Indicates if the user of the coupon opted out to receive marketing promotions (defaults to false).
     *     @type int $status
     *           Holds the coupon status.
     *     @type \Google\Protobuf\Timestamp $expiryDate
     *           Optional field to set when the coupon expires. When the expiry date hits, it will automatically gray out the barcode. Only applicable if the template for the offer is set to EXPIRE_ON_VARIABLE_DATE_TIME.
     *     @type \Single_use_coupons\RedemptionDetails $redemptionDetails
     *           Contains details about the redemption (if the coupon is in a redeemed state).
     *     @type \Io\PassOverrides $passOverrides
     *           Optional Pass level overrides for proximity & images.
     *     @type \Io\Metadata $passMetaData
     *           Pass Metadata hold meta data about the pass like status, lifecycle, utm details and installation data.
     *     @type \Google\Protobuf\Timestamp $created
     *           The date the coupon was created.
     *     @type \Google\Protobuf\Timestamp $updated
     *           The date the coupon was last updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\SingleUseCoupons\Coupon::initOnce();
        parent::__construct($data);
    }

    /**
     * PassKit generated coupon id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * PassKit generated coupon id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * This can be used to set the 'external' ID of the coupon (i.e. the unique coupon code as it's being used in your system). If provided then this can be used to query & update coupon. This field will be treated as unique within the campaign, and cannot be updated at a later stage.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * This can be used to set the 'external' ID of the coupon (i.e. the unique coupon code as it's being used in your system). If provided then this can be used to query & update coupon. This field will be treated as unique within the campaign, and cannot be updated at a later stage.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->externalId = $var;

        return $this;
    }

    /**
     * The coupon offer id that the coupon belongs to.
     *
     * Generated from protobuf field <code>string offerId = 3;</code>
     * @return string
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * The coupon offer id that the coupon belongs to.
     *
     * Generated from protobuf field <code>string offerId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOfferId($var)
    {
        GPBUtil::checkString($var, True);
        $this->offerId = $var;

        return $this;
    }

    /**
     * The coupon campaign id the the coupon belongs to.
     *
     * Generated from protobuf field <code>string campaignId = 4;</code>
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * The coupon campaign id the the coupon belongs to.
     *
     * Generated from protobuf field <code>string campaignId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignId($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaignId = $var;

        return $this;
    }

    /**
     * Optional field if you would like to add PII to the individual coupon. Person is stored encrypted.
     *
     * Generated from protobuf field <code>.io.Person person = 5;</code>
     * @return \Io\Person|null
     */
    public function getPerson()
    {
        return $this->person;
    }

    public function hasPerson()
    {
        return isset($this->person);
    }

    public function clearPerson()
    {
        unset($this->person);
    }

    /**
     * Optional field if you would like to add PII to the individual coupon. Person is stored encrypted.
     *
     * Generated from protobuf field <code>.io.Person person = 5;</code>
     * @param \Io\Person $var
     * @return $this
     */
    public function setPerson($var)
    {
        GPBUtil::checkMessage($var, \Io\Person::class);
        $this->person = $var;

        return $this;
    }

    /**
     * Any other meta fields for the coupon that are not covered in the protocol (i.e. you might want to captures sign-up location, or favourite perfume, for segmenting later on).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

    /**
     * Any other meta fields for the coupon that are not covered in the protocol (i.e. you might want to captures sign-up location, or favourite perfume, for segmenting later on).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetaData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metaData = $arr;

        return $this;
    }

    /**
     * Optional SKU. Can be used in the barcode by setting ${coupon.sku} in the template barcode settings.
     *
     * Generated from protobuf field <code>string sku = 7;</code>
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Optional SKU. Can be used in the barcode by setting ${coupon.sku} in the template barcode settings.
     *
     * Generated from protobuf field <code>string sku = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku = $var;

        return $this;
    }

    /**
     * Indicates if the user of the coupon opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 8;</code>
     * @return bool
     */
    public function getOptOut()
    {
        return $this->optOut;
    }

    /**
     * Indicates if the user of the coupon opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setOptOut($var)
    {
        GPBUtil::checkBool($var);
        $this->optOut = $var;

        return $this;
    }

    /**
     * Holds the coupon status.
     *
     * Generated from protobuf field <code>.single_use_coupons.CouponStatus status = 10;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Holds the coupon status.
     *
     * Generated from protobuf field <code>.single_use_coupons.CouponStatus status = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Single_use_coupons\CouponStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Optional field to set when the coupon expires. When the expiry date hits, it will automatically gray out the barcode. Only applicable if the template for the offer is set to EXPIRE_ON_VARIABLE_DATE_TIME.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    public function hasExpiryDate()
    {
        return isset($this->expiryDate);
    }

    public function clearExpiryDate()
    {
        unset($this->expiryDate);
    }

    /**
     * Optional field to set when the coupon expires. When the expiry date hits, it will automatically gray out the barcode. Only applicable if the template for the offer is set to EXPIRE_ON_VARIABLE_DATE_TIME.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiryDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiryDate = $var;

        return $this;
    }

    /**
     * Contains details about the redemption (if the coupon is in a redeemed state).
     *
     * Generated from protobuf field <code>.single_use_coupons.RedemptionDetails redemptionDetails = 12;</code>
     * @return \Single_use_coupons\RedemptionDetails|null
     */
    public function getRedemptionDetails()
    {
        return $this->redemptionDetails;
    }

    public function hasRedemptionDetails()
    {
        return isset($this->redemptionDetails);
    }

    public function clearRedemptionDetails()
    {
        unset($this->redemptionDetails);
    }

    /**
     * Contains details about the redemption (if the coupon is in a redeemed state).
     *
     * Generated from protobuf field <code>.single_use_coupons.RedemptionDetails redemptionDetails = 12;</code>
     * @param \Single_use_coupons\RedemptionDetails $var
     * @return $this
     */
    public function setRedemptionDetails($var)
    {
        GPBUtil::checkMessage($var, \Single_use_coupons\RedemptionDetails::class);
        $this->redemptionDetails = $var;

        return $this;
    }

    /**
     * Optional Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 13;</code>
     * @return \Io\PassOverrides|null
     */
    public function getPassOverrides()
    {
        return $this->passOverrides;
    }

    public function hasPassOverrides()
    {
        return isset($this->passOverrides);
    }

    public function clearPassOverrides()
    {
        unset($this->passOverrides);
    }

    /**
     * Optional Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 13;</code>
     * @param \Io\PassOverrides $var
     * @return $this
     */
    public function setPassOverrides($var)
    {
        GPBUtil::checkMessage($var, \Io\PassOverrides::class);
        $this->passOverrides = $var;

        return $this;
    }

    /**
     * Pass Metadata hold meta data about the pass like status, lifecycle, utm details and installation data.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 14;</code>
     * @return \Io\Metadata|null
     */
    public function getPassMetaData()
    {
        return $this->passMetaData;
    }

    public function hasPassMetaData()
    {
        return isset($this->passMetaData);
    }

    public function clearPassMetaData()
    {
        unset($this->passMetaData);
    }

    /**
     * Pass Metadata hold meta data about the pass like status, lifecycle, utm details and installation data.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 14;</code>
     * @param \Io\Metadata $var
     * @return $this
     */
    public function setPassMetaData($var)
    {
        GPBUtil::checkMessage($var, \Io\Metadata::class);
        $this->passMetaData = $var;

        return $this;
    }

    /**
     * The date the coupon was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 15;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreated()
    {
        return $this->created;
    }

    public function hasCreated()
    {
        return isset($this->created);
    }

    public function clearCreated()
    {
        unset($this->created);
    }

    /**
     * The date the coupon was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created = $var;

        return $this;
    }

    /**
     * The date the coupon was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 16;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    public function hasUpdated()
    {
        return isset($this->updated);
    }

    public function clearUpdated()
    {
        unset($this->updated);
    }

    /**
     * The date the coupon was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated = $var;

        return $this;
    }

}

