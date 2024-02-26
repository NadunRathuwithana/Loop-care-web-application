<?php

namespace App\Helpers;

class PermissionHelper
{
    /**
     * Retrieves the permissions for the user.
     *
     * This method returns an array of permissions based on the different modules and functionalities
     * available in the system. The permissions are obtained by merging the permissions returned by
     * the individual "set" methods for each module or functionality.
     *
     * @return array An array of permissions. Each element of the array represents a specific permission,
     *               and the array may contain one or more elements. The elements of the array are in the
     *               format of associative arrays, where the keys are the names of the permissions and the
     *               values are any additional information related to the permission.
     */
    public function getPermissions()
    {
        return array_merge(
            $this->setUserManagementPermissions(),
            $this->setFarmManagementPermission(),
            $this->setPlantManagementPermission(),
            $this->setEmployeeManagementPermission(),
            $this->setScheduleManagementPermission(),
            $this->setTaskManagementPermission(),
            $this->setInventoryManagementPermission(),
            $this->setReportManagementPermission(),
            //$this->setSettingsPermission()
        );
    }

    private function setUserManagementPermissions()
    {
        return array(
            [
                'name' => 'role-view',
                'permission_group' => 1
            ],
            [
                'name' => 'role-create',
                'permission_group' => 1
            ],
            [
                'name' => 'role-edit',
                'permission_group' => 1
            ],
            [
                'name' => 'role-delete',
                'permission_group' => 1
            ],
            [
                'name' => 'user-view',
                'permission_group' => 1
            ],
            [
                'name' => 'user-create',
                'permission_group' => 1
            ],
            [
                'name' => 'user-edit',
                'permission_group' => 1
            ],
            [
                'name' => 'user-delete',
                'permission_group' => 1
            ]
        );
    }

    private function setFarmManagementPermission()
    {
        return array(
            [
                'name' => 'farm-view',
                'permission_group' => 2
            ],
            [
                'name' => 'farm-create',
                'permission_group' => 2
            ],
            [
                'name' => 'farm-edit',
                'permission_group' => 2
            ],
            [
                'name' => 'farm-delete',
                'permission_group' => 2
            ]
        );
    }

    private function setPlantManagementPermission()
    {
        return array(
            [
                'name' => 'plant-view',
                'permission_group' => 3
            ],
            [
                'name' => 'plant-create',
                'permission_group' => 3
            ],
            [
                'name' => 'plant-edit',
                'permission_group' => 3
            ],
            [
                'name' => 'plant-delete',
                'permission_group' => 3
            ]
        );
    }

    private function setEmployeeManagementPermission()
    {
        return array(
            [
                'name' => 'employee-view',
                'permission_group' => 4
            ],
            [
                'name' => 'employee-create',
                'permission_group' => 4
            ],
            [
                'name' => 'employee-edit',
                'permission_group' => 4
            ],
            [
                'name' => 'employee-delete',
                'permission_group' => 4
            ]
        );
    }

    private function setScheduleManagementPermission()
    {
        return array(
            [
                'name' => 'schedule-view',
                'permission_group' => 5
            ],
            [
                'name' => 'schedule-create',
                'permission_group' => 5
            ],
            [
                'name' => 'schedule-edit',
                'permission_group' => 5
            ],
            [
                'name' => 'schedule-delete',
                'permission_group' => 5
            ]
        );
    }

    private function setTaskManagementPermission()
    {
        return array(
            [
                'name' => 'task-view',
                'permission_group' => 6
            ],
            [
                'name' => 'task-create',
                'permission_group' => 6
            ],
            [
                'name' => 'task-edit',
                'permission_group' => 6
            ],
            [
                'name' => 'task-delete',
                'permission_group' => 6
            ]
        );
    }

    private function setInventoryManagementPermission()
    {
        return array(
            [
                'name' => 'inventory-view',
                'permission_group' => 7
            ],
            [
                'name' => 'inventory-create',
                'permission_group' => 7
            ],
            [
                'name' => 'inventory-edit',
                'permission_group' => 7
            ],
            [
                'name' => 'inventory-delete',
                'permission_group' => 7
            ]
        );
    }

    private function setReportManagementPermission()
    {
        return array(
            [
                'name' => 'report-view',
                'permission_group' => 8
            ],
            [
                'name' => 'report-create',
                'permission_group' => 8
            ],
            [
                'name' => 'report-edit',
                'permission_group' => 8
            ],
            [
                'name' => 'report-delete',
                'permission_group' => 8
            ]
        );
    }

    private function setSettingsPermission()
    {
        return array(
            [
                'name' => 'setting-view',
                'permission_group' => 9
            ],
            [
                'name' => 'setting-create',
                'permission_group' => 9
            ],
            [
                'name' => 'report-edit',
                'permission_group' => 9
            ],
            [
                'name' => 'report-delete',
                'permission_group' => 9
            ]
        );
    }
}
