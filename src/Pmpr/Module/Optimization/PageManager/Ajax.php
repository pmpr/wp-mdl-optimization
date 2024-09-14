<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec8032739             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\157\160\164\151\x6d\151\x7a\145"; const eueyiwccigugisqe = "\x63\x68\145\x63\x6b\137\x6c\151\156\153"; const wwgqqgayyagycysu = "\160\x75\x72\x67\x65\x5f\x63\141\x63\150\145"; const aeksqkkekigwssku = Optimization::kgswyesggeyekgmg . "\x73\145\164\x75\x70\137\160\141\164\164\x65\162\156\137\x61\143\x74\x69\x6f\x6e"; const quuasuseuccsemsw = Optimization::kgswyesggeyekgmg . "\x61\143\x74\151\x76\145\137\x70\x61\x74\x74\x65\x72\156\x5f\x61\x63\164\151\x6f\x6e"; const qskskgmuqiggaqeg = Optimization::kgswyesggeyekgmg . "\x63\150\x65\x63\153\x5f\160\141\x74\x74\x65\162\x6e\137\x72\165\156\x5f\141\143\x74\151\x6f\156"; const kaqawyqaekuookgi = Optimization::kgswyesggeyekgmg . "\160\x61\x67\x65\x73\x5f\x63\141\x63\x68\x65\x5f\163\x74\141\x74\165\163"; const kusgmosaoigiukgi = Optimization::kgswyesggeyekgmg . "\x72\x65\157\x70\x74\151\x6d\151\172\x65\137\160\x61\x74\x74\x65\162\156\x5f\x61\x63\164\x69\x6f\156"; const wegmeawoaymsqkyi = Optimization::kgswyesggeyekgmg . "\144\x65\x61\143\x74\151\x76\141\164\145\x5f\x70\141\x74\164\145\162\x6e\x5f\141\143\164\151\157\x6e"; const maqcykaweqimuomu = Optimization::kgswyesggeyekgmg . "\x63\150\145\143\153\137\x63\x61\x6e\144\151\x64\141\164\145\137\165\x72\x6c\x5f\x61\143\x74\x69\157\x6e"; const ggmmioeoauiyccec = Optimization::kgswyesggeyekgmg . "\x70\x61\147\x65\x73\x5f\x63\141\x63\150\x65\x5f\x70\x72\157\x67\162\x65\x73\x73"; const aikyaygyasegygma = Optimization::kgswyesggeyekgmg . "\160\141\164\x74\145\162\x6e\137\155\x61\156\x75\141\154\x5f\157\x70\164\151\x6d\x69\172\145\137\141\x63\164\151\157\156"; const esiucesqiemeickk = Optimization::kgswyesggeyekgmg . "\160\165\x72\x67\x65\137\160\141\164\164\x65\162\156\137\160\141\147\x65\x73\137\143\x61\x63\x68\x65\x5f\141\143\x74\x69\x6f\156"; const sggmuowkoiiuacig = Optimization::kgswyesggeyekgmg . "\x73\160\x65\x65\144\137\x74\145\x73\x74\137\x6e\x6f\164\137\144\x69\163\x70\141\x63\x68\x61\142\154\145\x5f\x66\x69\x78\x65\x64"; const awqksmkmsquoymem = Optimization::kgswyesggeyekgmg . "\x63\x68\141\156\147\145\x5f\x70\141\x67\145\137\x73\164\x61\164\165\163"; const imigmiemwmuayaca = Optimization::kgswyesggeyekgmg . "\143\x68\141\156\x67\x65\x5f\160\x61\147\x65\137\x69\155\x70\x6f\162\x74\x61\156\x74\137\163\164\x61\164\165\163"; const uyuegiyaymqqkcwa = Optimization::kgswyesggeyekgmg . "\x63\150\x61\x6e\147\145\137\160\141\x67\x65\137\163\160\x65\x65\144\137\164\145\163\164\137\143\141\156\x64\x69\x64\x61\x74\145\x5f\x73\x74\x61\164\x75\x73"; const ccyqqagwskwauoem = ["\x63\x68\x61\x6e\x67\145\x5f\x70\x61\147\x65\x5f\x73\x70\145\145\x64\137\164\145\163\164\x5f\x63\141\156\x64\151\x64\141\164\145\x5f\x73\x74\x61\x74\x75\163" => self::uyuegiyaymqqkcwa, "\143\x68\141\156\x67\145\x5f\160\x61\x67\x65\x5f\151\x6d\160\157\162\164\x61\x6e\164\x5f\163\x74\x61\164\x75\163" => self::imigmiemwmuayaca, "\x70\x75\162\147\x65\137\x70\x61\164\164\145\x72\156\137\160\141\147\145\x73\137\143\141\x63\150\x65" => self::esiucesqiemeickk, "\160\141\x74\164\145\x72\x6e\x5f\155\x61\156\x75\141\x6c\x5f\157\160\x74\x69\x6d\151\172\145" => self::aikyaygyasegygma, "\156\157\x74\x5f\x64\x69\163\160\141\x63\150\x61\x62\x6c\145\x5f\x66\151\170\x65\x64" => self::sggmuowkoiiuacig, "\160\141\147\145\163\137\x63\141\143\150\x65\137\160\162\x6f\147\x72\x65\163\163" => self::ggmmioeoauiyccec, "\143\150\x65\143\x6b\137\143\x61\156\x64\151\x64\x61\164\145\137\154\151\x6e\153" => self::maqcykaweqimuomu, "\x63\x68\x61\x6e\147\145\137\160\141\147\145\137\163\164\141\164\165\163" => self::awqksmkmsquoymem, "\x70\141\147\145\x73\137\x63\141\x63\x68\x65\137\x73\164\141\x74\x75\x73" => self::kaqawyqaekuookgi, "\x64\x65\141\143\164\151\x76\141\x74\x65\x5f\160\141\x74\x74\x65\x72\156" => self::wegmeawoaymsqkyi, "\162\145\x6f\x70\164\x69\x6d\x69\x7a\x65\137\160\141\x74\164\x65\162\156" => self::kusgmosaoigiukgi, "\143\x68\145\143\153\137\x70\x61\x74\x74\x65\x72\156\x5f\162\x75\156" => self::qskskgmuqiggaqeg, "\x61\x63\x74\x69\166\141\x74\145\137\x70\x61\164\164\x65\x72\x6e" => self::quuasuseuccsemsw, "\x73\145\164\165\160\x5f\x70\x61\164\x74\145\162\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\x63\147\x63\x71\155\151\157\153\163\x79\x77\x6b\145\x6b\x61\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\151\x77\167\x6f\x6f\167\x77\x63\163\x63\x73\143\x67\x75\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\167\155\161\141\x73\153\143\x77\141\x6d\151\147\x69\155\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\x67\x71\x75\x63\x79\161\161\x6b\x67\x73\x71\x79\163\141\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\x77\165\x61\161\x6f\x73\155\x71\155\167\155\145\x6f\x69\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\167\x75\167\171\151\141\147\x65\x65\141\x65\157\x79\165\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\153\x61\155\x67\145\161\x6f\x67\157\163\x67\x67\x65\x6f\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\x61\145\155\143\163\x6b\x65\x6d\x67\171\x61\157\141\157\167"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\x71\x77\171\147\x63\147\165\x79\147\165\143\151\167\157\x6b\x75"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\x65\163\x61\161\153\x65\x73\x61\145\x61\x65\x63\157\141\x6f"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\155\x67\x63\145\x6b\161\x65\163\x63\161\x6d\147\143\x6b\155\171"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\x79\x73\x6d\x63\x79\143\153\165\165\145\157\x61\151\141\147"], 10, 0)->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\x67\143\151\x63\145\163\167\147\151\x73\x65\x6b\x69\x63\x67\x69"], 10, 0)->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\157\153\x6b\171\x73\145\x79\145\x79\147\141\x73\145\151\x6f\x71"], 10, 0); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto kymkucucyeoeikim; } $keccaugmemegoimu = __("\131\157\165\x20\x68\141\166\x65\40\156\157\40\160\145\162\155\151\163\x73\x69\x6f\156\x20\164\x6f\x20\x64\x6f\x20\x74\x68\x69\x73\56", PR__MDL__OPTIMIZATION); goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\x70\145\x65\144\40\124\x65\163\164\x20\x66\x75\156\x63\164\151\x6f\156\141\154\x69\x74\171\x20\x66\157\x72\x20\x63\x61\156\x64\151\144\141\164\x65\40\160\141\x67\145\x73\x20\x72\145\163\165\x6d\x65\144\x2e", PR__MDL__OPTIMIZATION); usquiuuyiyqaeyiu: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\x4e\157\x72\155\141\x6c", PR__MDL__OPTIMIZATION), 1 => __("\x49\155\x70\157\x72\164\x61\156\x74", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\104\157\156\164\40\124\x61\x6b\x65\40\x53\160\145\x65\144\40\x54\145\163\x74", PR__MDL__OPTIMIZATION), 1 => __("\x54\141\x6b\x65\40\x53\160\x65\145\x64\40\x54\145\163\x74", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto suqkuqygkkgwyaie; } $keccaugmemegoimu = __("\131\x6f\x75\40\x68\141\x76\145\x20\x6e\x6f\40\x70\145\x72\x6d\x69\x73\163\x69\157\156\40\x74\x6f\40\x64\157\40\164\x68\x69\163\56", PR__MDL__OPTIMIZATION); goto soaccwqimeksgwiw; suqkuqygkkgwyaie: $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { goto gaomwagkcciesyqy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto aegysmeecgcgayyw; gaomwagkcciesyqy: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto uqqaiagaeqgqgaiy; } $keccaugmemegoimu = __("\131\x6f\165\x72\40\x73\165\x62\x6d\151\x73\x73\151\157\x6e\x20\163\x74\141\x74\165\163\x20\151\163\40\156\x6f\164\40\141\x20\x76\141\154\151\144\x20\x73\x74\141\x74\165\x73\x2e", PR__MDL__OPTIMIZATION); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto qicwaskssogcokgm; } $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; goto uguigkcmukuouway; qicwaskssogcokgm: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\120\x61\147\145\40\x73\x74\141\164\x75\163\x20\x63\150\x61\156\147\145\144\x20\164\x6f\40\45\163\40\x73\165\143\143\145\163\x73\146\x75\x6c\x6c\x79\x2e", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x70\165\x72\x67\145\x5f\145\x6c\x65\143\x74\145\x64\x5f\x70\141\147\x65\x5f\x68\164\x6d\x6c\x5f\143\141\143\150\145", $qkcoyiyeuoyyoocy); uguigkcmukuouway: esuiysskoweawsue: aegysmeecgcgayyw: soaccwqimeksgwiw: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(Pattern::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto ueigkucgaucgeimc; } $keccaugmemegoimu = __("\131\157\165\x20\150\x61\x76\x65\40\x6e\157\40\x70\x65\162\x6d\151\x73\x73\151\157\156\40\164\157\x20\144\x6f\x20\164\150\x69\x73\56", PR__MDL__OPTIMIZATION); goto sggawugoykqcmsug; ueigkucgaucgeimc: $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto wgewmqieuamsoayy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\x74\164\x65\162\x6e\x20\x4e\157\x74\x20\106\x6f\x75\x6e\x64", PR__MDL__OPTIMIZATION)); goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto cgiscsqwwgqqaeqi; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x4a\x53\x4f\x4e", PR__MDL__OPTIMIZATION)); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\x69\162\164\x75\141\154\x5f\x62\x72\157\x77\163\145\162\137\143\141\x63\150\x65\x5f\162\x65\x73\165\x6c\164", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\x50\x61\x74\x74\x65\x72\x6e\x20\x64\141\x74\141\40\143\x61\x63\150\x65\x64\x20\163\x75\143\x63\x65\163\x73\x66\165\x6c\154\171\56", PR__MDL__OPTIMIZATION); syiqkaasoueowwui: goto wiysogeqqwgioyka; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\x72\x6f\147\162\145\x73\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto wiysogeqqwgioyka; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto wiysogeqqwgioyka; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto ooeausyowguqicuo; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\145\162\x65\40\151\x73\40\156\157\40\162\145\x6d\157\164\145\x20\162\165\156\x20\146\157\x72\40\x70\141\x74\x74\x65\162\156\x2e", PR__MDL__OPTIMIZATION)); goto egyyiccaeeiooaua; ooeausyowguqicuo: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq)) { goto gkyawqqcmigqgaiq; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\151\162\x74\x75\x61\154\x5f\x62\162\157\x77\x73\x65\x72\x5f\143\x68\x65\143\x6b\x5f\x66\x69\x6e\x69\163\x68\145\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto wmywuusgukmmaams; } if (is_wp_error($sogksuscggsicmac)) { goto ewymsmkkiksgwysk; } if (!$sogksuscggsicmac) { goto giaacoqqqsekcayy; } $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; giaacoqqqsekcayy: goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; cmegwsegsosyqcai: wmywuusgukmmaams: gkyawqqcmigqgaiq: $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\154\141\x74\x65\x73\x74\137\162\x75\x6e" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\x74\145\x73\164\x5f\162\165\156", true) : '', "\x70\141\x67\x65\x73\137\x63\x61\x63\x68\145" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; egyyiccaeeiooaua: goto wiysogeqqwgioyka; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto wiysogeqqwgioyka; case Pattern::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto cewmoqyysgsmuiya; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto scisgsyemmsekgos; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); scisgsyemmsekgos: cewmoqyysgsmuiya: goto wiysogeqqwgioyka; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto igooksugieceoege; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); igooksugieceoege: goto wiysogeqqwgioyka; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); goto wiysogeqqwgioyka; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto omqiayeucoioqoao; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\155\x65\164\x68\151\156\x67\x20\x77\162\x6f\x6e\147\x20\x6f\x6e\40\160\165\x72\147\151\156\147\x20\160\x61\147\145\x73\40\143\141\x63\150\145\x2e", PR__MDL__OPTIMIZATION)); goto ugqaaewwmkocwwgy; omqiayeucoioqoao: $keccaugmemegoimu = __("\120\141\147\x65\x73\40\143\x61\x63\150\145\x20\x70\x75\162\147\145\144\40\163\165\143\143\145\163\163\x66\165\154\154\x79\56", PR__MDL__OPTIMIZATION); ugqaaewwmkocwwgy: goto wiysogeqqwgioyka; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto wiysogeqqwgioyka; } skkamseieeusycye: wiysogeqqwgioyka: kqgcyoscsusgoaqi: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; sggawugoykqcmsug: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto wkeuuycukmuqiaom; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); wkeuuycukmuqiaom: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::ogigqueukwysusii, '', true))) { goto owmuceyswmgueasi; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto wakmayaoqoskekqy; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\122\114\40\151\x73\40\x6e\x6f\164\x20\x6d\141\x74\x63\150\x65\144\x20\164\x6f\40\x70\x61\164\x74\x65\x72\x6e\56", PR__MDL__OPTIMIZATION)); goto qmuwoecuacmkwgem; wakmayaoqoskekqy: $ksaameoqigiaoigg = $iwywmkygwewiamwm; qmuwoecuacmkwgem: owmuceyswmgueasi: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto mqicocmqegwukkwg; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\x74\164\x65\x72\156\x20\x61\154\x72\145\141\144\x79\x20\x73\x65\164\165\x70\x65\x64\x2e", PR__MDL__OPTIMIZATION)); goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto asiqwuoswmigcaki; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto iwsuawwqomaowuii; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas])) { goto qoqskyuuwueqkquk; } $ueeagokqmgisgauy .= "\x3c\142\x72\x3e{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; qoqskyuuwueqkquk: wagqgeqymeqoeuyi: } msemumccgceyugmg: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x53\x6f\155\145\x20\x70\x61\147\145\40\156\x6f\164\40\x61\x64\x64\56\x20\45\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto wcugqegqsuuuwqao; iwsuawwqomaowuii: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto eeauyscekuckoues; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); goto eogwckcymuugikuy; eeauyscekuckoues: if ($iwywmkygwewiamwm) { goto mwsmsguqqkcwiiuk; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); mwsmsguqqkcwiiuk: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); eogwckcymuugikuy: wcugqegqsuuuwqao: goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x52\114\x20\151\x73\40\156\x6f\164\40\155\x61\164\143\150\145\x64\40\164\157\x20\160\141\x74\164\x65\162\156\56", PR__MDL__OPTIMIZATION)); ciykoyeioqgyaeqo: qgeugwymkkiacwoc: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto ouamogymawucwswu; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]))) { goto emmsycooskoqmgeg; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, Constants::auqoykcmsiauccao)); emmsycooskoqmgeg: ouamogymawucwswu: $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\151\x72\x74\165\x61\154\137\x62\162\157\x77\163\145\162\137\141\144\144\137\152\x6f\x62", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { goto acsqgiuageaasiyy; } $sogksuscggsicmac = ["\160\x61\x67\145\x73\x5f\x63\x61\143\150\x65\137\x73\x74\x61\164\x75\x73" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\141\147\x65\x73\137\x63\x61\143\x68\145", true), "\x70\141\x74\164\145\x72\156\x5f\160\x72\x6f\147\x72\145\x73\x73\x62\141\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\x74\x65\x73\x74\137\162\x75\x6e", true)]; goto oomguqikqokqwgku; acsqgiuageaasiyy: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\143\165\x72\x6c\40\x65\162\x72\x6f\x72"))) { goto mugqyyeayeyggqqk; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\x6e\x20\x6e\x6f\164\40\x63\157\x6e\156\x65\143\164\40\x74\x6f\x20\x73\145\x72\x76\145\162\x20\x72\151\x67\x68\164\40\156\157\167\54\x20\160\154\x65\141\163\145\40\x74\162\171\x20\x6c\141\164\x65\162\40\157\x72\x20\143\x6f\156\x74\x61\x63\164\x20\x75\163\x2e", PR__MDL__OPTIMIZATION), 500); mugqyyeayeyggqqk: oomguqikqokqwgku: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
