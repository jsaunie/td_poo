<?php

use Ecrire\Bic;
use Ecrire\Cahier;
use Ecrire\QuattreCouleurs;
use Ecrire\Criterium;
use Ecrire\Gomme;

require '../vendor/autoload.php';

$cahier = new Cahier();
$cahier->setFormat('a4');

$stylo = new Bic('Bleu');
$stylo->setColor('bleu');

$stylo->ecrire('Foo')->sur($cahier);
//
//$stylo2 = new QuattreCouleurs();
//$stylo2->ecrire('Bar')->en('rouge')->sur($cahier)->page(134);

//$stylo3 = new Criterium();
//$stylo3->ecrire('Bar')->sur($cahier)->page(212);
//$stylo3->ecrire('Baz')->sur($cahier)->page(134);
//
//$gomme = new Gomme();
//$gomme->effacer($cahier->page(134));

$cahier->lire();

