<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629e44ab568a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const yccmkuqymgwukyoy = self::wowuwuigyoceikas . "\x5f\x6c\x69\143\x65\x6e\x73\x65"; const ucwkciyokauwsyes = self::yccmkuqymgwukyoy . "\137\x63\x68\145\x63\153\137\x62\165\x64\147\x65\164"; const kgmmcocskmwmmyse = self::yccmkuqymgwukyoy . "\137\143\x68\x65\143\153\x5f\x70\141\147\145\137\x73\164\x61\164\165\163"; const ikageqoesymqusss = self::yccmkuqymgwukyoy . "\137\147\145\x74\137\160\x6f\x73\x74\x73\x5f\142\171\x5f\x72\x75\x6c\145\x73"; const qeyyssmaimicgksm = self::yccmkuqymgwukyoy . "\x5f\141\x64\x64\x5f\160\x61\x67\x65\x73\x5f\x62\x79\x5f\x72\x75\x6c\145\163"; const awqksmkmsquoymem = self::yccmkuqymgwukyoy . "\x5f\143\x68\x61\156\147\x65\137\x70\x61\147\145\137\163\164\141\x74\165\163"; const ygggeyeauuuaqwou = self::wowuwuigyoceikas . "\x5f\156\145\x78\x74\137\143\150\x65\143\x6b\x5f\x62\x75\144\x67\145\164"; const myikkigscysoykgy = ["\x67\145\x74\x5f\x70\157\x73\164\163" => self::ikageqoesymqusss, "\141\x64\x64\137\x70\x61\147\145\x73" => self::qeyyssmaimicgksm, "\x63\150\145\143\153\x5f\163\164\141\164\165\x73" => self::kgmmcocskmwmmyse, "\143\150\x65\143\x6b\x5f\142\165\144\x67\x65\x74" => self::ucwkciyokauwsyes, "\143\x68\141\x6e\x67\x65\x5f\163\164\141\x74\165\x73" => self::awqksmkmsquoymem]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ucwkciyokauwsyes, [$this, "\x71\x77\155\167\145\167\x69\161\145\143\x77\151\145\157\165\145"])->koaegcswmcqsiykq(self::kgmmcocskmwmmyse, [$this, "\x71\145\171\x75\x63\x65\x65\141\x65\x79\147\145\x73\165\x63\x61"])->koaegcswmcqsiykq(self::ikageqoesymqusss, [$this, "\x75\x79\145\143\x79\163\157\163\141\x73\x79\x6d\171\x79\165\x67"])->koaegcswmcqsiykq(self::qeyyssmaimicgksm, [$this, "\x75\x67\147\x77\143\161\x75\x6d\157\141\163\x73\145\x73\165\145"])->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\x63\171\x73\x6d\143\171\143\153\x75\x75\x65\157\x61\x69\x61\x67"]); parent::wigskegsqequoeks(); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function qeyuceeaeygesuca() { $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto iwosouqsesoqcska; } $iqaosyayeiuaisqi = ManipulateServer::yyqgamuwwakgciey(self::iiooageieusuyomy); $migiiksoiymissge = ManipulateServer::yyqgamuwwakgciey(self::sauwwsocmukoaayu); if ($iqaosyayeiuaisqi && $migiiksoiymissge) { goto kiqmcymowosckmii; } $keccaugmemegoimu = __("\154\x65\166\145\x6c\40\x61\156\x64\40\160\145\x72\x6d\x61\x6c\151\156\x6b\40\151\x73\40\162\145\x71\x75\151\162\x65\x20\160\141\162\141\155\x65\164\x65\162\163\x2e", PR__MDL__OPTIMIZATION); goto iaygaasesyymwgss; kiqmcymowosckmii: $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge); if (!(self::kywgiyyageyqwuuc !== $iueymcwwscwqkiyq)) { goto oskwkeaemiqcaqkc; } $keccaugmemegoimu = $this->ccioymuswicowwkw($migiiksoiymissge); oskwkeaemiqcaqkc: $kigowwqauiumummw = true; iaygaasesyymwgss: iwosouqsesoqcska: $this->uaggqsoeugksgooc($kigowwqauiumummw, $keccaugmemegoimu); } public function qwmwewiqecwieoue() { $uuyoeicyoayimaoa = 1; $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto issgmmkcgesyeoas; } $ccosicygoaweskom = DecoratorOption::get(self::ygggeyeauuuaqwou, false); if (!$ccosicygoaweskom || ManipulateDatetime::wguceomqgwouoyks($ccosicygoaweskom)) { goto wqmwcuggcisqieao; } $uamcoiueqaamsqma = sprintf(__("\x50\x6c\145\x61\x73\145\40\164\162\x79\x20\x61\147\141\x69\x6e\x20\141\x66\164\x65\162\x20\x25\163\40\x68\157\x75\162", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($uuyoeicyoayimaoa)); goto qsyqcokomswykyso; wqmwcuggcisqieao: $kigowwqauiumummw = $this->yoeoaweeseqiyesg($uamcoiueqaamsqma); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x75\160\144\141\x74\145\x5f\162\x65\x6d\157\164\145\x5f\x61\x70\160\163")); if (!$kigowwqauiumummw) { goto iacwyogogoccmwsg; } DecoratorOption::update(self::ygggeyeauuuaqwou, date("\x59\x2d\155\x2d\x64\x20\x48\72\x69\72\x73", strtotime("\x2b{$uuyoeicyoayimaoa}\x20\150\157\165\x72"))); iacwyogogoccmwsg: qsyqcokomswykyso: issgmmkcgesyeoas: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto umamqqwcoewcigew; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\162\165\x6c\145\x73", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\x75\163\145\x64"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\x70\141\147\145\163"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto giuoqsumkimmuaya; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); giuoqsumkimmuaya: yueosioyegouuwqo: } yeiicwscguyokwyu: if ($suuagcecoyuweoqk) { goto mssaawaiaimogowg; } $uamcoiueqaamsqma = __("\116\157\x20\x72\145\163\165\154\x74\40\x66\157\x75\156\x64\40\164\157\40\163\150\157\x77\54\40\x70\x6c\145\x61\x73\x65\40\143\x68\x61\156\147\x65\x20\x72\165\154\145\x73\40\141\156\x64\x20\164\162\x79\x20\141\147\141\151\x6e\x2e", PR__MDL__OPTIMIZATION); goto ccyiggckemwgooco; mssaawaiaimogowg: $occymigcemkqucuw = true; $keccaugmemegoimu["\154\x69\x73\x74"] = $this->iuygowkemiiwqmiw("\164\x61\x62\154\x65", ["\x69\x74\x65\x6d\163" => $suuagcecoyuweoqk, "\141\x63\x74\x69\x6f\x6e\163" => ["\x72\145\155\x6f\166\x65" => ["\x74\151\164\154\x65" => __("\x52\x65\x6d\x6f\166\x65", PR__MDL__OPTIMIZATION), "\x69\143\157\x6e" => IconFontawesomeInterface::cugwqwigakiwyiuk, "\141\x74\x74\x72\x73" => ["\x63\x6c\141\x73\163" => "\x72\165\x6c\x65\55\162\145\155\x6f\166\145\x2d\141\x63\x74\x69\157\156\40\142\x75\164\x74\157\x6e"]]], "\x74\x69\164\x6c\x65\x73" => ["\164\151\x74\x6c\x65" => __("\x54\151\164\154\145", PR__MDL__OPTIMIZATION), "\160\141\147\x65\x5f\x74\x79\x70\x65" => __("\x50\x61\147\145\40\124\171\160\x65", PR__MDL__OPTIMIZATION), "\x61\143\164\151\x6f\x6e\163" => __("\x41\143\164\151\x6f\x6e\163", PR__MDL__OPTIMIZATION)]]); ccyiggckemwgooco: umamqqwcoewcigew: if ($occymigcemkqucuw) { goto swkeiggkawwgewuw; } $keccaugmemegoimu = $uamcoiueqaamsqma; swkeiggkawwgewuw: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto cquyuwsisgqscemm; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq(self::yusuiaeueqwieqqq, []); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto wammkmaqucqagqww; } $uamcoiueqaamsqma = __("\120\x61\x67\x65\x20\154\151\x73\x74\40\x69\x73\40\x65\x6d\x70\x74\171\x2c\40\x70\154\145\x61\x73\x65\40\162\x65\x64\x65\146\151\156\145\40\x70\141\x67\145\x73\x2e", PR__MDL__OPTIMIZATION); goto iuooqassskiyeemo; wammkmaqucqagqww: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto oaskqsoyesmmeaew; } goto gaiaucesmcqgqwac; oaskqsoyesmmeaew: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto sikmqkecsiyciaei; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto aacaoywsaqscgyua; } $icwicymcioeyeyek = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::iiooageieusuyomy => $jwsqucqyaoaasykk::cwoackywkgsameww, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; aacaoywsaqscgyua: if (!$icwicymcioeyeyek) { goto usmagcaocwiugqum; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto qwsmiaegmcwuskwi; } switch ($kgicwkyskyemksca) { case "\157\165\164\x5f\157\146\137\142\x75\x64\x67\145\x74": if ($momcykaoccoymeig == 0) { goto qcwkymcgqacaaywc; } $uamcoiueqaamsqma = sprintf(__("\x25\163\40\157\x66\x20\171\x6f\165\x72\40\162\145\x71\x75\x65\163\164\x65\x64\x20\x70\x61\x67\x65\x73\x20\x61\144\x64\145\x64\54\40\164\150\145\40\162\x65\x6d\x61\x69\156\x73\x20\141\x72\x65\40\156\157\164\40\x61\x6c\x6c\x6f\x77\40\x74\157\x20\141\x64\x64\x2e", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto wmcucyuieqgqisis; qcwkymcgqacaaywc: $uamcoiueqaamsqma = __("\x53\x6f\x72\x72\x79\x2c\40\x79\x6f\165\162\40\x72\x65\x71\165\x65\x73\x74\x65\x64\40\x70\x72\x6f\143\145\163\x73\40\x74\145\x72\155\151\156\141\x74\x65\144\x2c\40\x62\x65\143\141\x75\163\x65\x20\171\x6f\x75\x20\141\162\x65\40\x6f\165\164\x20\x6f\x66\40\142\165\x64\x67\x65\x74\x2e", PR__MDL__OPTIMIZATION); wmcucyuieqgqisis: goto eykiuqsamowqykam; } ywqouwqomiqwoquu: eykiuqsamowqykam: goto gaiaucesmcqgqwac; goto yyyyawaqcowsgqcs; qwsmiaegmcwuskwi: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq)) { goto miigqygoawqmkkqm; } $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); goto yywwaaiicukuwcao; miigqygoawqmkkqm: $uamcoiueqaamsqma .= print_r(ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas), true); yywwaaiicukuwcao: yyyyawaqcowsgqcs: usmagcaocwiugqum: sikmqkecsiyciaei: kuimgwmkcgcoecko: } gaiaucesmcqgqwac: if (!$eciuecguuowmeyqg) { goto wmycwscioqackeig; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\160\165\162\147\145\137\x70\x61\147\x65\x73"), $eciuecguuowmeyqg); wmycwscioqackeig: iuooqassskiyeemo: cquyuwsisgqscemm: if ($uamcoiueqaamsqma) { goto imykswegcuekqwio; } $uamcoiueqaamsqma = __("\120\x61\x67\x65\x73\x20\141\144\144\x65\x64\40\x73\x75\x63\x63\145\x73\x73\146\x75\x6c\154\171\56", PR__MDL__OPTIMIZATION); $occymigcemkqucuw = true; imykswegcuekqwio: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto seqammocqkyswaim; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\160\141\147\145\x5f\x69\144"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\x70\x61\147\145\x5f\163\x74\x61\x74\x75\x73"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto yisoawmmammassqk; } $uamcoiueqaamsqma = __("\155\x69\163\x73\x69\156\147\40\x70\x61\x72\141\x6d\x65\x74\x65\x72\x2c\40\162\145\161\x75\145\x73\x74\40\x69\x73\x20\x6e\157\x74\x20\x76\x61\x6c\x69\144\56", PR__MDL__OPTIMIZATION); goto gcsosokicycukoyc; yisoawmmammassqk: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto smkakiyekkqoggao; } $uamcoiueqaamsqma = __("\x52\145\161\165\151\x72\x65\40\x70\141\162\x61\155\x65\x74\x65\162\x20\x6e\x6f\x74\x20\146\x6f\165\x6e\x64\54\40\162\x65\154\157\x61\x64\40\x70\x61\x67\x65\40\x61\156\144\x20\x74\x72\171\x20\141\x67\x61\x69\x6e\x2e", PR__MDL__OPTIMIZATION); goto zggweikegkcgkmma; smkakiyekkqoggao: if (ManipulateArray::get($wkawwaegamqisugs, self::ciywsqoeiymemsys) === self::wiewguakgwmoqaea && $this->ewcikckouwmuqkms() <= 0) { goto ykuqeyogsasokqis; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto eokikuciuqkyauum; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x70\165\x72\147\x65\x5f\x70\141\x67\145"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; eokikuciuqkyauum: goto mqaamqyoywyekiko; ykuqeyogsasokqis: $uamcoiueqaamsqma = __("\123\157\x72\162\x79\40\171\x6f\165\x20\141\162\x65\x20\157\165\164\x20\x6f\146\x20\x62\x75\144\x67\x65\x74\x2c\40\143\141\156\40\x6e\157\x74\x20\x63\x68\141\x6e\x67\x65\x20\x74\x68\x69\163\40\160\x61\x67\x65\40\163\x74\141\x74\165\x73\40\164\x6f\x20\x61\143\x74\151\166\x65\x2e\x20\143\150\x61\162\147\145\40\171\157\165\162\40\x6c\151\143\x65\x6e\163\145\x20\146\162\157\x6d\x20\x53\x65\x74\x74\151\x6e\147\163\40\x3e\x20\x44\141\x73\150\x62\157\x61\x72\x64\x20\76\x20\114\151\143\145\x6e\163\145", PR__MDL__OPTIMIZATION); mqaamqyoywyekiko: zggweikegkcgkmma: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } gcsosokicycukoyc: seqammocqkyswaim: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::ayumoauqiqamccyu, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::ksmykycegeiykemu); if (!$cwwmimsuyiesweye) { goto smksoismyouykeoa; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::mswmgkkakuooukme: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto imquwacukaswoyka; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; imquwacukaswoyka: goto ekgkiioywougquka; } wyyowcsciaqkuiuq: ekgkiioywougquka: umccwcqwkoiaakmu: } coskmuqsawiaeyqg: smksoismyouykeoa: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::osqayuckuuyukoiw); $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::ackcaikowcokggsc: $ywmkwiwkosakssii[self::eqomgewoayseioos] = $scsyuucsumiwkqqc; goto qwgkwokcyocqiyee; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $scsyuucsumiwkqqc; goto qwgkwokcyocqiyee; } maeccckgcsaaumkw: qwgkwokcyocqiyee: $gsgqiucqammycmco = Model::symcgieuakksimmu()->woemiikgwoyowsic($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto gcoeaokkagaaeuse; } $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::kcaoouwiygwwmiok, []), $gsgqiucqammycmco); gcoeaokkagaaeuse: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto qocgmocqauaaekii; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::mgsccwumkcawaqcy]] = $igqsaukqcqscimok; qocgmocqauaaekii: uagsgicwwcakecwq: } kcqueaewmayywqeq: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto ikygockuuyimmmwk; } $iswcokucwmiosiaq = __("\122\165\154\145\x73\x20\151\163\40\x65\x6d\x70\164\171", PR__MDL__OPTIMIZATION); goto uwmcugkwqwcuqqsq; ikygockuuyimmmwk: $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::immuuyigkyiuukwy); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\x70\x61\x67\145\x73" => $ocqawgquwsqioses, "\x75\163\145\x64" => $sqsyqsscqaauwyyy, "\x74\x6f\164\x61\x6c" => $uuwmqqqiwksuaise, "\x72\x65\x6d\141\151\x6e" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; yweucowesgsoewyc: } gsggsmmwcmkgyyss: uwmcugkwqwcuqqsq: return $ksaameoqigiaoigg; } }
