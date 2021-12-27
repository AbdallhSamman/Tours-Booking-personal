<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'category_name' => 'irbid',
                'category_desc' => 'Irbid (Arabic: إِربِد), known in ancient times as Arabella or Arbela (Άρβηλα in Ancient Greek), is the capital and largest city of the Irbid Governorate. It also has the second largest metropolitan population in Jordan after Amman',
                'category_img' => '1640456236-اربد.jpg'

            ],
            [
                'category_name' => 'Amman',
                'category_desc' => 'Amman, Arabic ʿAmmān, biblical Hebrew Rabbath Ammon, ancient Greek Philadelphia, capital and largest city of Jordan. It is the residence of the king and the seat of government. ... Amman\'s focus of settlement throughout history has been the small high triangular plateau (modern Mount Al-Qalʿah) just north of the wadi.',
                'category_img' => '1640456071-amman.jpg'

            ],
            [
                'category_name' => 'Jerash',
                'category_desc' => 'Jerash (or Gerasa) is an ancient city in Jordan located 48km (30 miles) north of the capital, Amman (map). Famous as being one of the best preserved Greco-Roman cities in the Middle East, Jerash is one of the top attractions in Jordan (alongside Petra) and is certainly a must-visit. ... The old and the new of Jerash.',
                'category_img' => '1640456149-jarash.PNG'


            ],
            [
                'category_name' => 'Ajloun',
                'category_desc' => 'Ajloun Castle, medieval name Qalʻat ar-Rabad, is a 12th-century Muslim castle situated in northwestern Jordan. It is placed on a hilltop belonging to the Mount Ajloun district, also known as Jabal \'Auf after a Bedouin tribe which had captured the area in the 12th century',
                'category_img' => '1640456018-Ajlun_Green.jpg'

            ],
            [
                'category_name' => 'Madaba',
                'category_desc' => 'Best known for its spectacular Byzantine and Umayyad mosaics, Madaba is home to the famous 6th century Mosaic Map of Jerusalem and the Holy Land. With two million pieces of vividly colored local stone, it depicts hills and valleys, villages and towns as far as the Nile Delta.',
                'category_img' => '1640456275-مادبا.PNG'

            ],
            [
                'category_name' => 'Aqaba',
                'category_desc' => 'Aqaba, the only coastal city in Jordan, is a base for diving the coral reefs of the Red Sea or heading to the Star Wars-esque landscape of the rocky Wadi Rum. The city landmarks – from ancient ruins to a showstopping mosque – illuminate fascinating elements of Islamic culture and Middle Eastern history.',
                'category_img' => '1640456102-aqaba.jpg'

            ],
            [
                'category_name' => 'Ma\'an',
                'category_desc' => 'is a city in southern Jordan, 218 kilometres (135 mi) southwest of the capital Amman. It serves as the capital of the Ma\'an Governorate. Its population is approximately 41,055 in 2015. Civilizations with the name of Ma\'an have existed at least since the Nabatean period—the modern city is just northwest of the ancient town. The city is an important transport hub situated on the ancient Kings Highway and also on the modern Desert Highway.',
                'category_img' => '1640456179-Maan.PNG'

            ],
            [
                'category_name' => 'Karak',
                'category_desc' => 'Al-Karak has a view of the Dead Sea. A city of about 32,216 people (2005) has been built up around the castle and it has buildings from the 19th-century Ottoman period. The town is built on a triangular plateau, with the castle at its narrow southern tip.',
                'category_img' => '00-Kerak_BW-2000-750_01.jpg'

            ],
            [
                'category_name' => 'AL-Mafraq',
                'category_desc' => 'Al-Mafraq, local dialects: Mafrag or Mafra\' , "crossroads") is the capital city of Mafraq Governorate in Jordan, located 80 km to the north from the capital Amman in crossroad to Syria to the north and Iraq to the east. It had 56,340 inhabitants in 2004.',
                'category_img' => '1640456197-mafraq.png'

            ],
            [
                'category_name' => 'AL-Salt',
                'category_desc' => 'Al-Salt (Arabic: As-Salt — pronounced Es-Sult or Es-Salt) is an ancient agricultural city and administrative centre in west-central Jordan. It is on the old main highway leading from Amman to Jerusalem.',
                'category_img' => '1640456053-salt.jpg'

            ],
            [
                'category_name' => 'Balqa\'a',
                'category_desc' => 'Balqa\' is one of the governorates of Jordan. It is located northwest of Amman, Jordan\'s capital. The governorate has the fourth largest population of the 12 governorates of Jordan, and is ranked 10th by area. It has the third highest population density in the kingdom after Irbid Governorate and Jerash Governorate.',
                'category_img' => '1640456124-balqa.PNG'

            ],
            [
                'category_name' => 'Tafila',
                'category_desc' => 'Tafaila is a town and municipality located in the province and autonomous community of Navarre, northern Spain. The Postal code is 31300. Tafalla is an industrial and agricultural town. It produces beef, mutton, pork and chicken.',
                'category_img' => '1640456216-tafilla.PNG'

            ],
            [
                'category_name' => 'Al-Zarqa',
                'category_desc' => 'Zarqa is the capital of Zarqa Governorate in Jordan. Its name means "the blue". It had a population of 635,160 inhabitants in 2015, and is the most populous city in Jordan after Amman.',
                'category_img' => '1640456254-زرقاء.png'

            ],
        ]);
    }
}
