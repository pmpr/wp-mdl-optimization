<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65311c76e01aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Exception; use Pmpr\Module\Optimization\Asset\Setting; class CSS extends Common { const qmmkckgoqyucomiy = "\x6f\160\x74\163\164\171\x6c\x65\x73"; const qmyicsgiomwgeswc = "\157\160\164\x69\155\151\x7a\141\164\x69\157\x6e\x5f\x63\162\x69\x74\x69\143\141\x6c\137\143\x73\x73\x5f\x68\x61\x6e\144\x6c\x65"; const eauaaousugoecaui = "\x6f\x70\164\x69\155\x69\x7a\141\164\151\x6f\156\137\143\x72\x69\164\x69\143\x61\154\x5f\x63\x73\163\137\x67\145\156\145\162\x61\x74\x69\157\x6e\137"; const yagyiemiycosowge = self::eauaaousugoecaui . "\160\162\157\143\145\163\x73\x5f\x72\165\156\156\151\156\147"; const eukyiewmgskwgiiu = self::eauaaousugoecaui . "\144\157\156\145"; protected bool $optimized = false; public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\157\160\x74\x5f\142\x75\x66\x66\x65\162\137\160\162\157\x63\145\x73\x73", [$this, "\x65\170\x74\162\141\x63\x74"], 20)->aqaqisyssqeomwom("\157\x70\x74\x5f\141\154\x6c\x6f\x77\x5f\x61\x73\171\156\x63\x5f\x6c\x6f\141\144\x5f\x73\x74\171\154\x65\163", [$this, "\143\165\161\x69\153\x6f\171\161\161\x77\153\x75\165\155\x6b\155"]); parent::kgquecmsgcouyaya(); } public function cuqikoyqqwkuumkm($cuakwceieagskoaa) { if (!$this->qgmkawgcegiogqwy()) { goto iwcmgioeaiyuacwi; } $cuakwceieagskoaa = true; iwcmgioeaiyuacwi: return $cuakwceieagskoaa; } public function extract($moooemyaqewumiay) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($ogiyyuwciysokiuc = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\160\162\145\x6c\x6f\x61\x64", 0))) { goto esgyqksmcukeuwyk; } $migiiksoiymissge = $eiicaiwgqkgsekce->ekcymmyqoceukosc(); if (!$this->ocysssyiuaueqiei("\x63\x72\x69\x74\151\143\x61\154")) { goto yeaqsiqgakskoykg; } try { $icyaoosaykeskiuu = ''; if ($yqimccamkgmmuuyg = API::symcgieuakksimmu()) { goto eeomcmuiqwgwwuqk; } $this->uocccyeugiykcmes($this->aqgegcykekmuggsu()); goto mseokuecmeoyoggk; eeomcmuiqwgwwuqk: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aokagokqyuysuksm = $yqimccamkgmmuuyg->extract($migiiksoiymissge, $ogiyyuwciysokiuc, $iswcokucwmiosiaq)) { goto mwwygasiagaqsimo; } $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); goto wucacaegysmiusai; mwwygasiagaqsimo: $oyiokksswogocuwm = $gugkgkcqscgeiiao = 20; sleep($gugkgkcqscgeiiao); ikqagqacuwcgwmqy: if (!($oyiokksswogocuwm > 0)) { goto iyyaiuccouqowyga; } $sogksuscggsicmac = $yqimccamkgmmuuyg->cemakceqaqeeuyuk($aokagokqyuysuksm, $iswcokucwmiosiaq); if ($iswcokucwmiosiaq) { goto kisccmsaieigisiu; } $iwskiosiswyoiesg = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::eikgweiqgomeisyo); switch ($iwskiosiswyoiesg) { case self::scigcyyimwwgmiui: case self::eqewsqmqmsiocaeg: sleep($gugkgkcqscgeiiao); goto gcogomgmqcgkeceg; case self::uasuowkaguiwoouw: $aggamyqqskiqkcea = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\x65\x61\163\x6f\x6e", ''); $this->yqkwsouguwgoywcw(sprintf("\x63\162\151\x74\x69\x63\141\x6c\40\143\x73\x73\x20\x65\x78\164\x72\141\x63\x74\x69\156\x67\x20\146\141\151\154\x65\144\x3a\x20\45\x73", $aggamyqqskiqkcea)); case self::amcogigwsaqssuai: if (!($icyaoosaykeskiuu = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::uiwqcumqkgikqyue))) { goto ugmukcwgcioqgywy; } $icyaoosaykeskiuu .= $this->weysguygiseoukqw(Setting::qwmwuwqwwaiiaqou, ''); ugmukcwgcioqgywy: $oyiokksswogocuwm = 0; goto gcogomgmqcgkeceg; } cksomiiqscosigke: gcogomgmqcgkeceg: goto euoscysqgugsqewc; kisccmsaieigisiu: $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); euoscysqgugsqewc: $oyiokksswogocuwm--; goto ikqagqacuwcgwmqy; iyyaiuccouqowyga: $this->optimized = true; wucacaegysmiusai: mseokuecmeoyoggk: if (!($icyaoosaykeskiuu = $this->ocksiywmkyaqseou("\x6f\x70\164\137\x63\162\x69\164\x69\x63\x61\154\x5f\x73\x74\171\x6c\x65\x73", $icyaoosaykeskiuu))) { goto uookseqsmsqgweuy; } $icyaoosaykeskiuu = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\x73\x74\x79\154\x65", [self::gouqcwikiiygyasc => self::qmmkckgoqyucomiy], $icyaoosaykeskiuu); $kqywgoqsmuswammk = $this->caokeucsksukesyo()->gkksucgseqqemesc()->qqimkcgcmeewwwei($moooemyaqewumiay, "\x68\x65\x61\144\x20\x3e\x20\163\164\x79\154\x65\54\x20\150\x65\x61\144\40\x3e\x20\x6c\151\x6e\x6b"); $moooemyaqewumiay = str_replace($kqywgoqsmuswammk, "{$icyaoosaykeskiuu}{$kqywgoqsmuswammk}", $moooemyaqewumiay); uookseqsmsqgweuy: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici(sprintf(__("\103\162\x69\x74\x69\x63\x61\x6c\x20\103\x53\123\72\40\x25\163", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai))); $eiicaiwgqkgsekce->wwckmeoskuagomki("\120\x52\137\x4f\120\124\137\104\117\116\124\x5f\x4f\120\x54\111\115\x49\x5a\105\x5f\120\x41\x47\105", 1); } yeaqsiqgakskoykg: esgyqksmcukeuwyk: return $moooemyaqewumiay; } public function qgmkawgcegiogqwy($kaogqwcskswkymgo = true) : bool { return $kaogqwcskswkymgo && $this->optimized; } }
