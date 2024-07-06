<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'user_id' => '1',
                'state' => '0',
                'property' => '2',
                'price' => '330000',
                'detail' => 'Kiraye bag verilir. Her bir şarayeti var.',
                'area' => '2',
                'extract' => '0',
                'mortgage' => '1',
            ],
            [
                'user_id' => '1',
                'state' => '0',
                'property' => '2',
                'price' => '1584955',
                'detail' => 'Zaqulba gəsəbəsində Mirvari ve Serloks restoranlarinin yaxinliginda,denizden 400 m masafada 7.2 sotda 225 kv 5 otaqli super təmirli bag evi satilir. Evin 4 yataq otagi, 1 genis gonaq otagi,mətbəxt va 3 sanuzeli vardir. Su, qaz,isiq daimidir. Döşəmələr isti pol, istilik kombi. Həyətinda genis filterli hovuz,besedka,pultla idara olunan darvaza.Ev muhafiza polisina goşulub va 24 saat gorunur. Sənəd kupca.Bu ərazidə torpagin sotu 20000-25000man. Vasitaciler mükafatlandirilir!!!! Эксклюзив!!!! В Загульбе рядом с Мирвари и Шерлокс ресторанами 400 метров от моря на 7.2 сотках общей площадью 225кв 5 комнатная дача(4 спальни,гостинная и кухня) с 3санузлами.Супер евро ремонт,все полы с подогревом _идеальная дача для круглогодичного проживания.Дом подключен сигнализацией к полиции и находится 24 часа под охраной. Бассейн с фильтором, зеленый газон идеревья.Документы купча.В этой части 1 сотка земли стоит 20.000-25.000 ман.Посредники вознаграждаются!!!!',
                'area' => '2',
                'extract' => '',
                'mortgage' => '',
            ],
            [
                'user_id' => '1',
                'state' => '1',
                'property' => '2',
                'price' => '1257',
                'detail' => 'Tecili satilir..Novxanida Novxani Belediyesinin arxsinda 2 mertebeli 4 otagli ela temirli ev Tecili satilir. Senedler qaydasindadi evin ve torpagin cixarisi var. Real aliciyla qiymetde razilasmaq olar.Etrafli melumat ucun elaqe saxlayin.',
                'area' => '2',
                'extract' => '',
                'mortgage' => '',
            ]
        ];

        foreach ($properties as $property) {
            Property::create([
                'user_id' => $property['user_id'],
                'state' => $property['state'],
                'property' => $property['property'],
                'price' => $property['price'],
                'detail' => $property['detail'],
                'area' => $property['area'],
                'extract' => $property['extract'],
                'mortgage' => $property['mortgage'],
            ]);
        } 
    }
}
