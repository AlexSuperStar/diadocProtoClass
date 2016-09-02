<?php
/**
 * Auto generated from Docflow.proto at 2016-09-02 13:33:34
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * DocflowStatusSeverity enum
 */
final class DocflowStatusSeverity
{
    const UnknownDocflowStatusSeverity = 0;
    const Info = 1;
    const Success = 2;
    const Warning = 3;
    const Error = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownDocflowStatusSeverity' => self::UnknownDocflowStatusSeverity,
            'Info' => self::Info,
            'Success' => self::Success,
            'Warning' => self::Warning,
            'Error' => self::Error,
        );
    }
}
}