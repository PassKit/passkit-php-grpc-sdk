<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Single Use Coupon Protocol is suit for cases where the user requires a clean and simple single use coupon for short term coupon campaigns in Apple Wallet and Google Pay.
namespace Single_use_coupons;

/**
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
     * @param \Single_use_coupons\CouponCampaign $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createCouponCampaign(\Single_use_coupons\CouponCampaign $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/createCouponCampaign',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\CouponCampaign $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateCouponCampaign(\Single_use_coupons\CouponCampaign $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/updateCouponCampaign',
        $argument,
        ['\Single_use_coupons\CouponCampaign', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getCouponCampaign(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getCouponCampaign',
        $argument,
        ['\Single_use_coupons\CouponCampaign', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteCouponCampaign(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/deleteCouponCampaign',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listCouponCampaignsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponCampaignsDeprecated',
        $argument,
        ['\Single_use_coupons\CouponCampaign', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listCouponCampaigns(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponCampaigns',
        $argument,
        ['\Single_use_coupons\CouponCampaign', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\AnalyticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getAnalytics(\Io\AnalyticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getAnalytics',
        $argument,
        ['\Single_use_coupons\CouponCampaignAnalyticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\CouponOffer $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createCouponOffer(\Single_use_coupons\CouponOffer $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/createCouponOffer',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\CouponOffer $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateCouponOffer(\Single_use_coupons\CouponOffer $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/updateCouponOffer',
        $argument,
        ['\Single_use_coupons\CouponOffer', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getCouponOffer(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getCouponOffer',
        $argument,
        ['\Single_use_coupons\CouponOffer', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteCouponOffer(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/deleteCouponOffer',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\CouponOffersListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listCouponOffersDeprecated(\Single_use_coupons\CouponOffersListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponOffersDeprecated',
        $argument,
        ['\Single_use_coupons\CouponOffer', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\CouponOffersListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listCouponOffers(\Single_use_coupons\CouponOffersListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponOffers',
        $argument,
        ['\Single_use_coupons\CouponOffer', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\Coupon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createCoupon(\Single_use_coupons\Coupon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/createCoupon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\Coupon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateCoupon(\Single_use_coupons\Coupon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/updateCoupon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function streamCouponUpdates($metadata = [], $options = []) {
        return $this->_bidiRequest('/single_use_coupons.SingleUseCoupons/streamCouponUpdates',
        ['\Io\Id','decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\Coupon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function redeemCoupon(\Single_use_coupons\Coupon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/redeemCoupon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function streamCouponRedemptions($metadata = [], $options = []) {
        return $this->_bidiRequest('/single_use_coupons.SingleUseCoupons/streamCouponRedemptions',
        ['\Io\Id','decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getCouponById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getCouponById',
        $argument,
        ['\Single_use_coupons\Coupon', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\ExternalIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getCouponByExternalId(\Single_use_coupons\ExternalIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getCouponByExternalId',
        $argument,
        ['\Single_use_coupons\Coupon', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\Coupon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function voidCoupon(\Single_use_coupons\Coupon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/voidCoupon',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listCouponsByCouponCampaignDeprecated(\Single_use_coupons\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponsByCouponCampaignDeprecated',
        $argument,
        ['\Single_use_coupons\Coupon', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listCouponsByCouponCampaign(\Single_use_coupons\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/single_use_coupons.SingleUseCoupons/listCouponsByCouponCampaign',
        $argument,
        ['\Single_use_coupons\Coupon', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countCouponsByCouponCampaignDeprecated(\Single_use_coupons\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/countCouponsByCouponCampaignDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countCouponsByCouponCampaign(\Single_use_coupons\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/countCouponsByCouponCampaign',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Single_use_coupons\CampaignCopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function copyCouponCampaign(\Single_use_coupons\CampaignCopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/copyCouponCampaign',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getMetaKeysForCampaign(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/single_use_coupons.SingleUseCoupons/getMetaKeysForCampaign',
        $argument,
        ['\Io\Strings', 'decode'],
        $metadata, $options);
    }

}
