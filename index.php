<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. -->

<!-- replica di un carello di un exhange

    creo un file cryptocurrency.php che sarà la classe base di ogni cryptovaluta.
    creo 3 variabili d'istanza:
    nome,
    valore attuale,
    capitalizzazione,

    creo un funzione constructor, nella quale rendo obbligatori i parametri:
    nome,
    valore attuale,

    creo un file.php per ogni criptovaluta inserita nel craello dove passo le stesse variabili della classe padre tramite exteds:
    solana
    ethereum
    bitcoin

    Creo il file User.php, nel quale creo la rispettiva classe e assegno le seguenti variabili d'istanza:
    nome,
    cognome,
    età,
    numero carata di credito,
    cvv della carta di credito,
    scadenza della carta di credito,

-->

<?php 
    require_once __DIR__ . '/Bitcoin.php';
    require_once __DIR__ . '/Solana.php';
    require_once __DIR__ . '/Ethereum.php';
    require_once __DIR__ . '/User.php';

    // crypto

    $bitcoin = new Bitcoin('Bitcoin', 32986.80, 692722807095);

    $solana = new Solana ('Solana', 80, 25513936078);

    $ethereum = new Ethereum ('Ethereum', 2200, 260402385591);

    // user

    $gigi = new User('Gigi', 'Rossi', 20);
    $gigi->pushSecretDataUser('ergrergrer', '153', 25/502);
    $gigi->getSecretDataUser();
    $gigi->pushCrypto($bitcoin);
    $gigi->getCarrello();

    var_dump($gigi->getSecretDataUser());
    var_dump($gigi->getCarrello());
?>