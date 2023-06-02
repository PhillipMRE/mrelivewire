<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'agent_create',
            ],
            [
                'id'    => 19,
                'title' => 'agent_edit',
            ],
            [
                'id'    => 20,
                'title' => 'agent_show',
            ],
            [
                'id'    => 21,
                'title' => 'agent_delete',
            ],
            [
                'id'    => 22,
                'title' => 'agent_access',
            ],
            [
                'id'    => 23,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 24,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 25,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 26,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 27,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 28,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 29,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 30,
                'title' => 'client_create',
            ],
            [
                'id'    => 31,
                'title' => 'client_edit',
            ],
            [
                'id'    => 32,
                'title' => 'client_show',
            ],
            [
                'id'    => 33,
                'title' => 'client_delete',
            ],
            [
                'id'    => 34,
                'title' => 'client_access',
            ],
            [
                'id'    => 35,
                'title' => 'blog_access',
            ],
            [
                'id'    => 36,
                'title' => 'post_create',
            ],
            [
                'id'    => 37,
                'title' => 'post_edit',
            ],
            [
                'id'    => 38,
                'title' => 'post_show',
            ],
            [
                'id'    => 39,
                'title' => 'post_delete',
            ],
            [
                'id'    => 40,
                'title' => 'post_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
