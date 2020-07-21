<?php

use App\Field;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            //first group fields
            [
                'id' => 1,
                'name' => 'Firma *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Straße *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Nr. *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'PLZ *',
                'type' => 'number',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Ort *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'Land *',
                'type' => 'select',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 7,
                'name' => 'Geschäftsführer',
                'type' => 'text',
                'required' => false,
                'group_id' => 1
            ],
            [
                'id' => 8,
                'name' => 'Hast Du eine USt-IdNr.? *',
                'type' => 'select',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 9,
                'name' => 'USt-IdNr. *',
                'type' => 'text',
                'required' => false,
                'group_id' => 1
            ],

            //second group fields
            [
                'id' => 10,
                'name' => 'Anrede *',
                'type' => 'select',
                'required' => true,
                'group_id' => 2
            ],
            [
                'id' => 11,
                'name' => 'Vorname *',
                'type' => 'text',
                'required' => true,
                'group_id' => 2
            ],
            [
                'id' => 12,
                'name' => 'Nachname *',
                'type' => 'text',
                'required' => true,
                'group_id' => 2
            ],
            [
                'id' => 13,
                'name' => 'Telefon *',
                'type' => 'text',
                'required' => true,
                'group_id' => 2
            ],
            [
                'id' => 14,
                'name' => 'Mobil',
                'type' => 'text',
                'required' => false,
                'group_id' => 2
            ],
            [
                'id' => 15,
                'name' => 'E-Mail *',
                'type' => 'email',
                'required' => true,
                'group_id' => 2
            ],
            [
                'id' => 16,
                'name' => 'Website',
                'type' => 'text',
                'required' => false,
                'group_id' => 2
            ],

            //third group fields
            [
                'id' => 17,
                'name' => 'Versandgut *',
                'type' => 'text',
                'required' => true,
                'group_id' => 3
            ],
            [
                'id' => 18,
                'name' => 'Ø Warenwert € *',
                'type' => 'number',
                'required' => true,
                'group_id' => 3
            ],

            //fourth group fields
            [
                'id' => 19,
                'name' => 'LETTER (national) in Stück',
                'type' => 'number',
                'required' => false,
                'group_id' => 4
            ],
            [
                'id' => 20,
                'name' => 'LETTER (international) in Stück',
                'type' => 'number',
                'required' => false,
                'group_id' => 4
            ],
            [
                'id' => 21,
                'name' => 'PARCEL (international) in Stück',
                'type' => 'number',
                'required' => false,
                'group_id' => 4
            ],

            //fifth group fields
            [
                'id' => 22,
                'name' => 'Abrechnungsmodell LETTER *',
                'type' => 'select',
                'required' => true,
                'group_id' => 5
            ],
            [
                'id' => 23,
                'name' => 'gew-prod',
                'name' => 'Gewichts- & Produktauswahl *',
                'type' => 'select',
                'required' => true,
                'group_id' => 5
            ],
            [
                'id' => 24,
                'name' => 'Mindestprodukt bei LETTER & PARCEL Check *',
                'type' => 'select',
                'required' => false,
                'group_id' => 5
            ],
            [
                'id' => 25,
                'name' => 'PARCEL Volume *',
                'type' => 'select',
                'required' => true,
                'group_id' => 5
            ],
            [
                'id' => 26,
                'name' => 'vein',
                'name' => 'Vereinbarte Mindestmenge in Stück/Monat *',
                'type' => 'number',
                'required' => false,
                'group_id' => 5
            ],
            [
                'id' => 27,
                'name' => 'Vereinbarter Mindermengenzuschlag in Euro/Monat *',
                'type' => 'number',
                'required' => false,
                'group_id' => 5
            ],

            //sixth group fields
            [
                'id' => 28,
                'name' => 'Welches Betriebssystem nutzt Du? *',
                'type' => 'select',
                'required' => true,
                'group_id' => 6
            ],
            [
                'id' => 29,
                'name' => 'Wawi/ERP System',
                'type' => 'select',
                'required' => false,
                'group_id' => 6
            ],
            [
                'id' => 30,
                'name' => 'Wawi/ERP System Bezeichnung *',
                'type' => 'text',
                'required' => false,
                'group_id' => 6
            ],
            [
                'id' => 31,
                'name' => 'Shopsystem',
                'type' => 'select',
                'required' => false,
                'group_id' => 6
            ],
            [
                'id' => 32,
                'name' => 'Shopsystem Bezeichnung *',
                'type' => 'text',
                'required' => false,
                'group_id' => 6
            ],
            [
                'id' => 33,
                'name' => 'API-Anbindung *',
                'type' => 'select',
                'required' => true,
                'group_id' => 6
            ],

            //seventh group fields
//            [
//                'id' => 27,
//                'name' => 'LogSelect *',
//                'type' => 'select',
//                'required' => true,
//                'group_id' => 7
//            ],
            [
                'id' => 34,
                'name' => 'Einzelplatz oder Mehrplatz *',
                'type' => 'select',
                'required' => true,
                'group_id' => 7
            ],
            [
                'id' => 35,
                'name' => 'Installation an wie vielen Standorten *',
                'type' => 'select',
                'required' => true,
                'group_id' => 7
            ],
            [
                'id' => 36,
                'name' => 'Installation an wie vielen PCs *',
                'type' => 'select',
                'required' => true,
                'group_id' => 7
            ],

            //eighth group fields
            [
                'id' => 37,
                'name' => 'Ansprechpartner',
                'type' => 'text',
                'required' => false,
                'group_id' => 8
            ],
            [
                'id' => 38,
                'name' => 'Telefon',
                'type' => 'text',
                'required' => false,
                'group_id' => 8
            ],
            [
                'id' => 39,
                'name' => 'E-Mail',
                'type' => 'email',
                'required' => false,
                'group_id' => 8
            ],

            //ninth group fields
            [
                'id' => 40,
                'name' => 'Name *',
                'type' => 'text',
                'required' => true,
                'group_id' => 9
            ],
            [
                'id' => 41,
                'name' => 'Straße *',
                'type' => 'text',
                'required' => true,
                'group_id' => 9
            ],
            [
                'id' => 42,
                'name' => 'Nr. *',
                'type' => 'text',
                'required' => true,
                'group_id' => 9
            ],
            [
                'id' => 43,
                'name' => 'PLZ *',
                'type' => 'text',
                'required' => true,
                'group_id' => 9
            ],
            [
                'id' => 44,
                'name' => 'Ort *',
                'type' => 'text',
                'required' => true,
                'group_id' => 9
            ],
            [
                'id' => 45,
                'name' => 'Land *',
                'type' => 'select',
                'required' => true,
                'group_id' => 9
            ],

            //tenth group fields
            [
                'id' => 46,
                'name' => 'IBAN *',
                'type' => 'text',
                'required' => true,
                'group_id' => 10
            ],
            [
                'id' => 47,
                'name' => 'BIC *',
                'type' => 'text',
                'required' => true,
                'group_id' => 10
            ],
            [
                'id' => 48,
                'name' => 'Zahlungsdienstleister *',
                'type' => 'text',
                'required' => true,
                'group_id' => 10
            ],

            //eleventh group field
            [
                'id' => 49,
                'name' => 'Angebotsdatum *',
                'type' => 'date',
                'required' => true,
                'group_id' => 11
            ],
        ];

        foreach($fields as $field)
        {
            Field::create($field);
        }
    }
}
