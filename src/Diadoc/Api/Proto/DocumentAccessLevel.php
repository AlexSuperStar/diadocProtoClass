<?php
/**
 * Auto generated from OrganizationUserPermissions.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * DocumentAccessLevel enum
 */
final class DocumentAccessLevel
{
    const UnknownDocumentAccessLevel = -1;
    const DepartmentOnly = 0;
    const DepartmentAndSubdepartments = 1;
    const AllDocuments = 2;
    const SelectedDepartments = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownDocumentAccessLevel' => self::UnknownDocumentAccessLevel,
            'DepartmentOnly' => self::DepartmentOnly,
            'DepartmentAndSubdepartments' => self::DepartmentAndSubdepartments,
            'AllDocuments' => self::AllDocuments,
            'SelectedDepartments' => self::SelectedDepartments,
        );
    }
}
}