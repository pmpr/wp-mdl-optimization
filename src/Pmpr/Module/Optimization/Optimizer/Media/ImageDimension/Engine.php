<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb25d3ac530             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\153\x6b\171\161\x69\x79\x77\143\163\x6f\x69\153\167\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\x6d\147\x3a\x6e\x6f\x74\50\x5b\x77\151\144\x74\150\135\x29\x3a\156\157\x74\x28\133\150\145\151\x67\150\164\135\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto kqkeomoaociyuoye; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\x74\x61\x2d\154\141\x7a\x79\x2d\x6f\x72\x69\x67\x69\156\141\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\x74\x61\x2d\156\157\55\151\155\x61\x67\145\55\144\x69\155\145\x6e\163\x69\x6f\x6e\163"))) { goto eguukwmoyaaieuww; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x72\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto oskwwcgyuwkiuacu; } if (!ini_get("\141\x6c\154\x6f\167\x5f\165\x72\154\137\x66\157\160\145\156")) { goto gsgocqicesmaecse; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\160\x6e\x67", "\x77\x65\142\x70", "\x67\x69\146", "\x73\166\147", "\x6a\160\145\147", "\x6a\160\147"], true)) { goto cuyaakuucgwmcuqq; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\150\145\155\x65"] . "\72\57\x2f" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); cuyaakuucgwmcuqq: gsgocqicesmaecse: goto qsecoiqswyiseake; oskwwcgyuwkiuacu: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto iysiwmeymsoucaka; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); iysiwmeymsoucaka: qsecoiqswyiseake: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto oqoogougwwcqeimq; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\x74\171\154\x65")) { goto qgmgmkeiemcqkyim; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\x6c\145"); if (!preg_match_all("\57\50\x77\x69\144\x74\x68\x29\72\x5c\x73\x2a\x28\134\144\x2b\x29\160\x78\x3b\174\50\150\145\x69\x67\150\164\x29\72\134\x73\x2a\x28\x5c\x64\x2b\x29\160\x78\x3b\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto waaammoiumecaiys; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; ccqkugckigeckeqa: } swkukukimeueycaq: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); waaammoiumecaiys: qgmgmkeiemcqkyim: goto eqiiqamuyewoowwy; oqoogougwwcqeimq: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); eqiiqamuyewoowwy: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto cwomucmeuqqucyge; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); cwomucmeuqqucyge: eguukwmoyaaieuww: return $ymyisaeksssueeik; }, false); kqkeomoaociyuoye: return $moooemyaqewumiay; } }
