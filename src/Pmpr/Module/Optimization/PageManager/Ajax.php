<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f13791817e5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\157\160\164\x69\155\151\x7a\145"; const eueyiwccigugisqe = "\x63\150\x65\x63\153\x5f\154\151\156\x6b"; const wwgqqgayyagycysu = "\x70\165\162\147\145\x5f\143\x61\x63\150\145"; const aeksqkkekigwssku = Optimization::kgswyesggeyekgmg . "\x73\x65\x74\165\160\137\160\141\164\164\x65\162\x6e\x5f\x61\143\x74\151\x6f\x6e"; const quuasuseuccsemsw = Optimization::kgswyesggeyekgmg . "\141\x63\164\x69\x76\x65\137\160\141\164\164\145\162\156\137\141\143\164\151\x6f\x6e"; const qskskgmuqiggaqeg = Optimization::kgswyesggeyekgmg . "\x63\x68\145\143\x6b\137\x70\141\164\164\145\x72\x6e\137\x72\165\156\x5f\x61\143\x74\x69\x6f\x6e"; const kaqawyqaekuookgi = Optimization::kgswyesggeyekgmg . "\160\141\x67\x65\x73\137\143\141\143\150\x65\137\163\164\x61\164\x75\163"; const kusgmosaoigiukgi = Optimization::kgswyesggeyekgmg . "\162\x65\x6f\x70\164\x69\x6d\151\172\145\x5f\x70\x61\x74\164\145\x72\156\x5f\141\x63\164\151\x6f\x6e"; const wegmeawoaymsqkyi = Optimization::kgswyesggeyekgmg . "\x64\x65\x61\x63\164\x69\x76\x61\164\x65\137\x70\141\164\164\145\162\156\137\141\143\164\x69\x6f\x6e"; const maqcykaweqimuomu = Optimization::kgswyesggeyekgmg . "\x63\x68\145\143\x6b\137\143\141\156\x64\151\144\x61\164\x65\137\165\x72\154\x5f\x61\x63\164\151\157\156"; const ggmmioeoauiyccec = Optimization::kgswyesggeyekgmg . "\x70\x61\147\x65\163\137\x63\141\x63\x68\145\137\160\162\157\x67\x72\x65\x73\163"; const aikyaygyasegygma = Optimization::kgswyesggeyekgmg . "\x70\x61\164\164\x65\162\x6e\x5f\155\x61\x6e\165\141\154\137\157\160\x74\x69\x6d\151\172\x65\137\141\143\164\151\x6f\156"; const esiucesqiemeickk = Optimization::kgswyesggeyekgmg . "\160\x75\162\x67\x65\137\x70\x61\x74\164\x65\x72\156\137\x70\x61\x67\145\x73\x5f\143\x61\x63\150\145\x5f\x61\143\164\151\157\x6e"; const sggmuowkoiiuacig = Optimization::kgswyesggeyekgmg . "\x73\x70\145\145\x64\137\x74\145\x73\x74\x5f\156\x6f\x74\x5f\x64\151\x73\x70\141\x63\150\141\x62\154\145\x5f\x66\151\170\145\x64"; const awqksmkmsquoymem = Optimization::kgswyesggeyekgmg . "\x63\x68\x61\156\147\x65\137\x70\x61\x67\145\x5f\163\164\x61\164\x75\163"; const imigmiemwmuayaca = Optimization::kgswyesggeyekgmg . "\x63\150\x61\156\147\145\x5f\x70\x61\x67\145\137\151\155\x70\x6f\x72\164\x61\156\x74\x5f\x73\x74\141\x74\165\x73"; const uyuegiyaymqqkcwa = Optimization::kgswyesggeyekgmg . "\143\x68\141\156\147\x65\x5f\160\141\147\x65\137\163\x70\x65\145\x64\137\x74\145\x73\164\137\143\x61\156\x64\x69\x64\x61\x74\145\137\163\164\x61\164\165\163"; const ccyqqagwskwauoem = ["\143\x68\141\x6e\147\145\x5f\x70\x61\x67\x65\x5f\163\x70\x65\x65\144\x5f\164\145\x73\164\137\143\x61\156\144\x69\x64\141\164\145\137\x73\x74\x61\x74\165\x73" => self::uyuegiyaymqqkcwa, "\143\150\x61\x6e\x67\145\137\x70\x61\x67\x65\x5f\x69\155\160\157\162\x74\141\156\x74\x5f\163\x74\x61\164\165\x73" => self::imigmiemwmuayaca, "\160\165\x72\x67\x65\x5f\x70\141\x74\x74\x65\x72\156\x5f\160\x61\147\x65\x73\137\x63\x61\x63\150\145" => self::esiucesqiemeickk, "\x70\141\x74\x74\145\x72\156\137\x6d\141\x6e\x75\x61\154\137\x6f\x70\x74\151\155\151\172\145" => self::aikyaygyasegygma, "\156\157\x74\137\144\151\163\160\141\143\150\141\142\154\x65\137\x66\151\170\145\144" => self::sggmuowkoiiuacig, "\x70\x61\147\145\163\x5f\143\141\143\x68\145\x5f\x70\162\157\x67\x72\x65\163\163" => self::ggmmioeoauiyccec, "\x63\150\x65\143\x6b\137\x63\x61\156\144\x69\144\141\164\x65\x5f\x6c\151\x6e\x6b" => self::maqcykaweqimuomu, "\x63\x68\141\156\147\145\x5f\x70\x61\147\x65\137\163\164\141\164\165\x73" => self::awqksmkmsquoymem, "\160\x61\147\145\x73\x5f\x63\141\143\150\145\x5f\163\x74\141\164\165\163" => self::kaqawyqaekuookgi, "\x64\145\x61\x63\x74\151\166\141\164\x65\137\160\141\164\164\145\162\156" => self::wegmeawoaymsqkyi, "\x72\145\157\160\164\x69\155\151\172\x65\x5f\160\141\x74\164\145\162\156" => self::kusgmosaoigiukgi, "\143\x68\145\143\x6b\137\x70\141\164\x74\x65\x72\x6e\x5f\162\165\x6e" => self::qskskgmuqiggaqeg, "\x61\x63\164\x69\x76\x61\164\145\137\160\x61\x74\x74\145\162\156" => self::quuasuseuccsemsw, "\163\x65\x74\165\160\x5f\x70\x61\x74\x74\145\162\156" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\147\x63\161\x6d\151\x6f\153\x73\x79\x77\x6b\x65\153\x61\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\x63\x69\167\167\157\x6f\x77\167\x63\163\143\x73\143\x67\x75\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\x77\x6d\161\141\163\x6b\x63\x77\x61\x6d\x69\147\151\155\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\161\165\x63\x79\x71\x71\x6b\147\163\161\x79\163\x61\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\167\165\x61\x71\x6f\x73\x6d\161\155\x77\155\x65\x6f\151\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\165\167\171\x69\x61\147\145\145\141\145\x6f\171\x75\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\153\141\x6d\147\145\x71\157\x67\x6f\163\x67\147\145\x6f\x61"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\141\145\x6d\x63\x73\x6b\145\x6d\147\171\x61\157\x61\157\x77"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\161\167\x79\147\143\147\165\x79\147\x75\x63\151\167\x6f\153\x75"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\163\x65\163\141\x71\x6b\x65\163\x61\x65\141\145\x63\157\x61\x6f"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\x6d\x67\x63\x65\153\161\145\163\x63\x71\x6d\147\x63\x6b\x6d\171"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\171\x73\x6d\x63\171\143\x6b\x75\165\145\x6f\x61\151\141\x67"], 10, 0)->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\147\143\151\x63\145\x73\167\147\151\163\x65\x6b\151\x63\147\151"], 10, 0)->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\157\153\153\x79\163\x65\171\x65\171\x67\x61\163\145\151\x6f\161"], 10, 0); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto sioekkmekwygemyc; } $keccaugmemegoimu = __("\131\x6f\165\x20\x68\141\166\145\40\x6e\157\40\x70\145\x72\155\x69\163\163\151\157\x6e\40\164\x6f\40\144\x6f\x20\x74\x68\x69\163\56", PR__MDL__OPTIMIZATION); goto yiowgigkkwsoqcci; sioekkmekwygemyc: $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\160\x65\x65\x64\x20\x54\x65\x73\164\x20\x66\165\x6e\x63\164\x69\x6f\156\x61\x6c\151\164\171\40\x66\157\x72\40\x63\141\156\144\x69\x64\x61\x74\x65\x20\x70\x61\x67\x65\163\40\x72\x65\163\165\x6d\x65\x64\x2e", PR__MDL__OPTIMIZATION); yiowgigkkwsoqcci: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\116\157\162\155\141\154", PR__MDL__OPTIMIZATION), 1 => __("\x49\x6d\x70\x6f\x72\x74\141\x6e\x74", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\x44\x6f\x6e\164\x20\x54\141\153\145\40\x53\x70\x65\x65\144\x20\x54\x65\163\164", PR__MDL__OPTIMIZATION), 1 => __("\124\141\x6b\x65\x20\123\x70\x65\x65\x64\40\x54\145\x73\x74", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto mogkoocsoeuyoqqa; } $keccaugmemegoimu = __("\x59\x6f\165\x20\150\x61\166\x65\x20\x6e\157\x20\x70\x65\x72\155\151\163\x73\x69\x6f\156\40\164\x6f\x20\144\157\x20\164\150\x69\x73\x2e", PR__MDL__OPTIMIZATION); goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { goto iesekaeqeomeuaui; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto mscyggqcesgqqksu; } $keccaugmemegoimu = __("\x59\x6f\x75\x72\x20\163\x75\x62\x6d\151\x73\x73\151\157\156\x20\163\x74\141\164\165\x73\40\151\163\40\x6e\x6f\164\40\x61\40\x76\x61\154\151\x64\40\x73\164\141\x74\165\x73\x2e", PR__MDL__OPTIMIZATION); goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto ieqesiiageaauiuw; } $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; goto gamqcwuwkikwqoay; ieqesiiageaauiuw: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\120\141\x67\145\40\163\164\141\164\x75\x73\40\x63\x68\x61\x6e\x67\145\144\x20\164\157\x20\45\x73\x20\163\x75\x63\143\145\x73\163\146\x75\x6c\x6c\171\x2e", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x70\165\x72\x67\x65\137\x65\x6c\145\143\x74\145\144\x5f\x70\x61\147\x65\x5f\x68\x74\155\x6c\137\143\141\143\x68\145", $qkcoyiyeuoyyoocy); gamqcwuwkikwqoay: oyeyomcgkmgymogq: wsesqmcqoiyyqkqi: wkwamkgkwykeqkec: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(Pattern::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto mscgewkcqcoowweg; } $keccaugmemegoimu = __("\x59\157\165\40\x68\141\166\x65\x20\x6e\157\40\x70\145\162\x6d\x69\x73\163\x69\157\x6e\40\164\x6f\40\144\157\x20\x74\x68\151\x73\x2e", PR__MDL__OPTIMIZATION); goto suqcsgaosywaauuu; mscgewkcqcoowweg: $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto esaqcqqwuussiiwo; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\164\x74\145\x72\x6e\40\116\157\x74\40\106\157\x75\156\144", PR__MDL__OPTIMIZATION)); goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto suqceasgacskcmkc; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x4a\123\117\116", PR__MDL__OPTIMIZATION)); goto yykqaowwsqgqysmq; suqceasgacskcmkc: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\151\x72\x74\165\x61\x6c\x5f\142\x72\157\x77\163\145\162\x5f\x63\141\x63\150\145\x5f\162\145\x73\165\x6c\x74", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\120\141\x74\164\x65\162\156\40\x64\x61\164\141\x20\143\141\143\150\x65\x64\40\163\165\143\143\145\163\163\146\165\154\154\171\x2e", PR__MDL__OPTIMIZATION); yykqaowwsqgqysmq: goto oimkeqocuguqqsqk; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\x70\162\157\x67\x72\x65\163\x73" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto oimkeqocuguqqsqk; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto oimkeqocuguqqsqk; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto yuimwyoywaiiqacs; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\x72\145\40\x69\163\x20\156\x6f\40\x72\x65\155\157\x74\x65\x20\162\165\x6e\40\146\x6f\x72\x20\160\x61\164\164\145\162\x6e\56", PR__MDL__OPTIMIZATION)); goto ocywegekakimmwcq; yuimwyoywaiiqacs: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq)) { goto gswcoeiisamakwii; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\151\x72\164\165\x61\x6c\137\x62\x72\157\x77\163\145\x72\x5f\x63\x68\145\143\153\x5f\x66\x69\x6e\x69\163\x68\x65\x64", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto yoqakewookqoqacm; } if (is_wp_error($sogksuscggsicmac)) { goto uckewycoogsogwiy; } if (!$sogksuscggsicmac) { goto kwiggogcgciwuwqk; } $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; kwiggogcgciwuwqk: goto ikuuiauwouuqawuw; uckewycoogsogwiy: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; ikuuiauwouuqawuw: yoqakewookqoqacm: gswcoeiisamakwii: $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\141\x74\145\163\x74\x5f\x72\x75\x6e" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\164\145\163\164\137\162\x75\156", true) : '', "\x70\x61\x67\145\163\137\x63\141\143\150\x65" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; ocywegekakimmwcq: goto oimkeqocuguqqsqk; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto oimkeqocuguqqsqk; case Pattern::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto iwsmmkqaoksmocok; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto emqswoaawgeyosmi; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); emqswoaawgeyosmi: iwsmmkqaoksmocok: goto oimkeqocuguqqsqk; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto esikeyqyuikmaiek; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); esikeyqyuikmaiek: goto oimkeqocuguqqsqk; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); goto oimkeqocuguqqsqk; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto okkmcocqokkskasy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\x6d\145\164\x68\x69\x6e\x67\x20\x77\x72\157\156\147\40\157\156\40\160\x75\162\x67\x69\x6e\x67\40\160\141\147\x65\163\40\143\x61\143\x68\145\56", PR__MDL__OPTIMIZATION)); goto qiiigwkqeoewsuwm; okkmcocqokkskasy: $keccaugmemegoimu = __("\x50\141\147\145\163\40\143\141\143\150\145\x20\160\165\x72\147\x65\144\40\163\165\143\x63\145\x73\163\x66\165\154\154\x79\x2e", PR__MDL__OPTIMIZATION); qiiigwkqeoewsuwm: goto oimkeqocuguqqsqk; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto oimkeqocuguqqsqk; } oeocukauoyosicso: oimkeqocuguqqsqk: ikqeeaysmqgcgawq: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; suqcsgaosywaauuu: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto wwukgaquuyoissgy; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); wwukgaquuyoissgy: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::ogigqueukwysusii, '', true))) { goto yqagomygmeoecwey; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto gsygwgsiawgmqiyi; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x52\x4c\x20\x69\x73\40\x6e\x6f\164\40\x6d\x61\164\x63\x68\x65\x64\x20\164\x6f\x20\x70\x61\x74\164\145\162\156\x2e", PR__MDL__OPTIMIZATION)); goto qsgqwyqaqiowkmco; gsygwgsiawgmqiyi: $ksaameoqigiaoigg = $iwywmkygwewiamwm; qsgqwyqaqiowkmco: yqagomygmeoecwey: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto ucuoeymyqeokgsya; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\164\x74\145\162\x6e\x20\x61\154\162\x65\141\144\171\x20\x73\x65\x74\x75\x70\145\144\56", PR__MDL__OPTIMIZATION)); goto yuuyikiacmmueosu; ucuoeymyqeokgsya: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto mysueeoswqgccmui; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto zayqqeqgcwkekwws; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas])) { goto oqousikwiiqagoyw; } $ueeagokqmgisgauy .= "\x3c\x62\162\x3e{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; oqousikwiiqagoyw: sqyokemumceysegy: } aiccyaswigkaycqk: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\123\x6f\155\x65\40\x70\141\x67\x65\40\x6e\157\164\40\x61\x64\x64\56\x20\x25\163", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto aueaceeyommgkicu; zayqqeqgcwkekwws: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto eucqomyqykgoiuge; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); goto usymasgsyqgsuocg; eucqomyqykgoiuge: if ($iwywmkygwewiamwm) { goto qikaewekoecykeou; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); qikaewekoecykeou: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); usymasgsyqgsuocg: aueaceeyommgkicu: goto egmayaiikwsskgmy; mysueeoswqgccmui: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\122\x4c\x20\151\163\40\156\157\164\40\155\141\x74\x63\x68\x65\144\40\x74\x6f\x20\x70\141\x74\164\x65\162\156\56", PR__MDL__OPTIMIZATION)); egmayaiikwsskgmy: yuuyikiacmmueosu: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto agkmiayuawacakau; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]))) { goto sguskaeaaqcagqgc; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, Constants::auqoykcmsiauccao)); sguskaeaaqcagqgc: agkmiayuawacakau: $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\151\162\164\x75\141\154\137\x62\x72\x6f\x77\163\x65\x72\x5f\141\x64\144\x5f\x6a\157\x62", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { goto oocuemosmeeekgas; } $sogksuscggsicmac = ["\x70\141\x67\x65\163\137\143\141\143\150\145\x5f\x73\164\141\x74\165\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\x61\147\x65\x73\137\143\141\x63\x68\145", true), "\x70\141\164\x74\x65\162\x6e\137\x70\x72\157\x67\162\x65\163\x73\x62\141\162" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\141\164\x65\x73\x74\137\x72\165\x6e", true)]; goto qkcsykuocwuyaice; oocuemosmeeekgas: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\165\162\154\40\x65\x72\162\157\x72"))) { goto syuaummumssgwwee; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\x61\156\40\x6e\157\x74\40\143\x6f\x6e\156\x65\143\x74\40\x74\x6f\40\x73\145\162\x76\x65\x72\40\162\151\147\x68\x74\40\156\x6f\167\54\x20\160\154\145\x61\163\x65\x20\164\162\171\x20\x6c\x61\164\145\162\x20\x6f\x72\x20\143\x6f\156\164\x61\143\164\40\x75\163\56", PR__MDL__OPTIMIZATION), 500); syuaummumssgwwee: qkcsykuocwuyaice: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
