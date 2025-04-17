<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062d56cfb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualSetting; class CriticalCSS extends Engine { use PageManagerEngineTrait; const akggkgqyqsacmmws = 'atf_css'; const sgoaoiqkyikgkeis = 'btf_css'; public function wigskegsqequoeks() { $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'virtual_browser_result_cached', [$this, 'aoewscsawcuqsiuq'], 10, 2); } public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, 'ymsiuyaiemsmwaok'], 999)->miasamwyaiagioug([$this, 'uqmocqweymukgyqm'], 999); } public function accwmwksmamggkgm() : bool { return VirtualSetting::cucykekeweeukgyy === $this->weysguygiseoukqw(VirtualSetting::eyouawqyuyaaueeu, VirtualSetting::poyueymoykaqiwau); } public function sayggussmoociikm($ascuieeescesuoow) { if ($eeamcawaiqocomwy = $this->wygekkemwusgqaoa()) { if ($this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm()) { $ascuieeescesuoow[] = ['as' => Constants::wwukgkqwyakeqwqk, 'href' => $eeamcawaiqocomwy, 'fetchpriority' => Constants::MEDIUM]; } else { $ascuieeescesuoow[] = ['as' => Constants::wwukgkqwyakeqwqk, 'rel' => 'stylesheet', 'href' => $eeamcawaiqocomwy, 'fetchpriority' => Constants::MEDIUM]; } } return $ascuieeescesuoow; } public function ymsiuyaiemsmwaok($moooemyaqewumiay) { if ($qawakokkgswswemu = (string) $this->wkagassgcaqeosio()->owimqaiqokakwisa(self::akggkgqyqsacmmws)) { if ($this->accwmwksmamggkgm()) { $qawakokkgswswemu .= $this->wkagassgcaqeosio()->owimqaiqokakwisa(self::sgoaoiqkyikgkeis); } if ($goauowqewmiegoeg = $this->weysguygiseoukqw(VirtualSetting::ciqeeymywqaykcss, '')) { $qawakokkgswswemu .= $goauowqewmiegoeg; } if ($qawakokkgswswemu) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kswaimykcacqyaay = $swqimwqeweekeusq->qiokaomckmywuwqo($this->ocksiywmkyaqseou('minify_style', $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ymwweqowigckmiuu($qawakokkgswswemu)), ['id' => 'pr-opt-critical-css']); $icuissuomcugeqga = $swqimwqeweekeusq->sggceaqggqqsqaoo($moooemyaqewumiay, 'title', $kswaimykcacqyaay); if ($moooemyaqewumiay === $icuissuomcugeqga) { $icuissuomcugeqga = $swqimwqeweekeusq->cgeyeoimiuyogose($moooemyaqewumiay, 'head', $kswaimykcacqyaay); } $moooemyaqewumiay = $icuissuomcugeqga; } } return $moooemyaqewumiay; } public function uqmocqweymukgyqm($moooemyaqewumiay) { if (!$this->accwmwksmamggkgm()) { if ($eeamcawaiqocomwy = $this->wygekkemwusgqaoa()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $qawecuimqqcqwgsw = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm(); $wwgucssaecqekuek = ['id' => 'pr-opt-btf-css', 'rel' => 'stylesheet', 'href' => $eeamcawaiqocomwy]; if ($qawecuimqqcqwgsw) { $wwgucssaecqekuek['media'] = 'print'; $wwgucssaecqekuek['onload'] = "this.media='all'"; $gqcagomiasueukwq = $swqimwqeweekeusq->qgsekwygcgawekeq('link', ['id' => 'pr-opt-btf-css-alt', 'rel' => 'stylesheet', 'href' => $eeamcawaiqocomwy]); $cuiaccicqeqwyyuo = "<noscript>{$gqcagomiasueukwq}</noscript>"; $moooemyaqewumiay = $swqimwqeweekeusq->cgeyeoimiuyogose($moooemyaqewumiay, 'body', $cuiaccicqeqwyyuo); } $iwywmkygwewiamwm = $swqimwqeweekeusq->qgsekwygcgawekeq('link', $wwgucssaecqekuek); $moooemyaqewumiay = $swqimwqeweekeusq->cgeyeoimiuyogose($moooemyaqewumiay, $qawecuimqqcqwgsw ? 'body' : 'head', $iwywmkygwewiamwm); } } return $moooemyaqewumiay; } public function wygekkemwusgqaoa() : string { $eeamcawaiqocomwy = ''; if ($sameaqkagyqomooq = $this->wkagassgcaqeosio()->euyyeqkmigikiaam(Page::ewyamgkooeqiecwg)) { $uescmseksquycukc = false; $syowsmcowosssaos = ''; if ($this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm()) { $syowsmcowosssaos = Constants::skogicecygyyskkq; } $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $esaqeawoigqgagum = $this->kcicicwciacaqoyi($sameaqkagyqomooq, $syowsmcowosssaos); if ($swyigkueoywiacam->exists($esaqeawoigqgagum)) { $uescmseksquycukc = true; } if (!$uescmseksquycukc && Constants::skogicecygyyskkq === $syowsmcowosssaos) { $esaqeawoigqgagum = $this->kcicicwciacaqoyi($sameaqkagyqomooq); if ($swyigkueoywiacam->exists($esaqeawoigqgagum)) { $uescmseksquycukc = true; $syowsmcowosssaos = ''; } } if ($uescmseksquycukc) { $eeamcawaiqocomwy = $this->uiqmeawgmwasgquk($sameaqkagyqomooq, $syowsmcowosssaos); } } return $eeamcawaiqocomwy; } public function aoewscsawcuqsiuq($sameaqkagyqomooq, $icwicymcioeyeyek) { if (is_string($icwicymcioeyeyek)) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($icwicymcioeyeyek); } if (is_array($icwicymcioeyeyek)) { if (isset($icwicymcioeyeyek[Constants::skogicecygyyskkq][self::sgoaoiqkyikgkeis], $icwicymcioeyeyek[Constants::mcaucuyeeiwsmmuy][self::sgoaoiqkyikgkeis])) { $this->kmiewaiowaeoowec($sameaqkagyqomooq, $icwicymcioeyeyek[Constants::skogicecygyyskkq][self::sgoaoiqkyikgkeis], Constants::skogicecygyyskkq); $this->kmiewaiowaeoowec($sameaqkagyqomooq, $icwicymcioeyeyek[Constants::mcaucuyeeiwsmmuy][self::sgoaoiqkyikgkeis]); } else { if (isset($icwicymcioeyeyek[self::sgoaoiqkyikgkeis])) { $this->kmiewaiowaeoowec($sameaqkagyqomooq, $icwicymcioeyeyek[self::sgoaoiqkyikgkeis]); } } } } private function kmiewaiowaeoowec($sameaqkagyqomooq, string $kswaimykcacqyaay, string $syowsmcowosssaos = '') { if ($kswaimykcacqyaay) { $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->kcicicwciacaqoyi($sameaqkagyqomooq, $syowsmcowosssaos), $kswaimykcacqyaay); } } public function kcicicwciacaqoyi($sameaqkagyqomooq, string $syowsmcowosssaos = '') : string { $yaeakkosskocswae = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->mcgiosceuikscyom(); $wkcwykowmmmwioqs = Pattern::symcgieuakksimmu()->uiiqeakeuswqomey($sameaqkagyqomooq); if ($syowsmcowosssaos) { $wkcwykowmmmwioqs .= "-{$syowsmcowosssaos}"; } return "{$yaeakkosskocswae}/opt/btf/{$wkcwykowmmmwioqs}.css"; } public function uiqmeawgmwasgquk($sameaqkagyqomooq, string $syowsmcowosssaos = '') : string { $auyckgicyqiigwoo = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->iiwuqcgqyoqkyaom(); $wkcwykowmmmwioqs = Pattern::symcgieuakksimmu()->uiiqeakeuswqomey($sameaqkagyqomooq); if ($syowsmcowosssaos) { $wkcwykowmmmwioqs .= "-{$syowsmcowosssaos}"; } return "{$auyckgicyqiigwoo}/opt/btf/{$wkcwykowmmmwioqs}.css"; } }
