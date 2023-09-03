<!doctype html>
<html lang="de">

<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description"
        content="Du suchst eine pünstige WG in L&uuml;beck? Dann komme uns auf dem Koprporationshaus L&uuml;beck besuchen." />
    <meta name="Keywords"
        content="Wohnheim, WG, Wohnung, Lübeck, Günstig, Studenten, Lübeck, Hansestadt, Freie Zimmer, Gute Lage, Universität" />
    <title>Studentenverbindung - Burschenschaft Berolina Mittweida zu Lübeck</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="Content/img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Content/lib/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <!-- Seiten CSS -->
    <link rel="stylesheet" href="Content/style.css">
    <!-- Jquery -->
    <script src="Content/lib/jquery-3.7.1.min.js"></script>
    <!-- Leaflet Open Street Map -->
    <link rel="stylesheet" href="Content/lib/Leaflet/leaflet.css" />
    <script src="Content/lib/Leaflet/leaflet.js"></script>
</head>

<body>
    <!-- Navigation -->
    <?php include 'Elemente/navigation.php';?>

    <header class="container-fluid container-lg">
        <img class="img-fluid" src="Content/img/seitenHeader/wohnheim.webp" alt="Wohnheim in der Kronsforder Allee">
    </header>

    <main class="container">
        <h1 class="text-center my-5 text-decoration-underline">Unser Wohnheim</h1>
        
        <section class="row">
            <h2>Das Korporationshaus Lübeck</h2>
            <div class="contentText">
            <p>
                Das „Korporationshaus Lübeck“ wurde ______ von vier Studentenverbindungen und gemeinsam mit der Stadt
                Lübeck hergerichtet. Es steht auf einem ehemaligem Bahngelände, welches bei genauerem Hingucken noch
                heute zu erkennen ist. Das Haus stellt günstigen Wohnraum für Studierende und Auszubildende zur
                Verfügung, welche sich bei den heutigen Mietpreisen in Lübeck nach einer preiswerten und guten
                Alternative sehnen. Auf insgesamt 3 Stockwerke leben 28 Personen in ihrem eigenem WG Zimmer miteinander.
                Ein einzigartiges Konzept innerhalb Deutschlands.
            </p>
            <p>
                Beim Treffen in der Küche, einem Kaltgetränk vor der Tür oder zu großen Hausveranstaltungen können sich
                alle Mieter kennenlernen und ein aufregender Austausch zwischen vielen Kulturen, Hobbys und Geschichten
                findet statt. Insgesamt wird darauf geachtet die Verteilung der Bewohner zwischen Männern und Frauen im
                Gleichgewicht zu halten.
            </p>
            </div>
        </section>
        <hr>
        <section class="row">
            <h2>Günstige Zimmer für Studierende</h2>
            <div class="contentText">
            <p>
                Klein, aber fein — die Zimmer des Wohnheimes beinhalten einen übersichtlichen Raum mit hohen Dechen und
                kleinem Bad inklusive Dusche und WC. Zur Ausstattung gehören bereits ein Schreibtisch, ein
                Schreibtischstuhl, ein Kleiderschrank und ein (Hoch-)Bett.
            </p>
            <p>
                In den Gemeinschaftsküchen jedes Stockwerkes können die Mitbewohner kochen, backen oder auch nur
                gemeinsam den Abend verbringen. Zur Verfügung stehen hier ein Herd, ein Backofen und Kühlschränke. Im Keller
                des Korporationshauses können die Mitbewohner ihre Wäsche waschen.
            </p>
            <div class="col-12 col-lg-8 mx-auto mb-4 mt-2">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Content/img/zimmer/zimmer.webp" class="d-block w-100"
                                alt="Zimmer des Korporationshauses">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Zimmer</h5>
                                <p>Blick auf die Eingangstür des Zimmer mit Treppe zum Schlafplatz. Das Badezimmer
                                    befindet sich um die Ecke.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Content/img/zimmer/treppenhaus.webp" class="d-block w-100"
                                alt="Das Treppenhaus zum 1. Stock">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Treppenhaus</h5>
                                <p>Die Treppe zum ersten Stock nach oben.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Content/img/zimmer/1_OG.webp" class="d-block w-100" alt="Gang im ersten Stockwerk">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Gang des 1. Stocks</h5>
                                <p>Zimmer zur rechten und linken Seite. Links befindet sich die Küchentür.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <p>
                Ein Zimmer mit ca. <b>12 m² Wohnfläche</b> im Wohnheim kostet monatlich <b>260,- € warm</b> und bietet
                folgende Vorteile:
            <ul style="list-style: none;padding-left: 1rem;">
                <li>— kostenfreies Internet</li>
                <li>— kostenlose Heizungsnutzung</li>
                <li>— kostenlose Nutzung von Warmwasser</li>
                <li>— Zimmerausstattung von Schreibtisch, Schreibtischstuhl, Kleiderschrank und Bett</li>
                <li>— Badezimmer mit Dusche und WC</li>
                <li>— Gemeinschaftsküche mit Herd, Backofen und Kühlschränke</li>
                <li>— günstige Waschmaschine und Trockner</li>
                <li>— reservierter Fahrradplatz und Parkmöglichkeiten vorm Haus</li>
            </ul>
            </p>
            </div>
        </section>
        <hr>
        <section class="row">
            <h2>Hervorragende Lage</h2>
            <div class="contentText">
            <p>
                Das Haus liegt gegenüber eines großen Parkplatzes, an welchem sich ein großer Rewe Markt, ein Aldi, ein
                Rossmann und einem Jysk befinden. Die Universität Lübeck sowie die Technische Hochschule Lübeck sind mit
                dem Fahrrad ungefähr 10 Minuten entfernt.
            </p>
            <div class="col-12 col-lg-8 mx-auto mb-3 mt-1">
                <div id="map" class="col-12 col-lg-8"></div>
            </div>
            <p>
                Die Fahrt in die sehenswerte Altstadt von Lübeck beläuft sich
                auf ca. 15 Minuten. Direkt gegenüber der Straße befinden sich Bushaltestellen, mit welchen man auf
                dierekten Wege zu vielen verschiedenen Zielen kommt.
            </p>
        </div>
        </section>
        <hr>
        <section class="row">
            <h2>Interesse?</h2>
            <div class="contentText">
            <p>
                Falls Interesse zum Wohnen auf unserem Korporationshaus besteht, schreibe uns doch einfach eine E-Mail an:
            </p>
            <p>
                <a class="contentLink" href="mailto:anfrage@korporationshaus.de" title="E-Mail an anfrage@korporationshaus.de">anfrage@korporationshaus.de</a>
            </p>
            </div>
        </section>
    </main>
  <!-- Begrüßung -->
  <?php include 'Elemente/begrüßung.php';?>
  <!-- Footer -->
  <?php include 'Elemente/footer.php';?>
  <!-- Bootstrap JS -->
  <script src="Content/lib/bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
  <!-- Seiten Script -->
  <script type="text/javascript" src="Content/script.js"></script>

