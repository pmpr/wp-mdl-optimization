<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832ec5ea4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Update extends Container { use PageManagerEngineTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_trash_post', [$this, 'imoqueysgcweeqec'])->qcsmikeggeemccuu('after_delete_post', [$this, 'qmwgiogkaywiuusm'])->qcsmikeggeemccuu('delete_term', [$this, 'uegwkaocqcsmcemk'], 10, 3)->qcsmikeggeemccuu('create_term', [$this, 'wgowgcaquegqyeag'], 10, 3)->qcsmikeggeemccuu('transition_post_status', [$this, 'ookaiyusaygaecuy'], 10, 3)->qcsmikeggeemccuu('pre_post_update', [$this, 'meuoussiaqygscky'], PHP_INT_MAX, 2); parent::wigskegsqequoeks(); } public function meuoussiaqygscky($gcqseksiskwueksc, $wqqwgmoemsyoyyqm) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($qkcoyiyeuoyyoocy = $this->wkagassgcaqeosio()->wwccqeqkqkaecoqm($gcqseksiskwueksc)) { $ugmsaqkowmocawya = $seumokooiykcomco->aqcogscycyycgkuq($gcqseksiskwueksc); $kicwiuwkuikmckca = $wqqwgmoemsyoyyqm[Constants::uiaeiwkkmoayqasu] ?? ''; if ($kicwiuwkuikmckca && $ugmsaqkowmocawya && $ugmsaqkowmocawya !== $kicwiuwkuikmckca) { Page::symcgieuakksimmu()->gssiscqyqsacmeca()->eaywmggcsekawucw($qkcoyiyeuoyyoocy, Constants::auqoykcmsiauccao, $kicwiuwkuikmckca, true); } } } public function imoqueysgcweeqec($gcqseksiskwueksc) { $this->cysmcyckuueoaiag($this->wkagassgcaqeosio()->wwccqeqkqkaecoqm($gcqseksiskwueksc), Constants::yewqymwwigegyeuk); } public function ookaiyusaygaecuy($ooywiuykugowqmey, $yowkiikeekcogimw, $post) { if ($ooywiuykugowqmey === Constants::wmmucsiyiyusmssm) { $this->uamwggsaogsacqaq($post); if ($yowkiikeekcogimw !== Constants::wmmucsiyiyusmssm) { $this->cysmcyckuueoaiag($this->wkagassgcaqeosio()->wwccqeqkqkaecoqm($post), Constants::eqewsqmqmsiocaeg); } } } public function yuukuciaikwikaei($qkcoyiyeuoyyoocy) { Page::symcgieuakksimmu()->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($qkcoyiyeuoyyoocy); } public function cysmcyckuueoaiag($qkcoyiyeuoyyoocy, string $iueymcwwscwqkiyq) { if ($qkcoyiyeuoyyoocy) { Page::symcgieuakksimmu()->gssiscqyqsacmeca()->eaywmggcsekawucw($qkcoyiyeuoyyoocy, Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq, true); } } public function uegwkaocqcsmcemk($ucicuwcaawugkseg, $aioqgggsymcimwqa, $kesssewsiegssiya) { $this->yuukuciaikwikaei($this->wkagassgcaqeosio()->ameqoyekgqggiqme($ucicuwcaawugkseg, $kesssewsiegssiya)); } public function qmwgiogkaywiuusm($gcqseksiskwueksc) { $this->yuukuciaikwikaei($this->wkagassgcaqeosio()->wwccqeqkqkaecoqm($gcqseksiskwueksc)); } public function wgowgcaquegqyeag($ucicuwcaawugkseg, $aioqgggsymcimwqa, $kesssewsiegssiya) { if ($this->caokeucsksukesyo()->yyoeeseewqmmyaee()->cekoogweeooasayu($kesssewsiegssiya)) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, Constants::mswmgkkakuooukme), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::emcyuiagkcgsckma, $kesssewsiegssiya)]); if ($sameaqkagyqomooq = $jwkieqegmyuwayce->mwyqswsaeeewsosm($eouekqmooogkoqoo)) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if ($suaemuyiacqyugsm = $goqqimcssiyagkwy->cuamaquuyckqeaak($this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($ucicuwcaawugkseg), $sameaqkagyqomooq)) { $goqqimcssiyagkwy->igwoeqicuykaamye($sameaqkagyqomooq, $suaemuyiacqyugsm); } } } } public function uamwggsaogsacqaq($post) { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { return; } $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $suaemuyiacqyugsm = $goqqimcssiyagkwy->wwccqeqkqkaecoqm($post, Constants::ckmqoekmugkggeym); $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); $aekecceyqikkceaa = [Constants::ALL, Constants::ccyeycyyykwuymsy, Constants::gmmygyiecgmggaam, Constants::suaucuoeagwokuwo]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ggauoeuaesiymgee = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, Constants::uouymeyqasaeckso), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg)]; $sameaqkagyqomooq = 0; $aiicmsuakickiaoc = 0; if ($suaemuyiacqyugsm) { $aiicmsuakickiaoc = $iuekmkswcsacoawq->waecsyqmwascmqoa($suaemuyiacqyugsm, $iuekmkswcsacoawq::ewyamgkooeqiecwg); } foreach ($aekecceyqikkceaa as $eiquqmsgmkmikiys) { $gqgemcmoicmgaqie = $ggauoeuaesiymgee; $gqgemcmoicmgaqie[] = $eqwoegegiamegqsm->ukywoeuquugocmsu([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg), $eqwoegegiamegqsm->megqywqeuquawkim(Pattern::iycqiaygcgwiwcck, $eiquqmsgmkmikiys)]); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->iekyeyicoyyawomk()->oqomcmyuuakigusk($gqgemcmoicmgaqie)) { switch ($eiquqmsgmkmikiys) { case Constants::ALL: case Constants::suaucuoeagwokuwo: case Constants::ccyeycyyykwuymsy: if (!empty($iuekmkswcsacoawq->waecsyqmwascmqoa($suaemuyiacqyugsm, Page::ewyamgkooeqiecwg))) { return; } break; case Constants::gmmygyiecgmggaam: if (!$this->wkagassgcaqeosio()->mmkkeuaqysmkwieu($seumokooiykcomco->iooowgsqoyqseyuu($post), $eouekqmooogkoqoo)) { if (!empty($suaemuyiacqyugsm) && $aiicmsuakickiaoc === $jwkieqegmyuwayce->mwyqswsaeeewsosm($eouekqmooogkoqoo)) { $sogksuscggsicmac = $iuekmkswcsacoawq->gssiscqyqsacmeca()->eaywmggcsekawucw($suaemuyiacqyugsm, $iuekmkswcsacoawq::ewyamgkooeqiecwg, null, true); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $this->uamwggsaogsacqaq($post); } } continue 2; } break; } $sameaqkagyqomooq = $jwkieqegmyuwayce->mwyqswsaeeewsosm($eouekqmooogkoqoo); break; } } if (empty($suaemuyiacqyugsm)) { $suaemuyiacqyugsm = $goqqimcssiyagkwy->cuamaquuyckqeaak($post, $sameaqkagyqomooq); } else { if ($aiicmsuakickiaoc === $sameaqkagyqomooq) { return; } $suaemuyiacqyugsm = (array) $suaemuyiacqyugsm; } if ($sameaqkagyqomooq && $suaemuyiacqyugsm) { $goqqimcssiyagkwy->igwoeqicuykaamye($sameaqkagyqomooq, $suaemuyiacqyugsm, true); } } }
