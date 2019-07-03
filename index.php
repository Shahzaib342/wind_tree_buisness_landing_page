<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?php echo 'http://' . @$_SERVER['HTTP_HOST']; ?>/index.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" async src="https://www.foorio.com/assets_leadgen/js/countdown.js"></script>
    <script type="text/javascript" async
            src="https://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" href="https://www.foorio.com/assets_leadgen/styles/mustbee.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://www.foorio.com/assets_leadgen/styles/win1.css">
    <link rel="stylesheet" href="css/app.css">
    <?php
    $title = 'WINDTRE Business';
    $favicon = "images/logo.png";
    // header logo
    $logo = "https://www.foorio.com/assets_leadgen/images/logo_winbus.png";
    $h1 = "WINDTRE Business | Chiamate + Internet fino a 1 Gbit/s";
    $h2 = "Internet e telefono tutto incluso verso fissi e mobili";
    ?>
    <title><?php echo $title; ?></title>

</head>
<body>
<div class="alert alert-success center" role="alert">
    Thank you for contacting us
</div>
<div class="alert alert-danger" role="alert">
    Something goes wrong, please contact your form developer to fix this
</div>
<div class="loader"></div>
<div class="container-fluid">
    <div class="row content black">
        <div class="col-lg-3 col-lg-offset-2 logo"><img src="<?php echo $logo; ?>" alt="<?php echo $title; ?>"></div>
        <div class="col-lg-5"><h2 class="animated slideInDown top"><?php echo $h1; ?></h2></div>
    </div>
</div>
<div class="container-fluid stage">
    <div class="mask" style="background: url(images/sfondo.jpg);">
        <div class="submask">
            <div class="container-fluid">
                <div class="row content">

                    <div class="col-lg-8 col-lg-offset-2">
                        <h2 class="animated animated fadeIn"><span><?php echo $title; ?>:</span> <?php echo $h2; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row content">

                <div class="col-lg-5 col-lg-offset-2 text-left animated zoomInLeft dark">
                    <div class="row row1">
                        <div class="col-md-12">
                            <h1><strong><strong><big>ADSL o Fibra
                                            <WIN>Business</WIN>
                                        </big></strong></strong></h1>
                            <h3><strong><big>a soli 30</big></strong>€ <span class='WIN'>/mese</span> anziché <s>35€</s>
                            </h3>
                            <p><big>PREZZO BLOCCATO
                                    <WIN>PER SEMPRE!</WIN>
                                </big></p>
                            <img class="feat animated flip pull-right" src="images/image.jpg" alt="image" title="image">
                            <br><br>
                            <big>Siamo i
                                <WIN>Campioni</WIN>
                                nel Business:</big>
                            <br><br>
                            <ul>
                                <li>Chiamate
                                    <WIN>illimitate verso fissi e mobili</WIN>
                                    in Italia, EU, USA, Canada e Svizzera
                                </li>
                                <li>Navigazione FIBRA o ADSL ad alta velocità
                                    <WIN>illimitata</WIN>
                                </li>
                                <li>Modem e attivazione
                                    <WIN>incluse</WIN>
                                </li>
                                <li>Un consulente dedicato alla tua azienda
                                    <WIN>per sempre</WIN>
                                </li>
                            </ul>
                            <br>
                            <big class='box'>Attiva anche un piano mobile e aumenti il tuo vantaggio!</big>


                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-left animated zoomInRight">
                    <div class="countdown animated pulse infinite">
                        <?php $stop_date = date('Y-m-d');
                        echo date('Y-m-d H:i:s', strtotime($stop_date . ' +1 day')); ?>
                        <div id="demo"></div>
                    </div>
                    <div class="leads">
                        <h4>Compila il modulo per essere contattato SENZA IMPEGNO da un nostro esperto:</h4>
                    </div>

                </div>
                <div class="col-lg-3 text-left">
                    <?php include "templates/form.php" ?>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row content" id="privacy">
        <div class="col-lg-5 col-lg-offset-2">
            <h5><strong>Vuoi saperne di più?</strong></h5>
            <p>Per conoscere i dettagli di questa ed altre offerte <strong>inserisci ora i tuoi dati nel modulo</strong>
                e sarai richiamato rapidamente e <strong>SENZA IMPEGNO</strong> da un nostro esperto per conoscere tutte
                le offerte <strong>disponibili solo online!</strong><br>
                <strong>Abbiamo cura dei tuoi dati!</strong> Leggi l'informativa qui presente per conoscere in che modo
                tratteremo i tuoi dati e come potrai in qualsiasi momento richiederne la cancellazione.</p>
        </div>
        <div class="col-lg-3">


            <h5><strong>Privacy Policy</strong></h5>
            <textarea name="privacy" rows="4" readonly class="policy">Informativa resa ai sensi dell'art. 13 del d.lgs. n. 196/2003 - Codice in materia di protezione dei dati personali a coloro che interagiscono con i nostri servizi web accessibili per via telematica all’indirizzo http://'.@$_SERVER['HTTP_HOST'].'