<script type="text/javascript">
    $('#zimmer_Link').addClass('active');

    // Leaflet Attribute
    var map = L.map('map').setView([53.8525, 10.69], 13);
    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var standardIcon = L.Icon.extend({
        options: {
            shadowUrl: 'Content/lib/Leaflet/images/marker-shadow.png',
            iconSize: [25, 41],
            shadowSize: [40, 50],
            iconAnchor: [12, 41],
            shadowAnchor: [4, 62],
            popupAnchor: [-3, -76]
        }
    });

    var berolinaIcon = new standardIcon({ iconUrl: 'Content/lib/Leaflet/images/berolina_map_marker.png' });
    var uniIcon = new standardIcon({ iconUrl: 'Content/lib/Leaflet/images/marker-icon-2x.png' });
    var lübeckIcon = new standardIcon({ iconUrl: 'Content/lib/Leaflet/images/marker-icon-2x.png' });

    var mBerolina = L.marker([53.84657345950489, 10.682917057670299], { icon: berolinaIcon }).addTo(map).bindPopup('Das Korporationshaus', {autoClose:false}).openPopup();
    var mUniversität = L.marker([53.83442099279524, 10.703647997530705], { icon: uniIcon }).addTo(map).bindPopup('Die Universität');
    var mLübeck = L.marker([53.86642783061478, 10.687160749005853], { icon: uniIcon }).addTo(map).bindPopup('Die Altstadt Lübecks');
</script>
</body>
</html>