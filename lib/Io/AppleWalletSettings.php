<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
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
     * Deprecated - use appStoreIdentifiers. A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
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
     * Personal data requested for an Apple Wallet Pass (Requires Apple to whitelist your certificate for this service).
     *
     * Generated from protobuf field <code>.io.PersonalizationDetails personalizationDetails = 9;</code>
     */
    protected $personalizationDetails = null;
    /**
     * A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint64 appStoreIdentifiers = 10;</code>
     */
    private $appStoreIdentifiers;
    /**
     * Used to indicate if the poster event ticket style should be used.  Requires an NFC certificate and iCloud binding.
     *
     * Generated from protobuf field <code>bool posterTicketStyle = 11;</code>
     */
    protected $posterTicketStyle = false;
    /**
     * Used to turn off the top gradient of event poster tickets.
     *
     * Generated from protobuf field <code>bool suppressHeaderDarkening = 12;</code>
     */
    protected $suppressHeaderDarkening = false;
    /**
     * Indicates whether the pass faces should automatically determine the foreground/label colors from the background image, overwriting the set foreground/label colors.
     *
     * Generated from protobuf field <code>bool useAutomaticColors = 13;</code>
     */
    protected $useAutomaticColors = false;
    /**
     * Text to be used in the place of, or in addition to a logo on Apple passes.
     *
     * Generated from protobuf field <code>string logoText = 14;</code>
     */
    protected $logoText = '';
    /**
     * If set to true, time components of an Apple poster Event Ticket start/end date will not be shown on the front of the pass.
     *
     * Generated from protobuf field <code>bool ignoreTimeComponents = 15;</code>
     */
    protected $ignoreTimeComponents = false;

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
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $associatedStoreIdentifiers
     *           Deprecated - use appStoreIdentifiers. A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *     @type int $maxDistance
     *           GPS lock screen messages will show at the lower of max distance and the pass default(unpublished) value.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $appStoreCountries
     *           List of country codes for the stores of the associated apps. This is required to render the pass correctly in the designer.
     *     @type int $transitType
     *     @type string $groupingIdentifier
     *     @type \Io\PersonalizationDetails $personalizationDetails
     *           Personal data requested for an Apple Wallet Pass (Requires Apple to whitelist your certificate for this service).
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $appStoreIdentifiers
     *           A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *     @type bool $posterTicketStyle
     *           Used to indicate if the poster event ticket style should be used.  Requires an NFC certificate and iCloud binding.
     *     @type bool $suppressHeaderDarkening
     *           Used to turn off the top gradient of event poster tickets.
     *     @type bool $useAutomaticColors
     *           Indicates whether the pass faces should automatically determine the foreground/label colors from the background image, overwriting the set foreground/label colors.
     *     @type string $logoText
     *           Text to be used in the place of, or in addition to a logo on Apple passes.
     *     @type bool $ignoreTimeComponents
     *           If set to true, time components of an Apple poster Event Ticket start/end date will not be shown on the front of the pass.
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
     * Deprecated - use appStoreIdentifiers. A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint32 associatedStoreIdentifiers = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssociatedStoreIdentifiers()
    {
        return $this->associatedStoreIdentifiers;
    }

    /**
     * Deprecated - use appStoreIdentifiers. A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint32 associatedStoreIdentifiers = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
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
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
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

    /**
     * Personal data requested for an Apple Wallet Pass (Requires Apple to whitelist your certificate for this service).
     *
     * Generated from protobuf field <code>.io.PersonalizationDetails personalizationDetails = 9;</code>
     * @return \Io\PersonalizationDetails|null
     */
    public function getPersonalizationDetails()
    {
        return $this->personalizationDetails;
    }

    public function hasPersonalizationDetails()
    {
        return isset($this->personalizationDetails);
    }

    public function clearPersonalizationDetails()
    {
        unset($this->personalizationDetails);
    }

    /**
     * Personal data requested for an Apple Wallet Pass (Requires Apple to whitelist your certificate for this service).
     *
     * Generated from protobuf field <code>.io.PersonalizationDetails personalizationDetails = 9;</code>
     * @param \Io\PersonalizationDetails $var
     * @return $this
     */
    public function setPersonalizationDetails($var)
    {
        GPBUtil::checkMessage($var, \Io\PersonalizationDetails::class);
        $this->personalizationDetails = $var;

        return $this;
    }

    /**
     * A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint64 appStoreIdentifiers = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAppStoreIdentifiers()
    {
        return $this->appStoreIdentifiers;
    }

    /**
     * A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint64 appStoreIdentifiers = 10;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAppStoreIdentifiers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->appStoreIdentifiers = $arr;

        return $this;
    }

    /**
     * Used to indicate if the poster event ticket style should be used.  Requires an NFC certificate and iCloud binding.
     *
     * Generated from protobuf field <code>bool posterTicketStyle = 11;</code>
     * @return bool
     */
    public function getPosterTicketStyle()
    {
        return $this->posterTicketStyle;
    }

    /**
     * Used to indicate if the poster event ticket style should be used.  Requires an NFC certificate and iCloud binding.
     *
     * Generated from protobuf field <code>bool posterTicketStyle = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setPosterTicketStyle($var)
    {
        GPBUtil::checkBool($var);
        $this->posterTicketStyle = $var;

        return $this;
    }

    /**
     * Used to turn off the top gradient of event poster tickets.
     *
     * Generated from protobuf field <code>bool suppressHeaderDarkening = 12;</code>
     * @return bool
     */
    public function getSuppressHeaderDarkening()
    {
        return $this->suppressHeaderDarkening;
    }

    /**
     * Used to turn off the top gradient of event poster tickets.
     *
     * Generated from protobuf field <code>bool suppressHeaderDarkening = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuppressHeaderDarkening($var)
    {
        GPBUtil::checkBool($var);
        $this->suppressHeaderDarkening = $var;

        return $this;
    }

    /**
     * Indicates whether the pass faces should automatically determine the foreground/label colors from the background image, overwriting the set foreground/label colors.
     *
     * Generated from protobuf field <code>bool useAutomaticColors = 13;</code>
     * @return bool
     */
    public function getUseAutomaticColors()
    {
        return $this->useAutomaticColors;
    }

    /**
     * Indicates whether the pass faces should automatically determine the foreground/label colors from the background image, overwriting the set foreground/label colors.
     *
     * Generated from protobuf field <code>bool useAutomaticColors = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseAutomaticColors($var)
    {
        GPBUtil::checkBool($var);
        $this->useAutomaticColors = $var;

        return $this;
    }

    /**
     * Text to be used in the place of, or in addition to a logo on Apple passes.
     *
     * Generated from protobuf field <code>string logoText = 14;</code>
     * @return string
     */
    public function getLogoText()
    {
        return $this->logoText;
    }

    /**
     * Text to be used in the place of, or in addition to a logo on Apple passes.
     *
     * Generated from protobuf field <code>string logoText = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoText($var)
    {
        GPBUtil::checkString($var, True);
        $this->logoText = $var;

        return $this;
    }

    /**
     * If set to true, time components of an Apple poster Event Ticket start/end date will not be shown on the front of the pass.
     *
     * Generated from protobuf field <code>bool ignoreTimeComponents = 15;</code>
     * @return bool
     */
    public function getIgnoreTimeComponents()
    {
        return $this->ignoreTimeComponents;
    }

    /**
     * If set to true, time components of an Apple poster Event Ticket start/end date will not be shown on the front of the pass.
     *
     * Generated from protobuf field <code>bool ignoreTimeComponents = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreTimeComponents($var)
    {
        GPBUtil::checkBool($var);
        $this->ignoreTimeComponents = $var;

        return $this;
    }

}

