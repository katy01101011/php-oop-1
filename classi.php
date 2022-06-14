<!-- Creazione classe -->
<?php
    class Movie {
        public $title;
        public $poster;
        public $description;
        public $rated;

        public function __construct($_title, $_poster, $_description, $_rated)
        {
            $this->title = $_title;
            $this->poster = $_poster;
            $this->description = $_description;
            $this->rated = $_rated;
        }

        public function getStars() {
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $this->rated) {
                    echo "<i class=\"fas fa-star\"></i>";
                } else {
                    echo "<i class=\"far fa-star\"></i>";
                }
            };
        }
    };

    // Creo array vuoto che conterrà i film
    $movies = [];

    // Creo i film
    $interstellar = new Movie (
        "Interstellar",
        "https://m.media-amazon.com/images/I/91z+42G6iIL._AC_UL640_FMwebp_QL65_.jpg",
        "Un gruppo di scienziati appartenenti un tempo alla NASA, sfruttando un \"wormhole\" per superare le limitazioni fisiche del viaggio spaziale e coprire le immense distanze del viaggio interstellare, organizza una serie di missioni spaziali alla ricerca di un pianeta abitabile.",
        4
    );
    $movies[] = $interstellar;

    $memento = new Movie (
        "Memento",
        "https://m.media-amazon.com/images/I/71yESwnJzlL._AC_UL640_FMwebp_QL65_.jpg",
        "Soffre di perdita di memoria a breve termine e visto che non riesce a trattenere le informazioni per più di 15 minuti, scatta polaroid e scrive continuamente tutto ciò che succede appuntandolo su dei post-it e sul corpo con dei tatuaggi che lo aiutano a ricordare.",
        3
    );
    $movies[] = $memento;

    $pianetaDelTesoro = new Movie (
        "Il pianeta del tesoro",
        "https://m.media-amazon.com/images/I/815yqAnQsML._AC_UL640_FMwebp_QL65_.jpg",
        "L'adolescente Jim Hawkins, con l'aiuto di una mappa olografica e di alcuni amici, va alla ricerca del Pianeta del Tesoro.",
        2
    );
    $movies[] = $pianetaDelTesoro;

    $donnieDarko = new Movie (
        "Donnie Darko",
        "https://m.media-amazon.com/images/I/61GnGpjtl+L._AC_UL640_FMwebp_QL65_.jpg",
        "Donnie Darko non va d'accordo con la sua famiglia, i suoi insegnanti e i suoi compagni di classe, ma alla fine trova un'amica in Gretchen. L'altro suo amico, però, non è così affidabile: è Frank, un coniglio gigante che solo lui può vedere.",
        4
    );
    $movies[] = $donnieDarko;

    $twinPeaks = new Movie (
        "Twin Peaks",
        "https://m.media-amazon.com/images/I/91vHzh-cQJL._AC_UL640_FMwebp_QL65_.jpg",
        "Laura Palmer è stata uccisa e il suo omicidio richiama l’attenzione dell’FBI. Ad indagare viene mandato l’agente Copper, un giovane e brillante uomo, che collega subito l’omicidio di Laura con altri casi irrisolti a cui ha lavorato.",
        5
    );
    $movies[] = $twinPeaks;

    $aladdin = new Movie (
        "Aladdin",
        "https://m.media-amazon.com/images/I/51IGyaMckDL._AC_UL640_FMwebp_QL65_.jpg",
        "Un furfantello di strada dal cuore nobile, Aladdin, si innamora della principessa Jasmine e finge di essere benestante grazie all'ausilio del genio della lampada. Quando le bugie emergono, il ragazzo deve dimostrare le sue buone intenzioni. Inoltre, Aladdin, il genio e Jasmine uniscono le forze per combattere lo stregone Jafar, il quale vuole rovinare il destino del regno di Jasmine.",
        4
    );
    $movies[] = $aladdin;

    $vanillaSky = new Movie (
        "Vanilla sky",
        "https://m.media-amazon.com/images/I/81oOBmJItuL._AC_UL640_FMwebp_QL65_.jpg",
        "David è un playboy ricco e giovane che si innamora di Sofia, una ballerina. Dopo un incidente d'auto in cui rimane sfigurato, non riesce più a distinguere la realtà dai sogni.",
        4
    );
    $movies[] = $vanillaSky;

    $inception = new Movie (
        "Inception",
        "https://m.media-amazon.com/images/I/810v3CNF3LL._AC_UL640_FMwebp_QL65_.jpg",
        "Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.",
        3
    );
    $movies[] = $inception;

    $atlantis = new Movie (
        "Atlantis",
        "https://m.media-amazon.com/images/I/61CF0UkwZtL._AC_UL640_FMwebp_QL65_.jpg",
        "Un giovane avventuriero senza esperienza diventa la chiave per rivelare un mistero antico. Il ragazzo si unisce ad un gruppo di esploratori determinati a trovare il leggendario impero perduto di Atlantide.",
        2
    );
    $movies[] = $atlantis;

    $anastasia = new Movie (
        "Anastasia",
        "https://m.media-amazon.com/images/I/71nyKqKmGKL._AC_UL640_FMwebp_QL65_.jpg",
        "La storia della figlia dello Zar Nicola, Anastasia, che ritrova sua nonna a Parigi anni dopo aver perso la famiglia a causa del malvagio Rasputin.",
        5
    );
    $movies[] = $anastasia;

    $inTime = new Movie (
        "In time",
        "https://m.media-amazon.com/images/I/81CqlBgmvUL._AC_UL640_FMwebp_QL65_.jpg",
        "In un futuro non troppo lontano, il gene dell'invecchiamento è stato isolato e sconfitto. Per evitare la sovrappopolazione, il tempo è diventato la moneta con cui la gente paga per acquistare i beni.",
        2
    );
    $movies[] = $inTime;

    $tenet = new Movie (
        "Tenet",
        "https://m.media-amazon.com/images/I/91A-Q8+klcL._AC_UL640_FMwebp_QL65_.jpg",
        "Un agente segreto riceve una sola parola come arma e viene inviato per prevenire l'inizio della Terza Guerra Mondiale. Deve viaggiare nel tempo e piegare le leggi della natura per avere successo nella sua missione.",
        1
    );
    $movies[] = $tenet;
?>