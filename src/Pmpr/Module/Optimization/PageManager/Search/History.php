<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec8032739             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\x68\x61\163\x5f\162\x65\x73\165\154\x74"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\123\145\141\x72\143\150\x20\110\x69\163\x74\x6f\162\171", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\x53\145\141\x72\x63\x68\x20\110\x69\163\x74\x6f\162\151\x65\x73", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(Constants::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\123\x65\x61\162\x63\150\x65\144\40\x54\x65\162\x6d", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(Constants::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\103\157\x75\x6e\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\110\x61\163\40\x52\x65\x73\165\x6c\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\x53\x74\141\x74\165\163", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __("\120\x65\x6e\144\x69\156\147", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::cqymgkkgeosmoowe, __("\101\x64\144\145\x64", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(Constants::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(Constants::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, Constants::yuwueyysmgkecygw))) { goto mqimkwickkgqqeoi; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; mqimkwickkgqqeoi: if (!($auuqggkaeoomcksu && Constants::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, Constants::qwssyugmmaoeqiei))) { goto kwyimqumkuuyaiku; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; kwyimqumkuuyaiku: if (!$auuqggkaeoomcksu) { goto ceiuqsiqgiuiekem; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Constants::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto mceucsaeouuwyumm; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\57\77\163\x3d{$icwicymcioeyeyek[Constants::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), Constants::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[Constants::ckcawaoawwioqecq])) { goto gkqiqaqecmoogmaa; } $icwicymcioeyeyek[Constants::ciywsqoeiymemsys] = Constants::cqymgkkgeosmoowe; gkqiqaqecmoogmaa: mceucsaeouuwyumm: ceiuqsiqgiuiekem: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
