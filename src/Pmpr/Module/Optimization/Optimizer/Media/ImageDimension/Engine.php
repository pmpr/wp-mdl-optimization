<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a57ce0afbe8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\x61\x6b\x6b\x79\161\x69\171\167\143\x73\x6f\151\x6b\167\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\x6d\147\x3a\156\157\164\x28\x5b\x77\x69\x64\164\150\135\x29\x3a\x6e\x6f\164\x28\x5b\150\x65\x69\147\x68\x74\x5d\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto gigiwwouakeekoim; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\x74\x61\55\x6c\141\x7a\171\55\157\x72\151\x67\x69\156\x61\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\x74\x61\55\x6e\x6f\55\151\x6d\141\147\145\x2d\x64\151\155\145\x6e\x73\x69\x6f\x6e\163"))) { goto eauiumeeyckucuyc; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto iaockwkwaiqgeuyu; } if (!ini_get("\141\x6c\154\157\167\x5f\x75\162\154\x5f\x66\157\160\x65\x6e")) { goto mmqkuymyyycywmqu; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\150\x65\155\145"] . "\72\x2f\57" . $yiasugywggckywoa["\x68\x6f\163\x74"] . $yiasugywggckywoa["\x70\x61\x74\150"]); mmqkuymyyycywmqu: goto oeeasouoaaoaaemm; iaockwkwaiqgeuyu: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\160\x61\164\x68"]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto woaoeyaowkuukkqm; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); woaoeyaowkuukkqm: oeeasouoaaoaaemm: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto ysiwoiqiaosqoikm; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\x74\171\154\145")) { goto uaiiuywoakccusge; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\171\154\x65"); if (!preg_match_all("\x2f\50\x77\x69\x64\x74\x68\x29\x3a\x5c\163\52\x28\x5c\144\x2b\51\160\x78\x3b\x7c\50\x68\145\x69\147\150\x74\51\72\134\163\x2a\x28\134\x64\53\51\x70\x78\73\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto uekueeyqaackuwao; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; wassyiqsqasaoiau: } icmsyimgycuocisu: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); uekueeyqaackuwao: uaiiuywoakccusge: goto eieiwacwqkgsewai; ysiwoiqiaosqoikm: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); eieiwacwqkgsewai: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto gokwmwmaumiwscua; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); gokwmwmaumiwscua: eauiumeeyckucuyc: return $ymyisaeksssueeik; }, false, true); gigiwwouakeekoim: return $moooemyaqewumiay; } }
