<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665ad6e880229             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\160\164\x69\155\x69\172\x65"; const eueyiwccigugisqe = "\143\150\x65\143\x6b\137\154\151\156\x6b"; const wwgqqgayyagycysu = "\x70\165\x72\147\x65\137\x63\141\143\x68\x65"; const aeksqkkekigwssku = self::kgswyesggeyekgmg . "\x73\x65\x74\x75\160\x5f\x70\141\164\164\x65\162\156\137\141\143\164\151\x6f\x6e"; const quuasuseuccsemsw = self::kgswyesggeyekgmg . "\141\x63\164\151\x76\x65\137\160\141\164\164\x65\x72\x6e\x5f\141\x63\164\151\157\x6e"; const qskskgmuqiggaqeg = self::kgswyesggeyekgmg . "\143\150\x65\143\153\x5f\160\x61\x74\164\145\162\156\137\x72\165\156\x5f\x61\x63\x74\x69\x6f\x6e"; const kaqawyqaekuookgi = self::kgswyesggeyekgmg . "\x70\x61\x67\x65\163\137\x63\x61\x63\150\145\x5f\x73\164\141\164\165\163"; const kusgmosaoigiukgi = self::kgswyesggeyekgmg . "\162\145\157\x70\164\x69\x6d\151\172\145\137\160\x61\164\x74\x65\162\x6e\137\141\143\x74\x69\157\x6e"; const wegmeawoaymsqkyi = self::kgswyesggeyekgmg . "\144\x65\141\143\164\x69\166\x61\x74\x65\137\160\141\x74\x74\x65\x72\156\x5f\141\x63\x74\x69\157\156"; const maqcykaweqimuomu = self::kgswyesggeyekgmg . "\x63\x68\x65\143\x6b\137\143\141\x6e\x64\151\x64\x61\164\x65\137\165\162\x6c\x5f\x61\x63\164\151\x6f\x6e"; const ggmmioeoauiyccec = self::kgswyesggeyekgmg . "\160\141\x67\145\x73\137\x63\x61\143\x68\x65\137\x70\162\x6f\x67\x72\x65\163\x73"; const esiucesqiemeickk = self::kgswyesggeyekgmg . "\160\165\x72\147\x65\137\160\x61\x74\x74\x65\x72\156\137\x70\x61\x67\x65\x73\x5f\x63\141\x63\x68\145\x5f\141\x63\x74\151\157\x6e"; const ccyqqagwskwauoem = ["\x70\x75\162\147\145\137\160\141\164\x74\x65\x72\x6e\x5f\160\x61\x67\x65\163\x5f\143\141\143\x68\x65" => self::esiucesqiemeickk, "\160\141\147\145\x73\137\x63\141\x63\150\145\137\160\x72\157\x67\x72\145\x73\163" => self::ggmmioeoauiyccec, "\x63\x68\x65\x63\153\137\143\141\x6e\144\x69\144\141\164\145\137\154\x69\x6e\153" => self::maqcykaweqimuomu, "\x70\x61\147\145\163\x5f\143\141\x63\150\x65\137\x73\x74\141\x74\x75\x73" => self::kaqawyqaekuookgi, "\x64\145\141\x63\x74\x69\x76\x61\x74\145\x5f\160\x61\x74\164\145\x72\156" => self::wegmeawoaymsqkyi, "\x72\x65\x6f\x70\x74\151\155\x69\172\145\137\160\141\164\x74\x65\x72\x6e" => self::kusgmosaoigiukgi, "\143\x68\145\143\x6b\137\x70\x61\x74\x74\145\162\156\137\162\x75\156" => self::qskskgmuqiggaqeg, "\141\x63\x74\x69\x76\x61\x74\x65\x5f\160\x61\164\x74\x65\162\156" => self::quuasuseuccsemsw, "\163\x65\x74\165\160\x5f\x70\x61\x74\164\x65\x72\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\x67\x63\161\x6d\x69\x6f\153\x73\171\167\153\145\153\x61\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\x63\151\x77\167\157\x6f\167\x77\143\x73\143\163\x63\147\165\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\x77\x6d\161\x61\x73\x6b\x63\167\x61\x6d\151\x67\x69\155\145"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\x67\161\x75\x63\x79\161\161\x6b\147\163\x71\171\163\141\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\151\167\x75\141\x71\157\163\155\x71\155\167\x6d\x65\157\x69\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\165\x77\x79\151\141\147\x65\x65\x61\145\157\171\165\171"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\x65\153\141\155\x67\x65\x71\x6f\x67\x6f\163\147\x67\145\157\x61"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\141\x61\145\x6d\x63\x73\153\x65\155\x67\x79\x61\157\141\157\167"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\145\x73\141\161\x6b\x65\x73\x61\145\141\x65\143\157\x61\157"]); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(self::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(self::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(self::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto ggewkaiwwgkmkwgc; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto kmseiouukkqiumum; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x61\x74\x74\x65\162\x6e\40\x4e\157\164\40\106\157\165\x6e\x64", PR__MDL__OPTIMIZATION)); goto syuywgysqyckcqay; kmseiouukkqiumum: switch ($aiamqeawckcsuaou) { case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\x70\162\x6f\147\162\x65\163\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), self::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto qysmyemoucigsmua; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto qysmyemoucigsmua; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto swuggqyiaiqywgge; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\x65\162\145\x20\151\x73\40\156\x6f\40\162\x65\x6d\157\164\x65\x20\162\x75\x6e\x20\x66\x6f\x72\x20\x70\x61\x74\164\x65\x72\x6e\x2e", PR__MDL__OPTIMIZATION)); goto ocwouquuwsaqakae; swuggqyiaiqywgge: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === self::eyemmiwoaayukksq)) { goto qoacckkkwsqkokye; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x76\151\x72\x74\x75\141\154\137\x62\162\157\167\x73\145\162\137\143\150\x65\143\153\x5f\146\x69\156\151\163\x68\x65\x64", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto tagquiiokseckkqs; } if (is_wp_error($sogksuscggsicmac)) { goto gkeymcqqsewayscs; } if (!$sogksuscggsicmac) { goto ooooceiweeackgie; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; ooooceiweeackgie: goto qwiyicoywcekgyce; gkeymcqqsewayscs: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; qwiyicoywcekgyce: tagquiiokseckkqs: qoacckkkwsqkokye: $keccaugmemegoimu = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\x61\x74\145\163\x74\x5f\x72\x75\x6e" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\x74\x65\163\164\x5f\162\165\156", true) : '', "\160\x61\147\x65\x73\137\x63\141\x63\150\x65" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; ocwouquuwsaqakae: goto qysmyemoucigsmua; case self::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto qysmyemoucigsmua; case self::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto yccuomocgmewkeca; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto gcaykgmmmqomsyis; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); gcaykgmmmqomsyis: yccuomocgmewkeca: goto qysmyemoucigsmua; case self::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto suiywiakesiegcwu; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); suiywiakesiegcwu: goto qysmyemoucigsmua; case self::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::uucoeqmmykkwsmqc); goto qysmyemoucigsmua; case self::wwgqqgayyagycysu: $goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo); $keccaugmemegoimu = true; goto qysmyemoucigsmua; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto qysmyemoucigsmua; } kuaiscyqkgcouiye: qysmyemoucigsmua: syuywgysqyckcqay: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; ggewkaiwwgkmkwgc: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto kkieqqwwascekcmo; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); kkieqqwwascekcmo: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::ogigqueukwysusii, '', true))) { goto mugeiwyysiemwaym; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto ycueoqkeakismiqw; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x55\122\x4c\40\x69\x73\40\156\x6f\164\40\155\141\x74\x63\150\x65\144\x20\x74\x6f\x20\x70\x61\164\164\145\x72\156\56", PR__MDL__OPTIMIZATION)); goto awimwukcyiceackk; ycueoqkeakismiqw: $ksaameoqigiaoigg = $iwywmkygwewiamwm; awimwukcyiceackk: mugeiwyysiemwaym: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto qgyaeoqgekocwkmw; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x50\x61\164\x74\x65\x72\156\x20\141\x6c\x72\x65\x61\x64\171\x20\x73\145\164\x75\x70\x65\x64\56", PR__MDL__OPTIMIZATION)); goto sieykcqauaygcais; qgyaeoqgekocwkmw: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto wgeueumgacuuuama; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto auaywaskqooasiuq; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::iwyueouqaqegmcas]) && $igqsaukqcqscimok[self::iwyueouqaqegmcas])) { goto ouaoyqugwsagkqaa; } $ueeagokqmgisgauy .= "\74\142\162\76{$this->gcsweumukyckmgik($igqsaukqcqscimok[self::iwyueouqaqegmcas])}"; ouaoyqugwsagkqaa: gkwoqoeaecgkymeu: } uwscegkmmumymoaq: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\x53\157\x6d\145\x20\160\141\x67\x65\40\156\x6f\164\x20\141\x64\x64\56\40\45\163", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto ewoqyogcaksucksk; auaywaskqooasiuq: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto cquikgykuscqmigw; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); goto cyymeyomuakqakwo; cquikgykuscqmigw: if ($iwywmkygwewiamwm) { goto euymeegkukskiowq; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); euymeegkukskiowq: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); cyymeyomuakqakwo: ewoqyogcaksucksk: goto yukacyeckkwagusw; wgeueumgacuuuama: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\125\x52\x4c\40\x69\163\40\x6e\x6f\x74\40\x6d\141\164\x63\150\145\144\40\164\x6f\40\160\x61\x74\164\x65\162\x6e\x2e", PR__MDL__OPTIMIZATION)); yukacyeckkwagusw: sieykcqauaygcais: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if (!$ycikkiiimgoqqgsq->qumqowkwyaceeqwu([self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc])) { goto ieoiygycmseqmmgc; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x41\156\x6f\164\x68\x65\x72\x20\x70\x72\x6f\x63\145\x73\x73\40\x61\x6c\162\x65\141\144\171\40\163\164\x61\x72\x74\145\x64\x2e", PR__MDL__OPTIMIZATION), 401); goto gkuwmiusoqwesqoo; ieoiygycmseqmmgc: if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto iuaeeeeggkikuiig; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->akkkoiiymmamsauc($sameaqkagyqomooq, $iuekmkswcsacoawq::ewyamgkooeqiecwg))) { goto simkiasocoimioew; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::auqoykcmsiauccao)); simkiasocoimioew: iuaeeeeggkikuiig: $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\151\x72\x74\x75\x61\x6c\137\x62\162\157\167\x73\x65\x72\x5f\x61\144\144\x5f\x6a\x6f\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto kmiqskugkmaiugae; } $ycikkiiimgoqqgsq->gscuuyuyauokoyuo([self::uiwqcumqkgikqyue => $sogksuscggsicmac, self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::oayciggqokqmayuy => $this->wkagassgcaqeosio()->mqaysguwaikckgey($sameaqkagyqomooq), Remote::eksgkcqkmumuceii => self::meksegaoamowuwoq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc]); kmiqskugkmaiugae: if (is_wp_error($sogksuscggsicmac)) { goto wcioaoeiiawwqqqq; } $sogksuscggsicmac = ["\x70\x61\147\x65\x73\137\143\x61\x63\x68\145\x5f\163\164\141\164\x75\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\141\x67\145\163\x5f\x63\141\143\150\x65", true), "\x70\141\164\x74\x65\x72\x6e\x5f\x70\x72\x6f\147\x72\x65\x73\163\142\x61\162" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\141\164\145\x73\164\x5f\x72\165\x6e", true)]; goto qaikeckkiwasykwk; wcioaoeiiawwqqqq: $iswcokucwmiosiaq = $this->gcsweumukyckmgik($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\143\x75\x72\154\x20\145\x72\x72\157\x72"))) { goto cqemkecywkkwaaii; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x43\x61\x6e\x20\x6e\157\164\40\143\157\x6e\156\x65\x63\x74\x20\164\157\x20\163\x65\162\x76\x65\x72\x20\162\151\147\150\164\x20\156\157\x77\54\x20\x70\154\x65\x61\163\x65\x20\x74\162\x79\40\154\x61\x74\145\x72\x20\157\162\40\143\157\x6e\x74\x61\143\164\x20\165\x73\x2e", PR__MDL__OPTIMIZATION), 500); cqemkecywkkwaaii: qaikeckkiwasykwk: gkuwmiusoqwesqoo: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if ($mokmmyiueoiqokyc) { goto wmsiqkyqsiysgcyy; } $mokmmyiueoiqokyc = $goqqimcssiyagkwy->wegymsqmyauaoqce($eouekqmooogkoqoo); wmsiqkyqsiysgcyy: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ccosqsyuggiqiuwu = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::ewyamgkooeqiecwg => $sameaqkagyqomooq, self::auqoykcmsiauccao => [self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::ciyoccqkiamemcmm => array_column($mokmmyiueoiqokyc, self::auqoykcmsiauccao), self::sieeooaigsmwocym => true]]); if (!$ccosqsyuggiqiuwu) { goto wqieuwguumokgyqg; } foreach ($ccosqsyuggiqiuwu as $mmoasaykomcwqeus) { $iuekmkswcsacoawq->gccwawquiskkswiu($mmoasaykomcwqeus, $iuekmkswcsacoawq::ewyamgkooeqiecwg); wkqwywgikoyqkyeg: } ysggiwiksocomkek: wqieuwguumokgyqg: $awyumwiewiauosqy = []; foreach ($mokmmyiueoiqokyc as $oaeaekwuocwiymuy) { $sogksuscggsicmac = $goqqimcssiyagkwy->igwoeqicuykaamye($sameaqkagyqomooq, $oaeaekwuocwiymuy); if (!(isset($sogksuscggsicmac[self::ckcawaoawwioqecq]) && !$sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto omekuqkuugyocmoc; } $this->oaumimwssciwumys($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas])); $awyumwiewiauosqy[] = $oaeaekwuocwiymuy; omekuqkuugyocmoc: qswqmgiwiyyqwioa: } aueiggyawkmkamum: return $awyumwiewiauosqy; } }
