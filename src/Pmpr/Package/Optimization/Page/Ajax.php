<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d54d68de54c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const PREFIX = self::wowuwuigyoceikas . "\x5f\x6c\x69\x63\145\156\x73\x65"; const ucwkciyokauwsyes = self::PREFIX . "\137\143\x68\x65\x63\153\x5f\x62\165\x64\147\x65\164"; const ikageqoesymqusss = self::PREFIX . "\x5f\x67\145\x74\137\x70\x6f\163\164\163\x5f\x62\171\137\x72\165\154\145\x73"; const qeyyssmaimicgksm = self::PREFIX . "\x5f\x61\144\x64\137\160\x61\147\x65\x73\137\142\x79\x5f\x72\x75\154\145\x73"; const awqksmkmsquoymem = self::PREFIX . "\x5f\x63\x68\141\156\147\x65\x5f\160\141\147\145\137\x73\x74\x61\x74\165\x73"; const ygggeyeauuuaqwou = self::wowuwuigyoceikas . "\137\x6e\145\x78\x74\137\x63\x68\x65\143\x6b\137\x62\x75\144\x67\145\x74"; const myikkigscysoykgy = ["\147\x65\x74\x5f\x70\x6f\163\164\x73" => self::ikageqoesymqusss, "\x61\144\144\137\160\x61\x67\145\163" => self::qeyyssmaimicgksm, "\143\x68\x65\x63\153\x5f\x62\165\x64\147\x65\164" => self::ucwkciyokauwsyes, "\x63\x68\x61\x6e\147\145\137\x73\164\x61\x74\165\163" => self::awqksmkmsquoymem]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ucwkciyokauwsyes, [$this, "\x71\167\155\167\x65\x77\x69\x71\145\143\167\151\145\x6f\165\145"])->koaegcswmcqsiykq(self::ikageqoesymqusss, [$this, "\165\x79\145\x63\171\163\x6f\163\x61\163\x79\x6d\171\171\x75\147"])->koaegcswmcqsiykq(self::qeyyssmaimicgksm, [$this, "\x75\147\147\x77\143\x71\165\x6d\157\141\x73\163\145\163\165\145"])->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\x79\163\155\143\171\143\x6b\165\x75\x65\157\141\151\x61\x67"]); parent::wigskegsqequoeks(); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function qwmwewiqecwieoue() { $uuyoeicyoayimaoa = 1; $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto igmawmwssyskqqag; } $ccosicygoaweskom = DecoratorOption::get(self::ygggeyeauuuaqwou, false); if (!$ccosicygoaweskom || ManipulateDatetime::wguceomqgwouoyks($ccosicygoaweskom)) { goto eekkcooqswqouoei; } $uamcoiueqaamsqma = sprintf(__("\120\x6c\145\141\163\x65\x20\x74\x72\171\x20\141\147\141\x69\x6e\x20\x61\x66\x74\x65\x72\40\45\x73\x20\x68\157\165\x72", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($uuyoeicyoayimaoa)); goto cuayqmasemsqsume; eekkcooqswqouoei: $kigowwqauiumummw = $this->yoeoaweeseqiyesg($uamcoiueqaamsqma); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\x75\x70\x64\141\x74\145\x5f\x68\x65\162\x6f\153\x75\x5f\141\x70\160\163")); if (!$kigowwqauiumummw) { goto gcqssckowmywoesw; } DecoratorOption::update(self::ygggeyeauuuaqwou, date("\x59\55\155\x2d\x64\40\x48\x3a\151\x3a\x73", strtotime("\53{$uuyoeicyoayimaoa}\40\x68\x6f\x75\x72"))); gcqssckowmywoesw: cuayqmasemsqsume: igmawmwssyskqqag: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto okuqsqaiwwiigmyu; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\162\165\154\x65\x73", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\x75\x73\x65\x64"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\160\141\x67\145\163"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto ewsigoeswimiueqe; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); ewsigoeswimiueqe: eussqkkimciywios: } iomwkkieqcswkkaw: if ($suuagcecoyuweoqk) { goto gaskcgoeywuyukke; } $uamcoiueqaamsqma = __("\116\157\x20\162\145\163\x75\x6c\164\x20\146\x6f\165\156\144\40\164\x6f\40\163\x68\157\x77\54\x20\x70\154\145\141\163\145\x20\x63\150\141\x6e\x67\x65\40\x72\x75\x6c\145\x73\x20\141\156\x64\x20\164\162\171\x20\141\x67\141\151\x6e\56", PR__PKG__OPTIMIZATION); goto gqaqamewqeaqwcia; gaskcgoeywuyukke: $occymigcemkqucuw = true; $keccaugmemegoimu["\x6c\151\163\164"] = $this->iuygowkemiiwqmiw("\164\x61\142\x6c\145", ["\151\164\145\x6d\x73" => $suuagcecoyuweoqk, "\x61\x63\164\151\157\156\163" => ["\x72\145\x6d\157\166\145" => ["\x74\x69\x74\x6c\x65" => __("\x52\145\x6d\157\166\145", PR__PKG__OPTIMIZATION), "\151\143\x6f\156" => IconFontawesomeInterface::cugwqwigakiwyiuk, "\x61\x74\x74\162\x73" => ["\143\x6c\141\163\163" => "\x72\165\154\145\55\x72\x65\155\x6f\x76\145\x2d\141\143\164\x69\x6f\156\40\x62\165\x74\x74\157\156"]]], "\164\x69\164\154\145\x73" => ["\x74\151\164\154\145" => __("\124\x69\164\x6c\x65", PR__PKG__OPTIMIZATION), "\x70\141\x67\145\137\x74\x79\160\x65" => __("\x50\x61\x67\x65\x20\124\171\160\145", PR__PKG__OPTIMIZATION), "\x61\x63\x74\151\157\x6e\x73" => __("\101\143\x74\151\157\x6e\163", PR__PKG__OPTIMIZATION)]]); gqaqamewqeaqwcia: okuqsqaiwwiigmyu: if ($occymigcemkqucuw) { goto ksiwgckusukisueg; } $keccaugmemegoimu = $uamcoiueqaamsqma; ksiwgckusukisueg: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto gaouaiemokqqgssw; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq(self::yusuiaeueqwieqqq, []); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto ymucaguacemwsgsi; } $uamcoiueqaamsqma = __("\x50\141\147\x65\x20\x6c\151\163\x74\x20\151\x73\40\145\155\x70\164\x79\x2c\40\x70\154\x65\x61\163\145\x20\162\145\x64\x65\146\x69\156\x65\40\x70\x61\147\x65\x73\x2e", PR__PKG__OPTIMIZATION); goto qiikwossequwiuom; ymucaguacemwsgsi: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto geyiosucqswaeasw; } goto sgkqgucguyccaaki; geyiosucqswaeasw: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto wiaymoucakyaikii; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto cmsiuimsiycomyay; } $icwicymcioeyeyek = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::iiooageieusuyomy => $jwsqucqyaoaasykk::cwoackywkgsameww, self::mgsccwumkcawaqcy => $ccamueccusigaaio, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; cmsiuimsiycomyay: if (!$icwicymcioeyeyek) { goto igyesgemqesackws; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto ceaamccscgcmqgka; } switch ($kgicwkyskyemksca) { case "\x6f\165\x74\137\x6f\x66\137\142\165\144\147\145\164": if ($momcykaoccoymeig == 0) { goto qmguoqeawegcoeoa; } $uamcoiueqaamsqma = sprintf(__("\x25\x73\40\157\x66\x20\171\157\165\x72\x20\162\x65\x71\x75\145\x73\x74\x65\144\40\160\x61\x67\145\x73\x20\x61\144\144\x65\x64\54\x20\x74\x68\145\40\x72\x65\155\x61\x69\156\x73\40\x61\162\145\x20\x6e\157\164\x20\141\x6c\154\157\x77\40\164\157\40\x61\x64\144\56", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto ycecaauekkiqacuu; qmguoqeawegcoeoa: $uamcoiueqaamsqma = __("\x53\x6f\x72\x72\171\x2c\40\x79\x6f\165\x72\40\x72\x65\x71\x75\145\163\x74\145\144\x20\160\162\x6f\x63\145\163\163\x20\164\145\162\155\151\156\141\x74\145\144\x2c\40\142\x65\x63\x61\165\163\145\40\x79\157\165\x20\x61\162\x65\40\157\165\164\40\157\146\x20\x62\x75\x64\x67\145\x74\56", PR__PKG__OPTIMIZATION); ycecaauekkiqacuu: goto gmeiuoeewucukque; } sayqggaieocmskko: gmeiuoeewucukque: goto sgkqgucguyccaaki; goto omumkeywqqogwwue; ceaamccscgcmqgka: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq)) { goto qmqmskywcgiqgygm; } $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); goto ccgsycueagwegqeu; qmqmskywcgiqgygm: $uamcoiueqaamsqma .= print_r(ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas), true); ccgsycueagwegqeu: omumkeywqqogwwue: igyesgemqesackws: wiaymoucakyaikii: omuemegmkesqgwys: } sgkqgucguyccaaki: if (!$eciuecguuowmeyqg) { goto ociesuicgmkekcue; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\160\165\x72\x67\145\x5f\160\x61\147\145\163"), $eciuecguuowmeyqg); ociesuicgmkekcue: qiikwossequwiuom: gaouaiemokqqgssw: if ($uamcoiueqaamsqma) { goto wqwmuuicoqigqwyc; } $uamcoiueqaamsqma = __("\x50\x61\147\x65\x73\x20\x61\144\x64\145\144\x20\x73\165\143\143\145\163\x73\146\x75\x6c\x6c\171\x2e", PR__PKG__OPTIMIZATION); $occymigcemkqucuw = true; wqwmuuicoqigqwyc: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto syisomgawcsqeemk; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\x70\141\147\x65\x5f\x69\144"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\x70\141\x67\145\137\x73\x74\141\x74\x75\x73"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto sockocsycmkaeosg; } $uamcoiueqaamsqma = __("\x6d\x69\163\x73\x69\x6e\147\40\x70\141\162\141\155\x65\x74\145\162\54\x20\162\x65\161\165\145\163\164\x20\x69\163\40\x6e\157\x74\40\x76\x61\154\151\144\56", PR__PKG__OPTIMIZATION); goto ugkwqaywmwqucoeo; sockocsycmkaeosg: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto ywokggauuiosegog; } $uamcoiueqaamsqma = __("\x52\145\x71\x75\x69\x72\x65\x20\x70\141\162\x61\155\145\164\x65\x72\x20\x6e\x6f\x74\x20\146\157\165\x6e\x64\54\x20\162\x65\x6c\157\141\x64\40\x70\x61\x67\x65\x20\x61\x6e\x64\40\164\x72\171\x20\141\x67\x61\151\156\x2e", PR__PKG__OPTIMIZATION); goto uoewiggumomegksg; ywokggauuiosegog: if (ManipulateArray::get($wkawwaegamqisugs, self::ciywsqoeiymemsys) === self::wiewguakgwmoqaea && $this->ewcikckouwmuqkms() <= 0) { goto qywkykqkeeuccoui; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto oqgymyiwckkwueuw; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\x70\165\x72\147\145\137\160\x61\x67\x65"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; oqgymyiwckkwueuw: goto yqqseqskcqeqkacm; qywkykqkeeuccoui: $uamcoiueqaamsqma = __("\x53\x6f\x72\x72\x79\x20\x79\157\165\40\x61\x72\145\x20\157\x75\x74\40\157\146\x20\x62\165\144\x67\145\164\x2c\40\143\x61\156\x20\x6e\157\164\x20\143\x68\x61\x6e\147\145\40\164\x68\151\163\x20\x70\x61\x67\145\40\x73\164\141\x74\165\x73\x20\x74\157\40\141\x63\x74\151\x76\x65\56\40\143\x68\x61\x72\x67\145\x20\x79\157\x75\x72\x20\x6c\151\143\145\156\x73\x65\x20\146\x72\x6f\x6d\x20\123\x65\164\164\151\x6e\x67\163\40\x3e\x20\x44\141\163\150\142\157\141\162\144\x20\76\40\114\x69\x63\x65\x6e\163\145", PR__PKG__OPTIMIZATION); yqqseqskcqeqkacm: uoewiggumomegksg: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } ugkwqaywmwqucoeo: syisomgawcsqeemk: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::ayumoauqiqamccyu, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::ksmykycegeiykemu); if (!$cwwmimsuyiesweye) { goto awuwuuuagqysukku; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::mswmgkkakuooukme: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto kkmuuoscccmokkiw; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; kkmuuoscccmokkiw: goto kiskwawumeiiieuk; } oaqeoqsksuyyggmg: kiskwawumeiiieuk: kwasqmcyiswoaiuu: } asoecuscmsyusmkg: awuwuuuagqysukku: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::osqayuckuuyukoiw); $ywmkwiwkosakssii = [self::goqgcigmiawyauai => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::ackcaikowcokggsc: $ywmkwiwkosakssii[self::eqomgewoayseioos] = $scsyuucsumiwkqqc; goto miugmimciywcgswm; case self::ccyeycyyykwuymsy: $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = $scsyuucsumiwkqqc; goto miugmimciywcgswm; } aqekkeqmmewoyawu: miugmimciywcgswm: $gsgqiucqammycmco = Model::symcgieuakksimmu()->woemiikgwoyowsic($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto mcqwuawosciucemq; } $ywmkwiwkosakssii[self::kcaoouwiygwwmiok] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::kcaoouwiygwwmiok, []), $gsgqiucqammycmco); mcqwuawosciucemq: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto csaksaisgawusswg; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::mgsccwumkcawaqcy]] = $igqsaukqcqscimok; csaksaisgawusswg: maggecymmmesqmqs: } emeeocqaisksyioq: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto gyskcwykkyakeims; } $iswcokucwmiosiaq = __("\122\165\x6c\x65\x73\40\151\x73\x20\x65\x6d\160\164\171", PR__PKG__OPTIMIZATION); goto ossakckwskyqusmm; gyskcwykkyakeims: $gqswsiquqaayuakq = $this->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::immuuyigkyiuukwy); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\160\141\147\145\x73" => $ocqawgquwsqioses, "\165\163\145\144" => $sqsyqsscqaauwyyy, "\164\157\x74\x61\154" => $uuwmqqqiwksuaise, "\162\x65\x6d\141\x69\156" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; qkiyyywwuiuackao: } ecgwgamiseokmise: ossakckwskyqusmm: return $ksaameoqigiaoigg; } }
