<?php

namespace TDD;
include("./src/kerstBorrel.php");

$kerstBorrel = new KerstBorrel();

$aantalPersoneelsLeden = 21;

$maxBudgt = 5000;

         
?>
         
<h1>UnitTestenExamen</h1>


<h4>Het bedrag is: <?php echo $kerstBorrel->KostenKerstpakket($aantalPersoneelsLeden, $maxBudgt) ?> &euro;</h4>

