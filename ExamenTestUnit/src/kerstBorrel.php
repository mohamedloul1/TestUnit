<?php
    namespace TDD;

    class KerstBorrel{
        public function kostenKerstpakket($aantalPersoneelsleden, $maxbudget){
            $dranken = 8 * (round(0.5 * $aantalPersoneelsleden));
            $snacks = 2 * (round(6.5 * $aantalPersoneelsleden));
            $kostenKerstpakket = ($maxbudget - $dranken - $snacks) / $aantalPersoneelsleden;
// Requirements
            if($aantalPersoneelsleden < 1  || $aantalPersoneelsleden > 32){
                echo 'Het aantal personeelsleden valt buiten het bereik'. $aantalPersoneelsleden .' Het aantal personeelsleden valt buiten het bereik';
                exit();
            }elseif($maxbudget < 200 || $maxbudget > 8000){
                echo 'Het maximale budget voor het kerstpakket valt buiten het bereik'. $maxbudget. ' Het maximale budget voor het kerstpakket valt buiten het bereik';
                exit();
            }else{
                $bedrag = round($kostenKerstpakket);
                if($bedrag > 250){
                    echo 'Bedrag is hoger dan de toegestane 250 $euro; ';
                    exit();
                }else{
                    return $bedrag;
                }
            }
        }
    }
?>