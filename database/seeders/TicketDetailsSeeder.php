<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Notice;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TicketDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ticket priorities
        DB::table('ticket_priorities')->insert(
            array(
                'title' => 'Low',
                'text_color' => '#000000',
                'bg_color' => '#d4edda',
                'icon' => 'fa-1 ',
                'slug' => 'low',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_priorities')->insert(
            array(
                'title' => 'Medium',
                'text_color' => '#000000',
                'bg_color' => '#fff3cd',
                'icon' => 'fa-2',
                'slug' => 'medium',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_priorities')->insert(
            array(
                'title' => 'High',
                'text_color' => '#ffffff',
                'bg_color' => '#fd7e14',
                'icon' => 'fa-3',
                'slug' => 'high',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_priorities')->insert(
            array(
                'title' => 'Critical',
                'text_color' => '#ffffff',
                'bg_color' => '#721c24',
                'icon' => 'fa-exclamation',
                'slug' => 'critical',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        //Ticket statuses
        DB::table('ticket_statuses')->insert(
            array(
                'title' => 'Pending',
                'text_color' => '#000000',
                'bg_color' => '#b59797',
                'default' => 1,
                'slug' => 'pending',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_statuses')->insert(
            array(
                'title' => 'In Progress',
                'text_color' => '#ffffff',
                'bg_color' => '#fd7e14',
                'default' => 0,
                'slug' => 'inprogress',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_statuses')->insert(
            array(
                'title' => 'Resolved',
                'text_color' => '#ffffff',
                'bg_color' => '#6f42c1',
                'default' => 0,
                'slug' => 'resolved',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_statuses')->insert(
            array(
                'title' => 'Closed',
                'text_color' => '#ffffff',
                'bg_color' => '#343a40',
                'default' => 0,
                'slug' => 'closed',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        //Ticket types
        DB::table('ticket_types')->insert(
            array(
                'title' => 'Incident',
                'text_color' => '#ffffff',
                'bg_color' => '#dc3545',
                'icon' => 'fa-exclamation',
                'slug' => 'incident',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_types')->insert(
            array(
                'title' => 'Service Request',
                'text_color' => '#ffffff',
                'bg_color' => '#007bff',
                'icon' => 'fa-solid fa-screwdriver-wrench',
                'slug' => 'servicerequest',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_types')->insert(
            array(
                'title' => 'Change Request',
                'text_color' => '#ffffff',
                'bg_color' => '#fd7e14',
                'icon' => 'fa-solid fa-arrows-rotate',
                'slug' => 'changerequest',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 1
            array(
                'title' => 'Hardware',
                'parent_id' => null,
                'text_color' => '#ffffff',
                'bg_color' => '#28a745',
                'slug' => 'hardware',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 2
            array(
                'title' => 'SFF / AIO / Laptop',
                'text_color' => '#ffffff',
                'bg_color' => '#28a745',
                'parent_id' => 1,
                'slug' => 'pc',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 3
            array(
                'title' => 'Printers and Scanners',
                'text_color' => '#ffffff',
                'bg_color' => '#28a745',
                'parent_id' => 1,
                'slug' => 'printer',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 4
            array(
                'title' => 'Software',
                'parent_id' => null,
                'text_color' => '#ffffff',
                'bg_color' => '#aaa233',
                'slug' => 'software',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 5
            array(
                'title' => 'Operating Systems',
                'text_color' => '#ffffff',
                'bg_color' => '#aaa233',
                'parent_id' => 4,
                'slug' => 'os',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 6
            array(
                'title' => 'Applications',
                'text_color' => '#ffffff',
                'bg_color' => '#aaa233',
                'parent_id' => 4,
                'slug' => 'apps',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 7
            array(
                'title' => 'Email',
                'text_color' => '#ffffff',
                'bg_color' => '#aaa233',
                'parent_id' => 4,
                'slug' => 'email',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 8
            array(
                'title' => 'Network',
                'text_color' => '#ffffff',
                'bg_color' => '#ccc233',
                'parent_id' => null,
                'slug' => 'network',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 9
            array(
                'title' => 'Connectivity',
                'text_color' => '#ffffff',
                'bg_color' => '#ccc233',
                'parent_id' => 8,
                'slug' => 'connectivity',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 10
            array(
                'title' => 'Security',
                'text_color' => '#ffffff',
                'bg_color' => '#ccc233',
                'parent_id' => 8,
                'slug' => 'security',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 11
            array(
                'title' => 'Accounts and Access',
                'text_color' => '#ffffff',
                'bg_color' => '#bbb444',
                'parent_id' => null,
                'slug' => 'accountaccess',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 12
            array(
                'title' => 'User Accounts',
                'text_color' => '#ffffff',
                'bg_color' => '#bbb444',
                'parent_id' => 11,
                'slug' => 'useraccount',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 13
            array(
                'title' => 'e-Cloud MyIPO',
                'text_color' => '#ffffff',
                'bg_color' => '#bbb444',
                'parent_id' => 11,
                'slug' => 'ecloud',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 14
            array(
                'title' => 'Network Access Right',
                'text_color' => '#ffffff',
                'bg_color' => '#bbb444',
                'parent_id' => 11,
                'slug' => 'networkaccessright',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 15
            array(
                'title' => 'New User Account & Computer Installation',
                'text_color' => '#ffffff',
                'bg_color' => '#abc123',
                'parent_id' => null,
                'slug' => 'newuser',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 16
            array(
                'title' => 'Create New Account & Computer Installation',
                'text_color' => '#ffffff',
                'bg_color' => '#abc123',
                'parent_id' => 15,
                'slug' => 'createaccount',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 17
            array(
                'title' => 'User Re-Placement',
                'text_color' => '#ffffff',
                'bg_color' => '#cba321',
                'parent_id' => null,
                'slug' => 'userreplacement',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(// 18
            array(
                'title' => 'User & Location',
                'text_color' => '#ffffff',
                'bg_color' => '#cba321',
                'parent_id' => 17,
                'slug' => 'userlocation',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );


        DB::table('notices')->insert(
            array(
                'title' => 'System Maintenance',
                'content' => 'ICT System Maintenance Scheduled for March 16, 2024. Expect Temporary Service Disruptions.',
                'category' => 'System',
                'status' => 1,
                'slug' => 'maintenance',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('notices')->insert(
            array(
                'title' => 'Test',
                'content' => 'test',
                'category' => 'test',
                'status' => 1,
                'slug' => 'test',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );
    }
}
