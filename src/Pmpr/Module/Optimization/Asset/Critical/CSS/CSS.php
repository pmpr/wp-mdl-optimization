<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf1b954785e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Setting; class CSS extends Common { const qmmkckgoqyucomiy = "\157\160\x74\x73\x74\171\x6c\x65\x73"; const qmyicsgiomwgeswc = "\157\x70\164\x69\155\x69\x7a\x61\164\151\x6f\156\x5f\143\162\151\164\151\143\141\x6c\137\x63\x73\163\137\150\x61\x6e\144\x6c\x65"; const eauaaousugoecaui = "\x6f\x70\164\151\155\x69\172\x61\x74\x69\157\x6e\137\x63\x72\x69\x74\151\x63\141\x6c\x5f\x63\163\163\x5f\147\145\156\145\162\x61\x74\151\157\156\137"; const yagyiemiycosowge = self::eauaaousugoecaui . "\160\x72\157\143\x65\x73\163\x5f\x72\165\156\156\x69\x6e\147"; const eukyiewmgskwgiiu = self::eauaaousugoecaui . "\144\x6f\156\145"; protected bool $optimized = false; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\x75\146\146\145\162\x5f\x70\x72\x6f\x63\145\x73\163"), [$this, "\x65\x78\164\162\x61\143\x74"], 20)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\137\x61\154\154\x6f\x77\137\141\x73\x79\156\143\x5f\x6c\157\x61\144\137\163\x74\x79\154\145\163"), [$this, "\143\x75\x71\151\x6b\157\x79\x71\x71\167\x6b\x75\165\155\x6b\x6d"]); parent::kgquecmsgcouyaya(); } public function cuqikoyqqwkuumkm($cuakwceieagskoaa) { if (!$this->qgmkawgcegiogqwy()) { goto goswwiomuackymqi; } $cuakwceieagskoaa = true; goswwiomuackymqi: return $cuakwceieagskoaa; } public function extract($moooemyaqewumiay) { if (!($ogiyyuwciysokiuc = ManipulateServer::get("\x70\162\145\154\157\x61\144", 0))) { goto yyamycyesguwueuw; } $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); if (!$this->ocysssyiuaueqiei(self::cwoackywkgsameww)) { goto waewaiuiogywqigu; } try { $icyaoosaykeskiuu = ''; if ($yqimccamkgmmuuyg = API::symcgieuakksimmu()) { goto ggqwcqssoauckuic; } $this->uocccyeugiykcmes($this->aqgegcykekmuggsu()); goto ggwcauaeuagekeyo; ggqwcqssoauckuic: if ($aokagokqyuysuksm = $yqimccamkgmmuuyg->extract($migiiksoiymissge, $ogiyyuwciysokiuc, $iswcokucwmiosiaq)) { goto qesqgumuouyymcwa; } $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); goto csyoimsqgwcmiwki; qesqgumuouyymcwa: $oyiokksswogocuwm = 20; $gugkgkcqscgeiiao = 5; sleep($gugkgkcqscgeiiao); camawumockccayaq: if (!($oyiokksswogocuwm > 0)) { goto gykuaukukosiocoy; } $sogksuscggsicmac = $yqimccamkgmmuuyg->cemakceqaqeeuyuk($aokagokqyuysuksm, $iswcokucwmiosiaq); if ($iswcokucwmiosiaq) { goto qowcwmsiyscackaa; } $iwskiosiswyoiesg = ManipulateArray::get($sogksuscggsicmac, self::eikgweiqgomeisyo); switch ($iwskiosiswyoiesg) { case self::scigcyyimwwgmiui: case self::eqewsqmqmsiocaeg: sleep($gugkgkcqscgeiiao); goto uuisaeysawuagysg; case self::uasuowkaguiwoouw: $aggamyqqskiqkcea = ManipulateArray::get($sogksuscggsicmac, "\162\x65\x61\x73\157\x6e", ''); $this->yqkwsouguwgoywcw(sprintf("\143\x72\151\x74\151\x63\x61\x6c\40\143\163\x73\x20\145\170\x74\x72\141\143\164\151\156\x67\x20\x66\x61\151\154\145\144\x3a\40\45\x73", $aggamyqqskiqkcea)); case self::amcogigwsaqssuai: if (!($icyaoosaykeskiuu = ManipulateArray::qamwegcyimgcqksw($sogksuscggsicmac, self::uiwqcumqkgikqyue))) { goto usgcoawgqswoeiec; } $icyaoosaykeskiuu .= $this->weysguygiseoukqw(Setting::qwmwuwqwwaiiaqou, ''); usgcoawgqswoeiec: $oyiokksswogocuwm = 0; goto uuisaeysawuagysg; } ggqeakyaggiuegek: uuisaeysawuagysg: goto aqigiwmamkowomiw; qowcwmsiyscackaa: $this->yqkwsouguwgoywcw($iswcokucwmiosiaq); aqigiwmamkowomiw: $oyiokksswogocuwm--; goto camawumockccayaq; gykuaukukosiocoy: $this->optimized = true; csyoimsqgwcmiwki: ggwcauaeuagekeyo: } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici(sprintf(__("\x43\162\151\x74\151\x63\x61\154\40\103\x53\123\x3a\x20\x25\x73", PR__MDL__OPTIMIZATION), $this->kyacickkomkioeyu($wgaoewqkwgomoaai))); Manipulate::wwckmeoskuagomki("\117\120\124\111\x4d\111\132\101\124\x49\117\x4e\x5f\104\117\x4e\124\137\x43\x41\x43\x48\105\137\120\x41\x47\x45", 1); } $icyaoosaykeskiuu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\x63\x72\151\164\x69\x63\x61\x6c\137\x73\x74\x79\154\145\163"), $icyaoosaykeskiuu); if (!$icyaoosaykeskiuu) { goto mmkoqmccusoeaoyi; } $icyaoosaykeskiuu = ManipulateHTML::uuccukgasskgimsq("\163\x74\171\154\x65", [self::gouqcwikiiygyasc => self::qmmkckgoqyucomiy], $icyaoosaykeskiuu); $kqywgoqsmuswammk = DOMCrawler::qqimkcgcmeewwwei($moooemyaqewumiay, "\x68\145\141\x64\x20\x3e\x20\163\164\x79\x6c\145\x2c\40\150\x65\x61\x64\40\76\x20\x6c\x69\156\x6b"); $moooemyaqewumiay = str_replace($kqywgoqsmuswammk, "{$icyaoosaykeskiuu}{$kqywgoqsmuswammk}", $moooemyaqewumiay); mmkoqmccusoeaoyi: waewaiuiogywqigu: yyamycyesguwueuw: return $moooemyaqewumiay; } public function qgmkawgcegiogqwy($kaogqwcskswkymgo = true) : bool { return $kaogqwcskswkymgo && $this->optimized; } }
