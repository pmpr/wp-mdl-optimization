<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66583cebac3c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\153\x6b\x79\161\151\x79\167\x63\x73\x6f\x69\x6b\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\x6d\x67\x3a\156\x6f\x74\50\x5b\x77\x69\x64\x74\150\135\51\x3a\156\157\x74\x28\133\x68\x65\151\x67\150\x74\135\51"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto iwsuawwqomaowuii; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\141\55\154\141\172\x79\55\x6f\x72\151\147\151\156\x61\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\164\141\x2d\x6e\x6f\x2d\x69\155\141\147\x65\55\x64\x69\155\145\156\163\x69\157\156\x73"))) { goto qoqskyuuwueqkquk; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\162\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto wkeuuycukmuqiaom; } if (!ini_get("\141\154\x6c\157\167\137\x75\162\x6c\x5f\x66\157\160\x65\156")) { goto sggawugoykqcmsug; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\x63\x68\x65\x6d\145"] . "\72\57\57" . $yiasugywggckywoa["\x68\157\163\164"] . $yiasugywggckywoa["\x70\x61\x74\150"]); sggawugoykqcmsug: goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\160\141\x74\150"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ueigkucgaucgeimc; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); ueigkucgaucgeimc: wakmayaoqoskekqy: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto eogwckcymuugikuy; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\x74\171\x6c\145")) { goto eeauyscekuckoues; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\x79\x6c\145"); if (!preg_match_all("\57\x28\167\x69\144\164\x68\x29\72\x5c\163\x2a\x28\134\x64\53\51\160\170\73\x7c\x28\x68\x65\x69\147\150\x74\51\72\134\x73\52\50\x5c\x64\53\x29\160\x78\x3b\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto mwsmsguqqkcwiiuk; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; owmuceyswmgueasi: } qmuwoecuacmkwgem: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); mwsmsguqqkcwiiuk: eeauyscekuckoues: goto msemumccgceyugmg; eogwckcymuugikuy: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); msemumccgceyugmg: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto wagqgeqymeqoeuyi; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: return $ymyisaeksssueeik; }, false, true); iwsuawwqomaowuii: return $moooemyaqewumiay; } }
