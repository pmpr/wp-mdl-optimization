<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b865b46dbbe             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const PREFIX = self::OPTIMIZATION . "\x5f\154\x69\x63\x65\156\x73\145"; const GET_POSTS_BY_RULES = self::PREFIX . "\137\147\145\164\137\x70\x6f\163\164\163\137\x62\171\x5f\x72\165\x6c\145\x73"; const ADD_PAGES_BY_RULES = self::PREFIX . "\x5f\141\x64\144\x5f\160\141\147\145\163\137\142\171\137\162\165\154\x65\163"; const CHANGE_PAGE_STATUS = self::PREFIX . "\x5f\x63\150\141\x6e\x67\145\x5f\x70\x61\x67\x65\137\163\x74\141\x74\x75\x73"; const ACTIONS = ["\x67\145\164\137\x70\157\x73\x74\x73" => self::GET_POSTS_BY_RULES, "\141\x64\144\x5f\160\x61\147\x65\x73" => self::ADD_PAGES_BY_RULES, "\x63\150\141\x6e\x67\145\137\163\164\141\x74\165\x73" => self::CHANGE_PAGE_STATUS]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::GET_POSTS_BY_RULES, [$this, "\165\171\x65\x63\x79\163\x6f\x73\141\x73\171\x6d\171\171\165\x67"])->koaegcswmcqsiykq(self::ADD_PAGES_BY_RULES, [$this, "\165\147\147\x77\x63\x71\165\x6d\x6f\x61\163\x73\x65\x73\165\145"])->koaegcswmcqsiykq(self::CHANGE_PAGE_STATUS, [$this, "\143\x79\x73\x6d\143\x79\143\153\165\x75\145\x6f\141\x69\x61\x67"]); parent::wigskegsqequoeks(); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto seyygcwcaogkmaqe; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\162\165\154\145\163", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\165\163\145\x64"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\x70\x61\147\x65\x73"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto soqkewsayowwcmco; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); soqkewsayowwcmco: ugyawwukegyoqmsq: } ciiyqsiswkcwsocm: if ($suuagcecoyuweoqk) { goto ukigmkeewuqomooc; } $uamcoiueqaamsqma = __("\116\x6f\x20\162\145\163\x75\154\164\40\x66\x6f\165\156\x64\x20\x74\x6f\40\163\150\x6f\167\54\40\x70\x6c\145\x61\163\x65\40\143\x68\141\x6e\x67\x65\x20\x72\165\x6c\x65\x73\x20\x61\156\144\x20\x74\162\x79\40\x61\x67\x61\151\x6e\x2e", PR__PKG__OPTIMIZATION); goto wwgikwuigiiqsswq; ukigmkeewuqomooc: $occymigcemkqucuw = true; $keccaugmemegoimu["\x6c\x69\x73\164"] = $this->iuygowkemiiwqmiw("\164\x61\142\154\x65", ["\151\164\145\155\163" => $suuagcecoyuweoqk, "\141\x63\164\151\157\156\x73" => ["\x72\x65\x6d\x6f\166\145" => ["\164\x69\x74\154\145" => __("\x52\x65\x6d\x6f\166\145", PR__PKG__OPTIMIZATION), "\151\x63\x6f\156" => IconFontawesomeInterface::ICON_XMARK, "\x61\x74\164\x72\x73" => ["\x63\x6c\141\163\163" => "\162\x75\x6c\145\x2d\162\x65\x6d\157\166\145\55\141\x63\164\x69\157\156\x20\142\x75\164\x74\x6f\156"]]], "\164\x69\164\x6c\x65\163" => ["\164\x69\164\154\x65" => __("\x54\151\x74\x6c\145", PR__PKG__OPTIMIZATION), "\x70\x61\147\x65\137\164\x79\160\145" => __("\120\x61\147\x65\x20\x54\171\x70\145", PR__PKG__OPTIMIZATION), "\141\143\x74\x69\157\x6e\x73" => __("\x41\x63\164\x69\x6f\156\163", PR__PKG__OPTIMIZATION)]]); wwgikwuigiiqsswq: seyygcwcaogkmaqe: if ($occymigcemkqucuw) { goto uugiuqkesegaamqw; } $keccaugmemegoimu = $uamcoiueqaamsqma; uugiuqkesegaamqw: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto gscyiqmmegqmqcoe; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq("\x70\x61\147\x65\163", []); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $gqswsiquqaayuakq = $jwsqucqyaoaasykk->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto cciakcwuweqmcose; } $uamcoiueqaamsqma = __("\x50\141\x67\x65\x20\x6c\x69\163\x74\40\151\x73\40\145\x6d\160\x74\x79\54\40\160\x6c\145\x61\163\145\40\162\x65\x64\145\146\151\156\x65\x20\160\141\x67\145\163\56", PR__PKG__OPTIMIZATION); goto uckusgwkoycmkeam; cciakcwuweqmcose: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto uwyeycaywowwiquu; } goto ykcmomsiayaymysm; uwyeycaywowwiquu: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::TYPE); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::TARGET); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto kkckyqmcyussauma; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto cwmuqmoeauqcewoy; } $icwicymcioeyeyek = [self::TYPE => $sqeykgyoooqysmca, self::LEVEL => $jwsqucqyaoaasykk::LEVEL_2, self::TARGET => $ccamueccusigaaio, self::STATUS => self::ACTIVE]; cwmuqmoeauqcewoy: if (!$icwicymcioeyeyek) { goto gqeoaceyoiicoaec; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto msmmiaumiasmsiog; } switch ($kgicwkyskyemksca) { case "\157\165\164\x5f\x6f\146\137\x62\165\144\147\x65\164": if ($momcykaoccoymeig == 0) { goto wicuauokauykwoeu; } $uamcoiueqaamsqma = sprintf(__("\x25\163\x20\x6f\146\x20\x79\x6f\165\162\40\x72\x65\161\165\145\163\164\145\x64\40\160\141\147\x65\x73\x20\141\x64\144\x65\x64\54\x20\x74\x68\145\x20\x72\x65\x6d\x61\x69\x6e\163\x20\x61\x72\145\40\156\157\164\x20\141\154\x6c\x6f\167\x20\x74\157\x20\x61\144\x64\x2e", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto gcecieuocqawmgci; wicuauokauykwoeu: $uamcoiueqaamsqma = __("\123\x6f\x72\162\x79\x2c\40\x79\157\165\x72\40\162\x65\x71\x75\145\163\x74\145\144\40\160\162\157\x63\x65\163\163\x20\164\x65\162\155\x69\x6e\x61\x74\x65\x64\54\x20\x62\145\x63\141\x75\163\x65\x20\x79\157\x75\x20\x61\x72\x65\x20\x6f\x75\164\40\157\x66\40\x62\x75\x64\147\145\x74\x2e", PR__PKG__OPTIMIZATION); gcecieuocqawmgci: goto ceosmkqgqgwsowwg; } kcwgiwimgqesukqu: ceosmkqgqgwsowwg: goto ykcmomsiayaymysm; goto oksqsucimimsswcg; msmmiaumiasmsiog: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!ManipulateArray::get($sogksuscggsicmac, self::SUCCESS)) { goto eiecgqokmuekaesc; } $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); goto ggsugekocmsukuci; eiecgqokmuekaesc: $uamcoiueqaamsqma .= print_r(ManipulateArray::get($sogksuscggsicmac, self::ERRORS), true); ggsugekocmsukuci: oksqsucimimsswcg: gqeoaceyoiicoaec: kkckyqmcyussauma: qoaawmmcqyacokws: } ykcmomsiayaymysm: if (!$eciuecguuowmeyqg) { goto ikukqooiowqywyqo; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\160\x75\162\x67\145\x5f\160\141\x67\x65\x73"), $eciuecguuowmeyqg); ikukqooiowqywyqo: uckusgwkoycmkeam: gscyiqmmegqmqcoe: if ($uamcoiueqaamsqma) { goto mieoguuqiwqioeqa; } $uamcoiueqaamsqma = __("\x50\x61\147\x65\x73\40\x61\144\x64\145\144\40\163\x75\x63\143\x65\x73\163\146\165\x6c\154\171\x2e", PR__PKG__OPTIMIZATION); $occymigcemkqucuw = true; mieoguuqiwqioeqa: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto cuayqmasemsqsume; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\x70\x61\147\x65\137\151\x64"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\160\x61\147\x65\137\163\164\141\x74\165\x73"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto gcqssckowmywoesw; } $uamcoiueqaamsqma = __("\x6d\x69\x73\x73\x69\156\147\x20\160\x61\x72\x61\155\x65\164\x65\162\x2c\x20\162\145\x71\x75\145\x73\164\x20\151\163\x20\x6e\x6f\x74\x20\x76\x61\x6c\x69\x64\x2e", PR__PKG__OPTIMIZATION); goto eekkcooqswqouoei; gcqssckowmywoesw: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto icoiqskygugkgmkm; } $uamcoiueqaamsqma = __("\x52\x65\x71\x75\151\x72\x65\x20\160\141\x72\141\x6d\145\164\145\x72\x20\x6e\x6f\164\40\146\x6f\165\156\x64\54\x20\162\x65\x6c\157\x61\144\x20\x70\x61\x67\x65\40\x61\x6e\x64\x20\x74\162\171\x20\x61\x67\141\151\156\x2e", PR__PKG__OPTIMIZATION); goto kocaieyauyiqmyiy; icoiqskygugkgmkm: if (ManipulateArray::get($wkawwaegamqisugs, self::STATUS) === self::IGNORED && $meywaqqsugaoeyys->ewcikckouwmuqkms() <= 0) { goto swicauyqusmgeccu; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto qosswumywsaeyqus; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x70\165\x72\147\x65\x5f\160\141\147\145"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; qosswumywsaeyqus: goto maguoggkqamaiuag; swicauyqusmgeccu: $uamcoiueqaamsqma = __("\123\157\x72\x72\x79\x20\171\x6f\165\x20\x61\162\x65\x20\x6f\165\x74\x20\157\146\x20\142\165\144\147\145\164\54\40\143\141\x6e\x20\x6e\x6f\x74\40\x63\x68\x61\x6e\147\145\40\x74\x68\151\x73\x20\x70\141\147\x65\40\163\x74\141\164\165\163\40\x74\157\x20\141\143\x74\x69\x76\x65\56\x20\143\150\141\x72\x67\x65\40\x79\x6f\x75\162\x20\x6c\151\143\145\x6e\163\x65\40\146\162\157\x6d\x20\x53\x65\x74\x74\151\x6e\147\x73\x20\76\x20\104\x61\x73\150\x62\x6f\141\162\144\x20\76\x20\114\x69\143\145\156\x73\x65", PR__PKG__OPTIMIZATION); maguoggkqamaiuag: kocaieyauyiqmyiy: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } eekkcooqswqouoei: cuayqmasemsqsume: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_SPECIAL_PAGES, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_TARGET_FILTER_TYPE); if (!$cwwmimsuyiesweye) { goto gqaqamewqeaqwcia; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::ARCHIVE: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto gaskcgoeywuyukke; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; gaskcgoeywuyukke: goto eussqkkimciywios; } ewsigoeswimiueqe: eussqkkimciywios: iomwkkieqcswkkaw: } igmawmwssyskqqag: gqaqamewqeaqwcia: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_TARGET_FILTER); $ywmkwiwkosakssii = [self::POSTS_PER_PAGE => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::INCLUDE: $ywmkwiwkosakssii[self::POST__IN] = $scsyuucsumiwkqqc; goto okuqsqaiwwiigmyu; case self::EXCLUDE: $ywmkwiwkosakssii[self::POST__NOT_IN] = $scsyuucsumiwkqqc; goto okuqsqaiwwiigmyu; } ksiwgckusukisueg: okuqsqaiwwiigmyu: $gsgqiucqammycmco = Model::symcgieuakksimmu()->yicuwciwamwisgsa($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto sgkqgucguyccaaki; } $ywmkwiwkosakssii[self::POST__NOT_IN] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::POST__NOT_IN, []), $gsgqiucqammycmco); sgkqgucguyccaaki: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto cmsiuimsiycomyay; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::TARGET]] = $igqsaukqcqscimok; cmsiuimsiycomyay: geyiosucqswaeasw: } omuemegmkesqgwys: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto gmeiuoeewucukque; } $iswcokucwmiosiaq = __("\122\165\154\145\163\40\x69\163\40\145\x6d\160\x74\171", PR__PKG__OPTIMIZATION); goto sayqggaieocmskko; gmeiuoeewucukque: $gqswsiquqaayuakq = Model::symcgieuakksimmu()->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_TARGET_TYPE); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\160\141\147\x65\x73" => $ocqawgquwsqioses, "\x75\163\x65\144" => $sqsyqsscqaauwyyy, "\x74\x6f\164\x61\154" => $uuwmqqqiwksuaise, "\x72\x65\155\141\151\x6e" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; ccgsycueagwegqeu: } qmqmskywcgiqgygm: sayqggaieocmskko: return $ksaameoqigiaoigg; } }
