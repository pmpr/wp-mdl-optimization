<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a57ce0afbe8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; class Engine extends Common { public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(self::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto csskguekqcwcmocu; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto yskswskmsgoouyco; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto ysusaysykymegguk; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); ysusaysykymegguk: goto oaciskoioaecgwee; yskswskmsgoouyco: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); oaciskoioaecgwee: emgssiqceagusgyg: } oeosugomyqyekmuq: csskguekqcwcmocu: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto osoqssymqqoqcuky; } $yygmoeguaqyumuui = ["\145\x78\164\x72\141\163", "\x73\x75\x62\x73\x63\x72\x69\x70\164\x69\x6f\156\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][self::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto uugekiumuwemyuyc; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\165\x62\x73\x63\x72\151\160\164\x69\x6f\x6e\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[self::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? self::eoigaocgcaekssuw : self::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto amkcomscieegkygc; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto qkiqquymecyoouki; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[self::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, self::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto kygcymkakucoeock; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [self::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); kygcymkakucoeock: goto iqukigoyiqgcggue; qkiqquymecyoouki: $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::squoamkioomemiyi => $sqeykgyoooqysmca, $yakcyegsoqusmiak::kumuoysauoagaiiy => $igqsaukqcqscimok[self::kumuoysauoagaiiy], $yakcyegsoqusmiak::uiwqcumqkgikqyue => $igqsaukqcqscimok[self::uiwqcumqkgikqyue], $yakcyegsoqusmiak::acymsykymkiewqsy => $igqsaukqcqscimok[self::acymsykymkiewqsy], $yakcyegsoqusmiak::yocqkmeouaamomke => $qkasemkceamoceiy]); iqukigoyiqgcggue: amkcomscieegkygc: yuoyeeuqqaockyqw: } ugcyukgoaiiysymc: uugekiumuwemyuyc: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][self::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto qoameasiqwaqgmca; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[self::asmooogmgyecqqka], $ymiyawysimukkoso[self::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[self::asmooogmgyecqqka] < $ymiyawysimukkoso[self::yusuiaeueqwieqqq]; qoameasiqwaqgmca: wkwkeicwosmkcygc: } mmusoowesqcmuqew: osoqssymqqoqcuky: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\156\143\40\x44\141\164\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::smkwuwawwaqyimcq, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\124\x68\145\x20\x64\141\x74\141\x20\x61\163\x73\x6f\143\151\141\x74\x65\144\40\167\x69\164\150\x20\171\x6f\x75\x72\40\x61\x63\x63\x6f\x75\x6e\x74\x20\151\163\40\x75\x70\x64\x61\x74\145\144\40\167\151\164\x68\x20\x74\150\145\x20\x73\145\162\x76\145\x72\40\x61\164\x20\162\x65\x67\165\x6c\x61\162\40\151\156\x74\x65\x72\166\141\154\x73\56\x20\x54\x6f\x20\145\x6e\x73\165\162\x65\40\x74\150\x65\x20\x6c\141\164\145\163\164\40\165\160\144\141\164\x65\x2c\x20\171\157\x75\x20\x63\x61\156\40\x75\160\x64\x61\164\145\x20\x79\x6f\x75\162\x20\141\143\143\157\x75\x6e\x74\40\x64\141\x74\141\x20\167\x69\x74\x68\x20\164\150\145\x20\x73\x65\162\x76\x65\162\40\156\x6f\167\x2e", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\141\163\163" => "\x6f\x70\x74\55\163\171\156\143\55\144\141\x74\141\x20\x70\x72\x2d\x62\x74\x6e\x20\142\164\x6e\x2d\x70\162\x69\155\141\162\171", self::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\163\163" => "\167\x2d\61\60\60\x20\160\x72\x2d\x62\x74\x6e\40\x62\164\156\x2d\141\143\164\x69\157\x6e\x20\142\x74\156\x2d\157\x75\164\154\151\156\x65\55\x70\162\151\x6d\x61\162\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto giiucsyqgcooaima; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto qcywwqceiqogcoyo; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::eoigaocgcaekssuw); qcywwqceiqogcoyo: giiucsyqgcooaima: $eymaoksggoskuikg = __("\125\x6e\x6b\156\157\x77\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\163\40\143\157\151\156\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto awikkaqmmuqkukma; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); awikkaqmmuqkukma: if ($ymyueyaumiqiuaqa <= 0) { goto uckeuuaqimqamuyc; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\163\x20\104\x61\x79", "\x25\163\40\104\141\171\163", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($ymyueyaumiqiuaqa)), ["\143\154\141\x73\x73" => "\164\145\170\x74\x2d\163\165\143\x63\x65\163\163"]); goto mieeugiewckceagc; uckeuuaqimqamuyc: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\105\x78\x70\151\162\145\x64", PR__MDL__OPTIMIZATION), ["\x63\x6c\141\x73\163" => "\x74\x65\x78\164\x2d\x64\x61\156\x67\145\162"]); mieeugiewckceagc: $cesmwwwcymckqaku = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[self::eoigaocgcaekssuw][self::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[self::mayesweykoooyugy][self::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[self::mayesweykoooyugy][self::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([self::squoamkioomemiyi => self::mayesweykoooyugy, [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::kumuoysauoagaiiy, self::ciyoccqkiamemcmm => self::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto uqkqmseoeemyaqck; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\x6f\40\x50\165\162\143\150\x61\163\x65", PR__MDL__OPTIMIZATION); goto cceyoumkiicaguio; uqkqmseoeemyaqck: $ocsquaqymuwoyisw = $this->msywmyaoqmaegsuy($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::uiwqcumqkgikqyue)[self::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->eciukqcoqmyacwow($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, self::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); cceyoumkiicaguio: $gkeiousaoygaimia = [self::eoigaocgcaekssuw => [self::qescuiwgsyuikume => __("\x53\x75\x62\x73\143\162\x69\160\164\x69\x6f\156\x20\x50\154\141\156", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\x70\x6c\x61\x6e" => [self::qescuiwgsyuikume => __("\123\165\x62\x73\143\162\151\x70\x74\x69\x6f\x6e\40\x50\x6c\x61\x6e", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\x65\162\151\x6f\144" => [self::qescuiwgsyuikume => __("\120\x6c\141\x6e\x20\120\145\x72\151\x6f\x64", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\162\145\155\x61\x69\x6e\137\144\141\171" => [self::qescuiwgsyuikume => __("\x52\x65\x6d\141\x69\156\151\156\x67\40\124\x69\x6d\145", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\143\x6f\x69\x6e\163" => [self::qescuiwgsyuikume => __("\103\x6f\x75\156\x74\x20\x6f\146\40\111\156\151\164\x69\x61\154\40\103\x6f\151\156\163", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($cesmwwwcymckqaku))], "\165\x73\145\144\137\143\x6f\x69\x6e\163" => [self::qescuiwgsyuikume => __("\x55\163\145\144\x20\x43\157\x69\156\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\x65\155\141\x69\x6e\x5f\143\x6f\151\x6e\x73" => [self::qescuiwgsyuikume => __("\122\x65\155\x61\x69\x6e\40\x43\157\x69\x6e\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [self::qescuiwgsyuikume => __("\105\170\x74\162\x61\40\x43\x6f\151\x6e", PR__MDL__OPTIMIZATION), self::qwumqqyuasyskkkc => ["\154\141\x74\x65\x73\x74\x5f\160\x75\x72\143\x68\x61\163\x65\137\143\157\x75\156\x74" => [self::qescuiwgsyuikume => __("\x4c\141\x74\x65\163\164\40\x50\x75\162\143\x68\x61\163\x65\x20\x43\157\165\156\164", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\x6c\141\164\x65\x73\x74\x5f\x70\165\162\x63\x68\x61\163\x65\137\x64\141\164\x65" => [self::qescuiwgsyuikume => __("\114\141\x74\145\163\x74\x20\120\x75\x72\x63\150\x61\163\x65\x20\x44\141\x74\145", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\160\x69\162\141\x74\151\x6f\156" => [self::qescuiwgsyuikume => __("\x45\170\160\151\162\145\x20\x44\141\164\x65", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\x69\164\150\157\x75\x74\40\145\170\x70\151\162\x65\x20\x64\x61\x74\x65", PR__MDL__OPTIMIZATION), ["\143\154\x61\x73\163" => "\164\145\170\164\x2d\x73\x75\x63\x63\x65\x73\x73"])], "\x63\157\151\x6e\x73\x5f\143\x6f\x75\x6e\164" => [self::qescuiwgsyuikume => __("\x41\154\x6c\x20\x43\x6f\x69\x6e\163\40\x43\x6f\165\x6e\x74", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy($yeyequgieweqoume))], "\x75\x73\145\144\x5f\x63\x6f\x69\156\x73" => [self::qescuiwgsyuikume => __("\x55\163\x65\x64\x20\x43\157\151\x6e\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\145\155\141\x69\156\137\143\x6f\151\x6e\163" => [self::qescuiwgsyuikume => __("\122\x65\155\x61\x69\156\x20\103\x6f\x69\156\x73", PR__MDL__OPTIMIZATION), self::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->msywmyaoqmaegsuy(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][self::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[self::qwumqqyuasyskkkc], ["\x74\x61\x62\x6c\x65\x5f\141\164\164\x72\x73" => ["\143\x6c\x61\x73\x73" => "\x6d\x62\x2d\60\40\164\x61\x62\x6c\145\40\x74\x61\142\154\x65\x2d\x62\x6f\x72\x64\x65\162\154\145\x73\x73"], "\x74\144\x5f\x61\x74\x74\x72\163" => ["\x63\x6c\141\163\163" => "\x70\170\55\x30\40\160\171\x2d\62"], "\x6c\141\x73\x74\x5f\164\144\x5f\x61\164\164\162\x73" => ["\x63\x6c\141\x73\x73" => "\x70\170\x2d\60\40\x70\x79\x2d\62\x20\x66\x6f\156\164\55\x77\145\x69\147\150\x74\x2d\142\157\x6c\144\x20\x74\145\x78\x74\55\162\x69\147\x68\x74"]]); yuiouamaogkkqmck: } yayykakkyeoieicm: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto mmwqwowqcaseyyki; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); mmwqwowqcaseyyki: $qookweymeqawmcwo = ["\x6c\151\x73\x74\x5f\x68\x74\155\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\165\162\143\150\x61\163\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\157\162\x74\x2f\160\165\x72\143\x68\x61\x73\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\151\x73\164\137\150\164\x6d\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\x61\x67\x65\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\x70\x6f\x72\164\57\165\163\x61\147\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis))) { goto wsckacayikksiswo; } $ccowyogiqwikkkie[] = self::eoeewcigeywcquis; wsckacayikksiswo: if (!(LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi))) { goto qiawociayswicugw; } $ccowyogiqwikkkie[] = self::esoamusawucumuew; qiawociayswicugw: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(self::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto kkacggiosquqagew; } $ywmkwiwkosakssii = [self::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto ngagwiymmmycgscu; } $ywmkwiwkosakssii[self::ausqeuugegoygouq] = 4; ngagwiymmmycgscu: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto qimomesqamyyicmo; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\151\x65\x77\40\164\x68\145\x20\x46\x75\x6c\x6c\x20\122\x65\x70\x6f\162\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\x65\x67\x6d\x65\x6e\164" => "{$ymqmyyeuycgmigyo}\x5f\162\145\160\x6f\162\164"], $eeamcawaiqocomwy), ["\x63\x6c\141\163\163" => "\x70\x72\x2d\x62\x74\156\x20\142\x74\x6e\55\x70\162\151\x6d\141\162\171\x20\142\x74\x6e\x2d\141\143\164\151\157\156"]); qimomesqamyyicmo: kkacggiosquqagew: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto qkwckeqowgaokkuy; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case self::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto cooeoemccqiyewks; case self::esoamusawucumuew: $uymsgmyyeikucgae = "\167\x65\142\x5f\166\x69\164\141\x6c"; goto cooeoemccqiyewks; } qcceyyqiuiqcyqqm: cooeoemccqiyewks: if (!$uymsgmyyeikucgae) { goto ssesmiwwmsayksum; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\x75\163\141\147\x65", 0); ssesmiwwmsayksum: aescssauecumgwso: } augqweqsqioesmim: qkwckeqowgaokkuy: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto sgkwaiuukkaqyqki; } $nsmgceoqaqogqmuw = __("\x54\150\145\162\145\x20\x69\x73\40\x6e\157\164\x20\144\x61\x74\141\40\x74\157\x20\x73\150\157\167\x20\171\157\x75\x2c\40\x70\x6c\x65\x61\x73\145\40\162\145\x66\x72\145\x73\x68\40\160\141\x67\x65\40\x6f\x72\x20\x63\x6f\156\164\141\x63\164\40\165\x73\x2e", PR__MDL__OPTIMIZATION); goto emagssesowicacoa; sgkwaiuukkaqyqki: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\160\154\141\156\x5f\151\x64")))) { goto gwksywaoeowkesei; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto bagkewioewygysea; } $guacamgosccsckmq = [self::eqewsqmqmsiocaeg => true, self::qescuiwgsyuikume => __("\x59\157\165\162\40\x53\165\x62\x73\x63\162\x69\160\164\x69\157\x6e", PR__MDL__OPTIMIZATION)]; goto mgieeyuyuoeccaog; bagkewioewygysea: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\x77\x65\x62\x5f\x76\151\164\141\154\x5f\x75\163\x61\x67\145", "\143\x72\151\x74\x69\143\141\154\137\143\163\163\x5f\165\163\x61\147\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto sykuuisikqcwuaqu; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto kqkymieyyqaoeymw; sykuuisikqcwuaqu: gqyyccceswkqcmaa: } kqkymieyyqaoeymw: if ($ycqsugugqomewkke) { goto mquyemuqcqeassqc; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\x25\x73\40\x28\x25\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] ?? '', __("\x59\157\165\x72\40\x53\x75\142\163\143\162\x69\x70\164\151\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::eqewsqmqmsiocaeg] = true; goto weiaigyyigkusucy; mquyemuqcqeassqc: $guacamgosccsckmq[self::qescuiwgsyuikume] = sprintf("\x25\x73\40\50\x25\163\51", $guacamgosccsckmq[self::qescuiwgsyuikume], __("\131\x6f\165\x72\x20\x53\x75\x62\163\143\162\151\x70\x74\151\157\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume] = sprintf("\x25\163\40\50\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][self::qescuiwgsyuikume], __("\116\x65\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[self::eqewsqmqmsiocaeg] = true; weiaigyyigkusucy: mgieeyuyuoeccaog: if (!$guacamgosccsckmq) { goto amgsicqmemeuuaem; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); amgsicqmemeuuaem: gwksywaoeowkesei: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\145\162\166\x69\x63\145\137\143\x6f\163\x74\163", ["\x70\154\141\156\163" => $kekgkgqeyesmkywu, "\155\x65\164\x72\151\143\x73" => ["\143\162\x69\x74\151\143\141\x6c\x5f\x63\x73\x73" => __("\103\162\x69\x74\x69\143\x61\154\x20\x43\123\x53", PR__MDL__OPTIMIZATION), "\167\x65\142\x5f\166\x69\x74\x61\x6c" => __("\x49\155\160\162\157\166\145\40\114\103\120", PR__MDL__OPTIMIZATION)], "\143\157\151\x6e\137\x6d\141\163\x6b" => __("\x25\x73\x20\143\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), "\163\x75\x62\163\x63\162\x69\160\x74\x69\157\x6e\137\160\154\x61\156\x73\x5f\x74\x69\164\x6c\x65" => __("\123\165\142\x73\143\162\x69\x70\x74\x69\157\156\x20\x50\154\141\x6e\x73", PR__MDL__OPTIMIZATION)]); emagssesowicacoa: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([self::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
