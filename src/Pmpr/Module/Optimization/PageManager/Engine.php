<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637389418f87             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimizer\SpecialPage\Search\Setting as SearchSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Local; use Pmpr\Module\Optimization\PageManager\Search\History; use WP_Error; use WP_Post; class Engine extends Common { public function gwouoomgwecwwmoa() : bool { return !empty($this->euyyeqkmigikiaam()); } public function owimqaiqokakwisa($aqykuigiuwmmcieu = null) { $ksaameoqigiaoigg = []; $sameaqkagyqomooq = $this->euyyeqkmigikiaam(Page::ewyamgkooeqiecwg); if (!$sameaqkagyqomooq) { goto eekcoeikaeaaeyii; } $ksaameoqigiaoigg = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x76\x69\162\x74\x75\141\154\x5f\x62\162\157\167\x73\145\162\137\147\x65\164\x5f\143\141\143\x68\x65\x64\x5f\x64\x61\x74\x61", $ksaameoqigiaoigg, $sameaqkagyqomooq); eekcoeikaeaaeyii: if (!$aqykuigiuwmmcieu) { goto uaukmuiwskcemcsw; } if (!isset($ksaameoqigiaoigg[self::skogicecygyyskkq])) { goto ugqwuugsweqgmywk; } if ($this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm()) { goto cogywoqcqummsyus; } $ksaameoqigiaoigg = $ksaameoqigiaoigg[self::mcaucuyeeiwsmmuy]; goto gmwykkouysyaqwqm; cogywoqcqummsyus: $ksaameoqigiaoigg = $ksaameoqigiaoigg[self::skogicecygyyskkq]; gmwykkouysyaqwqm: ugqwuugsweqgmywk: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ksaameoqigiaoigg, $aqykuigiuwmmcieu, ''); uaukmuiwskcemcsw: return $ksaameoqigiaoigg; } public function euyyeqkmigikiaam(?string $qgoqiacsiccwoawi = null) { $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $ksaameoqigiaoigg = false; if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto uegouoiuyoqkcscg; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto isgwkwacoyimiauk; } if (!$mumyimcwkaemyyue->cukiusasccucgwqc()) { goto cscusseysqygsoiy; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!$this->qcuuyuyaywogwmee(Pattern::uouymeyqasaeckso, $useksmwkuswkwcqg)) { goto uaqackioaiqwcocy; } $ksaameoqigiaoigg = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::squoamkioomemiyi => $useksmwkuswkwcqg, Page::IDENTIFIER => $seumokooiykcomco->iooowgsqoyqseyuu($post), Page::wqqksssaoggqceky => Pattern::uouymeyqasaeckso]); uaqackioaiqwcocy: cscusseysqygsoiy: goto mggeqkcksyaymcsa; isgwkwacoyimiauk: if (!$this->qcuuyuyaywogwmee(Pattern::usoeisyyakwkuyoy, self::yayciqueeakqwese)) { goto mkwkkmkgiqiamacc; } $ksaameoqigiaoigg = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::squoamkioomemiyi => self::yayciqueeakqwese, Page::IDENTIFIER => $this->caokeucsksukesyo()->owicscwgeuqcqaig()->aeakcoksauwcayom(), Page::wqqksssaoggqceky => Pattern::usoeisyyakwkuyoy]); mkwkkmkgiqiamacc: mggeqkcksyaymcsa: goto cgyakcqgugqgkqiw; uegouoiuyoqkcscg: if (!$this->qcuuyuyaywogwmee(Pattern::usoeisyyakwkuyoy, self::skoigciaygmyqkmi)) { goto sockeswygwcskeuq; } $ksaameoqigiaoigg = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::squoamkioomemiyi => self::skoigciaygmyqkmi, Page::wqqksssaoggqceky => Pattern::usoeisyyakwkuyoy]); sockeswygwcskeuq: cgyakcqgugqgkqiw: if (!($ksaameoqigiaoigg && $qgoqiacsiccwoawi)) { goto eeyyskqsmquyquqw; } $ksaameoqigiaoigg = $iuekmkswcsacoawq->qogaqkcsogcqiaic($ksaameoqigiaoigg, $qgoqiacsiccwoawi); eeyyskqsmquyquqw: return $ksaameoqigiaoigg; } public function qcuuyuyaywogwmee($sqeykgyoooqysmca, $eqgoocgaqwqcimie) : bool { $gqgemcmoicmgaqie = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; switch ($sqeykgyoooqysmca) { case Pattern::uouymeyqasaeckso: goto ewscugeuicukkycc; case Pattern::usoeisyyakwkuyoy: $gqgemcmoicmgaqie[Pattern::usoeisyyakwkuyoy] = $eqgoocgaqwqcimie; goto ewscugeuicukkycc; case Pattern::mswmgkkakuooukme: goto ewscugeuicukkycc; } kqswcsysqawkcgye: ewscugeuicukkycc: return Pattern::symcgieuakksimmu()->qumqowkwyaceeqwu($gqgemcmoicmgaqie); } public function iymcmkkyuwgecwwm($eouekqmooogkoqoo, $suaemuyiacqyugsm) : bool { $ewkaiqqqacmkgqws = false; if (!($eouekqmooogkoqoo && $suaemuyiacqyugsm)) { goto uougwgeyiokewkkm; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $cgcyeiigiuyaeeko = $jwkieqegmyuwayce->ogegcqqcukiaqscy(self::squoamkioomemiyi, $eouekqmooogkoqoo); if (!($cgcyeiigiuyaeeko === $iuekmkswcsacoawq->ogegcqqcukiaqscy($iuekmkswcsacoawq::wqqksssaoggqceky, $suaemuyiacqyugsm))) { goto gygwewcqsmwqismo; } $eyqeaiwksimckmag = $iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::squoamkioomemiyi); $owqaeesoaygymmcy = $iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::IDENTIFIER); switch ($cgcyeiigiuyaeeko) { case self::uouymeyqasaeckso: if (!in_array($eyqeaiwksimckmag, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::yyoaeaaaquyigiim))) { goto ukkcmocamwgiqayu; } $ewkaiqqqacmkgqws = $this->gcokasmymsiaekkg($owqaeesoaygymmcy, $eouekqmooogkoqoo); ukkcmocamwgiqayu: goto wusciwkkckmqigms; case $jwkieqegmyuwayce::usoeisyyakwkuyoy: $ewkaiqqqacmkgqws = $owqaeesoaygymmcy === $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::usoeisyyakwkuyoy); goto wusciwkkckmqigms; case self::mswmgkkakuooukme: switch ($eyqeaiwksimckmag) { case $jwkieqegmyuwayce::gyiwoemkciiwikiq: in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::gyiwoemkciiwikiq)); goto mwysseaekcsiesmm; case $jwkieqegmyuwayce::mqksqgekwiqkmoyk: $ewkaiqqqacmkgqws = in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::yyoaeaaaquyigiim)); goto mwysseaekcsiesmm; case $jwkieqegmyuwayce::skqkgucqggaicigu: $ewkaiqqqacmkgqws = in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::emcyuiagkcgsckma)); goto mwysseaekcsiesmm; case $jwkieqegmyuwayce::aisoicwicqkswumu: $wwweqawywmaqacso = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::aisoicwicqkswumu); $ewkaiqqqacmkgqws = $wwweqawywmaqacso && $wwweqawywmaqacso !== self::OFF; goto mwysseaekcsiesmm; } amgsueumgaguceaa: mwysseaekcsiesmm: goto wusciwkkckmqigms; } iiiccouaaqsyikae: wusciwkkckmqigms: gygwewcqsmwqismo: uougwgeyiokewkkm: return $ewkaiqqqacmkgqws; } public function wegymsqmyauaoqce($eouekqmooogkoqoo, string $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) : array { $ocqawgquwsqioses = []; if (!$eouekqmooogkoqoo) { goto gsygwgsiawgmqiyi; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); switch ($jwkieqegmyuwayce->ogegcqqcukiaqscy(self::squoamkioomemiyi, $eouekqmooogkoqoo)) { case $jwkieqegmyuwayce::uouymeyqasaeckso: if (!($useksmwkuswkwcqg = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::yyoaeaaaquyigiim, [])[0] ?? false)) { goto wsesqmcqoiyyqkqi; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); switch ($jwkieqegmyuwayce->ogegcqqcukiaqscy($jwkieqegmyuwayce::iycqiaygcgwiwcck, $eouekqmooogkoqoo)) { case self::ALL: $ywmkwiwkosakssii = []; goto ucqmumuygcywwqma; case self::ackcaikowcokggsc: $ywmkwiwkosakssii = [self::eqomgewoayseioos => $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::kyyscqqmsikeuaea)]; goto ucqmumuygcywwqma; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii = [self::kcaoouwiygwwmiok => $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::kyyscqqmsikeuaea)]; goto ucqmumuygcywwqma; case self::suaucuoeagwokuwo: $cqacuiyauyoscwei = $eisykmiomukgakao = []; $kskuyywokkcaegae = $jwkieqegmyuwayce->cwkywyqksyucoyia([self::squoamkioomemiyi => $jwkieqegmyuwayce::uouymeyqasaeckso, self::yyoaeaaaquyigiim => [self::ciyoccqkiamemcmm => $useksmwkuswkwcqg, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); foreach ($kskuyywokkcaegae as $ioiiuuwuqimickks) { if (!isset($ywmkwiwkosakssii)) { goto kocqqoyymosmuksu; } goto uimeeckqksqeekqq; kocqqoyymosmuksu: switch ($jwkieqegmyuwayce->ogegcqqcukiaqscy($jwkieqegmyuwayce::iycqiaygcgwiwcck, $ioiiuuwuqimickks)) { case self::ackcaikowcokggsc: $eisykmiomukgakao += $jwkieqegmyuwayce->qogaqkcsogcqiaic($ioiiuuwuqimickks, self::kyyscqqmsikeuaea, []); goto uqokiksoqcwwqgio; case self::ccyeycyyykwuymsy: $cqacuiyauyoscwei += $jwkieqegmyuwayce->qogaqkcsogcqiaic($ioiiuuwuqimickks, self::kyyscqqmsikeuaea, []); goto uqokiksoqcwwqgio; case self::ALL: $ywmkwiwkosakssii = null; goto uqokiksoqcwwqgio; } qukocuwgakemmyga: uqokiksoqcwwqgio: iuuuususuuuaieem: } uimeeckqksqeekqq: if (isset($ywmkwiwkosakssii)) { goto sioekkmekwygemyc; } $ywmkwiwkosakssii = [self::eqomgewoayseioos => $cqacuiyauyoscwei, self::kcaoouwiygwwmiok => $eisykmiomukgakao]; sioekkmekwygemyc: goto ucqmumuygcywwqma; } uykousayyomcaeaa: ucqmumuygcywwqma: if (!(isset($ywmkwiwkosakssii) && is_array($ywmkwiwkosakssii))) { goto iesekaeqeomeuaui; } if (!($wyoiwuqokyeeuguk = $seumokooiykcomco->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, self::oyaoekcogwkcekcc))) { goto oyeyomcgkmgymogq; } if (self::ckmqoekmugkggeym === $aqykuigiuwmmcieu) { goto gamqcwuwkikwqoay; } $ocqawgquwsqioses = $wyoiwuqokyeeuguk; goto mscyggqcesgqqksu; gamqcwuwkikwqoay: foreach ($wyoiwuqokyeeuguk as $post) { $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post, true); $ocqawgquwsqioses[$migiiksoiymissge] = $this->gmowkweososugauu($migiiksoiymissge, $sameaqkagyqomooq, $seumokooiykcomco->iooowgsqoyqseyuu($post), self::uouymeyqasaeckso, $useksmwkuswkwcqg); ieqesiiageaauiuw: } yiowgigkkwsoqcci: mscyggqcesgqqksu: oyeyomcgkmgymogq: iesekaeqeomeuaui: wsesqmcqoiyyqkqi: goto gommacygsykyussk; case $jwkieqegmyuwayce::usoeisyyakwkuyoy: $cmimegkacscikwui = $jwkieqegmyuwayce->ogegcqqcukiaqscy($jwkieqegmyuwayce::usoeisyyakwkuyoy, $eouekqmooogkoqoo); switch ($cmimegkacscikwui) { case $jwkieqegmyuwayce::wwoeeogswkgeqack: $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq(); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $cmimegkacscikwui, $jwkieqegmyuwayce::usoeisyyakwkuyoy); goto mogkoocsoeuyoqqa; case $jwkieqegmyuwayce::skoigciaygmyqkmi: $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq() . "\x2f\64\60\64\55\156\x6f\164\x66\x6f\165\156\x64\x2d" . time(); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $cmimegkacscikwui, $jwkieqegmyuwayce::usoeisyyakwkuyoy, $cmimegkacscikwui); goto mogkoocsoeuyoqqa; case $jwkieqegmyuwayce::yayciqueeakqwese: $yyqawuyyqgsymiqk = []; if (!(self::yuwueyysmgkecygw === $this->weysguygiseoukqw(SearchSetting::ckekocwocaogoeye, self::yuwueyysmgkecygw))) { goto oimkeqocuguqqsqk; } $yyqawuyyqgsymiqk[self::qiyqwyiiwykeccmo] = [self::ciyoccqkiamemcmm => (int) $this->weysguygiseoukqw(SearchSetting::mwcsquoskuckeweg, 10), self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::eugyciakiowwcuwm => "\x3e\x3d"]; oimkeqocuguqqsqk: if (!(self::qwssyugmmaoeqiei === $this->weysguygiseoukqw(SearchSetting::okomcksyqygykaoo, self::qwssyugmmaoeqiei))) { goto oeocukauoyosicso; } $yyqawuyyqgsymiqk[History::imkkyggguymaqgqi] = 1; oeocukauoyosicso: $biaomokkgwiiqocg = History::symcgieuakksimmu(); $soycyassuqeiaoig = $biaomokkgwiiqocg->cwkywyqksyucoyia([self::ciywsqoeiymemsys => self::cqymgkkgeosmoowe, [self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => $yyqawuyyqgsymiqk]]); $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq(); foreach ($soycyassuqeiaoig as $dsamqkqqkgwgoskg) { if (!($iwewcwusemqaiggk = $biaomokkgwiiqocg->qogaqkcsogcqiaic($dsamqkqqkgwgoskg, self::yoayaissyomokiui))) { goto kwiggogcgciwuwqk; } $ocqawgquwsqioses["{$gmigwwwmwemyaayy}\57\77\x73\75{$iwewcwusemqaiggk}"] = $this->gmowkweososugauu("{$gmigwwwmwemyaayy}\57\77\x73\75{$iwewcwusemqaiggk}", $sameaqkagyqomooq, $iwewcwusemqaiggk, $jwkieqegmyuwayce::usoeisyyakwkuyoy, $cmimegkacscikwui); kwiggogcgciwuwqk: yykqaowwsqgqysmq: } suqceasgacskcmkc: goto mogkoocsoeuyoqqa; } wkwamkgkwykeqkec: mogkoocsoeuyoqqa: goto gommacygsykyussk; case $jwkieqegmyuwayce::mswmgkkakuooukme: if (!($seyqqsmuaiegkeeq = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::emcyuiagkcgsckma, []))) { goto esikeyqyuikmaiek; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie === self::ON)) { goto iwsmmkqaoksmocok; } if (!($uyuaosigqymaqsaa = $aoskwucuugeuaeus->ciugwooasaqcywas($kesssewsiegssiya, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]))) { goto emqswoaawgeyosmi; } if (self::ckmqoekmugkggeym === $aqykuigiuwmmcieu) { goto yuimwyoywaiiqacs; } $ocqawgquwsqioses += $uyuaosigqymaqsaa; goto ocywegekakimmwcq; yuimwyoywaiiqacs: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $iwywmkygwewiamwm = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), self::gmmygyiecgmggaam, $kesssewsiegssiya); gswcoeiisamakwii: } yoqakewookqoqacm: ocywegekakimmwcq: emqswoaawgeyosmi: iwsmmkqaoksmocok: ikuuiauwouuqawuw: } uckewycoogsogwiy: esikeyqyuikmaiek: if (!($sciomagaqmgggsiu = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::yyoaeaaaquyigiim, []))) { goto esaqcqqwuussiiwo; } $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $iwywmkygwewiamwm = $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $useksmwkuswkwcqg, self::mswmgkkakuooukme, self::uouymeyqasaeckso); qiiigwkqeoewsuwm: } okkmcocqokkskasy: esaqcqqwuussiiwo: if (!($wqwgoquoiqcqemke = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::gyiwoemkciiwikiq, []))) { goto ikqeeaysmqgcgawq; } ikqeeaysmqgcgawq: if (!$jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::aisoicwicqkswumu, false)) { goto wwukgaquuyoissgy; } $gueemqeuuymqayqg = $this->caokeucsksukesyo()->mguqscccckuywsya()->ciugwooasaqcywas([self::mkucwyayaakigquq => true]); foreach ($gueemqeuuymqayqg as $qscaoekmoooeuyqg => $uoiyqmsewicueqma) { $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $qscaoekmoooeuyqg, self::mswmgkkakuooukme); suqcsgaosywaauuu: } mscgewkcqcoowweg: wwukgaquuyoissgy: goto gommacygsykyussk; } ukqocwewouckikso: gommacygsykyussk: gsygwgsiawgmqiyi: return $ocqawgquwsqioses; } public function gmowkweososugauu(string $eeamcawaiqocomwy, $sameaqkagyqomooq, $owqaeesoaygymmcy, string $ucysgiiogkcwiegi, ?string $sqeykgyoooqysmca = null) : array { $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq(); $suaemuyiacqyugsm = [Page::auqoykcmsiauccao => $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy), Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Page::IDENTIFIER => $owqaeesoaygymmcy, Page::wqqksssaoggqceky => $ucysgiiogkcwiegi]; if (!$sqeykgyoooqysmca) { goto qsgqwyqaqiowkmco; } $suaemuyiacqyugsm[self::squoamkioomemiyi] = $sqeykgyoooqysmca; qsgqwyqaqiowkmco: return $suaemuyiacqyugsm; } public function gcokasmymsiaekkg($owqaeesoaygymmcy, $eouekqmooogkoqoo) : bool { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $ewkaiqqqacmkgqws = false; switch ($jwkieqegmyuwayce->ogegcqqcukiaqscy($jwkieqegmyuwayce::iycqiaygcgwiwcck, $eouekqmooogkoqoo, $jwkieqegmyuwayce::ALL)) { case self::ALL: $ewkaiqqqacmkgqws = true; goto yqagomygmeoecwey; case self::ackcaikowcokggsc: $ewkaiqqqacmkgqws = in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::kyyscqqmsikeuaea, []), true); goto yqagomygmeoecwey; case self::ccyeycyyykwuymsy: $ewkaiqqqacmkgqws = !in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::kyyscqqmsikeuaea, []), true); goto yqagomygmeoecwey; } qikaewekoecykeou: yqagomygmeoecwey: return $ewkaiqqqacmkgqws; } public function igwoeqicuykaamye($sameaqkagyqomooq, array $cwyqoquoweqqweqk = []) { $ksaameoqigiaoigg = false; if (!$cwyqoquoweqqweqk) { goto sqyokemumceysegy; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $cmaccwokqweqweqi = $iuekmkswcsacoawq->akkkoiiymmamsauc($cwyqoquoweqqweqk[self::auqoykcmsiauccao], self::auqoykcmsiauccao); if (!$cmaccwokqweqweqi) { goto aiccyaswigkaycqk; } if (empty($iuekmkswcsacoawq->qogaqkcsogcqiaic($cwyqoquoweqqweqk, $iuekmkswcsacoawq::ewyamgkooeqiecwg))) { goto eucqomyqykgoiuge; } return false; goto usymasgsyqgsuocg; eucqomyqykgoiuge: $cwyqoquoweqqweqk[$iuekmkswcsacoawq::ewyamgkooeqiecwg] = $sameaqkagyqomooq; usymasgsyqgsuocg: aiccyaswigkaycqk: $ksaameoqigiaoigg = $iuekmkswcsacoawq->gscuuyuyauokoyuo($cwyqoquoweqqweqk); sqyokemumceysegy: return $ksaameoqigiaoigg; } public function sesaqkesaeaecoao($eouekqmooogkoqoo) { $auwuoyyagaiegwae = []; if (!($sameaqkagyqomooq = Pattern::symcgieuakksimmu()->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto aueaceeyommgkicu; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $auwuoyyagaiegwae = $iuekmkswcsacoawq->mkcmqiiwgccguoko(Page::ewyamgkooeqiecwg, $sameaqkagyqomooq, "\x3d", self::auqoykcmsiauccao); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { $auwuoyyagaiegwae[$momcykaoccoymeig] = $iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy); zayqqeqgcwkekwws: } oqousikwiiqagoyw: aueaceeyommgkicu: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\x75\162\147\x65\x5f\x75\162\x6c\163\137\x68\x74\155\154\x5f\143\x61\x63\x68\x65", $auwuoyyagaiegwae); } public function cmgakiqmkkiokgmk($eouekqmooogkoqoo, string $iueymcwwscwqkiyq) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!is_numeric($eouekqmooogkoqoo)) { goto mysueeoswqgccmui; } $eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($eouekqmooogkoqoo); mysueeoswqgccmui: $sogksuscggsicmac = $jwkieqegmyuwayce->wqikesawekycweoi($eouekqmooogkoqoo, [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq], true); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto egmayaiikwsskgmy; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk($sogksuscggsicmac[self::iwyueouqaqegmcas]); goto ucuoeymyqeokgsya; egmayaiikwsskgmy: $this->sesaqkesaeaecoao($eouekqmooogkoqoo); $ksaameoqigiaoigg = true; ucuoeymyqeokgsya: return $ksaameoqigiaoigg; } public function gqwuqkumkkkygwuw($sameaqkagyqomooq) : bool { return self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis) || LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi); } public function mqaysguwaikckgey($eouekqmooogkoqoo) : int { return 10; } public function umyyieuiawqmoeso($qkcoyiyeuoyyoocy, string $iueymcwwscwqkiyq = self::sgoswgskyiiwkyuo, string $aiamqeawckcsuaou = self::iwksyuwwwkucsisq, string $eqkagmqcomwssqai = self::imeeweugyyqmiykw) : int { return $this->mgwqiausioiwuykw([Local::uqgcmmosieyimiku => $aiamqeawckcsuaou, Local::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Local::eksgkcqkmumuceii => $eqkagmqcomwssqai, Local::eqgewieksoieoqiq => $qkcoyiyeuoyyoocy, Local::esewkmgyoesiksyw => self::imywcsggckkcywgk]); } public function gaiawimmegssqmew() { $sogksuscggsicmac = $this->kimwcyscqwuuaway($ssiumowkmiumicks, self::uasuowkaguiwoouw); return (bool) $sogksuscggsicmac[self::ckcawaoawwioqecq]; } public function awyuyugymcosqaki() { $sogksuscggsicmac = $this->kimwcyscqwuuaway($ssiumowkmiumicks, self::amcogigwsaqssuai); return (bool) $sogksuscggsicmac[self::ckcawaoawwioqecq]; } public function ewasykaooyikygss() { $sogksuscggsicmac = $this->kimwcyscqwuuaway($ssiumowkmiumicks, self::eyemmiwoaayukksq); return (bool) $sogksuscggsicmac[self::ckcawaoawwioqecq]; } private function kimwcyscqwuuaway($ssiumowkmiumicks, string $iueymcwwscwqkiyq) : array { return Local::symcgieuakksimmu()->wqikesawekycweoi($ssiumowkmiumicks, [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); } private function mgwqiausioiwuykw($icwicymcioeyeyek) : int { $ksaameoqigiaoigg = 0; $sogksuscggsicmac = Local::symcgieuakksimmu()->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto yuuyikiacmmueosu; } $ksaameoqigiaoigg = $sogksuscggsicmac[self::gouqcwikiiygyasc]; yuuyikiacmmueosu: return $ksaameoqigiaoigg; } public function kyqakacqeumicgag(array $gqgemcmoicmgaqie, string $aqykuigiuwmmcieu = self::gouqcwikiiygyasc) { $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk($gqgemcmoicmgaqie); if (!(self::gouqcwikiiygyasc === $aqykuigiuwmmcieu)) { goto sguskaeaaqcagqgc; } $suaemuyiacqyugsm = $iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm); sguskaeaaqcagqgc: return $suaemuyiacqyugsm; } public function eaoemakycwuywqsy($qkcoyiyeuoyyoocy, $migiiksoiymissge) : string { static $oqseeekuqisekiwy; if (isset($oqseeekuqisekiwy[$qkcoyiyeuoyyoocy])) { goto uoeasoimegouymka; } $iueymcwwscwqkiyq = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\160\141\x67\145\x5f\x73\x74\141\164\x75\163", '', $qkcoyiyeuoyyoocy, $migiiksoiymissge); if ($iueymcwwscwqkiyq) { goto qkcsykuocwuyaice; } $geyqgckicikewwke = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\163\137\x6f\x70\x74\x69\x6d\x69\x7a\145\x64", [], $qkcoyiyeuoyyoocy, $migiiksoiymissge); if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto syuaummumssgwwee; } if (in_array(false, $geyqgckicikewwke, true)) { goto agkmiayuawacakau; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; agkmiayuawacakau: goto oocuemosmeeekgas; syuaummumssgwwee: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; oocuemosmeeekgas: $oqseeekuqisekiwy[$qkcoyiyeuoyyoocy] = $iueymcwwscwqkiyq; qkcsykuocwuyaice: goto egsycocugqyyswsi; uoeasoimegouymka: $iueymcwwscwqkiyq = $oqseeekuqisekiwy[$qkcoyiyeuoyyoocy]; egsycocugqyyswsi: return $iueymcwwscwqkiyq; } public function ccioymuswicowwkw($qkcoyiyeuoyyoocy, $migiiksoiymissge) { $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($qkcoyiyeuoyyoocy, $migiiksoiymissge); $iuikoekwkkmcimwq = false; switch ($iueymcwwscwqkiyq) { case self::uasuowkaguiwoouw: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\116\157\164\40\117\160\164\151\155\151\172\145\x64", PR__MDL__OPTIMIZATION); goto qiaimmucomukkeka; case self::kywgiyyageyqwuuc: $wkaqekwwgqsqwcoi = IconInterface::cusyymqgcoccukom; $sqeykgyoooqysmca = self::PRIMARY; $meqocwsecsywiiqs = __("\117\x70\x74\151\x6d\x69\172\141\x74\x69\157\156\40\x52\x75\x6e\156\151\156\x67", PR__MDL__OPTIMIZATION); $iuikoekwkkmcimwq = true; goto qiaimmucomukkeka; case self::amcogigwsaqssuai: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\x4f\160\x74\151\x6d\x69\172\145\x64", PR__MDL__OPTIMIZATION); goto qiaimmucomukkeka; default: $wkaqekwwgqsqwcoi = IconInterface::kiqsyooieeusaemw; $sqeykgyoooqysmca = self::ecioqysekgaasegg; $meqocwsecsywiiqs = __("\x4e\x6f\x74\40\x43\157\x6d\160\154\x65\x74\x65\154\171\40\117\160\164\x69\155\151\x7a\x65\x64", PR__MDL__OPTIMIZATION); goto qiaimmucomukkeka; } aoquoewagkseayug: qiaimmucomukkeka: return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\141\x73\x73" => "\x69\143\x6f\156\x2d\x6c\x67\40\x69\x63\157\156\55{$sqeykgyoooqysmca}" . ($iuikoekwkkmcimwq ? "\40\151\x63\x6f\156\55\x73\x70\x61\x69\x6e" : ''), self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\144\x61\164\x61\55\160\141\147\145" => $qkcoyiyeuoyyoocy, "\x64\141\164\141\x2d\x73\x74\x61\164\165\163" => $iueymcwwscwqkiyq], [self::kicoscymgmgqeqgy => true]); } }
