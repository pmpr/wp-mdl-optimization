<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66d240adc3ee3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\160\154\141\156\163"; const mkciamyomkiccoes = "\143\x6f\x69\156\163"; const owimkwkiwawmeicq = "\x75\x73\141\x67\x65\x73"; const moamckowewogygog = "\160\x75\x72\x63\150\141\x73\x65\x73"; const ikmkgmwegyasgqmo = "\162\x65\x6d\157\164\x65\137\x61\160\160\163"; const uysmymaeucegyiyw = "\x65\x78\x74\x72\x61\137\143\x6f\x69\156\x73"; const emywgcsiygeskckg = "\x72\145\x6d\x61\151\156\x5f\143\157\151\156\x73"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto iyawqekeeawqkymm; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto sigukociqouigous; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto ikuwigsmisimaqoc; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); ikuwigsmisimaqoc: goto yagscaikmmuagqcu; sigukociqouigous: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); yagscaikmmuagqcu: qaycycmeqkqcumog: } sikckcmeiwmyakeu: iyawqekeeawqkymm: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto owismwmeqcmukagu; } $yygmoeguaqyumuui = ["\145\x78\x74\x72\141\x73", "\163\165\x62\x73\x63\162\151\x70\x74\151\157\156\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto ioiwoukauoeamuca; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\x75\x62\x73\143\162\x69\160\x74\151\x6f\x6e\x73"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto cceggewquoaemcwq; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto mesesokuoomcioom; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto aqwoykqaquewcaki; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); aqwoykqaquewcaki: goto iuwccksomkkouogy; mesesokuoomcioom: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); iuwccksomkkouogy: cceggewquoaemcwq: omyquyiguuaociwq: } qaqooueskgciuqgc: ioiwoukauoeamuca: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto oqckuigyqswmqcqg; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; oqckuigyqswmqcqg: qwosyqcomiosguoa: } iumgcesksuawyuyo: owismwmeqcmukagu: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\156\x63\x20\x44\x61\164\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\124\150\145\x20\144\141\x74\141\x20\141\x73\x73\157\x63\x69\x61\164\x65\x64\40\167\x69\164\x68\x20\x79\157\165\x72\40\141\x63\143\157\165\x6e\164\x20\x69\x73\40\x75\160\x64\x61\x74\x65\x64\40\x77\x69\164\150\40\164\150\145\40\163\145\x72\166\145\x72\40\x61\164\x20\162\x65\147\165\x6c\141\x72\x20\x69\x6e\x74\x65\162\166\141\154\x73\x2e\x20\124\157\40\x65\x6e\x73\165\x72\145\40\x74\150\145\40\154\x61\x74\145\x73\164\x20\x75\160\144\x61\x74\145\54\40\x79\x6f\165\40\x63\141\x6e\x20\x75\x70\x64\x61\164\145\40\171\x6f\165\x72\40\x61\143\x63\x6f\165\156\x74\40\144\x61\164\x61\x20\167\151\164\150\40\164\x68\x65\x20\163\x65\162\166\x65\162\x20\x6e\x6f\167\x2e", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\x61\x73\163" => "\157\160\164\55\x73\x79\156\x63\x2d\144\141\x74\141\x20\160\x72\55\x62\164\x6e\x20\142\x74\156\55\x70\162\151\155\x61\162\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\163\163" => "\x77\55\61\x30\x30\40\160\162\55\x62\164\x6e\x20\x62\x74\x6e\x2d\x61\x63\x74\x69\157\x6e\40\x62\x74\156\x2d\x6f\165\x74\154\151\156\x65\x2d\160\162\x69\155\141\162\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto equwcsciiggsuiam; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto oiywguooqeasueqq; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); oiywguooqeasueqq: equwcsciiggsuiam: $eymaoksggoskuikg = __("\x55\156\x6b\156\x6f\167\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\x73\x20\x63\157\x69\x6e\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto qsaoyggkqwcgskwk; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); qsaoyggkqwcgskwk: if ($ymyueyaumiqiuaqa <= 0) { goto myooisakyuggoggc; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\163\x20\104\141\x79", "\45\163\40\104\141\171\163", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\x63\154\x61\x73\x73" => "\164\145\x78\x74\x2d\x73\x75\x63\x63\145\x73\163"]); goto awkqcyusycccekwq; myooisakyuggoggc: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\x78\x70\x69\162\145\144", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\163\x73" => "\164\145\170\164\55\144\x61\x6e\x67\145\x72"]); awkqcyusycccekwq: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto yugmwomumkosucsc; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\157\x20\x50\x75\x72\143\x68\x61\163\x65", PR__MDL__OPTIMIZATION); goto kqwyogqqwumumiwg; yugmwomumkosucsc: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); kqwyogqqwumumiwg: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\x53\165\142\x73\143\x72\151\160\x74\151\157\x6e\x20\x50\x6c\141\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\160\x6c\141\156" => [Constants::qescuiwgsyuikume => __("\123\165\142\163\x63\x72\x69\x70\164\151\157\x6e\40\120\154\141\x6e", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\145\x72\151\x6f\144" => [Constants::qescuiwgsyuikume => __("\120\x6c\141\156\x20\120\x65\162\x69\x6f\144", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\x65\x6d\x61\x69\x6e\x5f\x64\141\171" => [Constants::qescuiwgsyuikume => __("\x52\145\155\x61\151\x6e\x69\156\147\x20\124\x69\155\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\157\x69\156\x73" => [Constants::qescuiwgsyuikume => __("\x43\157\x75\156\x74\x20\x6f\x66\x20\x49\x6e\x69\164\151\141\x6c\40\x43\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\x75\x73\x65\x64\x5f\143\x6f\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\125\163\145\144\x20\x43\157\x69\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\145\x6d\x61\x69\156\x5f\143\x6f\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\x52\145\155\x61\x69\156\x20\103\157\x69\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\x45\170\x74\x72\141\x20\103\157\x69\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\154\141\164\x65\163\164\x5f\160\x75\162\x63\150\141\x73\x65\137\143\157\165\156\164" => [Constants::qescuiwgsyuikume => __("\x4c\141\164\x65\163\164\40\x50\x75\162\143\150\141\163\x65\40\x43\x6f\x75\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\141\x74\x65\x73\x74\137\x70\x75\162\143\x68\x61\163\x65\137\x64\141\x74\145" => [Constants::qescuiwgsyuikume => __("\114\x61\164\145\163\x74\x20\x50\x75\x72\143\x68\x61\163\x65\x20\104\x61\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\160\151\x72\x61\164\x69\x6f\156" => [Constants::qescuiwgsyuikume => __("\105\x78\160\151\162\145\x20\104\141\x74\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x57\x69\164\150\x6f\x75\x74\40\x65\x78\x70\151\x72\145\x20\144\141\x74\x65", PR__MDL__OPTIMIZATION), ["\x63\154\x61\x73\163" => "\164\x65\x78\x74\x2d\163\165\x63\x63\145\163\x73"])], "\143\x6f\151\156\163\x5f\x63\157\165\x6e\x74" => [Constants::qescuiwgsyuikume => __("\101\x6c\154\40\x43\x6f\x69\156\163\40\103\x6f\165\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\x75\163\x65\x64\x5f\x63\x6f\x69\156\x73" => [Constants::qescuiwgsyuikume => __("\x55\x73\145\144\x20\103\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\145\x6d\x61\151\x6e\x5f\143\x6f\x69\x6e\x73" => [Constants::qescuiwgsyuikume => __("\122\x65\x6d\x61\151\x6e\x20\x43\157\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\x74\141\142\154\x65\137\141\164\x74\162\163" => ["\x63\x6c\141\163\x73" => "\155\142\55\x30\40\x74\141\142\x6c\x65\40\164\x61\x62\154\145\55\x62\x6f\162\x64\145\x72\154\145\163\163"], "\x74\144\137\141\x74\164\x72\x73" => ["\x63\154\x61\x73\163" => "\160\x78\55\x30\x20\x70\x79\x2d\62"], "\154\x61\x73\x74\137\164\144\137\x61\x74\164\x72\x73" => ["\x63\154\x61\163\163" => "\x70\170\55\60\x20\160\171\55\x32\40\146\157\x6e\x74\x2d\x77\x65\151\x67\150\x74\x2d\142\157\154\x64\40\164\145\x78\164\x2d\162\x69\x67\150\x74"]]); aqksouwmeckaqyaq: } ykogqmmywykgouqy: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto gmsyoscesymiwwue; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); gmsyoscesymiwwue: $qookweymeqawmcwo = ["\154\x69\x73\x74\137\x68\164\x6d\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\x75\162\143\150\141\163\145\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\157\162\164\x2f\160\x75\162\x63\x68\x61\163\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\x69\163\164\137\x68\x74\x6d\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\x61\x67\x65\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\x6f\162\x74\x2f\165\163\x61\x67\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto eiicmcasqikiyasw; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; eiicmcasqikiyasw: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto wsqeiwkgoiekwasy; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto ayucsuwsiocgycww; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; ayucsuwsiocgycww: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto smmagoyuqoigoesc; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\x56\151\x65\167\x20\x74\150\145\40\106\x75\154\154\40\x52\145\160\x6f\162\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\145\x67\x6d\145\156\164" => "{$ymqmyyeuycgmigyo}\x5f\162\145\160\x6f\162\164"], $eeamcawaiqocomwy), ["\x63\x6c\x61\x73\163" => "\x70\162\x2d\x62\164\x6e\x20\142\164\x6e\x2d\x70\x72\151\x6d\x61\x72\171\x20\x62\164\x6e\x2d\x61\x63\x74\x69\157\156"]); smmagoyuqoigoesc: wsqeiwkgoiekwasy: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto mcmcocyuugueaeww; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto kgqgcggccmiwayua; } kwayumouacgkgyas: kgqgcggccmiwayua: if (!$uymsgmyyeikucgae) { goto rgaagksgsewuwgmo; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\x75\163\x61\x67\x65", 0); rgaagksgsewuwgmo: cwyaysecsakaqgew: } swesqeqmagkicuws: mcmcocyuugueaeww: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto tagquiiokseckkqs; } $nsmgceoqaqogqmuw = __("\x54\x68\145\x72\x65\x20\x69\x73\40\156\x6f\x74\x20\x64\141\x74\141\x20\164\x6f\40\x73\150\x6f\167\x20\171\157\165\54\x20\160\154\x65\x61\x73\x65\x20\x72\x65\146\162\x65\163\150\40\160\141\147\145\x20\x6f\x72\x20\143\x6f\x6e\x74\x61\x63\164\40\x75\x73\56", PR__MDL__OPTIMIZATION); goto qoacckkkwsqkokye; tagquiiokseckkqs: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\154\x61\x6e\x5f\151\x64")))) { goto qwiyicoywcekgyce; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto kuaiscyqkgcouiye; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\x59\x6f\x75\x72\x20\123\165\142\x73\x63\x72\151\160\x74\x69\157\x6e", PR__MDL__OPTIMIZATION)]; goto ooooceiweeackgie; kuaiscyqkgcouiye: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\x77\145\142\137\166\x69\x74\141\154\x5f\x75\163\141\147\145", "\143\x72\x69\164\151\x63\141\x6c\137\x63\x73\163\x5f\x75\x73\141\147\145"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto agsuaimomgsoyiem; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto eucakkcoiiwkwsme; agsuaimomgsoyiem: iwsaaiggkciigsmc: } eucakkcoiiwkwsme: if ($ycqsugugqomewkke) { goto kygccamgawookukq; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\x28\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\x6f\x75\162\x20\123\x75\142\163\x63\162\x69\160\x74\x69\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto qysmyemoucigsmua; kygccamgawookukq: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\x73\40\50\x25\x73\51", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\131\x6f\165\162\40\123\165\142\x73\143\x72\151\x70\164\151\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\50\45\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\x4e\145\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; qysmyemoucigsmua: ooooceiweeackgie: if (!$guacamgosccsckmq) { goto gkeymcqqsewayscs; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); gkeymcqqsewayscs: qwiyicoywcekgyce: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\x65\x72\166\x69\143\x65\137\143\x6f\163\x74\x73", ["\160\154\141\x6e\x73" => $kekgkgqeyesmkywu, "\155\145\x74\x72\x69\143\163" => ["\x63\x72\151\x74\151\x63\141\154\x5f\143\x73\x73" => __("\x43\x72\x69\x74\x69\x63\141\154\x20\103\123\x53", PR__MDL__OPTIMIZATION), "\167\x65\x62\137\x76\x69\164\x61\x6c" => __("\x49\155\160\x72\157\x76\x65\x20\x4c\103\120", PR__MDL__OPTIMIZATION)], "\143\157\151\x6e\x5f\x6d\x61\x73\153" => __("\45\x73\40\x63\157\x69\x6e\x73", PR__MDL__OPTIMIZATION), "\163\165\x62\x73\x63\162\151\160\164\151\x6f\156\x5f\x70\154\141\156\163\x5f\x74\x69\x74\154\x65" => __("\x53\165\142\x73\x63\162\x69\160\164\151\x6f\x6e\x20\x50\154\x61\156\x73", PR__MDL__OPTIMIZATION)]); qoacckkkwsqkokye: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
