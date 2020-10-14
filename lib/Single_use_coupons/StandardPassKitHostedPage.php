<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/single_use_coupons/offer.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>single_use_coupons.StandardPassKitHostedPage</code>
 */
class StandardPassKitHostedPage extends \Google\Protobuf\Internal\Message
{
    /**
     * Title shown on the redemption page browser tab. If not set, offer title will be shown.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * Localized title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitle = 2;</code>
     */
    protected $localizedTitle = null;
    /**
     * Redemption instructions, show underneath the redemption banner image.
     *
     * Generated from protobuf field <code>string redemptionInstructions = 3;</code>
     */
    protected $redemptionInstructions = '';
    /**
     * Localized redemption instructions.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedRedemptionInstructions = 4;</code>
     */
    protected $localizedRedemptionInstructions = null;
    /**
     * Text shown at the footer of the page, underneath the redemption code / redemption code input.
     *
     * Generated from protobuf field <code>string footerText = 7;</code>
     */
    protected $footerText = '';
    /**
     * Localized text shown at the footer of the page.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedFooterText = 8;</code>
     */
    protected $localizedFooterText = null;
    /**
     * Customize success or error messages shown on the page or error dialog box.
     *
     * Generated from protobuf field <code>.single_use_coupons.ResponseTexts responseTexts = 9;</code>
     */
    protected $responseTexts = null;
    /**
     * Date time showed with couponAlreadyRedeemedText. Date time is localized to browser preferred language.
     *
     * Generated from protobuf field <code>bool hideRedeemedDateTime = 10;</code>
     */
    protected $hideRedeemedDateTime = false;
    /**
     * Call to action button rendered on error page of coupon already redeemed to provide better customer experience.
     *
     * Generated from protobuf field <code>.single_use_coupons.CallToActionButton callToActionButton = 11;</code>
     */
    protected $callToActionButton = null;
    /**
     * Optional CSS overrides to ensure the page aligns with your brand guidelines.
     *
     * Generated from protobuf field <code>string cssOverrides = 12;</code>
     */
    protected $cssOverrides = '';
    protected $RedemptionImageAssets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           Title shown on the redemption page browser tab. If not set, offer title will be shown.
     *     @type \Io\LocalizedString $localizedTitle
     *           Localized title.
     *     @type string $redemptionInstructions
     *           Redemption instructions, show underneath the redemption banner image.
     *     @type \Io\LocalizedString $localizedRedemptionInstructions
     *           Localized redemption instructions.
     *     @type \Io\ImageIds $imageIds
     *           Image data defined by image ids.
     *     @type \Io\ImageData $images
     *           Image data defined as image object.
     *     @type string $footerText
     *           Text shown at the footer of the page, underneath the redemption code / redemption code input.
     *     @type \Io\LocalizedString $localizedFooterText
     *           Localized text shown at the footer of the page.
     *     @type \Single_use_coupons\ResponseTexts $responseTexts
     *           Customize success or error messages shown on the page or error dialog box.
     *     @type bool $hideRedeemedDateTime
     *           Date time showed with couponAlreadyRedeemedText. Date time is localized to browser preferred language.
     *     @type \Single_use_coupons\CallToActionButton $callToActionButton
     *           Call to action button rendered on error page of coupon already redeemed to provide better customer experience.
     *     @type string $cssOverrides
     *           Optional CSS overrides to ensure the page aligns with your brand guidelines.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\SingleUseCoupons\Offer::initOnce();
        parent::__construct($data);
    }

    /**
     * Title shown on the redemption page browser tab. If not set, offer title will be shown.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Title shown on the redemption page browser tab. If not set, offer title will be shown.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Localized title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitle = 2;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedTitle()
    {
        return isset($this->localizedTitle) ? $this->localizedTitle : null;
    }

    public function hasLocalizedTitle()
    {
        return isset($this->localizedTitle);
    }

    public function clearLocalizedTitle()
    {
        unset($this->localizedTitle);
    }

    /**
     * Localized title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitle = 2;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedTitle($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedTitle = $var;

        return $this;
    }

    /**
     * Redemption instructions, show underneath the redemption banner image.
     *
     * Generated from protobuf field <code>string redemptionInstructions = 3;</code>
     * @return string
     */
    public function getRedemptionInstructions()
    {
        return $this->redemptionInstructions;
    }

    /**
     * Redemption instructions, show underneath the redemption banner image.
     *
     * Generated from protobuf field <code>string redemptionInstructions = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRedemptionInstructions($var)
    {
        GPBUtil::checkString($var, True);
        $this->redemptionInstructions = $var;

        return $this;
    }

    /**
     * Localized redemption instructions.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedRedemptionInstructions = 4;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedRedemptionInstructions()
    {
        return isset($this->localizedRedemptionInstructions) ? $this->localizedRedemptionInstructions : null;
    }

    public function hasLocalizedRedemptionInstructions()
    {
        return isset($this->localizedRedemptionInstructions);
    }

    public function clearLocalizedRedemptionInstructions()
    {
        unset($this->localizedRedemptionInstructions);
    }

    /**
     * Localized redemption instructions.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedRedemptionInstructions = 4;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedRedemptionInstructions($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedRedemptionInstructions = $var;

        return $this;
    }

    /**
     * Image data defined by image ids.
     *
     * Generated from protobuf field <code>.io.ImageIds imageIds = 5;</code>
     * @return \Io\ImageIds
     */
    public function getImageIds()
    {
        return $this->readOneof(5);
    }

    public function hasImageIds()
    {
        return $this->hasOneof(5);
    }

    /**
     * Image data defined by image ids.
     *
     * Generated from protobuf field <code>.io.ImageIds imageIds = 5;</code>
     * @param \Io\ImageIds $var
     * @return $this
     */
    public function setImageIds($var)
    {
        GPBUtil::checkMessage($var, \Io\ImageIds::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Image data defined as image object.
     *
     * Generated from protobuf field <code>.io.ImageData images = 6;</code>
     * @return \Io\ImageData
     */
    public function getImages()
    {
        return $this->readOneof(6);
    }

    public function hasImages()
    {
        return $this->hasOneof(6);
    }

    /**
     * Image data defined as image object.
     *
     * Generated from protobuf field <code>.io.ImageData images = 6;</code>
     * @param \Io\ImageData $var
     * @return $this
     */
    public function setImages($var)
    {
        GPBUtil::checkMessage($var, \Io\ImageData::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Text shown at the footer of the page, underneath the redemption code / redemption code input.
     *
     * Generated from protobuf field <code>string footerText = 7;</code>
     * @return string
     */
    public function getFooterText()
    {
        return $this->footerText;
    }

    /**
     * Text shown at the footer of the page, underneath the redemption code / redemption code input.
     *
     * Generated from protobuf field <code>string footerText = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setFooterText($var)
    {
        GPBUtil::checkString($var, True);
        $this->footerText = $var;

        return $this;
    }

    /**
     * Localized text shown at the footer of the page.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedFooterText = 8;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedFooterText()
    {
        return isset($this->localizedFooterText) ? $this->localizedFooterText : null;
    }

    public function hasLocalizedFooterText()
    {
        return isset($this->localizedFooterText);
    }

    public function clearLocalizedFooterText()
    {
        unset($this->localizedFooterText);
    }

    /**
     * Localized text shown at the footer of the page.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedFooterText = 8;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedFooterText($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedFooterText = $var;

        return $this;
    }

    /**
     * Customize success or error messages shown on the page or error dialog box.
     *
     * Generated from protobuf field <code>.single_use_coupons.ResponseTexts responseTexts = 9;</code>
     * @return \Single_use_coupons\ResponseTexts
     */
    public function getResponseTexts()
    {
        return isset($this->responseTexts) ? $this->responseTexts : null;
    }

    public function hasResponseTexts()
    {
        return isset($this->responseTexts);
    }

    public function clearResponseTexts()
    {
        unset($this->responseTexts);
    }

    /**
     * Customize success or error messages shown on the page or error dialog box.
     *
     * Generated from protobuf field <code>.single_use_coupons.ResponseTexts responseTexts = 9;</code>
     * @param \Single_use_coupons\ResponseTexts $var
     * @return $this
     */
    public function setResponseTexts($var)
    {
        GPBUtil::checkMessage($var, \Single_use_coupons\ResponseTexts::class);
        $this->responseTexts = $var;

        return $this;
    }

    /**
     * Date time showed with couponAlreadyRedeemedText. Date time is localized to browser preferred language.
     *
     * Generated from protobuf field <code>bool hideRedeemedDateTime = 10;</code>
     * @return bool
     */
    public function getHideRedeemedDateTime()
    {
        return $this->hideRedeemedDateTime;
    }

    /**
     * Date time showed with couponAlreadyRedeemedText. Date time is localized to browser preferred language.
     *
     * Generated from protobuf field <code>bool hideRedeemedDateTime = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setHideRedeemedDateTime($var)
    {
        GPBUtil::checkBool($var);
        $this->hideRedeemedDateTime = $var;

        return $this;
    }

    /**
     * Call to action button rendered on error page of coupon already redeemed to provide better customer experience.
     *
     * Generated from protobuf field <code>.single_use_coupons.CallToActionButton callToActionButton = 11;</code>
     * @return \Single_use_coupons\CallToActionButton
     */
    public function getCallToActionButton()
    {
        return isset($this->callToActionButton) ? $this->callToActionButton : null;
    }

    public function hasCallToActionButton()
    {
        return isset($this->callToActionButton);
    }

    public function clearCallToActionButton()
    {
        unset($this->callToActionButton);
    }

    /**
     * Call to action button rendered on error page of coupon already redeemed to provide better customer experience.
     *
     * Generated from protobuf field <code>.single_use_coupons.CallToActionButton callToActionButton = 11;</code>
     * @param \Single_use_coupons\CallToActionButton $var
     * @return $this
     */
    public function setCallToActionButton($var)
    {
        GPBUtil::checkMessage($var, \Single_use_coupons\CallToActionButton::class);
        $this->callToActionButton = $var;

        return $this;
    }

    /**
     * Optional CSS overrides to ensure the page aligns with your brand guidelines.
     *
     * Generated from protobuf field <code>string cssOverrides = 12;</code>
     * @return string
     */
    public function getCssOverrides()
    {
        return $this->cssOverrides;
    }

    /**
     * Optional CSS overrides to ensure the page aligns with your brand guidelines.
     *
     * Generated from protobuf field <code>string cssOverrides = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCssOverrides($var)
    {
        GPBUtil::checkString($var, True);
        $this->cssOverrides = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRedemptionImageAssets()
    {
        return $this->whichOneof("RedemptionImageAssets");
    }

}
