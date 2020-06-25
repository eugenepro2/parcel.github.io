<?php

use App\Option;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            [
                'id' => 1,
                'name' => 'Kein LETTER, nur PARCEL',
                'field_id' => 17,
            ],
            [
                'id' => 2,
                'name' => 'Nach Gewichtsstaffel (LETTER Eco+Basic)',
                'field_id' => 17,
            ],
            [
                'id' => 3,
                'name' => 'Nach Kilotarif (LETTER Plus)',
                'field_id' => 17,
            ],

            //
            [
                'id' => 5,
                'name' => '+0,35 €/Sendung LETTER & PARCEL Check',
                'field_id' => 18,
            ],
            [
                'id' => 6,
                'name' => '+0,25 €/Sendung PARCEL Check',
                'field_id' => 18,
            ],
            [
                'id' => 7,
                'name' => '+0,00 € vom Versender selbst',
                'field_id' => 18,
            ],

           //
            [
                'id' => 8,
                'name' => 'Kein LETTER & PARCEL Check',
                'field_id' => 19,
            ],
            [
                'id' => 9,
                'name' => 'LETTER Hub - Nachweis',
                'field_id' => 19,
            ],
            [
                'id' => 10,
                'name' => 'LETTER Ländernachweis',
                'field_id' => 19,
            ],
            [
                'id' => 11,
                'name' => 'LETTER ohne Tracking',
                'field_id' => 19,
            ],
            [
                'id' => 12,
                'name' => 'LETTER mit Einschreiben 0 € Versicherung',
                'field_id' => 19,
            ],
            [
                'id' => 13,
                'name' => 'LETTER mit Einschreiben 25 € Versicherung',
                'field_id' => 19,
            ],
            [
                'id' => 14,
                'name' => 'LETTER mit Einschreiben 55 € Versicherung',
                'field_id' => 19,
            ],
            [
                'id' => 15,
                'name' => 'PARCEL als Eco',
                'field_id' => 19,
            ],
            [
                'id' => 16,
                'name' => 'PARCEL als Basic',
                'field_id' => 19,
            ],

            //
            [
                'id' => 17,
                'name' => 'Actindo',
                'field_id' => 23,
            ],
            [
                'id' => 18,
                'name' => 'Afterbuy',
                'field_id' => 23,
            ],
            [
                'id' => 19,
                'name' => 'BüroWare',
                'field_id' => 23,
            ],
            [
                'id' => 20,
                'name' => 'Comarch ERP 4.0',
                'field_id' => 23,
            ],
            [
                'id' => 21,
                'name' => 'eFulfilment',
                'field_id' => 23,
            ],
            [
                'id' => 22,
                'name' => 'JTL WaWi',
                'field_id' => 23,
            ],
            [
                'id' => 23,
                'name' => 'Lexware',
                'field_id' => 23,
            ],
            [
                'id' => 24,
                'name' => 'Navision',
                'field_id' => 23,
            ],
            [
                'id' => 25,
                'name' => 'orgaMAX',
                'field_id' => 23,
            ],
            [
                'id' => 26,
                'name' => 'OXID eShop',
                'field_id' => 23,
            ],
            [
                'id' => 27,
                'name' => 'PIXI',
                'field_id' => 23,
            ],
            [
                'id' => 28,
                'name' => 'Plentymarkets',
                'field_id' => 23,
            ],
            [
                'id' => 29,
                'name' => 'Sage',
                'field_id' => 23,
            ],
            [
                'id' => 30,
                'name' => 'SAP',
                'field_id' => 23,
            ],
            [
                'id' => 31,
                'name' => 'WISO',
                'field_id' => 23,
            ],
            [
                'id' => 32,
                'name' => 'Xentral',
                'field_id' => 23,
            ],
            [
                'id' => 33,
                'name' => 'Anderes',
                'field_id' => 23,
            ],

            //
            [
                'id' => 34,
                'name' => 'DreamRobot',
                'field_id' => 25,
            ],
            [
                'id' => 35,
                'name' => 'Gambio GX2',
                'field_id' => 25,
            ],
            [
                'id' => 36,
                'name' => 'Magento',
                'field_id' => 25,
            ],
            [
                'id' => 37,
                'name' => 'OpenCart',
                'field_id' => 25,
            ],
            [
                'id' => 38,
                'name' => 'osCommerce',
                'field_id' => 25,
            ],
            [
                'id' => 39,
                'name' => 'OXID eShop',
                'field_id' => 25,
            ],
            [
                'id' => 40,
                'name' => 'Plentymarkets',
                'field_id' => 25,
            ],
            [
                'id' => 41,
                'name' => 'PrestaShop',
                'field_id' => 25,
            ],
            [
                'id' => 42,
                'name' => 'Shopify',
                'field_id' => 25,
            ],
            [
                'id' => 43,
                'name' => 'Shopware',
                'field_id' => 25,
            ],
            [
                'id' => 44,
                'name' => 'WooCommerce',
                'field_id' => 25,
            ],
            [
                'id' => 45,
                'name' => 'xt:Commerce',
                'field_id' => 25,
            ],
            [
                'id' => 46,
                'name' => 'Anderes',
                'field_id' => 25,
            ],

            //
            [
                'id' => 47,
                'name' => 'JTL Shipping',
                'field_id' => 27,
            ],
            [
                'id' => 48,
                'name' => 'OXID',
                'field_id' => 27,
            ],
            [
                'id' => 49,
                'name' => 'pixi',
                'field_id' => 27,
            ],
            [
                'id' => 50,
                'name' => 'Plentymarkets',
                'field_id' => 27,
            ],
            [
                'id' => 51,
                'name' => 'Shipcloud',
                'field_id' => 27,
            ],
            [
                'id' => 52,
                'name' => 'Tricoma',
                'field_id' => 27,
            ],
            [
                'id' => 53,
                'name' => 'Xentral',
                'field_id' => 27,
            ],
            [
                'id' => 54,
                'name' => 'keine von den genannten',
                'field_id' => 27,
            ],

            //
//            [
//                'id' => 54,
//                'name' => 'Ja',
//                'field_id' => 27,
//            ],
//            [
//                'id' => 55,
//                'name' => 'Nein',
//                'field_id' => 27,
//            ],

            //
            [
                'id' => 56,
                'name' => 'Einzelplatz',
                'field_id' => 28,
            ],
            [
                'id' => 57,
                'name' => 'Mehrplatz',
                'field_id' => 28,
            ],

            //
            [
                'id' => 58,
                'name' => '1',
                'field_id' => 29,
            ],
            [
                'id' => 59,
                'name' => '2',
                'field_id' => 29,
            ],
            [
                'id' => 60,
                'name' => '3+',
                'field_id' => 29,
            ],

            //
            [
                'id' => 61,
                'name' => '1',
                'field_id' => 30,
            ],
            [
                'id' => 62,
                'name' => '2',
                'field_id' => 30,
            ],
            [
                'id' => 63,
                'name' => '3',
                'field_id' => 30,
            ],
            [
                'id' => 64,
                'name' => '4',
                'field_id' => 30,
            ],
            [
                'id' => 65,
                'name' => '5',
                'field_id' => 30,
            ],
            [
                'id' => 66,
                'name' => '6+',
                'field_id' => 30,
            ],

            //parcel volume
            [
                'id' => 68,
                'name' => 'Ja',
                'field_id' => 20,
            ],

            [
                'id' => 69,
                'name' => 'Nein',
                'field_id' => 20,
            ],




        ];

        foreach($options as $option)
        {
            Option::create($option);
        }
    }
}
