<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668664c7535d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\160\x74\x69\x6d\x69\x7a\145"; const eueyiwccigugisqe = "\x63\x68\x65\143\153\x5f\154\x69\x6e\x6b"; const wwgqqgayyagycysu = "\160\x75\x72\x67\x65\x5f\143\141\x63\150\145"; const aeksqkkekigwssku = self::kgswyesggeyekgmg . "\x73\145\x74\165\x70\137\x70\141\x74\164\x65\x72\156\x5f\x61\x63\164\x69\x6f\156"; const quuasuseuccsemsw = self::kgswyesggeyekgmg . "\141\143\164\x69\x76\x65\137\160\141\x74\164\x65\162\156\x5f\x61\143\x74\x69\157\x6e"; const qskskgmuqiggaqeg = self::kgswyesggeyekgmg . "\143\x68\x65\143\x6b\137\160\x61\x74\164\x65\162\x6e\x5f\x72\165\x6e\x5f\141\143\x74\x69\157\156"; const kaqawyqaekuookgi = self::kgswyesggeyekgmg . "\x70\141\147\x65\163\x5f\x63\x61\x63\150\x65\137\163\164\141\164\x75\163"; const kusgmosaoigiukgi = self::kgswyesggeyekgmg . "\x72\x65\157\160\164\x69\155\x69\x7a\145\137\160\x61\x74\x74\145\162\156\x5f\x61\x63\164\151\157\156"; const wegmeawoaymsqkyi = self::kgswyesggeyekgmg . "\x64\145\141\143\164\151\166\141\164\145\137\160\x61\x74\164\145\162\x6e\137\x61\x63\164\151\157\156"; const maqcykaweqimuomu = self::kgswyesggeyekgmg . "\143\150\x65\143\153\137\x63\141\156\x64\151\144\x61\x74\145\137\165\x72\x6c\137\x61\143\x74\151\x6f\156"; const ggmmioeoauiyccec = self::kgswyesggeyekgmg . "\160\x61\147\145\163\x5f\x63\141\143\150\x65\x5f\x70\x72\157\x67\162\x65\163\163"; const aikyaygyasegygma = self::kgswyesggeyekgmg . "\160\x61\164\x74\x65\162\x6e\x5f\x6d\x61\x6e\165\141\154\x5f\157\160\x74\151\x6d\x69\172\145\x5f\141\143\x74\151\x6f\156"; const esiucesqiemeickk = self::kgswyesggeyekgmg . "\160\x75\x72\147\x65\x5f\160\x61\164\x74\x65\162\156\137\x70\141\147\145\x73\137\143\x61\143\x68\145\x5f\x61\143\164\151\157\x6e"; const ccyqqagwskwauoem = ["\160\x75\x72\147\x65\x5f\160\141\164\x74\x65\162\x6e\137\x70\141\x67\145\x73\x5f\143\141\x63\x68\145" => self::esiucesqiemeickk, "\160\141\x74\x74\x65\x72\156\x5f\155\141\x6e\x75\x61\x6c\x5f\x6f\160\164\x69\155\x69\172\x65" => self::aikyaygyasegygma, "\160\141\x67\x65\x73\137\143\x61\143\150\145\x5f\160\162\x6f\x67\x72\x65\x73\x73" => self::ggmmioeoauiyccec, "\143\x68\145\x63\x6b\x5f\x63\141\156\x64\151\144\141\x74\x65\x5f\154\151\x6e\x6b" => self::maqcykaweqimuomu, "\160\141\x67\145\x73\x5f\x63\141\x63\150\x65\137\x73\x74\x61\x74\165\x73" => self::kaqawyqaekuookgi, "\x64\145\141\143\x74\x69\x76\141\164\x65\137\x70\141\x74\x74\145\x72\156" => self::wegmeawoaymsqkyi, "\162\145\x6f\160\x74\x69\x6d\x69\172\x65\137\x70\141\164\164\145\162\156" => self::kusgmosaoigiukgi, "\x63\150\145\143\153\x5f\160\x61\164\164\145\x72\x6e\x5f\162\165\156" => self::qskskgmuqiggaqeg, "\141\143\x74\151\x76\141\164\x65\x5f\160\141\x74\164\x65\162\156" => self::quuasuseuccsemsw, "\x73\145\x74\x75\x70\x5f\160\141\x74\164\145\x72\156" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\x63\x67\x63\161\155\x69\157\153\x73\x79\167\x6b\x65\153\141\x6f"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\x69\x77\167\x6f\x6f\167\167\x63\x73\x63\163\143\147\165\147"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\x75\x77\x6d\x71\x61\163\153\143\x77\141\155\x69\147\151\155\145"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\x67\161\165\x63\x79\161\x71\153\x67\x73\161\x79\x73\x61\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\151\x77\165\141\161\x6f\x73\155\x71\x6d\167\x6d\x65\157\x69\167"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\165\167\x79\151\141\147\x65\x65\x61\x65\157\171\165\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\x65\153\141\155\x67\145\161\x6f\x67\x6f\x73\147\147\x65\157\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\141\141\145\x6d\143\x73\153\x65\155\147\171\141\157\141\x6f\167"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\x71\x77\x79\x67\x63\x67\165\171\147\x75\143\151\x77\157\153\x75"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\x65\x73\x61\x71\153\145\163\141\x65\141\145\143\157\141\x6f"]); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(self::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(self::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(self::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto eeomcmuiqwgwwuqk; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto mwwygasiagaqsimo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\141\x74\164\145\x72\156\40\x4e\157\164\40\106\157\165\x6e\144", PR__MDL__OPTIMIZATION)); goto wucacaegysmiusai; mwwygasiagaqsimo: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: if ($goqqimcssiyagkwy->iwoekuysekysqmke()) { goto mwqcykaeywsmoumm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x61\164\164\x65\162\156\40\x6d\141\x6e\165\x61\x6c\x20\157\160\164\151\x6d\151\172\x65\40\156\157\x74\40\141\166\x61\151\x6c\x61\142\154\145\40\x72\x69\147\x68\x74\x20\156\x6f\x77\x21", PR__MDL__OPTIMIZATION)); goto awgmyaycugswmwae; mwqcykaeywsmoumm: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto eimouyomcoqkmaae; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\x4a\x53\117\x4e", PR__MDL__OPTIMIZATION)); goto kkwqmoeeqygoimwg; eimouyomcoqkmaae: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x76\x69\x72\x74\165\x61\x6c\x5f\142\162\157\x77\x73\145\x72\x5f\x63\x61\143\x68\145\x5f\x72\145\163\165\154\164", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\120\141\164\164\145\x72\x6e\40\x64\141\x74\141\40\143\x61\143\x68\x65\144\40\163\165\x63\x63\x65\x73\163\146\165\154\154\x79\x2e", PR__MDL__OPTIMIZATION); kkwqmoeeqygoimwg: awgmyaycugswmwae: goto ggoimgeeuugseiwk; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\x70\162\x6f\x67\162\145\x73\x73" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), self::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto ggoimgeeuugseiwk; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto ggoimgeeuugseiwk; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto iyyaiuccouqowyga; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\145\162\145\x20\x69\163\x20\156\157\x20\x72\x65\x6d\157\x74\145\x20\162\165\156\40\146\x6f\x72\x20\x70\141\164\x74\145\162\x6e\x2e", PR__MDL__OPTIMIZATION)); goto ikqagqacuwcgwmqy; iyyaiuccouqowyga: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === self::eyemmiwoaayukksq)) { goto iwcmgioeaiyuacwi; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x76\151\162\164\x75\141\x6c\137\x62\162\x6f\167\x73\145\x72\x5f\143\x68\x65\x63\x6b\137\146\x69\156\x69\x73\150\145\x64", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto icuukwkwqeoogyae; } if (is_wp_error($sogksuscggsicmac)) { goto iauwkeeaqsgweeoo; } if (!$sogksuscggsicmac) { goto ywoyioqqyuocoygk; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; ywoyioqqyuocoygk: goto aycqgowuwagcgque; iauwkeeaqsgweeoo: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; aycqgowuwagcgque: icuukwkwqeoogyae: iwcmgioeaiyuacwi: $keccaugmemegoimu = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\x61\x74\x65\x73\164\137\162\165\x6e" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\x74\x65\163\164\x5f\x72\165\156", true) : '', "\160\141\x67\x65\x73\x5f\x63\141\x63\x68\145" => $iueymcwwscwqkiyq !== self::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; ikqagqacuwcgwmqy: goto ggoimgeeuugseiwk; case self::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto ggoimgeeuugseiwk; case self::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto cksomiiqscosigke; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto gcogomgmqcgkeceg; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); gcogomgmqcgkeceg: cksomiiqscosigke: goto ggoimgeeuugseiwk; case self::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto ugmukcwgcioqgywy; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); ugmukcwgcioqgywy: goto ggoimgeeuugseiwk; case self::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::uucoeqmmykkwsmqc); goto ggoimgeeuugseiwk; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto kisccmsaieigisiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\x65\x74\150\151\x6e\147\40\x77\162\x6f\156\147\40\x6f\156\40\x70\x75\162\147\151\x6e\x67\40\x70\141\x67\x65\x73\x20\143\141\143\x68\145\x2e", PR__MDL__OPTIMIZATION)); goto euoscysqgugsqewc; kisccmsaieigisiu: $keccaugmemegoimu = __("\x50\x61\147\145\x73\40\143\x61\143\150\145\40\160\165\162\x67\x65\x64\x20\x73\x75\143\x63\x65\163\163\x66\x75\154\x6c\171\56", PR__MDL__OPTIMIZATION); euoscysqgugsqewc: goto ggoimgeeuugseiwk; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto ggoimgeeuugseiwk; } gimquiiwucueoqkw: ggoimgeeuugseiwk: wucacaegysmiusai: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; eeomcmuiqwgwwuqk: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto mseokuecmeoyoggk; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); mseokuecmeoyoggk: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::ogigqueukwysusii, '', true))) { goto esgyqksmcukeuwyk; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto uookseqsmsqgweuy; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\125\x52\114\x20\x69\x73\40\156\x6f\x74\40\x6d\141\x74\x63\x68\x65\144\x20\164\157\x20\x70\x61\x74\164\x65\x72\x6e\56", PR__MDL__OPTIMIZATION)); goto yeaqsiqgakskoykg; uookseqsmsqgweuy: $ksaameoqigiaoigg = $iwywmkygwewiamwm; yeaqsiqgakskoykg: esgyqksmcukeuwyk: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto sukcyismwageqgok; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x50\x61\x74\x74\x65\162\156\x20\x61\x6c\162\145\141\x64\x79\x20\163\145\x74\165\x70\x65\144\56", PR__MDL__OPTIMIZATION)); goto ukmgwuiqwgyiouec; sukcyismwageqgok: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(self::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto cqkyumayoemqsueu; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto misiasooemyskoay; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::iwyueouqaqegmcas]) && $igqsaukqcqscimok[self::iwyueouqaqegmcas])) { goto oysyuiqmsokoykaq; } $ueeagokqmgisgauy .= "\74\142\162\x3e{$this->gcsweumukyckmgik($igqsaukqcqscimok[self::iwyueouqaqegmcas])}"; oysyuiqmsokoykaq: omqyuuomwywmqeiq: } aeockieewgkequae: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\x53\x6f\155\x65\40\x70\141\x67\145\x20\156\x6f\x74\x20\x61\x64\144\x2e\40\45\163", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto eomqeimoequmagum; misiasooemyskoay: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto ycaqooeeseougumo; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, self::eqewsqmqmsiocaeg); goto eceeoiwuagocweus; ycaqooeeseougumo: if ($iwywmkygwewiamwm) { goto iigmgswcogqemgao; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); iigmgswcogqemgao: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); eceeoiwuagocweus: eomqeimoequmagum: goto ksqmcugkcmsooeaw; cqkyumayoemqsueu: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x55\122\114\x20\x69\163\x20\x6e\x6f\x74\40\x6d\141\x74\143\x68\x65\x64\x20\x74\x6f\40\x70\141\x74\164\145\162\x6e\x2e", PR__MDL__OPTIMIZATION)); ksqmcugkcmsooeaw: ukmgwuiqwgyiouec: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if (!$ycikkiiimgoqqgsq->qumqowkwyaceeqwu([self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc])) { goto meiqywmwuoogckss; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\101\156\157\164\x68\145\x72\40\160\x72\x6f\143\145\163\x73\x20\141\x6c\162\145\x61\144\171\x20\x73\x74\x61\x72\164\145\x64\x2e", PR__MDL__OPTIMIZATION), 401); goto oyeygeykqwcqoeic; meiqywmwuoogckss: if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto geoiegikocwmwosi; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->akkkoiiymmamsauc($sameaqkagyqomooq, $iuekmkswcsacoawq::ewyamgkooeqiecwg))) { goto qykcggwgkweasuii; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::auqoykcmsiauccao)); qykcggwgkweasuii: geoiegikocwmwosi: $sogksuscggsicmac = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x76\151\162\x74\x75\141\x6c\137\x62\x72\x6f\167\163\145\162\137\x61\144\x64\x5f\152\x6f\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto wasuquysysmqyegg; } $ycikkiiimgoqqgsq->gscuuyuyauokoyuo([self::uiwqcumqkgikqyue => $sogksuscggsicmac, self::ciywsqoeiymemsys => self::eyemmiwoaayukksq, Remote::oayciggqokqmayuy => $this->wkagassgcaqeosio()->mqaysguwaikckgey($sameaqkagyqomooq), Remote::eksgkcqkmumuceii => self::meksegaoamowuwoq, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc]); wasuquysysmqyegg: if (is_wp_error($sogksuscggsicmac)) { goto okawiaowosqickgq; } $sogksuscggsicmac = ["\x70\x61\x67\x65\163\x5f\143\x61\143\x68\x65\137\x73\164\x61\164\165\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\141\x67\145\163\137\143\141\x63\150\x65", true), "\x70\x61\164\x74\x65\162\x6e\x5f\160\x72\x6f\x67\x72\x65\x73\163\142\141\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\141\x74\x65\163\164\137\162\x75\156", true)]; goto ogciikaecauiwgyk; okawiaowosqickgq: $iswcokucwmiosiaq = $this->gcsweumukyckmgik($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\x75\162\154\40\x65\162\162\157\162"))) { goto eqsuaywswuesuika; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x43\141\156\40\x6e\x6f\164\40\x63\157\x6e\x6e\145\143\x74\x20\x74\157\40\x73\145\x72\x76\145\162\40\162\x69\147\x68\x74\40\x6e\157\167\54\40\160\154\x65\141\x73\x65\x20\x74\x72\x79\40\x6c\x61\164\145\162\40\157\162\40\x63\x6f\x6e\x74\141\x63\164\x20\165\x73\56", PR__MDL__OPTIMIZATION), 500); eqsuaywswuesuika: ogciikaecauiwgyk: oyeygeykqwcqoeic: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
