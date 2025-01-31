<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/event_tickets/event.proto

namespace GPBMetadata\Io\EventTickets;

class Event
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Io\Common\Billing::initOnce();
        \GPBMetadata\Io\Common\Metrics::initOnce();
        \GPBMetadata\Io\Common\Filter::initOnce();
        \GPBMetadata\Io\Common\Semantics::initOnce();
        \GPBMetadata\Io\EventTickets\Production::initOnce();
        \GPBMetadata\Io\EventTickets\Venue::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xCF\x1B\x0A\x1Cio/event_tickets/event.proto\x12\x0Devent_tickets\x1A\x17io/common/billing.proto\x1A\x17io/common/metrics.proto\x1A\x16io/common/filter.proto\x1A\x19io/common/semantics.proto\x1A!io/event_tickets/production.proto\x1A\x1Cio/event_tickets/venue.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\"\x92\x06\x0A\x05Event\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12-\x0A\x0Aproduction\x18\x02 \x01(\x0B2\x19.event_tickets.Production\x12#\x0A\x05venue\x18\x03 \x01(\x0B2\x14.event_tickets.Venue\x12-\x0A\x09doorsOpen\x18\x04 \x01(\x0B2\x1A.google.protobuf.Timestamp\x126\x0A\x12scheduledStartDate\x18\x05 \x01(\x0B2\x1A.google.protobuf.Timestamp\x123\x0A\x0FactualStartDate\x18\x06 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07endDate\x18\x07 \x01(\x0B2\x1A.google.protobuf.Timestamp\x120\x0A\x0CrelevantDate\x18\x08 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x18\x0A\x05quota\x18\x09 \x01(\x0B2\x09.io.Quota\x12#\x0A\x07metrics\x18\x0A \x01(\x0B2\x0B.io.MetricsB\x05\x92A\x02@\x01\x120\x0A\x0DrelevantDates\x18\x0D \x03(\x0B2\x19.event_tickets.EventHours\x12+\x0A\x0CsemanticTags\x18\x0E \x01(\x0B2\x15.io.EventSemanticTags\x122\x0A\x07created\x18\x0B \x01(\x0B2\x1A.google.protobuf.TimestampB\x05\x92A\x02@\x01\x122\x0A\x07updated\x18\x0C \x01(\x0B2\x1A.google.protobuf.TimestampB\x05\x92A\x02@\x01:\xA7\x01\x92A\xA3\x01\x0A\xA0\x01*\x05Event2vEvent is an instance of a Production; an event is showing; it holds the event start & end date/time and venue details.\xD2\x01\x0Aproduction\xD2\x01\x05venue\xD2\x01\x09startDate\"h\x0A\x0AEventHours\x12-\x0A\x09startTime\x18\x01 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07endTime\x18\x02 \x01(\x0B2\x1A.google.protobuf.Timestamp\"\xD0\x01\x0A\x10EventListRequest\x12\x16\x0A\x0CproductionId\x18\x01 \x01(\x09H\x00\x12\x17\x0A\x0DproductionUid\x18\x02 \x01(\x09H\x00\x12\x0F\x0A\x07venueId\x18\x03 \x01(\x09\x12\x1C\x0A\x07filters\x18\x04 \x01(\x0B2\x0B.io.Filters:N\x92AK\x0AI*\x12Event List Request2&Used to list events in the production.\xD2\x01\x0AproductionB\x0C\x0A\x0Aproduction\"\x96\x02\x0A\x0FGetEventRequest\x12\x16\x0A\x0CproductionId\x18\x01 \x01(\x09H\x00\x12\x17\x0A\x0DproductionUid\x18\x02 \x01(\x09H\x00\x12\x11\x0A\x07venueId\x18\x03 \x01(\x09H\x01\x12\x12\x0A\x08venueUid\x18\x04 \x01(\x09H\x01\x126\x0A\x12scheduledStartDate\x18\x05 \x01(\x0B2\x1A.google.protobuf.Timestamp:\\\x92AY\x0AW*\x11Get Event Request2!Used to retrieve an event record.\xD2\x01\x0Aproduction\xD2\x01\x05venue\xD2\x01\x09startDateB\x0C\x0A\x0AproductionB\x07\x0A\x05venue\"\xD7\x02\x0A\x1AEventLimitedFieldsResponse\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x126\x0A\x12scheduledStartDate\x18\x02 \x01(\x0B2\x1A.google.protobuf.Timestamp\x123\x0A\x0FactualStartDate\x18\x03 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07endDate\x18\x04 \x01(\x0B2\x1A.google.protobuf.Timestamp:\x92\x01\x92A\x8E\x01\x0A\x8B\x01*\x11Event (Light ver)2vEvent is an instance of a Production; an event is showing; it holds the event start & end date/time and venue details.\"\xF1\x05\x0A\x19EventLimitedFieldsRequest\x12\x14\x0A\x0CproductionId\x18\x01 \x01(\x09\x12\x0F\x0A\x07venueId\x18\x02 \x01(\x09\x12-\x0A\x09doorsOpen\x18\x03 \x01(\x0B2\x1A.google.protobuf.Timestamp\x126\x0A\x12scheduledStartDate\x18\x04 \x01(\x0B2\x1A.google.protobuf.Timestamp\x123\x0A\x0FactualStartDate\x18\x05 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07endDate\x18\x06 \x01(\x0B2\x1A.google.protobuf.Timestamp\x120\x0A\x0CrelevantDate\x18\x07 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x18\x0A\x05quota\x18\x08 \x01(\x0B2\x09.io.Quota\x12\x1C\x0A\x07metrics\x18\x09 \x01(\x0B2\x0B.io.Metrics\x120\x0A\x0DrelevantDates\x18\x0C \x03(\x0B2\x19.event_tickets.EventHours\x12+\x0A\x0CsemanticTags\x18\x0D \x01(\x0B2\x15.io.EventSemanticTags\x12+\x0A\x07created\x18\x0A \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07updated\x18\x0B \x01(\x0B2\x1A.google.protobuf.Timestamp:\xC0\x01\x92A\xBC\x01\x0A\xB9\x01*\x11Event (Light ver)2vEvent is an instance of a Production; an event is showing; it holds the event start & end date/time and venue details.\xD2\x01\x0CproductionId\xD2\x01\x07venueId\xD2\x01\x12scheduledStartDate\"\x97\x05\x0A\x11EventListResponse\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12B\x0A\x0Aproduction\x18\x02 \x01(\x0B2..event_tickets.ProductionLimitedFieldsResponse\x128\x0A\x05venue\x18\x03 \x01(\x0B2).event_tickets.VenueLimitedFieldsResponse\x12-\x0A\x09doorsOpen\x18\x04 \x01(\x0B2\x1A.google.protobuf.Timestamp\x126\x0A\x12scheduledStartDate\x18\x05 \x01(\x0B2\x1A.google.protobuf.Timestamp\x123\x0A\x0FactualStartDate\x18\x06 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07endDate\x18\x07 \x01(\x0B2\x1A.google.protobuf.Timestamp\x120\x0A\x0CrelevantDate\x18\x08 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x18\x0A\x05quota\x18\x09 \x01(\x0B2\x09.io.Quota\x12\x1C\x0A\x07metrics\x18\x0A \x01(\x0B2\x0B.io.Metrics\x12+\x0A\x07created\x18\x0B \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07updated\x18\x0C \x01(\x0B2\x1A.google.protobuf.Timestamp:k\x92Ah\x0Af*\x13Event List Response2OContains event search result. Production and venue objects have limited fields.Bo\x0A\x1Dcom.passkit.grpc.EventTicketsZ2stash.passkit.com/io/model/sdk/go/io/event_tickets\xAA\x02\x19PassKit.Grpc.EventTicketsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

