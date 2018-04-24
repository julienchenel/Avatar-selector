<?php
class Person
{

  // Definition des attributs

  public $firstname;
  public $lastname;
  public $age;
  public $yeux;



  // méthode appelée à chaque création d'une nouvelle instance de l'objet

  public function __construct($prenom, $nom, $age, $yeux, $cheveux)
  {
    $this->firstname=$prenom;
    $this->lastname=$nom;
    $this->age=$age;
	$this->eyes=$yeux;
	$this->hair=$cheveux;


  }

  // méthode 1 de l'objet

  public function danser()
  {
      echo $this->firstname." ".$this->lastname.", agé de ".$this->age." ans, est en train de danser.";
  }

  // méthode 2 de l'objet

  public function identifier()
  {
     echo $this->firstname." a les yeux ".$this->eyes.". Ses cheveux sont ".$this->hair.".";
  }

}
// Création de 2 objets avec une identité propre (Instanciation)

$Gregoire = new Person('Gregoire', 'Risol', 33, "verts", "châtains");
$Thomas = new Person('Thomas', 'Dupond', 37, "bleus", "blonds");


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap et style CSS perso -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>

<div class="container">

  <div class = "danse"><svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://web.resource.org/cc/" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 331.153 433.327" version="1.1" enable-background="new 0 0 331.153 433.327" overflow="visible" width="250px" height="250px">

<g id="Layer_1">
	<path stroke="#CF9E76" d="m10.775 269.78s-30.281-195.42 119.01-217.25 165.49 123.94 173.24 161.27c7.746 37.323-21.127 30.985 7.746 59.858 28.873 28.874-14.788 53.522-20.422 76.762 3.815 0.458 13.828 8.417-0.165 13.487 3.438 20.623 20.208 43.229 10.728 52.709-11.62 11.62-133.8 51.409-199.3-62.676s-90.835-84.16-90.835-84.16z" fill="#F0D0B4"/>
	<path id="cheveux" stroke="#C7B29D" d="m33.188 321.71s-20.883 0.443-21.767-1.988 3.204-3.868 3.204-3.868l-3.867-2.872 2.21-3.204-2.762-4.089 3.535-3.535-7.182-7.072 2.983-5.745s-22.507-130.64 3.493-184.14 5.5-61.5 5.5-61.5l33 12s28.978-18.392 26.75-26.75c12.709 5.724 8.75 21.75 8.75 21.75s56.206-38.833 49.5-48.5c12.337 9.376 30.5 47 30.5 47s49.75-36.986 45-48c15.092 8.828-5 48.5-5 48.5s57.597-34.951 52.5-47.5c17.2 7.294-0.5 46-0.5 46s67.382-19.654 65-33.5c15.86 16.879-34.089 62.866-34.089 62.866s32.775-1.18 40.669-10.887c-0.854 33.82-48.58 68.728-48.58 68.728s-19.913 22.792-58.5 22.792c-77 0-94.5-31.5-117-9s-17 84-17 84-42.5 69.5-42.5 87-13.852 1.51-13.852 1.51z"/> 
	<!-- cheveux s -->
	<path stroke="#D6C2AD" d="m212.93 158s17.186-60.376 10.678-73.604c14.935 12.802-0.074 73.81-0.074 73.81s-10.14 0.26-10.61-0.21z" fill="#FFC64E"/>
	<path stroke="#D6C2AD" d="m232.04 157.82s25.067-27.024 19.733-44.947c11.629 15.576-5.083 42.392-5.083 42.392s-10.06 2.56-14.65 2.56z" fill="#FFC64E"/>
	<path stroke="#D6C2AD" d="m175.9 153.62s-13.101-42.454-4.993-64.965c-19.736 13.868-7.012 62.188-7.012 62.188s4.94 2.24 12 2.78z" fill="#FFC64E"/>
	<path stroke="#D6C2AD" d="m101.74 155.17s-31.969-32.158-30.262-48.801c-9.708 16.002 26.305 56.142 26.305 56.142l3.957-7.34z" fill="#FFC64E"/>
