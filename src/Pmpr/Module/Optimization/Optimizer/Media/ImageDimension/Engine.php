<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6673f43f6aa4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\x6b\x6b\x79\x71\151\x79\167\x63\163\x6f\x69\153\x77\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\x6d\147\72\x6e\157\x74\x28\x5b\x77\151\144\164\x68\x5d\x29\72\x6e\x6f\164\50\x5b\150\x65\x69\x67\150\164\135\51"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto oeamoqweiueaueay; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\x61\x2d\x6c\x61\172\171\55\x6f\x72\151\x67\x69\x6e\141\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\x74\141\55\156\x6f\55\151\x6d\141\147\145\x2d\144\151\x6d\145\x6e\x73\x69\x6f\x6e\x73"))) { goto icumkkykaoqycqqu; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto eouwacqiommmeaqc; } if (!ini_get("\141\154\x6c\x6f\x77\x5f\165\162\x6c\137\146\157\160\145\x6e")) { goto igmmqwyawcuuckkq; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\150\x65\x6d\145"] . "\x3a\x2f\x2f" . $yiasugywggckywoa["\x68\157\163\x74"] . $yiasugywggckywoa["\x70\141\164\x68"]); igmmqwyawcuuckkq: goto sqwuqegeiisoiiuq; eouwacqiommmeaqc: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\x70\141\164\x68"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto wiwoiyoakywqyaiy; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); wiwoiyoakywqyaiy: sqwuqegeiisoiiuq: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto syusgosewwkoagoq; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\x74\x79\154\x65")) { goto egesuwkqkmaigaoe; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\164\171\x6c\x65"); if (!preg_match_all("\x2f\x28\x77\x69\144\164\x68\51\72\134\x73\52\50\x5c\x64\53\x29\x70\170\x3b\x7c\50\150\145\151\x67\x68\x74\x29\72\134\163\52\x28\x5c\x64\x2b\51\160\x78\73\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto ugogoekeckgcmuaw; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; ykqsuiyyosyeyscc: } uscokkmquayiukag: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); ugogoekeckgcmuaw: egesuwkqkmaigaoe: goto mcqucouuiuoagqwc; syusgosewwkoagoq: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); mcqucouuiuoagqwc: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto eweaaismksecwagy; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); eweaaismksecwagy: icumkkykaoqycqqu: return $ymyisaeksssueeik; }, false, true); oeamoqweiueaueay: return $moooemyaqewumiay; } }
