<?php

namespace Database\Seeders;

use App\Models\Commerce;
use Illuminate\Database\Seeder;

class CommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commerces = [
            [
                'name' => 'Peluquería Lola',
                'address' => 'Carrer del Raval de la Mar, 12, 43850 Cambrils, Tarragona',
                'phone' => '977 36 74 69',
                'lat' => 41.066252,
                'lng' => 1.052891,
                'type' => 'hairdresser'
            ],
            [
                'name' => 'Restaurante El Pescador',
                'address' => 'Passeig de les Palmeres, 6, 43850 Cambrils, Tarragona',
                'phone' => '977 36 71 52',
                'lat' => 41.064743,
                'lng' => 1.053105,
                'type' => 'restaurant'
            ],
            [
                'name' => 'Supermercado Dia',
                'address' => 'Avinguda de la Diputació, 140, 43850 Cambrils, Tarragona',
                'phone' => '977 79 16 11',
                'lat' => 41.070616,
                'lng' => 1.042557,
                'type' => 'supermarket'
            ],
            [
                'name' => 'Tienda de Ropa Mónica',
                'address' => 'Carrer de Sant Joan, 21, 43850 Cambrils, Tarragona',
                'phone' => '977 36 66 55',
                'lat' => 41.068973,
                'lng' => 1.052819,
                'type' => 'other'
            ],
            [
                'name' => 'El Corte Inglés',
                'address' => 'Av. Diputació, 29, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 36 11 11',
                'lat' => 41.069562,
                'lng' => 1.055646,
                'type' => 'supermarket'
            ],
            [
                'name' => 'Restaurante El Pescador',
                'address' => 'Av. Diputació, 197, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 36 25 12',
                'lat' => 41.070840,
                'lng' => 1.052578,
                'type' => 'restaurant'
            ],
            [
                'name' => 'Perruqueria Estil',
                'address' => 'Carrer de la Llibertat, 24, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 36 47 31',
                'lat' => 41.068663,
                'lng' => 1.054113,
                'type' => 'hairdresser'
            ],
            [
                'name' => 'Farmàcia Calvera',
                'address' => 'Carrer Sant Pere, 16, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 36 44 15',
                'lat' => 41.067590,
                'lng' => 1.057324,
                'type' => 'pharmacy'
            ],
            [
                'name' => 'Mercadona',
                'address' => 'Carrer de Joan Fuster, 2, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 36 60 12',
                'lat' => 41.074695,
                'lng' => 1.057834,
                'type' => 'supermarket'
            ],
            [
                'name' => 'Pizzeria La Tagliatella',
                'address' => 'Av. de la Diputació, 199, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 36 30 60',
                'lat' => 41.070889,
                'lng' => 1.052624,
                'type' => 'restaurant'
            ],
            [
                'name' => 'Papeleria Vidal',
                'address' => 'Carrer Sant Jaume, 7, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 36 29 39',
                'lat' => 41.067866,
                'lng' => 1.053676,
                'type' => 'other'
            ],

            // vilafortuny
            [
                'name' => 'Pelostop',
                'address' => 'Carrer del Fonoll, 10, Vilafortuny, Cambrils',
                'phone' => '+34 977 36 41 72',
                'lat' => 41.070682,
                'lng' => 1.066742,
                'type' => 'hairdresser'
            ],
            [
                'name' => 'El Rey de la Gamba',
                'address' => 'Carrer de la Vinya, 22, Vilafortuny, Cambrils',
                'phone' => '+34 977 36 28 60',
                'lat' => 41.070048,
                'lng' => 1.066675,
                'type' => 'restaurant'
            ],
            [
                'name' => 'Consum',
                'address' => 'Carrer de la Vinya, 5, Vilafortuny, Cambrils',
                'phone' => '+34 977 38 12 14',
                'lat' => 41.070236,
                'lng' => 1.068512,
                'type' => 'supermarket'
            ],
            [
                'name' => 'Farmacia Vilafortuny',
                'address' => 'Carrer del Fonoll, 22, Vilafortuny, Cambrils',
                'phone' => '+34 977 36 32 47',
                'lat' => 41.070756,
                'lng' => 1.067105,
                'type' => 'pharmacy'
            ],
            [
                'name' => 'Pizzeria Il Padrino',
                'address' => 'Carrer de la Vinya, 10, Vilafortuny, Cambrils',
                'phone' => '+34 977 36 39 95',
                'lat' => 41.070406,
                'lng' => 1.067540,
                'type' => 'restaurant'
            ],
            [
                'name' => 'Estanco Vilafortuny',
                'address' => 'Carrer del Fonoll, 26, Vilafortuny, Cambrils',
                'phone' => '+34 977 36 41 89',
                'lat' => 41.070763,
                'lng' => 1.067354,
                'type' => 'other'
            ],
            [
                'name' => 'Carnisseria Andreu',
                'address' => 'Carrer de la Vinya, 16, Vilafortuny, Cambrils',
                'phone' => '+34 977 36 25 12',
                'lat' => 41.070353,
                'lng' => 1.067910,
                'type' => 'supermarket'
            ],
            [
                'name' => 'Can Cendra',
                'address' => 'Carrer del Fonoll, 28, Vilafortuny, Cambrils',
                'phone' => '+34 977 36 41 89',
                'lat' => 41.070763,
                'lng' => 1.067354,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Restaurante El Pinar',
                'type' => 'restaurant',
                'address' => 'Av. del Pinar, 37, 43481 La Pineda, Tarragona',
                'phone' => '+34 977 37 01 10',
                'lat' => 41.081755,
                'lng' => 1.165604,
            ],
            [
                'name' => 'Farmacia La Pineda',
                'address' => 'Carrer de l\'Alcalde Pere Lloret, 5, 43481 La Pineda, Tarragona',
                'phone' => '+34 977 37 04 04',
                'lat' => 41.080491,
                'lng' => 1.166167,
                'type' => 'pharmacy',
            ],
            [
                'name' => 'Supermercado La Pineda',
                'type' => 'supermarket',
                'address' => 'Carrer del Fonoll, 4, 43481 La Pineda, Tarragona',
                'phone' => '+34 977 37 04 43',
                'lat' => 41.081736,
                'lng' => 1.162542,
            ],
            [
                'name' => 'Peluquería La Pineda',
                'type' => 'hairdresser',
                'address' => 'Carrer de la Gavina, 5, 43481 La Pineda, Tarragona',
                'phone' => '+34 977 37 00 55',
                'lat' => 41.083626,
                'lng' => 1.168267,
            ],
            [
                'name' => 'Tienda de deportes La Pineda',
                'type' => 'other',
                'address' => 'Carrer de la Pau, 8, 43481 La Pineda, Tarragona',
                'phone' => '+34 977 37 05 12',
                'lat' => 41.082774,
                'lng' => 1.165845,
            ],
            [
                'name' => 'Farmacia Vila-seca',
                'address' => '[Carrer de Jaume I, 32] Vila-seca',
                'phone' => '977 39 40 21',
                'lat' => 41.11303,
                'lng' => 1.13997,
                'type' => 'pharmacy',
            ],
            [
                'name' => 'Bar El Moli',
                'address' => '[Carrer Major, 27] Vila-seca',
                'phone' => '977 39 05 49',
                'lat' => 41.11589,
                'lng' => 1.14662,
                'type' => 'bar',
            ],
            [
                'name' => '[Supermercado] Bonpreu',
                'address' => '[Carrer de Sant Antoni, 48] Vila-seca',
                'phone' => '977 39 51 21',
                'lat' => 41.11431,
                'lng' => 1.14296,
                'type' => 'supermarket',
            ],
            [
                'name' => '[Carnicería] Can Gassó',
                'address' => '[Carrer del Rec, 8] Vila-seca',
                'phone' => '977 39 43 94',
                'lat' => 41.11188,
                'lng' => 1.14012,
                'type' => 'other',
            ],
            [
                'name' => '[Peluquería] Sisko\'s Hair',
                'address' => '[Carrer de Tarragona, 42] Vila-seca',
                'phone' => '977 39 14 85',
                'lat' => 41.11368,
                'lng' => 1.14184,
                'type' => 'hairdresser'
            ],
            [
                'name' => '[Restaurante] El Patio',
                'address' => '[Carrer de Montserrat, 3] Vila-seca',
                'phone' => '977 39 06 86',
                'lat' => 41.11477,
                'lng' => 1.14679,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Restaurante La Taula',
                'address' => 'Carrer de Sant Joan, 14, 43201 Reus',
                'phone' => '977 75 03 67',
                'lat' => 41.156157,
                'lng' => 1.105871,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Supermercado Maxi Dia',
                'address' => 'Carrer de Jaume Huguet, 21, 43202 Reus',
                'phone' => '977 77 24 94',
                'lat' => 41.155082,
                'lng' => 1.105623,
                'type' => 'supermarket',
            ],
            [
                'name' => 'Bar El Racó',
                'address' => 'Carrer de Santa Teresa, 3, 43205 Reus',
                'phone' => '977 77 39 20',
                'lat' => 41.158616,
                'lng' => 1.114735,
                'type' => 'bar',
            ],
            [
                'name' => 'Peluquería Mónica',
                'address' => 'Carrer de la Unió, 35, 43201 Reus',
                'phone' => '977 75 55 67',
                'lat' => 41.158400,
                'lng' => 1.106303,
                'type' => 'hairdresser',
            ],
            [
                'name' => 'Farmacia Reus',
                'address' => 'Carrer de Sant Joan, 1, 43201 Reus',
                'phone' => '977 75 00 11',
                'lat' => 41.156157,
                'lng' => 1.105871,
                'type' => 'pharmacy',
            ],
            [
                'name' => 'Restaurante La Tagliatella',
                'address' => 'Carrer de Sant Joan, 1, 43201 Reus',
                'phone' => '977 75 00 11',
                'lat' => 41.156157,
                'lng' => 1.105871,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Supermercado Bonpreu',
                'address' => 'Carrer de Sant Joan, 1, 43201 Reus',
                'phone' => '977 75 00 11',
                'lat' => 41.156157,
                'lng' => 1.105871,
                'type' => 'supermarket',
            ],
            [
                'name' => 'Bar El Racó',
                'address' => 'Carrer de Sant Joan, 1, 43201 Reus',
                'phone' => '977 75 00 11',
                'lat' => 41.156157,
                'lng' => 1.105871,
                'type' => 'bar',
            ],
            [
                'name' => 'Peluquería Mónica',
                'address' => 'Carrer de Sant Joan, 1, 43201 Reus',
                'phone' => '977 75 00 11',
                'lat' => 41.156157,
                'lng' => 1.105871,
                'type' => 'hairdresser',
            ],
            [
                'name' => 'Farmacia Reus',
                'address' => 'Carrer de Sant Joan, 1, 43201 Reus',
                'phone' => '977 75 00 11',
                'lat' => 41.156157,
                'lng' => 1.105871,
                'type' => 'pharmacy',
            ],
            [
                'name' => 'Gelats Luciano',
                'address' => 'Av. de la Diputació, 54, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 79 39 33',
                'lat' => 41.069266,
                'lng' => 1.058332,
                'type' => 'ice-cream',
            ],
            [
                'name' => 'Gelateria Di Marco',
                'address' => 'Carrer de Sant Pere, 16, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 79 12 54',
                'lat' => 41.067913,
                'lng' => 1.059695,
                'type' => 'ice-cream',
            ],
            [
                'name' => 'Café Gelateria Orquídea',
                'address' => 'Passeig de la Ribera, 6, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 79 23 92',
                'lat' => 41.067225,
                'lng' => 1.064078,
                'type' => 'ice-cream',
            ],
            [
                'name' => 'Gelateria Jijonenca',
                'address' => 'Carrer de Sant Pere, 9, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 36 84 69',
                'lat' => 41.067722,
                'lng' => 1.060542,
                'type' => 'ice-cream',
            ],
            [
                'name' => 'Sports World',
                'address' => 'Carrer del Passeig, 34, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 79 47 10',
                'lat' => 41.066233,
                'lng' => 1.051404,
                'type' => 'sports',
            ],
            [
                'name' => 'Decathlon',
                'address' => 'Carrer de la Mediterrània, 1, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 79 56 06',
                'lat' => 41.068782,
                'lng' => 1.040897,
                'type' => 'sports',
            ],
            [
                'name' => 'Sportswear',
                'address' => 'Carrer de Barcelona, 35, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 36 00 68',
                'lat' => 41.064769,
                'lng' => 1.049032,
                'type' => 'sports',
            ],
            [
                'name' => 'Runners',
                'address' => 'Avinguda de la Diputació, 112, 43850 Cambrils, Tarragona',
                'phone' => '+34 977 79 47 53',
                'lat' => 41.071446,
                'lng' => 1.055375,
                'type' => 'sports',
            ],
            [
                'name' => 'La Pepita',
                'address' => 'Carrer de Còrsega, 343, 08037 Barcelona',
                'phone' => '+34 932 07 61 87',
                'lat' => 41.401758,
                'lng' => 2.163527,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Els Pescadors',
                'address' => 'Plaça Prim, 1, 08019 Barcelona',
                'phone' => '+34 933 10 79 61',
                'lat' => 41.397098,
                'lng' => 2.201136,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Tickets',
                'address' => 'Avinguda del Paral·lel, 164, 08015 Barcelona',
                'phone' => '+34 932 92 42 53',
                'lat' => 41.375063,
                'lng' => 2.161548,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Dos Palillos',
                'address' => 'Carrer d\'Elisabets, 9, 08001 Barcelona',
                'phone' => '+34 935 10 09 18',
                'lat' => 41.383456,
                'lng' => 2.168604,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Bar Canete',
                'address' => 'Carrer de la Unió, 17, 08001 Barcelona',
                'phone' => '+34 933 17 18 29',
                'lat' => 41.379099,
                'lng' => 2.172100,
                'type' => 'bar',
            ],
            [
                'name' => 'Bravo24',
                'address' => 'Plaça de Pau Vila, 1, 08039 Barcelona',
                'phone' => '+34 933 10 20 50',
                'lat' => 41.386739,
                'lng' => 2.189191,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Restaurante el Puerto',
                'address' => 'Carrer del Port, 18, 43892 Miami Platja, Tarragona',
                'phone' => '+34 977 17 44 17',
                'lat' => 41.025833,
                'lng' => 0.934722,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Supermercado Esclat',
                'address' => 'Carrer dels Ferrers, 12, 43892 Miami Platja, Tarragona',
                'phone' => '+34 977 81 25 50',
                'lat' => 41.042929,
                'lng' => 0.995787,
                'type' => 'supermarket',
            ],
            [
                'name' => 'Pizzeria La Piazza',
                'address' => 'Carrer de Valls, 17, 43892 Miami Platja, Tarragona',
                'phone' => '+34 977 81 61 05',
                'lat' => 41.043360,
                'lng' => 0.997437,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Cafetería La Mar',
                'address' => 'Carrer de Llevant, 1, 43892 Miami Platja, Tarragona',
                'phone' => '+34 977 17 40 82',
                'lat' => 41.020269,
                'lng' => 0.945390,
                'type' => 'other',
            ],
            [
                'name' => 'Cervecería El Refugio',
                'address' => 'Carrer de Joanot Martorell, 10, 43892 Miami Platja, Tarragona',
                'phone' => '+34 977 81 66 56',
                'lat' => 41.042982,
                'lng' => 0.997496,
                'type' => 'other',
            ],
            [
                'name' => 'Restaurant Les Barques',
                'address' => 'Carrer de la Marina, 14, 43840 Salou, Tarragona',
                'phone' => '+34 977 38 53 46',
                'lat' => 41.077674,
                'lng' => 1.140266,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Mercadona',
                'address' => 'Carrer d\'Emili Vendrell, 11, 43840 Salou, Tarragona',
                'phone' => '+34 977 38 19 49',
                'lat' => 41.080819,
                'lng' => 1.143274,
                'type' => 'supermarket',
            ],
            [
                'name' => 'Peluquería Carlos',
                'address' => 'Carrer de Barcelona, 40, 43840 Salou, Tarragona',
                'phone' => '+34 977 35 32 53',
                'lat' => 41.078052,
                'lng' => 1.133799,
                'type' => 'hairdresser',
            ],
            [
                'name' => 'Pollos a l\'ast Pepito',
                'address' => 'Carrer de Falset, 4, 43840 Salou, Tarragona',
                'phone' => '+34 977 35 07 72',
                'lat' => 41.077218,
                'lng' => 1.132907,
                'type' => 'restaurant',
            ],
            [
                'name' => 'Centro Deportivo Municipal Salou',
                'address' => 'Carrer del Camí de les Pascuales, s/n, 43840 Salou, Tarragona',
                'phone' => '+34 977 35 03 12',
                'lat' => 41.079684,
                'lng' => 1.133062,
                'type' => 'sports',
            ],
            [
                'name' => 'Supermercado Riudecanyes',
                'address' => 'Carrer del Comerç, 2, 43886 Riudecanyes',
                'phone' => '+34 977 82 43 60',
                'lat' => 41.162292,
                'lng' => 0.962845,
                'type' => 'supermarket'
            ],
            [
                'name' => 'Pizzeria Bella Napoli',
                'address' => 'Plaça de l\'Església, 6, 43886 Riudecanyes',
                'phone' => '+34 977 82 53 96',
                'lat' => 41.161872,
                'lng' => 0.961987,
                'type' => 'restaurant'
            ],
            [
                'name' => 'Carnicería del Pueblo',
                'address' => 'Carrer de la Vila, 10, 43886 Riudecanyes',
                'phone' => '+34 977 82 45 67',
                'lat' => 41.162849,
                'lng' => 0.963170,
                'type' => 'butcher'
            ],
            [
                'name' => 'Bar El Racó',
                'address' => 'Carrer de Sant Joan, 1, 43886 Riudecanyes',
                'phone' => '+34 977 82 45 19',
                'lat' => 41.163244,
                'lng' => 0.961981,
                'type' => 'bar'
            ],
            [
                'name' => 'Farmacia Riudecanyes',
                'address' => 'Carrer de la Vila, 17, 43886 Riudecanyes',
                'phone' => '+34 977 82 43 08',
                'lat' => 41.162847,
                'lng' => 0.963284,
                'type' => 'pharmacy',
            ],
        ];

        Commerce::insert($commerces);
    }
}
