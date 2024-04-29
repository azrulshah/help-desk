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
        DB::table('ticket_priorities')->insert(
            array(
                'title' => 'Urgent',
                'text_color' => '#000000',
                'bg_color' => '#941f1f',
                'icon' => 'fa-exclamation',
                'slug' => 'urgent'
            )
        );

        DB::table('ticket_statuses')->insert(
            array(
                'title' => 'Pending',
                'text_color' => '#000000',
                'bg_color' => '#b59797',
                'default' => 1,
                'slug' => 'pending'
            )
        );

        DB::table('ticket_types')->insert(
            array(
                'title' => 'Bug',
                'text_color' => '000000',
                'bg_color' => '#8db587',
                'icon' => 'fa-bug',
                'slug' => 'bug'
            )
        );

        DB::table('ticket_categories')->insert(
            array(
                'title' => 'PC',
                'parent_id' => null,
                'slug' => 'pc'
            )
        );

        DB::table('ticket_categories')->insert(
            array(
                'title' => 'Mouse',
                'parent_id' => 1,
                'slug' => 'mouse'
            )
        );

        DB::table('notices')->insert(
            array(
                'title' => 'System Maintenance',
                'content' => 'ICT System Maintenance Scheduled for March 16, 2024. Expect Temporary Service Disruptions.',
                'category' => 'System',
                'status' => 1,
                'slug' => 'maintenance'
            )
        );

        DB::table('notices')->insert(
            array(
                'title' => 'Test',
                'content' => 'test',
                'category' => 'test',
                'status' => 1,
                'slug' => 'test'
            )
        );
    }
}
