<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693fe2664             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; class Pattern extends Common { use SubscriptionEngineTrait; const iycqiaygcgwiwcck = 'filter_type'; const gyiwoemkciiwikiq = 'date_archive'; const auccksiwkkmwyiyi = 'product_type'; const aisoicwicqkswumu = 'author_archive'; const ceuoiwiqaosoyqwm = 'candidate_link'; const cygiymoyaceiaawg = 'candidate_page'; const mqksqgekwiqkmoyk = 'post_types_archive'; const aamkemicmoayoksy = 'product_image_type'; const skqkgucqggaicigu = 'taxonomies_archive'; const imwmyummwsoioqgk = 'candidate_page_link'; public function register() { $this->saemoowcasogykak(IconInterface::cgaumaacsaeauwqy)->guiaswksukmgageq(__('Pattern', PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__('Patterns', PR__MDL__OPTIMIZATION)); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq, [Constants::kmkiaoimmqayiegg => ['widefat', 'fixed', 'distinct-status'], Constants::yiuwgggacagyeqmo => 8]); $this->swsugiuyesaiqucu([Constants::ucoiewcoucauqwko => __('Terms', PR__MDL__OPTIMIZATION), Constants::qgmuskygocwmouos => __('Posts', PR__MDL__OPTIMIZATION), self::iycqiaygcgwiwcck => __('Filter Type', PR__MDL__OPTIMIZATION), self::usoeisyyakwkuyoy => __('Special Page', PR__MDL__OPTIMIZATION), self::gyiwoemkciiwikiq => __('Date Archive', PR__MDL__OPTIMIZATION), Constants::gmmygyiecgmggaam => __('Taxonomy', PR__MDL__OPTIMIZATION), self::aisoicwicqkswumu => __('Author Archive', PR__MDL__OPTIMIZATION), Constants::uouymeyqasaeckso => __('Post Type', PR__MDL__OPTIMIZATION), self::cygiymoyaceiaawg => __('Candidate Page', PR__MDL__OPTIMIZATION), self::ceuoiwiqaosoyqwm => __('Candidate Link', PR__MDL__OPTIMIZATION), Constants::emcyuiagkcgsckma => __('Taxonomies', PR__MDL__OPTIMIZATION), Constants::yyoaeaaaquyigiim => __('Post Types', PR__MDL__OPTIMIZATION)]); $this->swsaakqseuaacagq(Constants::kasgeoiieeaeekiy, [$this, 'scmmymqkoyckgkam'])->swsaakqseuaacagq(Constants::cyqqqmqasqoasmwu, [$this, 'qmwyaiyecuigmyas'])->swsaakqseuaacagq(Constants::qukociwggmsusagw, [$this, 'msekaqwyeaoqciom'])->swsaakqseuaacagq(Constants::myyyuesisgaiekog, [$this, 'iewooiycygmskige'])->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, 'yeuyyckseoiokmmm']); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::qescuiwgsyuikume)->aguakyuusmksagai()->gswweykyogmsyawy(__('Pattern Name', PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Status', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, Constants::eqewsqmqmsiocaeg, __('Active', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::uucoeqmmykkwsmqc, __('Inactive', PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(Constants::uucoeqmmykkwsmqc)->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(self::hwawamsmicyywemy)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Cache Status', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::essowykmgcasaaok, __('Cached', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, Constants::comsocymaesugswq, __('Not Cached', PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(Constants::comsocymaesugswq)->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->eyygsasuqmommkua(Constants::uouymeyqasaeckso)->kesomeowemmyygey(1, Constants::uouymeyqasaeckso, __('Post Type', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, self::usoeisyyakwkuyoy, __('Special Pages', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(3, Constants::mswmgkkakuooukme, __('Archives', PR__MDL__OPTIMIZATION))->gswweykyogmsyawy(__('Type', PR__MDL__OPTIMIZATION))->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig) { $gaeqamemwmwsyukm = Page::symcgieuakksimmu()->iekyeyicoyyawomk()->ieieyoeqmmeysauc(Page::ewyamgkooeqiecwg, $this->mwyqswsaeeewsosm($mksyucucyswaukig)); return sprintf('%s (%s)', $this->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $eqgoocgaqwqcimie), sprintf(__('%s Pages', PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm))); }))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(Constants::egukegmcemkeegqq)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Elected Pages', PR__MDL__OPTIMIZATION))->ckgquisaimmgwuyu(Page::class))->cquokmemekqqywgi($eqwoegegiamegqsm->qsqocqioeeqooquq('pattern_cache')->gswweykyogmsyawy(__('Pattern Cache', PR__MDL__OPTIMIZATION))->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig) { return $this->wkagassgcaqeosio()->voqagyawicswcaau($this->mwyqswsaeeewsosm($mksyucucyswaukig), 'cache', false, ['class' => 'pattern-cache']); }))->cquokmemekqqywgi($eqwoegegiamegqsm->qsqocqioeeqooquq('latest_run_status')->gswweykyogmsyawy(__('Latest Run Status', PR__MDL__OPTIMIZATION))->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig) { return $this->wkagassgcaqeosio()->voqagyawicswcaau($this->mwyqswsaeeewsosm($mksyucucyswaukig), 'latest_run', false, ['class' => 'latest-run-status']); }))->cquokmemekqqywgi($eqwoegegiamegqsm->qsqocqioeeqooquq('elected_pages_cache')->gswweykyogmsyawy(__('Elected Pages Cache', PR__MDL__OPTIMIZATION))->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig) { return $this->wkagassgcaqeosio()->voqagyawicswcaau($this->mwyqswsaeeewsosm($mksyucucyswaukig), 'pages_cache', false, ['class' => 'target-pages-cache']); })); parent::uwmqacgewuauagai(); } private function mkmcygsqaguiqcyu() : array { return [Constants::ALL => __('All Pages', PR__MDL__OPTIMIZATION), Constants::ccyeycyyykwuymsy => __('All except this', PR__MDL__OPTIMIZATION), Constants::ackcaikowcokggsc => __('Just these', PR__MDL__OPTIMIZATION), Constants::gmmygyiecgmggaam => __('Connected to Taxonomy', PR__MDL__OPTIMIZATION), Constants::suaucuoeagwokuwo => __('Remain Pages', PR__MDL__OPTIMIZATION)]; } public function aoqwywcqmoqaukkq() { $qgeeqyucwycemwmo = $this->uqeoyqiwywwmsiew(Constants::squoamkioomemiyi)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs); if (!$this->caokeucsksukesyo()->essaugkeosgskqme()->kyiokwokcqqmgicy()) { unset($qgeeqyucwycemwmo[Constants::sawgakmckeewkuwe]); } $yeeqisaoeuyaqkug = [Constants::wwoeeogswkgeqack => __('Home Page', PR__MDL__OPTIMIZATION) . ' (home.php)', Constants::yayciqueeakqwese => __('Search Page', PR__MDL__OPTIMIZATION) . ' (search.php)', Constants::skoigciaygmyqkmi => sprintf(__('%s Page', PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(404)) . ' (404.php)']; $ggoggagguoeeoaiw = $this->mkmcygsqaguiqcyu(); $wamcomkuwysqgwgk = __('Posts %s Archive', PR__MDL__OPTIMIZATION); $ooesyuqosokuwwou = [Constants::amkimecwigskuwwu => sprintf($wamcomkuwysqgwgk, __('Yearly', PR__MDL__OPTIMIZATION)), Constants::kccekmguugamiusg => sprintf($wamcomkuwysqgwgk, __('Monthly', PR__MDL__OPTIMIZATION)), Constants::wmasmcgmyeoaisoa => sprintf($wamcomkuwysqgwgk, __('Daily', PR__MDL__OPTIMIZATION))]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); if (!$uuwwyaeymswgsgsi->weusokmcememmoec()) { unset($yeeqisaoeuyaqkug[Constants::wwoeeogswkgeqack]); } $sciomagaqmgggsiu = $cskucqcumqsyimye->mwyawsooaimmcwiu(); $seyqqsmuaiegkeeq = $mqeowykqcggsieya->mwyawsooaimmcwiu(); $eweacwkiwkewisye = []; $owaecssgesayiumy = []; $oqmmiqukeysuumqw = []; $eoeygqmcieakwygm = ['elementor_library', 'e-floating-buttons', Constants::cqycgsyykemiygou, Constants::mskugisegsqmcqkk]; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg => $pkyyagewkiyckmwy) { if (in_array($useksmwkuswkwcqg, $eoeygqmcieakwygm, true)) { unset($sciomagaqmgggsiu[$useksmwkuswkwcqg]); continue; } if ($cskucqcumqsyimye->auiemgkycsemicim($useksmwkuswkwcqg)) { if (Constants::mswoacegomcucaik === $useksmwkuswkwcqg && empty($uuwwyaeymswgsgsi->qqqooiyuyqmyuwqi())) { continue; } $owaecssgesayiumy[$useksmwkuswkwcqg] = sprintf(__('%s Archive Page', PR__MDL__OPTIMIZATION), $pkyyagewkiyckmwy); } } $makgmamaqqswcegi = ['product_shipping_class']; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $pkyyagewkiyckmwy) { if (!in_array($kesssewsiegssiya, $makgmamaqqswcegi, true) && $mqeowykqcggsieya->cekoogweeooasayu($kesssewsiegssiya)) { $oqmmiqukeysuumqw[$kesssewsiegssiya] = sprintf(__('List of Posts for each %s', PR__MDL__OPTIMIZATION), $mqeowykqcggsieya->uikgwcuascgeissw($kesssewsiegssiya)); $eweacwkiwkewisye[$kesssewsiegssiya] = $mqeowykqcggsieya->uikgwcuascgeissw($kesssewsiegssiya); } } $this->kiekqeqiycyoisai(Constants::uouymeyqasaeckso, $qgeeqyucwycemwmo, $sciomagaqmgggsiu, Constants::uouymeyqasaeckso); $ycqeoyygamquseyg = $this->kogsogqciosecaoa($sciomagaqmgggsiu, $eweacwkiwkewisye); $suesgicaukkigkaw = $this->ymuyyammmioagwqg($sciomagaqmgggsiu, $eweacwkiwkewisye); $this->kiekqeqiycyoisai(self::usoeisyyakwkuyoy, $qgeeqyucwycemwmo, $yeeqisaoeuyaqkug); $cuykuakucaamkygg = $this->kiekqeqiycyoisai(Constants::mswmgkkakuooukme, $qgeeqyucwycemwmo, $owaecssgesayiumy, Constants::yyoaeaaaquyigiim, false); $cuykuakucaamkygg = $this->kiekqeqiycyoisai(Constants::mswmgkkakuooukme, $qgeeqyucwycemwmo, $oqmmiqukeysuumqw, Constants::emcyuiagkcgsckma, false) && $cuykuakucaamkygg; $cuykuakucaamkygg = $this->kiekqeqiycyoisai(Constants::mswmgkkakuooukme, $qgeeqyucwycemwmo, $ooesyuqosokuwwou, self::gyiwoemkciiwikiq, false) && $cuykuakucaamkygg; $wseecgagoyqocwem = $this->kiekqeqiycyoisai(Constants::mswmgkkakuooukme, $qgeeqyucwycemwmo, $oycqascmoqssuigq, self::aisoicwicqkswumu, $cuykuakucaamkygg); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->eumecwmqmukqgyea()->gucwmccyimoagwcm(sprintf(__('Write a descriptive name for this pattern, like %s or %s', PR__MDL__OPTIMIZATION), $swqimwqeweekeusq->ciuuiyckmsygceis(__('All Posts', PR__MDL__OPTIMIZATION)), $swqimwqeweekeusq->ciuuiyckmsygceis(__('Categories and Tags', PR__MDL__OPTIMIZATION)))))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->eumecwmqmukqgyea()->acauweqyyugwisqc($qgeeqyucwycemwmo)->eyygsasuqmommkua(Constants::uouymeyqasaeckso)->qyucewwiggkyeaso(Constants::uouymeyqasaeckso, [Constants::uouymeyqasaeckso, self::iycqiaygcgwiwcck])->qyucewwiggkyeaso(self::usoeisyyakwkuyoy, self::usoeisyyakwkuyoy)->qyucewwiggkyeaso(Constants::mswmgkkakuooukme, [self::mqksqgekwiqkmoyk, self::skqkgucqggaicigu, self::gyiwoemkciiwikiq, self::aisoicwicqkswumu]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::uouymeyqasaeckso)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Post Type', PR__MDL__OPTIMIZATION))->acauweqyyugwisqc($sciomagaqmgggsiu)->ykeewiooiammwoko($ycqeoyygamquseyg)->ykeewiooiammwoko($suesgicaukkigkaw)->qyucewwiggkyeaso(Constants::oguseymmyyoyaako, [self::auccksiwkkmwyiyi, self::aamkemicmoayoksy]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->amgigaqagmiuoemu(self::mqksqgekwiqkmoyk)->gswweykyogmsyawy(__('Post Types Archive', PR__MDL__OPTIMIZATION))->acauweqyyugwisqc($owaecssgesayiumy)->ucmqmyecakecwkks(Constants::yyoaeaaaquyigiim)->wywmmeyauqkeskeq(!empty($owaecssgesayiumy)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->amgigaqagmiuoemu(self::skqkgucqggaicigu)->gswweykyogmsyawy(__('Taxonomies Archive', PR__MDL__OPTIMIZATION))->acauweqyyugwisqc($oqmmiqukeysuumqw)->ucmqmyecakecwkks(Constants::emcyuiagkcgsckma))->mkksewyosgeumwsa($uuyucgkyusckoaeq->amgigaqagmiuoemu(self::gyiwoemkciiwikiq)->gswweykyogmsyawy(__('Date Archive', PR__MDL__OPTIMIZATION))->acauweqyyugwisqc($ooesyuqosokuwwou))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::aisoicwicqkswumu)->oykaosmaegqwmoga($wseecgagoyqocwem, true)->gswweykyogmsyawy(__('Author Archive', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('List of articles related to each author.', PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::usoeisyyakwkuyoy)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Special Page', PR__MDL__OPTIMIZATION))->acauweqyyugwisqc($yeeqisaoeuyaqkug)->eyygsasuqmommkua(Constants::yayciqueeakqwese))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::iycqiaygcgwiwcck)->eumecwmqmukqgyea()->acauweqyyugwisqc($ggoggagguoeeoaiw)->gswweykyogmsyawy(__('Posts Filter Type', PR__MDL__OPTIMIZATION))->qyucewwiggkyeaso([Constants::ackcaikowcokggsc, Constants::ccyeycyyykwuymsy], Constants::qgmuskygocwmouos)->qyucewwiggkyeaso(Constants::gmmygyiecgmggaam, [Constants::gmmygyiecgmggaam, Constants::ucoiewcoucauqwko]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::qgmuskygocwmouos)->ukqywcsoogkyoaoa()->oikgogcweiiaocka()->gswweykyogmsyawy(__('Posts Filter', PR__MDL__OPTIMIZATION))->mkmssscwmeekwgqo()->yycesgsucecsmqcm(Constants::uouymeyqasaeckso, 'data-type'))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::gmmygyiecgmggaam)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Taxonomy', PR__MDL__OPTIMIZATION))->acauweqyyugwisqc($eweacwkiwkewisye))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ucoiewcoucauqwko)->ikimooaieasgmeak()->oikgogcweiiaocka()->gswweykyogmsyawy(__('Taxonomy Terms', PR__MDL__OPTIMIZATION))->mkmssscwmeekwgqo()->yycesgsucecsmqcm(Constants::gmmygyiecgmggaam, 'data-type')); } private function oykiicaueikekgyc(array $cmqeouisgweqguee, string $ymaogssqccumcyqa) : array { $qsqwqsymmqeoqwcu = []; foreach ($cmqeouisgweqguee as $uusmaiomayssaecw => $qiouiwasaauyaaue) { $ceoeaqqumsgsceoe = []; foreach ($qiouiwasaauyaaue as $omkysikckkcieckq => $eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $ceoeaqqumsgsceoe[] = $omkysikckkcieckq; } } $qsqwqsymmqeoqwcu[] = [Constants::ykqyicwaggyuuuwo => $uusmaiomayssaecw, Constants::ymckmcsiymwqucoq => [$ymaogssqccumcyqa => $ceoeaqqumsgsceoe]]; } return $qsqwqsymmqeoqwcu; } public function ymuyyammmioagwqg($sciomagaqmgggsiu, $seyqqsmuaiegkeeq) : array { $cmqeouisgweqguee = []; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg => $pkyyagewkiyckmwy) { $ikqasgququoqeock = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs($useksmwkuswkwcqg); foreach ($ikqasgququoqeock as $kesssewsiegssiya) { if (isset($seyqqsmuaiegkeeq[$kesssewsiegssiya])) { $cmqeouisgweqguee[$useksmwkuswkwcqg][$kesssewsiegssiya] = true; } } } return $this->oykiicaueikekgyc($cmqeouisgweqguee, Constants::gmmygyiecgmggaam); } public function kogsogqciosecaoa($sciomagaqmgggsiu, $seyqqsmuaiegkeeq) : array { $cmqeouisgweqguee = []; $aamoyweesweggqkm = $sciomagaqmgggsiu; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg => $yowggsumsmeoeiqc) { $ikqasgququoqeock = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->qgckgkwskmsomoqs($useksmwkuswkwcqg); $cmqeouisgweqguee[$useksmwkuswkwcqg][Constants::gmmygyiecgmggaam] = false; foreach ($ikqasgququoqeock as $kesssewsiegssiya) { if (isset($seyqqsmuaiegkeeq[$kesssewsiegssiya])) { $cmqeouisgweqguee[$useksmwkuswkwcqg][Constants::gmmygyiecgmggaam] = true; break; } } } if ($cwiqececuoeacuaa = $this->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::squoamkioomemiyi, Constants::uouymeyqasaeckso)) { $wqyuyweoqgsgsmuq = $this->qyeguewwsmosqcwc(); foreach ($cwiqececuoeacuaa as $eouekqmooogkoqoo) { $useksmwkuswkwcqg = $this->waecsyqmwascmqoa($eouekqmooogkoqoo, Constants::uouymeyqasaeckso); if ($useksmwkuswkwcqg) { $ocykusouawesukco = $this->waecsyqmwascmqoa($eouekqmooogkoqoo, self::iycqiaygcgwiwcck); $sameaqkagyqomooq = $this->mwyqswsaeeewsosm($eouekqmooogkoqoo); if ($sameaqkagyqomooq === (int) $wqyuyweoqgsgsmuq) { $cmqeouisgweqguee[$useksmwkuswkwcqg][$ocykusouawesukco] = true; } unset($aamoyweesweggqkm[$useksmwkuswkwcqg]); switch ($ocykusouawesukco) { case Constants::ccyeycyyykwuymsy: case Constants::ackcaikowcokggsc: case Constants::gmmygyiecgmggaam: if (!isset($cmqeouisgweqguee[$useksmwkuswkwcqg][Constants::ackcaikowcokggsc])) { $cmqeouisgweqguee[$useksmwkuswkwcqg][Constants::ackcaikowcokggsc] = true; } if (!isset($cmqeouisgweqguee[$useksmwkuswkwcqg][Constants::suaucuoeagwokuwo])) { $cmqeouisgweqguee[$useksmwkuswkwcqg][Constants::suaucuoeagwokuwo] = true; } break; } } } } $ggoggagguoeeoaiw = $this->mkmcygsqaguiqcyu(); foreach ($aamoyweesweggqkm as $acuiawmgscssysso => $pkyyagewkiyckmwy) { foreach ($ggoggagguoeeoaiw as $ocykusouawesukco => $meqocwsecsywiiqs) { if (!isset($cmqeouisgweqguee[$acuiawmgscssysso][$ocykusouawesukco])) { $cmqeouisgweqguee[$acuiawmgscssysso][$ocykusouawesukco] = true; } } } return $this->oykiicaueikekgyc($cmqeouisgweqguee, self::iycqiaygcgwiwcck); } public function kiekqeqiycyoisai(string $sqeykgyoooqysmca, &$qgeeqyucwycemwmo, &$iwgkkymcucoceyqu, string $gseimueeswaquokk = '', bool $qgcuyeyueeakaqic = true) : bool { $oykaosmaegqwmoga = false; if ($cwiqececuoeacuaa = $this->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::squoamkioomemiyi, $sqeykgyoooqysmca)) { $qqomumygoacsmsie = $this->hkwssiimkcysaiyo(); $wqyuyweoqgsgsmuq = $this->qyeguewwsmosqcwc(); $qeoqkiisysuqyeqw = false; $wwkcggqaewaaqykk = 0; foreach ($cwiqececuoeacuaa as $eouekqmooogkoqoo) { $sameaqkagyqomooq = $this->mwyqswsaeeewsosm($eouekqmooogkoqoo); if ($qqomumygoacsmsie === Constants::awysmmukegasimmq && (int) $wqyuyweoqgsgsmuq === $sameaqkagyqomooq) { $qeoqkiisysuqyeqw = $this->waecsyqmwascmqoa($eouekqmooogkoqoo, $gseimueeswaquokk ?: $sqeykgyoooqysmca, false); } switch ($sqeykgyoooqysmca) { case Constants::uouymeyqasaeckso: $useksmwkuswkwcqg = $this->waecsyqmwascmqoa($eouekqmooogkoqoo, Constants::uouymeyqasaeckso); if ($useksmwkuswkwcqg && $qeoqkiisysuqyeqw !== $useksmwkuswkwcqg) { $ocykusouawesukco = $this->waecsyqmwascmqoa($eouekqmooogkoqoo, self::iycqiaygcgwiwcck); switch ($ocykusouawesukco) { case Constants::ALL: case Constants::suaucuoeagwokuwo: if ($omkysikckkcieckq = $iwgkkymcucoceyqu[$useksmwkuswkwcqg] ?? false) { $iwgkkymcucoceyqu[$useksmwkuswkwcqg] = [Constants::uissasisiuymwsmu => $omkysikckkcieckq, Constants::wuasowoqaccigqqu => true]; $wwkcggqaewaaqykk++; } break; } } break; case self::usoeisyyakwkuyoy: if (!$qeoqkiisysuqyeqw) { if ($cmimegkacscikwui = $this->waecsyqmwascmqoa($eouekqmooogkoqoo, self::usoeisyyakwkuyoy)) { if ($omkysikckkcieckq = $iwgkkymcucoceyqu[$cmimegkacscikwui] ?? false) { $iwgkkymcucoceyqu[$cmimegkacscikwui] = [Constants::uissasisiuymwsmu => $omkysikckkcieckq, Constants::wuasowoqaccigqqu => true]; $wwkcggqaewaaqykk++; } } } break; case Constants::mswmgkkakuooukme: switch ($gseimueeswaquokk) { case Constants::emcyuiagkcgsckma: case Constants::yyoaeaaaquyigiim: case self::gyiwoemkciiwikiq: $ygggcuyciakgyiqi = $this->waecsyqmwascmqoa($eouekqmooogkoqoo, $gseimueeswaquokk, []); foreach ($ygggcuyciakgyiqi as $myyccyuumcscsagc => $eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie === Constants::ON && !isset($qeoqkiisysuqyeqw[$myyccyuumcscsagc])) { if ($omkysikckkcieckq = $iwgkkymcucoceyqu[$myyccyuumcscsagc] ?? false) { $iwgkkymcucoceyqu[$myyccyuumcscsagc] = [Constants::uissasisiuymwsmu => $omkysikckkcieckq, Constants::wuasowoqaccigqqu => true]; $wwkcggqaewaaqykk++; } } } break; case self::aisoicwicqkswumu: if (!$qeoqkiisysuqyeqw && $this->waecsyqmwascmqoa($eouekqmooogkoqoo, self::aisoicwicqkswumu)) { $oykaosmaegqwmoga = true; } break; } break; } } if ($qeoqkiisysuqyeqw) { if (is_array($qeoqkiisysuqyeqw)) { foreach ($qeoqkiisysuqyeqw as $meuuwyqqsyigqawm) { $sqaasqyiaygmugmk = $iwgkkymcucoceyqu[$meuuwyqqsyigqawm] ?? null; if ($sqaasqyiaygmugmk && isset($sqaasqyiaygmugmk[Constants::wuasowoqaccigqqu])) { $iwgkkymcucoceyqu[$meuuwyqqsyigqawm][Constants::wuasowoqaccigqqu] = false; } } } else { if (is_string($qeoqkiisysuqyeqw)) { if (isset($iwgkkymcucoceyqu[$qeoqkiisysuqyeqw])) { if (is_string($iwgkkymcucoceyqu[$qeoqkiisysuqyeqw])) { $iwgkkymcucoceyqu[$qeoqkiisysuqyeqw] = [Constants::uissasisiuymwsmu => $iwgkkymcucoceyqu[$qeoqkiisysuqyeqw]]; } $iwgkkymcucoceyqu[$qeoqkiisysuqyeqw][Constants::wuasowoqaccigqqu] = false; } } } } if (!$oykaosmaegqwmoga && is_array($iwgkkymcucoceyqu) && count($iwgkkymcucoceyqu) === $wwkcggqaewaaqykk) { $oykaosmaegqwmoga = true; } } if ($oykaosmaegqwmoga && $qgcuyeyueeakaqic && is_string($qgeeqyucwycemwmo[$sqeykgyoooqysmca])) { $qgeeqyucwycemwmo[$sqeykgyoooqysmca] = [Constants::uissasisiuymwsmu => $qgeeqyucwycemwmo[$sqeykgyoooqysmca], Constants::wuasowoqaccigqqu => true]; } return $oykaosmaegqwmoga; } public function scmmymqkoyckgkam($aokagokqyuysuksm, $icwicymcioeyeyek = [], $siquossayskcwkea = []) { if (Constants::eqewsqmqmsiocaeg === $this->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $siquossayskcwkea) || $this->wuwcyeequuwaeias($siquossayskcwkea)) { $this->wkagassgcaqeosio()->iwuykycuaameiqes($siquossayskcwkea); } } public function qmwyaiyecuigmyas($ccowyogiqwikkkie, $cguqsiecqkeekskq, $aokagokqyuysuksm = null, $igqsaukqcqscimok = null) { if ($cguqsiecqkeekskq === Constants::mqkiiimeocmcyecq) { unset($ccowyogiqwikkkie[Constants::ieioeisgwcgysukw], $ccowyogiqwikkkie[Constants::kyccsamqmuwysaws]); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if (!$this->wuwcyeequuwaeias($aokagokqyuysuksm)) { $ccowyogiqwikkkie[Constants::gqgwsyegwkicuomu] = $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::PREFIX => "setup_action_{$aokagokqyuysuksm}", Constants::qescuiwgsyuikume => __('Setup Pattern', PR__MDL__OPTIMIZATION), Constants::ssmskyqgcmeiayco => $this->wcgieoyucmemgcss($igqsaukqcqscimok, Constants::gqgwsyegwkicuomu), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ['class' => 'pr-opt-pattern-setup pr-opt-pattern-optimize pr-btn btn-primary', 'title' => __('Setup', PR__MDL__OPTIMIZATION), 'data-pattern' => $aokagokqyuysuksm]]], __('Setup', PR__MDL__OPTIMIZATION), ['class' => 'pr-opt-pattern-action']); } else { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ccowyogiqwikkkie[self::ccoesaeoiusskiew] = $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => __('Re-Optimize', PR__MDL__OPTIMIZATION), Constants::PREFIX => "re-optimize_pattern_{$aokagokqyuysuksm}", Constants::ssmskyqgcmeiayco => $this->wcgieoyucmemgcss($igqsaukqcqscimok, self::ccoesaeoiusskiew), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, 're-optimize' => ['class' => 'pr-opt-pattern-re-optimize pr-opt-pattern-optimize pr-btn btn-primary', 'title' => __('Re-Optimize', PR__MDL__OPTIMIZATION), 'data-pattern' => $aokagokqyuysuksm]]], __('Re-Optimize', PR__MDL__OPTIMIZATION)); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $ccowyogiqwikkkie['purge_pages_cache'] = $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => __('Purge Pages Cache', PR__MDL__OPTIMIZATION), Constants::PREFIX => "purge_pattern_{$aokagokqyuysuksm}_pages_cache", Constants::ssmskyqgcmeiayco => __('Are you sure about purge cache?', PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__('Preload is enable and after purge cache, regenerate cache file started automatically.', PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, 'purge_pages_cache' => ['class' => 'pr-opt-pattern-purge-pages-cache pr-btn btn-danger', 'title' => __('Purge Pages Cache', PR__MDL__OPTIMIZATION), 'data-pattern' => $aokagokqyuysuksm]]], __('Purge Pages Cache', PR__MDL__OPTIMIZATION)); } if ($this->wkagassgcaqeosio()->iwoekuysekysqmke()) { $ccowyogiqwikkkie['pattern_manual_optimize'] = $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => __('Pattern Manual Optimize', PR__MDL__OPTIMIZATION), Constants::PREFIX => "pattern_{$aokagokqyuysuksm}_manual_optimize", Constants::ssmskyqgcmeiayco => $uuyucgkyusckoaeq->ywoasuyoaicwqqsu([$uuyucgkyusckoaeq->uouyygwcgsmygaee(Constants::qmwqkaeamecekiso)->qsecygiycssgacqs(5)->gswweykyogmsyawy(__('Optimize Content', PR__MDL__OPTIMIZATION))]), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, 'manual_optimize' => ['class' => 'pr-opt-pattern-manual-optimize pr-btn btn-primary', 'title' => __('Optimize', PR__MDL__OPTIMIZATION), 'data-pattern' => $aokagokqyuysuksm]]], __('Pattern Manual Optimize', PR__MDL__OPTIMIZATION)); } } return $ccowyogiqwikkkie; } public function msekaqwyeaoqciom($uwomkgseoiegeume) { switch ($this->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $uwomkgseoiegeume)) { case self::usoeisyyakwkuyoy: $cmimegkacscikwui = $this->waecsyqmwascmqoa($uwomkgseoiegeume, self::usoeisyyakwkuyoy); if (!$cmimegkacscikwui) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__('Please select a special page.', PR__MDL__OPTIMIZATION)); } else { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if ($this->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, self::usoeisyyakwkuyoy), $eqwoegegiamegqsm->megqywqeuquawkim(self::usoeisyyakwkuyoy, $cmimegkacscikwui)])) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__('This special page already selected in another pattern and you can not select it.', PR__MDL__OPTIMIZATION)); } } break; } } public function yeuyyckseoiokmmm($icwicymcioeyeyek) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($this->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $icwicymcioeyeyek)) { case Constants::uouymeyqasaeckso: unset($icwicymcioeyeyek[self::usoeisyyakwkuyoy], $icwicymcioeyeyek[self::aisoicwicqkswumu]); break; case Constants::mswmgkkakuooukme: case self::usoeisyyakwkuyoy: unset($icwicymcioeyeyek[self::iycqiaygcgwiwcck]); if (isset($icwicymcioeyeyek[self::mqksqgekwiqkmoyk]) && $icwicymcioeyeyek[self::mqksqgekwiqkmoyk]) { $icwicymcioeyeyek[Constants::yyoaeaaaquyigiim] = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::mqksqgekwiqkmoyk); } if (isset($icwicymcioeyeyek[self::skqkgucqggaicigu]) && $icwicymcioeyeyek[self::skqkgucqggaicigu]) { $icwicymcioeyeyek[Constants::emcyuiagkcgsckma] = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::skqkgucqggaicigu); } break; } return $icwicymcioeyeyek; } public function iewooiycygmskige($eaoumsseceiowgsk) { if ($eaoumsseceiowgsk && $this->iekyeyicoyyawomk()->asskucacysemeoiu() > 0) { $eaoumsseceiowgsk->cuomeiwckekemywm(__('Inactive options are matched and selected with previous patterns.', PR__MDL__OPTIMIZATION), Constants::smkwuwawwaqyimcq); } return $eaoumsseceiowgsk; } public function wcgieoyucmemgcss($eouekqmooogkoqoo, string $aiamqeawckcsuaou) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $gaciecykoqycioyu = $this->gcgokmwwiykiomei($eouekqmooogkoqoo, $aiamqeawckcsuaou); $ikgwqyuyckaewsow = []; if (self::ccoesaeoiusskiew === $aiamqeawckcsuaou) { $ikgwqyuyckaewsow[] = $uuyucgkyusckoaeq->yqgagqgesqyuyuqq()->oguessuismosauuu(__('Are you sure about re-optimize page?', PR__MDL__OPTIMIZATION)); } if (Constants::uouymeyqasaeckso === $this->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $eouekqmooogkoqoo)) { $ikgwqyuyckaewsow[] = $uuyucgkyusckoaeq->ymuegqgyuagyucws(self::imwmyummwsoioqgk)->gswweykyogmsyawy(__('Candidate Page Link', PR__MDL__OPTIMIZATION))->aqiccywoiqiskwaw()->xkgcwkwsqysqamic()->wqumaswsiygeowiu()->gucwmccyimoagwcm(sprintf('%s<br>%s', __('The pages of each template must have the same design and layout. In the meantime, some pages with a slight difference have more diverse visual elements and therefore are a more suitable choice as a candidate page for that template.', PR__MDL__OPTIMIZATION), __('If left blank, a random page will be selected from among the elected pages of this template.', PR__MDL__OPTIMIZATION))); $ikgwqyuyckaewsow[] = $uuyucgkyusckoaeq->cwiuiiakukcsaakw(Constants::qakegsaikiimcmkc)->iygyugseyaqwywyg($this->mwyqswsaeeewsosm($eouekqmooogkoqoo)); } $ikgwqyuyckaewsow[] = $uuyucgkyusckoaeq->yqgagqgesqyuyuqq()->gswweykyogmsyawy($this->caokeucsksukesyo()->wgqqgewcmcemoewo()->kuumcaywkqiasisk($gaciecykoqycioyu, ['td_attrs' => ['class' => 'px-0 pt-0'], 'table_attrs' => ['class' => 'table table-borderless m-0']])); if (is_numeric($gaciecykoqycioyu[Constants::qiyqwyiiwykeccmo])) { $ikgwqyuyckaewsow[] = $uuyucgkyusckoaeq->yqgagqgesqyuyuqq()->gswweykyogmsyawy($this->mosgkcuykegwcwmi($gaciecykoqycioyu[Constants::qiyqwyiiwykeccmo])); } return $uuyucgkyusckoaeq->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); } public function mosgkcuykegwcwmi($gaeqamemwmwsyukm) : string { $cqgoimumaewouews = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm) * 3; return sprintf(__('It may take about %s for all elected pages to reach the maximum speed.', PR__MDL__OPTIMIZATION), $cqgoimumaewouews); } public function gcgokmwwiykiomei($eouekqmooogkoqoo, $aiamqeawckcsuaou) : array { $gaciecykoqycioyu = []; $sqeykgyoooqysmca = $this->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $eouekqmooogkoqoo); $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $sameaqkagyqomooq = $this->mwyqswsaeeewsosm($eouekqmooogkoqoo); $gcemueskwuiggwki = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq); $gaciecykoqycioyu[Constants::sqcsaeqsycmuiiso] = $this->cqscwmqsgomkogoq()->sqequueykkkyoqwc($sameaqkagyqomooq); $gaciecykoqycioyu[Constants::kyakumqgcsaskweq] = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($gcemueskwuiggwki); switch ($aiamqeawckcsuaou) { case Constants::gqgwsyegwkicuomu: case self::ccoesaeoiusskiew: switch ($sqeykgyoooqysmca) { case Constants::uouymeyqasaeckso: case Constants::mswmgkkakuooukme: $gaciecykoqycioyu[Constants::qiyqwyiiwykeccmo] = count($goqqimcssiyagkwy->wegymsqmyauaoqce($eouekqmooogkoqoo, Constants::oyaoekcogwkcekcc)); break; case self::usoeisyyakwkuyoy: $gaciecykoqycioyu[Constants::qiyqwyiiwykeccmo] = __('Unlimited', PR__MDL__OPTIMIZATION); break; } break; } $egsicygikmyqaica = [Constants::qiyqwyiiwykeccmo => [Constants::uissasisiuymwsmu => __('Elected Pages Count', PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => __('%s Pages', PR__MDL__OPTIMIZATION)], Constants::sqcsaeqsycmuiiso => [Constants::uissasisiuymwsmu => __('Setup Cost', PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => __('%s Coins', PR__MDL__OPTIMIZATION)], Constants::kyakumqgcsaskweq => [Constants::uissasisiuymwsmu => __('Setup Time', PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => __('%s Seconds', PR__MDL__OPTIMIZATION)]]; foreach ($gaciecykoqycioyu as $awmkgwkewqigsgsg => $eqgoocgaqwqcimie) { $icwicymcioeyeyek = $egsicygikmyqaica[$awmkgwkewqigsgsg]; if (is_numeric($eqgoocgaqwqcimie)) { $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = sprintf($icwicymcioeyeyek[Constants::ciyoccqkiamemcmm], $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eqgoocgaqwqcimie)); } else { $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; } $gaciecykoqycioyu[$awmkgwkewqigsgsg] = $icwicymcioeyeyek; } return $gaciecykoqycioyu; } public function suuswouyqwqkcgsk($eouekqmooogkoqoo) : bool { return (bool) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'virtual_browser_is_cached', false, $this->mwyqswsaeeewsosm($eouekqmooogkoqoo)); } public function wuwcyeequuwaeias($eouekqmooogkoqoo) : bool { $skqeckgiuieeusoy = true; if (!$this->suuswouyqwqkcgsk($eouekqmooogkoqoo)) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $skqeckgiuieeusoy = Remote::symcgieuakksimmu()->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::eqgewieksoieoqiq, $this->mwyqswsaeeewsosm($eouekqmooogkoqoo)), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::esewkmgyoesiksyw, Constants::qakegsaikiimcmkc), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::uasuowkaguiwoouw)->maqiysyuqmwcqoig(Constants::gumcuumoswwakomq)]); } return $skqeckgiuieeusoy; } public function uiiqeakeuswqomey($uyaimqisayeqocig = 0) : string { $uusmaiomayssaecw = ''; if ($moqewomugocaueis = $this->mwyqswsaeeewsosm($uyaimqisayeqocig)) { $gmigwwwmwemyaayy = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $uusmaiomayssaecw = $this->caokeucsksukesyo()->owgcciayoweymuws()->scramble("{$gmigwwwmwemyaayy}-{$moqewomugocaueis}"); if (!$uusmaiomayssaecw) { $uusmaiomayssaecw = $moqewomugocaueis; } } return $uusmaiomayssaecw; } }
