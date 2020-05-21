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
                'name' => 'Straße, Nr. *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'PLZ, Ort *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Land *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Geschäftsführer',
                'type' => 'text',
                'required' => false,
                'group_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'Ust.-ID Nr.',
                'type' => 'text',
                'required' => false,
                'group_id' => 1
            ],

            //second group fields
            [
                'id' => 7,
                'name' => 'Telefon *',
                'type' => 'text',
                'required' => true,
                'group_id' => 2
            ],
            [
                'id' => 8,
                'name' => 'Mobil',
                'type' => 'text',
                'required' => false,
                'group_id' => 2
            ],
            [
                'id' => 9,
                'name' => 'E-Mail *',
                'type' => 'email',
                'required' => true,
                'group_id' => 2
            ],
            [
                'id' => 10,
                'name' => 'Website',
                'type' => 'text',
                'required' => false,
                'group_id' => 2
            ],

            //third group fields
            [
                'id' => 11,
                'name' => 'Versandgut *',
                'type' => 'text',
                'required' => true,
                'group_id' => 3
            ],
            [
                'id' => 12,
                'name' => 'Ø Warenwert *',
                'type' => 'number',
                'required' => true,
                'group_id' => 3
            ],

            //fourth group fields
            [
                'id' => 13,
                'name' => 'LETTER (national) in Stück',
                'type' => 'number',
                'required' => false,
                'group_id' => 4
            ],
            [
                'id' => 14,
                'name' => 'LETTER (international) in Stück',
                'type' => 'number',
                'required' => false,
                'group_id' => 4
            ],
            [
                'id' => 15,
                'name' => 'PARCEL (international) in Stück',
                'type' => 'number',
                'required' => false,
                'group_id' => 4
            ],

            //fifth group fields
            [
                'id' => 16,
                'name' => 'Abrechnungsmodell LETTER *',
                'type' => 'select',
                'required' => true,
                'group_id' => 5
            ],
            [
                'id' => 17,
                'name' => 'gew-prod',
                'name' => 'Gewichts- & Produktauswahl *',
                'type' => 'select',
                'required' => true,
                'group_id' => 5
            ],
            [
                'id' => 18,
                'name' => 'Mindestprodukt bei LETTER & PARCEL Check *',
                'type' => 'select',
                'required' => true,
                'group_id' => 5
            ],
            [
                'id' => 19,
                'name' => 'PARCEL Volume',
                'type' => 'select',
                'required' => false,
                'group_id' => 5
            ],
            [
                'id' => 20,
                'name' => 'vein',
                'name' => 'Vereinbarte Mindestmenge in Stück/Monat *',
                'type' => 'number',
                'required' => false,
                'group_id' => 5
            ],
            [
                'id' => 21,
                'name' => 'Vereinbarter Mindermengenzuschlag in Euro/Monat *',
                'type' => 'number',
                'required' => false,
                'group_id' => 5
            ],

            //sixth group fields
            [
                'id' => 22,
                'name' => 'Wawi/ERP System *',
                'type' => 'select',
                'required' => true,
                'group_id' => 6
            ],
            [
                'id' => 23,
                'name' => 'Wawi/ERP System Bezeichnung *',
                'type' => 'text',
                'required' => true,
                'group_id' => 6
            ],
            [
                'id' => 24,
                'name' => 'Shopsystem *',
                'type' => 'select',
                'required' => true,
                'group_id' => 6
            ],
            [
                'id' => 25,
                'name' => 'Shopsystem Bezeichnung *',
                'type' => 'text',
                'required' => true,
                'group_id' => 6
            ],
            [
                'id' => 26,
                'name' => 'API-Anbindung *',
                'type' => 'select',
                'required' => true,
                'group_id' => 6
            ],

            //seventh group fields
            [
                'id' => 27,
                'name' => 'LogSelect *',
                'type' => 'select',
                'required' => true,
                'group_id' => 7
            ],
            [
                'id' => 28,
                'name' => 'Einzelplatz oder Mehrplatz',
                'type' => 'select',
                'required' => false,
                'group_id' => 7
            ],
            [
                'id' => 29,
                'name' => 'Installation an wie vielen Standorten',
                'type' => 'select',
                'required' => false,
                'group_id' => 7
            ],
            [
                'id' => 30,
                'name' => 'Installation an wie vielen PCs',
                'type' => 'select',
                'required' => false,
                'group_id' => 7
            ],

            //eighth group fields
            [
                'id' => 31,
                'name' => 'Ansprechpartner',
                'type' => 'text',
                'required' => false,
                'group_id' => 8
            ],
            [
                'id' => 32,
                'name' => 'Telefon',
                'type' => 'text',
                'required' => false,
                'group_id' => 8
            ],
            [
                'id' => 33,
                'name' => 'E-Mail',
                'type' => 'email',
                'required' => false,
                'group_id' => 8
            ],

            //ninth group fields
            [
                'id' => 34,
                'name' => 'Name *',
                'type' => 'text',
                'required' => true,
                'group_id' => 9
            ],
            [
                'id' => 35,
                'name' => 'Straße, Nr. *',
                'type' => 'text',
                'required' => true,
                'group_id' => 9
            ],
            [
                'id' => 36,
                'name' => 'PLZ, Ort *',
                'type' => 'text',
                'required' => true,
                'group_id' => 9
            ],

            //tenth group fields
            [
                'id' => 37,
                'name' => 'Zahlungsdienstleister *',
                'type' => 'text',
                'required' => true,
                'group_id' => 10
            ],
            [
                'id' => 38,
                'name' => 'IBAN *',
                'type' => 'text',
                'required' => true,
                'group_id' => 10
            ],
            [
                'id' => 39,
                'name' => 'BIC *',
                'type' => 'text',
                'required' => true,
                'group_id' => 10
            ],

            //eleventh group field
            [
                'id' => 40,
                'name' => 'Datum *',
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