Il titolare del trattamento
A seguito della semplice consultazione di questo Sito possono essere trattati dati relativi a persone identificate o identificabili: il "titolare" del loro trattamento è PG SEVEN SRL con sede in Viale Monte Nero 7, 20135 Milano, Codice Fiscale e Partita IVA 8736840961.

Incaricati, responsabili e sedi del trattamento dei dati
I trattamenti connessi ai servizi web del Sito http://'.@$_SERVER['HTTP_HOST'].' hanno luogo presso la predetta sede della Società.
I dati verranno trattati da PG SEVEN SRL a mezzo di incaricati appartenenti alle aree Marketing o Commerciale, Amministrazione, Legale, Amministrazione di Sistema e Programmazione, anche a seconda della finalità da realizzare eventualmente sulla base della richiesta dell'interessato. L'elenco degli ulteriori responsabili del trattamento è disponibile presso il titolare e può essere richiesto con email all'indirizzo agenziawindtre@pgseven.com.

DATI TRATTATI
Dati di navigazione
I sistemi informatici e le procedure software preposte al funzionamento del sito acquisiscono, nel corso del loro normale esercizio, alcuni dati personali la cui trasmissione è implicita nell'uso dei protocolli di comunicazione di Internet.
Si tratta di informazioni che non sono raccolte per essere associate a interessati identificati, ma che per loro stessa natura potrebbero, attraverso elaborazioni ed associazioni con dati detenuti da terzi, permettere di identificare gli utenti.
In questa categoria di dati rientrano gli indirizzi IP o i nomi a dominio dei computer utilizzati dagli utenti che si connettono al Sito, gli indirizzi in notazione URI (Uniform Resource Identifier) delle risorse richieste, l'orario della richiesta, il metodo utilizzato nel sottoporre la richiesta al server, la dimensione del file ottenuto in risposta, il codice numerico indicante lo stato della risposta data dal server (buon fine, errore, ecc.) ed altri parametri relativi al sistema operativo e all'ambiente informatico dell'utente.
Questi dati vengono utilizzati al solo fine di ricavare informazioni statistiche anonime sull'uso del Sito e per controllarne il corretto funzionamento. I dati potrebbero essere utilizzati per l'accertamento di responsabilità in caso di ipotetici reati informatici ai danni del Sito.
I dati di recapito forniti a PG SEVEN SRL potrebbero essere utilizzati, con il consenso dell'utente interessato, per inviare all'utente informazioni promozionali riguardanti servizi e/o prodotti propri e/o di terzi, con strumenti automatizzati (email, sms, mms, fax, autorisponditori) e/o non automatizzati (posta cartacea, telefono con operatore), ferma restando la possibilità, per l'utente, di opporsi all'invio di tali comunicazioni in qualsiasi momento anche potendo selezionare con quali strumenti essere contattato o meno.
L'indirizzo email fornito al momento della richiesta di contatto sarà utilizzato da PG SEVEN SRL, per inviare all'utente informazioni commerciali riguardanti propri servizi analoghi a quelli offerti e richiesti dall'utente al momento della richiesta, ferma restando la possibilità, per l'utente, di opporsi all'invio di tali comunicazioni in qualsiasi momento. È possibile rifiutare la ricezione di ulteriori comunicazioni commerciali o di marketing in qualsiasi momento, facendone richiesta via email all'indirizzo agenziawindtre@pgseven.com
Infine, tutti i dati (forniti volontariamente e dati di navigazione) potrebbero essere trattati per perseguire un legittimo interesse del titolare o di un terzo, quale, ad esempio, la protezione da truffe o altri comportamenti contrari all'Accordo per gli utenti, nonché per far valere e difendere un diritto in sede giudiziaria.
Se un utente interessato fa volontaria richiesta di contatto tramite il sito http://'.@$_SERVER['HTTP_HOST'].', indicando il proprio indirizzo di posta elettronica, richiede espressamente di ricevere periodicamente newsletter con aggiornamenti su offerte e/o sconti a lui/lei riservati. In ogni momento è consentita la disiscrizione, rivolgendosi a PG SEVEN SRL(recapiti indicati in questa informativa).

