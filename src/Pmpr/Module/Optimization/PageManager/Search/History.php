<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b4159a97563             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\150\141\163\137\162\145\x73\165\154\164"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\123\x65\x61\162\x63\150\x20\110\151\x73\x74\157\x72\x79", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\x53\145\x61\162\x63\150\x20\110\151\x73\164\x6f\x72\x69\x65\163", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(self::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\123\x65\141\162\143\150\x65\144\x20\x54\x65\162\155", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(self::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\103\157\165\x6e\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\110\141\x73\x20\122\x65\x73\x75\x6c\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\123\164\x61\x74\x75\163", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, self::sgoswgskyiiwkyuo, __("\120\145\x6e\x64\x69\x6e\147", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, self::cqymgkkgeosmoowe, __("\101\x64\x64\145\144", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(self::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(self::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, self::yuwueyysmgkecygw))) { goto qwgkwokcyocqiyee; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[self::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; qwgkwokcyocqiyee: if (!($auuqggkaeoomcksu && self::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, self::qwssyugmmaoeqiei))) { goto maeccckgcsaaumkw; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; maeccckgcsaaumkw: if (!$auuqggkaeoomcksu) { goto uagsgicwwcakecwq; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Pattern::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Pattern::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto kcqueaewmayywqeq; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\x2f\x3f\163\75{$icwicymcioeyeyek[self::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), self::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[self::ckcawaoawwioqecq])) { goto gcoeaokkagaaeuse; } $icwicymcioeyeyek[self::ciywsqoeiymemsys] = self::cqymgkkgeosmoowe; gcoeaokkagaaeuse: kcqueaewmayywqeq: uagsgicwwcakecwq: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
