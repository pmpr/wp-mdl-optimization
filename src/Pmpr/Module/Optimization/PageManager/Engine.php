<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6658781c3e0dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Optimizer\SpecialPage\Search\Setting as SearchSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Local; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\Search\History; use Pmpr\Module\Optimization\Setting\Setting; use WP_Error; use WP_Post; use WP_Term; class Engine extends Common { public function gwouoomgwecwwmoa() : bool { return !empty($this->euyyeqkmigikiaam()); } public function owimqaiqokakwisa($aqykuigiuwmmcieu = null) { $ksaameoqigiaoigg = []; $sameaqkagyqomooq = $this->euyyeqkmigikiaam(Page::ewyamgkooeqiecwg); if (!$sameaqkagyqomooq) { goto gyeayeuuyiemuwuq; } $ksaameoqigiaoigg = $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\166\151\x72\x74\x75\x61\154\137\x62\x72\x6f\167\x73\145\162\x5f\147\x65\x74\x5f\143\x61\x63\150\x65\144\x5f\144\141\164\x61", $ksaameoqigiaoigg, $sameaqkagyqomooq); gyeayeuuyiemuwuq: if (!$aqykuigiuwmmcieu) { goto aqmiewawgseaqeqk; } if (!isset($ksaameoqigiaoigg[self::skogicecygyyskkq])) { goto imeaiksowuukikui; } if ($this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm()) { goto kyggwyywiycksgqq; } $ksaameoqigiaoigg = $ksaameoqigiaoigg[self::mcaucuyeeiwsmmuy]; goto sugumgeqcwgekcqs; kyggwyywiycksgqq: $ksaameoqigiaoigg = $ksaameoqigiaoigg[self::skogicecygyyskkq]; sugumgeqcwgekcqs: imeaiksowuukikui: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ksaameoqigiaoigg, $aqykuigiuwmmcieu, ''); aqmiewawgseaqeqk: return $ksaameoqigiaoigg; } public function euyyeqkmigikiaam(?string $qgoqiacsiccwoawi = null) { $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $ksaameoqigiaoigg = false; if ($mumyimcwkaemyyue->kmmyuiwaogukwqqi()) { goto koggssokukoukkay; } if ($mumyimcwkaemyyue->gouusicsisumuiei()) { goto wiqigqgiegmacgsw; } if (!$mumyimcwkaemyyue->cukiusasccucgwqc()) { goto ssmgmiuqoeiuacsa; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!$this->qcuuyuyaywogwmee(Pattern::uouymeyqasaeckso, $useksmwkuswkwcqg)) { goto cqkuuyouqoqyguus; } $ksaameoqigiaoigg = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::squoamkioomemiyi => $useksmwkuswkwcqg, Page::IDENTIFIER => $seumokooiykcomco->iooowgsqoyqseyuu($post), Page::wqqksssaoggqceky => Pattern::uouymeyqasaeckso]); cqkuuyouqoqyguus: ssmgmiuqoeiuacsa: goto gwoacimkeyymqccq; wiqigqgiegmacgsw: if (!$this->qcuuyuyaywogwmee(Pattern::usoeisyyakwkuyoy, self::yayciqueeakqwese)) { goto weggeeowykuqooyg; } $ksaameoqigiaoigg = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::squoamkioomemiyi => self::yayciqueeakqwese, Page::IDENTIFIER => $this->caokeucsksukesyo()->owicscwgeuqcqaig()->aeakcoksauwcayom(), Page::wqqksssaoggqceky => Pattern::usoeisyyakwkuyoy]); weggeeowykuqooyg: gwoacimkeyymqccq: goto ueaiskyiqcquiika; koggssokukoukkay: if (!$this->qcuuyuyaywogwmee(Pattern::usoeisyyakwkuyoy, self::skoigciaygmyqkmi)) { goto gaceikykesgywssm; } $ksaameoqigiaoigg = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::squoamkioomemiyi => self::skoigciaygmyqkmi, Page::wqqksssaoggqceky => Pattern::usoeisyyakwkuyoy]); gaceikykesgywssm: ueaiskyiqcquiika: if (!($ksaameoqigiaoigg && $qgoqiacsiccwoawi)) { goto eqemcocqsyasqycq; } $ksaameoqigiaoigg = $iuekmkswcsacoawq->qogaqkcsogcqiaic($ksaameoqigiaoigg, $qgoqiacsiccwoawi); eqemcocqsyasqycq: return $ksaameoqigiaoigg; } public function qcuuyuyaywogwmee($sqeykgyoooqysmca, $eqgoocgaqwqcimie) : bool { $gqgemcmoicmgaqie = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; switch ($sqeykgyoooqysmca) { case Pattern::uouymeyqasaeckso: goto ucecweoaoyeoyuue; case Pattern::usoeisyyakwkuyoy: $gqgemcmoicmgaqie[Pattern::usoeisyyakwkuyoy] = $eqgoocgaqwqcimie; goto ucecweoaoyeoyuue; case Pattern::mswmgkkakuooukme: goto ucecweoaoyeoyuue; } cqugssuesycomqwa: ucecweoaoyeoyuue: return Pattern::symcgieuakksimmu()->qumqowkwyaceeqwu($gqgemcmoicmgaqie); } public function iymcmkkyuwgecwwm($eouekqmooogkoqoo, $suaemuyiacqyugsm) : bool { $ewkaiqqqacmkgqws = false; if (!($eouekqmooogkoqoo && $suaemuyiacqyugsm)) { goto csucwwqcsaymyiuk; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $cgcyeiigiuyaeeko = $jwkieqegmyuwayce->ogegcqqcukiaqscy(self::squoamkioomemiyi, $eouekqmooogkoqoo); if (!($cgcyeiigiuyaeeko === $iuekmkswcsacoawq->ogegcqqcukiaqscy($iuekmkswcsacoawq::wqqksssaoggqceky, $suaemuyiacqyugsm))) { goto qccmuwiwykuegoga; } $eyqeaiwksimckmag = $iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::squoamkioomemiyi); $owqaeesoaygymmcy = $iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, self::IDENTIFIER); switch ($cgcyeiigiuyaeeko) { case self::uouymeyqasaeckso: if (!in_array($eyqeaiwksimckmag, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::yyoaeaaaquyigiim))) { goto ymwyooosikgokiaa; } $ewkaiqqqacmkgqws = $this->gcokasmymsiaekkg($owqaeesoaygymmcy, $eouekqmooogkoqoo); ymwyooosikgokiaa: goto kaiqsuaywyuckuoo; case $jwkieqegmyuwayce::usoeisyyakwkuyoy: $ewkaiqqqacmkgqws = $owqaeesoaygymmcy === $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::usoeisyyakwkuyoy); goto kaiqsuaywyuckuoo; case self::mswmgkkakuooukme: switch ($eyqeaiwksimckmag) { case $jwkieqegmyuwayce::gyiwoemkciiwikiq: in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::gyiwoemkciiwikiq)); goto qaiuogoowcoimwee; case $jwkieqegmyuwayce::mqksqgekwiqkmoyk: $ewkaiqqqacmkgqws = in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::yyoaeaaaquyigiim)); goto qaiuogoowcoimwee; case $jwkieqegmyuwayce::skqkgucqggaicigu: $ewkaiqqqacmkgqws = in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::emcyuiagkcgsckma)); goto qaiuogoowcoimwee; case $jwkieqegmyuwayce::aisoicwicqkswumu: $wwweqawywmaqacso = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::aisoicwicqkswumu); $ewkaiqqqacmkgqws = $wwweqawywmaqacso && $wwweqawywmaqacso !== self::OFF; goto qaiuogoowcoimwee; } osqgywagokmsicqe: qaiuogoowcoimwee: goto kaiqsuaywyuckuoo; } yuoamgkigcwaooqu: kaiqsuaywyuckuoo: qccmuwiwykuegoga: csucwwqcsaymyiuk: return $ewkaiqqqacmkgqws; } public function cuamaquuyckqeaak($mksyucucyswaukig, $sameaqkagyqomooq) : array { $suaemuyiacqyugsm = []; if ($mksyucucyswaukig instanceof WP_Post) { goto qmgueimkwqmsakis; } if (!$mksyucucyswaukig instanceof WP_Term) { goto iiuuwuwcwamqegey; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $kesssewsiegssiya = $aoskwucuugeuaeus->yyoeeseewqmmyaee($mksyucucyswaukig); $suaemuyiacqyugsm = $this->gmowkweososugauu($aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya), $sameaqkagyqomooq, $aoskwucuugeuaeus->iooowgsqoyqseyuu($mksyucucyswaukig), self::gmmygyiecgmggaam, $kesssewsiegssiya); iiuuwuwcwamqegey: goto ooqmaweuqmcmwsuk; qmgueimkwqmsakis: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $suaemuyiacqyugsm = $this->gmowkweososugauu($seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig, true), $sameaqkagyqomooq, $seumokooiykcomco->iooowgsqoyqseyuu($mksyucucyswaukig), self::uouymeyqasaeckso, $seumokooiykcomco->gueasuouwqysmomu($mksyucucyswaukig)); ooqmaweuqmcmwsuk: return $suaemuyiacqyugsm; } public function wegymsqmyauaoqce($eouekqmooogkoqoo, string $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) : array { $ocqawgquwsqioses = []; if (!$eouekqmooogkoqoo) { goto cqkyumayoemqsueu; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); switch ($jwkieqegmyuwayce->ogegcqqcukiaqscy(self::squoamkioomemiyi, $eouekqmooogkoqoo)) { case $jwkieqegmyuwayce::uouymeyqasaeckso: if (!($useksmwkuswkwcqg = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::yyoaeaaaquyigiim, [])[0] ?? false)) { goto icuukwkwqeoogyae; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); switch ($jwkieqegmyuwayce->ogegcqqcukiaqscy($jwkieqegmyuwayce::iycqiaygcgwiwcck, $eouekqmooogkoqoo)) { case self::ALL: $ywmkwiwkosakssii = []; goto cycwgukowsksmkyc; case self::ackcaikowcokggsc: $ywmkwiwkosakssii = [self::eqomgewoayseioos => $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::kyyscqqmsikeuaea)]; goto cycwgukowsksmkyc; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii = [self::kcaoouwiygwwmiok => $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::kyyscqqmsikeuaea)]; goto cycwgukowsksmkyc; case self::suaucuoeagwokuwo: $cqacuiyauyoscwei = $eisykmiomukgakao = []; $kskuyywokkcaegae = $jwkieqegmyuwayce->cwkywyqksyucoyia([self::squoamkioomemiyi => $jwkieqegmyuwayce::uouymeyqasaeckso, self::yyoaeaaaquyigiim => [self::ciyoccqkiamemcmm => $useksmwkuswkwcqg, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); foreach ($kskuyywokkcaegae as $ioiiuuwuqimickks) { if (!isset($ywmkwiwkosakssii)) { goto qioswooukgoowsuc; } goto koemwyegoqwiikom; qioswooukgoowsuc: switch ($jwkieqegmyuwayce->ogegcqqcukiaqscy($jwkieqegmyuwayce::iycqiaygcgwiwcck, $ioiiuuwuqimickks)) { case self::ackcaikowcokggsc: $eisykmiomukgakao += $jwkieqegmyuwayce->qogaqkcsogcqiaic($ioiiuuwuqimickks, self::kyyscqqmsikeuaea, []); goto ggoimgeeuugseiwk; case self::ccyeycyyykwuymsy: $cqacuiyauyoscwei += $jwkieqegmyuwayce->qogaqkcsogcqiaic($ioiiuuwuqimickks, self::kyyscqqmsikeuaea, []); goto ggoimgeeuugseiwk; case self::ALL: $ywmkwiwkosakssii = null; goto ggoimgeeuugseiwk; } gimquiiwucueoqkw: ggoimgeeuugseiwk: qycsooiomiugimqc: } koemwyegoqwiikom: if (isset($ywmkwiwkosakssii)) { goto eimouyomcoqkmaae; } $ywmkwiwkosakssii = [self::eqomgewoayseioos => $cqacuiyauyoscwei, self::kcaoouwiygwwmiok => $eisykmiomukgakao]; eimouyomcoqkmaae: goto cycwgukowsksmkyc; } siuyaemoiiqyoggo: cycwgukowsksmkyc: if (!(isset($ywmkwiwkosakssii) && is_array($ywmkwiwkosakssii))) { goto aycqgowuwagcgque; } if (!($wyoiwuqokyeeuguk = $seumokooiykcomco->ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, self::oyaoekcogwkcekcc))) { goto iauwkeeaqsgweeoo; } if (self::ckmqoekmugkggeym === $aqykuigiuwmmcieu) { goto awgmyaycugswmwae; } $ocqawgquwsqioses = $wyoiwuqokyeeuguk; goto ywoyioqqyuocoygk; awgmyaycugswmwae: foreach ($wyoiwuqokyeeuguk as $post) { $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post, true); $ocqawgquwsqioses[$migiiksoiymissge] = $this->gmowkweososugauu($migiiksoiymissge, $sameaqkagyqomooq, $seumokooiykcomco->iooowgsqoyqseyuu($post), self::uouymeyqasaeckso, $useksmwkuswkwcqg); mwqcykaeywsmoumm: } kkwqmoeeqygoimwg: ywoyioqqyuocoygk: iauwkeeaqsgweeoo: aycqgowuwagcgque: icuukwkwqeoogyae: goto uscissuaiyuiukea; case $jwkieqegmyuwayce::usoeisyyakwkuyoy: $cmimegkacscikwui = $jwkieqegmyuwayce->ogegcqqcukiaqscy($jwkieqegmyuwayce::usoeisyyakwkuyoy, $eouekqmooogkoqoo); switch ($cmimegkacscikwui) { case $jwkieqegmyuwayce::wwoeeogswkgeqack: $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq(); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $cmimegkacscikwui, $jwkieqegmyuwayce::usoeisyyakwkuyoy); goto iwcmgioeaiyuacwi; case $jwkieqegmyuwayce::skoigciaygmyqkmi: $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq() . "\57\x34\x30\x34\55\156\157\164\146\157\x75\x6e\144\x2d" . time(); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $cmimegkacscikwui, $jwkieqegmyuwayce::usoeisyyakwkuyoy, $cmimegkacscikwui); goto iwcmgioeaiyuacwi; case $jwkieqegmyuwayce::yayciqueeakqwese: $yyqawuyyqgsymiqk = []; if (!(self::yuwueyysmgkecygw === $this->weysguygiseoukqw(SearchSetting::ckekocwocaogoeye, self::yuwueyysmgkecygw))) { goto ikqagqacuwcgwmqy; } $yyqawuyyqgsymiqk[self::qiyqwyiiwykeccmo] = [self::ciyoccqkiamemcmm => (int) $this->weysguygiseoukqw(SearchSetting::mwcsquoskuckeweg, 10), self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::eugyciakiowwcuwm => "\x3e\x3d"]; ikqagqacuwcgwmqy: if (!(self::qwssyugmmaoeqiei === $this->weysguygiseoukqw(SearchSetting::okomcksyqygykaoo, self::qwssyugmmaoeqiei))) { goto gcogomgmqcgkeceg; } $yyqawuyyqgsymiqk[History::imkkyggguymaqgqi] = 1; gcogomgmqcgkeceg: $biaomokkgwiiqocg = History::symcgieuakksimmu(); $soycyassuqeiaoig = $biaomokkgwiiqocg->cwkywyqksyucoyia([self::ciywsqoeiymemsys => self::cqymgkkgeosmoowe, [self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => $yyqawuyyqgsymiqk]]); $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq(); foreach ($soycyassuqeiaoig as $dsamqkqqkgwgoskg) { if (!($iwewcwusemqaiggk = $biaomokkgwiiqocg->qogaqkcsogcqiaic($dsamqkqqkgwgoskg, self::yoayaissyomokiui))) { goto kisccmsaieigisiu; } $ocqawgquwsqioses["{$gmigwwwmwemyaayy}\x2f\77\163\75{$iwewcwusemqaiggk}"] = $this->gmowkweososugauu("{$gmigwwwmwemyaayy}\57\x3f\163\75{$iwewcwusemqaiggk}", $sameaqkagyqomooq, $iwewcwusemqaiggk, $jwkieqegmyuwayce::usoeisyyakwkuyoy, $cmimegkacscikwui); kisccmsaieigisiu: ugmukcwgcioqgywy: } cksomiiqscosigke: goto iwcmgioeaiyuacwi; } iyyaiuccouqowyga: iwcmgioeaiyuacwi: goto uscissuaiyuiukea; case $jwkieqegmyuwayce::mswmgkkakuooukme: if (!($seyqqsmuaiegkeeq = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::emcyuiagkcgsckma, []))) { goto iigmgswcogqemgao; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie === self::ON)) { goto esgyqksmcukeuwyk; } if (!($uyuaosigqymaqsaa = $aoskwucuugeuaeus->ciugwooasaqcywas($kesssewsiegssiya, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]))) { goto yeaqsiqgakskoykg; } if (self::ckmqoekmugkggeym === $aqykuigiuwmmcieu) { goto mseokuecmeoyoggk; } $ocqawgquwsqioses += $uyuaosigqymaqsaa; goto uookseqsmsqgweuy; mseokuecmeoyoggk: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $iwywmkygwewiamwm = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), self::gmmygyiecgmggaam, $kesssewsiegssiya); eeomcmuiqwgwwuqk: } wucacaegysmiusai: uookseqsmsqgweuy: yeaqsiqgakskoykg: esgyqksmcukeuwyk: mwwygasiagaqsimo: } euoscysqgugsqewc: iigmgswcogqemgao: if (!($sciomagaqmgggsiu = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::yyoaeaaaquyigiim, []))) { goto aeockieewgkequae; } $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $iwywmkygwewiamwm = $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $useksmwkuswkwcqg, self::mswmgkkakuooukme, self::uouymeyqasaeckso); eceeoiwuagocweus: } ycaqooeeseougumo: aeockieewgkequae: if (!($wqwgoquoiqcqemke = $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::gyiwoemkciiwikiq, []))) { goto omqyuuomwywmqeiq; } omqyuuomwywmqeiq: if (!$jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, $jwkieqegmyuwayce::aisoicwicqkswumu, false)) { goto eomqeimoequmagum; } $gueemqeuuymqayqg = $this->caokeucsksukesyo()->mguqscccckuywsya()->ciugwooasaqcywas([self::mkucwyayaakigquq => true]); foreach ($gueemqeuuymqayqg as $qscaoekmoooeuyqg => $uoiyqmsewicueqma) { $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qscaoekmoooeuyqg); $ocqawgquwsqioses[$iwywmkygwewiamwm] = $this->gmowkweososugauu($iwywmkygwewiamwm, $sameaqkagyqomooq, $qscaoekmoooeuyqg, self::mswmgkkakuooukme); misiasooemyskoay: } oysyuiqmsokoykaq: eomqeimoequmagum: goto uscissuaiyuiukea; } kuyqusuycscumuek: uscissuaiyuiukea: cqkyumayoemqsueu: return $ocqawgquwsqioses; } public function gmowkweososugauu(string $eeamcawaiqocomwy, $sameaqkagyqomooq, $owqaeesoaygymmcy, string $ucysgiiogkcwiegi, ?string $sqeykgyoooqysmca = null) : array { $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq(); $suaemuyiacqyugsm = [Page::auqoykcmsiauccao => $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy), Page::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg, Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Page::IDENTIFIER => $owqaeesoaygymmcy, Page::wqqksssaoggqceky => $ucysgiiogkcwiegi]; if (!$sqeykgyoooqysmca) { goto ksqmcugkcmsooeaw; } $suaemuyiacqyugsm[self::squoamkioomemiyi] = $sqeykgyoooqysmca; ksqmcugkcmsooeaw: return $suaemuyiacqyugsm; } public function gcokasmymsiaekkg($owqaeesoaygymmcy, $eouekqmooogkoqoo) : bool { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $ewkaiqqqacmkgqws = false; switch ($jwkieqegmyuwayce->ogegcqqcukiaqscy($jwkieqegmyuwayce::iycqiaygcgwiwcck, $eouekqmooogkoqoo, $jwkieqegmyuwayce::ALL)) { case self::ALL: $ewkaiqqqacmkgqws = true; goto sukcyismwageqgok; case self::ackcaikowcokggsc: $ewkaiqqqacmkgqws = in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::kyyscqqmsikeuaea, []), true); goto sukcyismwageqgok; case self::ccyeycyyykwuymsy: $ewkaiqqqacmkgqws = !in_array($owqaeesoaygymmcy, $jwkieqegmyuwayce->qogaqkcsogcqiaic($eouekqmooogkoqoo, self::kyyscqqmsikeuaea, []), true); goto sukcyismwageqgok; } ukmgwuiqwgyiouec: sukcyismwageqgok: return $ewkaiqqqacmkgqws; } public function igwoeqicuykaamye($sameaqkagyqomooq, array $cwyqoquoweqqweqk = []) { $ksaameoqigiaoigg = false; if (!$cwyqoquoweqqweqk) { goto eqsuaywswuesuika; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $cmaccwokqweqweqi = $iuekmkswcsacoawq->akkkoiiymmamsauc($cwyqoquoweqqweqk[self::auqoykcmsiauccao], self::auqoykcmsiauccao); if (!$cmaccwokqweqweqi) { goto wasuquysysmqyegg; } if (empty($iuekmkswcsacoawq->qogaqkcsogcqiaic($cwyqoquoweqqweqk, $iuekmkswcsacoawq::ewyamgkooeqiecwg))) { goto qykcggwgkweasuii; } return false; goto geoiegikocwmwosi; qykcggwgkweasuii: $cwyqoquoweqqweqk[$iuekmkswcsacoawq::ewyamgkooeqiecwg] = $sameaqkagyqomooq; geoiegikocwmwosi: wasuquysysmqyegg: $ksaameoqigiaoigg = $iuekmkswcsacoawq->gscuuyuyauokoyuo($cwyqoquoweqqweqk); eqsuaywswuesuika: return $ksaameoqigiaoigg; } public function sesaqkesaeaecoao($eouekqmooogkoqoo) { $auwuoyyagaiegwae = []; if (!($sameaqkagyqomooq = Pattern::symcgieuakksimmu()->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto meiqywmwuoogckss; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $auwuoyyagaiegwae = $iuekmkswcsacoawq->mkcmqiiwgccguoko(Page::ewyamgkooeqiecwg, $sameaqkagyqomooq, "\x3d", self::auqoykcmsiauccao); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { $auwuoyyagaiegwae[$momcykaoccoymeig] = $iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy); ogciikaecauiwgyk: } okawiaowosqickgq: meiqywmwuoogckss: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\x75\162\147\x65\137\x75\x72\154\x73\x5f\150\164\x6d\x6c\137\x63\141\x63\x68\x65", $auwuoyyagaiegwae); } public function cmgakiqmkkiokgmk($eouekqmooogkoqoo, string $iueymcwwscwqkiyq) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!is_numeric($eouekqmooogkoqoo)) { goto oyeygeykqwcqoeic; } $eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($eouekqmooogkoqoo); oyeygeykqwcqoeic: $sogksuscggsicmac = $jwkieqegmyuwayce->wqikesawekycweoi($eouekqmooogkoqoo, [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq], true); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto eomcuogskessyicy; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk($sogksuscggsicmac[self::iwyueouqaqegmcas]); goto isaacywgkascmcsw; eomcuogskessyicy: $this->sesaqkesaeaecoao($eouekqmooogkoqoo); $ksaameoqigiaoigg = true; isaacywgkascmcsw: return $ksaameoqigiaoigg; } public function gqwuqkumkkkygwuw($sameaqkagyqomooq) : bool { return self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis) || LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi); } public function mqaysguwaikckgey($eouekqmooogkoqoo) : int { return 10; } public function umyyieuiawqmoeso($qkcoyiyeuoyyoocy, string $iueymcwwscwqkiyq = self::eyemmiwoaayukksq, string $aiamqeawckcsuaou = self::iwksyuwwwkucsisq, string $eqkagmqcomwssqai = self::imeeweugyyqmiykw) : int { return $this->mgwqiausioiwuykw([Local::uqgcmmosieyimiku => $aiamqeawckcsuaou, Local::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Local::eksgkcqkmumuceii => $eqkagmqcomwssqai, Local::eqgewieksoieoqiq => $qkcoyiyeuoyyoocy, Local::esewkmgyoesiksyw => self::imywcsggckkcywgk]); } public function kmkoqakwokycescw($ssiumowkmiumicks) { return Local::symcgieuakksimmu()->akkkoiiymmamsauc($ssiumowkmiumicks); } public function gaiawimmegssqmew($ssiumowkmiumicks) : bool { $sogksuscggsicmac = $this->kimwcyscqwuuaway($ssiumowkmiumicks, self::uasuowkaguiwoouw); return (bool) $sogksuscggsicmac[self::ckcawaoawwioqecq]; } public function awyuyugymcosqaki($ssiumowkmiumicks) : bool { $sogksuscggsicmac = $this->kimwcyscqwuuaway($ssiumowkmiumicks, self::amcogigwsaqssuai); return (bool) $sogksuscggsicmac[self::ckcawaoawwioqecq]; } public function ewasykaooyikygss($ssiumowkmiumicks) : bool { $sogksuscggsicmac = $this->kimwcyscqwuuaway($ssiumowkmiumicks, self::eyemmiwoaayukksq); return (bool) $sogksuscggsicmac[self::ckcawaoawwioqecq]; } private function kimwcyscqwuuaway($ssiumowkmiumicks, string $iueymcwwscwqkiyq) : array { return Local::symcgieuakksimmu()->wqikesawekycweoi($ssiumowkmiumicks, [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); } private function mgwqiausioiwuykw($icwicymcioeyeyek) : int { $ksaameoqigiaoigg = 0; $sogksuscggsicmac = Local::symcgieuakksimmu()->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto quiguyyimiqeqcwa; } $ksaameoqigiaoigg = $sogksuscggsicmac[self::gouqcwikiiygyasc]; quiguyyimiqeqcwa: return $ksaameoqigiaoigg; } public function kyqakacqeumicgag(array $gqgemcmoicmgaqie, string $aqykuigiuwmmcieu = self::gouqcwikiiygyasc) { $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk($gqgemcmoicmgaqie); if (!(self::gouqcwikiiygyasc === $aqykuigiuwmmcieu)) { goto iicaisyekagswmey; } $suaemuyiacqyugsm = $iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm); iicaisyekagswmey: return $suaemuyiacqyugsm; } public function wwccqeqkqkaecoqm($post, string $aqykuigiuwmmcieu = self::gouqcwikiiygyasc) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); return $this->kyqakacqeumicgag([Page::wqqksssaoggqceky => self::uouymeyqasaeckso, Page::IDENTIFIER => $seumokooiykcomco->iooowgsqoyqseyuu($post), Page::squoamkioomemiyi => $seumokooiykcomco->gueasuouwqysmomu($post)], $aqykuigiuwmmcieu); } public function ameqoyekgqggiqme($iwewcwusemqaiggk, ?string $kesssewsiegssiya, string $aqykuigiuwmmcieu = self::gouqcwikiiygyasc) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); return $this->kyqakacqeumicgag([Page::wqqksssaoggqceky => self::gmmygyiecgmggaam, Page::IDENTIFIER => $aoskwucuugeuaeus->iooowgsqoyqseyuu($iwewcwusemqaiggk), Page::squoamkioomemiyi => $kesssewsiegssiya ?: $aoskwucuugeuaeus->yyoeeseewqmmyaee($iwewcwusemqaiggk)], $aqykuigiuwmmcieu); } public function wwsyamkkyauwseyg(?string $migiiksoiymissge) : bool { return (bool) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x73\x5f\x63\x61\x63\x68\145\x64", false, $migiiksoiymissge); } public function iwuigwiooogcgwwu($sameaqkagyqomooq) { return Remote::symcgieuakksimmu()->oqomcmyuuakigusk([Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc, self::gouqcwikiiygyasc => [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::ciyoccqkiamemcmm => self::omaksceqmigeaoko]]); } public function voqagyawicswcaau($sameaqkagyqomooq, string $ccamueccusigaaio = "\143\141\x63\150\145", bool $eikiusiseqwsokui = false) : string { $sogksuscggsicmac = ''; $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); switch ($ccamueccusigaaio) { case "\143\141\143\150\x65": if ($jwkieqegmyuwayce->suuswouyqwqkcgsk($sameaqkagyqomooq)) { goto iaywwgssaoecwmeg; } if ($this->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto eiegguecasykwmyq; } $sogksuscggsicmac = $this->ewcmcaqiosuumocw(__("\101\167\141\x69\x74\x69\156\x67\40\x53\145\164\x75\x70", PR__MDL__OPTIMIZATION), IconInterface::igicgeomgcqmcwuu, self::smkwuwawwaqyimcq, self::agaisgmugicmioge, $eikiusiseqwsokui); goto qiiqceousoicgeee; eiegguecasykwmyq: $sogksuscggsicmac = $this->ewcmcaqiosuumocw(__("\x4e\x6f\x74\40\103\141\x63\x68\x65\x64", PR__MDL__OPTIMIZATION), IconInterface::kiqsyooieeusaemw, self::ecioqysekgaasegg, self::agaisgmugicmioge, $eikiusiseqwsokui); qiiqceousoicgeee: goto maeueeueqoywkiom; iaywwgssaoecwmeg: $sogksuscggsicmac = $this->ewcmcaqiosuumocw(__("\x43\x61\x63\x68\x65\x64", PR__MDL__OPTIMIZATION)); maeueeueqoywkiom: goto ogwwasqkaageiwwi; case "\154\x61\164\x65\x73\x74\137\x72\x75\x6e": if ($gcemueskwuiggwki = $this->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto ooykyoowougqkaso; } $sogksuscggsicmac = $this->ewcmcaqiosuumocw(__("\x41\x77\x61\x69\164\x69\x6e\x67\x20\123\x65\164\165\160", PR__MDL__OPTIMIZATION), IconInterface::igicgeomgcqmcwuu, self::smkwuwawwaqyimcq, self::agaisgmugicmioge, $eikiusiseqwsokui); goto sckyiekoceuisqyq; ooykyoowougqkaso: $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); $meqocwsecsywiiqs = $ycikkiiimgoqqgsq->yomgsemomcmgekyi(self::ciywsqoeiymemsys, $gcemueskwuiggwki); switch ($ycikkiiimgoqqgsq->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $gcemueskwuiggwki)) { case self::sgoswgskyiiwkyuo: case self::eyemmiwoaayukksq: $owmuuoycwiskaeme = $ycikkiiimgoqqgsq->qcwwiyuycagsaikk($gcemueskwuiggwki); $kwkmegesqkqwyska = $ycikkiiimgoqqgsq->qogaqkcsogcqiaic($gcemueskwuiggwki, $ycikkiiimgoqqgsq::CREATED_AT); $yqicqqkokawiosom = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->gwgmymsuwsceguce() - strtotime($kwkmegesqkqwyska); if ($yqicqqkokawiosom > $owmuuoycwiskaeme) { goto uowiiyqmiaaaaoas; } if (!($yqicqqkokawiosom > 0)) { goto oeogyayooiwqcmia; } $owmuuoycwiskaeme -= floor($yqicqqkokawiosom); oeogyayooiwqcmia: goto vokekoceocuskqsm; uowiiyqmiaaaaoas: $yqicqqkokawiosom = $owmuuoycwiskaeme; vokekoceocuskqsm: $sogksuscggsicmac = $this->caokeucsksukesyo()->wmkogisswkckmeua()->sggkkiiqkekaomig([self::uissasisiuymwsmu => __("\117\x70\x74\x69\x6d\151\172\x69\x6e\x67\56\56\56", PR__MDL__OPTIMIZATION), self::yeowwkiiyimoykye => ["\x61\x63\164\151\166\x65" => true, "\x70\141\x73\163\145\x64" => $yqicqqkokawiosom, "\x64\x75\162\x61\x74\x69\x6f\156" => $owmuuoycwiskaeme, "\163\x68\x6f\167\x50\x65\162\143\x65\x6e\x74\x61\x67\x65" => true], self::iikosyqiawkweouo => ["\143\x6c\141\x73\x73" => "\160\141\x74\164\145\x72\x6e\55\162\x75\156", "\144\141\164\x61\55\x70\141\164\164\x65\162\156" => $sameaqkagyqomooq]]); goto jyekikocgagcgywq; case self::amcogigwsaqssuai: $sogksuscggsicmac = $this->ewcmcaqiosuumocw($meqocwsecsywiiqs, IconInterface::sucyqiucaqowyomk, self::ckcawaoawwioqecq, self::agaisgmugicmioge, $eikiusiseqwsokui); goto jyekikocgagcgywq; case self::uasuowkaguiwoouw: default: $sogksuscggsicmac = $this->ewcmcaqiosuumocw($meqocwsecsywiiqs, IconInterface::kiqsyooieeusaemw, self::ecioqysekgaasegg, self::agaisgmugicmioge, $eikiusiseqwsokui); goto jyekikocgagcgywq; } qoiyiuoyamwimusy: jyekikocgagcgywq: sckyiekoceuisqyq: goto ogwwasqkaageiwwi; case "\160\141\x67\145\x73\137\143\x61\143\x68\x65": if ($gcemueskwuiggwki = $this->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto qaycycmeqkqcumog; } $sogksuscggsicmac = $this->ewcmcaqiosuumocw(__("\101\167\141\x69\164\x69\156\147\40\123\145\x74\x75\x70", PR__MDL__OPTIMIZATION), IconInterface::igicgeomgcqmcwuu, self::smkwuwawwaqyimcq, self::agaisgmugicmioge, $eikiusiseqwsokui); goto ikuwigsmisimaqoc; qaycycmeqkqcumog: switch (Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $gcemueskwuiggwki)) { case self::amcogigwsaqssuai: $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sogksuscggsicmac = $swqimwqeweekeusq->iaaacsuskiakkwui([$this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi([self::ieioeisgwcgysukw => true, self::qaioykeumkssukis => false, self::kekcgssiyagioocg => "\162\x65\x6c\141\x74\151\166\x65", self::ooqkaeeeqyoyyiao => true, self::wwsacswioisomkui => "\x6d\x72\55\x32"]), $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\103\x68\145\x63\153\151\x6e\147\x20\160\141\147\x65\x73\x20\x63\141\x63\150\145\56\56\x2e", PR__MDL__OPTIMIZATION))], ["\143\154\141\x73\163" => "\143\150\145\143\x6b\55\x70\x61\147\145\x73\x2d\x63\141\x63\x68\x65\40\144\55\x66\154\x65\170", "\x64\x61\x74\x61\x2d\160\x61\164\x74\x65\162\x6e" => $sameaqkagyqomooq]); goto kusuakkwcuqkcqaw; case self::uasuowkaguiwoouw: case self::sgoswgskyiiwkyuo: case self::eyemmiwoaayukksq: $sogksuscggsicmac = $this->ewcmcaqiosuumocw(__("\x41\x77\x61\151\x74\x69\x6e\x67\x20\117\160\x74\x69\155\x69\x7a\145\x20\x50\x61\x74\164\145\162\156", PR__MDL__OPTIMIZATION), IconInterface::igicgeomgcqmcwuu, self::smkwuwawwaqyimcq, self::agaisgmugicmioge, $eikiusiseqwsokui); goto kusuakkwcuqkcqaw; } sikckcmeiwmyakeu: kusuakkwcuqkcqaw: ikuwigsmisimaqoc: goto ogwwasqkaageiwwi; } sosqgaswegsomgkw: ogwwasqkaageiwwi: return $sogksuscggsicmac; } public function ygkgmccmouykyygk($sameaqkagyqomooq, bool $uqiiskyaukiiasik = true) : string { $sogksuscggsicmac = ''; $yeacayasgueouoqc = $this->emygimuicqcskaam($sameaqkagyqomooq); if (!is_bool($yeacayasgueouoqc)) { goto aqwoykqaquewcaki; } $sogksuscggsicmac = $this->ewcmcaqiosuumocw(__("\x54\150\145\x72\x65\x20\x69\163\x20\156\157\x20\x70\x61\x67\x65\40\146\157\x72\x20\160\x61\164\164\x65\x72\156\x2e", PR__MDL__OPTIMIZATION), IconInterface::ksosaawiuaiosemw, self::ecioqysekgaasegg, self::agaisgmugicmioge, true); goto mesesokuoomcioom; aqwoykqaquewcaki: if ($yeacayasgueouoqc < 100) { goto qaqooueskgciuqgc; } $sogksuscggsicmac = $this->ewcmcaqiosuumocw(__("\101\x6c\x6c\40\120\x61\x67\x65\163\40\103\x61\143\x68\145\144\x2e", PR__MDL__OPTIMIZATION), IconInterface::sucyqiucaqowyomk, self::ckcawaoawwioqecq, self::agaisgmugicmioge, true); goto omyquyiguuaociwq; qaqooueskgciuqgc: if (!$uqiiskyaukiiasik) { goto qwosyqcomiosguoa; } $okeouiicmwuaykky = $this->weysguygiseoukqw(PreloadSetting::gmwikseimeesqmci, self::uucoeqmmykkwsmqc); $cgkukcaimcyswiak = __("\103\141\143\150\145\40\120\162\145\x6c\157\141\x64\145\x72\x20\x69\x73\x20\x25\x73\56\40\x25\x73", PR__MDL__OPTIMIZATION); $kgyimayuwqescwew = __("\x59\x6f\165\x20\143\x61\x6e\40\x25\163\x20\x69\164\40\x74\150\162\157\165\x67\x68\40\164\150\145\40\x73\145\x74\x74\x69\x6e\x67\x73\x20\163\x65\x63\164\151\x6f\x6e\x2e", PR__MDL__OPTIMIZATION); switch ($okeouiicmwuaykky) { case PreloadSetting::wymyesceumkaycqk: $cgkukcaimcyswiak = sprintf($cgkukcaimcyswiak, __("\141\143\164\x69\x76\145\40\x66\x6f\162\x20\x61\x6c\x6c\40\x70\x61\x67\145\163", PR__MDL__OPTIMIZATION), __("\x54\x68\x69\163\40\163\151\x74\165\141\164\x69\x6f\156\54\x20\x64\x65\x73\160\x69\x74\145\x20\164\x68\145\x20\141\x64\166\x61\156\164\141\147\x65\x20\157\x66\x20\x73\x68\x6f\x72\x74\x65\162\40\x63\141\143\150\x65\40\143\x72\145\141\x74\151\x6f\x6e\x20\x74\x69\x6d\x65\x20\146\x6f\x72\x20\141\x6c\x6c\40\160\141\x67\x65\163\54\x20\151\163\40\x61\163\163\x6f\x63\151\141\164\145\x64\x20\x77\151\164\150\40\x68\x69\x67\x68\40\x69\156\157\144\145\40\x63\157\156\x73\165\x6d\160\164\151\x6f\x6e\56", PR__MDL__OPTIMIZATION)); $kgyimayuwqescwew = sprintf($kgyimayuwqescwew, __("\x64\145\141\143\164\x69\x76\x61\164\145", PR__MDL__OPTIMIZATION)); goto sigukociqouigous; case PreloadSetting::ikasiigackcsqiey: $cgkukcaimcyswiak = sprintf($cgkukcaimcyswiak, __("\141\143\164\x69\166\x65\x20\146\157\x72\40\151\155\160\162\145\163\163\151\x6f\x6e\40\160\141\x67\x65\x73", PR__MDL__OPTIMIZATION), __("\x54\150\151\163\40\163\151\164\165\x61\164\x69\x6f\x6e\x20\167\151\154\154\40\x63\162\145\141\x74\x65\40\x74\x68\145\x20\143\141\143\x68\145\40\x6f\x66\40\x74\150\x65\40\155\x6f\x73\164\x20\x76\x69\x73\x69\x74\145\x64\x20\x70\x61\147\x65\x73\x20\x61\163\40\x73\x6f\x6f\x6e\x20\x61\x73\x20\x70\x6f\163\163\151\142\x6c\x65\x2c\40\167\x68\151\x6c\145\40\x63\157\156\163\165\x6d\x69\156\x67\40\141\40\162\x65\141\x73\157\156\141\x62\x6c\145\40\156\165\155\142\145\162\x20\157\146\x20\x69\x6e\157\144\145\x73\56", PR__MDL__OPTIMIZATION)); $kgyimayuwqescwew = sprintf($kgyimayuwqescwew, __("\144\145\x61\x63\164\x69\x76\141\x74\x65", PR__MDL__OPTIMIZATION)); goto sigukociqouigous; case PreloadSetting::uucoeqmmykkwsmqc: $cgkukcaimcyswiak = sprintf($cgkukcaimcyswiak, __("\151\156\x61\x63\x74\x69\166\x65", PR__MDL__OPTIMIZATION), __("\x54\x68\151\x73\x20\163\151\x74\x75\x61\x74\151\157\156\x20\151\x73\x20\141\143\x63\x6f\x6d\160\x61\x6e\x69\x65\x64\40\142\x79\x20\141\x20\154\157\x6e\x67\145\x72\40\x63\x61\143\x68\145\x20\143\x72\x65\141\164\151\157\x6e\40\164\151\155\x65\40\146\x6f\162\40\141\154\154\x20\x70\x61\x67\145\163\54\40\144\x65\163\x70\x69\164\x65\x20\x74\150\145\x20\154\x6f\x77\40\x63\x6f\x6e\163\x75\155\x70\x74\151\x6f\x6e\40\x6f\146\x20\x69\x6e\x6f\x64\x65\163\56", PR__MDL__OPTIMIZATION)); $kgyimayuwqescwew = sprintf($kgyimayuwqescwew, __("\x61\143\x74\x69\166\x61\164\145", PR__MDL__OPTIMIZATION)); goto sigukociqouigous; } yagscaikmmuagqcu: sigukociqouigous: $qyaaumygmwoyoeec = self::uucoeqmmykkwsmqc !== $okeouiicmwuaykky; $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $uggewwcuaaksiask = [self::qescuiwgsyuikume => __("\103\141\143\150\145\40\120\x72\x65\x6c\157\x61\x64\145\x72", PR__MDL__OPTIMIZATION), self::ssmskyqgcmeiayco => $swqimwqeweekeusq->iaaacsuskiakkwui($cgkukcaimcyswiak, ["\143\154\x61\163\163" => "\x6d\142\55\x33"]) . $swqimwqeweekeusq->iaaacsuskiakkwui($kgyimayuwqescwew), self::kekekeusyqkouowm => [self::wksqmcukwwqwyuuc => ["\x68\162\145\146" => PreloadSetting::symcgieuakksimmu()->qmgcisuuikgmqcsu(), "\143\154\141\x73\x73" => "\160\x72\55\142\164\x6e\x20\x62\x74\x6e\55\x70\x72\x69\x6d\141\162\171", self::qescuiwgsyuikume => __("\103\x68\141\x6e\147\145\40\x50\x72\x65\x6c\x6f\141\x64\40\x53\145\x74\x74\151\156\147", PR__MDL__OPTIMIZATION)], self::OK]]; $miyqsuekoagecmuu = __("\x43\162\x65\x61\x74\151\156\147\40\103\x61\143\x68\x65", PR__MDL__OPTIMIZATION); if ($qyaaumygmwoyoeec) { goto iyawqekeeawqkymm; } $pkyyagewkiyckmwy = $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf("\x25\163\40\55\40\45\x73", $miyqsuekoagecmuu, $uuyucgkyusckoaeq->igiawkoqiogocsau($uggewwcuaaksiask, __("\x57\151\164\150\157\x75\164\40\120\x72\145\154\157\x61\144\x65\162", PR__MDL__OPTIMIZATION)))); goto iumgcesksuawyuyo; iyawqekeeawqkymm: $pkyyagewkiyckmwy = $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf("\x25\163\40\55\40\x25\163", $miyqsuekoagecmuu, $uuyucgkyusckoaeq->igiawkoqiogocsau($uggewwcuaaksiask, __("\x57\151\x74\x68\x20\120\x72\145\x6c\x6f\141\x64\145\x72", PR__MDL__OPTIMIZATION)))); iumgcesksuawyuyo: $sogksuscggsicmac = $uuyucgkyusckoaeq->sggkkiiqkekaomig([self::uissasisiuymwsmu => $pkyyagewkiyckmwy, self::yeowwkiiyimoykye => ["\x61\x63\164\x69\166\145" => $qyaaumygmwoyoeec, "\143\165\162\x72\145\x6e\x74" => $yeacayasgueouoqc, "\x73\150\157\x77\x50\x65\162\x63\x65\156\164\141\x67\x65" => true], self::iikosyqiawkweouo => ["\x64\x61\164\141\55\160\141\x74\x74\x65\x72\x6e" => $sameaqkagyqomooq]]); qwosyqcomiosguoa: omyquyiguuaociwq: mesesokuoomcioom: return $sogksuscggsicmac; } public function emygimuicqcskaam($sameaqkagyqomooq) { static $ugwscesyisaauwwi = []; if (isset($ugwscesyisaauwwi[$sameaqkagyqomooq])) { goto qsaoyggkqwcgskwk; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $ocqawgquwsqioses = $iuekmkswcsacoawq->cwkywyqksyucoyia([self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg, self::ewyamgkooeqiecwg => $sameaqkagyqomooq]); $megmggkiokqkcwou = count($ocqawgquwsqioses); if ($megmggkiokqkcwou > 0) { goto oiywguooqeasueqq; } $xgwukwqqaseqagay = false; goto equwcsciiggsuiam; oiywguooqeasueqq: $skqeckgiuieeusoy = 0; foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { if (!$this->wwsyamkkyauwseyg($iuekmkswcsacoawq->oiucukewkckkwiqc($suaemuyiacqyugsm))) { goto ioiwoukauoeamuca; } $skqeckgiuieeusoy++; ioiwoukauoeamuca: cceggewquoaemcwq: } iuwccksomkkouogy: if ($skqeckgiuieeusoy < $megmggkiokqkcwou) { goto oqckuigyqswmqcqg; } $xgwukwqqaseqagay = 100; goto owismwmeqcmukagu; oqckuigyqswmqcqg: $xgwukwqqaseqagay = 100 * $skqeckgiuieeusoy / $megmggkiokqkcwou; owismwmeqcmukagu: equwcsciiggsuiam: $ugwscesyisaauwwi[$sameaqkagyqomooq] = $xgwukwqqaseqagay; qsaoyggkqwcgskwk: return $ugwscesyisaauwwi[$sameaqkagyqomooq]; } public function ewcmcaqiosuumocw(string $cmwygeyygwqaemaq, string $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk, string $qoiwmokisgikggia = self::ckcawaoawwioqecq, string $oiegiwogmwmawkeo = "\x6d\x64", bool $gskuwmeemyeuwogc = false) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\141\163\163" => "\x69\143\x6f\156\55{$qoiwmokisgikggia}\x20\x69\x63\157\156\x2d{$oiegiwogmwmawkeo}\40\x6d\162\55\x32"], [self::kicoscymgmgqeqgy => $gskuwmeemyeuwogc]), $swqimwqeweekeusq->iaaacsuskiakkwui($cmwygeyygwqaemaq, ["\143\x6c\141\163\163" => "\x6d\x79\55\x61\165\x74\x6f"])], ["\143\x6c\141\x73\163" => "\x64\x2d\x66\x6c\x65\x78"]); } public function ewcycsacookeciii($sameaqkagyqomooq, string $aiamqeawckcsuaou = self::iwksyuwwwkucsisq) : array { $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $gieikkmyoqoyseqq = Local::symcgieuakksimmu(); $iegamuqicemiymui = $iuekmkswcsacoawq->cokoiaeeomgssqgy(); $koicmukcqwqesggi = [[self::euoaaiqkqcqcgeco => self::uwkgmaicmwigeeee], Local::uqgcmmosieyimiku => $aiamqeawckcsuaou, Local::esewkmgyoesiksyw => self::imywcsggckkcywgk, [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew, self::ugsuecoyuqcamsac => $iuekmkswcsacoawq->cokoiaeeomgssqgy(), self::ciyoccqkiamemcmm => [$iuekmkswcsacoawq->myywwqkyiwawwquy($iuekmkswcsacoawq->kumuygiiqswoyasy()), $gieikkmyoqoyseqq->myywwqkyiwawwquy(Local::eqgewieksoieoqiq)]], self::ewyamgkooeqiecwg => [self::ciyoccqkiamemcmm => $sameaqkagyqomooq, self::ugsuecoyuqcamsac => $iegamuqicemiymui], [self::meisqwykgaymauka => self::ciywsqoeiymemsys, self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->cyqesesmeiwoguik(self::ciywsqoeiymemsys, self::eqewsqmqmsiocaeg), self::ugsuecoyuqcamsac => $iegamuqicemiymui], [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => Local::eqgewieksoieoqiq, self::ciyoccqkiamemcmm => self::omaksceqmigeaoko]]; $wkkaieeykkiuqwqu = $koicmukcqwqesggi; $wkkaieeykkiuqwqu[] = [self::meisqwykgaymauka => self::ciywsqoeiymemsys, self::ciyoccqkiamemcmm => self::eyemmiwoaayukksq]; $qwmwukymaeesumka = $gieikkmyoqoyseqq->asskucacysemeoiu($koicmukcqwqesggi, Local::eqgewieksoieoqiq); $oesmwiawuckuamgc = $gieikkmyoqoyseqq->asskucacysemeoiu($wkkaieeykkiuqwqu, Local::eqgewieksoieoqiq); return [self::ALL => $qwmwukymaeesumka, self::DONE => max(0, $qwmwukymaeesumka - $oesmwiawuckuamgc), self::eyemmiwoaayukksq => $oesmwiawuckuamgc]; } }