Cookies
Possiamo utilizzare cookies (file di testo di piccole dimensioni trasferiti dal server Web al computer dell’utente) e altre tecnologie di lettura e/o archiviazione di informazioni sul dispositivo dell’utente come email trackers, il cui scopo è informare il server riguardo agli accessi dell’utente a quella determinata pagina Web, e di altre eventuali notizie che ricava dai parametri leggibili del sistema tramite funzioni contenute nella pagina Web, per personalizzare e facilitare l’esperienza di navigazione degli utenti e, in alcuni casi previo loro consenso, per arricchire la profilazione degli utenti per fini pubblicitari e/o commerciali.  I cookies possono essere "temporanei" (o di sessione, sono cancellati al termine del collegamento) o "permanenti" (restano memorizzati nel disco fisso dell’utente, a meno che l’utente stesso non li cancelli).
I cookies utilizzati dai nostri siti web e dalle nostre app sono distinti nelle due tipologie individuate dal Garante italiano per la protezione dei dati personali ("Garante Privacy") con Provvedimento generale cd. Provvedimento "Cookies" del 8 maggio 2014, di cui il Titolare segue le prescrizioni in termini di informativa e necessità/modalità di raccolta del consenso. In particolare, questa informativa rappresenta anche l’estensione del banner sintetico già visualizzato dall’utente all’atto della connessione al sito web e/o al momento dell’installazione della app.

Sulla base del citato provvedimento del Garante Privacy italiano i nostri siti web e app utilizzano:
"Cookies tecnici", cioè strettamente necessari al funzionamento del sito/app e/o all’erogazione di un servizio esplicitamente richiesto dall’utente. Questa categoria di cookies include gli analytics impiegati dal titolare del sito per raccogliere informazioni, in forma aggregata, sul numero degli utenti e su come questi visitano il sito stesso. Per l’utilizzo di questa tipologia di cookies, non è richiesto il consenso dell’utente, salvo che questi espressamente lo neghi per uno o per tutti i cookies tecnici (elencati sotto).
"Cookies di profilazione" propri e/o di terze parti, cioè cookies potenzialmente volti a creare/arricchire profili relativi all'utente e utilizzati al fine di inviare e/o mostrare messaggi pubblicitari in linea con le preferenze manifestate dallo stesso nell'ambito della navigazione. Per l’impiego di tale tipologia di cookies, è sempre necessario il consenso (facoltativo) dell’utente. L’utente può scegliere a quali cookies di profilazione prestare il consenso. Quando si tratta di cookies cd. di "terze parti", cioè installati/utilizzati sul sito da soggetti terzi rispetto a ciascun Titolare, l’utente presta o nega il consenso direttamente al proprietario del cookie in questione, al quale il Titolare fa mero rinvio con link.

