<?php
declare(strict_types=1);

namespace paroxity\portal\packet;

class ProtocolInfo
{

    public const AUTH_REQUEST_PACKET = 0xd0;
    public const AUTH_RESPONSE_PACKET = 0xd1;
    public const TRANSFER_REQUEST_PACKET = 0xd2;
    public const TRANSFER_RESPONSE_PACKET = 0xd3;
}