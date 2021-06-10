<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/member/member.proto

namespace Members;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The member record
 *
 * Generated from protobuf message <code>members.Member</code>
 */
class Member extends \Google\Protobuf\Internal\Message
{
    /**
     * Id assigned by PassKit to represent the member record. It will be used as the serial number in Apple Wallet and as the Object identifier for Google Wallet. This field is not writable.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * This can be used to set the 'external' ID of the member (i.e. the member ID as it's being used in your system). If provided then this can be used to query & update members. This field will be treated as unique within the program, and cannot be updated at a later stage.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     */
    protected $externalId = '';
    /**
     * Grouping Identifier can be used to group members under the same membership (i.e. couple).
     *
     * Generated from protobuf field <code>string groupingIdentifier = 3;</code>
     */
    protected $groupingIdentifier = '';
    /**
     * Indicates the ID of the tier this member is in.
     *
     * Generated from protobuf field <code>string tierId = 4;</code>
     */
    protected $tierId = '';
    /**
     * Indicates the ID of the program this member is in.
     *
     * Generated from protobuf field <code>string programId = 5;</code>
     */
    protected $programId = '';
    /**
     * Personal details of the member.
     *
     * Generated from protobuf field <code>.io.Person person = 6;</code>
     */
    protected $person = null;
    /**
     * Any other meta fields for the member that are not covered in the protocol (i.e. you might want to captures sign-up location, and favorite coffee, for segmenting later on).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 7;</code>
     */
    private $metaData;
    /**
     * Indicates if the member opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 13;</code>
     */
    protected $optOut = false;
    /**
     * Points is formatted differently based on what is set on a program level. Program points.balance field can be set to: `int`, `double` or `money`.
     *
     * Generated from protobuf field <code>float points = 14;</code>
     */
    protected $points = 0.0;
    /**
     * Secondary Points is formatted differently based on what is set on a program level. Program secondaryPoints.balance field can be set to: `int`, `double` or `money`. Field can be utilised if your program tracks two points, i.e. loyalty point balance, and pre-paid cash balance.
     *
     * Generated from protobuf field <code>float secondaryPoints = 15;</code>
     */
    protected $secondaryPoints = 0.0;
    /**
     * Tier points can be set for programs that award tiers based on dedicated tier points. Tier points indicates the current amount of tier points someone has, and can be used by a member to check how many more tier points are required to switch to the next tier.
     *
     * Generated from protobuf field <code>uint32 tierPoints = 16;</code>
     */
    protected $tierPoints = 0;
    /**
     * Indicates when the membership card expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 18;</code>
     */
    protected $expiryDate = null;
    /**
     * Member status.
     *
     * Generated from protobuf field <code>.members.MemberStatus status = 19;</code>
     */
    protected $status = 0;
    /**
     * Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 20;</code>
     */
    protected $passOverrides = null;
    /**
     * Pass Metadata.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 21;</code>
     */
    protected $passMetaData = null;
    /**
     * placeholder for notes.
     *
     * Generated from protobuf field <code>repeated .io.Note notes = 26;</code>
     */
    private $notes;
    /**
     * The date the current tier was awarded.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp currentTierAwarded = 27;</code>
     */
    protected $currentTierAwarded = null;
    /**
     * The date the current tier expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp currentTierExpires = 28;</code>
     */
    protected $currentTierExpires = null;
    /**
     * The date the member was created in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 29;</code>
     */
    protected $created = null;
    /**
     * The date the member was last updated in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 30;</code>
     */
    protected $updated = null;
    /**
     * Optional field that holds the member profile image. Can either be an image URL or base64 image string.
     *
     * Generated from protobuf field <code>string profileImage = 31;</code>
     */
    protected $profileImage = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Id assigned by PassKit to represent the member record. It will be used as the serial number in Apple Wallet and as the Object identifier for Google Wallet. This field is not writable.
     *     @type string $externalId
     *           This can be used to set the 'external' ID of the member (i.e. the member ID as it's being used in your system). If provided then this can be used to query & update members. This field will be treated as unique within the program, and cannot be updated at a later stage.
     *     @type string $groupingIdentifier
     *           Grouping Identifier can be used to group members under the same membership (i.e. couple).
     *     @type string $tierId
     *           Indicates the ID of the tier this member is in.
     *     @type string $programId
     *           Indicates the ID of the program this member is in.
     *     @type \Io\Person $person
     *           Personal details of the member.
     *     @type array|\Google\Protobuf\Internal\MapField $metaData
     *           Any other meta fields for the member that are not covered in the protocol (i.e. you might want to captures sign-up location, and favorite coffee, for segmenting later on).
     *     @type bool $optOut
     *           Indicates if the member opted out to receive marketing promotions (defaults to false).
     *     @type float $points
     *           Points is formatted differently based on what is set on a program level. Program points.balance field can be set to: `int`, `double` or `money`.
     *     @type float $secondaryPoints
     *           Secondary Points is formatted differently based on what is set on a program level. Program secondaryPoints.balance field can be set to: `int`, `double` or `money`. Field can be utilised if your program tracks two points, i.e. loyalty point balance, and pre-paid cash balance.
     *     @type int $tierPoints
     *           Tier points can be set for programs that award tiers based on dedicated tier points. Tier points indicates the current amount of tier points someone has, and can be used by a member to check how many more tier points are required to switch to the next tier.
     *     @type \Google\Protobuf\Timestamp $expiryDate
     *           Indicates when the membership card expires. When the expiry date hits, it will automatically gray out the barcode.
     *     @type int $status
     *           Member status.
     *     @type \Io\PassOverrides $passOverrides
     *           Pass level overrides for proximity & images.
     *     @type \Io\Metadata $passMetaData
     *           Pass Metadata.
     *     @type \Io\Note[]|\Google\Protobuf\Internal\RepeatedField $notes
     *           placeholder for notes.
     *     @type \Google\Protobuf\Timestamp $currentTierAwarded
     *           The date the current tier was awarded.
     *     @type \Google\Protobuf\Timestamp $currentTierExpires
     *           The date the current tier expires.
     *     @type \Google\Protobuf\Timestamp $created
     *           The date the member was created in the PassKit system.
     *     @type \Google\Protobuf\Timestamp $updated
     *           The date the member was last updated in the PassKit system.
     *     @type string $profileImage
     *           Optional field that holds the member profile image. Can either be an image URL or base64 image string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Member\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Id assigned by PassKit to represent the member record. It will be used as the serial number in Apple Wallet and as the Object identifier for Google Wallet. This field is not writable.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Id assigned by PassKit to represent the member record. It will be used as the serial number in Apple Wallet and as the Object identifier for Google Wallet. This field is not writable.
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
     * This can be used to set the 'external' ID of the member (i.e. the member ID as it's being used in your system). If provided then this can be used to query & update members. This field will be treated as unique within the program, and cannot be updated at a later stage.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * This can be used to set the 'external' ID of the member (i.e. the member ID as it's being used in your system). If provided then this can be used to query & update members. This field will be treated as unique within the program, and cannot be updated at a later stage.
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
     * Grouping Identifier can be used to group members under the same membership (i.e. couple).
     *
     * Generated from protobuf field <code>string groupingIdentifier = 3;</code>
     * @return string
     */
    public function getGroupingIdentifier()
    {
        return $this->groupingIdentifier;
    }

    /**
     * Grouping Identifier can be used to group members under the same membership (i.e. couple).
     *
     * Generated from protobuf field <code>string groupingIdentifier = 3;</code>
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
     * Indicates the ID of the tier this member is in.
     *
     * Generated from protobuf field <code>string tierId = 4;</code>
     * @return string
     */
    public function getTierId()
    {
        return $this->tierId;
    }

    /**
     * Indicates the ID of the tier this member is in.
     *
     * Generated from protobuf field <code>string tierId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTierId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tierId = $var;

        return $this;
    }

    /**
     * Indicates the ID of the program this member is in.
     *
     * Generated from protobuf field <code>string programId = 5;</code>
     * @return string
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Indicates the ID of the program this member is in.
     *
     * Generated from protobuf field <code>string programId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setProgramId($var)
    {
        GPBUtil::checkString($var, True);
        $this->programId = $var;

        return $this;
    }

    /**
     * Personal details of the member.
     *
     * Generated from protobuf field <code>.io.Person person = 6;</code>
     * @return \Io\Person|null
     */
    public function getPerson()
    {
        return isset($this->person) ? $this->person : null;
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
     * Personal details of the member.
     *
     * Generated from protobuf field <code>.io.Person person = 6;</code>
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
     * Any other meta fields for the member that are not covered in the protocol (i.e. you might want to captures sign-up location, and favorite coffee, for segmenting later on).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

    /**
     * Any other meta fields for the member that are not covered in the protocol (i.e. you might want to captures sign-up location, and favorite coffee, for segmenting later on).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 7;</code>
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
     * Indicates if the member opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 13;</code>
     * @return bool
     */
    public function getOptOut()
    {
        return $this->optOut;
    }

    /**
     * Indicates if the member opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 13;</code>
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
     * Points is formatted differently based on what is set on a program level. Program points.balance field can be set to: `int`, `double` or `money`.
     *
     * Generated from protobuf field <code>float points = 14;</code>
     * @return float
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Points is formatted differently based on what is set on a program level. Program points.balance field can be set to: `int`, `double` or `money`.
     *
     * Generated from protobuf field <code>float points = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setPoints($var)
    {
        GPBUtil::checkFloat($var);
        $this->points = $var;

        return $this;
    }

    /**
     * Secondary Points is formatted differently based on what is set on a program level. Program secondaryPoints.balance field can be set to: `int`, `double` or `money`. Field can be utilised if your program tracks two points, i.e. loyalty point balance, and pre-paid cash balance.
     *
     * Generated from protobuf field <code>float secondaryPoints = 15;</code>
     * @return float
     */
    public function getSecondaryPoints()
    {
        return $this->secondaryPoints;
    }

    /**
     * Secondary Points is formatted differently based on what is set on a program level. Program secondaryPoints.balance field can be set to: `int`, `double` or `money`. Field can be utilised if your program tracks two points, i.e. loyalty point balance, and pre-paid cash balance.
     *
     * Generated from protobuf field <code>float secondaryPoints = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setSecondaryPoints($var)
    {
        GPBUtil::checkFloat($var);
        $this->secondaryPoints = $var;

        return $this;
    }

    /**
     * Tier points can be set for programs that award tiers based on dedicated tier points. Tier points indicates the current amount of tier points someone has, and can be used by a member to check how many more tier points are required to switch to the next tier.
     *
     * Generated from protobuf field <code>uint32 tierPoints = 16;</code>
     * @return int
     */
    public function getTierPoints()
    {
        return $this->tierPoints;
    }

    /**
     * Tier points can be set for programs that award tiers based on dedicated tier points. Tier points indicates the current amount of tier points someone has, and can be used by a member to check how many more tier points are required to switch to the next tier.
     *
     * Generated from protobuf field <code>uint32 tierPoints = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setTierPoints($var)
    {
        GPBUtil::checkUint32($var);
        $this->tierPoints = $var;

        return $this;
    }

    /**
     * Indicates when the membership card expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 18;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiryDate()
    {
        return isset($this->expiryDate) ? $this->expiryDate : null;
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
     * Indicates when the membership card expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 18;</code>
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
     * Member status.
     *
     * Generated from protobuf field <code>.members.MemberStatus status = 19;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Member status.
     *
     * Generated from protobuf field <code>.members.MemberStatus status = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Members\MemberStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 20;</code>
     * @return \Io\PassOverrides|null
     */
    public function getPassOverrides()
    {
        return isset($this->passOverrides) ? $this->passOverrides : null;
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
     * Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 20;</code>
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
     * Pass Metadata.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 21;</code>
     * @return \Io\Metadata|null
     */
    public function getPassMetaData()
    {
        return isset($this->passMetaData) ? $this->passMetaData : null;
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
     * Pass Metadata.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 21;</code>
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
     * placeholder for notes.
     *
     * Generated from protobuf field <code>repeated .io.Note notes = 26;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * placeholder for notes.
     *
     * Generated from protobuf field <code>repeated .io.Note notes = 26;</code>
     * @param \Io\Note[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Note::class);
        $this->notes = $arr;

        return $this;
    }

    /**
     * The date the current tier was awarded.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp currentTierAwarded = 27;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCurrentTierAwarded()
    {
        return isset($this->currentTierAwarded) ? $this->currentTierAwarded : null;
    }

    public function hasCurrentTierAwarded()
    {
        return isset($this->currentTierAwarded);
    }

    public function clearCurrentTierAwarded()
    {
        unset($this->currentTierAwarded);
    }

    /**
     * The date the current tier was awarded.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp currentTierAwarded = 27;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCurrentTierAwarded($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->currentTierAwarded = $var;

        return $this;
    }

    /**
     * The date the current tier expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp currentTierExpires = 28;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCurrentTierExpires()
    {
        return isset($this->currentTierExpires) ? $this->currentTierExpires : null;
    }

    public function hasCurrentTierExpires()
    {
        return isset($this->currentTierExpires);
    }

    public function clearCurrentTierExpires()
    {
        unset($this->currentTierExpires);
    }

    /**
     * The date the current tier expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp currentTierExpires = 28;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCurrentTierExpires($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->currentTierExpires = $var;

        return $this;
    }

    /**
     * The date the member was created in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 29;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreated()
    {
        return isset($this->created) ? $this->created : null;
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
     * The date the member was created in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 29;</code>
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
     * The date the member was last updated in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 30;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdated()
    {
        return isset($this->updated) ? $this->updated : null;
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
     * The date the member was last updated in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 30;</code>
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
     * Optional field that holds the member profile image. Can either be an image URL or base64 image string.
     *
     * Generated from protobuf field <code>string profileImage = 31;</code>
     * @return string
     */
    public function getProfileImage()
    {
        return $this->profileImage;
    }

    /**
     * Optional field that holds the member profile image. Can either be an image URL or base64 image string.
     *
     * Generated from protobuf field <code>string profileImage = 31;</code>
     * @param string $var
     * @return $this
     */
    public function setProfileImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->profileImage = $var;

        return $this;
    }

}

