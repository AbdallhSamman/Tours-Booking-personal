<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            //Amman
            [
                'name' => 'Amman Citadel',
                'description' => 'Amman Citadel is a palce in amman in northern Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-01-29 00:00:00',
                'days' => 5,
                'category_id' => 2,
                'price' => 400,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Amman_Citadel.jpg',
                'guide_id' => 3
            ],

            [
                'name' => 'Nepo Mountain',
                'description' => 'Nepo Mountain is a palce in middle of amman Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-01-29 00:00:00',
                'days' => 5,
                'category_id' => 2,
                'price' => 200,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Mount-Nebo-0.jpg',
                'guide_id' => 3
            ],
            //Zarqa
            [
                'name' => 'Quseir Amra',
                'description' => 'Quseir Amra is in zarqa city in the middle of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-01-29 00:00:00',
                'days' => 14,
                'category_id' => 13,
                'price' => 1500,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Qusayr_Amra.jpg',
                'guide_id' => 3
            ],
            [
                'name' => 'Qsar Al-azraq',
                'description' => 'Qsar Al-azraq is in  zarqa city in the middle of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2021-12-29 00:00:00',
                'days' => 7,
                'category_id' => 13,
                'price' => 550,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Qsar_Al-azraq.jpg',
                'guide_id' => 3
            ],
            //Irbid
            [
                'name' => 'UMm Qays Archeological Site',
                'description' => 'UMm Qays Archeological Site is in the Irbid in the north of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-01-13 00:00:00',
                'days' => 13,
                'category_id' => 1,
                'price' => 1000,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'UMm_Qays_Archeological_Site.jpg',
                'guide_id' => 3
            ],
            [
                'name' => 'Pella',
                'description' => 'Pella is in the Irbid city in the north of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-01-13 00:00:00',
                'days' => 3,
                'category_id' => 1,
                'price' => 900,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'pella.jpg',
                'guide_id' => 4
            ],
            //Jerash
            [
                'name' => ' The stage of the South Theatre',
                'description' => ' The stage of the South Theatre is a city in the middle of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-01 00:00:00',
                'days' => 10,
                'category_id' => 3,
                'price' => 350,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'The_stage_of_the_South_Theatre.jpg',
                'guide_id' => 4
            ], [
                'name' => ' The Ionic columns of the Oval Forum',
                'description' => 'Azraq is a city in the middle of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 5,
                'category_id' => 3,
                'price' => 100,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'The_Ionic_columns_of_the_Oval_Forum.jpg',
                'guide_id' => 4
            ],
            //Ajloun
            [
                'name' => 'Ajloun Castle',
                'description' => 'Ajloun Castle is in a city of Ajlioun in the north of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 7,
                'category_id' => 4,
                'price' => 70,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Ajloun_Castle.jpg',
                'guide_id' => 4
            ],
            [
                'name' => 'Mar Elias',
                'description' => 'Mar Elias is a city in Ajlioun the north of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 4,
                'category_id' => 4,
                'price' => 100,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Mar_Elias.jpg',
                'guide_id' => 4
            ],
            //Madaba
            [
                'name' => "SAINT GEORGE'S CHURCH ALIAS CHURCH OF THE MAP",
                'description' => 'SAINT GEORGE\'S CHURCH ALIAS CHURCH OF THE MAP is a city in Ajlioun the north of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 3,
                'category_id' => 5,
                'price' => 150,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'S_CHURCH_ALIAS_CHURCH_OF_THE_MAP.jpg',
                'guide_id' => 4
            ], [
                'name' => 'ARCHEOLOGICAL PARK II & BURNT PALACE',
                'description' => 'ARCHEOLOGICAL PARK II & BURNT PALACE is in a city of Madaba in the north of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 10,
                'category_id' => 5,
                'price' => 200,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'ARCHEOLOGICAL_PARK_II_&_BURNT_PALACE.jfif',
                'guide_id' => 4
            ],
            //Aqaba
            [
                'name' => 'Mamluk Castle',
                'description' => 'Mamluk Castle is in a city of Aqaba in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 14,
                'category_id' => 6,
                'price' => 250,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Mamluk_Castle.jpg',
                'guide_id' => 4
            ],
            [
                'name' => 'The ruins of Ayla',
                'description' => 'The ruins of Ayla is in a city of Aqaba in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 10,
                'category_id' => 6,
                'price' => 500,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'The_ruins_of_Ayla.jpg',
                'guide_id' => 4
            ],
            //Ma\'an
            [
                'name' => 'Shobak Castle',
                'description' => 'Shobak Castle is in a city of Ma\'an in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 3,
                'category_id' => 7,
                'price' => 100,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Shobak_Castle.jpg',
                'guide_id' => 4
            ],
            [
                'name' => 'Street of Facades',
                'description' => 'Street of Facades is in a city of Ma\'an in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 2,
                'category_id' => 7,
                'price' => 50,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Street_of_Facades.jpg',
                'guide_id' => 4
            ],
            //Karak
            [
                'name' => 'The Museum at the Lowest Place on Earth',
                'description' => 'The Museum at the Lowest Place on Earth is in a city of Karak in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 10,
                'category_id' => 8,
                'price' => 150,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'The_Museum_at_the_Lowest_Place_on_Earth.jpg',
                'guide_id' => 4
            ],
            [
                'name' => 'Wadi Bin Hammad',
                'description' => 'Wadi Bin Hammad is in a city of Karak in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 11,
                'category_id' => 8,
                'price' => 300,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Wadi_Bin_Hammad.jpg',
                'guide_id' => 4
            ],
            //Al Mafraq
            [
                'name' => 'National Archaeological Museum',
                'description' => 'National Archaeological Museum is in a city of Al Mafraq in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 4,
                'category_id' => 9,
                'price' => 200,
                'max_visitors' => 24,
                'minimum_age' => 18,
                'image' => 'National_Archaeological_Museum.jpg',
                'guide_id' => 4
            ],
            [
                'name' => 'Abu Darwish Mosque',
                'description' => 'Abu Darwish Mosque is in a city of Al Mafraq in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 2,
                'category_id' => 9,
                'price' => 50,
                'max_visitors' => 24,
                'minimum_age' => 18,
                'image' => 'Abu_Darwish_Mosque.jpg',
                'guide_id' => 4
            ], //Al Salt
            [
                'name' => 'Abu Jaber Museum',
                'description' => 'Abu Jaber Museum is in a city of Al Salt in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 3,
                'category_id' => 10,
                'price' => 50,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Abu_Jaber_Museum.jpg',
                'guide_id' => 4
            ],
            [
                'name' => 'Prophet Joshua\'s Shrine',
                'description' => 'Prophet Joshua\'s Shrine is in a city of Al Salt in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 3,
                'category_id' => 10,
                'price' => 150,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Prophet_Joshuas_Shrine.jpg',
                'guide_id' => 4
            ],
            //Balqa`a
            [
                'name' => 'The Harmony Trail',
                'description' => 'The Harmony Trail is in a city of Al Balqa`a in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 4,
                'category_id' => 11,
                'price' => 250,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'The_Harmony_Trail.jpg',
                'guide_id' => 4
            ],
            [
                'name' => 'Al Salt Archaeological Museum',
                'description' => 'Al Salt Archaeological Museum is in a city of Al Balqa`a in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 3,
                'category_id' => 11,
                'price' => 250,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Al_Salt_Archaeological_Museum.jpg',
                'guide_id' => 4
            ],
            //Tafila
            [
                'name' => 'Wadi Ghuweir',
                'description' => 'Wadi Ghuweir is in a city of Tafila in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 10,
                'category_id' => 12,
                'price' => 750,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Wadi_Ghuweir.jpg',
                'guide_id' => 4
            ],
            [
                'name' => 'Dana Cooperative - Hiking and Trails',
                'description' => 'Dana Cooperative - Hiking and Trails is in a city of Tafila in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 5,
                'category_id' => 12,
                'price' => 250,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Dana_Cooperative_Hiking_and_Trails.jpg',
                'guide_id' => 4
            ],
            //Al Zarqa
            [
                'name' => 'Shaumari Nature Reserve',
                'description' => 'Wadi Ghuweir is in a city of Al Zarqa in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 4,
                'category_id' => 13,
                'price' => 150,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Shaumari_Nature_Reserve.jpeg',
                'guide_id' => 4
            ],
            [
                'name' => 'Quseir Amra',
                'description' => 'Quseir Amra is in a city of Al Zarqa in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
                'date' => '2022-02-10 00:00:00',
                'days' => 3,
                'category_id' => 13,
                'price' => 50,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'Quseir_Amra.jpg',
                'guide_id' => 3
            ],

        ]);
    }
}
