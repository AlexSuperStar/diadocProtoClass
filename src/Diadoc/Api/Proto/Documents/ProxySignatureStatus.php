<?php
/**
* Auto generated from Document.proto
*
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * ProxySignatureStatus enum
 */
final class ProxySignatureStatus
{
    const UnknownProxySignatureStatus = 0;
    const ProxySignatureStatusNone = 1;
    const WaitingForProxySignature = 2;
    const WithProxySignature = 3;
    const ProxySignatureRejected = 4;
    const InvalidProxySignature = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownProxySignatureStatus' => self::UnknownProxySignatureStatus,
            'ProxySignatureStatusNone' => self::ProxySignatureStatusNone,
            'WaitingForProxySignature' => self::WaitingForProxySignature,
            'WithProxySignature' => self::WithProxySignature,
            'ProxySignatureRejected' => self::ProxySignatureRejected,
            'InvalidProxySignature' => self::InvalidProxySignature,
        );
    }
}
}