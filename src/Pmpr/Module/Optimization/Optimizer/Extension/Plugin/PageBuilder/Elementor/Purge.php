<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062d56cfb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\PageBuilder\Elementor; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Pattern as PatternModel; class Purge extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'before_clean_post', [$this, 'ikgoycmsaykweuky']); } public function ikgoycmsaykweuky($post) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ('elementor_library' === $seumokooiykcomco->gueasuouwqysmomu($post)) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'purge_html_cache'); $mscssagggiccseco = $seumokooiykcomco->igawqaomowicuayw('_elementor_conditions', $post); if (is_string($mscssagggiccseco)) { $mscssagggiccseco = [$mscssagggiccseco]; } $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $uiiqwkwcwaoeokmk = []; $jwkieqegmyuwayce = PatternModel::symcgieuakksimmu(); $cwiqececuoeacuaa = $jwkieqegmyuwayce->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg); $sciomagaqmgggsiu = []; $seyqqsmuaiegkeeq = []; foreach ($cwiqececuoeacuaa as $eouekqmooogkoqoo) { $useksmwkuswkwcqg = $jwkieqegmyuwayce->waecsyqmwascmqoa($eouekqmooogkoqoo, Constants::uouymeyqasaeckso); if ($useksmwkuswkwcqg) { $sciomagaqmgggsiu[] = $useksmwkuswkwcqg; } $kesssewsiegssiya = $jwkieqegmyuwayce->waecsyqmwascmqoa($eouekqmooogkoqoo, Constants::gmmygyiecgmggaam); if ($kesssewsiegssiya) { $seyqqsmuaiegkeeq[] = $kesssewsiegssiya; } } foreach ($mscssagggiccseco as $wocwawaaemuoqmig) { $ymkqyawksmqcgsei = explode('/', strtolower($wocwawaaemuoqmig)); $sqeykgyoooqysmca = $ymkqyawksmqcgsei[0] ?? null; $ymqmyyeuycgmigyo = $ymkqyawksmqcgsei[1] ?? null; $usycmyikewukeomq = $ymkqyawksmqcgsei[2] ?? null; $wsiycaiesicsguyi = $ymkqyawksmqcgsei[3] ?? null; if ($sqeykgyoooqysmca && $ymqmyyeuycgmigyo) { $ooiewiwkegguusum = $sqeykgyoooqysmca === Constants::ackcaikowcokggsc; switch ($ymqmyyeuycgmigyo) { case Constants::ioomakeyqiqowgmk: if ($ooiewiwkegguusum) { $uiiqwkwcwaoeokmk = Constants::ALL; break 2; } break; case Constants::qqoouomkeecygage: if ($usycmyikewukeomq) { switch ($usycmyikewukeomq) { case 'front_page': $uiiqwkwcwaoeokmk[] = [$gqusacuooiagkuom->auksikwsewaywikq()]; break; case 'child_of': break; case 'any_child_of': break; case 'by_author': $egeqeuwiswigogyk = $this->uqqyaqakssqiusac($sciomagaqmgggsiu, $wsiycaiesicsguyi); if ($egeqeuwiswigogyk) { $uiiqwkwcwaoeokmk[] = $egeqeuwiswigogyk; } break; case 'notfound_404': $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'cache_html_notfound_purged'); break; default: if ($yyauwyaeewsickwk->ykemmsoumouomkqm($usycmyikewukeomq, '_by_author')) { $useksmwkuswkwcqg = $yyauwyaeewsickwk->aimgkskucmymyquc('_by_author', '', $usycmyikewukeomq); if (in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu, true)) { $egeqeuwiswigogyk = $this->uqqyaqakssqiusac($useksmwkuswkwcqg, $wsiycaiesicsguyi); if ($egeqeuwiswigogyk) { $uiiqwkwcwaoeokmk[] = $egeqeuwiswigogyk; } } } else { if ($yyauwyaeewsickwk->wkgaescyescmucmg($usycmyikewukeomq, 'in_')) { $sysuwyawqciqikcg = $yyauwyaeewsickwk->wiecmkiugmyyqiqc('in_', '', $usycmyikewukeomq); $useksmwkuswkwcqg = $cskucqcumqsyimye->imgymusqgccqsqqq($sysuwyawqciqikcg); if ($useksmwkuswkwcqg) { if (in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu, true)) { if ($wsiycaiesicsguyi) { $uiiqwkwcwaoeokmk[] = [$seumokooiykcomco->ycqquoiyyuesegsy($wsiycaiesicsguyi)]; } else { $egeqeuwiswigogyk = $this->aqyqiuammeuqcakm($useksmwkuswkwcqg); if ($egeqeuwiswigogyk) { $uiiqwkwcwaoeokmk[] = $egeqeuwiswigogyk; } } } } else { $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($sysuwyawqciqikcg); if ($kesssewsiegssiya) { } } } } } } else { } break; case Constants::mswmgkkakuooukme: if (isset($ymkqyawksmqcgsei[2])) { } else { } break; case 'woocommerce': break; } } } if ($uiiqwkwcwaoeokmk === Constants::ALL) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'purge_html_cache'); } else { if (is_array($uiiqwkwcwaoeokmk) && !empty($uiiqwkwcwaoeokmk)) { $uiiqwkwcwaoeokmk = array_merge([], ...$uiiqwkwcwaoeokmk); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'purge_urls_html_cache', $uiiqwkwcwaoeokmk); } } } } private function uqqyaqakssqiusac($useksmwkuswkwcqg, $qscaoekmoooeuyqg) : array { $ywmkwiwkosakssii = []; if ($qscaoekmoooeuyqg) { $ywmkwiwkosakssii = [Constants::gcsomccmmuswociy => $qscaoekmoooeuyqg]; } return $this->aqyqiuammeuqcakm($useksmwkuswkwcqg, $ywmkwiwkosakssii); } private function eqkewimyqmawmoqu($useksmwkuswkwcqg, $kesssewsiegssiya, $iwewcwusemqaiggk) : array { $ywmkwiwkosakssii = []; if ($iwewcwusemqaiggk) { $ywmkwiwkosakssii = [Constants::kymceekcoyyeuocm => [Constants::yoayaissyomokiui => $iwewcwusemqaiggk, Constants::gmmygyiecgmggaam => $kesssewsiegssiya]]; } return $this->aqyqiuammeuqcakm($useksmwkuswkwcqg, $ywmkwiwkosakssii); } private function aqyqiuammeuqcakm($useksmwkuswkwcqg, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::goqgcigmiawyauai] = -1; return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ooeesicuqgsyoysk($useksmwkuswkwcqg, $ywmkwiwkosakssii, Constants::sauwwsocmukoaayu); } }
