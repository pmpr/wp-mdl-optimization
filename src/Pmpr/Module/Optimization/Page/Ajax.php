<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf030b239b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const yccmkuqymgwukyoy = self::wowuwuigyoceikas . "\137\154\x69\x63\x65\156\x73\x65"; const ucwkciyokauwsyes = self::yccmkuqymgwukyoy . "\x5f\x63\150\x65\143\153\137\x62\x75\x64\147\x65\164"; const kgmmcocskmwmmyse = self::yccmkuqymgwukyoy . "\x5f\x63\x68\x65\143\x6b\x5f\x70\x61\147\145\137\163\x74\x61\164\x75\x73"; const ikageqoesymqusss = self::yccmkuqymgwukyoy . "\137\147\x65\x74\x5f\x70\157\x73\x74\x73\x5f\x62\171\137\x72\165\154\145\163"; const qeyyssmaimicgksm = self::yccmkuqymgwukyoy . "\137\141\144\x64\x5f\x70\141\x67\145\163\x5f\142\171\137\162\x75\x6c\145\x73"; const awqksmkmsquoymem = self::yccmkuqymgwukyoy . "\x5f\x63\150\141\x6e\147\145\x5f\x70\x61\x67\x65\x5f\163\x74\x61\164\165\x73"; const ygggeyeauuuaqwou = self::wowuwuigyoceikas . "\x5f\156\x65\x78\x74\137\143\x68\145\x63\x6b\137\142\165\x64\147\x65\x74"; const myikkigscysoykgy = ["\x67\x65\164\x5f\160\157\163\x74\x73" => self::ikageqoesymqusss, "\x61\x64\x64\x5f\x70\x61\147\x65\x73" => self::qeyyssmaimicgksm, "\143\x68\x65\x63\153\x5f\x73\164\141\x74\165\x73" => self::kgmmcocskmwmmyse, "\x63\150\x65\143\x6b\137\x62\x75\x64\147\x65\164" => self::ucwkciyokauwsyes, "\143\150\141\156\147\145\x5f\163\164\141\x74\165\163" => self::awqksmkmsquoymem]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ucwkciyokauwsyes, [$this, "\x71\167\155\x77\x65\x77\151\161\x65\143\167\151\x65\x6f\x75\145"])->koaegcswmcqsiykq(self::kgmmcocskmwmmyse, [$this, "\161\145\171\x75\x63\145\145\x61\145\171\147\x65\163\165\143\141"])->koaegcswmcqsiykq(self::ikageqoesymqusss, [$this, "\x75\x79\x65\x63\171\x73\x6f\163\141\163\171\155\171\x79\165\147"])->koaegcswmcqsiykq(self::qeyyssmaimicgksm, [$this, "\165\147\147\167\x63\161\x75\x6d\x6f\141\x73\163\145\163\x75\x65"])->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\x79\x73\155\x63\171\x63\x6b\x75\x75\145\157\x61\x69\141\147"]); parent::wigskegsqequoeks(); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function qeyuceeaeygesuca() { $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto egiauwuekseyeaeq; } $iqaosyayeiuaisqi = ManipulateServer::yyqgamuwwakgciey(self::iiooageieusuyomy); $migiiksoiymissge = ManipulateServer::yyqgamuwwakgciey(self::sauwwsocmukoaayu); if ($iqaosyayeiuaisqi && $migiiksoiymissge) { goto iecqkqoiqimmisyw; } $keccaugmemegoimu = __("\154\145\166\x65\x6c\x20\141\x6e\144\x20\160\x65\x72\155\141\154\151\x6e\153\40\x69\163\x20\162\x65\161\x75\x69\162\145\40\x70\141\x72\x61\x6d\145\x74\x65\162\x73\56", PR__MDL__OPTIMIZATION); goto eogomkswkaqwyycm; iecqkqoiqimmisyw: $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge); if (!(self::kywgiyyageyqwuuc !== $iueymcwwscwqkiyq)) { goto eysuawiooiswaseq; } $keccaugmemegoimu = $this->ccioymuswicowwkw($migiiksoiymissge); eysuawiooiswaseq: $kigowwqauiumummw = true; eogomkswkaqwyycm: egiauwuekseyeaeq: $this->uaggqsoeugksgooc($kigowwqauiumummw, $keccaugmemegoimu); } public function qwmwewiqecwieoue() { $uuyoeicyoayimaoa = 1; $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto wyqueeskecameuks; } $ccosicygoaweskom = DecoratorOption::get(self::ygggeyeauuuaqwou, false); if (!$ccosicygoaweskom || ManipulateDatetime::wguceomqgwouoyks($ccosicygoaweskom)) { goto assoyoeukmqiucyq; } $uamcoiueqaamsqma = sprintf(__("\120\x6c\x65\141\x73\145\40\164\162\x79\x20\141\147\x61\x69\156\x20\x61\x66\164\145\162\40\x25\x73\40\x68\157\x75\162", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($uuyoeicyoayimaoa)); goto kikkkoqiumqoeiyy; assoyoeukmqiucyq: $kigowwqauiumummw = $this->yoeoaweeseqiyesg($uamcoiueqaamsqma); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\165\x70\x64\x61\164\145\137\162\145\155\x6f\164\x65\137\x61\160\160\163")); if (!$kigowwqauiumummw) { goto euuekiyqwkowiees; } DecoratorOption::update(self::ygggeyeauuuaqwou, date("\x59\x2d\x6d\x2d\144\40\110\72\151\72\163", strtotime("\53{$uuyoeicyoayimaoa}\40\150\x6f\165\162"))); euuekiyqwkowiees: kikkkoqiumqoeiyy: wyqueeskecameuks: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto akyiiioycmgqyuok; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\162\165\154\145\163", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\x75\x73\x65\x64"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\x70\141\147\145\x73"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto gqycmyieayoegcsy; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); gqycmyieayoegcsy: msiuqseowuumiwuo: } esokkakkumskkmiu: if ($suuagcecoyuweoqk) { goto sqiyuasgusgawuoi; } $uamcoiueqaamsqma = __("\x4e\x6f\40\162\x65\163\x75\x6c\x74\40\x66\x6f\165\x6e\144\40\x74\x6f\x20\x73\150\157\167\x2c\40\x70\x6c\145\x61\x73\145\40\143\150\x61\156\147\x65\x20\x72\165\154\x65\163\40\141\156\x64\x20\164\x72\x79\x20\x61\147\x61\x69\156\56", PR__MDL__OPTIMIZATION); goto iayguaeseyaemwkk; sqiyuasgusgawuoi: $occymigcemkqucuw = true; $keccaugmemegoimu["\154\151\x73\164"] = $this->iuygowkemiiwqmiw("\164\141\x62\154\x65", ["\x69\x74\x65\155\x73" => $suuagcecoyuweoqk, "\141\143\164\151\x6f\156\x73" => ["\x72\x65\x6d\x6f\166\145" => ["\x74\x69\164\154\145" => __("\122\x65\x6d\157\x76\x65", PR__MDL__OPTIMIZATION), "\151\143\x6f\156" => IconFontawesomeInterface::cugwqwigakiwyiuk, "\x61\x74\164\x72\x73" => ["\x63\x6c\x61\163\163" => "\162\165\x6c\145\55\162\145\x6d\157\x76\145\x2d\141\143\x74\x69\x6f\156\x20\x62\165\164\164\x6f\x6e"]]], "\x74\x69\164\154\x65\163" => ["\164\x69\x74\154\x65" => __("\x54\x69\164\x6c\145", PR__MDL__OPTIMIZATION), "\160\x61\x67\x65\137\x74\x79\160\x65" => __("\x50\141\x67\x65\40\124\x79\x70\x65", PR__MDL__OPTIMIZATION), "\141\143\164\x69\157\156\x73" => __("\101\x63\x74\151\157\x6e\x73", PR__MDL__OPTIMIZATION)]]); iayguaeseyaemwkk: akyiiioycmgqyuok: if ($occymigcemkqucuw) { goto ycomeuqeessamows; } $keccaugmemegoimu = $uamcoiueqaamsqma; ycomeuqeessamows: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto eiecgqokmuekaesc; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq(self::yusuiaeueqwieqqq, []); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto uwyeycaywowwiquu; } $uamcoiueqaamsqma = __("\120\x61\147\145\40\x6c\151\x73\164\x20\151\163\40\145\155\x70\x74\171\54\40\160\x6c\145\x61\x73\x65\x20\162\x65\144\145\146\151\x6e\145\x20\x70\141\x67\x65\163\56", PR__MDL__OPTIMIZATION); goto cwmuqmoeauqcewoy; uwyeycaywowwiquu: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto mqacqosyicuiqwia; } goto owiguescmqyqukui; mqacqosyicuiqwia: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto ykcmomsiayaymysm; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto mcuoyseuwoueyaie; } $icwicymcioeyeyek = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::iiooageieusuyomy => $jwsqucqyaoaasykk::cwoackywkgsameww, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; mcuoyseuwoueyaie: if (!$icwicymcioeyeyek) { goto uugiuqkesegaamqw; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto wwgikwuigiiqsswq; } switch ($kgicwkyskyemksca) { case "\x6f\165\x74\x5f\x6f\146\x5f\x62\x75\144\x67\145\164": if ($momcykaoccoymeig == 0) { goto soqkewsayowwcmco; } $uamcoiueqaamsqma = sprintf(__("\45\x73\40\x6f\146\40\171\157\x75\x72\x20\x72\x65\161\x75\145\x73\164\x65\x64\x20\x70\x61\x67\x65\x73\40\141\x64\144\145\144\x2c\x20\x74\150\145\40\x72\x65\x6d\x61\151\x6e\x73\40\x61\x72\x65\40\x6e\157\x74\40\141\154\x6c\x6f\x77\40\x74\157\40\141\x64\x64\x2e", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto ukigmkeewuqomooc; soqkewsayowwcmco: $uamcoiueqaamsqma = __("\123\157\x72\x72\x79\54\x20\171\x6f\165\x72\x20\162\145\161\x75\145\163\164\145\144\x20\160\162\x6f\x63\x65\163\163\x20\164\x65\162\155\151\156\x61\x74\x65\144\54\x20\x62\145\x63\x61\x75\163\x65\x20\171\157\165\40\x61\x72\x65\x20\157\165\x74\x20\157\x66\40\x62\x75\x64\147\145\164\56", PR__MDL__OPTIMIZATION); ukigmkeewuqomooc: goto ciiyqsiswkcwsocm; } ugyawwukegyoqmsq: ciiyqsiswkcwsocm: goto owiguescmqyqukui; goto seyygcwcaogkmaqe; wwgikwuigiiqsswq: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq)) { goto kwowggaooiyqawyq; } $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); goto ieoeeyieoskuyiyw; kwowggaooiyqawyq: $uamcoiueqaamsqma .= print_r(ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas), true); ieoeeyieoskuyiyw: seyygcwcaogkmaqe: uugiuqkesegaamqw: ykcmomsiayaymysm: guummoewucyeuiek: } owiguescmqyqukui: if (!$eciuecguuowmeyqg) { goto qoaawmmcqyacokws; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x70\x75\162\147\145\x5f\x70\141\147\145\x73"), $eciuecguuowmeyqg); qoaawmmcqyacokws: cwmuqmoeauqcewoy: eiecgqokmuekaesc: if ($uamcoiueqaamsqma) { goto ggsugekocmsukuci; } $uamcoiueqaamsqma = __("\120\x61\147\x65\x73\40\141\x64\x64\x65\144\x20\x73\x75\x63\x63\x65\x73\163\146\x75\154\154\x79\x2e", PR__MDL__OPTIMIZATION); $occymigcemkqucuw = true; ggsugekocmsukuci: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto kkckyqmcyussauma; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\x70\x61\x67\145\137\x69\x64"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\160\x61\x67\x65\x5f\x73\x74\141\x74\x75\163"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto oksqsucimimsswcg; } $uamcoiueqaamsqma = __("\x6d\151\163\163\x69\156\x67\40\160\141\162\x61\155\145\x74\x65\x72\x2c\40\162\x65\161\165\x65\x73\164\x20\151\163\x20\x6e\157\164\40\166\141\x6c\x69\x64\56", PR__MDL__OPTIMIZATION); goto gqeoaceyoiicoaec; oksqsucimimsswcg: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto gcecieuocqawmgci; } $uamcoiueqaamsqma = __("\122\x65\x71\165\151\162\x65\40\160\x61\x72\141\155\145\x74\145\162\x20\x6e\157\164\40\146\x6f\x75\x6e\x64\54\40\x72\x65\154\x6f\141\144\40\160\x61\147\x65\x20\x61\156\144\40\x74\162\171\x20\x61\x67\141\x69\156\x2e", PR__MDL__OPTIMIZATION); goto msmmiaumiasmsiog; gcecieuocqawmgci: if (ManipulateArray::get($wkawwaegamqisugs, self::ciywsqoeiymemsys) === self::wiewguakgwmoqaea && $this->ewcikckouwmuqkms() <= 0) { goto kcwgiwimgqesukqu; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto ceosmkqgqgwsowwg; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\160\165\x72\147\145\137\x70\141\147\145"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; ceosmkqgqgwsowwg: goto wicuauokauykwoeu; kcwgiwimgqesukqu: $uamcoiueqaamsqma = __("\123\157\162\162\x79\x20\171\157\x75\40\x61\x72\145\40\157\x75\x74\40\x6f\146\x20\142\165\144\147\x65\164\54\40\x63\x61\156\40\156\x6f\164\40\x63\x68\141\x6e\x67\x65\40\x74\150\x69\163\x20\160\x61\147\145\40\163\x74\141\164\165\163\40\x74\157\40\x61\x63\x74\x69\x76\x65\56\x20\x63\x68\x61\162\147\x65\40\x79\x6f\165\x72\40\154\151\143\x65\156\x73\x65\x20\146\x72\157\155\x20\x53\145\164\x74\x69\x6e\147\x73\x20\76\40\x44\x61\163\x68\x62\x6f\141\x72\x64\40\x3e\40\x4c\x69\x63\x65\x6e\x73\x65", PR__MDL__OPTIMIZATION); wicuauokauykwoeu: msmmiaumiasmsiog: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } gqeoaceyoiicoaec: kkckyqmcyussauma: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::ayumoauqiqamccyu, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::ksmykycegeiykemu); if (!$cwwmimsuyiesweye) { goto qosswumywsaeyqus; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::mswmgkkakuooukme: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto mieoguuqiwqioeqa; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; mieoguuqiwqioeqa: goto uckusgwkoycmkeam; } gscyiqmmegqmqcoe: uckusgwkoycmkeam: cciakcwuweqmcose: } ikukqooiowqywyqo: qosswumywsaeyqus: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::osqayuckuuyukoiw); $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::ackcaikowcokggsc: $ywmkwiwkosakssii[self::eqomgewoayseioos] = $scsyuucsumiwkqqc; goto swicauyqusmgeccu; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $scsyuucsumiwkqqc; goto swicauyqusmgeccu; } maguoggkqamaiuag: swicauyqusmgeccu: $gsgqiucqammycmco = Model::symcgieuakksimmu()->woemiikgwoyowsic($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto icoiqskygugkgmkm; } $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::kcaoouwiygwwmiok, []), $gsgqiucqammycmco); icoiqskygugkgmkm: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto eekkcooqswqouoei; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::mgsccwumkcawaqcy]] = $igqsaukqcqscimok; eekkcooqswqouoei: gcqssckowmywoesw: } kocaieyauyiqmyiy: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto iomwkkieqcswkkaw; } $iswcokucwmiosiaq = __("\x52\165\x6c\145\x73\x20\151\x73\x20\x65\155\x70\164\x79", PR__MDL__OPTIMIZATION); goto eussqkkimciywios; iomwkkieqcswkkaw: $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::immuuyigkyiuukwy); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\x70\x61\147\x65\163" => $ocqawgquwsqioses, "\x75\163\x65\x64" => $sqsyqsscqaauwyyy, "\x74\157\164\141\154" => $uuwmqqqiwksuaise, "\162\x65\155\141\151\156" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; igmawmwssyskqqag: } cuayqmasemsqsume: eussqkkimciywios: return $ksaameoqigiaoigg; } }
