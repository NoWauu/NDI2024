<?php
require_once "header.html";
?>

<body id="indexBody">

<?php
require_once "navbar.html";
?>

<div class="home">
    <div class="content container">
        <h1>Les océans :<br>Des écosystèmes<br>en danger</h1>

        <p>Les océans, qui couvrent plus de 70 % de la surface de la Terre,
        <br>sont essentiels pour la régulation du climat, la production
        <br>d’oxygène et la biodiversité.</p>

        <a href="/body.php"><button>Explorer</button></a>
        <a href="#text"><button>Détails</button></a>
        <br>
        <br>
        <div class="col mb-3">
            <audio controls autoplay="true" src="audio/Podcast_nuit_de_linfo.mp3"></audio>
        </div>
    </div>
</div>
<div id = "text" class="details container avofoot">
    <div id="text" style = "margin: 56px 0px;"></div>
    <div class = "text">
            <h2>Pollution :</h2>
            <p>Les océans sont gravement affectés par la pollution plastique, avec des millions de tonnes de déchets formant des "continents" flottants.
            Les produits chimiques toxiques issus de l’agriculture et de l’industrie, ainsi que les eaux usées, contaminent les écosystèmes marins et
            provoquent la prolifération de zones mortes, où la vie aquatique disparaît faute d’oxygène.</p>
    </div>
    <div class = "text">
        <h2>Changement climatique :</h2>
        <p>Le réchauffement global provoque une hausse des températures océaniques, ce qui perturbe les écosystèmes et entraîne le blanchissement des
        coraux. L’acidification des océans, due à l’absorption massive de CO₂, menace les organismes marins comme les coraux et les coquillages. Par
        ailleurs, la montée du niveau des mers met en péril les habitats côtiers et les populations qui y vivent.</p>
    </div>
    <div class = "text">
        <h2>Surpêche et destruction des habitats :</h2>
        <p>La surpêche épuise les stocks de poissons et met certaines espèces en danger. Des pratiques destructrices comme le chalutage de fond
        ravagent les fonds marins et détruisent des écosystèmes entiers, y compris des habitats cruciaux comme les récifs coralliens.</p>
    </div>
    <div class = "text">
        <h2>Perte de biodiversité :</h2>
        <p>De nombreuses espèces marines, comme les tortues de mer, les requins ou les mammifères marins, sont en voie de disparition à cause des
        activités humaines. La destruction des récifs coralliens et des mangroves, qui servent de refuges à ces espèces, aggrave cette perte de
        biodiversité.</p>
    </div>
    <div class = "text">
        <h2>Exploitation minière des fonds marins :</h2>
        <p>Cette nouvelle activité menace des écosystèmes encore mal connus. Elle peut causer des destructions irréversibles et libérer des polluants
        enfouis depuis des millénaires.</p>
    </div>
    <div class = "text">
        <h2>Pourquoi agir est essentiel ?</h2>
        <p>Les océans jouent un rôle vital pour la planète : ils régulent le climat, produisent une grande partie de l’oxygène que nous respirons et
        soutiennent la vie sous toutes ses formes. Leur protection est cruciale pour assurer un avenir durable à l’humanité et préserver notre
        environnement.</p>
    </div>
</div>
<div class="bubbles">
    <img src="img/bubble.png">
    <img src="img/bubble.png">
    <img src="img/bubble.png">
    <img src="img/bubble.png">
    <img src="img/bubble.png">
    <img src="img/bubble.png">
    <img src="img/bubble.png">
</div>
<?php
require_once "footer.html";
?>