<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0dd9fa068f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const yccmkuqymgwukyoy = self::wowuwuigyoceikas . "\137\154\151\143\x65\x6e\x73\x65"; const ucwkciyokauwsyes = self::yccmkuqymgwukyoy . "\137\143\x68\145\x63\x6b\x5f\x62\165\x64\147\x65\x74"; const kgmmcocskmwmmyse = self::yccmkuqymgwukyoy . "\137\x63\150\x65\143\153\x5f\160\x61\x67\x65\137\x73\x74\141\x74\165\163"; const ikageqoesymqusss = self::yccmkuqymgwukyoy . "\137\x67\145\164\137\x70\157\163\x74\163\137\x62\x79\137\x72\165\x6c\x65\x73"; const qeyyssmaimicgksm = self::yccmkuqymgwukyoy . "\x5f\141\144\144\x5f\160\141\147\x65\x73\137\142\171\x5f\x72\165\x6c\145\163"; const awqksmkmsquoymem = self::yccmkuqymgwukyoy . "\137\x63\150\x61\x6e\x67\x65\137\x70\141\x67\145\137\163\164\141\164\165\163"; const ygggeyeauuuaqwou = self::wowuwuigyoceikas . "\137\156\x65\x78\x74\137\143\x68\145\143\x6b\137\x62\165\x64\x67\145\x74"; const myikkigscysoykgy = ["\147\x65\x74\x5f\160\157\163\164\163" => self::ikageqoesymqusss, "\x61\144\x64\137\160\x61\x67\145\x73" => self::qeyyssmaimicgksm, "\143\x68\145\x63\153\137\163\x74\x61\164\165\163" => self::kgmmcocskmwmmyse, "\x63\x68\145\x63\153\x5f\x62\165\144\x67\x65\164" => self::ucwkciyokauwsyes, "\143\x68\141\x6e\x67\x65\137\163\164\141\x74\165\x73" => self::awqksmkmsquoymem]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ucwkciyokauwsyes, [$this, "\161\x77\x6d\x77\x65\167\x69\x71\x65\x63\x77\151\x65\x6f\165\x65"])->koaegcswmcqsiykq(self::kgmmcocskmwmmyse, [$this, "\x71\145\x79\x75\x63\145\x65\141\x65\171\x67\x65\x73\165\143\x61"])->koaegcswmcqsiykq(self::ikageqoesymqusss, [$this, "\165\171\x65\x63\x79\x73\x6f\163\x61\x73\x79\155\171\171\x75\147"])->koaegcswmcqsiykq(self::qeyyssmaimicgksm, [$this, "\165\x67\x67\167\143\x71\165\x6d\x6f\x61\163\163\x65\163\x75\x65"])->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\x63\x79\163\x6d\x63\171\143\153\x75\x75\x65\157\141\x69\141\x67"]); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function qeyuceeaeygesuca() { $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto yuoamgkigcwaooqu; } $iqaosyayeiuaisqi = ManipulateServer::yyqgamuwwakgciey(self::iiooageieusuyomy); $migiiksoiymissge = ManipulateServer::yyqgamuwwakgciey(self::sauwwsocmukoaayu); if ($iqaosyayeiuaisqi && $migiiksoiymissge) { goto cqugssuesycomqwa; } $keccaugmemegoimu = __("\154\145\166\145\x6c\x20\x61\156\x64\x20\160\x65\162\155\141\x6c\151\156\153\40\x69\163\40\162\145\x71\x75\151\162\145\40\160\x61\x72\141\x6d\145\164\145\x72\163\x2e", PR__MDL__OPTIMIZATION); goto kaiqsuaywyuckuoo; cqugssuesycomqwa: $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge); if (!(self::kywgiyyageyqwuuc !== $iueymcwwscwqkiyq)) { goto ucecweoaoyeoyuue; } $keccaugmemegoimu = $this->ccioymuswicowwkw($migiiksoiymissge); ucecweoaoyeoyuue: $kigowwqauiumummw = true; kaiqsuaywyuckuoo: yuoamgkigcwaooqu: $this->uaggqsoeugksgooc($kigowwqauiumummw, $keccaugmemegoimu); } public function qwmwewiqecwieoue() { $uuyoeicyoayimaoa = 1; $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto qccmuwiwykuegoga; } $ccosicygoaweskom = DecoratorOption::get(self::ygggeyeauuuaqwou, false); if (!$ccosicygoaweskom || ManipulateDatetime::wguceomqgwouoyks($ccosicygoaweskom)) { goto qaiuogoowcoimwee; } $uamcoiueqaamsqma = sprintf(__("\120\154\145\141\x73\145\x20\x74\x72\x79\x20\141\147\x61\x69\156\x20\141\x66\x74\x65\162\x20\x25\x73\40\150\x6f\x75\162", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($uuyoeicyoayimaoa)); goto osqgywagokmsicqe; qaiuogoowcoimwee: $kigowwqauiumummw = $this->yoeoaweeseqiyesg($uamcoiueqaamsqma); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x75\160\x64\x61\164\x65\137\x72\145\155\x6f\x74\145\x5f\x61\x70\160\x73")); if (!$kigowwqauiumummw) { goto ymwyooosikgokiaa; } DecoratorOption::update(self::ygggeyeauuuaqwou, date("\x59\55\x6d\x2d\144\40\110\x3a\x69\72\163", strtotime("\53{$uuyoeicyoayimaoa}\x20\x68\157\165\162"))); ymwyooosikgokiaa: osqgywagokmsicqe: qccmuwiwykuegoga: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto kuyqusuycscumuek; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\x72\165\x6c\145\163", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\x75\163\145\144"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\160\x61\x67\x65\163"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto qmgueimkwqmsakis; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); qmgueimkwqmsakis: iiuuwuwcwamqegey: } csucwwqcsaymyiuk: if ($suuagcecoyuweoqk) { goto ooqmaweuqmcmwsuk; } $uamcoiueqaamsqma = __("\x4e\157\40\162\145\163\165\x6c\164\40\x66\157\x75\x6e\x64\x20\x74\x6f\x20\163\x68\157\167\x2c\x20\160\154\x65\141\163\x65\x20\143\x68\x61\x6e\x67\x65\40\162\165\154\145\x73\40\x61\x6e\x64\x20\x74\162\171\40\141\x67\x61\151\156\56", PR__MDL__OPTIMIZATION); goto uscissuaiyuiukea; ooqmaweuqmcmwsuk: $occymigcemkqucuw = true; $keccaugmemegoimu["\x6c\x69\163\164"] = $this->iuygowkemiiwqmiw("\x74\141\x62\x6c\x65", ["\x69\x74\145\155\163" => $suuagcecoyuweoqk, "\141\143\x74\151\x6f\156\x73" => ["\x72\x65\155\x6f\166\x65" => ["\164\151\x74\154\145" => __("\122\145\155\157\x76\x65", PR__MDL__OPTIMIZATION), "\151\143\157\156" => IconFontawesomeInterface::cugwqwigakiwyiuk, "\x61\x74\x74\x72\x73" => ["\x63\154\141\x73\x73" => "\162\165\x6c\145\55\x72\145\x6d\x6f\x76\145\x2d\x61\x63\164\151\x6f\156\40\142\165\164\x74\157\156"]]], "\x74\x69\164\x6c\x65\163" => ["\164\151\164\154\x65" => __("\x54\x69\164\154\145", PR__MDL__OPTIMIZATION), "\160\141\147\x65\137\164\171\x70\145" => __("\x50\x61\x67\145\x20\x54\x79\160\x65", PR__MDL__OPTIMIZATION), "\x61\x63\164\151\157\156\163" => __("\101\x63\164\x69\157\156\163", PR__MDL__OPTIMIZATION)]]); uscissuaiyuiukea: kuyqusuycscumuek: if ($occymigcemkqucuw) { goto cycwgukowsksmkyc; } $keccaugmemegoimu = $uamcoiueqaamsqma; cycwgukowsksmkyc: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto ugmukcwgcioqgywy; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq(self::yusuiaeueqwieqqq, []); $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto gcogomgmqcgkeceg; } $uamcoiueqaamsqma = __("\120\141\x67\x65\x20\x6c\151\x73\x74\40\x69\163\x20\x65\155\160\x74\x79\x2c\40\160\154\x65\141\x73\x65\x20\162\x65\x64\145\146\151\x6e\145\x20\160\x61\147\x65\163\x2e", PR__MDL__OPTIMIZATION); goto cksomiiqscosigke; gcogomgmqcgkeceg: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); if ($jwsqucqyaoaasykk) { goto iwcmgioeaiyuacwi; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($this->aqgegcykekmuggsu()); goto iyyaiuccouqowyga; iwcmgioeaiyuacwi: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto qycsooiomiugimqc; } goto siuyaemoiiqyoggo; qycsooiomiugimqc: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto icuukwkwqeoogyae; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto qioswooukgoowsuc; } $icwicymcioeyeyek = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::iiooageieusuyomy => $jwsqucqyaoaasykk::cwoackywkgsameww, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; qioswooukgoowsuc: if (!$icwicymcioeyeyek) { goto aycqgowuwagcgque; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto ywoyioqqyuocoygk; } switch ($kgicwkyskyemksca) { case "\x6f\x75\164\137\x6f\x66\137\x62\165\x64\x67\145\x74": if ($momcykaoccoymeig == 0) { goto mwqcykaeywsmoumm; } $uamcoiueqaamsqma = sprintf(__("\x25\163\40\x6f\146\x20\171\x6f\x75\162\x20\162\x65\161\x75\x65\x73\164\x65\144\40\x70\x61\x67\145\x73\x20\141\x64\x64\x65\144\54\x20\x74\x68\x65\x20\x72\145\155\x61\151\x6e\163\x20\141\162\x65\40\x6e\157\x74\40\x61\154\154\157\x77\x20\164\x6f\40\x61\x64\x64\x2e", PR__MDL__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto awgmyaycugswmwae; mwqcykaeywsmoumm: $uamcoiueqaamsqma = __("\x53\157\x72\x72\x79\x2c\40\x79\157\x75\x72\x20\x72\x65\x71\165\x65\163\164\x65\144\x20\160\162\157\143\x65\x73\x73\x20\164\x65\x72\155\x69\x6e\x61\164\x65\144\x2c\40\142\x65\143\x61\x75\163\x65\40\x79\x6f\165\x20\x61\162\145\x20\x6f\x75\x74\40\157\146\x20\x62\x75\x64\147\x65\x74\x2e", PR__MDL__OPTIMIZATION); awgmyaycugswmwae: goto eimouyomcoqkmaae; } kkwqmoeeqygoimwg: eimouyomcoqkmaae: goto siuyaemoiiqyoggo; goto iauwkeeaqsgweeoo; ywoyioqqyuocoygk: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto ggoimgeeuugseiwk; } $uamcoiueqaamsqma .= $this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]); goto gimquiiwucueoqkw; ggoimgeeuugseiwk: $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); gimquiiwucueoqkw: iauwkeeaqsgweeoo: aycqgowuwagcgque: icuukwkwqeoogyae: koemwyegoqwiikom: } siuyaemoiiqyoggo: iyyaiuccouqowyga: if (!$eciuecguuowmeyqg) { goto ikqagqacuwcgwmqy; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\x75\x72\147\145\x5f\x70\141\147\145\x73"), $eciuecguuowmeyqg); ikqagqacuwcgwmqy: cksomiiqscosigke: ugmukcwgcioqgywy: if ($uamcoiueqaamsqma) { goto kisccmsaieigisiu; } $uamcoiueqaamsqma = __("\x50\x61\x67\x65\x73\40\141\x64\x64\145\144\40\x73\165\x63\143\x65\163\163\x66\x75\154\154\x79\56", PR__MDL__OPTIMIZATION); $occymigcemkqucuw = true; kisccmsaieigisiu: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto esgyqksmcukeuwyk; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\160\x61\x67\145\x5f\x69\x64"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\160\141\x67\145\137\163\164\141\164\x75\163"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto uookseqsmsqgweuy; } $uamcoiueqaamsqma = __("\155\x69\x73\x73\151\156\x67\x20\160\x61\x72\x61\x6d\x65\x74\145\162\54\40\x72\x65\x71\x75\145\163\164\40\151\163\x20\x6e\157\164\x20\x76\x61\x6c\151\144\x2e", PR__MDL__OPTIMIZATION); goto yeaqsiqgakskoykg; uookseqsmsqgweuy: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto eeomcmuiqwgwwuqk; } $uamcoiueqaamsqma = __("\122\145\161\x75\151\x72\145\40\160\141\162\x61\x6d\145\164\145\162\x20\156\x6f\x74\40\x66\157\165\156\x64\x2c\40\162\145\x6c\x6f\x61\144\40\x70\141\147\x65\40\x61\156\x64\x20\x74\162\171\x20\x61\x67\x61\151\156\56", PR__MDL__OPTIMIZATION); goto mseokuecmeoyoggk; eeomcmuiqwgwwuqk: if (ManipulateArray::get($wkawwaegamqisugs, self::ciywsqoeiymemsys) === self::wiewguakgwmoqaea && $this->ewcikckouwmuqkms() <= 0) { goto mwwygasiagaqsimo; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto euoscysqgugsqewc; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\160\165\x72\x67\x65\x5f\160\x61\147\145"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; euoscysqgugsqewc: goto wucacaegysmiusai; mwwygasiagaqsimo: $uamcoiueqaamsqma = __("\x53\x6f\162\162\171\x20\x79\x6f\165\40\141\162\x65\x20\157\x75\164\x20\x6f\146\40\x62\165\x64\147\x65\164\54\40\143\x61\156\x20\156\x6f\x74\x20\x63\x68\x61\156\147\x65\x20\x74\150\151\x73\x20\x70\x61\x67\145\40\163\164\141\164\x75\x73\x20\x74\x6f\40\141\x63\x74\x69\166\x65\x2e\x20\143\x68\141\162\x67\x65\40\171\x6f\165\x72\x20\x6c\x69\143\145\x6e\163\145\x20\146\162\x6f\155\40\123\145\164\164\x69\x6e\147\x73\40\x3e\40\x44\141\x73\x68\x62\157\141\162\144\40\x3e\40\114\x69\x63\145\x6e\163\145", PR__MDL__OPTIMIZATION); wucacaegysmiusai: mseokuecmeoyoggk: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } yeaqsiqgakskoykg: esgyqksmcukeuwyk: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::ayumoauqiqamccyu, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::ksmykycegeiykemu); if (!$cwwmimsuyiesweye) { goto oysyuiqmsokoykaq; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::mswmgkkakuooukme: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto omqyuuomwywmqeiq; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; omqyuuomwywmqeiq: goto eceeoiwuagocweus; } aeockieewgkequae: eceeoiwuagocweus: ycaqooeeseougumo: } iigmgswcogqemgao: oysyuiqmsokoykaq: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::osqayuckuuyukoiw); $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::ackcaikowcokggsc: $ywmkwiwkosakssii[self::eqomgewoayseioos] = $scsyuucsumiwkqqc; goto misiasooemyskoay; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $scsyuucsumiwkqqc; goto misiasooemyskoay; } eomqeimoequmagum: misiasooemyskoay: $gsgqiucqammycmco = Model::symcgieuakksimmu()->woemiikgwoyowsic($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto cqkyumayoemqsueu; } $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::kcaoouwiygwwmiok, []), $gsgqiucqammycmco); cqkyumayoemqsueu: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto ukmgwuiqwgyiouec; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::mgsccwumkcawaqcy]] = $igqsaukqcqscimok; ukmgwuiqwgyiouec: sukcyismwageqgok: } ksqmcugkcmsooeaw: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto wasuquysysmqyegg; } $iswcokucwmiosiaq = __("\122\x75\x6c\x65\x73\40\x69\x73\40\x65\155\160\x74\171", PR__MDL__OPTIMIZATION); goto eqsuaywswuesuika; wasuquysysmqyegg: $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::immuuyigkyiuukwy); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\x70\141\147\x65\x73" => $ocqawgquwsqioses, "\x75\x73\x65\144" => $sqsyqsscqaauwyyy, "\x74\157\x74\x61\154" => $uuwmqqqiwksuaise, "\x72\x65\x6d\141\151\156" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; geoiegikocwmwosi: } qykcggwgkweasuii: eqsuaywswuesuika: return $ksaameoqigiaoigg; } }
