<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665aeb001123c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\x61\x6b\153\171\x71\x69\171\x77\x63\163\157\x69\153\167\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\x6d\147\x3a\156\157\x74\x28\x5b\167\151\x64\164\x68\x5d\51\72\x6e\x6f\x74\x28\x5b\x68\145\x69\147\x68\164\x5d\51"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto iwsuawwqomaowuii; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\164\x61\55\x6c\141\x7a\x79\55\157\162\151\147\x69\x6e\141\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\x74\x61\55\156\157\55\x69\155\141\x67\145\x2d\144\x69\155\x65\x6e\163\x69\157\x6e\163"))) { goto qoqskyuuwueqkquk; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto wkeuuycukmuqiaom; } if (!ini_get("\x61\x6c\154\x6f\167\x5f\165\162\154\x5f\146\157\160\145\x6e")) { goto sggawugoykqcmsug; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\x68\145\x6d\145"] . "\x3a\57\57" . $yiasugywggckywoa["\x68\157\163\164"] . $yiasugywggckywoa["\x70\141\x74\x68"]); sggawugoykqcmsug: goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\x70\x61\x74\x68"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ueigkucgaucgeimc; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); ueigkucgaucgeimc: wakmayaoqoskekqy: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto eogwckcymuugikuy; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\x74\x79\x6c\x65")) { goto eeauyscekuckoues; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\x79\154\x65"); if (!preg_match_all("\x2f\x28\167\x69\144\x74\x68\x29\72\134\x73\52\x28\134\x64\x2b\x29\x70\x78\x3b\174\50\150\x65\151\147\150\164\51\x3a\x5c\163\x2a\x28\134\144\x2b\x29\x70\170\73\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto mwsmsguqqkcwiiuk; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; owmuceyswmgueasi: } qmuwoecuacmkwgem: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); mwsmsguqqkcwiiuk: eeauyscekuckoues: goto msemumccgceyugmg; eogwckcymuugikuy: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); msemumccgceyugmg: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto wagqgeqymeqoeuyi; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: return $ymyisaeksssueeik; }, false, true); iwsuawwqomaowuii: return $moooemyaqewumiay; } }
