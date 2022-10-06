<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Pass Template holds design and data elements for Apple Wallet and Google Pay passes.
 *
 * Generated from protobuf message <code>io.PassTemplate</code>
 */
class PassTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * This design id (not writable).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * A name to allow for searching within the console.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * The protocol for the design.
     *
     * Generated from protobuf field <code>.io.PassProtocol protocol = 3;</code>
     */
    protected $protocol = 0;
    /**
     * The version of the protocol design. (for protocols that support more than one pass style).
     *
     * Generated from protobuf field <code>uint32 revision = 4;</code>
     */
    protected $revision = 0;
    /**
     * This defines the template’s default language. For a list of supported languages please see the Language List.
     *
     * Generated from protobuf field <code>.io.LanguageCode defaultLanguage = 5;</code>
     */
    protected $defaultLanguage = 0;
    /**
     * This is the name of the company or organisation issuing the pass.
     *
     * Generated from protobuf field <code>string organizationName = 6;</code>
     */
    protected $organizationName = '';
    /**
     * Different language translations for the name of company or organisation issuing the pass.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOrganizationName = 7;</code>
     */
    protected $localizedOrganizationName = null;
    /**
     * This is your campaign description. The description will be displayed at the top on the back of the Apple pass, and when customers are downloading their pass. This value should detail the campaign offers and customer benefits.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     */
    protected $description = '';
    /**
     * Different language translations for the campaign description.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDescription = 9;</code>
     */
    protected $localizedDescription = null;
    /**
     * This holds pass fields for both front and back of the pass and settings of rendering pass fields and data collection page.
     *
     * Generated from protobuf field <code>.io.Data data = 10;</code>
     */
    protected $data = null;
    /**
     * Colours take a hex code input.  A '#' prefix is optional. Not all colors have effect on each design.
     *
     * Generated from protobuf field <code>.io.Colors colors = 13;</code>
     */
    protected $colors = null;
    /**
     * Generated from protobuf field <code>.io.Barcode barcode = 14;</code>
     */
    protected $barcode = null;
    /**
     * NFC enabled passes will depend on client certificate capabilities. Contact support for more information.
     *
     * Generated from protobuf field <code>.io.NFC nfcEnabled = 15;</code>
     */
    protected $nfcEnabled = null;
    /**
     * When set controls how this pass is shared. For Apple wallet this uses the built in sharing functionality. For Google Pay, a sharing link will be added to the pass.
     *
     * Generated from protobuf field <code>.io.Sharing sharing = 16;</code>
     */
    protected $sharing = null;
    /**
     * Generated from protobuf field <code>.io.AppleWalletSettings appleWalletSettings = 17;</code>
     */
    protected $appleWalletSettings = null;
    /**
     * Generated from protobuf field <code>.io.GooglePaySettings googlePaySettings = 18;</code>
     */
    protected $googlePaySettings = null;
    /**
     * A list of up to 10 GPS locations where this pass should be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.GPSLocation locations = 19 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $locations;
    /**
     * A list of up to 10 Beacon UUIDs that should trigger the pass to be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.Beacon beacons = 20 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $beacons;
    /**
     * A list of links to be shown on each pass.
     *
     * Generated from protobuf field <code>repeated .io.Link links = 21;</code>
     */
    private $links;
    /**
     * Timezone string in IANA timezone format. If not provided defaults to Etc/UTC.
     *
     * Generated from protobuf field <code>string timezone = 22;</code>
     */
    protected $timezone = '';
    /**
     * Generated from protobuf field <code>.io.ExpirySettings expirySettings = 23;</code>
     */
    protected $expirySettings = null;
    /**
     * Optional settings that override default localizations and Android experience.
     *
     * Generated from protobuf field <code>.io.LandingPageSettings landingPageSettings = 24;</code>
     */
    protected $landingPageSettings = null;
    protected $ImageAssets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           This design id (not writable).
     *     @type string $name
     *           A name to allow for searching within the console.
     *     @type int $protocol
     *           The protocol for the design.
     *     @type int $revision
     *           The version of the protocol design. (for protocols that support more than one pass style).
     *     @type int $defaultLanguage
     *           This defines the template’s default language. For a list of supported languages please see the Language List.
     *     @type string $organizationName
     *           This is the name of the company or organisation issuing the pass.
     *     @type \Io\LocalizedString $localizedOrganizationName
     *           Different language translations for the name of company or organisation issuing the pass.
     *     @type string $description
     *           This is your campaign description. The description will be displayed at the top on the back of the Apple pass, and when customers are downloading their pass. This value should detail the campaign offers and customer benefits.
     *     @type \Io\LocalizedString $localizedDescription
     *           Different language translations for the campaign description.
     *     @type \Io\Data $data
     *           This holds pass fields for both front and back of the pass and settings of rendering pass fields and data collection page.
     *     @type \Io\ImageIds $imageIds
     *           Image data defined by image ids.
     *     @type \Io\ImageData $images
     *           Image data defined as image object.
     *     @type \Io\Colors $colors
     *           Colours take a hex code input.  A '#' prefix is optional. Not all colors have effect on each design.
     *     @type \Io\Barcode $barcode
     *     @type \Io\NFC $nfcEnabled
     *           NFC enabled passes will depend on client certificate capabilities. Contact support for more information.
     *     @type \Io\Sharing $sharing
     *           When set controls how this pass is shared. For Apple wallet this uses the built in sharing functionality. For Google Pay, a sharing link will be added to the pass.
     *     @type \Io\AppleWalletSettings $appleWalletSettings
     *     @type \Io\GooglePaySettings $googlePaySettings
     *     @type array<\Io\GPSLocation>|\Google\Protobuf\Internal\RepeatedField $locations
     *           A list of up to 10 GPS locations where this pass should be presented on the lock-screen.
     *     @type array<\Io\Beacon>|\Google\Protobuf\Internal\RepeatedField $beacons
     *           A list of up to 10 Beacon UUIDs that should trigger the pass to be presented on the lock-screen.
     *     @type array<\Io\Link>|\Google\Protobuf\Internal\RepeatedField $links
     *           A list of links to be shown on each pass.
     *     @type string $timezone
     *           Timezone string in IANA timezone format. If not provided defaults to Etc/UTC.
     *     @type \Io\ExpirySettings $expirySettings
     *     @type \Io\LandingPageSettings $landingPageSettings
     *           Optional settings that override default localizations and Android experience.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * This design id (not writable).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * This design id (not writable).
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
     * A name to allow for searching within the console.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A name to allow for searching within the console.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The protocol for the design.
     *
     * Generated from protobuf field <code>.io.PassProtocol protocol = 3;</code>
     * @return int
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * The protocol for the design.
     *
     * Generated from protobuf field <code>.io.PassProtocol protocol = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkEnum($var, \Io\PassProtocol::class);
        $this->protocol = $var;

        return $this;
    }

    /**
     * The version of the protocol design. (for protocols that support more than one pass style).
     *
     * Generated from protobuf field <code>uint32 revision = 4;</code>
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * The version of the protocol design. (for protocols that support more than one pass style).
     *
     * Generated from protobuf field <code>uint32 revision = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkUint32($var);
        $this->revision = $var;

        return $this;
    }

    /**
     * This defines the template’s default language. For a list of supported languages please see the Language List.
     *
     * Generated from protobuf field <code>.io.LanguageCode defaultLanguage = 5;</code>
     * @return int
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * This defines the template’s default language. For a list of supported languages please see the Language List.
     *
     * Generated from protobuf field <code>.io.LanguageCode defaultLanguage = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultLanguage($var)
    {
        GPBUtil::checkEnum($var, \Io\LanguageCode::class);
        $this->defaultLanguage = $var;

        return $this;
    }

    /**
     * This is the name of the company or organisation issuing the pass.
     *
     * Generated from protobuf field <code>string organizationName = 6;</code>
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * This is the name of the company or organisation issuing the pass.
     *
     * Generated from protobuf field <code>string organizationName = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setOrganizationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->organizationName = $var;

        return $this;
    }

    /**
     * Different language translations for the name of company or organisation issuing the pass.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOrganizationName = 7;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedOrganizationName()
    {
        return $this->localizedOrganizationName;
    }

    public function hasLocalizedOrganizationName()
    {
        return isset($this->localizedOrganizationName);
    }

    public function clearLocalizedOrganizationName()
    {
        unset($this->localizedOrganizationName);
    }

    /**
     * Different language translations for the name of company or organisation issuing the pass.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedOrganizationName = 7;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedOrganizationName($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedOrganizationName = $var;

        return $this;
    }

    /**
     * This is your campaign description. The description will be displayed at the top on the back of the Apple pass, and when customers are downloading their pass. This value should detail the campaign offers and customer benefits.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * This is your campaign description. The description will be displayed at the top on the back of the Apple pass, and when customers are downloading their pass. This value should detail the campaign offers and customer benefits.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Different language translations for the campaign description.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDescription = 9;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedDescription()
    {
        return $this->localizedDescription;
    }

    public function hasLocalizedDescription()
    {
        return isset($this->localizedDescription);
    }

    public function clearLocalizedDescription()
    {
        unset($this->localizedDescription);
    }

    /**
     * Different language translations for the campaign description.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDescription = 9;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedDescription($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedDescription = $var;

        return $this;
    }

    /**
     * This holds pass fields for both front and back of the pass and settings of rendering pass fields and data collection page.
     *
     * Generated from protobuf field <code>.io.Data data = 10;</code>
     * @return \Io\Data|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * This holds pass fields for both front and back of the pass and settings of rendering pass fields and data collection page.
     *
     * Generated from protobuf field <code>.io.Data data = 10;</code>
     * @param \Io\Data $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Io\Data::class);
        $this->data = $var;

        return $this;
    }

    /**
     * Image data defined by image ids.
     *
     * Generated from protobuf field <code>.io.ImageIds imageIds = 11;</code>
     * @return \Io\ImageIds|null
     */
    public function getImageIds()
    {
        return $this->readOneof(11);
    }

    public function hasImageIds()
    {
        return $this->hasOneof(11);
    }

    /**
     * Image data defined by image ids.
     *
     * Generated from protobuf field <code>.io.ImageIds imageIds = 11;</code>
     * @param \Io\ImageIds $var
     * @return $this
     */
    public function setImageIds($var)
    {
        GPBUtil::checkMessage($var, \Io\ImageIds::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Image data defined as image object.
     *
     * Generated from protobuf field <code>.io.ImageData images = 12;</code>
     * @return \Io\ImageData|null
     */
    public function getImages()
    {
        return $this->readOneof(12);
    }

    public function hasImages()
    {
        return $this->hasOneof(12);
    }

    /**
     * Image data defined as image object.
     *
     * Generated from protobuf field <code>.io.ImageData images = 12;</code>
     * @param \Io\ImageData $var
     * @return $this
     */
    public function setImages($var)
    {
        GPBUtil::checkMessage($var, \Io\ImageData::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Colours take a hex code input.  A '#' prefix is optional. Not all colors have effect on each design.
     *
     * Generated from protobuf field <code>.io.Colors colors = 13;</code>
     * @return \Io\Colors|null
     */
    public function getColors()
    {
        return $this->colors;
    }

    public function hasColors()
    {
        return isset($this->colors);
    }

    public function clearColors()
    {
        unset($this->colors);
    }

    /**
     * Colours take a hex code input.  A '#' prefix is optional. Not all colors have effect on each design.
     *
     * Generated from protobuf field <code>.io.Colors colors = 13;</code>
     * @param \Io\Colors $var
     * @return $this
     */
    public function setColors($var)
    {
        GPBUtil::checkMessage($var, \Io\Colors::class);
        $this->colors = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.Barcode barcode = 14;</code>
     * @return \Io\Barcode|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    public function hasBarcode()
    {
        return isset($this->barcode);
    }

    public function clearBarcode()
    {
        unset($this->barcode);
    }

    /**
     * Generated from protobuf field <code>.io.Barcode barcode = 14;</code>
     * @param \Io\Barcode $var
     * @return $this
     */
    public function setBarcode($var)
    {
        GPBUtil::checkMessage($var, \Io\Barcode::class);
        $this->barcode = $var;

        return $this;
    }

    /**
     * NFC enabled passes will depend on client certificate capabilities. Contact support for more information.
     *
     * Generated from protobuf field <code>.io.NFC nfcEnabled = 15;</code>
     * @return \Io\NFC|null
     */
    public function getNfcEnabled()
    {
        return $this->nfcEnabled;
    }

    public function hasNfcEnabled()
    {
        return isset($this->nfcEnabled);
    }

    public function clearNfcEnabled()
    {
        unset($this->nfcEnabled);
    }

    /**
     * NFC enabled passes will depend on client certificate capabilities. Contact support for more information.
     *
     * Generated from protobuf field <code>.io.NFC nfcEnabled = 15;</code>
     * @param \Io\NFC $var
     * @return $this
     */
    public function setNfcEnabled($var)
    {
        GPBUtil::checkMessage($var, \Io\NFC::class);
        $this->nfcEnabled = $var;

        return $this;
    }

    /**
     * When set controls how this pass is shared. For Apple wallet this uses the built in sharing functionality. For Google Pay, a sharing link will be added to the pass.
     *
     * Generated from protobuf field <code>.io.Sharing sharing = 16;</code>
     * @return \Io\Sharing|null
     */
    public function getSharing()
    {
        return $this->sharing;
    }

    public function hasSharing()
    {
        return isset($this->sharing);
    }

    public function clearSharing()
    {
        unset($this->sharing);
    }

    /**
     * When set controls how this pass is shared. For Apple wallet this uses the built in sharing functionality. For Google Pay, a sharing link will be added to the pass.
     *
     * Generated from protobuf field <code>.io.Sharing sharing = 16;</code>
     * @param \Io\Sharing $var
     * @return $this
     */
    public function setSharing($var)
    {
        GPBUtil::checkMessage($var, \Io\Sharing::class);
        $this->sharing = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.AppleWalletSettings appleWalletSettings = 17;</code>
     * @return \Io\AppleWalletSettings|null
     */
    public function getAppleWalletSettings()
    {
        return $this->appleWalletSettings;
    }

    public function hasAppleWalletSettings()
    {
        return isset($this->appleWalletSettings);
    }

    public function clearAppleWalletSettings()
    {
        unset($this->appleWalletSettings);
    }

    /**
     * Generated from protobuf field <code>.io.AppleWalletSettings appleWalletSettings = 17;</code>
     * @param \Io\AppleWalletSettings $var
     * @return $this
     */
    public function setAppleWalletSettings($var)
    {
        GPBUtil::checkMessage($var, \Io\AppleWalletSettings::class);
        $this->appleWalletSettings = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.GooglePaySettings googlePaySettings = 18;</code>
     * @return \Io\GooglePaySettings|null
     */
    public function getGooglePaySettings()
    {
        return $this->googlePaySettings;
    }

    public function hasGooglePaySettings()
    {
        return isset($this->googlePaySettings);
    }

    public function clearGooglePaySettings()
    {
        unset($this->googlePaySettings);
    }

    /**
     * Generated from protobuf field <code>.io.GooglePaySettings googlePaySettings = 18;</code>
     * @param \Io\GooglePaySettings $var
     * @return $this
     */
    public function setGooglePaySettings($var)
    {
        GPBUtil::checkMessage($var, \Io\GooglePaySettings::class);
        $this->googlePaySettings = $var;

        return $this;
    }

    /**
     * A list of up to 10 GPS locations where this pass should be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.GPSLocation locations = 19 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * A list of up to 10 GPS locations where this pass should be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.GPSLocation locations = 19 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Io\GPSLocation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\GPSLocation::class);
        $this->locations = $arr;

        return $this;
    }

    /**
     * A list of up to 10 Beacon UUIDs that should trigger the pass to be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.Beacon beacons = 20 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBeacons()
    {
        return $this->beacons;
    }

    /**
     * A list of up to 10 Beacon UUIDs that should trigger the pass to be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.Beacon beacons = 20 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Io\Beacon>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBeacons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Beacon::class);
        $this->beacons = $arr;

        return $this;
    }

    /**
     * A list of links to be shown on each pass.
     *
     * Generated from protobuf field <code>repeated .io.Link links = 21;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * A list of links to be shown on each pass.
     *
     * Generated from protobuf field <code>repeated .io.Link links = 21;</code>
     * @param array<\Io\Link>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Link::class);
        $this->links = $arr;

        return $this;
    }

    /**
     * Timezone string in IANA timezone format. If not provided defaults to Etc/UTC.
     *
     * Generated from protobuf field <code>string timezone = 22;</code>
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Timezone string in IANA timezone format. If not provided defaults to Etc/UTC.
     *
     * Generated from protobuf field <code>string timezone = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setTimezone($var)
    {
        GPBUtil::checkString($var, True);
        $this->timezone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.ExpirySettings expirySettings = 23;</code>
     * @return \Io\ExpirySettings|null
     */
    public function getExpirySettings()
    {
        return $this->expirySettings;
    }

    public function hasExpirySettings()
    {
        return isset($this->expirySettings);
    }

    public function clearExpirySettings()
    {
        unset($this->expirySettings);
    }

    /**
     * Generated from protobuf field <code>.io.ExpirySettings expirySettings = 23;</code>
     * @param \Io\ExpirySettings $var
     * @return $this
     */
    public function setExpirySettings($var)
    {
        GPBUtil::checkMessage($var, \Io\ExpirySettings::class);
        $this->expirySettings = $var;

        return $this;
    }

    /**
     * Optional settings that override default localizations and Android experience.
     *
     * Generated from protobuf field <code>.io.LandingPageSettings landingPageSettings = 24;</code>
     * @return \Io\LandingPageSettings|null
     */
    public function getLandingPageSettings()
    {
        return $this->landingPageSettings;
    }

    public function hasLandingPageSettings()
    {
        return isset($this->landingPageSettings);
    }

    public function clearLandingPageSettings()
    {
        unset($this->landingPageSettings);
    }

    /**
     * Optional settings that override default localizations and Android experience.
     *
     * Generated from protobuf field <code>.io.LandingPageSettings landingPageSettings = 24;</code>
     * @param \Io\LandingPageSettings $var
     * @return $this
     */
    public function setLandingPageSettings($var)
    {
        GPBUtil::checkMessage($var, \Io\LandingPageSettings::class);
        $this->landingPageSettings = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageAssets()
    {
        return $this->whichOneof("ImageAssets");
    }

}

