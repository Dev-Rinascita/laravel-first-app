<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'id' => 1,
                'title' => 'Inception',
                'year' => 2010,
                'plot' => 'Un ladro che ruba segreti attraverso l\'uso della tecnologia dei sogni.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/5QHWgqaBxZI1eM5e3YhyKzY5o3z.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 2,
                'title' => 'The Matrix',
                'year' => 1999,
                'plot' => 'Un hacker scopre la verità sulla sua realtà.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/yQZX4scmfYtj4ccKFNGZJlOj1y9.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 3,
                'title' => 'Interstellar',
                'year' => 2014,
                'plot' => 'Un gruppo di esploratori viaggia attraverso un wormhole nello spazio per salvare l\'umanità.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/bMKiLh0mES4Uiococ240lbbTGXQ.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 4,
                'title' => 'Pulp Fiction',
                'year' => 1994,
                'plot' => 'Le vite di due gangster, di un pugile e della moglie di un potente boss della malavita finiscono per intrecciarsi in una paradossale storia di violenza, vendetta e redenzione.',
                'cover' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 5,
                'title' => 'Il Padrino',
                'year' => 1972,
                'plot' => 'La storia della famiglia mafiosa Corleone dal 1945 al 1955, concentrandosi sulla trasformazione di Michael Corleone da riluttante outsider a spietato boss mafioso.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 6,
                'title' => 'La vita è bella',
                'year' => 1997,
                'plot' => 'Un padre ebreo usa la sua fantasia per proteggere il figlio dagli orrori di un campo di concentramento nazista.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/6tEJnof1DKWPnl5lzkjf0FVv7oB.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 7,
                'title' => 'Forrest Gump',
                'year' => 1994,
                'plot' => 'Le presidenze di Kennedy e Johnson, la guerra del Vietnam, lo scandalo Watergate e altri eventi storici si svolgono attraverso la prospettiva di un uomo dell\'Alabama con un QI di 75.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/arw2vcBveWOVZr6pxd9XTd1TdQa.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 8,
                'title' => 'Fight Club',
                'year' => 1999,
                'plot' => 'Un impiegato insonne e un venditore di sapone formano un club di combattimento clandestino che evolve in qualcosa di molto più pericoloso.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/hZkgoQYus5vegHoetLkCJzb17zJ.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 9,
                'title' => 'Il Cavaliere Oscuro',
                'year' => 2008,
                'plot' => 'Quando il Joker emerge, seminando caos e violenza a Gotham City, Batman deve accettare una delle più grandi sfide psicologiche e fisiche per combattere l\'ingiustizia.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 10,
                'title' => 'Parasite',
                'year' => 2019,
                'plot' => 'La famiglia Kim, povera ma astuta, trova impiego presso i ricchi Park, infiltrandosi nelle loro vite con conseguenze inaspettate.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 11,
                'title' => 'Schindler\'s List',
                'year' => 1993,
                'plot' => 'Durante la Seconda Guerra Mondiale, l\'industriale tedesco Oskar Schindler si preoccupa per i suoi lavoratori ebrei dopo aver assistito alla persecuzione nazista.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/yPisjyLweCl1tbgwgtzBCNCBle.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 12,
                'title' => 'Titanic',
                'year' => 1997,
                'plot' => 'Una storia d\'amore sboccia tra due passeggeri di diversa classe sociale a bordo del fatidico viaggio inaugurale del Titanic.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/9xjZS2rlVxm8SFx8kPC3aIGCOYQ.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 13,
                'title' => 'Avengers: Endgame',
                'year' => 2019,
                'plot' => 'Dopo gli eventi devastanti di Infinity War, l\'universo è in rovina. Con l\'aiuto degli alleati rimasti, gli Avengers si riuniscono per annullare le azioni di Thanos.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/or06FN3Dka5tukK1e9sl16pB3iy.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 14,
                'title' => 'Joker',
                'year' => 2019,
                'plot' => 'A Gotham City, il comico mentalmente instabile Arthur Fleck viene ignorato ed abusato dalla società, portandolo a una discesa nella follia che lo trasforma nel criminale Joker.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 15,
                'title' => 'Il Signore degli Anelli: Il Ritorno del Re',
                'year' => 2003,
                'plot' => 'Gandalf e Aragorn guidano gli uomini dell\'Ovest contro le armate di Sauron mentre Frodo e Sam si avvicinano a Mount Doom con l\'Unico Anello.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/rCzpDGLbOoPwLjy3OAm5NUPOTrC.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 16,
                'title' => 'La La Land',
                'year' => 2016,
                'plot' => 'Un pianista e un\'aspirante attrice si innamorano a Los Angeles mentre inseguono i loro sogni.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/uDO8zWDhfWwoFdKS4fzkUJt0Rf0.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 17,
                'title' => 'Blade Runner 2049',
                'year' => 2017,
                'plot' => 'Un blade runner scopre un segreto sepolto che lo porta a rintracciare Rick Deckard, scomparso da 30 anni.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/gajva2L0rPYkEWjzgFlBXCAVBE5.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 18,
                'title' => 'Bohemian Rhapsody',
                'year' => 2018,
                'plot' => 'La storia della leggendaria rock band Queen e del loro iconico cantante Freddie Mercury, che sfidò gli stereotipi e le convenzioni per diventare uno degli intrattenitori più amati del pianeta.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/lHu1wtNaczFPGFDTrjCSzeLPTKN.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 19,
                'title' => 'Spider-Man: Un nuovo universo',
                'year' => 2018,
                'plot' => 'Il teenager Miles Morales diventa lo Spider-Man del suo universo e deve unirsi con altri Spider-People da dimensioni parallele per fermare una minaccia per tutte le realtà.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/uUiId6cG32JSRI6RyBQSvQtLjz2.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 20,
                'title' => 'Quarto potere',
                'year' => 1941,
                'plot' => 'In seguito alla morte di un magnate dell\'editoria, i reporter cercano di decifrare il significato della sua ultima parola: "Rosebud".',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/sav0jxMtEnZSYZjLBrhIpnUloFl.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 21,
                'title' => 'Il Grande Lebowski',
                'year' => 1998,
                'plot' => '"The Dude" Lebowski, sbagliato per un milionario con lo stesso nome, cerca risarcimento per il suo tappeto rovinato e arruola i suoi amici del bowling per aiutarlo.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/5DpmtMBXXNDujIuSlKW3WLKuqEd.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 22,
                'title' => 'Avatar',
                'year' => 2009,
                'plot' => 'Un marine paraplegico inviato sulla luna Pandora in missione diventa lacerato tra seguire gli ordini e proteggere il mondo che sente come casa.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/jRXYjXNq0Cs2TcJjLkki24MLp7u.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 23,
                'title' => 'The Shawshank Redemption',
                'year' => 1994,
                'plot' => 'Due uomini imprigionati formano un legame nel corso degli anni, trovando conforto e redenzione attraverso atti di comune decenza.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/q6y0Go1tsGEsmtFryDOJo3dEmqu.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 24,
                'title' => 'Jurassic Park',
                'year' => 1993,
                'plot' => 'Un magnate e un team di scienziati genetici creano un parco di dinosauri. Tuttavia, un sabotaggio industriale porta a un terrificante disastro quando i dinosauri sfuggono al loro habitat.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/9i3plLl89DHMz7mahksDaAo7HIS.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 25,
                'title' => 'Coco',
                'year' => 2017,
                'plot' => 'L\'aspirante musicista Miguel intraprende un viaggio straordinario nella Terra dei Morti per scoprire la verità sulla storia della sua famiglia.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/eKi8dIrr8voobbaGzDpe8w0PVbC.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 26,
                'title' => 'Whiplash',
                'year' => 2014,
                'plot' => 'Un giovane batterista jazz si iscrive a un prestigioso conservatorio dove i suoi sogni di grandezza sono guidati da un istruttore che non si fermerà davanti a nulla per realizzare il potenziale di un allievo.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/6uSPcdGNA2A6vJmCagXkvnutegs.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 27,
                'title' => 'The Social Network',
                'year' => 2010,
                'plot' => 'La storia della fondazione del social network Facebook e le conseguenti cause legali.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/n0ybibhJtQ5icDqTp8eRytcIHJx.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 28,
                'title' => 'Oldboy',
                'year' => 2003,
                'plot' => 'Dopo essere stato inspiegabilmente imprigionato per 15 anni, Oh Dae-Su viene rilasciato con un telefono cellulare, denaro e vestiti, e ha 5 giorni per scoprire l\'identità del suo rapitore.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/pWDtjs568ZfOTMbURQBYuT4Qxka.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 29,
                'title' => 'Gravity',
                'year' => 2013,
                'plot' => 'Due astronauti lavorano insieme per sopravvivere dopo che un incidente li lascia alla deriva nello spazio.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/mYMxZvlCOw5gNSUmwWXAVbCQ1hx.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 30,
                'title' => 'Mad Max: Fury Road',
                'year' => 2015,
                'plot' => 'In un paesaggio desertico apocalittico, un donna ribelle e un uomo in fuga aiutano un gruppo di prigioniere a fuggire da un signore della guerra.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/rz1wT2suxTP0ZURfQJbqzkyPNyJ.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 31,
                'title' => 'The Truman Show',
                'year' => 1998,
                'plot' => 'Un uomo scopre che tutta la sua vita è in realtà un reality show.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/vuGKCr8bQR43BPR2i4C8L9tMoWT.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 32,
                'title' => 'Shutter Island',
                'year' => 2010,
                'plot' => 'Nel 1954, un marshall statunitense indaga sulla scomparsa di un\'assassina che è fuggita da un ospedale per criminali pazzi e si nasconde su un\'isola remota.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/4GDy0PHYX3VRqzog9aMTCnSROX.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 33,
                'title' => 'Ritorno al Futuro',
                'year' => 1985,
                'plot' => 'Un adolescente è accidentalmente mandato indietro nel tempo di 30 anni, dove incontra i suoi futuri genitori e deve assicurarsi che si innamorino, altrimenti la sua esistenza sarà in pericolo.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/9PCsWrw1GvrZkrd1GCxRqscgZu0.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ],
            [
                'id' => 34,
                'title' => 'Il Labirinto del Fauno',
                'year' => 2006,
                'plot' => 'Nella Spagna del dopoguerra, la giovane Ofelia si rifugia in un labirinto fatato per sfuggire alla crudeltà del padre adottivo, un capitano dell\'esercito franchista.',
                'cover' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/mZSJuz8UOeYQcHH4F1y4PpJ6I9S.jpg',
                'director_id' => rand(1, 17) // Associa un regista casuale
            ]
        ];

        foreach ($movies as $movieData) {
            Movie::create([
                'id' => $movieData['id'],
                'director_id' => $movieData['director_id'],
                'title' => $movieData['title'],
                'year' => $movieData['year'],
                'description' => $movieData['plot'],
                'cover' => $movieData['cover'],
            ]);
        }
    }
}
