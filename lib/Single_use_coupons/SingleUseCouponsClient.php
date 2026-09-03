<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Single Use Coupon Protocol is suit for cases where the user requires a clean and simple single use coupon for short term coupon campaigns in Apple Wallet and Google Wallet.
namespace Single_use_coupons;

/**
 * Manages coupon campaigns, offers, coupon issuance, redemption, and voiding. Create a campaign and offer before issuing coupons.
 */
class SingleUseCouponsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a new single-use coupon campaign with design, rules, and configuration settings. Required fields: name and status.
     * @param \Single_use_coupons\CouponCampaign $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createCouponCampaign(\Single_use_coupons\CouponCampaign $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/createCouponCampaign',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the configuration of an existing coupon campaign. Required fields: campaignId.
     * @param \Single_use_coupons\CouponCampaign $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Single_use_coupons\CouponCampaign>
     */
    public function updateCouponCampaign(\Single_use_coupons\CouponCampaign $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/updateCouponCampaign',
        $argument,
        ['\Single_use_coupons\CouponCampaign', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the details of a specific coupon campaign by id. Required fields: campaignId.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Single_use_coupons\CouponCampaign>
     */
    public function getCouponCampaign(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getCouponCampaign',
        $argument,
        ['\Single_use_coupons\CouponCampaign', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a coupon campaign by id. This also deletes its associated offer and voids all related coupons. Required fields: campaignId. Use with caution, as this action is irreversible.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteCouponCampaign(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/deleteCouponCampaign',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all coupon campaigns using basic pagination. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use the updated listCouponCampaigns call instead  as OR operator is not supported.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listCouponCampaignsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponCampaignsDeprecated',
        $argument,
        ['\Single_use_coupons\CouponCampaign', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists coupon campaigns with support for filters, sorting, and pagination.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listCouponCampaigns(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponCampaigns',
        $argument,
        ['\Single_use_coupons\CouponCampaign', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns analytics data (e.g., redemptions, activations) for a given coupon campaign. Required fields: classId (e.g. campaignId) and protocol (query parameter).
     * @param \Io\AnalyticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Single_use_coupons\CouponCampaignAnalyticsResponse>
     */
    public function getAnalytics(\Io\AnalyticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getAnalytics',
        $argument,
        ['\Single_use_coupons\CouponCampaignAnalyticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates an offer within a coupon campaign, including its pass design and redemption rules. Required fields: campaignId, offerTitle, offerDetails, beforeRedeemPassTemplateId.
     * @param \Single_use_coupons\CouponOffer $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createCouponOffer(\Single_use_coupons\CouponOffer $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/createCouponOffer',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing coupon offer’s settings, visuals, or redemption configuration. Required fields: campaignId, offerTitle, offerDetails, beforeRedeemPassTemplateId.
     * @param \Single_use_coupons\CouponOffer $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Single_use_coupons\CouponOffer>
     */
    public function updateCouponOffer(\Single_use_coupons\CouponOffer $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/updateCouponOffer',
        $argument,
        ['\Single_use_coupons\CouponOffer', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the full configuration of a coupon offer by ID. Required fields: offerId.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Single_use_coupons\CouponOffer>
     */
    public function getCouponOffer(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getCouponOffer',
        $argument,
        ['\Single_use_coupons\CouponOffer', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a coupon offer and invalidates all associated coupons. Required fields: offerId. Use with caution, as this action is irreversible.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteCouponOffer(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/deleteCouponOffer',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all coupon offers using basic filters. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use the updated listCouponOffers call instead as OR operator is not supported.
     * @param \Single_use_coupons\CouponOffersListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listCouponOffersDeprecated(\Single_use_coupons\CouponOffersListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponOffersDeprecated',
        $argument,
        ['\Single_use_coupons\CouponOffer', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists coupon offers with support for filters, sorting, and pagination. Required fields: campaignId.
     * @param \Single_use_coupons\CouponOffersListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listCouponOffers(\Single_use_coupons\CouponOffersListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponOffers',
        $argument,
        ['\Single_use_coupons\CouponOffer', 'decode'],
        $metadata, $options);
    }

    /**
     * Issues a unique coupon for an offer in a campaign. Required fields: campaignId, offerId, pass data.
     * @param \Single_use_coupons\Coupon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createCoupon(\Single_use_coupons\Coupon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/createCoupon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing coupon’s metadata or personalisation. Required fields: coupon id ,or externalId, offerId and campaignId.
     * @param \Single_use_coupons\Coupon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function updateCoupon(\Single_use_coupons\Coupon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/updateCoupon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Streams updates for multiple coupons for batch processing.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function streamCouponUpdates($metadata = [], $options = []) {
        return $this->_bidiRequest('/single_use_coupons.SingleUseCoupons/streamCouponUpdates',
        ['\Io\Id','decode'],
        $metadata, $options);
    }

    /**
     * Marks a coupon as redeemed and applies its redemption-specific design. Required fields: coupon ID, or externalId with offerId and campaignId.
     * @param \Single_use_coupons\Coupon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function redeemCoupon(\Single_use_coupons\Coupon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/redeemCoupon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the external ID of an existing coupon. Required fields: coupon id , or externalId, newExternalId and campaignId.
     * @param \Single_use_coupons\CouponNewExternalIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function updateCouponExternalId(\Single_use_coupons\CouponNewExternalIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/updateCouponExternalId',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Streams coupon redemptions for batch processing.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function streamCouponRedemptions($metadata = [], $options = []) {
        return $this->_bidiRequest('/single_use_coupons.SingleUseCoupons/streamCouponRedemptions',
        ['\Io\Id','decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a coupon by its PassKit ID. Required fields: couponId.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Single_use_coupons\Coupon>
     */
    public function getCouponById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getCouponById',
        $argument,
        ['\Single_use_coupons\Coupon', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a coupon using an external ID and campaign ID. Required fields: externalId and couponCampaignId.
     * @param \Single_use_coupons\ExternalIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Single_use_coupons\Coupon>
     */
    public function getCouponByExternalId(\Single_use_coupons\ExternalIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getCouponByExternalId',
        $argument,
        ['\Single_use_coupons\Coupon', 'decode'],
        $metadata, $options);
    }

    /**
     * Voids a coupon and invalidates it in the customer’s wallet. Required fields: coupon ID, or externalId with offerId and campaignId. This action is irreversible.
     * @param \Single_use_coupons\Coupon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function voidCoupon(\Single_use_coupons\Coupon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/voidCoupon',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Voids multiple coupons matching the given filters. All affected passes are invalidated. Required fields: classId, protocol and filters. Use with caution, as this action is irreversible.
     * @param \Io\BulkPassActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function bulkVoidCoupons(\Io\BulkPassActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/bulkVoidCoupons',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all coupons for a campaign using basic pagination. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use the updated listCouponsByCouponCampaign call instead as OR operator is not supported.
     * @param \Single_use_coupons\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listCouponsByCouponCampaignDeprecated(\Single_use_coupons\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponsByCouponCampaignDeprecated',
        $argument,
        ['\Single_use_coupons\Coupon', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all coupons for a campaign using filters and pagination. Required fields: couponCampaignId.
     * @param \Single_use_coupons\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listCouponsByCouponCampaign(\Single_use_coupons\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponsByCouponCampaign',
        $argument,
        ['\Single_use_coupons\Coupon', 'decode'],
        $metadata, $options);
    }

    /**
     * Counts all coupons for a campaign. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use the updated countCouponsByCouponCampaign call instead as OR operator is not supported.
     * @param \Single_use_coupons\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countCouponsByCouponCampaignDeprecated(\Single_use_coupons\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/countCouponsByCouponCampaignDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Counts all coupons for a campaign using advanced filters. Required fields: couponCampaignId.
     * @param \Single_use_coupons\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countCouponsByCouponCampaign(\Single_use_coupons\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/countCouponsByCouponCampaign',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the personal information of the coupon holder (e.g., name, email). Required fields: couponId, or externalId + classId.
     * @param \Io\PersonRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function patchPerson(\Io\PersonRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/patchPerson',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a copy of an existing coupon campaign. Required fields: campaignId.
     * @param \Single_use_coupons\CampaignCopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function copyCouponCampaign(\Single_use_coupons\CampaignCopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/copyCouponCampaign',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves meta keys (custom fields) for a specific campaign. Required fields: campaignId.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Strings>
     */
    public function getMetaKeysForCampaign(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getMetaKeysForCampaign',
        $argument,
        ['\Io\Strings', 'decode'],
        $metadata, $options);
    }

}
