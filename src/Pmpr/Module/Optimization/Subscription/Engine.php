<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66bd21640c7ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; class Engine extends Common { public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(self::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto qccmuwiwykuegoga; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto qaiuogoowcoimwee; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto ymwyooosikgokiaa; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); ymwyooosikgokiaa: goto osqgywagokmsicqe; qaiuogoowcoimwee: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); osqgywagokmsicqe: yuoamgkigcwaooqu: } kaiqsuaywyuckuoo: qccmuwiwykuegoga: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto qioswooukgoowsuc; } $yygmoeguaqyumuui = ["\x65\x78\164\162\141\163", "\x73\165\x62\x73\143\162\x69\160\164\151\157\156\163"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][self::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto koemwyegoqwiikom; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\165\x62\163\x63\x72\x69\x70\x74\x69\x6f\156\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[self::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? self::eoigaocgcaekssuw : self::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto siuyaemoiiqyoggo; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto kuyqusuycscumuek; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[self::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, self::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto uscissuaiyuiukea; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [self::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); uscissuaiyuiukea: goto cycwgukowsksmkyc; kuyqusuycscumuek: $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::kumuoysauoagaiiy => $igqsaukqcqscimok[self::kumuoysauoagaiiy], $yakcyegsoqusmiak::uiwqcumqkgikqyue => $igqsaukqcqscimok[self::uiwqcumqkgikqyue], $yakcyegsoqusmiak::acymsykymkiewqsy => $igqsaukqcqscimok[self::acymsykymkiewqsy], $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); cycwgukowsksmkyc: siuyaemoiiqyoggo: ooqmaweuqmcmwsuk: } qmgueimkwqmsakis: koemwyegoqwiikom: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][self::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto qycsooiomiugimqc; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[self::asmooogmgyecqqka], $ymiyawysimukkoso[self::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[self::asmooogmgyecqqka] < $ymiyawysimukkoso[self::yusuiaeueqwieqqq]; qycsooiomiugimqc: iiuuwuwcwamqegey: } csucwwqcsaymyiuk: qioswooukgoowsuc: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\x53\x79\156\143\40\x44\141\x74\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::smkwuwawwaqyimcq, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\124\x68\145\40\144\x61\164\x61\40\x61\163\163\x6f\143\x69\x61\164\x65\144\x20\x77\x69\164\150\40\x79\157\165\x72\40\x61\143\x63\x6f\x75\156\x74\40\151\x73\x20\165\160\144\x61\x74\x65\144\40\167\x69\x74\x68\x20\x74\x68\x65\x20\x73\145\162\x76\x65\162\x20\141\164\x20\162\145\x67\x75\154\x61\162\x20\151\156\164\145\162\x76\141\154\x73\56\40\x54\x6f\40\145\x6e\163\165\x72\x65\x20\x74\150\145\x20\154\x61\164\145\163\x74\40\165\x70\x64\x61\x74\x65\x2c\40\x79\157\x75\x20\x63\x61\x6e\40\165\160\144\x61\164\x65\x20\171\157\x75\x72\40\x61\x63\x63\157\x75\156\x74\40\x64\x61\164\x61\40\x77\151\164\150\40\164\x68\x65\x20\x73\x65\162\x76\145\x72\40\x6e\157\167\56", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\154\x61\x73\x73" => "\157\x70\x74\x2d\x73\171\156\x63\x2d\x64\141\x74\141\x20\x70\162\x2d\x62\x74\156\x20\142\164\156\55\160\x72\x69\155\141\162\171", self::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\x6c\141\163\163" => "\x77\55\x31\x30\x30\x20\160\x72\55\142\x74\x6e\x20\x62\164\x6e\x2d\141\143\x74\151\x6f\156\x20\x62\164\x6e\55\x6f\165\164\154\x69\x6e\145\x2d\160\x72\x69\155\x61\x72\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto gimquiiwucueoqkw; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto ggoimgeeuugseiwk; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::eoigaocgcaekssuw); ggoimgeeuugseiwk: gimquiiwucueoqkw: $eymaoksggoskuikg = __("\125\x6e\x6b\156\x6f\167\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\163\40\x63\x6f\151\x6e\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto eimouyomcoqkmaae; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); eimouyomcoqkmaae: if ($ymyueyaumiqiuaqa <= 0) { goto kkwqmoeeqygoimwg; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\163\x20\x44\141\x79", "\x25\x73\x20\x44\141\171\163", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($ymyueyaumiqiuaqa)), ["\x63\154\141\163\x73" => "\164\x65\x78\164\55\x73\x75\x63\x63\x65\x73\163"]); goto mwqcykaeywsmoumm; kkwqmoeeqygoimwg: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\x78\x70\x69\162\x65\144", PR__MDL__OPTIMIZATION), ["\143\154\141\163\x73" => "\164\x65\170\164\55\144\141\156\x67\145\162"]); mwqcykaeywsmoumm: $cesmwwwcymckqaku = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[self::mayesweykoooyugy][self::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[self::mayesweykoooyugy][self::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([self::squoamkioomemiyi => self::mayesweykoooyugy, [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::kumuoysauoagaiiy, self::ciyoccqkiamemcmm => self::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto awgmyaycugswmwae; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\x6f\40\120\165\x72\x63\x68\x61\x73\x65", PR__MDL__OPTIMIZATION); goto ywoyioqqyuocoygk; awgmyaycugswmwae: $ocsquaqymuwoyisw = $this->msywmyaoqmaegsuy($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::uiwqcumqkgikqyue)[self::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->eciukqcoqmyacwow($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); ywoyioqqyuocoygk: $gkeiousaoygaimia = [self::eoigaocgcaekssuw => [self::qescuiwgsyuikume => __("\x53\x75\x62\x73\x63\x72\151\160\164\151\x6f\x6e\40\120\154\141\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\x70\x6c\x61\156" => [self::qescuiwgsyuikume => __("\123\165\x62\163\143\x72\151\x70\164\151\x6f\156\40\120\x6c\141\156", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\145\x72\151\x6f\x64" => [self::qescuiwgsyuikume => __("\120\x6c\141\x6e\x20\x50\x65\162\151\x6f\x64", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\x65\155\x61\x69\156\137\x64\141\171" => [self::qescuiwgsyuikume => __("\x52\145\x6d\x61\x69\x6e\x69\156\147\x20\124\151\155\145", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\143\x6f\x69\156\x73" => [self::qescuiwgsyuikume => __("\x43\157\x75\x6e\x74\x20\x6f\x66\40\111\156\151\164\151\141\154\40\x43\157\x69\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($cesmwwwcymckqaku))], "\x75\163\x65\x64\137\x63\157\151\x6e\x73" => [self::qescuiwgsyuikume => __("\x55\163\x65\x64\x20\x43\157\x69\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\x65\155\141\x69\156\137\x63\x6f\x69\x6e\x73" => [self::qescuiwgsyuikume => __("\122\x65\155\x61\151\156\x20\x43\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [self::qescuiwgsyuikume => __("\x45\170\164\162\x61\x20\x43\x6f\151\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\x6c\x61\x74\145\x73\x74\137\x70\165\162\x63\x68\141\163\145\x5f\143\x6f\x75\156\x74" => [self::qescuiwgsyuikume => __("\x4c\x61\164\x65\x73\164\40\x50\x75\162\143\150\141\x73\x65\40\103\157\165\156\x74", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\141\164\145\163\164\x5f\160\165\x72\143\x68\x61\163\x65\x5f\x64\x61\164\x65" => [self::qescuiwgsyuikume => __("\x4c\x61\164\145\x73\x74\x20\120\165\x72\x63\150\141\x73\x65\x20\104\141\164\145", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\160\151\162\141\x74\x69\x6f\156" => [self::qescuiwgsyuikume => __("\105\x78\x70\151\162\x65\x20\104\x61\x74\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\151\x74\x68\157\165\x74\40\145\170\x70\151\x72\x65\40\144\141\164\x65", PR__MDL__OPTIMIZATION), ["\143\x6c\141\163\163" => "\x74\145\x78\x74\55\x73\165\x63\143\x65\x73\163"])], "\143\x6f\151\x6e\163\x5f\143\157\x75\x6e\x74" => [self::qescuiwgsyuikume => __("\x41\x6c\x6c\x20\103\x6f\x69\x6e\163\x20\x43\x6f\165\156\x74", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($yeyequgieweqoume))], "\165\x73\x65\144\137\x63\157\151\x6e\163" => [self::qescuiwgsyuikume => __("\125\x73\145\x64\40\x43\x6f\151\x6e\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\x72\145\155\x61\x69\x6e\137\x63\157\151\156\x73" => [self::qescuiwgsyuikume => __("\x52\145\155\141\x69\156\40\103\157\151\x6e\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][self::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[self::qwumqqyuasyskkkc], ["\x74\141\142\154\145\x5f\x61\164\164\x72\163" => ["\143\154\x61\163\x73" => "\155\142\55\60\40\x74\x61\x62\154\145\40\x74\141\142\x6c\x65\x2d\142\157\x72\x64\145\x72\154\x65\x73\x73"], "\x74\144\137\x61\164\x74\162\163" => ["\143\154\x61\163\x73" => "\x70\x78\55\x30\40\160\171\55\62"], "\154\141\163\164\x5f\x74\144\x5f\x61\164\x74\x72\163" => ["\x63\154\x61\x73\163" => "\x70\x78\55\60\x20\160\x79\x2d\x32\x20\146\x6f\156\x74\x2d\167\x65\151\147\150\x74\55\x62\x6f\154\144\40\164\145\x78\164\55\x72\151\x67\150\x74"]]); aycqgowuwagcgque: } iauwkeeaqsgweeoo: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto icuukwkwqeoogyae; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); icuukwkwqeoogyae: $qookweymeqawmcwo = ["\154\x69\x73\x74\x5f\150\164\155\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\x75\162\x63\150\x61\163\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\x6f\162\x74\57\160\x75\x72\143\x68\141\x73\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\151\x73\x74\x5f\150\x74\x6d\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\141\147\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\x70\x6f\162\164\57\x75\163\141\x67\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis))) { goto iwcmgioeaiyuacwi; } $ccowyogiqwikkkie[] = self::eoeewcigeywcquis; iwcmgioeaiyuacwi: if (!(LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi))) { goto iyyaiuccouqowyga; } $ccowyogiqwikkkie[] = self::wgeawuowgusmmece; iyyaiuccouqowyga: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(self::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto cksomiiqscosigke; } $ywmkwiwkosakssii = [self::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto ikqagqacuwcgwmqy; } $ywmkwiwkosakssii[self::ausqeuugegoygouq] = 4; ikqagqacuwcgwmqy: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto gcogomgmqcgkeceg; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\x56\x69\145\167\40\x74\x68\x65\x20\x46\x75\x6c\154\x20\122\145\160\x6f\x72\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\145\x67\x6d\x65\156\164" => "{$ymqmyyeuycgmigyo}\x5f\x72\x65\160\x6f\x72\164"], $eeamcawaiqocomwy), ["\143\154\x61\x73\x73" => "\x70\162\55\x62\164\x6e\x20\142\164\x6e\55\160\x72\151\155\141\x72\x79\40\142\x74\156\x2d\x61\143\x74\x69\x6f\x6e"]); gcogomgmqcgkeceg: cksomiiqscosigke: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto eeomcmuiqwgwwuqk; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case self::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto euoscysqgugsqewc; case self::wgeawuowgusmmece: $uymsgmyyeikucgae = "\167\145\x62\137\166\151\164\x61\x6c"; goto euoscysqgugsqewc; } mwwygasiagaqsimo: euoscysqgugsqewc: if (!$uymsgmyyeikucgae) { goto wucacaegysmiusai; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\x75\x73\141\147\145", 0); wucacaegysmiusai: kisccmsaieigisiu: } ugmukcwgcioqgywy: eeomcmuiqwgwwuqk: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto oysyuiqmsokoykaq; } $nsmgceoqaqogqmuw = __("\x54\x68\x65\162\145\x20\x69\x73\40\x6e\x6f\164\40\x64\x61\x74\141\x20\x74\157\x20\x73\150\157\167\40\x79\x6f\x75\54\x20\x70\154\145\141\163\145\x20\x72\145\146\x72\145\x73\x68\40\x70\141\x67\x65\x20\157\x72\x20\143\x6f\x6e\x74\x61\x63\164\40\165\163\56", PR__MDL__OPTIMIZATION); goto misiasooemyskoay; oysyuiqmsokoykaq: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\x6c\141\156\137\151\x64")))) { goto omqyuuomwywmqeiq; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto ycaqooeeseougumo; } $guacamgosccsckmq = [self::eqewsqmqmsiocaeg => true, self::qescuiwgsyuikume => __("\131\157\x75\162\x20\123\165\142\163\143\162\151\160\x74\151\157\156", PR__MDL__OPTIMIZATION)]; goto eceeoiwuagocweus; ycaqooeeseougumo: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\167\145\142\137\x76\x69\x74\141\x6c\137\165\x73\141\x67\145", "\143\x72\x69\164\151\x63\x61\x6c\137\143\x73\163\x5f\165\x73\x61\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto yeaqsiqgakskoykg; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto mseokuecmeoyoggk; yeaqsiqgakskoykg: uookseqsmsqgweuy: } mseokuecmeoyoggk: if ($ycqsugugqomewkke) { goto esgyqksmcukeuwyk; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\x25\163\x20\x28\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] ?? '', __("\x59\x6f\x75\162\x20\x53\x75\142\x73\143\162\151\160\x74\151\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::eqewsqmqmsiocaeg] = true; goto iigmgswcogqemgao; esgyqksmcukeuwyk: $guacamgosccsckmq[self::qescuiwgsyuikume] = sprintf("\45\163\40\x28\x25\163\51", $guacamgosccsckmq[self::qescuiwgsyuikume], __("\x59\x6f\165\x72\x20\123\x75\x62\163\143\162\151\x70\164\151\157\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\45\x73\40\50\45\x73\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume], __("\116\145\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[self::eqewsqmqmsiocaeg] = true; iigmgswcogqemgao: eceeoiwuagocweus: if (!$guacamgosccsckmq) { goto aeockieewgkequae; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); aeockieewgkequae: omqyuuomwywmqeiq: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\x65\162\x76\151\x63\x65\137\143\157\x73\x74\163", ["\x70\x6c\x61\156\x73" => $kekgkgqeyesmkywu, "\x6d\145\x74\162\x69\x63\163" => ["\x63\162\x69\164\x69\143\141\154\x5f\143\163\163" => __("\103\162\151\164\151\143\141\154\x20\x43\123\123", PR__MDL__OPTIMIZATION), "\x77\x65\x62\x5f\166\151\164\141\x6c" => __("\111\x6d\x70\162\157\x76\x65\40\x4c\103\x50", PR__MDL__OPTIMIZATION)], "\143\157\x69\156\137\x6d\141\163\x6b" => __("\x25\163\x20\143\157\x69\156\x73", PR__MDL__OPTIMIZATION), "\x73\x75\142\x73\x63\162\x69\160\164\x69\x6f\x6e\137\x70\x6c\x61\x6e\x73\x5f\x74\151\x74\x6c\x65" => __("\x53\165\142\x73\x63\162\x69\x70\x74\x69\x6f\156\x20\120\154\141\x6e\x73", PR__MDL__OPTIMIZATION)]); misiasooemyskoay: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([self::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
