<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
# source: nacos.proto

namespace Hyperf\Nacos\Protobuf\GPBMetadata;

use Google\Protobuf\Internal\DescriptorPool;

class Nacos
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
nacos.proto"�
Metadata
type (	
clientIp (	\'
headers (2.Metadata.HeadersEntry.
HeadersEntry
key (	
value (	:8"J
Payload
metadata (2	.Metadata"
body (2.google.protobuf.Any28

RequestStream\'

requestStream.Payload.Payload" 02*
Request
request.Payload.Payload" 2>
BiRequestStream+
requestBiStream.Payload.Payload" (0B_
com.alibaba.nacos.api.grpc.autoP�Hyperf\Nacos\Protobuf�!Hyperf\Nacos\Protobuf\GPBMetadatabproto3',
            true
        );

        static::$is_initialized = true;
    }
}
