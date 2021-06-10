<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/single_use_coupons/a_rpc.proto

namespace GPBMetadata\Io\SingleUseCoupons;

class ARpc
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        \GPBMetadata\Io\Common\Pagination::initOnce();
        \GPBMetadata\Io\Common\Filter::initOnce();
        \GPBMetadata\Io\Common\Reporting::initOnce();
        \GPBMetadata\Io\Common\Personal::initOnce();
        \GPBMetadata\Io\SingleUseCoupons\Campaign::initOnce();
        \GPBMetadata\Io\SingleUseCoupons\Offer::initOnce();
        \GPBMetadata\Io\SingleUseCoupons\Coupon::initOnce();
        $pool->internalAddGeneratedFile(
            '
�K
!io/single_use_coupons/a_rpc.protosingle_use_couponsgoogle/api/annotations.protoio/common/common_objects.protoio/common/pagination.protoio/common/filter.protoio/common/reporting.protoio/common/personal.proto$io/single_use_coupons/campaign.proto!io/single_use_coupons/offer.proto"io/single_use_coupons/coupon.proto.protoc-gen-openapiv2/options/annotations.proto2�@
SingleUseCoupons�
createCouponCampaign".single_use_coupons.CouponCampaign.io.Id"|���"/coupon/singleUse/campaign:*�AT
Coupon CampaignsCreate Coupon Campaign(Creates a new Single Use Coupon Campaign�
updateCouponCampaign".single_use_coupons.CouponCampaign".single_use_coupons.CouponCampaign"t���/coupon/singleUse/campaign:*�AL
Coupon CampaignsUpdate Coupon Campaign Updates an existing Pass Project�
getCouponCampaign.io.Id".single_use_coupons.CouponCampaign"s���!/coupon/singleUse/campaign/{id}�AI
Coupon CampaignsGet Coupon Campaign Gets an existing Coupon Campaign�
deleteCouponCampaign.io.Id.google.protobuf.Empty"����$*/coupon/singleUse/campaign/{id}:*�A�
Coupon CampaignsDelete Coupon Campaign�Deletes an existing Coupon Campaign by id. Deleting a Coupon Campaign results in the related offer being deleted, and all coupons being invalidated in the customers Mobile Wallet; rendering them unusable. This method needs to be used with care, this is irreversible.�
listCouponCampaignsDeprecated.io.Pagination".single_use_coupons.CouponCampaign"����/coupon/singleUse/campaigns�A�
Coupon Campaigns"List Coupon Campaigns [DEPRECATED]][DEPRECATED: OR operator is not supported] Lists all Coupon Campaigns for the logged in user.0�
listCouponCampaigns.io.Filters".single_use_coupons.CouponCampaign"����%" /coupon/singleUse/campaigns/list:*�A�
Coupon CampaignsList Coupon Campaigns�Lists all Coupon Campaigns for the logged in user.

<span style="font-weight:bold">About filter field names, operators and sample payloads:</span> <a target="_blank" href="https://help.passkit.com/en/articles/4130967-coupon-protocol-filtering-listing-and-counting-by-api#filter-campaigns">https://help.passkit.com/en/articles/4130967-coupon-protocol-filtering-listing-and-counting-by-api#filter-campaigns</a>0�
getAnalytics.io.AnalyticsRequest3.single_use_coupons.CouponCampaignAnalyticsResponse"����0./coupon/singleUse/campaign/{classId}/analytics�A]
Coupon CampaignsGet Coupon Campaign Analytics*Retrieves protocol specific analytics data�
createCouponOffer.single_use_coupons.CouponOffer.io.Id"e���"/coupon/singleUse/offer:*�A@
Coupon OffersCreate Coupon OfferCreates a new Coupon Offer�
updateCouponOffer.single_use_coupons.CouponOffer.single_use_coupons.CouponOffer"k���/coupon/singleUse/offer:*�AF
Coupon OffersUpdate Coupon Offer Updates an existing Coupon Offer�
getCouponOffer.io.Id.single_use_coupons.CouponOffer"g���/coupon/singleUse/offer/{id}�A@
Coupon OffersGet Coupon OfferGets an existing Coupon Offer�
deleteCouponOffer.io.Id.google.protobuf.Empty"����!*/coupon/singleUse/offer/{id}:*�A�
Coupon OffersDelete Coupon Offer�Deletes an existing Coupon Offer by id. Deleting a Coupon Offer results in all coupons being invalidated in the customers Mobile Wallet; rendering them unusable. Needs to be used with care, this is irreversible.�
listCouponOffersDeprecated5.single_use_coupons.CouponOffersListRequestDeprecated.single_use_coupons.CouponOffer"����/coupon/singleUse/offers�A�
Coupon OffersList Coupon Offers [DEPRECATED]R[DEPRECATED: OR operator is not supported] Lists all Coupon Offers for a campaign.0�
listCouponOffers+.single_use_coupons.CouponOffersListRequest.single_use_coupons.CouponOffer"����""/coupon/singleUse/offers/list:*�A�
Coupon OffersList Coupon Offers�Lists all Coupon Offers for a campaign.

<span style="font-weight:bold">About filter field names, operators and sample payloads:</span> <a target="_blank" href="https://help.passkit.com/en/articles/4130967-coupon-protocol-filtering-listing-and-counting-by-api#filter-offers">https://help.passkit.com/en/articles/4130967-coupon-protocol-filtering-listing-and-counting-by-api#filter-offers</a>0�
createCoupon.single_use_coupons.Coupon.io.Id"[���"/coupon/singleUse/coupon:*�A5
CouponsCreate CouponCreates a new unique Coupon�
updateCoupon.single_use_coupons.Coupon.io.Id"Z���/coupon/singleUse/coupon:*�A4
CouponsUpdate CouponUpdates an existing Coupon�
streamCouponUpdates.single_use_coupons.Coupon.io.Id"�A|
Coupons\'Stream Coupon Updates (gRPC SDKss only)HUpdates existing Coupon records via stream. To be used for batch update.(0�
redeemCoupon.single_use_coupons.Coupon.io.Id"����$/coupon/singleUse/coupon/redeem:*�A�
CouponsRedeem Coupon�Redeems an existing Coupon. Use this endpoint when you want to capture redemption data and trigger the switch to the redemption design of the coupon. The coupon cannot be used again after calling this endpoint, and is marked as redeemed.�
updateCouponExternalId..single_use_coupons.CouponNewExternalIdRequest.io.Id"����(#/coupon/singleUse/coupon/externalId:*�A�
CouponsUpdate Coupon External Id`Updates an external id of an existing coupon. Extenal id needs to be unique within the campaign.�
streamCouponRedemptions.single_use_coupons.Coupon.io.Id"��A�
Coupons*Stream Coupon Redemptions (gRPC SDKs only)LRedeems existing Coupon records via stream. To be used for batch redemption.(0�
getCouponById.io.Id.single_use_coupons.Coupon"Y���/coupon/singleUse/coupon/{id}�A1
CouponsGet Coupon by IDGets a Coupon record�
getCouponByExternalId%.single_use_coupons.ExternalIdRequest.single_use_coupons.Coupon"����EC/coupon/singleUse/coupon/externalId/{couponCampaignId}/{externalId}�AI
CouponsGet Coupon by External ID#Gets a Coupon record by External ID�

voidCoupon.single_use_coupons.Coupon.google.protobuf.Empty"����*/coupon/singleUse/coupon:*�A�
CouponsVoid Coupon�Voids (deletes) an existing Coupon by ID or External ID. Invalidates the coupon in the customers Mobile Wallet; rendering it useless. This method is irreversible and should be used with care.�
%listCouponsByCouponCampaignDeprecated).single_use_coupons.ListRequestDeprecated.single_use_coupons.Coupon"����.,/coupon/singleUse/coupons/{couponCampaignId}�A�
CouponsList Coupons [DEPRECATED]g[DEPRECATED: OR operator is not supported] List all coupons for a Coupon Campaign. Supports pagination.0�
listCouponsByCouponCampaign.single_use_coupons.ListRequest.single_use_coupons.Coupon"����6"1/coupon/singleUse/coupons/list/{couponCampaignId}:*�A�
CouponsList Coupons�List all coupons for a Coupon Campaign. Supports pagination.

<span style="font-weight:bold">About filter field names, operators and sample payloads:</span> <a target="_blank" href="https://help.passkit.com/en/articles/4130967-coupon-protocol-filtering-listing-and-counting-by-api#filter-coupons">https://help.passkit.com/en/articles/4130967-coupon-protocol-filtering-listing-and-counting-by-api#filter-coupons</a>0�
&countCouponsByCouponCampaignDeprecated).single_use_coupons.ListRequestDeprecated	.io.Count"����42/coupon/singleUse/coupons/count/{couponCampaignId}�Az
CouponsCount Coupons [DEPRECATED]S[DEPRECATED: OR operator is not supported] Count all coupons for a Coupon Campaign.�
countCouponsByCouponCampaign.single_use_coupons.ListRequest	.io.Count"����7"2/coupon/singleUse/coupons/count/{couponCampaignId}:*�A�
CouponsCount Coupons�Count all coupons for a Coupon Campaign.

<span style="font-weight:bold">About filter field names, operators and sample payloads:</span> <a target="_blank" href="https://help.passkit.com/en/articles/4130967-coupon-protocol-filtering-listing-and-counting-by-api#filter-coupons">https://help.passkit.com/en/articles/4130967-coupon-protocol-filtering-listing-and-counting-by-api#filter-coupons</a>�
patchPerson.io.PersonRequest.io.Id"����$2/coupon/singleUse/coupon/person:*�A\\
CouponsUpdate Personal Information4Updates personal information of a coupon pass holder�
copyCouponCampaign\'.single_use_coupons.CampaignCopyRequest.io.Id"r���$"/coupon/singleUse/campaign/copy:*�AE
Coupon CampaignsCopy Campaign"Copies an existing campaign record�
getMetaKeysForCampaign.io.Id.io.Strings"����&$/coupon/singleUse/campaign/meta/{id}�A�
Coupon CampaignsGet Meta Keys for a Campaign^Returns a list of distinct meta field keys. Can be used for building filters / table headings.B�
!com.passkit.grpc.SingleUseCouponsZ7stash.passkit.com/io/model/sdk/go/io/single_use_coupons�PassKit.Grpc.SingleUseCoupons�A��
PassKit Single Use Coupon API�This protocol is suit for cases where the user requires a clean and simple single use coupon for short term coupon campaigns in Apple Wallet and Google Pay.8https://passkit.com/legal/terms-of-subscription-service/"?
PassKit Supporthttps://docs.passkit.iosupport@passkit.com21.0*2application/json:application/jsonR9
2002
(Returned when the request is successful.
�R4
400-
+Returned when wrong user input is provided.R0
401)
\'Returned when the user is unauthorized.RP
403I
GReturned when the user does not have permission to access the resource.R;
4044
*Returned when the resource does not exist.
�R<
5005
+Returned when there is an unexpected error.
�RW
503P
NServer is unavailable. Back off for 250ms and repeat request until successful.Z>
<

apiKeyAuth.JWT Authentication token.Authorization b


apiKeyAuth bproto3'
        , true);

        static::$is_initialized = true;
    }
}

