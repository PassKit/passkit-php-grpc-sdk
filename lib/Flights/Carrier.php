<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/carrier.proto

namespace Flights;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A carrier record contains details of the carrier.  The carrier will be the issuer of the boarding pass and may be used as a marketing or operating carrier.
 *
 * Generated from protobuf message <code>flights.Carrier</code>
 */
class Carrier extends \Google\Protobuf\Internal\Message
{
    /**
     * The IATA carrier code. If the carrier has not been issued an IATA carrier code or an ICAO carrier code, use YY.
     *
     * Generated from protobuf field <code>string iataCarrierCode = 1 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $iataCarrierCode = '';
    /**
     * The ICAO carrier code. Required if an iataCarrierCode is not provided.
     *
     * Generated from protobuf field <code>string icaoCarrierCode = 2 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $icaoCarrierCode = '';
    /**
     * The IATA accounting code / AWB prefix.  If no code has been allocated, enter zero.
     *
     * Generated from protobuf field <code>int32 iataAccountingCode = 3 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $iataAccountingCode = 0;
    /**
     * The name of the airline. This will be printed below the logo on the Google Pay pass.
     *
     * Generated from protobuf field <code>string airlineName = 4;</code>
     */
    protected $airlineName = '';
    /**
     * The localized airline name, if applicable.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedAirlineName = 5;</code>
     */
    protected $localizedAirlineName = null;
    /**
     * If the carrier will issue Apple Wallet passes, supply the certificate id (E.g. pass.com.passkitair). The certificate must have previously been uploaded.
     *
     * Generated from protobuf field <code>string passTypeIdentifier = 6;</code>
     */
    protected $passTypeIdentifier = '';
    /**
     * If PassKit are generating the boarding pass barcode, and the barcode needs signing, the ID of the private key used to sign the barcode payload.
     *
     * Generated from protobuf field <code>string privateKeyId = 7;</code>
     */
    protected $privateKeyId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $iataCarrierCode
     *           The IATA carrier code. If the carrier has not been issued an IATA carrier code or an ICAO carrier code, use YY.
     *     @type string $icaoCarrierCode
     *           The ICAO carrier code. Required if an iataCarrierCode is not provided.
     *     @type int $iataAccountingCode
     *           The IATA accounting code / AWB prefix.  If no code has been allocated, enter zero.
     *     @type string $airlineName
     *           The name of the airline. This will be printed below the logo on the Google Pay pass.
     *     @type \Io\LocalizedString $localizedAirlineName
     *           The localized airline name, if applicable.
     *     @type string $passTypeIdentifier
     *           If the carrier will issue Apple Wallet passes, supply the certificate id (E.g. pass.com.passkitair). The certificate must have previously been uploaded.
     *     @type string $privateKeyId
     *           If PassKit are generating the boarding pass barcode, and the barcode needs signing, the ID of the private key used to sign the barcode payload.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Flights\Carrier::initOnce();
        parent::__construct($data);
    }

    /**
     * The IATA carrier code. If the carrier has not been issued an IATA carrier code or an ICAO carrier code, use YY.
     *
     * Generated from protobuf field <code>string iataCarrierCode = 1 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIataCarrierCode()
    {
        return $this->iataCarrierCode;
    }

    /**
     * The IATA carrier code. If the carrier has not been issued an IATA carrier code or an ICAO carrier code, use YY.
     *
     * Generated from protobuf field <code>string iataCarrierCode = 1 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIataCarrierCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->iataCarrierCode = $var;

        return $this;
    }

    /**
     * The ICAO carrier code. Required if an iataCarrierCode is not provided.
     *
     * Generated from protobuf field <code>string icaoCarrierCode = 2 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIcaoCarrierCode()
    {
        return $this->icaoCarrierCode;
    }

    /**
     * The ICAO carrier code. Required if an iataCarrierCode is not provided.
     *
     * Generated from protobuf field <code>string icaoCarrierCode = 2 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIcaoCarrierCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->icaoCarrierCode = $var;

        return $this;
    }

    /**
     * The IATA accounting code / AWB prefix.  If no code has been allocated, enter zero.
     *
     * Generated from protobuf field <code>int32 iataAccountingCode = 3 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getIataAccountingCode()
    {
        return $this->iataAccountingCode;
    }

    /**
     * The IATA accounting code / AWB prefix.  If no code has been allocated, enter zero.
     *
     * Generated from protobuf field <code>int32 iataAccountingCode = 3 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setIataAccountingCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->iataAccountingCode = $var;

        return $this;
    }

    /**
     * The name of the airline. This will be printed below the logo on the Google Pay pass.
     *
     * Generated from protobuf field <code>string airlineName = 4;</code>
     * @return string
     */
    public function getAirlineName()
    {
        return $this->airlineName;
    }

    /**
     * The name of the airline. This will be printed below the logo on the Google Pay pass.
     *
     * Generated from protobuf field <code>string airlineName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAirlineName($var)
    {
        GPBUtil::checkString($var, True);
        $this->airlineName = $var;

        return $this;
    }

    /**
     * The localized airline name, if applicable.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedAirlineName = 5;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedAirlineName()
    {
        return isset($this->localizedAirlineName) ? $this->localizedAirlineName : null;
    }

    public function hasLocalizedAirlineName()
    {
        return isset($this->localizedAirlineName);
    }

    public function clearLocalizedAirlineName()
    {
        unset($this->localizedAirlineName);
    }

    /**
     * The localized airline name, if applicable.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedAirlineName = 5;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedAirlineName($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedAirlineName = $var;

        return $this;
    }

    /**
     * If the carrier will issue Apple Wallet passes, supply the certificate id (E.g. pass.com.passkitair). The certificate must have previously been uploaded.
     *
     * Generated from protobuf field <code>string passTypeIdentifier = 6;</code>
     * @return string
     */
    public function getPassTypeIdentifier()
    {
        return $this->passTypeIdentifier;
    }

    /**
     * If the carrier will issue Apple Wallet passes, supply the certificate id (E.g. pass.com.passkitair). The certificate must have previously been uploaded.
     *
     * Generated from protobuf field <code>string passTypeIdentifier = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPassTypeIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->passTypeIdentifier = $var;

        return $this;
    }

    /**
     * If PassKit are generating the boarding pass barcode, and the barcode needs signing, the ID of the private key used to sign the barcode payload.
     *
     * Generated from protobuf field <code>string privateKeyId = 7;</code>
     * @return string
     */
    public function getPrivateKeyId()
    {
        return $this->privateKeyId;
    }

    /**
     * If PassKit are generating the boarding pass barcode, and the barcode needs signing, the ID of the private key used to sign the barcode payload.
     *
     * Generated from protobuf field <code>string privateKeyId = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->privateKeyId = $var;

        return $this;
    }

}

