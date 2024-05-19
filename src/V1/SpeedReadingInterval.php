<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/traffic.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Traffic density indicator on a contiguous segment of a path. Given a path
 * with points P_0, P_1, ... , P_N (zero-based index), the SpeedReadingInterval
 * defines an interval and describes its traffic using the following categories.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.SpeedReadingInterval</code>
 */
class SpeedReadingInterval extends \Google\Protobuf\Internal\Message
{
    /**
     * The starting index of this interval in the path.
     * In JSON, when the index is 0, the field will appear to be unpopulated.
     *
     * Generated from protobuf field <code>int32 start_polyline_point_index = 1;</code>
     */
    protected $start_polyline_point_index = 0;
    /**
     * The ending index of this interval in the path.
     * In JSON, when the index is 0, the field will appear to be unpopulated.
     *
     * Generated from protobuf field <code>int32 end_polyline_point_index = 2;</code>
     */
    protected $end_polyline_point_index = 0;
    /**
     * Traffic speed in this interval.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.SpeedReadingInterval.Speed speed = 3;</code>
     */
    protected $speed = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $start_polyline_point_index
     *           The starting index of this interval in the path.
     *           In JSON, when the index is 0, the field will appear to be unpopulated.
     *     @type int $end_polyline_point_index
     *           The ending index of this interval in the path.
     *           In JSON, when the index is 0, the field will appear to be unpopulated.
     *     @type int $speed
     *           Traffic speed in this interval.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\Traffic::initOnce();
        parent::__construct($data);
    }

    /**
     * The starting index of this interval in the path.
     * In JSON, when the index is 0, the field will appear to be unpopulated.
     *
     * Generated from protobuf field <code>int32 start_polyline_point_index = 1;</code>
     * @return int
     */
    public function getStartPolylinePointIndex()
    {
        return $this->start_polyline_point_index;
    }

    /**
     * The starting index of this interval in the path.
     * In JSON, when the index is 0, the field will appear to be unpopulated.
     *
     * Generated from protobuf field <code>int32 start_polyline_point_index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStartPolylinePointIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->start_polyline_point_index = $var;

        return $this;
    }

    /**
     * The ending index of this interval in the path.
     * In JSON, when the index is 0, the field will appear to be unpopulated.
     *
     * Generated from protobuf field <code>int32 end_polyline_point_index = 2;</code>
     * @return int
     */
    public function getEndPolylinePointIndex()
    {
        return $this->end_polyline_point_index;
    }

    /**
     * The ending index of this interval in the path.
     * In JSON, when the index is 0, the field will appear to be unpopulated.
     *
     * Generated from protobuf field <code>int32 end_polyline_point_index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEndPolylinePointIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->end_polyline_point_index = $var;

        return $this;
    }

    /**
     * Traffic speed in this interval.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.SpeedReadingInterval.Speed speed = 3;</code>
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Traffic speed in this interval.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.SpeedReadingInterval.Speed speed = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSpeed($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\V1\SpeedReadingInterval\Speed::class);
        $this->speed = $var;

        return $this;
    }

}
