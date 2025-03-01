<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/pass.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PassOverrides contains optional pass-object level details. Overrides any template level values.
 *
 * Generated from protobuf message <code>io.PassOverrides</code>
 */
class PassOverrides extends \Google\Protobuf\Internal\Message
{
    /**
     * Image ID's of images to override for this pass.
     *
     * Generated from protobuf field <code>.io.ImageIds imageIds = 1;</code>
     */
    protected $imageIds = null;
    /**
     * A list of up to 10 GPS locations where this pass should be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.GPSLocation locations = 3 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $locations;
    /**
     * A list of up to 10 Beacon UUIDs that should trigger the pass to be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.Beacon beacons = 4 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $beacons;
    /**
     * A list of (personalized) links to be shown on the pass.
     *
     * Generated from protobuf field <code>repeated .io.Link links = 5 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $links;
    /**
     * Stores custom pass colors.
     *
     * Generated from protobuf field <code>.io.Colors colors = 6;</code>
     */
    protected $colors = null;
    /**
     * Deprecated - user appStoreIdentifiers.  A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint32 associatedStoreIdentifiers = 7;</code>
     */
    private $associatedStoreIdentifiers;
    /**
     * A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint64 appStoreIdentifiers = 8;</code>
     */
    private $appStoreIdentifiers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\ImageIds $imageIds
     *           Image ID's of images to override for this pass.
     *     @type array<\Io\GPSLocation>|\Google\Protobuf\Internal\RepeatedField $locations
     *           A list of up to 10 GPS locations where this pass should be presented on the lock-screen.
     *     @type array<\Io\Beacon>|\Google\Protobuf\Internal\RepeatedField $beacons
     *           A list of up to 10 Beacon UUIDs that should trigger the pass to be presented on the lock-screen.
     *     @type array<\Io\Link>|\Google\Protobuf\Internal\RepeatedField $links
     *           A list of (personalized) links to be shown on the pass.
     *     @type \Io\Colors $colors
     *           Stores custom pass colors.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $associatedStoreIdentifiers
     *           Deprecated - user appStoreIdentifiers.  A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $appStoreIdentifiers
     *           A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Pass::initOnce();
        parent::__construct($data);
    }

    /**
     * Image ID's of images to override for this pass.
     *
     * Generated from protobuf field <code>.io.ImageIds imageIds = 1;</code>
     * @return \Io\ImageIds|null
     */
    public function getImageIds()
    {
        return $this->imageIds;
    }

    public function hasImageIds()
    {
        return isset($this->imageIds);
    }

    public function clearImageIds()
    {
        unset($this->imageIds);
    }

    /**
     * Image ID's of images to override for this pass.
     *
     * Generated from protobuf field <code>.io.ImageIds imageIds = 1;</code>
     * @param \Io\ImageIds $var
     * @return $this
     */
    public function setImageIds($var)
    {
        GPBUtil::checkMessage($var, \Io\ImageIds::class);
        $this->imageIds = $var;

        return $this;
    }

    /**
     * A list of up to 10 GPS locations where this pass should be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.GPSLocation locations = 3 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * A list of up to 10 GPS locations where this pass should be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.GPSLocation locations = 3 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>repeated .io.Beacon beacons = 4 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBeacons()
    {
        return $this->beacons;
    }

    /**
     * A list of up to 10 Beacon UUIDs that should trigger the pass to be presented on the lock-screen.
     *
     * Generated from protobuf field <code>repeated .io.Beacon beacons = 4 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * A list of (personalized) links to be shown on the pass.
     *
     * Generated from protobuf field <code>repeated .io.Link links = 5 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * A list of (personalized) links to be shown on the pass.
     *
     * Generated from protobuf field <code>repeated .io.Link links = 5 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Stores custom pass colors.
     *
     * Generated from protobuf field <code>.io.Colors colors = 6;</code>
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
     * Stores custom pass colors.
     *
     * Generated from protobuf field <code>.io.Colors colors = 6;</code>
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
     * Deprecated - user appStoreIdentifiers.  A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint32 associatedStoreIdentifiers = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssociatedStoreIdentifiers()
    {
        return $this->associatedStoreIdentifiers;
    }

    /**
     * Deprecated - user appStoreIdentifiers.  A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint32 associatedStoreIdentifiers = 7;</code>
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
     * A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint64 appStoreIdentifiers = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAppStoreIdentifiers()
    {
        return $this->appStoreIdentifiers;
    }

    /**
     * A list of iTunes Store item identifiers for the associated apps. Only one item in the list is used — the first item identifier for an app compatible with the user's App Store account and device (hardware/iOS version). If the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the link launches the app.
     *
     * Generated from protobuf field <code>repeated uint64 appStoreIdentifiers = 8;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAppStoreIdentifiers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->appStoreIdentifiers = $arr;

        return $this;
    }

}

