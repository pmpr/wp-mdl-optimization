<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2b5148c02d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\x70\154\141\x6e\x73"; const mkciamyomkiccoes = "\x63\157\151\x6e\x73"; const owimkwkiwawmeicq = "\x75\163\141\147\x65\163"; const moamckowewogygog = "\160\165\x72\143\x68\x61\163\145\x73"; const ikmkgmwegyasgqmo = "\x72\x65\x6d\157\x74\x65\x5f\x61\160\160\x73"; const uysmymaeucegyiyw = "\145\x78\x74\162\141\x5f\x63\x6f\x69\x6e\x73"; const emywgcsiygeskckg = "\162\145\x6d\141\151\156\137\x63\157\x69\156\x73"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto ieoeeyieoskuyiyw; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto mcuoyseuwoueyaie; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto mqacqosyicuiqwia; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); mqacqosyicuiqwia: goto kwowggaooiyqawyq; mcuoyseuwoueyaie: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); kwowggaooiyqawyq: guummoewucyeuiek: } owiguescmqyqukui: ieoeeyieoskuyiyw: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto cwmuqmoeauqcewoy; } $yygmoeguaqyumuui = ["\145\x78\164\x72\141\163", "\163\165\142\x73\143\x72\x69\x70\x74\151\x6f\156\163"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto qoaawmmcqyacokws; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\x75\142\163\143\162\x69\160\164\151\157\156\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto ykcmomsiayaymysm; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto seyygcwcaogkmaqe; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto wwgikwuigiiqsswq; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); wwgikwuigiiqsswq: goto uugiuqkesegaamqw; seyygcwcaogkmaqe: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); uugiuqkesegaamqw: ykcmomsiayaymysm: ukigmkeewuqomooc: } soqkewsayowwcmco: qoaawmmcqyacokws: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto uwyeycaywowwiquu; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; uwyeycaywowwiquu: ugyawwukegyoqmsq: } ciiyqsiswkcwsocm: cwmuqmoeauqcewoy: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\x79\156\143\40\104\141\x74\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\124\150\145\40\144\141\x74\141\x20\141\x73\163\157\143\x69\x61\x74\145\x64\40\167\151\164\x68\x20\171\157\165\162\x20\x61\143\143\x6f\x75\156\x74\40\151\x73\x20\165\160\x64\141\x74\x65\x64\x20\x77\151\x74\x68\x20\x74\x68\145\x20\163\x65\x72\x76\145\162\x20\x61\x74\40\162\145\147\165\154\x61\162\x20\151\156\164\145\x72\166\x61\x6c\x73\56\40\x54\x6f\x20\x65\156\x73\165\162\145\40\x74\x68\x65\x20\154\141\164\x65\163\164\40\x75\160\144\141\164\145\x2c\40\x79\x6f\165\x20\x63\141\x6e\x20\165\160\144\141\164\145\x20\x79\157\165\x72\x20\141\143\x63\x6f\x75\x6e\x74\40\144\x61\164\141\x20\167\151\164\150\40\x74\150\x65\x20\x73\x65\162\166\145\x72\x20\x6e\x6f\167\x2e", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\x61\x73\x73" => "\160\x72\x2d\157\x70\x74\x2d\163\x79\x6e\x63\x2d\144\141\164\x61\40\160\x72\55\142\x74\x6e\x20\x62\164\x6e\55\160\x72\x69\155\141\x72\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\x6c\141\163\x73" => "\x77\55\x31\60\x30\x20\x70\162\55\x62\x74\x6e\40\142\164\x6e\x2d\141\143\x74\151\157\156\40\142\164\x6e\55\x6f\x75\x74\154\x69\156\x65\x2d\x70\162\151\155\x61\x72\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto ggsugekocmsukuci; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto eiecgqokmuekaesc; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); eiecgqokmuekaesc: ggsugekocmsukuci: $eymaoksggoskuikg = __("\125\156\153\156\157\167\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\x73\x20\x63\157\x69\156\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto ceosmkqgqgwsowwg; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); ceosmkqgqgwsowwg: if ($ymyueyaumiqiuaqa <= 0) { goto kcwgiwimgqesukqu; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\163\x20\104\x61\171", "\45\163\40\x44\141\171\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\x6c\x61\163\163" => "\164\x65\x78\164\55\x73\x75\x63\x63\x65\163\x73"]); goto wicuauokauykwoeu; kcwgiwimgqesukqu: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\105\x78\160\x69\x72\145\144", PR__MDL__OPTIMIZATION), ["\143\154\x61\x73\163" => "\x74\145\x78\x74\x2d\144\x61\156\147\145\162"]); wicuauokauykwoeu: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto gcecieuocqawmgci; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\157\x20\x50\x75\x72\x63\150\x61\x73\145", PR__MDL__OPTIMIZATION); goto msmmiaumiasmsiog; gcecieuocqawmgci: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); msmmiaumiasmsiog: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\123\x75\x62\x73\143\x72\151\160\x74\x69\x6f\156\x20\x50\154\x61\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x70\154\x61\156" => [Constants::qescuiwgsyuikume => __("\123\x75\142\x73\143\162\151\160\x74\151\x6f\156\40\120\154\x61\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\x65\x72\x69\x6f\144" => [Constants::qescuiwgsyuikume => __("\120\x6c\141\x6e\x20\120\x65\x72\151\157\x64", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\x65\155\x61\x69\156\x5f\144\x61\x79" => [Constants::qescuiwgsyuikume => __("\x52\145\155\x61\x69\156\x69\x6e\x67\x20\124\x69\x6d\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\143\157\x69\x6e\163" => [Constants::qescuiwgsyuikume => __("\x43\x6f\x75\156\x74\40\157\x66\x20\111\x6e\151\164\x69\141\x6c\40\x43\x6f\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\x75\x73\x65\x64\137\143\157\x69\x6e\163" => [Constants::qescuiwgsyuikume => __("\125\163\145\144\40\x43\x6f\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\x65\155\141\151\x6e\137\x63\x6f\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\122\145\155\x61\x69\x6e\x20\x43\157\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\x45\x78\x74\x72\x61\x20\x43\157\151\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\154\141\164\145\x73\x74\x5f\x70\x75\x72\143\150\141\163\145\x5f\x63\157\165\156\164" => [Constants::qescuiwgsyuikume => __("\114\x61\x74\145\x73\164\x20\x50\x75\162\143\x68\x61\163\145\x20\x43\x6f\x75\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\x6c\141\x74\145\163\164\137\160\165\x72\x63\150\141\x73\145\137\144\x61\x74\145" => [Constants::qescuiwgsyuikume => __("\x4c\x61\164\145\163\164\40\x50\x75\162\143\x68\x61\x73\x65\x20\x44\x61\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\x78\160\151\x72\141\x74\151\157\156" => [Constants::qescuiwgsyuikume => __("\105\x78\160\151\162\x65\x20\x44\141\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\x69\164\150\x6f\165\164\40\x65\170\160\151\x72\145\x20\144\141\x74\145", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\163\163" => "\164\x65\170\164\55\163\165\x63\143\x65\x73\x73"])], "\143\x6f\x69\156\163\x5f\143\157\165\x6e\164" => [Constants::qescuiwgsyuikume => __("\101\x6c\x6c\40\103\157\151\x6e\x73\x20\x43\157\x75\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\165\x73\145\x64\137\x63\x6f\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\125\x73\145\144\x20\103\157\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\x65\155\x61\x69\x6e\x5f\x63\157\151\156\163" => [Constants::qescuiwgsyuikume => __("\x52\x65\x6d\x61\x69\156\x20\x43\157\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\164\x61\142\x6c\145\137\141\164\x74\162\163" => ["\143\x6c\141\x73\x73" => "\x6d\x62\x2d\x30\x20\164\141\142\x6c\x65\x20\x74\x61\x62\154\x65\x2d\x62\157\162\x64\x65\162\154\145\x73\163"], "\164\144\x5f\x61\164\164\162\x73" => ["\x63\x6c\141\x73\x73" => "\160\x78\55\x30\x20\x70\x79\x2d\x32"], "\154\141\x73\164\x5f\x74\144\x5f\141\164\164\x72\163" => ["\143\x6c\141\x73\x73" => "\160\x78\55\60\40\x70\x79\x2d\x32\x20\146\x6f\x6e\164\55\167\145\151\x67\x68\x74\55\142\x6f\154\x64\40\164\145\170\164\55\162\x69\147\x68\x74"]]); gqeoaceyoiicoaec: } oksqsucimimsswcg: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto kkckyqmcyussauma; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); kkckyqmcyussauma: $qookweymeqawmcwo = ["\x6c\151\163\x74\137\150\x74\155\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\165\x72\x63\150\x61\x73\x65\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\145\x70\157\162\x74\57\x70\x75\162\143\150\141\163\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\x6c\151\x73\164\x5f\150\x74\155\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\141\x67\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\x70\157\162\164\57\x75\163\x61\x67\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto ikukqooiowqywyqo; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; ikukqooiowqywyqo: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto gscyiqmmegqmqcoe; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto cciakcwuweqmcose; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; cciakcwuweqmcose: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto uckusgwkoycmkeam; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\151\x65\x77\x20\x74\150\x65\40\x46\165\x6c\x6c\x20\122\145\160\x6f\x72\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\x65\147\155\145\156\164" => "{$ymqmyyeuycgmigyo}\x5f\x72\x65\x70\157\x72\x74"], $eeamcawaiqocomwy), ["\x63\x6c\141\x73\x73" => "\x70\162\55\x62\x74\x6e\x20\x62\x74\x6e\55\160\x72\151\155\141\x72\x79\x20\142\164\x6e\x2d\x61\x63\x74\151\157\156"]); uckusgwkoycmkeam: gscyiqmmegqmqcoe: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto kocaieyauyiqmyiy; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto swicauyqusmgeccu; } maguoggkqamaiuag: swicauyqusmgeccu: if (!$uymsgmyyeikucgae) { goto icoiqskygugkgmkm; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\165\x73\141\147\x65", 0); icoiqskygugkgmkm: qosswumywsaeyqus: } mieoguuqiwqioeqa: kocaieyauyiqmyiy: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto okuqsqaiwwiigmyu; } $nsmgceoqaqogqmuw = __("\124\150\145\162\145\x20\151\x73\40\156\x6f\164\x20\x64\x61\x74\141\40\164\x6f\x20\x73\x68\157\x77\x20\171\157\x75\54\x20\160\x6c\145\x61\x73\145\40\x72\x65\146\162\145\x73\150\x20\x70\141\147\145\x20\157\162\40\x63\x6f\x6e\x74\141\x63\164\40\165\x73\56", PR__MDL__OPTIMIZATION); goto ksiwgckusukisueg; okuqsqaiwwiigmyu: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\154\x61\156\137\151\x64")))) { goto gqaqamewqeaqwcia; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto eussqkkimciywios; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\x6f\x75\x72\40\x53\165\142\163\x63\x72\151\160\x74\151\157\x6e", PR__MDL__OPTIMIZATION)]; goto ewsigoeswimiueqe; eussqkkimciywios: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\143\162\x69\x74\151\x63\x61\x6c\x5f\143\x73\x73\x5f\165\x73\x61\x67\x65", "\163\160\x65\x65\x64\137\164\145\x73\x74\x5f\x75\163\141\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto cuayqmasemsqsume; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto gcqssckowmywoesw; cuayqmasemsqsume: eekkcooqswqouoei: } gcqssckowmywoesw: if ($ycqsugugqomewkke) { goto igmawmwssyskqqag; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\x20\x28\45\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\157\165\162\x20\123\x75\x62\x73\x63\x72\x69\160\164\x69\157\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto iomwkkieqcswkkaw; igmawmwssyskqqag: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\x25\163\x20\50\45\x73\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\131\157\x75\162\40\x53\x75\x62\163\x63\x72\151\x70\x74\x69\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\x20\x28\45\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\x4e\x65\x77", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; iomwkkieqcswkkaw: ewsigoeswimiueqe: if (!$guacamgosccsckmq) { goto gaskcgoeywuyukke; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); gaskcgoeywuyukke: gqaqamewqeaqwcia: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\163\x65\162\166\151\143\x65\137\x63\x6f\163\164\163", ["\x70\x6c\141\x6e\163" => $kekgkgqeyesmkywu, "\x61\143\164\151\x6f\x6e\163" => ["\x63\x72\x69\164\151\x63\x61\154\137\143\x73\163" => __("\103\x72\x69\164\x69\x63\141\x6c\x20\x43\123\x53", PR__MDL__OPTIMIZATION), "\x73\x70\x65\x65\x64\x5f\164\x65\x73\x74" => __("\x53\x70\x65\145\144\x20\x54\x65\x73\164", PR__MDL__OPTIMIZATION)], "\x63\157\151\x6e\137\x6d\x61\x73\x6b" => __("\x25\x73\x20\x63\157\151\x6e\x73", PR__MDL__OPTIMIZATION), "\x73\165\142\163\143\x72\x69\160\x74\x69\x6f\x6e\137\160\154\141\156\163\137\164\x69\x74\x6c\x65" => __("\123\165\x62\x73\143\162\151\160\164\x69\x6f\156\x20\x50\154\141\156\163", PR__MDL__OPTIMIZATION)]); ksiwgckusukisueg: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