</g>
<g id="Layer_5">
	<linearGradient id="XMLID_7_" y2="207.83" gradientUnits="userSpaceOnUse" y1="245.94" x2="178.32" x1="178.32">
		<stop stop-color="#F0D0B4" offset="0"/>
		<stop stop-color="#DFB28B" offset="1"/>
	</linearGradient>
	<path d="m147.55 254.9c-0.702-0.701-24.575-25.663-24.575-25.663s11.576-31.254 49.096-30.17c37.52 1.083 61.594 25.872 61.594 25.872l-16.724 32.092-69.4-2.13z" fill="url(#XMLID_7_)"/>
	<linearGradient id="XMLID_8_" y2="232.19" gradientUnits="userSpaceOnUse" y1="252.45" x2="285.37" x1="285.37">
		<stop stop-color="#F0D0B4" offset="0"/>
		<stop stop-color="#DFB28B" offset="1"/>
	</linearGradient>
	<path d="m267.06 252.48s-2.38-15.149 2.371-21.676 34.827-1.313 34.827-1.313-1.904 11.458-5.65 18.385c-3.746 6.928-2.793 10.465-2.793 10.465l-28.76-5.86z" fill="url(#XMLID_8_)"/>
</g>
<g id="Layer_3">
	<path d="m224 313.98s45.229 9.868 59.483-4.386-3.016-35.361-3.016-35.361 38.65 34.265 8.498 48.793-64.96-9.04-64.96-9.04z" fill="#DFB28B"/>
	<path d="m228.51 373.61s28.096 27.001 39.198 15.898 9.32-23.3 9.32-23.3-19.19 13.16-48.52 7.4z" fill="#DFB28B"/>
	<path d="m148.35 324.95s-7.949-20.559 0.548-22.203 37.28 9.319 49.341-9.32c12.061-18.64-1.097-14.527-1.097-14.527s-4.659 18.091-29.604 18.091c-24.95 0-33.45-5.21-19.19 27.96z" fill="#DFB28B"/>
	<path stroke="#CF9E76" d="m121.85 230.36s16.065-42.368 33.719-46.326 89.74 20.616 89.74 20.616-0.968 23.253-23.506 22.967c-22.53-0.29-53.45-44.21-99.95 2.74z" fill="#937952"/>
	<path stroke="#CF9E76" d="m265.94 211.19c0 6.853 1.371 22.751 7.676 22.751s37.91-17.25 29.646 1.655c-8.265 18.904 23.455-14.471 10.101-26.051s-47.43 1.64-47.43 1.64z" fill="#937952"/>
	<path d="m291.16 334.82s-127.74 1.097-142.27-32.071c7.949 35.36 63.596 75.107 132.67 49.889 16.32-11.11 9.6-17.82 9.6-17.82z" fill="#fff"/>
	<radialGradient id="XMLID_9_" gradientUnits="userSpaceOnUse" cy="248.94" cx="179.57" r="24.037">
		<stop stop-color="#fff" offset=".4157"/>
		<stop stop-color="#FDFEFF" offset=".7215"/>
		<stop stop-color="#F6FBFD" offset=".8317"/>
		<stop stop-color="#EBF7FA" offset=".9102"/>
		<stop stop-color="#DAF0F5" offset=".9732"/>
		<stop stop-color="#D0ECF3" offset="1"/>
	</radialGradient>
	<path stroke="#000" d="m148.25 255.74s2.741-20.012 11.513-20.012 45.915 4.798 48.518 7.402c2.604 2.604 2.604 14.254 2.604 14.254s-36.59 11.79-62.63-1.64z" fill="url(#XMLID_9_)"/>
	<radialGradient id="XMLID_10_" gradientUnits="userSpaceOnUse" cy="248.95" cx="174.64" r="13.746">
		<!-- Yeux -->

		<!-- Yeux -->
	</radialGradient>
	<path stroke="#000" d="m163.35 235.87s-11.291 24.654 9.281 26.096 15.948-23.193 15.948-23.193-18.08-2.76-25.23-2.91z" fill="url(#XMLID_10_)"/>
	<path d="m168.51 236.4s-6.126 16.443 5.036 17.404c11.162 0.962 8.653-15.469 8.653-15.469s-9.8-1.83-13.69-1.93z"/>
	<ellipse cy="241.86" cx="179.52" rx="5.617" ry="2.797" fill="#fff"/>
	<path stroke="#000" d="m207.7 258.28s8.024 4.271 9.149 0-6.235-6.46-6.235-6.46 1.06 6.46-2.92 6.46z" fill="#DFADA5"/>
	<radialGradient id="XMLID_11_" gradientUnits="userSpaceOnUse" cy="252.14" cx="281.36" r="12.616">
		<stop stop-color="#fff" offset=".4157"/>
		<stop stop-color="#FDFEFF" offset=".7215"/>
		<stop stop-color="#F6FBFD" offset=".8317"/>
		<stop stop-color="#EBF7FA" offset=".9102"/>
		<stop stop-color="#DAF0F5" offset=".9732"/>
		<stop stop-color="#D0ECF3" offset="1"/>
	</radialGradient>
	<path stroke="#000" d="m295.82 258.34s1.365-16.377-3.705-16.415c-5.07-0.039-21.837 2.114-23.425 4.052s-1.957 10.659-1.957 10.659 13.6 11.65 29.08 1.71z" fill="url(#XMLID_11_)"/>
	<radialGradient id="XMLID_12_" gradientUnits="userSpaceOnUse" cy="251.57" cx="279.97" r="9.4221">
	<!-- Yeux -->

	<!-- Yeux -->
	</radialGradient>
	<path stroke="#000" d="m287.65 242.17s6.923 18.12-6.652 18.785c-13.576 0.666-10.054-16.051-10.054-16.051s11.99-2.75 16.7-2.74z" fill="url(#XMLID_12_)"/>
	<path d="m284.06 242.54s3.871 12.293-3.5 12.777c-7.369 0.483-7.011-11.087-7.011-11.087s7.95-1.69 10.51-1.69z"/>
	<path d="m273.18 246.9c-0.033 1.063 1.598 1.966 3.64 2.015 2.046 0.05 3.725-0.772 3.757-1.836s-1.597-1.966-3.64-2.015c-2.04-0.04-3.73 0.78-3.76 1.84z" fill="#fff"/>
	<path stroke="#000" d="m268.17 257.7s-4.399 2.788-4.914-0.414c-0.516-3.201 3.809-4.807 3.809-4.807s-0.47 3.65 1.1 5.22z" fill="#DFADA5"/>
	<path d="m246.93 333.2s-2.899 6.297 2.15 6.297 2.995-5.948 2.995-5.948l-5.15-0.35z" fill="#DFADA5"/>
	<path d="m219.9 330.54s0.17 5.62-2.997 5.62c-3.166 0-1.309-6.196-1.309-6.196l4.31 0.58z" fill="#DFADA5"/>
	<path d="m198.81 327.18s-1.232 4.546-2.36 4.017-1.963-4.903-1.963-4.903l4.32 0.88z" fill="#DFADA5"/>
	<path d="m181.18 322.96s0.098 3.084-1.254 2.845-1.9-3.809-1.9-3.809l3.15 0.97z" fill="#DFADA5"/>
	<path d="m161.69 315.16s-0.378 4.954 0.521 4.056 2.476-2.475 2.476-2.475l-3-1.58z" fill="#DFADA5"/>
	<path d="m222.33 354.47c-2.709-0.724-2.941-0.49-2.219 2.218-0.723-2.708-1.125-3.111-3.834-3.834 2.709 0.723 2.941 0.49 2.219-2.219 0.72 2.7 1.12 3.1 3.83 3.83z" fill="#ABE1FA"/>
	<path d="m198.01 348.82c-2.708-0.724-2.941-0.49-2.218 2.218-0.724-2.708-1.126-3.111-3.834-3.834 2.708 0.723 2.941 0.49 2.218-2.219 0.72 2.71 1.12 3.11 3.83 3.83z" fill="#ABE1FA"/>
	<path d="m279.28 334.57s-1.697 4.904 0.424 3.725 2.121-3.656 2.121-3.656l-2.54-0.07z" fill="#DFADA5"/>
	<path stroke="#CF9E76" d="m291.16 334.82s-127.74 1.097-142.27-32.071c7.949 35.36 63.596 75.107 132.67 49.889 16.32-11.11 9.6-17.82 9.6-17.82z" fill="none"/>
