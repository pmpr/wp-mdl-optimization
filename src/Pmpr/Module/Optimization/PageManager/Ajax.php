<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665875e35aad0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\157\160\x74\x69\155\151\172\x65"; const eueyiwccigugisqe = "\143\x68\x65\x63\x6b\137\154\x69\156\x6b"; const wwgqqgayyagycysu = "\160\165\162\x67\x65\137\143\141\143\150\145"; const aeksqkkekigwssku = self::kgswyesggeyekgmg . "\163\145\164\165\160\x5f\x70\x61\x74\164\145\162\x6e\137\141\x63\x74\151\x6f\156"; const quuasuseuccsemsw = self::kgswyesggeyekgmg . "\x61\143\164\x69\x76\145\137\160\x61\164\x74\x65\x72\x6e\x5f\141\143\164\x69\157\156"; const qskskgmuqiggaqeg = self::kgswyesggeyekgmg . "\x63\150\x65\x63\153\x5f\x70\141\164\164\145\x72\x6e\137\162\165\156\137\x61\143\x74\x69\157\156"; const kaqawyqaekuookgi = self::kgswyesggeyekgmg . "\160\x61\x67\145\163\x5f\x63\141\x63\x68\x65\x5f\x73\164\141\164\x75\163"; const kusgmosaoigiukgi = self::kgswyesggeyekgmg . "\162\145\157\x70\164\151\x6d\151\x7a\145\x5f\160\141\164\164\145\x72\x6e\x5f\x61\143\164\x69\157\x6e"; const wegmeawoaymsqkyi = self::kgswyesggeyekgmg . "\144\x65\141\x63\x74\x69\x76\141\164\x65\137\160\141\164\164\145\x72\x6e\x5f\141\x63\164\x69\157\x6e"; const maqcykaweqimuomu = self::kgswyesggeyekgmg . "\x63\150\x65\143\x6b\x5f\x63\141\156\x64\x69\x64\141\164\x65\x5f\x75\162\154\x5f\141\143\x74\151\157\x6e"; const ggmmioeoauiyccec = self::kgswyesggeyekgmg . "\x70\x61\147\x65\x73\x5f\143\x61\143\150\x65\x5f\160\x72\x6f\x67\x72\145\x73\163"; const esiucesqiemeickk = self::kgswyesggeyekgmg . "\x70\165\162\x67\145\137\160\141\x74\x74\x65\x72\156\137\x70\141\147\145\x73\x5f\x63\x61\x63\x68\x65\137\141\143\164\x69\x6f\x6e"; const ccyqqagwskwauoem = ["\160\165\162\147\145\137\x70\141\164\x74\x65\162\x6e\x5f\160\141\x67\x65\x73\x5f\143\x61\143\x68\x65" => self::esiucesqiemeickk, "\160\141\147\x65\163\x5f\143\141\x63\x68\145\x5f\160\162\157\147\x72\x65\163\163" => self::ggmmioeoauiyccec, "\x63\150\x65\143\x6b\137\x63\141\x6e\x64\x69\x64\141\164\x65\137\154\151\156\x6b" => self::maqcykaweqimuomu, "\x70\141\x67\145\x73\137\x63\141\143\150\145\x5f\x73\164\141\164\x75\x73" => self::kaqawyqaekuookgi, "\144\145\x61\x63\x74\151\x76\141\x74\145\137\160\141\x74\164\x65\x72\x6e" => self::wegmeawoaymsqkyi, "\x72\145\x6f\160\x74\x69\155\151\172\145\x5f\x70\x61\x74\164\145\x72\x6e" => self::kusgmosaoigiukgi, "\x63\x68\x65\143\x6b\x5f\x70\141\x74\164\145\162\x6e\x5f\162\165\156" => self::qskskgmuqiggaqeg, "\x61\143\x74\151\166\x61\164\145\137\160\141\164\x74\145\x72\x6e" => self::quuasuseuccsemsw, "\x73\145\164\165\160\137\160\141\164\x74\145\x72\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\x63\x67\143\x71\155\151\157\x6b\163\x79\x77\153\145\153\141\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\151\167\167\157\x6f\x77\167\143\x73\x63\163\143\x67\165\147"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\x75\167\155\x71\141\163\x6b\x63\x77\x61\155\x69\147\151\x6d\145"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\x67\x71\x75\x63\171\161\161\153\x67\163\161\171\x73\x61\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\151\x77\165\141\x71\x6f\x73\155\x71\155\x77\x6d\x65\x6f\x69\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\x75\167\171\x69\x61\147\145\145\141\145\x6f\171\165\171"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\153\141\x6d\x67\x65\161\x6f\147\x6f\x73\147\x67\145\157\x61"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\141\141\x65\155\x63\163\x6b\x65\x6d\x67\171\x61\157\141\x6f\x77"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\145\163\141\x71\x6b\145\163\141\145\x61\145\x63\x6f\141\x6f"]); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(self::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(self::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(self::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto ycueoqkeakismiqw; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto ggewkaiwwgkmkwgc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\141\164\164\145\x72\156\x20\x4e\x6f\x74\40\106\x6f\165\x6e\144", PR__MDL__OPTIMIZATION)); goto kkieqqwwascekcmo; ggewkaiwwgkmkwgc: switch ($aiamqeawckcsuaou) { case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\162\x6f\147\x72\145\x73\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), self::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto ooooceiweeackgie; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto ooooceiweeackgie; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto gcaykgmmmqomsyis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\150\145\x72\145\x20\x69\163\x20\x6e\157\40\162\145\x6d\157\x74\145\40\x72\165\156\x20\146\157\162\x20\160\141\x74\x74\145\x72\156\x2e", PR__MDL__OPTIMIZATION)); goto yccuomocgmewkeca; gcaykgmmmqomsyis: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === self::eyemmiwoaayukksq)) { goto ocwouquuwsaqakae; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\151\162\x74\x75\141\x6c\137\142\162\157\x77\163\x65\x72\x5f\x63\x68\145\x63\153\137\x66\x69\x6e\x69\163\150\145\x64", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto swuggqyiaiqywgge; } if (is_wp_error($sogksuscggsicmac)) { goto tagquiiokseckkqs; } if (!$sogksuscggsicmac) { goto qwiyicoywcekgyce; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; qwiyicoywcekgyce: goto qoacckkkwsqkokye; tagquiiokseckkqs: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; qoacckkkwsqkokye: swuggqyiaiqywgge: ocwouquuwsaqakae: $keccaugmemegoimu = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\154\141\x74\145\163\x74\x5f\x72\165\x6e" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\164\145\163\164\137\x72\x75\156", true) : '', "\x70\x61\147\x65\163\137\x63\x61\143\x68\x65" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; yccuomocgmewkeca: goto ooooceiweeackgie; case self::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto ooooceiweeackgie; case self::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto kmseiouukkqiumum; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto suiywiakesiegcwu; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); suiywiakesiegcwu: kmseiouukkqiumum: goto ooooceiweeackgie; case self::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto syuywgysqyckcqay; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); syuywgysqyckcqay: goto ooooceiweeackgie; case self::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::uucoeqmmykkwsmqc); goto ooooceiweeackgie; case self::wwgqqgayyagycysu: $goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo); $keccaugmemegoimu = true; goto ooooceiweeackgie; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto ooooceiweeackgie; } gkeymcqqsewayscs: ooooceiweeackgie: kkieqqwwascekcmo: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; ycueoqkeakismiqw: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto awimwukcyiceackk; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); awimwukcyiceackk: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::ogigqueukwysusii, '', true))) { goto cquikgykuscqmigw; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto mugeiwyysiemwaym; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\125\x52\x4c\x20\x69\163\x20\x6e\157\x74\40\x6d\x61\164\x63\150\145\144\x20\164\157\40\160\x61\164\x74\x65\x72\156\56", PR__MDL__OPTIMIZATION)); goto euymeegkukskiowq; mugeiwyysiemwaym: $ksaameoqigiaoigg = $iwywmkygwewiamwm; euymeegkukskiowq: cquikgykuscqmigw: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto simkiasocoimioew; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\120\141\164\164\x65\162\156\40\x61\154\x72\x65\141\x64\x79\40\x73\x65\x74\165\x70\x65\144\x2e", PR__MDL__OPTIMIZATION)); goto iuaeeeeggkikuiig; simkiasocoimioew: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto qgyaeoqgekocwkmw; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto wgeueumgacuuuama; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::iwyueouqaqegmcas]) && $igqsaukqcqscimok[self::iwyueouqaqegmcas])) { goto ewoqyogcaksucksk; } $ueeagokqmgisgauy .= "\74\142\162\76{$this->gcsweumukyckmgik($igqsaukqcqscimok[self::iwyueouqaqegmcas])}"; ewoqyogcaksucksk: auaywaskqooasiuq: } ouaoyqugwsagkqaa: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\x53\157\155\145\40\160\x61\x67\145\40\156\157\x74\40\141\x64\x64\x2e\x20\45\163", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto yukacyeckkwagusw; wgeueumgacuuuama: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto uwscegkmmumymoaq; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); goto gkwoqoeaecgkymeu; uwscegkmmumymoaq: if ($iwywmkygwewiamwm) { goto cyymeyomuakqakwo; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); cyymeyomuakqakwo: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); gkwoqoeaecgkymeu: yukacyeckkwagusw: goto sieykcqauaygcais; qgyaeoqgekocwkmw: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x55\x52\114\x20\151\163\x20\x6e\157\164\40\x6d\x61\x74\x63\x68\145\x64\x20\164\x6f\40\160\x61\x74\164\145\x72\x6e\x2e", PR__MDL__OPTIMIZATION)); sieykcqauaygcais: iuaeeeeggkikuiig: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if (!$ycikkiiimgoqqgsq->qumqowkwyaceeqwu([self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc])) { goto wmsiqkyqsiysgcyy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x41\156\157\164\x68\145\162\40\x70\x72\x6f\x63\x65\163\x73\x20\x61\x6c\x72\145\141\144\x79\40\x73\x74\x61\x72\164\145\x64\x2e", PR__MDL__OPTIMIZATION), 401); goto ysggiwiksocomkek; wmsiqkyqsiysgcyy: if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto cqemkecywkkwaaii; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->akkkoiiymmamsauc($sameaqkagyqomooq, $iuekmkswcsacoawq::ewyamgkooeqiecwg))) { goto kmiqskugkmaiugae; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::auqoykcmsiauccao)); kmiqskugkmaiugae: cqemkecywkkwaaii: $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\x69\162\164\165\141\x6c\137\x62\162\x6f\167\x73\145\162\137\141\x64\x64\137\152\157\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto wcioaoeiiawwqqqq; } $ycikkiiimgoqqgsq->gscuuyuyauokoyuo([self::uiwqcumqkgikqyue => $sogksuscggsicmac, self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::oayciggqokqmayuy => $this->wkagassgcaqeosio()->mqaysguwaikckgey($sameaqkagyqomooq), Remote::eksgkcqkmumuceii => self::meksegaoamowuwoq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc]); wcioaoeiiawwqqqq: if (is_wp_error($sogksuscggsicmac)) { goto ieoiygycmseqmmgc; } $sogksuscggsicmac = ["\160\x61\x67\x65\x73\x5f\143\141\x63\150\x65\x5f\163\164\x61\x74\x75\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\141\147\145\163\137\143\x61\143\x68\145", true), "\x70\141\x74\164\145\x72\156\137\160\x72\157\x67\x72\x65\163\163\x62\x61\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\141\164\145\163\x74\137\x72\x75\x6e", true)]; goto gkuwmiusoqwesqoo; ieoiygycmseqmmgc: $iswcokucwmiosiaq = $this->gcsweumukyckmgik($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\143\165\x72\x6c\x20\145\x72\162\x6f\162"))) { goto qaikeckkiwasykwk; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\103\x61\x6e\40\x6e\x6f\x74\x20\x63\157\x6e\x6e\145\143\x74\40\x74\x6f\x20\163\145\162\x76\145\x72\x20\x72\151\x67\150\164\40\x6e\157\167\x2c\x20\160\154\x65\141\163\x65\x20\164\162\171\x20\154\141\x74\145\162\40\x6f\162\40\143\157\x6e\164\141\143\164\40\165\163\56", PR__MDL__OPTIMIZATION), 500); qaikeckkiwasykwk: gkuwmiusoqwesqoo: ysggiwiksocomkek: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if ($mokmmyiueoiqokyc) { goto wkqwywgikoyqkyeg; } $mokmmyiueoiqokyc = $goqqimcssiyagkwy->wegymsqmyauaoqce($eouekqmooogkoqoo); wkqwywgikoyqkyeg: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ccosqsyuggiqiuwu = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::ewyamgkooeqiecwg => $sameaqkagyqomooq, self::auqoykcmsiauccao => [self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::ciyoccqkiamemcmm => array_column($mokmmyiueoiqokyc, self::auqoykcmsiauccao), self::sieeooaigsmwocym => true]]); if (!$ccosqsyuggiqiuwu) { goto qswqmgiwiyyqwioa; } foreach ($ccosqsyuggiqiuwu as $mmoasaykomcwqeus) { $iuekmkswcsacoawq->gccwawquiskkswiu($mmoasaykomcwqeus, $iuekmkswcsacoawq::ewyamgkooeqiecwg); aueiggyawkmkamum: } wqieuwguumokgyqg: qswqmgiwiyyqwioa: $awyumwiewiauosqy = []; foreach ($mokmmyiueoiqokyc as $oaeaekwuocwiymuy) { $sogksuscggsicmac = $goqqimcssiyagkwy->igwoeqicuykaamye($sameaqkagyqomooq, $oaeaekwuocwiymuy); if (!(isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && !$sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto uogkcsaewswoaosw; } $this->oaumimwssciwumys($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas])); $awyumwiewiauosqy[] = $oaeaekwuocwiymuy; uogkcsaewswoaosw: giuswooyckooaoms: } omekuqkuugyocmoc: return $awyumwiewiauosqy; } }
