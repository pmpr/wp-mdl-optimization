<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665ae7eec53d5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\x70\164\x69\155\151\172\x65"; const eueyiwccigugisqe = "\x63\150\145\143\x6b\137\154\151\x6e\153"; const wwgqqgayyagycysu = "\160\x75\162\x67\x65\137\143\141\x63\x68\x65"; const aeksqkkekigwssku = self::kgswyesggeyekgmg . "\163\145\164\165\160\x5f\160\141\x74\164\x65\162\x6e\137\141\143\x74\151\x6f\156"; const quuasuseuccsemsw = self::kgswyesggeyekgmg . "\141\143\x74\x69\166\x65\x5f\160\141\x74\x74\x65\162\x6e\137\141\143\164\151\x6f\156"; const qskskgmuqiggaqeg = self::kgswyesggeyekgmg . "\x63\150\x65\x63\x6b\x5f\x70\x61\164\x74\145\x72\156\137\x72\165\156\137\141\x63\164\151\x6f\156"; const kaqawyqaekuookgi = self::kgswyesggeyekgmg . "\160\141\x67\x65\x73\x5f\x63\x61\x63\150\145\x5f\x73\164\x61\164\x75\163"; const kusgmosaoigiukgi = self::kgswyesggeyekgmg . "\162\145\x6f\x70\x74\x69\x6d\x69\172\145\137\x70\x61\164\164\145\162\x6e\137\x61\x63\x74\x69\x6f\156"; const wegmeawoaymsqkyi = self::kgswyesggeyekgmg . "\x64\x65\x61\x63\164\x69\166\141\x74\145\137\160\141\x74\x74\x65\x72\x6e\x5f\x61\x63\164\x69\157\156"; const maqcykaweqimuomu = self::kgswyesggeyekgmg . "\x63\x68\x65\x63\153\x5f\x63\x61\x6e\144\x69\144\x61\164\145\x5f\x75\162\x6c\137\141\x63\x74\151\157\156"; const ggmmioeoauiyccec = self::kgswyesggeyekgmg . "\160\141\x67\x65\163\x5f\143\141\x63\150\x65\137\160\162\x6f\x67\x72\145\x73\x73"; const esiucesqiemeickk = self::kgswyesggeyekgmg . "\x70\x75\x72\147\145\x5f\x70\141\164\x74\145\162\156\x5f\160\141\x67\x65\x73\137\143\x61\143\150\x65\137\x61\143\164\x69\x6f\x6e"; const ccyqqagwskwauoem = ["\x70\165\x72\147\145\x5f\160\141\x74\x74\145\x72\156\x5f\x70\141\147\x65\163\137\x63\141\x63\150\145" => self::esiucesqiemeickk, "\160\141\147\x65\163\x5f\143\x61\143\150\145\x5f\160\162\x6f\147\x72\x65\163\163" => self::ggmmioeoauiyccec, "\x63\150\145\x63\x6b\x5f\143\141\156\144\151\x64\x61\x74\145\x5f\154\x69\156\153" => self::maqcykaweqimuomu, "\x70\141\147\x65\x73\137\x63\x61\x63\150\145\x5f\x73\x74\141\164\165\x73" => self::kaqawyqaekuookgi, "\x64\x65\x61\x63\164\x69\x76\x61\164\145\137\x70\x61\164\164\x65\162\156" => self::wegmeawoaymsqkyi, "\162\x65\157\x70\x74\x69\x6d\151\172\145\137\160\x61\164\164\145\x72\156" => self::kusgmosaoigiukgi, "\143\x68\x65\143\x6b\137\x70\x61\164\164\145\x72\156\x5f\x72\x75\156" => self::qskskgmuqiggaqeg, "\141\x63\164\151\x76\x61\164\145\137\x70\141\x74\x74\x65\162\156" => self::quuasuseuccsemsw, "\163\x65\x74\x75\160\137\160\141\x74\x74\145\162\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\x63\x67\143\x71\x6d\151\x6f\x6b\x73\171\167\153\x65\x6b\x61\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\x63\151\167\167\x6f\x6f\167\167\143\163\x63\x73\x63\147\165\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\x75\x77\155\x71\141\163\x6b\x63\167\141\x6d\151\147\151\155\145"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\161\x75\x63\171\161\161\153\147\x73\161\171\x73\x61\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\x77\x75\x61\x71\x6f\x73\x6d\x71\x6d\x77\155\x65\157\151\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\165\x77\x79\151\x61\x67\x65\145\x61\145\157\x79\x75\171"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\x65\x6b\x61\x6d\147\x65\x71\157\147\x6f\163\147\147\145\x6f\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\141\x61\145\155\143\x73\153\145\155\x67\x79\x61\157\x61\x6f\x77"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\163\145\163\x61\161\153\x65\x73\141\x65\x61\145\x63\157\x61\157"]); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(self::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(self::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(self::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto ggewkaiwwgkmkwgc; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto kmseiouukkqiumum; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\120\x61\164\x74\x65\x72\156\x20\116\x6f\x74\x20\x46\157\x75\156\x64", PR__MDL__OPTIMIZATION)); goto syuywgysqyckcqay; kmseiouukkqiumum: switch ($aiamqeawckcsuaou) { case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\x70\162\157\x67\162\x65\163\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), self::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto qysmyemoucigsmua; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto qysmyemoucigsmua; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto swuggqyiaiqywgge; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\x65\162\x65\40\151\163\40\156\157\x20\162\145\x6d\x6f\164\x65\x20\162\165\156\x20\146\157\162\x20\160\141\164\x74\145\x72\156\x2e", PR__MDL__OPTIMIZATION)); goto ocwouquuwsaqakae; swuggqyiaiqywgge: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === self::eyemmiwoaayukksq)) { goto qoacckkkwsqkokye; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\x61\x6c\137\x62\162\157\167\x73\x65\x72\x5f\143\150\145\x63\153\x5f\146\151\156\151\163\x68\145\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto tagquiiokseckkqs; } if (is_wp_error($sogksuscggsicmac)) { goto gkeymcqqsewayscs; } if (!$sogksuscggsicmac) { goto ooooceiweeackgie; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; ooooceiweeackgie: goto qwiyicoywcekgyce; gkeymcqqsewayscs: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; qwiyicoywcekgyce: tagquiiokseckkqs: qoacckkkwsqkokye: $keccaugmemegoimu = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\x61\x74\145\163\x74\137\x72\x75\156" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\154\141\x74\145\163\164\x5f\162\x75\156", true) : '', "\x70\141\147\x65\163\137\143\x61\x63\x68\145" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; ocwouquuwsaqakae: goto qysmyemoucigsmua; case self::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto qysmyemoucigsmua; case self::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto yccuomocgmewkeca; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto gcaykgmmmqomsyis; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); gcaykgmmmqomsyis: yccuomocgmewkeca: goto qysmyemoucigsmua; case self::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto suiywiakesiegcwu; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); suiywiakesiegcwu: goto qysmyemoucigsmua; case self::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::uucoeqmmykkwsmqc); goto qysmyemoucigsmua; case self::wwgqqgayyagycysu: $goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo); $keccaugmemegoimu = true; goto qysmyemoucigsmua; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto qysmyemoucigsmua; } kuaiscyqkgcouiye: qysmyemoucigsmua: syuywgysqyckcqay: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; ggewkaiwwgkmkwgc: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto kkieqqwwascekcmo; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); kkieqqwwascekcmo: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::ogigqueukwysusii, '', true))) { goto mugeiwyysiemwaym; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto ycueoqkeakismiqw; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\125\x52\114\x20\151\163\40\156\x6f\164\x20\155\141\164\143\x68\145\x64\x20\x74\157\x20\160\x61\x74\x74\145\x72\x6e\x2e", PR__MDL__OPTIMIZATION)); goto awimwukcyiceackk; ycueoqkeakismiqw: $ksaameoqigiaoigg = $iwywmkygwewiamwm; awimwukcyiceackk: mugeiwyysiemwaym: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto qgyaeoqgekocwkmw; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\120\141\x74\164\145\x72\156\x20\x61\x6c\162\145\x61\x64\x79\40\163\145\164\x75\x70\x65\x64\56", PR__MDL__OPTIMIZATION)); goto sieykcqauaygcais; qgyaeoqgekocwkmw: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto wgeueumgacuuuama; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto auaywaskqooasiuq; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::iwyueouqaqegmcas]) && $igqsaukqcqscimok[self::iwyueouqaqegmcas])) { goto ouaoyqugwsagkqaa; } $ueeagokqmgisgauy .= "\74\x62\162\x3e{$this->gcsweumukyckmgik($igqsaukqcqscimok[self::iwyueouqaqegmcas])}"; ouaoyqugwsagkqaa: gkwoqoeaecgkymeu: } uwscegkmmumymoaq: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\x53\157\x6d\x65\40\160\x61\147\145\x20\156\x6f\x74\40\141\x64\144\56\x20\x25\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto ewoqyogcaksucksk; auaywaskqooasiuq: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto cquikgykuscqmigw; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); goto cyymeyomuakqakwo; cquikgykuscqmigw: if ($iwywmkygwewiamwm) { goto euymeegkukskiowq; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); euymeegkukskiowq: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); cyymeyomuakqakwo: ewoqyogcaksucksk: goto yukacyeckkwagusw; wgeueumgacuuuama: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\125\x52\114\x20\x69\163\40\156\x6f\x74\x20\155\141\x74\x63\150\x65\x64\40\x74\x6f\40\160\141\x74\164\x65\162\x6e\56", PR__MDL__OPTIMIZATION)); yukacyeckkwagusw: sieykcqauaygcais: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if (!$ycikkiiimgoqqgsq->qumqowkwyaceeqwu([self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc])) { goto ieoiygycmseqmmgc; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x41\156\x6f\164\x68\145\162\x20\160\x72\x6f\143\x65\x73\163\x20\x61\154\x72\145\141\x64\x79\40\163\x74\x61\x72\164\145\144\x2e", PR__MDL__OPTIMIZATION), 401); goto gkuwmiusoqwesqoo; ieoiygycmseqmmgc: if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto iuaeeeeggkikuiig; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->akkkoiiymmamsauc($sameaqkagyqomooq, $iuekmkswcsacoawq::ewyamgkooeqiecwg))) { goto simkiasocoimioew; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::auqoykcmsiauccao)); simkiasocoimioew: iuaeeeeggkikuiig: $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x76\151\x72\x74\x75\141\x6c\137\x62\162\157\x77\x73\145\x72\137\x61\x64\144\137\152\157\x62", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto kmiqskugkmaiugae; } $ycikkiiimgoqqgsq->gscuuyuyauokoyuo([self::uiwqcumqkgikqyue => $sogksuscggsicmac, self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::oayciggqokqmayuy => $this->wkagassgcaqeosio()->mqaysguwaikckgey($sameaqkagyqomooq), Remote::eksgkcqkmumuceii => self::meksegaoamowuwoq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc]); kmiqskugkmaiugae: if (is_wp_error($sogksuscggsicmac)) { goto wcioaoeiiawwqqqq; } $sogksuscggsicmac = ["\x70\141\x67\x65\x73\x5f\143\141\143\x68\145\x5f\x73\164\141\164\165\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\160\x61\x67\x65\x73\x5f\143\141\x63\x68\x65", true), "\160\141\164\164\x65\x72\x6e\137\x70\x72\x6f\x67\x72\x65\x73\x73\142\x61\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\164\145\163\x74\x5f\x72\165\156", true)]; goto qaikeckkiwasykwk; wcioaoeiiawwqqqq: $iswcokucwmiosiaq = $this->gcsweumukyckmgik($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\x75\x72\154\x20\145\162\162\157\162"))) { goto cqemkecywkkwaaii; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x43\141\x6e\40\x6e\157\164\40\143\157\x6e\156\x65\143\x74\40\164\x6f\40\163\145\162\166\x65\162\x20\x72\x69\x67\150\x74\x20\x6e\x6f\x77\x2c\40\160\154\145\x61\x73\x65\x20\164\x72\171\40\154\141\x74\145\x72\x20\x6f\x72\x20\x63\157\x6e\164\x61\143\x74\40\165\x73\x2e", PR__MDL__OPTIMIZATION), 500); cqemkecywkkwaaii: qaikeckkiwasykwk: gkuwmiusoqwesqoo: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if ($mokmmyiueoiqokyc) { goto wmsiqkyqsiysgcyy; } $mokmmyiueoiqokyc = $goqqimcssiyagkwy->wegymsqmyauaoqce($eouekqmooogkoqoo); wmsiqkyqsiysgcyy: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ccosqsyuggiqiuwu = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::ewyamgkooeqiecwg => $sameaqkagyqomooq, self::auqoykcmsiauccao => [self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::ciyoccqkiamemcmm => array_column($mokmmyiueoiqokyc, self::auqoykcmsiauccao), self::sieeooaigsmwocym => true]]); if (!$ccosqsyuggiqiuwu) { goto wqieuwguumokgyqg; } foreach ($ccosqsyuggiqiuwu as $mmoasaykomcwqeus) { $iuekmkswcsacoawq->gccwawquiskkswiu($mmoasaykomcwqeus, $iuekmkswcsacoawq::ewyamgkooeqiecwg); wkqwywgikoyqkyeg: } ysggiwiksocomkek: wqieuwguumokgyqg: $awyumwiewiauosqy = []; foreach ($mokmmyiueoiqokyc as $oaeaekwuocwiymuy) { $sogksuscggsicmac = $goqqimcssiyagkwy->igwoeqicuykaamye($sameaqkagyqomooq, $oaeaekwuocwiymuy); if (!(isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && !$sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto omekuqkuugyocmoc; } $this->oaumimwssciwumys($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas])); $awyumwiewiauosqy[] = $oaeaekwuocwiymuy; omekuqkuugyocmoc: qswqmgiwiyyqwioa: } aueiggyawkmkamum: return $awyumwiewiauosqy; } }
