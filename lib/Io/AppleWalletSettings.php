<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Pass settings only for Apple Wallet.
 *
 * Generated from protobuf message <code>io.AppleWalletSettings</code>
 */
class AppleWalletSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Pass type
     *
     * Generated from protobuf field <code>.io.ApplePassType passType = 1;</code>
     */
    protected $passType = 0;
    /**
     * Custom information for companion apps. This data is not displayed to the user on the pass. This data needs to be a valid JSON object and is passed to the companion app when it launches from the pass. For example, a pass for a cafe could include information about the user’s favorite drink and sandwich in a machine-readable form for the companion app to read, making it easy to place an order for "the usual" from the app.
     *
     * Generated from protobuf field <code>string userInfo = 2;</code>
     */
    protected $userInfo = '';
    /**
     * This is used to specify a deep link into the app displayed on the back of the Apple Wallet pass (the app is chosen from the associatedStoreIdentifiers). If the app supports deep linking, you can use this url to go to a specific point within the app when the link is clicked.
     *
     * Generated from protobuf field <code>string appLaunchUrl = 3;</code>
     */
    protected $appLaunchUrl = '';
    /**
     * A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint32 associatedStoreIdentifiers = 4;</code>
     */
    private $associatedStoreIdentifiers;
    /**
     * GPS lock screen messages will show at the lower of max distance and the pass default(unpublished) value.
     *
     * Generated from protobuf field <code>uint32 maxDistance = 5;</code>
     */
    protected $maxDistance = 0;
    /**
     * List of country codes for the stores of the associated apps. This is required to render the pass correctly in the designer.
     *
     * Generated from protobuf field <code>repeated string appStoreCountries = 6;</code>
     */
    private $appStoreCountries;
    /**
     * Generated from protobuf field <code>.io.TransitType transitType = 7;</code>
     */
    protected $transitType = 0;
    /**
     * Generated from protobuf field <code>string groupingIdentifier = 8;</code>
     */
    protected $groupingIdentifier = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $passType
     *           Pass type
     *     @type string $userInfo
     *           Custom information for companion apps. This data is not displayed to the user on the pass. This data needs to be a valid JSON object and is passed to the companion app when it launches from the pass. For example, a pass for a cafe could include information about the user’s favorite drink and sandwich in a machine-readable form for the companion app to read, making it easy to place an order for "the usual" from the app.
     *     @type string $appLaunchUrl
     *           This is used to specify a deep link into the app displayed on the back of the Apple Wallet pass (the app is chosen from the associatedStoreIdentifiers). If the app supports deep linking, you can use this url to go to a specific point within the app when the link is clicked.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $associatedStoreIdentifiers
     *           A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *     @type int $maxDistance
     *           GPS lock screen messages will show at the lower of max distance and the pass default(unpublished) value.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $appStoreCountries
     *           List of country codes for the stores of the associated apps. This is required to render the pass correctly in the designer.
     *     @type int $transitType
     *     @type string $groupingIdentifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * Pass type
     *
     * Generated from protobuf field <code>.io.ApplePassType passType = 1;</code>
     * @return int
     */
    public function getPassType()
    {
        return $this->passType;
    }

    /**
     * Pass type
     *
     * Generated from protobuf field <code>.io.ApplePassType passType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPassType($var)
    {
        GPBUtil::checkEnum($var, \Io\ApplePassType::class);
        $this->passType = $var;

        return $this;
    }

    /**
     * Custom information for companion apps. This data is not displayed to the user on the pass. This data needs to be a valid JSON object and is passed to the companion app when it launches from the pass. For example, a pass for a cafe could include information about the user’s favorite drink and sandwich in a machine-readable form for the companion app to read, making it easy to place an order for "the usual" from the app.
     *
     * Generated from protobuf field <code>string userInfo = 2;</code>
     * @return string
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }

    /**
     * Custom information for companion apps. This data is not displayed to the user on the pass. This data needs to be a valid JSON object and is passed to the companion app when it launches from the pass. For example, a pass for a cafe could include information about the user’s favorite drink and sandwich in a machine-readable form for the companion app to read, making it easy to place an order for "the usual" from the app.
     *
     * Generated from protobuf field <code>string userInfo = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUserInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->userInfo = $var;

        return $this;
    }

    /**
     * This is used to specify a deep link into the app displayed on the back of the Apple Wallet pass (the app is chosen from the associatedStoreIdentifiers). If the app supports deep linking, you can use this url to go to a specific point within the app when the link is clicked.
     *
     * Generated from protobuf field <code>string appLaunchUrl = 3;</code>
     * @return string
     */
    public function getAppLaunchUrl()
    {
        return $this->appLaunchUrl;
    }

    /**
     * This is used to specify a deep link into the app displayed on the back of the Apple Wallet pass (the app is chosen from the associatedStoreIdentifiers). If the app supports deep linking, you can use this url to go to a specific point within the app when the link is clicked.
     *
     * Generated from protobuf field <code>string appLaunchUrl = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAppLaunchUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->appLaunchUrl = $var;

        return $this;
    }

    /**
     * A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint32 associatedStoreIdentifiers = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssociatedStoreIdentifiers()
    {
        return $this->associatedStoreIdentifiers;
    }

    /**
     * A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint32 associatedStoreIdentifiers = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssociatedStoreIdentifiers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->associatedStoreIdentifiers = $arr;

        return $this;
    }

    /**
     * GPS lock screen messages will show at the lower of max distance and the pass default(unpublished) value.
     *
     * Generated from protobuf field <code>uint32 maxDistance = 5;</code>
     * @return int
     */
    public function getMaxDistance()
    {
        return $this->maxDistance;
    }

    /**
     * GPS lock screen messages will show at the lower of max distance and the pass default(unpublished) value.
     *
     * Generated from protobuf field <code>uint32 maxDistance = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDistance($var)
    {
        GPBUtil::checkUint32($var);
        $this->maxDistance = $var;

        return $this;
    }

    /**
     * List of country codes for the stores of the associated apps. This is required to render the pass correctly in the designer.
     *
     * Generated from protobuf field <code>repeated string appStoreCountries = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAppStoreCountries()
    {
        return $this->appStoreCountries;
    }

    /**
     * List of country codes for the stores of the associated apps. This is required to render the pass correctly in the designer.
     *
     * Generated from protobuf field <code>repeated string appStoreCountries = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAppStoreCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->appStoreCountries = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.TransitType transitType = 7;</code>
     * @return int
     */
    public function getTransitType()
    {
        return $this->transitType;
    }

    /**
     * Generated from protobuf field <code>.io.TransitType transitType = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTransitType($var)
    {
        GPBUtil::checkEnum($var, \Io\TransitType::class);
        $this->transitType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string groupingIdentifier = 8;</code>
     * @return string
     */
    public function getGroupingIdentifier()
    {
        return $this->groupingIdentifier;
    }

    /**
     * Generated from protobuf field <code>string groupingIdentifier = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupingIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->groupingIdentifier = $var;

        return $this;
    }

}

