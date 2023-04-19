<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaceTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('place_trip')->insert([
            [
                'trip_id' => 3,
                'place_id' => 4,
                'visit_date' => '2010-11-29'
            ], [
                'trip_id' => 3,
                'place_id' => 133,
                'visit_date' => '2010-11-30'
            ], [
                'trip_id' => 3,
                'place_id' => 133,
                'visit_date' => '2010-12-01'
            ], [
                'trip_id' => 3,
                'place_id' => 5,
                'visit_date' => '2010-12-02'
            ], [
                'trip_id' => 3,
                'place_id' => 6,
                'visit_date' => '2010-12-03'
            ], [
                'trip_id' => 3,
                'place_id' => 9,
                'visit_date' => '2010-12-04'
            ], [
                'trip_id' => 3,
                'place_id' => 10,
                'visit_date' => '2010-12-05'
            ], [
                'trip_id' => 3,
                'place_id' => 7,
                'visit_date' => '2010-12-06'
            ], [
                'trip_id' => 3,
                'place_id' => 7,
                'visit_date' => '2010-12-07'
            ], [
                'trip_id' => 3,
                'place_id' => 8,
                'visit_date' => '2010-12-08'
            ], [
                'trip_id' => 3,
                'place_id' => 133,
                'visit_date' => '2010-12-09'
            ], [
                'trip_id' => 3,
                'place_id' => 133,
                'visit_date' => '2010-12-10'
            ], [
                'trip_id' => 3,
                'place_id' => 4,
                'visit_date' => '2010-12-11'
            ], [
                'trip_id' => 4,
                'place_id' => 1,
                'visit_date' => '2011-07-02'
            ], [
                'trip_id' => 4,
                'place_id' => 46,
                'visit_date' => '2011-07-03'
            ], [
                'trip_id' => 4,
                'place_id' => 47,
                'visit_date' => '2011-07-04'
            ], [
                'trip_id' => 4,
                'place_id' => 48,
                'visit_date' => '2011-07-05'
            ], [
                'trip_id' => 4,
                'place_id' => 49,
                'visit_date' => '2011-07-06'
            ], [
                'trip_id' => 4,
                'place_id' => 50,
                'visit_date' => '2011-07-07'
            ], [
                'trip_id' => 4,
                'place_id' => 50,
                'visit_date' => '2011-07-08'
            ], [
                'trip_id' => 4,
                'place_id' => 51,
                'visit_date' => '2011-07-08'
            ], [
                'trip_id' => 4,
                'place_id' => 2,
                'visit_date' => '2011-07-09'
            ], [
                'trip_id' => 5,
                'place_id' => 11,
                'visit_date' => '2014-03-17'
            ], [
                'trip_id' => 5,
                'place_id' => 133,
                'visit_date' => '2014-03-18'
            ], [
                'trip_id' => 5,
                'place_id' => 52,
                'visit_date' => '2014-03-19'
            ], [
                'trip_id' => 5,
                'place_id' => 52,
                'visit_date' => '2014-03-20'
            ], [
                'trip_id' => 5,
                'place_id' => 133,
                'visit_date' => '2014-03-21'
            ], [
                'trip_id' => 5,
                'place_id' => 53,
                'visit_date' => '2014-03-22'
            ], [
                'trip_id' => 5,
                'place_id' => 133,
                'visit_date' => '2014-03-23'
            ], [
                'trip_id' => 5,
                'place_id' => 133,
                'visit_date' => '2014-03-24'
            ], [
                'trip_id' => 5,
                'place_id' => 54,
                'visit_date' => '2014-03-25'
            ], [
                'trip_id' => 5,
                'place_id' => 133,
                'visit_date' => '2014-03-26'
            ], [
                'trip_id' => 5,
                'place_id' => 55,
                'visit_date' => '2014-03-27'
            ], [
                'trip_id' => 5,
                'place_id' => 56,
                'visit_date' => '2014-03-28'
            ], [
                'trip_id' => 5,
                'place_id' => 56,
                'visit_date' => '2014-03-29'
            ], [
                'trip_id' => 5,
                'place_id' => 133,
                'visit_date' => '2014-03-30'
            ], [
                'trip_id' => 5,
                'place_id' => 57,
                'visit_date' => '2014-03-31'
            ], [
                'trip_id' => 5,
                'place_id' => 133,
                'visit_date' => '2014-04-01'
            ], [
                'trip_id' => 5,
                'place_id' => 133,
                'visit_date' => '2014-04-02'
            ], [
                'trip_id' => 6,
                'place_id' => 11,
                'visit_date' => '2015-01-05'
            ],[
                'trip_id' => 6,
                'place_id' => 133,
                'visit_date' => '2015-01-06'
            ],[
                'trip_id' => 6,
                'place_id' => 57,
                'visit_date' => '2015-01-07'
            ],[
                'trip_id' => 6,
                'place_id' => 57,
                'visit_date' => '2015-01-08'
            ],[
                'trip_id' => 6,
                'place_id' => 58,
                'visit_date' => '2015-01-09'
            ],[
                'trip_id' => 6,
                'place_id' => 58,
                'visit_date' => '2015-01-10'
            ],[
                'trip_id' => 6,
                'place_id' => 133,
                'visit_date' => '2015-01-11'
            ],[
                'trip_id' => 6,
                'place_id' => 59,
                'visit_date' => '2015-01-12'
            ],[
                'trip_id' => 6,
                'place_id' => 59,
                'visit_date' => '2015-01-13'
            ],[
                'trip_id' => 6,
                'place_id' => 133,
                'visit_date' => '2015-01-14'
            ],[
                'trip_id' => 6,
                'place_id' => 60,
                'visit_date' => '2015-01-15'
            ],[
                'trip_id' => 6,
                'place_id' => 60,
                'visit_date' => '2015-01-16'
            ],[
                'trip_id' => 6,
                'place_id' => 60,
                'visit_date' => '2015-01-17'
            ],[
                'trip_id' => 6,
                'place_id' => 61,
                'visit_date' => '2015-01-18'
            ],[
                'trip_id' => 6,
                'place_id' => 133,
                'visit_date' => '2015-01-19'
            ],[
                'trip_id' => 6,
                'place_id' => 12,
                'visit_date' => '2015-01-20'
            ],
            [
                'trip_id' => 7,
                'place_id' => 12,
                'visit_date' => '2015-01-20'
            ],[
                'trip_id' => 7,
                'place_id' => 12,
                'visit_date' => '2015-01-21'
            ],[
                'trip_id' => 7,
                'place_id' => 133,
                'visit_date' => '2015-01-22'
            ],[
                'trip_id' => 7,
                'place_id' => 133,
                'visit_date' => '2015-01-23'
            ],[
                'trip_id' => 7,
                'place_id' => 62,
                'visit_date' => '2015-01-24'
            ],[
                'trip_id' => 7,
                'place_id' => 62,
                'visit_date' => '2015-01-25'
            ],[
                'trip_id' => 7,
                'place_id' => 62,
                'visit_date' => '2015-01-26'
            ],[
                'trip_id' => 7,
                'place_id' => 133,
                'visit_date' => '2015-01-27'
            ],[
                'trip_id' => 7,
                'place_id' => 63,
                'visit_date' => '2015-01-28'
            ],[
                'trip_id' => 7,
                'place_id' => 63,
                'visit_date' => '2015-01-29'
            ],[
                'trip_id' => 7,
                'place_id' => 64,
                'visit_date' => '2015-01-30'
            ],[
                'trip_id' => 7,
                'place_id' => 67,
                'visit_date' => '2015-02-01'
            ],[
                'trip_id' => 7,
                'place_id' => 66,
                'visit_date' => '2015-02-02'
            ],[
                'trip_id' => 7,
                'place_id' => 12,
                'visit_date' => '2015-02-03'
            ],

            [
                'trip_id' => 8,
                'place_id' => 13,
                'visit_date' => '2015-08-13'
            ],[
                'trip_id' => 8,
                'place_id' => 13,
                'visit_date' => '2015-08-14'
            ],[
                'trip_id' => 8,
                'place_id' => 15,
                'visit_date' => '2015-08-15'
            ],[
                'trip_id' => 8,
                'place_id' => 16,
                'visit_date' => '2015-08-16'
            ],[
                'trip_id' => 8,
                'place_id' => 16,
                'visit_date' => '2015-08-17'
            ],[
                'trip_id' => 8,
                'place_id' => 20,
                'visit_date' => '2015-08-18'
            ],[
                'trip_id' => 8,
                'place_id' => 133,
                'visit_date' => '2015-08-19'
            ],[
                'trip_id' => 8,
                'place_id' => 17,
                'visit_date' => '2015-08-20'
            ],[
                'trip_id' => 8,
                'place_id' => 133,
                'visit_date' => '2015-08-21'
            ],[
                'trip_id' => 8,
                'place_id' => 18,
                'visit_date' => '2015-08-22'
            ],[
                'trip_id' => 8,
                'place_id' => 18,
                'visit_date' => '2015-08-23'
            ],[
                'trip_id' => 8,
                'place_id' => 19,
                'visit_date' => '2015-08-24'
            ],[
                'trip_id' => 8,
                'place_id' => 14,
                'visit_date' => '2015-08-25'
            ],

            [
                'trip_id' => 9,
                'place_id' => 14,
                'visit_date' => '2015-08-25'
            ],[
                'trip_id' => 9,
                'place_id' => 23,
                'visit_date' => '2015-08-26'
            ],[
                'trip_id' => 9,
                'place_id' => 133,
                'visit_date' => '2015-08-27'
            ],[
                'trip_id' => 9,
                'place_id' => 22,
                'visit_date' => '2015-08-28'
            ],[
                'trip_id' => 9,
                'place_id' => 22,
                'visit_date' => '2015-08-29'
            ],[
                'trip_id' => 9,
                'place_id' => 24,
                'visit_date' => '2015-08-30'
            ],[
                'trip_id' => 9,
                'place_id' => 24,
                'visit_date' => '2015-08-31'
            ],[
                'trip_id' => 9,
                'place_id' => 25,
                'visit_date' => '2015-09-01'
            ],[
                'trip_id' => 9,
                'place_id' => 133,
                'visit_date' => '2015-09-02'
            ],[
                'trip_id' => 9,
                'place_id' => 30,
                'visit_date' => '2015-09-03'
            ],[
                'trip_id' => 9,
                'place_id' => 3,
                'visit_date' => '2015-09-04'
            ],[
                'trip_id' => 9,
                'place_id' => 27,
                'visit_date' => '2015-09-05'
            ],[
                'trip_id' => 9,
                'place_id' => 133,
                'visit_date' => '2015-09-06'
            ],[
                'trip_id' => 9,
                'place_id' => 21,
                'visit_date' => '2015-09-07'
            ],[
                'trip_id' => 9,
                'place_id' => 21,
                'visit_date' => '2015-09-08'
            ],[
                'trip_id' => 10,
                'place_id' => 1,
                'visit_date' => '2016-08-19'
            ],[
                'trip_id' => 10,
                'place_id' => 49,
                'visit_date' => '2016-08-20'
            ],[
                'trip_id' => 10,
                'place_id' => 189,
                'visit_date' => '2016-08-21'
            ],[
                'trip_id' => 10,
                'place_id' => 1,
                'visit_date' => '2016-08-22'
            ],[
                'trip_id' => 11,
                'place_id' => 1,
                'visit_date' => '2016-08-22'
            ],[
                'trip_id' => 11,
                'place_id' => 69,
                'visit_date' => '2016-08-23'
            ],[
                'trip_id' => 11,
                'place_id' => 70,
                'visit_date' => '2016-08-24'
            ],[
                'trip_id' => 11,
                'place_id' => 74,
                'visit_date' => '2016-08-25'
            ],[
                'trip_id' => 11,
                'place_id' => 71,
                'visit_date' => '2016-08-26'
            ],[
                'trip_id' => 11,
                'place_id' => 72,
                'visit_date' => '2016-08-27'
            ],[
                'trip_id' => 11,
                'place_id' => 73,
                'visit_date' => '2016-08-28'
            ],[
                'trip_id' => 11,
                'place_id' => 69,
                'visit_date' => '2016-08-29'
            ],[
                'trip_id' => 12,
                'place_id' => 69,
                'visit_date' => '2016-08-29'
            ],

            [
                'trip_id' => 12,
                'place_id' => 75,
                'visit_date' => '2016-08-30'
            ],[
                'trip_id' => 12,
                'place_id' => 76,
                'visit_date' => '2016-08-31'
            ],[
                'trip_id' => 12,
                'place_id' => 77,
                'visit_date' => '2016-09-01'
            ],[
                'trip_id' => 12,
                'place_id' => 78,
                'visit_date' => '2016-09-02'
            ],[
                'trip_id' => 12,
                'place_id' => 133,
                'visit_date' => '2016-09-03'
            ],[
                'trip_id' => 12,
                'place_id' => 79,
                'visit_date' => '2016-09-04'
            ],[
                'trip_id' => 12,
                'place_id' => 80,
                'visit_date' => '2016-09-05'
            ],[
                'trip_id' => 12,
                'place_id' => 81,
                'visit_date' => '2016-09-06'
            ],[
                'trip_id' => 12,
                'place_id' => 82,
                'visit_date' => '2016-09-07'
            ],[
                'trip_id' => 12,
                'place_id' => 84,
                'visit_date' => '2016-09-08'
            ],[
                'trip_id' => 12,
                'place_id' => 84,
                'visit_date' => '2016-09-09'
            ], [
                'trip_id' => 13,
                'place_id' => 84,
                'visit_date' => '2016-09-09'
            ],[
                'trip_id' => 13,
                'place_id' => 81,
                'visit_date' => '2016-09-10'
            ],[
                'trip_id' => 13,
                'place_id' => 81,
                'visit_date' => '2016-09-11'
            ],[
                'trip_id' => 13,
                'place_id' => 80,
                'visit_date' => '2016-09-12'
            ],[
                'trip_id' => 13,
                'place_id' => 79,
                'visit_date' => '2016-09-13'
            ],[
                'trip_id' => 13,
                'place_id' => 133,
                'visit_date' => '2016-09-014'
            ],[
                'trip_id' => 13,
                'place_id' => 84,
                'visit_date' => '2016-09-15'
            ],[
                'trip_id' => 13,
                'place_id' => 84,
                'visit_date' => '2016-09-16'
            ], [
                'trip_id' => 14,
                'place_id' => 86,
                'visit_date' => '2017-06-23'
            ], [
                'trip_id' => 14,
                'place_id' => 133,
                'visit_date' => '2017-06-24'
            ],[
                'trip_id' => 14,
                'place_id' => 86,
                'visit_date' => '2017-06-25'
            ],[
                'trip_id' => 14,
                'place_id' => 87,
                'visit_date' => '2017-06-26'
            ],[
                'trip_id' => 14,
                'place_id' => 88,
                'visit_date' => '2017-06-27'
            ],[
                'trip_id' => 14,
                'place_id' => 133,
                'visit_date' => '2017-06-28'
            ],[
                'trip_id' => 14,
                'place_id' => 89,
                'visit_date' => '2017-06-29'
            ],[
                'trip_id' => 14,
                'place_id' => 90,
                'visit_date' => '2017-06-30'
            ],[
                'trip_id' => 14,
                'place_id' => 93,
                'visit_date' => '2017-07-01'
            ],[
                'trip_id' => 14,
                'place_id' => 94,
                'visit_date' => '2017-07-02'
            ],[
                'trip_id' => 14,
                'place_id' => 133,
                'visit_date' => '2017-07-03'
            ],[
                'trip_id' => 14,
                'place_id' => 133,
                'visit_date' => '2017-07-04'
            ],[
                'trip_id' => 14,
                'place_id' => 91,
                'visit_date' => '2017-07-05'
            ],[
                'trip_id' => 14,
                'place_id' => 92,
                'visit_date' => '2017-07-06'
            ],[
                'trip_id' => 14,
                'place_id' => 133,
                'visit_date' => '2017-07-07'
            ],[
                'trip_id' => 14,
                'place_id' => 133,
                'visit_date' => '2017-07-08'
            ],[
                'trip_id' => 14,
                'place_id' => 17,
                'visit_date' => '2017-07-09'
            ],[
                'trip_id' => 15,
                'place_id' => 4,
                'visit_date' => '2018-01-04'
            ],[
                'trip_id' => 15,
                'place_id' => 95,
                'visit_date' => '2018-01-05'
            ], [
                'trip_id' => 15,
                'place_id' => 95,
                'visit_date' => '2018-01-06'
            ], [
                'trip_id' => 15,
                'place_id' => 133,
                'visit_date' => '2018-01-07'
            ], [
                'trip_id' => 15,
                'place_id' => 133,
                'visit_date' => '2018-01-08'
            ], [
                'trip_id' => 15,
                'place_id' => 96,
                'visit_date' => '2018-01-09'
            ], [
                'trip_id' => 15,
                'place_id' => 97,
                'visit_date' => '2018-01-10'
            ], [
                'trip_id' => 15,
                'place_id' => 133,
                'visit_date' => '2018-01-11'
            ], [
                'trip_id' => 15,
                'place_id' => 98,
                'visit_date' => '2018-01-12'
            ], [
                'trip_id' => 15,
                'place_id' => 99,
                'visit_date' => '2018-01-13'
            ], [
                'trip_id' => 15,
                'place_id' => 133,
                'visit_date' => '2018-01-14'
            ], [
                'trip_id' => 15,
                'place_id' => 32,
                'visit_date' => '2018-01-15'
            ],


            [
                'trip_id' => 16,
                'place_id' => 32,
                'visit_date' => '2018-01-15'
            ],[
                'trip_id' => 16,
                'place_id' => 133,
                'visit_date' => '2018-01-16'
            ],[
                'trip_id' => 16,
                'place_id' => 97,
                'visit_date' => '2018-01-17'
            ],[
                'trip_id' => 16,
                'place_id' => 97,
                'visit_date' => '2018-01-18'
            ],[
                'trip_id' => 16,
                'place_id' => 98,
                'visit_date' => '2018-01-19'
            ],[
                'trip_id' => 16,
                'place_id' => 98,
                'visit_date' => '2018-01-20'
            ],[
                'trip_id' => 16,
                'place_id' => 99,
                'visit_date' => '2018-01-21'
            ],[
                'trip_id' => 16,
                'place_id' => 100,
                'visit_date' => '2018-01-22'
            ],[
                'trip_id' => 16,
                'place_id' => 39,
                'visit_date' => '2018-01-23'
            ],[
                'trip_id' => 16,
                'place_id' => 32,
                'visit_date' => '2018-01-24'
            ],[
                'trip_id' => 16,
                'place_id' => 32,
                'visit_date' => '2018-01-25'
            ],[
                'trip_id' => 17,
                'place_id' => 32,
                'visit_date' => '2018-01-25'
            ],[
                'trip_id' => 17,
                'place_id' => 39,
                'visit_date' => '2018-01-25'
            ],[
                'trip_id' => 17,
                'place_id' => 133,
                'visit_date' => '2018-01-26'
            ],[
                'trip_id' => 17,
                'place_id' => 33,
                'visit_date' => '2018-01-27'
            ],[
                'trip_id' => 17,
                'place_id' => 34,
                'visit_date' => '2018-01-28'
            ],[
                'trip_id' => 17,
                'place_id' => 40,
                'visit_date' => '2018-01-29'
            ],[
                'trip_id' => 17,
                'place_id' => 101,
                'visit_date' => '2018-01-30'
            ],[
                'trip_id' => 17,
                'place_id' => 102,
                'visit_date' => '2018-01-31'
            ],[
                'trip_id' => 17,
                'place_id' => 133,
                'visit_date' => '2018-02-01'
            ],[
                'trip_id' => 17,
                'place_id' => 38,
                'visit_date' => '2018-02-02'
            ],[
                'trip_id' => 17,
                'place_id' => 104,
                'visit_date' => '2018-02-03'
            ],[
                'trip_id' => 17,
                'place_id' => 37,
                'visit_date' => '2018-02-04'
            ],[
                'trip_id' => 17,
                'place_id' => 37,
                'visit_date' => '2018-02-05'
            ],[
                'trip_id' => 17,
                'place_id' => 133,
                'visit_date' => '2018-02-06'
            ],[
                'trip_id' => 17,
                'place_id' => 133,
                'visit_date' => '2018-02-07'
            ],[
                  'trip_id' => 17,
                  'place_id' => 36,
                  'visit_date' => '2018-02-08'
            ],[
                'trip_id' => 18,
                'place_id' => 14,
                'visit_date' => '2018-08-13'
            ],[
                'trip_id' => 18,
                'place_id' => 133,
                'visit_date' => '2018-08-14'
            ],[
                'trip_id' => 18,
                'place_id' => 105,
                'visit_date' => '2018-08-15'
            ],[
                'trip_id' => 18,
                'place_id' => 133,
                'visit_date' => '2018-08-16'
            ],[
                'trip_id' => 18,
                'place_id' => 133,
                'visit_date' => '2018-08-17'
            ],[
                'trip_id' => 18,
                'place_id' => 106,
                'visit_date' => '2018-08-18'
            ],[
                'trip_id' => 18,
                'place_id' => 106,
                'visit_date' => '2018-08-19'
            ],[
                'trip_id' => 18,
                'place_id' => 107,
                'visit_date' => '2018-08-20'
            ],[
                'trip_id' => 18,
                'place_id' => 108,
                'visit_date' => '2018-08-21'
            ],[
                'trip_id' => 18,
                'place_id' => 109,
                'visit_date' => '2018-08-22'
            ],[
                'trip_id' => 18,
                'place_id' => 133,
                'visit_date' => '2018-08-23'
            ],[
                'trip_id' => 18,
                'place_id' => 110,
                'visit_date' => '2018-08-24'
            ],[
                'trip_id' => 18,
                'place_id' => 111,
                'visit_date' => '2018-08-25'
            ],[
                'trip_id' => 18,
                'place_id' => 112,
                'visit_date' => '2018-08-26'
            ],[
                'trip_id' => 18,
                'place_id' => 113,
                'visit_date' => '2018-08-27'
            ],[
                'trip_id' => 18,
                'place_id' => 14,
                'visit_date' => '2018-08-28'
            ],



            [
                'trip_id' => 19,
                'place_id' => 4,
                'visit_date' => '2018-11-20'
            ],[
                'trip_id' => 19,
                'place_id' => 133,
                'visit_date' => '2018-11-21'
            ], [
                'trip_id' => 19,
                'place_id' => 133,
                'visit_date' => '2018-11-22'
            ],[
                'trip_id' => 19,
                'place_id' => 114,
                'visit_date' => '2018-11-23'
            ], [
                'trip_id' => 19,
                'place_id' => 114,
                'visit_date' => '2018-11-24'
            ],[
                'trip_id' => 19,
                'place_id' => 96,
                'visit_date' => '2018-11-25'
            ], [
                'trip_id' => 19,
                'place_id' => 97,
                'visit_date' => '2018-11-26'
            ],[
                'trip_id' => 19,
                'place_id' => 133,
                'visit_date' => '2018-11-27'
            ],[
                'trip_id' => 19,
                'place_id' => 133,
                'visit_date' => '2018-11-28'
            ],[
                'trip_id' => 19,
                'place_id' => 115,
                'visit_date' => '2018-11-29'
            ],[
                'trip_id' => 19,
                'place_id' => 31,
                'visit_date' => '2018-11-30'
            ],[
                'trip_id' => 20,
                'place_id' => 31,
                'visit_date' => '2018-12-01'
            ],[
                'trip_id' => 20,
                'place_id' => 42,
                'visit_date' => '2018-12-02'
            ],[
                'trip_id' => 20,
                'place_id' => 133,
                'visit_date' => '2018-12-03'
            ],[
                'trip_id' => 20,
                'place_id' => 116,
                'visit_date' => '2018-12-04'
            ],[
                'trip_id' => 20,
                'place_id' => 116,
                'visit_date' => '2018-12-05'
            ],[
                'trip_id' => 20,
                'place_id' => 133,
                'visit_date' => '2018-12-06'
            ],[
                'trip_id' => 20,
                'place_id' => 117,
                'visit_date' => '2018-12-07'
            ],[
                'trip_id' => 20,
                'place_id' => 133,
                'visit_date' => '2018-12-08'
            ],[
                'trip_id' => 20,
                'place_id' => 118,
                'visit_date' => '2018-12-09'
            ],[
                'trip_id' => 20,
                'place_id' => 116,
                'visit_date' => '2018-12-10'
            ],[
                'trip_id' => 20,
                'place_id' => 120,
                'visit_date' => '2018-12-11'
            ],[
                'trip_id' => 20,
                'place_id' => 120,
                'visit_date' => '2018-12-12'
            ],[
                'trip_id' => 20,
                'place_id' => 35,
                'visit_date' => '2018-12-13'
            ],[
                'trip_id' => 20,
                'place_id' => 121,
                'visit_date' => '2018-12-14'
            ],[
                'trip_id' => 20,
                'place_id' => 122,
                'visit_date' => '2018-12-15'
            ],[
                'trip_id' => 20,
                'place_id' => 133,
                'visit_date' => '2018-12-16'
            ],[
                'trip_id' => 20,
                'place_id' => 133,
                'visit_date' => '2018-12-17'
            ],[
                'trip_id' => 20,
                'place_id' => 133,
                'visit_date' => '2018-12-18'
            ],[
                'trip_id' => 20,
                'place_id' => 44,
                'visit_date' => '2018-12-19'
            ],[
                'trip_id' => 20,
                'place_id' => 43,
                'visit_date' => '2018-12-20'
            ],[
                'trip_id' => 20,
                'place_id' => 41,
                'visit_date' => '2018-12-21'
            ],[
                'trip_id' => 20,
                'place_id' => 41,
                'visit_date' => '2018-12-22'
            ],



            [
                'trip_id' => 21,
                'place_id' => 123,
                'visit_date' => '2019-02-07'
            ],[
                'trip_id' => 21,
                'place_id' => 133,
                'visit_date' => '2019-02-08'
            ],[
                'trip_id' => 21,
                'place_id' => 125,
                'visit_date' => '2019-02-09'
            ],[
                'trip_id' => 21,
                'place_id' => 133,
                'visit_date' => '2019-02-10'
            ],[
                'trip_id' => 21,
                'place_id' => 124,
                'visit_date' => '2019-02-11'
            ],[
                'trip_id' => 21,
                'place_id' => 133,
                'visit_date' => '2019-02-12'
            ],[
                'trip_id' => 21,
                'place_id' => 133,
                'visit_date' => '2019-02-13'
            ],[
                'trip_id' => 21,
                'place_id' => 126,
                'visit_date' => '2019-02-14'
            ],[
                'trip_id' => 21,
                'place_id' => 127,
                'visit_date' => '2019-02-15'
            ],[
                'trip_id' => 21,
                'place_id' => 128,
                'visit_date' => '2019-02-16'
            ],[
                'trip_id' => 21,
                'place_id' => 129,
                'visit_date' => '2019-02-17'
            ],[
                'trip_id' => 21,
                'place_id' => 130,
                'visit_date' => '2019-02-18'
            ],[
                'trip_id' => 21,
                'place_id' => 130,
                'visit_date' => '2019-02-19'
            ],[
                'trip_id' => 21,
                'place_id' => 131,
                'visit_date' => '2019-02-20'
            ],[
                'trip_id' => 21,
                'place_id' => 132,
                'visit_date' => '2019-02-21'
            ],



            [
                'trip_id' => 22,
                'place_id' => 12,
                'visit_date' => '2019-03-29'
            ],[
                'trip_id' => 22,
                'place_id' => 133,
                'visit_date' => '2019-03-30'
            ],[
                'trip_id' => 22,
                'place_id' => 59,
                'visit_date' => '2019-03-31'
            ],[
                'trip_id' => 22,
                'place_id' => 59,
                'visit_date' => '2019-04-01'
            ],[
                'trip_id' => 22,
                'place_id' => 133,
                'visit_date' => '2019-04-02'
            ],[
                'trip_id' => 22,
                'place_id' => 14,
                'visit_date' => '2019-04-03'
            ],[
                'trip_id' => 22,
                'place_id' => 133,
                'visit_date' => '2019-04-04'
            ],[
                'trip_id' => 22,
                'place_id' => 11,
                'visit_date' => '2019-04-05'
            ],[
                'trip_id' => 22,
                'place_id' => 11,
                'visit_date' => '2019-04-06'
            ],[
                'trip_id' => 22,
                'place_id' => 133,
                'visit_date' => '2019-04-07'
            ],[
                'trip_id' => 22,
                'place_id' => 190,
                'visit_date' => '2019-04-08'
            ],[
                'trip_id' => 22,
                'place_id' => 133,
                'visit_date' => '2019-04-09'
            ],[
                'trip_id' => 22,
                'place_id' => 192,
                'visit_date' => '2019-04-10'
            ],[
                'trip_id' => 22,
                'place_id' => 191,
                'visit_date' => '2019-04-11'
            ],[
                'trip_id' => 22,
                'place_id' => 191,
                'visit_date' => '2019-04-12'
            ],[
                'trip_id' => 22,
                'place_id' => 133,
                'visit_date' => '2019-04-13'
            ],[
                'trip_id' => 22,
                'place_id' => 134,
                'visit_date' => '2019-04-14'
            ],[
                'trip_id' => 23,
                'place_id' => 134,
                'visit_date' => '2019-04-14'
            ], [
                'trip_id' => 23,
                'place_id' => 133,
                'visit_date' => '2019-04-15'
            ], [
                'trip_id' => 23,
                'place_id' => 135,
                'visit_date' => '2019-04-16'
            ], [
                'trip_id' => 23,
                'place_id' => 136,
                'visit_date' => '2019-04-17'
            ], [
                'trip_id' => 23,
                'place_id' => 137,
                'visit_date' => '2019-04-18'
            ], [
                'trip_id' => 23,
                'place_id' => 138,
                'visit_date' => '2019-04-19'
            ], [
                'trip_id' => 23,
                'place_id' => 139,
                'visit_date' => '2019-04-20'
            ], [
                'trip_id' => 23,
                'place_id' => 140,
                'visit_date' => '2019-04-21'
            ], [
                'trip_id' => 23,
                'place_id' => 141,
                'visit_date' => '2019-04-22'
            ], [
                'trip_id' => 23,
                'place_id' => 143,
                'visit_date' => '2019-04-23'
            ], [
                'trip_id' => 23,
                'place_id' => 144,
                'visit_date' => '2019-04-24'
            ], [
                'trip_id' => 23,
                'place_id' => 144,
                'visit_date' => '2019-04-25'
            ],
            [
                'trip_id' => 23,
                'place_id' => 145,
                'visit_date' => '2019-04-26'
            ], [
                'trip_id' => 23,
                'place_id' => 146,
                'visit_date' => '2019-04-27'
            ], [
                'trip_id' => 28,
                'place_id' => 21,
                'visit_date' => '2022-04-28'
            ], [
                'trip_id' => 28,
                'place_id' => 153,
                'visit_date' => '2022-04-29'
            ], [
                'trip_id' => 28,
                'place_id' => 186,
                'visit_date' => '2022-04-30'
            ], [
                'trip_id' => 28,
                'place_id' => 50,
                'visit_date' => '2022-05-01'
            ], [
                'trip_id' => 29,
                'place_id' => 50,
                'visit_date' => '2022-05-02'
            ], [
              'trip_id' => 29,
              'place_id' => 47,
              'visit_date' => '2022-05-03'
            ], [
                'trip_id' => 29,
                'place_id' => 47,
                'visit_date' => '2022-05-04'
            ], [
                'trip_id' => 29,
                'place_id' => 1,
                'visit_date' => '2022-05-05'
            ], [
                'trip_id' => 29,
                'place_id' => 69,
                'visit_date' => '2022-05-06'
            ], [
                'trip_id' => 29,
                'place_id' => 183,
                'visit_date' => '2022-05-07'
            ], [
                'trip_id' => 29,
                'place_id' => 133,
                'visit_date' => '2022-05-08'
            ], [
                'trip_id' => 29,
                'place_id' => 79,
                'visit_date' => '2022-05-09'
            ], [
                'trip_id' => 29,
                'place_id' => 185,
                'visit_date' => '2022-05-10'
            ], [
                'trip_id' => 29,
                'place_id' => 184,
                'visit_date' => '2022-05-11'
            ], [
                'trip_id' => 29,
                'place_id' => 184,
                'visit_date' => '2022-05-12'
            ], [
                'trip_id' => 29,
                'place_id' => 184,
                'visit_date' => '2022-05-13'
            ], [
                'trip_id' => 30,
                'place_id' => 184,
                'visit_date' => '2022-05-13'
            ], [
                'trip_id' => 30,
                'place_id' => 187,
                'visit_date' => '2022-05-14'
            ], [
                'trip_id' => 30,
                'place_id' => 83,
                'visit_date' => '2022-05-15'
            ], [
                'trip_id' => 30,
                'place_id' => 80,
                'visit_date' => '2022-05-16'
            ], [
                'trip_id' => 30,
                'place_id' => 79,
                'visit_date' => '2022-05-17'
            ], [
                'trip_id' => 30,
                'place_id' => 81,
                'visit_date' => '2022-05-18'
            ], [
                'trip_id' => 30,
                'place_id' => 188,
                'visit_date' => '2022-05-19'
            ], [
                'trip_id' => 30,
                'place_id' => 184,
                'visit_date' => '2022-05-20'
            ], [
                'trip_id' => 30,
                'place_id' => 184,
                'visit_date' => '2022-05-21'
            ], [
                'trip_id' => 31,
                'place_id' => 184,
                'visit_date' => '2022-05-21'
            ], [
                'trip_id' => 31,
                'place_id' => 179,
                'visit_date' => '2022-05-22'
            ], [
                'trip_id' => 31,
                'place_id' => 79,
                'visit_date' => '2022-05-23'
            ], [
                'trip_id' => 31,
                'place_id' => 180,
                'visit_date' => '2022-05-24'
            ], [
                'trip_id' => 31,
                'place_id' => 181,
                'visit_date' => '2022-05-25'
            ], [
                'trip_id' => 31,
                'place_id' => 182,
                'visit_date' => '2022-05-26'
            ], [
                'trip_id' => 31,
                'place_id' => 78,
                'visit_date' => '2022-05-27'
            ], [
                'trip_id' => 31,
                'place_id' => 68,
                'visit_date' => '2022-05-28'
            ]
        ]);
    }
}
