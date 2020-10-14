<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use UnexpectedValueException;

/**
 * Barcode type sets the type of barcode for the pass.
 *
 * Protobuf type <code>io.BarcodeType</code>
 */
class BarcodeType
{
    /**
     * Generated from protobuf enum <code>BARCODE_TYPE_DO_NOT_USE = 0;</code>
     */
    const BARCODE_TYPE_DO_NOT_USE = 0;
    /**
     * QR code can store 4 types of data: numeric, alphanumeric, byte/binary, and Kanji (Chinese characters).
     *
     * Generated from protobuf enum <code>QR = 1;</code>
     */
    const QR = 1;
    /**
     * Aztec codes are commonly used by the transportation industry such as tickets and airline boarding passes.
     *
     * Generated from protobuf enum <code>AZTEC = 2;</code>
     */
    const AZTEC = 2;
    /**
     * 2D barcode which can store multiple data encodings. Not recommended for large payloads.
     *
     * Generated from protobuf enum <code>PDF417 = 3;</code>
     */
    const PDF417 = 3;
    /**
     * Supports any character of the ASCII 128 character set which can store highly diversified information. Suitable for older scanners that may not support 2D barcodes, however, some older scanners may also not be able to read from a phone screen, so requires proper testing before use.
     *
     * Generated from protobuf enum <code>CODE128 = 4;</code>
     */
    const CODE128 = 4;
    /**
     * This does not set a barcode. If you set barcode type as none, no barcode will be shown on the pass.
     *
     * Generated from protobuf enum <code>NONE = 5;</code>
     */
    const NONE = 5;

    private static $valueToName = [
        self::BARCODE_TYPE_DO_NOT_USE => 'BARCODE_TYPE_DO_NOT_USE',
        self::QR => 'QR',
        self::AZTEC => 'AZTEC',
        self::PDF417 => 'PDF417',
        self::CODE128 => 'CODE128',
        self::NONE => 'NONE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

