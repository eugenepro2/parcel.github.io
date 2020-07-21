<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Deutschland',
            ],
            [
                'name' => 'Afghanistan',
            ],
            [
                'name' => 'Ägypten',
            ],
            [
                'name' => 'Albanien',
            ],
            [
                'name' => 'Algerien',
            ],
            [
                'name' => 'Andorra',
            ],
            [
                'name' => 'Angola',
            ],
            [
                'name' => 'Antigua und Barbuda',
            ],
            [
                'name' => 'Äquatorialguinea',
            ],
            [
                'name' => 'Argentinien',
            ],
            [
                'name' => 'Armenien',
            ],
            [
                'name' => 'Aserbaidschan',
            ],
            [
                'name' => 'Äthiopien',
            ],
            [
                'name' => 'Australien',
            ],
            [
                'name' => 'Bahamas',
            ],
            [
                'name' => 'Bahrain',
            ],
            [
                'name' => 'Bangladesch',
            ],
            [
                'name' => 'Barbados',
            ],
            [
                'name' => 'Belarus',
            ],
            [
                'name' => 'Belgien',
            ],
            [
                'name' => 'Belize',
            ],
            [
                'name' => 'Benin',
            ],
            [
                'name' => 'Bhutan',
            ],
            [
                'name' => 'Bolivien',
            ],
            [
                'name' => 'Bosnien und Herzegowina',
            ],
            [
                'name' => 'Botsuana',
            ],
            [
                'name' => 'Brasilien',
            ],
            [
                'name' => 'Brunei Darussalam',
            ],
            [
                'name' => 'Bulgarien',
            ],
            [
                'name' => 'Burkina Faso',
            ],
            [
                'name' => 'Burundi',
            ],
            [
                'name' => 'Cabo Verde',
            ],
            [
                'name' => 'Chile',
            ],
            [
                'name' => 'China',
            ],
            [
                'name' => 'Cookinseln',
            ],
            [
                'name' => 'Costa Rica',
            ],
            [
                'name' => 'Côte d‘Ivoire' ,
            ],
            [
                'name' => 'Dänemark',
            ],
            [
                'name' => 'Dominica',
            ],
            [
                'name' => 'Dominikanische Republik',
            ],
            [
                'name' => 'Dschibuti',
            ],
            [
                'name' => 'Ecuador',
            ],
            [
                'name' => 'El Salvador',
            ],
            [
                'name' => 'Eritrea',
            ],
            [
                'name' => 'Estland',
            ],
            [
                'name' => 'Eswatini',
            ],
            [
                'name' => 'Fidschi',
            ],
            [
                'name' => 'Finnland',
            ],
            [
                'name' => 'Frankreich',
            ],
            [
                'name' => 'Gabun',
            ],
            [
                'name' => 'Gambia',
            ],
            [
                'name' => 'Georgien',
            ],
            [
                'name' => 'Ghana',
            ],
            [
                'name' => 'Grenada',
            ],
            [
                'name' => 'Griechenland',
            ],
            [
                'name' => 'Großbritannien',
            ],
            [
                'name' => 'Guatemala',
            ],
            [
                'name' => 'Guinea',
            ],
            [
                'name' => 'Guinea-Bissau',
            ],
            [
                'name' => 'Guyana',
            ],
            [
                'name' => 'Haiti',
            ],
            [
                'name' => 'Honduras',
            ],
            [
                'name' => 'Indien',
            ],
            [
                'name' => 'Indonesien',
            ],
            [
                'name' => 'Irak',
            ],
            [
                'name' => 'Iran',
            ],
            [
                'name' => 'Irland',
            ],
            [
                'name' => 'Island',
            ],
            [
                'name' => 'Israel',
            ],
            [
                'name' => 'Italien',
            ],
            [
                'name' => 'Jamaika',
            ],
            [
                'name' => 'Japan',
            ],
            [
                'name' => 'Jemen',
            ],
            [
                'name' => 'Jordanien',
            ],
            [
                'name' => 'Kambodscha',
            ],
            [
                'name' => 'Kamerun',
            ],
            [
                'name' => 'Kanada',
            ],
            [
                'name' => 'Kasachstan',
            ],
            [
                'name' => 'Katar',
            ],
            [
                'name' => 'Kenia',
            ],
            [
                'name' => 'Kirgisistan',
            ],
            [
                'name' => 'Kiribati',
            ],
            [
                'name' => 'Kolumbien',
            ],
            [
                'name' => 'Komoren',
            ],
            [
                'name' => 'Kongo',
            ],
            [
                'name' => 'Kongo, Demokratische Republik',
            ],
            [
                'name' => 'Korea, Demokratische Volksrepublik',
            ],
            [
                'name' => 'Korea, Republik',
            ],
            [
                'name' => 'Kosovo',
            ],
            [
                'name' => 'Kroatien',
            ],
            [
                'name' => 'Kuba',
            ],
            [
                'name' => 'Kuwait',
            ],
            [
                'name' => 'Laos',
            ],
            [
                'name' => 'Lesotho',
            ],
            [
                'name' => 'Lettland',
            ],
            [
                'name' => 'Libanon',
            ],
            [
                'name' => 'Liberia',
            ],
            [
                'name' => 'Libyen',
            ],
            [
                'name' => 'Liechtenstein',
            ],
            [
                'name' => 'Litauen',
            ],
            [
                'name' => 'Luxemburg',
            ],
            [
                'name' => 'Madagaskar',
            ],
            [
                'name' => 'Malawi',
            ],
            [
                'name' => 'Malaysia',
            ],
            [
                'name' => 'Malediven',
            ],
            [
                'name' => 'Mali',
            ],
            [
                'name' => 'Malta',
            ],
            [
                'name' => 'Marokko',
            ],
            [
                'name' => 'Marshallinseln',
            ],
            [
                'name' => 'Mauretanien',
            ],
            [
                'name' => 'Mauritius',
            ],
            [
                'name' => 'Mexiko',
            ],
            [
                'name' => 'Mikronesien',
            ],
            [
                'name' => 'Moldau',
            ],
            [
                'name' => 'Monaco',
            ],
            [
                'name' => 'Mongolei',
            ],
            [
                'name' => 'Montenegro',
            ],
            [
                'name' => 'Mosambik',
            ],
            [
                'name' => 'Myanmar',
            ],
            [
                'name' => 'Namibia',
            ],
            [
                'name' => 'Nauru',
            ],
            [
                'name' => 'Nepal',
            ],
            [
                'name' => 'Neuseeland',
            ],
            [
                'name' => 'Nicaragua',
            ],
            [
                'name' => 'Niederlande',
            ],
            [
                'name' => 'Niger',
            ],
            [
                'name' => 'Nigeria',
            ],
            [
                'name' => 'Nordmazedonien',
            ],
            [
                'name' => 'Norwegen',
            ],
            [
                'name' => 'Oman',
            ],
            [
                'name' => 'Österreich',
            ],
            [
                'name' => 'Pakistan',
            ],
            [
                'name' => 'Palau',
            ],
            [
                'name' => 'Panama',
            ],
            [
                'name' => 'Papua-Neuguinea',
            ],
            [
                'name' => 'Paraguay',
            ],
            [
                'name' => 'Peru',
            ],
            [
                'name' => 'Philippinen',
            ],
            [
                'name' => 'Polen',
            ],
            [
                'name' => 'Portugal',
            ],
            [
                'name' => 'Ruanda',
            ],
            [
                'name' => 'Rumänien',
            ],
            [
                'name' => 'Russische Föderation',
            ],
            [
                'name' => 'Salomonen',
            ],
            [
                'name' => 'Sambia',
            ],
            [
                'name' => 'Samoa',
            ],
            [
                'name' => 'San Marino',
            ],
            [
                'name' => 'São Tomé und Príncipe',
            ],
            [
                'name' => 'Saudi-Arabien',
            ],
            [
                'name' => 'Schweden',
            ],
            [
                'name' => 'Schweiz',
            ],
            [
                'name' => 'Senegal',
            ],
            [
                'name' => 'Serbien',
            ],
            [
                'name' => 'Seychellen',
            ],
            [
                'name' => 'Sierra Leone',
            ],
            [
                'name' => 'Simbabwe',
            ],
            [
                'name' => 'Singapur',
            ],
            [
                'name' => 'Slowakei',
            ],
            [
                'name' => 'Slowenien',
            ],
            [
                'name' => 'Somalia',
            ],
            [
                'name' => 'Spanien',
            ],
            [
                'name' => 'Sri Lanka',
            ],
            [
                'name' => 'St. Kitts und Nevis',
            ],
            [
                'name' => 'St. Lucia',
            ],
            [
                'name' => 'St. Vincent und die Grenadinen',
            ],
            [
                'name' => 'Südafrika',
            ],
            [
                'name' => 'Sudan',
            ],
            [
                'name' => 'Südsudan',
            ],
            [
                'name' => 'Suriname',
            ],
            [
                'name' => 'Syrien',
            ],
            [
                'name' => 'Tadschikistan',
            ],
            [
                'name' => 'Taiwan',
            ],
            [
                'name' => 'Tansania',
            ],
            [
                'name' => 'Thailand',
            ],
            [
                'name' => 'Timor-Leste',
            ],
            [
                'name' => 'Togo',
            ],
            [
                'name' => 'Tonga',
            ],
            [
                'name' => 'Trinidad und Tobago',
            ],
            [
                'name' => 'Tschad',
            ],
            [
                'name' => 'Tschechische Republik',
            ],
            [
                'name' => 'Tunesien',
            ],
            [
                'name' => 'Türkei',
            ],
            [
                'name' => 'Turkmenistan',
            ],
            [
                'name' => 'Tuvalu',
            ],
            [
                'name' => 'Uganda',
            ],
            [
                'name' => 'Ukraine',
            ],
            [
                'name' => 'Ungarn',
            ],
            [
                'name' => 'Uruguay',
            ],
            [
                'name' => 'Usbekistan',
            ],
            [
                'name' => 'Vanuatu',
            ],
            [
                'name' => 'Vatikanstadt',
            ],
            [
                'name' => 'Venezuela',
            ],
            [
                'name' => 'Vereinigte Arabische Emirate',
            ],
            [
                'name' => 'Vereinigte Staaten',
            ],
            [
                'name' => 'Vietnam',
            ],
            [
                'name' => 'Zentralafrikanische Republik',
            ],
            [
                'name' => 'Zypern',
            ],
        ];

        foreach($countries as $country)
        {
            Country::create($country);
        }
    }
}