</g>
<g id="Layer_2">
	<path stroke="#CF9E76" d="m68.654 303.47s-9.834-11.615-5.457 9.784-27.075 17.047-27.075 6.199c0-10.849-12.033-8.523-19.554-34.094s4.136-60.051 15.042-71.287c10.905-11.236 30.083 44.167 30.083 44.167l3.237 18.983" fill="#F0D0B4"/>
	<path d="m52.524 292.65s-15.911-8.951-10.497-17.9 9.392-10.496 9.392-10.496-17.347-37.236-20.22-32.264c-2.873 4.972-13.48 13.479-10.166 18.01s14.917 4.53 14.917 4.53-14.585-5.304-11.491-8.397 8.066-9.393 8.066-9.393 17.181 23.922 14.585 26.519-16.463 6.077-15.027 19.005 14.253 13.038 14.253 14.475-4.088 9.833 2.431 5.082 3.757-9.17 3.757-9.17z" fill="#CF9E76"/>
	<path d="m31.862 260.61s-11.381-0.111-12.375 8.839 5.304 16.795 5.304 16.795-7.735-19.51 7.071-25.63z" fill="#CF9E76"/>
</g>
<metadata><rdf:RDF><cc:Work><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><cc:license rdf:resource="http://creativecommons.org/licenses/publicdomain/"/><dc:publisher><cc:Agent rdf:about="http://openclipart.org/"><dc:title>Openclipart</dc:title></cc:Agent></dc:publisher><dc:title>Self Portrait</dc:title><dc:date>2007-11-01T11:35:58</dc:date><dc:description>This was a quick illustration I did of myself in Illustrator. I am quite happy with the results considering it took about 10 minutes - it is what I had to spare.</dc:description><dc:source>http://openclipart.org/detail/7887/self-portrait-by-neocreo</dc:source><dc:creator><cc:Agent><dc:title>neocreo</dc:title></cc:Agent></dc:creator><dc:subject><rdf:Bag><rdf:li>cartoon</rdf:li><rdf:li>clip art</rdf:li><rdf:li>clipart</rdf:li><rdf:li>computer</rdf:li><rdf:li>face</rdf:li><rdf:li>head</rdf:li><rdf:li>icon</rdf:li><rdf:li>image</rdf:li><rdf:li>line art</rdf:li><rdf:li>man</rdf:li><rdf:li>media</rdf:li><rdf:li>people</rdf:li><rdf:li>png</rdf:li><rdf:li>public domain</rdf:li><rdf:li>svg</rdf:li></rdf:Bag></dc:subject></cc:Work><cc:License rdf:about="http://creativecommons.org/licenses/publicdomain/"><cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/><cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/><cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/></cc:License></rdf:RDF></metadata></svg></div>

	<div class="row justify-content-around mb-5">
<button id="thomas"  type="button" class="btn btn-primary">Thomas</button>
<button id="gregoire" type="button" class="btn btn-primary">Gregoire</button>
</div>

<!-- Appel de la méthode "identifier" des objets nouvellement créés -->

  <div id="idThom"><?= $Thomas->identifier();?></div>
  <div id="idGreg"><?= $Gregoire->identifier();?></div>

<!-- Appel de la méthode "danser" des objets nouvellement créés -->

  <!-- <div><?= $Thomas->danser(); ?></div>
  <div><?= $Gregoire->danser(); ?></div> -->

  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="app.js"></script>
  </body>
</html>