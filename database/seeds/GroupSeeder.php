<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            //first step groups
            [
                'id' => 1,
                'name' => 'Rechnungsadresse',
                'step_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Kontakt',
                'step_id' => 1
            ],

            //second step groups
            [
                'id' => 3,
                'name' => 'Details zur Ware',
                'step_id' => 2
            ],
            [
                'id' => 4,
                'name' => 'Geplante Sendungsmengen im Jahr',
                'step_id' => 2
            ],

            //third step group
            [
                'id' => 5,
                'name' => 'Details zur Produktauswahl und Abrechnung',
                'step_id' => 3
            ],

            //fourth step groups
            [
                'id' => 6,
                'name' => 'Details zur technischen Anbindung',
                'step_id' => 4
            ],
            [
                'id' => 7,
                'name' => 'Details zur Logselect Installation',
                'step_id' => 4
            ],
            [
                'id' => 8,
                'name' => 'Technischer Ansprechpartner',
                'step_id' => 4
            ],

            //fifth step groups
            [
                'id' => 9,
                'name' => 'Name und Anschrift des Kontoinhabers',
                'step_id' => 5
            ],
            [
                'id' => 10,
                'name' => 'E-Mail-Adresse für Rechnungen',
                'step_id' => 5
            ],
            [
                'id' => 11,
                'name' => 'Details zur Bank',
                'step_id' => 5
            ],

            //sixth step group
            [
                'id' => 12,
                'name' => 'Angebotsdatum und Zustimmung',
                'step_id' => 6
            ]
        ];

        foreach($groups as $group)
        {
            Group::create($group);
        }

    }
}
