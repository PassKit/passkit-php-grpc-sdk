<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/single_use_coupons/offer.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Coupon Offer Details.
 *
 * Generated from protobuf message <code>single_use_coupons.CouponOffer</code>
 */
class CouponOffer extends \Google\Protobuf\Internal\Message
{
    /**
     * PassKit generated offer id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The offer title; will be shown on the enrolment page.
     *
     * Generated from protobuf field <code>string offerTitle = 2;</code>
     */
    protected $offerTitle = '';
    /**
     * Localized offer title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferTitle = 3;</code>
     */
    protected $localizedOfferTitle = null;
    /**
     * The offer short title.
     *
     * Generated from protobuf field <code>string offerShortTitle = 4;</code>
     */
    protected $offerShortTitle = '';
    /**
     * Localized offer short title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferShortTitle = 5;</code>
     */
    protected $localizedOfferShortTitle = null;
    /**
     * The offer details; will be shown on the enrolment page.
     *
     * Generated from protobuf field <code>string offerDetails = 6;</code>
     */
    protected $offerDetails = '';
    /**
     * Localized offer details.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferDetails = 7;</code>
     */
    protected $localizedOfferDetails = null;
    /**
     * The offer fine print.
     *
     * Generated from protobuf field <code>string offerFinePrint = 8;</code>
     */
    protected $offerFinePrint = '';
    /**
     * Localized offer fine print.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferFinePrint = 9;</code>
     */
    protected $localizedOfferFinePrint = null;
    /**
     * The pass template ID that coupons will use when in unredeemed state. All coupons for the offer are issued in unredeemed state.
     *
     * Generated from protobuf field <code>string beforeRedeemPassTemplateId = 10;</code>
     */
    protected $beforeRedeemPassTemplateId = '';
    /**
     * Optional pass template ID that coupons will use when switched to redeemed state.
     *
     * Generated from protobuf field <code>string afterRedeemPassTemplateId = 11;</code>
     */
    protected $afterRedeemPassTemplateId = '';
    /**
     * The quota for the campaign. If set to 0, then it is unlimited. If the quota is reached no new coupons can be issued.
     *
     * Generated from protobuf field <code>.io.Quota quota = 12;</code>
     */
    protected $quota = null;
    /**
     * Coupon expiry settings
     *
     * Generated from protobuf field <code>.single_use_coupons.CouponExpirySettings couponExpirySettings = 13;</code>
     */
    protected $couponExpirySettings = null;
    /**
     * Optional redemption settings to give more control over redemption.
     *
     * Generated from protobuf field <code>.single_use_coupons.RedemptionSettings redemptionSettings = 14;</code>
     */
    protected $redemptionSettings = null;
    /**
     * Optional date when coupons can start to be issued. Defaults to the campaign start date. Needs to be greater than / equal to the campaign start date. Needs to be less than / equal to the campaign end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp issueStartDate = 15;</code>
     */
    protected $issueStartDate = null;
    /**
     * Optional date when coupons can no longer be issued. Defaults to the campaign end date. Needs to be less than / equal to the campaign end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp issueEndDate = 16;</code>
     */
    protected $issueEndDate = null;
    /**
     * The date when the offer was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 17;</code>
     */
    protected $created = null;
    /**
     * The date the offer was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 18;</code>
     */
    protected $updated = null;
    /**
     * The campaign id that the offer belongs to (1 campaign can have multiple offers). This field cannot be changed once an offer is linked to a campaign.
     *
     * Generated from protobuf field <code>string campaignId = 19;</code>
     */
    protected $campaignId = '';
    /**
     * Contains the email & sms distribution settings for the offer.
     *
     * Generated from protobuf field <code>.io.DistributionSettings distributionSettings = 20;</code>
     */
    protected $distributionSettings = null;
    /**
     * The offer shortcode generated by the system. If the campaign is public, then this shortcode can be used to generate the coupon-create URL.
     *
     * Generated from protobuf field <code>string shortCode = 21;</code>
     */
    protected $shortCode = '';
    /**
     * The offer timezone.
     *
     * Generated from protobuf field <code>string ianaTimezone = 22;</code>
     */
    protected $ianaTimezone = '';
    /**
     * Can be used to temporarily disable the coupon (i.e. if you ran out of your promotion item, you can temporarily disable all live coupons, and activate them again later on when your item is in stock again).
     *
     * Generated from protobuf field <code>bool disabled = 23;</code>
     */
    protected $disabled = false;
    /**
     * Optional field to provide the operation that you want to perform when sending an offer in an update request.  PUT will replace all values provided in the CouponOffer, whereas PATCH will ignore missing or falsey values.  To maintain compatibility with previous releases, the default value is PATCH.
     *
     * Generated from protobuf field <code>.io.Operation operation = 100;</code>
     */
    protected $operation = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           PassKit generated offer id (22 characters).
     *     @type string $offerTitle
     *           The offer title; will be shown on the enrolment page.
     *     @type \Io\LocalizedString $localizedOfferTitle
     *           Localized offer title.
     *     @type string $offerShortTitle
     *           The offer short title.
     *     @type \Io\LocalizedString $localizedOfferShortTitle
     *           Localized offer short title.
     *     @type string $offerDetails
     *           The offer details; will be shown on the enrolment page.
     *     @type \Io\LocalizedString $localizedOfferDetails
     *           Localized offer details.
     *     @type string $offerFinePrint
     *           The offer fine print.
     *     @type \Io\LocalizedString $localizedOfferFinePrint
     *           Localized offer fine print.
     *     @type string $beforeRedeemPassTemplateId
     *           The pass template ID that coupons will use when in unredeemed state. All coupons for the offer are issued in unredeemed state.
     *     @type string $afterRedeemPassTemplateId
     *           Optional pass template ID that coupons will use when switched to redeemed state.
     *     @type \Io\Quota $quota
     *           The quota for the campaign. If set to 0, then it is unlimited. If the quota is reached no new coupons can be issued.
     *     @type \Single_use_coupons\CouponExpirySettings $couponExpirySettings
     *           Coupon expiry settings
     *     @type \Single_use_coupons\RedemptionSettings $redemptionSettings
     *           Optional redemption settings to give more control over redemption.
     *     @type \Google\Protobuf\Timestamp $issueStartDate
     *           Optional date when coupons can start to be issued. Defaults to the campaign start date. Needs to be greater than / equal to the campaign start date. Needs to be less than / equal to the campaign end date.
     *     @type \Google\Protobuf\Timestamp $issueEndDate
     *           Optional date when coupons can no longer be issued. Defaults to the campaign end date. Needs to be less than / equal to the campaign end date.
     *     @type \Google\Protobuf\Timestamp $created
     *           The date when the offer was created.
     *     @type \Google\Protobuf\Timestamp $updated
     *           The date the offer was last updated.
     *     @type string $campaignId
     *           The campaign id that the offer belongs to (1 campaign can have multiple offers). This field cannot be changed once an offer is linked to a campaign.
     *     @type \Io\DistributionSettings $distributionSettings
     *           Contains the email & sms distribution settings for the offer.
     *     @type string $shortCode
     *           The offer shortcode generated by the system. If the campaign is public, then this shortcode can be used to generate the coupon-create URL.
     *     @type string $ianaTimezone
     *           The offer timezone.
     *     @type bool $disabled
     *           Can be used to temporarily disable the coupon (i.e. if you ran out of your promotion item, you can temporarily disable all live coupons, and activate them again later on when your item is in stock again).
     *     @type int $operation
     *           Optional field to provide the operation that you want to perform when sending an offer in an update request.  PUT will replace all values provided in the CouponOffer, whereas PATCH will ignore missing or falsey values.  To maintain compatibility with previous releases, the default value is PATCH.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\SingleUseCoupons\Offer::initOnce();
        parent::__construct($data);
    }

    /**
     * PassKit generated offer id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * PassKit generated offer id (22 characters).
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
     * The offer title; will be shown on the enrolment page.
     *
     * Generated from protobuf field <code>string offerTitle = 2;</code>
     * @return string
     */
    public function getOfferTitle()
    {
        return $this->offerTitle;
    }

    /**
     * The offer title; will be shown on the enrolment page.
     *
     * Generated from protobuf field <code>string offerTitle = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOfferTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->offerTitle = $var;

        return $this;
    }

    /**
     * Localized offer title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferTitle = 3;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedOfferTitle()
    {
        return $this->localizedOfferTitle;
    }

    public function hasLocalizedOfferTitle()
    {
        return isset($this->localizedOfferTitle);
    }

    public function clearLocalizedOfferTitle()
    {
        unset($this->localizedOfferTitle);
    }

    /**
     * Localized offer title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferTitle = 3;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedOfferTitle($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedOfferTitle = $var;

        return $this;
    }

    /**
     * The offer short title.
     *
     * Generated from protobuf field <code>string offerShortTitle = 4;</code>
     * @return string
     */
    public function getOfferShortTitle()
    {
        return $this->offerShortTitle;
    }

    /**
     * The offer short title.
     *
     * Generated from protobuf field <code>string offerShortTitle = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOfferShortTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->offerShortTitle = $var;

        return $this;
    }

    /**
     * Localized offer short title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferShortTitle = 5;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedOfferShortTitle()
    {
        return $this->localizedOfferShortTitle;
    }

    public function hasLocalizedOfferShortTitle()
    {
        return isset($this->localizedOfferShortTitle);
    }

    public function clearLocalizedOfferShortTitle()
    {
        unset($this->localizedOfferShortTitle);
    }

    /**
     * Localized offer short title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferShortTitle = 5;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedOfferShortTitle($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedOfferShortTitle = $var;

        return $this;
    }

    /**
     * The offer details; will be shown on the enrolment page.
     *
     * Generated from protobuf field <code>string offerDetails = 6;</code>
     * @return string
     */
    public function getOfferDetails()
    {
        return $this->offerDetails;
    }

    /**
     * The offer details; will be shown on the enrolment page.
     *
     * Generated from protobuf field <code>string offerDetails = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setOfferDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->offerDetails = $var;

        return $this;
    }

    /**
     * Localized offer details.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferDetails = 7;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedOfferDetails()
    {
        return $this->localizedOfferDetails;
    }

    public function hasLocalizedOfferDetails()
    {
        return isset($this->localizedOfferDetails);
    }

    public function clearLocalizedOfferDetails()
    {
        unset($this->localizedOfferDetails);
    }

    /**
     * Localized offer details.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferDetails = 7;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedOfferDetails($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedOfferDetails = $var;

        return $this;
    }

    /**
     * The offer fine print.
     *
     * Generated from protobuf field <code>string offerFinePrint = 8;</code>
     * @return string
     */
    public function getOfferFinePrint()
    {
        return $this->offerFinePrint;
    }

    /**
     * The offer fine print.
     *
     * Generated from protobuf field <code>string offerFinePrint = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setOfferFinePrint($var)
    {
        GPBUtil::checkString($var, True);
        $this->offerFinePrint = $var;

        return $this;
    }

    /**
     * Localized offer fine print.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferFinePrint = 9;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedOfferFinePrint()
    {
        return $this->localizedOfferFinePrint;
    }

    public function hasLocalizedOfferFinePrint()
    {
        return isset($this->localizedOfferFinePrint);
    }

    public function clearLocalizedOfferFinePrint()
    {
        unset($this->localizedOfferFinePrint);
    }

    /**
     * Localized offer fine print.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOfferFinePrint = 9;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedOfferFinePrint($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedOfferFinePrint = $var;

        return $this;
    }

    /**
     * The pass template ID that coupons will use when in unredeemed state. All coupons for the offer are issued in unredeemed state.
     *
     * Generated from protobuf field <code>string beforeRedeemPassTemplateId = 10;</code>
     * @return string
     */
    public function getBeforeRedeemPassTemplateId()
    {
        return $this->beforeRedeemPassTemplateId;
    }

    /**
     * The pass template ID that coupons will use when in unredeemed state. All coupons for the offer are issued in unredeemed state.
     *
     * Generated from protobuf field <code>string beforeRedeemPassTemplateId = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setBeforeRedeemPassTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->beforeRedeemPassTemplateId = $var;

        return $this;
    }

    /**
     * Optional pass template ID that coupons will use when switched to redeemed state.
     *
     * Generated from protobuf field <code>string afterRedeemPassTemplateId = 11;</code>
     * @return string
     */
    public function getAfterRedeemPassTemplateId()
    {
        return $this->afterRedeemPassTemplateId;
    }

    /**
     * Optional pass template ID that coupons will use when switched to redeemed state.
     *
     * Generated from protobuf field <code>string afterRedeemPassTemplateId = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setAfterRedeemPassTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->afterRedeemPassTemplateId = $var;

        return $this;
    }

    /**
     * The quota for the campaign. If set to 0, then it is unlimited. If the quota is reached no new coupons can be issued.
     *
     * Generated from protobuf field <code>.io.Quota quota = 12;</code>
     * @return \Io\Quota|null
     */
    public function getQuota()
    {
        return $this->quota;
    }

    public function hasQuota()
    {
        return isset($this->quota);
    }

    public function clearQuota()
    {
        unset($this->quota);
    }

    /**
     * The quota for the campaign. If set to 0, then it is unlimited. If the quota is reached no new coupons can be issued.
     *
     * Generated from protobuf field <code>.io.Quota quota = 12;</code>
     * @param \Io\Quota $var
     * @return $this
     */
    public function setQuota($var)
    {
        GPBUtil::checkMessage($var, \Io\Quota::class);
        $this->quota = $var;

        return $this;
    }

    /**
     * Coupon expiry settings
     *
     * Generated from protobuf field <code>.single_use_coupons.CouponExpirySettings couponExpirySettings = 13;</code>
     * @return \Single_use_coupons\CouponExpirySettings|null
     */
    public function getCouponExpirySettings()
    {
        return $this->couponExpirySettings;
    }

    public function hasCouponExpirySettings()
    {
        return isset($this->couponExpirySettings);
    }

    public function clearCouponExpirySettings()
    {
        unset($this->couponExpirySettings);
    }

    /**
     * Coupon expiry settings
     *
     * Generated from protobuf field <code>.single_use_coupons.CouponExpirySettings couponExpirySettings = 13;</code>
     * @param \Single_use_coupons\CouponExpirySettings $var
     * @return $this
     */
    public function setCouponExpirySettings($var)
    {
        GPBUtil::checkMessage($var, \Single_use_coupons\CouponExpirySettings::class);
        $this->couponExpirySettings = $var;

        return $this;
    }

    /**
     * Optional redemption settings to give more control over redemption.
     *
     * Generated from protobuf field <code>.single_use_coupons.RedemptionSettings redemptionSettings = 14;</code>
     * @return \Single_use_coupons\RedemptionSettings|null
     */
    public function getRedemptionSettings()
    {
        return $this->redemptionSettings;
    }

    public function hasRedemptionSettings()
    {
        return isset($this->redemptionSettings);
    }

    public function clearRedemptionSettings()
    {
        unset($this->redemptionSettings);
    }

    /**
     * Optional redemption settings to give more control over redemption.
     *
     * Generated from protobuf field <code>.single_use_coupons.RedemptionSettings redemptionSettings = 14;</code>
     * @param \Single_use_coupons\RedemptionSettings $var
     * @return $this
     */
    public function setRedemptionSettings($var)
    {
        GPBUtil::checkMessage($var, \Single_use_coupons\RedemptionSettings::class);
        $this->redemptionSettings = $var;

        return $this;
    }

    /**
     * Optional date when coupons can start to be issued. Defaults to the campaign start date. Needs to be greater than / equal to the campaign start date. Needs to be less than / equal to the campaign end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp issueStartDate = 15;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getIssueStartDate()
    {
        return $this->issueStartDate;
    }

    public function hasIssueStartDate()
    {
        return isset($this->issueStartDate);
    }

    public function clearIssueStartDate()
    {
        unset($this->issueStartDate);
    }

    /**
     * Optional date when coupons can start to be issued. Defaults to the campaign start date. Needs to be greater than / equal to the campaign start date. Needs to be less than / equal to the campaign end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp issueStartDate = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIssueStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->issueStartDate = $var;

        return $this;
    }

    /**
     * Optional date when coupons can no longer be issued. Defaults to the campaign end date. Needs to be less than / equal to the campaign end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp issueEndDate = 16;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getIssueEndDate()
    {
        return $this->issueEndDate;
    }

    public function hasIssueEndDate()
    {
        return isset($this->issueEndDate);
    }

    public function clearIssueEndDate()
    {
        unset($this->issueEndDate);
    }

    /**
     * Optional date when coupons can no longer be issued. Defaults to the campaign end date. Needs to be less than / equal to the campaign end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp issueEndDate = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIssueEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->issueEndDate = $var;

        return $this;
    }

    /**
     * The date when the offer was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 17;</code>
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
     * The date when the offer was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 17;</code>
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
     * The date the offer was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 18;</code>
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
     * The date the offer was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 18;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated = $var;

        return $this;
    }

    /**
     * The campaign id that the offer belongs to (1 campaign can have multiple offers). This field cannot be changed once an offer is linked to a campaign.
     *
     * Generated from protobuf field <code>string campaignId = 19;</code>
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * The campaign id that the offer belongs to (1 campaign can have multiple offers). This field cannot be changed once an offer is linked to a campaign.
     *
     * Generated from protobuf field <code>string campaignId = 19;</code>
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
     * Contains the email & sms distribution settings for the offer.
     *
     * Generated from protobuf field <code>.io.DistributionSettings distributionSettings = 20;</code>
     * @return \Io\DistributionSettings|null
     */
    public function getDistributionSettings()
    {
        return $this->distributionSettings;
    }

    public function hasDistributionSettings()
    {
        return isset($this->distributionSettings);
    }

    public function clearDistributionSettings()
    {
        unset($this->distributionSettings);
    }

    /**
     * Contains the email & sms distribution settings for the offer.
     *
     * Generated from protobuf field <code>.io.DistributionSettings distributionSettings = 20;</code>
     * @param \Io\DistributionSettings $var
     * @return $this
     */
    public function setDistributionSettings($var)
    {
        GPBUtil::checkMessage($var, \Io\DistributionSettings::class);
        $this->distributionSettings = $var;

        return $this;
    }

    /**
     * The offer shortcode generated by the system. If the campaign is public, then this shortcode can be used to generate the coupon-create URL.
     *
     * Generated from protobuf field <code>string shortCode = 21;</code>
     * @return string
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }

    /**
     * The offer shortcode generated by the system. If the campaign is public, then this shortcode can be used to generate the coupon-create URL.
     *
     * Generated from protobuf field <code>string shortCode = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setShortCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->shortCode = $var;

        return $this;
    }

    /**
     * The offer timezone.
     *
     * Generated from protobuf field <code>string ianaTimezone = 22;</code>
     * @return string
     */
    public function getIanaTimezone()
    {
        return $this->ianaTimezone;
    }

    /**
     * The offer timezone.
     *
     * Generated from protobuf field <code>string ianaTimezone = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setIanaTimezone($var)
    {
        GPBUtil::checkString($var, True);
        $this->ianaTimezone = $var;

        return $this;
    }

    /**
     * Can be used to temporarily disable the coupon (i.e. if you ran out of your promotion item, you can temporarily disable all live coupons, and activate them again later on when your item is in stock again).
     *
     * Generated from protobuf field <code>bool disabled = 23;</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Can be used to temporarily disable the coupon (i.e. if you ran out of your promotion item, you can temporarily disable all live coupons, and activate them again later on when your item is in stock again).
     *
     * Generated from protobuf field <code>bool disabled = 23;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * Optional field to provide the operation that you want to perform when sending an offer in an update request.  PUT will replace all values provided in the CouponOffer, whereas PATCH will ignore missing or falsey values.  To maintain compatibility with previous releases, the default value is PATCH.
     *
     * Generated from protobuf field <code>.io.Operation operation = 100;</code>
     * @return int
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Optional field to provide the operation that you want to perform when sending an offer in an update request.  PUT will replace all values provided in the CouponOffer, whereas PATCH will ignore missing or falsey values.  To maintain compatibility with previous releases, the default value is PATCH.
     *
     * Generated from protobuf field <code>.io.Operation operation = 100;</code>
     * @param int $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkEnum($var, \Io\Operation::class);
        $this->operation = $var;

        return $this;
    }

}

