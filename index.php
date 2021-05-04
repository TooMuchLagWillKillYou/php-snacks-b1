<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $partite = [

            [

                'locale' => 'A|X Armani Exchange Milano',
                'ospite' => 'Virtus Segafredo Bologna',
                'puntiLocale' => 94,
                'puntiOspite' => 84
            ],
            [

                'locale' => 'Germani Brescia',
                'ospite' => 'Banco di Sardegna Sassari',
                'puntiLocale' => 82,
                'puntiOspite' => 94
            ],
            [

                'locale' => 'Allianz Pallacanestro Trieste',
                'ospite' => 'Carpegna Prosciutto Pesaro',
                'puntiLocale' => 101,
                'puntiOspite' => 88
            ],
            [

                'locale' => 'Umana Reyer Venezia',
                'ospite' => 'Fortitudo Lavoropiù Bologna',
                'puntiLocale' => 92,
                'puntiOspite' => 76
            ],
            [

                'locale' => 'De Longhi Treviso Basket',
                'ospite' => 'Openjobmetis Varese',
                'puntiLocale' => 94,
                'puntiOspite' => 103
            ],
            [

                'locale' => 'Acqua S.Bernardo Cantù',
                'ospite' => 'UNAHOTELS Reggio Emilia',
                'puntiLocale' => 71,
                'puntiOspite' => 72
            ],
            [

                'locale' => 'Happy Casa Brindisi',
                'ospite' => 'Vanoli Basket Cremona',
                'puntiLocale' => 67,
                'puntiOspite' => 78
            ],
        ];

        // var_dump($partite);

        for ($i = 0; $i < count($partite); $i++){

            $partita = $partite[$i];
            
            $squadraLocale = $partita['locale'];
            $squadraOspite = $partita['ospite'];
            $puntiLocale = $partita['puntiLocale'];
            $puntiOspite = $partita['puntiOspite'];

            echo '<p>' . $squadraLocale . ' - ' . $squadraOspite . ' | ' . $puntiLocale . ' - ' . $puntiOspite . '</p>';
            // var_dump($squadraLocale) ;

        }
    ?>
</body>
</html>