<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->insert([
            [
                // 1
                'type_detail' => 'Celebrity Century',
                'type_id' => 1,
                'start_date' => '1998-10-31',
                'days' => 7,
                'ref_num' => '0000001',
                'description' => 'Western Caribbean'
              ],[
                // 2
                'type_detail' => 'Celebrity Mercury',
                'type_id' => 1,
                'start_date' => '2007-06-29',
                'days' => 7,
                'ref_num' => '0000002',
                'description' => 'Alaska Hubbard Glacier'
              ],[
                // 3
                'type_detail' => 'Azamara Journey',
                'type_id' => 1,
                'start_date' => '2010-11-29',
                'days' => 12,
                'ref_num' => '3845140',
                'description' => 'Eastern Caribbean and First Cruise'
              ], [
              // 4
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2011-07-02',
              'days' => 7,
              'ref_num' => '0000010',
              'description' => 'Italian & French Riviera'
            ], [
              // 5
              'type_detail' => 'Azamara Journey',
              'type_id' => 1,
              'start_date' => '2014-03-17',
              'days' => 17,
              'ref_num' => '1860005',
              'description' => 'Southeast Asia with Crew Family days'
            ], [
              // 6
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2015-01-05',
              'days' => 15,
              'ref_num' => '0000005',
              'description' => 'Vietnam and Thailand'
            ], [
              // 7
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2015-01-20',
              'days' => 14,
              'ref_num' => '0000006',
              'description' => 'Yangon and Western Thailand'
            ], [
              // 8
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2015-08-13',
              'days' => 12,
              'ref_num' => '0000007',
              'description' => 'The Baltic with St. Petersburg'
            ], [
              // 9
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2015-08-25',
              'days' => 14,
              'ref_num' => '0000008',
              'description' => 'Delightful Havens around France and Spain'
            ], [
              // 10
              'type_detail' => 'Azamara Journey',
              'type_id' => 1,
              'start_date' => '2016-08-19',
              'days' => 3,
              'ref_num' => '0000009',
              'description' => 'Med Weekend Getaway'
            ], [
              // 11
              'type_detail' => 'Azamara Journey',
              'type_id' => 1,
              'start_date' => '2016-08-22',
              'days' => 7,
              'ref_num' => '0000010',
              'description' => 'Amalfi Ccoast, Sicily & Malta'
            ], [
              // 12
              'type_detail' => 'Azamara Journey',
              'type_id' => 1,
              'start_date' => '2016-08-29',
              'days' => 11,
              'ref_num' => '0000010',
              'description' => 'Croatian Coast to Venice'
            ], [
              // 13
              'type_detail' => 'Azamara Journey',
              'type_id' => 1,
              'start_date' => '2016-09-09',
              'days' => 7,
              'ref_num' => '0000010',
              'description' => 'Croatian Coast again'
            ], [
              // 14
              'type_detail' => 'Azamara Journey',
              'type_id' => 1,
              'start_date' => '2017-06-23',
              'days' => 14,
              'ref_num' => '0000010',
              'description' => 'Norwegian Fjords'
            ], [
              // 15
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2018-01-04',
              'days' => 11,
              'ref_num' => '7418474',
              'description' => 'Through Panama Canal - Right'
            ], [
              // 16
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2018-01-15',
              'days' => 10,
              'ref_num' => '7422844',
              'description' => 'Costa Rica Intensive'
            ], [
              // 17
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2018-01-25',
              'days' => 14,
              'ref_num' => '0000010',
              'description' => 'Western Central America'
            ], [
              // 18
              'type_detail' => 'Azamara Pursuit',
              'type_id' => 1,
              'start_date' => '2018-08-13',
              'days' => 15,
              'ref_num' => '2898161',
              'description' => 'Wonders of Iceland'
            ], [
              // 19
              'type_detail' => 'Azamara Pursuit',
              'type_id' => 1,
              'start_date' => '2018-11-20',
              'days' => 11,
              'ref_num' => '6580301',
              'description' => 'Through Panama Canal - Left'
            ], [
              // 20
              'type_detail' => 'Azamara Pursuit',
              'type_id' => 1,
              'start_date' => '2018-12-01',
              'days' => 21,
              'ref_num' => '0000010',
              'description' => 'Around South America'
            ], [
              // 21
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2019-02-07',
              'days' => 14,
              'ref_num' => '4267206',
              'description' => 'Australia to New Zealand'
            ], [
              // 22
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2019-03-29',
              'days' => 16,
              'ref_num' => '7317958',
              'description' => 'Springtime In Asia'
            ],
            [
              // 23
              'type_detail' => 'Azamara Quest',
              'type_id' => 1,
              'start_date' => '2019-04-14',
              'days' => 13,
              'ref_num' => '7318757',
              'description' => 'Circle Japan Intensive'
            ],
            [
              // 24
              'type_detail' => 'Azamara Journey',
              'type_id' => 1,
              'start_date' => '2019-09-05',
              'days' => 9,
              'ref_num' => '6007932',
              'description' => 'Iberia Intensive'
            ],
            [
              // 25
              'type_detail' => 'Azamara Journey',
              'type_id' => 1,
              'start_date' => '2019-09-14',
              'days' => 7,
              'ref_num' => '0000010',
              'description' => 'France Intensive'
            ],
            [
                // 26
                'type_detail' => 'Azamara Journey',
                'type_id' => 1,
                'start_date' => '2020-01-05',
                'days' => 18,
                'ref_num' => '0000010',
                'description' => 'Hawaii & Tahiti Voyage'
            ],
            [
                // 27
                'type_detail' => 'Azamara Journey',
                'type_id' => 1,
                'start_date' => '2020-01-23',
                'days' => 15,
                'ref_num' => '5985144',
                'description' => 'Tahiti & New Zealand'
            ],
            [
                // 28
                'type_detail' => 'Azamara Onward',
                'type_id' => 1,
                'start_date' => '2022-04-28',
                'ref_num' => '4147887',
                'days' => 3,
                'description' => 'Onward Inaugural'
            ],
            [
                // 29
                'type_detail' => 'Azamara Onward',
                'type_id' => 1,
                'start_date' => '2022-05-02',
                'days' => 11,
                'ref_num' => '1021294',
                'description' => 'Onward Christening'
            ],
            [
                // 30
                'type_detail' => 'Azamara Onward',
                'type_id' => 1,
                'start_date' => '2022-05-13',
                'days' => 8,
                'ref_num' => '1040666',
                'description' => 'Covid Cruise'
            ],[
                // 31
                'type_detail' => 'Azamara Onward',
                'type_id' => 1,
                'start_date' => '2022-05-21',
                'days' => 7,
                'ref_num' => '1054064',
                'description' => 'Greece Intensive'
            ],[
                // 32
                'type_detail' => 'Azamara Pursuit',
                'type_id' => 1,
                'start_date' => '2022-08-25',
                'days' => 12,
                'ref_num' => '9648308',
                'description' => 'Baltic & Amsterdam without Russia'
            ],[
                // 33
                'type_detail' => 'Azamara Pursuit',
                'type_id' => 1,
                'start_date' => '2022-09-06',
                'days' => 11,
                'ref_num' => '8445332',
                'description' => 'France Intensive'
            ],[
                // 34
                'type_detail' => 'Azamara Pursuit',
                'type_id' => 1,
                'start_date' => '2022-09-17',
                'days' => 13,
                'ref_num' => '8473314',
                'description' => 'Spain Intensive'
            ],[
                // 35
                'type_detail' => 'Azamara Quest',
                'type_id' => 1,
                'start_date' => '2023-01-26',
                'days' => 16,
                'ref_num' => '3659018',
                'description' => 'New Zealand & Australia'
            ],[
                // 35
                'type_detail' => 'Azamara Quest',
                'type_id' => 1,
                'start_date' => '2023-02-06',
                'days' => 16,
                'ref_num' => '3675950',
                'description' => 'Australia Intensive'
            ]
        ]);
    }
}
