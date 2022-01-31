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
    require_once __DIR__ . '/Cryptocurrency.php';

    // crypto

    $bitcoin = new Bitcoin('Bitcoin', 32986.80, 692722807095);
    $bitcoin->pushExchange('Kraken');
    $bitcoin->pushExchange('Crypto.com');

    $solana = new Solana ('Solana', 80, 25513936078);
    $solana->pushExchange('Young Platform');

    $ethereum = new Ethereum ('Ethereum', 2200, 260402385591);

    // user

    $gigi = new User('Gigi', 'Rossi', 20);
    $gigi->pushSecretDataUser('152478452', '153', '09/05/2022');
    $gigi_data = $gigi->getSecretDataUser();
    $gigi->pushCrypto($bitcoin);
    $gigi->pushCrypto($solana);
    $gigi->pushCrypto($ethereum);
    $gigi_carello = $gigi->getCarrello();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exchange</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Benvenuto <?php echo $gigi->getFullName(); ?></h1>
        <div class="d-flex">
            <?php foreach($gigi_carello as $key => $singlecrypto){?>
                <div class="square">

                    <!-- FRONT -->
                    <div class="front-square">
                        <div class="name-crypto">
                            <?php echo $singlecrypto->name; ?> <br>
                        </div>
                        <?php echo 'market cap: ' . $singlecrypto->market_cap .  ' euro'; ?> <br>
                        <?php echo 'value: ' . $singlecrypto->value . ' euro'; ?> <br>
                    </div>

                    <!-- BACK CARD -->
                    <div class="back-square">
                        <h2>Mercati</h2>
                        <ul>
                            <!-- seleziono l'array exchange-->
                            <?php $exchange_array = $singlecrypto->exchange ;?>
                            <!-- ciclo l'array exchange -->
                            <?php foreach($exchange_array as $single_exchange){ ?>
                                    <li>
                                        <a href="#"><?php echo $single_exchange ?></a>
                                    </li>
                            <?php }; ?>
                            
                        </ul>
                    </div>

                </div>
            <?php };?>
        </div>
        <!-- button -->
        <div class="button">
            <button>BUY</button>
        </div>
        <!-- user credit card -->
        <h3>Questi sono i dati della tua carta</h3>
        <div>
            <div class="credit-card">
                <div class="square card"> 
                    <?php foreach($gigi_data as $key => $element){?>
                        <ul>
                            <li>
                                <span class="key">
                                    <span><?php echo $key;?> </span>
                                </span>
                                <span class="value">
                                    <?php echo $element;?> 
                                </span>
                            </li>
                        </ul>
                    <?php };?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>