Sono utilizzati i seguenti cookies di profilazione/non tecnici e/o altre tecnologie tipo email tracking:
• Google Analytics (https://tools.google.com/dlpage/gaoptout/)
• Bing (http://choice.microsoft.com/it-IT/opt-out)
• Yahoo (https://info.yahoo.com/privacy/it/yahoo/opt_out/targeting/details.html)
• Facebook (https://www.facebook.com/help/568137493302217/list)
• Google Adwords (http://www.google.com/intl/it/policies/privacy/)

Ciascuno dei cookie di terze parti elencato può essere disattivato seguendo il link indicato per ognuno. È altresì possibile gestire/disattivare i cookies direttamente dalle impostazioni del browser oppure attraverso il portale http://www.youronlinechoices.com/it/le-tue-scelte.

Per avere maggiori informazioni su come impostare le preferenze sull’uso dei cookie attraverso il proprio browser di navigazione, è possibile consultare le relative istruzioni:
• Internet Explorer (http://windows.microsoft.com/it-it/windows-vista/block-or-allow-cookies)
• Firefox (https://support.mozilla.org/it/kb/Attivare e disattivare i cookie)
• Chrome (https://support.google.com/chrome/answer/95647?hl=it&topic=14666&ctx=topic)
• Safari (https://support.apple.com/kb/PH17191?locale=it_IT&viewlocale=it_IT)

Per opporsi all’utilizzo di strumenti di profilazione diversi dai cookies (tipo email trackers), rivolgersi al seguente indirizzo email del Titolare: agenziawindtre@pgseven.com

L'uso di ulteriori cookies persistenti e cookies di sessione (che non vengono memorizzati in modo persistente sul computer dell'utente e svaniscono con la chiusura del browser) è strettamente limitato alla trasmissione di identificativi di sessione (costituiti da numeri casuali generati dal server) necessari per consentire l'esplorazione sicura ed efficiente del Sito. I c.d. cookies di sessione utilizzati dal sito evitano il ricorso ad altre tecniche informatiche potenzialmente pregiudizievoli per la riservatezza della navigazione degli utenti e non consentono l'acquisizione di dati personali identificativi dell'utente.

Modalita’ del trattamento
I dati personali sono trattati anche con strumenti elettronici e automatizzati per il tempo strettamente necessario a conseguire gli scopi per cui sono stati raccolti.
Specifiche misure di sicurezza sono osservate per prevenire la perdita dei dati, usi illeciti o non corretti ed accessi non autorizzati.

Trasmissione dei dati
I dati non saranno trasmessi a terzi, fatta eccezione per gli autonomi titolari del trattamento e loro intermediari per finalità strettamente e direttamente connesse alla esecuzione del servizio di preventivazione e/o di trattativa contrattuale richiesto dall'utente interessato. L'interessato è quindi consapevole che, richiedendo i servizi di preventivazione e/o precontrattuali tramite il sito http://'.@$_SERVER['HTTP_HOST'].', potrebbe vedere i suoi dati comunicati ai soggetti indicati sopra per esclusive finalità di esecuzione del servizio anche in mancanza di un consenso, ai sensi e per gli effetti dell'art. 24 comma 1 lettera b) del D.Lgs. 196/2003, e che - con riferimento ai trattamenti eseguiti da tali soggetti terzi autonomi titolari del trattamento - faranno fede le loro autonome informative ex art. 13 D.Lgs. 196/2003 presentate contestualmente alla raccolta dei dati (per esempio nella fase di preventivazione anche interna al Sito.

Diritti degli interessati
I soggetti cui si riferiscono i dati personali hanno il diritto in qualunque momento di ottenere la conferma dell'esistenza o meno dei medesimi dati e di conoscerne il contenuto e l'origine, verificarne l'esattezza o chiederne l'integrazione o l'aggiornamento, oppure la rettificazione art. 7 del d.lgs. n. 196/2003).
Ai sensi del medesimo articolo si ha il diritto di chiedere la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in violazione di legge, nonché di opporsi in ogni caso, per motivi legittimi, al loro trattamento.
Per qualsiasi richiesta e/o comunicazione riguardante la Privacy potrai contattare l'Assistenza clienti, inviando una e-mail a agenziawindtre@pgseven.com. 
					
					</textarea>

        </div>
    </div>
</div>
<?php include "templates/footer.php" ?>

<script type="text/javascript" src="https://nibirumail.com/docs/scripts/nibirumail.cookie.min.js"></script>

</body>
</html>

<script>
    // Set the date we're counting down to "Jan 5, 2021 15:37:25"
    var countDownDate = new Date("<?php $stop_date = date('Y-m-d'); echo date('Y-m-d H:i:s', strtotime($stop_date . ' +1 day')); ?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
