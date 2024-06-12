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
                'title' => 'Low Priority',
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
                'title' => 'Medium Priority',
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
                'title' => 'High Priority',
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
                'title' => 'Urgent',
                'text_color' => '#ffffff',
                'bg_color' => '#dc3545',
                'icon' => 'fa-4',
                'slug' => 'urgent',
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

        DB::table('ticket_types')->insert(
            array(
                'title' => 'Problem',
                'text_color' => '#ffffff',
                'bg_color' => '#721c24',
                'icon' => 'fa-bug',
                'slug' => 'problem',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_types')->insert(
            array(
                'title' => 'Access Request',
                'text_color' => '#ffffff',
                'bg_color' => '#28a745',
                'icon' => 'fa-solid fa-key',
                'slug' => 'accessrequest',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(
            array(
                'title' => 'PC',
                'parent_id' => null,
                'text_color' => '#ffffff',
                'bg_color' => '#28a745',
                'slug' => 'pc',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(
            array(
                'title' => 'Mouse',
                'text_color' => '#ffffff',
                'bg_color' => '#28a745',
                'parent_id' => 1,
                'slug' => 'mouse',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(
            array(
                'title' => 'Keyboard',
                'text_color' => '#ffffff',
                'bg_color' => '#28a745',
                'parent_id' => 1,
                'slug' => 'keyboard',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(
            array(
                'title' => 'Monitor',
                'text_color' => '#ffffff',
                'bg_color' => '#28a745',
                'parent_id' => 1,
                'slug' => 'monitor',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(
            array(
                'title' => 'Service',
                'parent_id' => null,
                'text_color' => '#ffffff',
                'bg_color' => '#aaa233',
                'slug' => 'service',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(
            array(
                'title' => 'Email',
                'text_color' => '#ffffff',
                'bg_color' => '#aaa233',
                'parent_id' => 5,
                'slug' => 'email',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            )
        );

        DB::table('ticket_categories')->insert(
            array(
                'title' => 'Website',
                'text_color' => '#ffffff',
                'bg_color' => '#aaa233',
                'parent_id' => 5,
                'slug' => 'website',
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
