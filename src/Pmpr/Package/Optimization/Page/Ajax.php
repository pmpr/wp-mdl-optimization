<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b8710debefd             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use stdClass; class Ajax extends Common { const PREFIX = self::OPTIMIZATION . "\137\x6c\x69\143\145\x6e\163\145"; const GET_POSTS_BY_RULES = self::PREFIX . "\x5f\147\x65\164\x5f\x70\157\163\x74\163\137\142\x79\x5f\162\x75\154\x65\163"; const ADD_PAGES_BY_RULES = self::PREFIX . "\x5f\x61\144\x64\x5f\160\x61\147\145\163\137\142\171\137\162\165\x6c\x65\x73"; const CHANGE_PAGE_STATUS = self::PREFIX . "\137\x63\x68\141\x6e\x67\145\x5f\x70\x61\x67\145\x5f\x73\164\x61\164\x75\163"; const ACTIONS = ["\147\x65\164\137\x70\157\x73\164\163" => self::GET_POSTS_BY_RULES, "\141\144\x64\137\160\x61\147\145\x73" => self::ADD_PAGES_BY_RULES, "\143\x68\x61\156\147\x65\x5f\x73\164\141\x74\x75\163" => self::CHANGE_PAGE_STATUS]; protected ?API $api = null; public function __construct() { $this->api = API::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::GET_POSTS_BY_RULES, [$this, "\165\x79\145\143\x79\163\x6f\163\x61\163\171\x6d\x79\x79\x75\147"])->koaegcswmcqsiykq(self::ADD_PAGES_BY_RULES, [$this, "\165\147\x67\x77\143\161\165\155\x6f\x61\163\163\x65\x73\165\145"])->koaegcswmcqsiykq(self::CHANGE_PAGE_STATUS, [$this, "\143\171\x73\x6d\143\x79\x63\x6b\x75\x75\x65\x6f\141\x69\141\x67"]); parent::wigskegsqequoeks(); } public function auamgqiwisysomsa() : ?API { return $this->api; } public function uyecysosasymyyug() { $occymigcemkqucuw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto uugiuqkesegaamqw; } $suuagcecoyuweoqk = []; $acqqmqmcquukaqsc = ManipulateServer::ayueggmoqeeukqmq("\162\165\x6c\145\163", []); $keccaugmemegoimu = $this->ioucsiguaciwkgqc($acqqmqmcquukaqsc, $uamcoiueqaamsqma); foreach ($keccaugmemegoimu as $igqsaukqcqscimok) { $sqsyqsscqaauwyyy = ManipulateArray::get($igqsaukqcqscimok, "\165\x73\145\144"); $ocqawgquwsqioses = ManipulateArray::unset($igqsaukqcqscimok, "\160\141\x67\145\x73"); if (!($sqsyqsscqaauwyyy > 0 && $ocqawgquwsqioses)) { goto ukigmkeewuqomooc; } $suuagcecoyuweoqk = array_merge($suuagcecoyuweoqk, array_slice($ocqawgquwsqioses, 0, $sqsyqsscqaauwyyy)); ukigmkeewuqomooc: soqkewsayowwcmco: } ugyawwukegyoqmsq: if ($suuagcecoyuweoqk) { goto wwgikwuigiiqsswq; } $uamcoiueqaamsqma = __("\116\x6f\x20\162\145\x73\165\154\164\40\x66\157\165\156\144\x20\164\157\40\x73\x68\157\167\x2c\x20\x70\x6c\x65\141\163\145\x20\143\150\141\156\x67\145\x20\x72\165\x6c\x65\x73\40\141\156\144\x20\x74\162\x79\40\x61\147\141\151\156\56", PR__PKG__OPTIMIZATION); goto seyygcwcaogkmaqe; wwgikwuigiiqsswq: $occymigcemkqucuw = true; $keccaugmemegoimu["\154\151\163\x74"] = $this->iuygowkemiiwqmiw("\164\x61\x62\x6c\x65", ["\151\164\x65\155\163" => $suuagcecoyuweoqk, "\141\143\x74\151\x6f\x6e\163" => ["\162\145\x6d\157\166\x65" => ["\164\151\x74\154\x65" => __("\122\145\x6d\x6f\x76\145", PR__PKG__OPTIMIZATION), "\x69\x63\x6f\156" => IconFontawesomeInterface::ICON_XMARK, "\x61\164\164\162\163" => ["\x63\154\x61\163\x73" => "\162\165\154\145\55\162\145\155\x6f\166\x65\x2d\141\143\x74\151\x6f\156\x20\x62\165\164\164\x6f\x6e"]]], "\164\x69\x74\154\x65\163" => ["\x74\x69\164\154\x65" => __("\x54\151\x74\x6c\x65", PR__PKG__OPTIMIZATION), "\160\x61\147\145\x5f\x74\171\x70\x65" => __("\120\141\x67\145\x20\x54\171\160\145", PR__PKG__OPTIMIZATION), "\x61\x63\x74\x69\157\x6e\x73" => __("\101\143\x74\x69\x6f\x6e\x73", PR__PKG__OPTIMIZATION)]]); seyygcwcaogkmaqe: uugiuqkesegaamqw: if ($occymigcemkqucuw) { goto ykcmomsiayaymysm; } $keccaugmemegoimu = $uamcoiueqaamsqma; ykcmomsiayaymysm: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function uggwcqumoassesue() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto mieoguuqiwqioeqa; } $eciuecguuowmeyqg = []; $ocqawgquwsqioses = ManipulateServer::ayueggmoqeeukqmq("\x70\141\147\145\x73", []); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $gqswsiquqaayuakq = $jwsqucqyaoaasykk->ewcikckouwmuqkms(); if ($ocqawgquwsqioses && is_array($ocqawgquwsqioses)) { goto uckusgwkoycmkeam; } $uamcoiueqaamsqma = __("\x50\x61\x67\x65\x20\154\151\163\164\x20\x69\x73\40\145\x6d\160\164\x79\54\x20\x70\x6c\145\x61\x73\145\x20\x72\x65\x64\145\146\x69\x6e\x65\x20\160\141\147\x65\x73\56", PR__PKG__OPTIMIZATION); goto gscyiqmmegqmqcoe; uckusgwkoycmkeam: foreach ($ocqawgquwsqioses as $momcykaoccoymeig => $suaemuyiacqyugsm) { if (!($momcykaoccoymeig >= $gqswsiquqaayuakq)) { goto cwmuqmoeauqcewoy; } goto qoaawmmcqyacokws; cwmuqmoeauqcewoy: $sqeykgyoooqysmca = ManipulateArray::get($suaemuyiacqyugsm, self::TYPE); $ccamueccusigaaio = ManipulateArray::get($suaemuyiacqyugsm, self::TARGET); if (!($ccamueccusigaaio && $sqeykgyoooqysmca)) { goto ikukqooiowqywyqo; } $myagqecycsaiyqsk = $jwsqucqyaoaasykk->syoquewuemwigaaw($ccamueccusigaaio, $sqeykgyoooqysmca); $icwicymcioeyeyek = []; if ($myagqecycsaiyqsk) { goto eiecgqokmuekaesc; } $icwicymcioeyeyek = [self::TYPE => $sqeykgyoooqysmca, self::LEVEL => $jwsqucqyaoaasykk::LEVEL_2, self::TARGET => $ccamueccusigaaio, self::STATUS => self::ACTIVE]; eiecgqokmuekaesc: if (!$icwicymcioeyeyek) { goto kkckyqmcyussauma; } if ($this->auamgqiwisysomsa()->auuqggkaeoomcksu($sqeykgyoooqysmca, $ccamueccusigaaio, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto oksqsucimimsswcg; } switch ($kgicwkyskyemksca) { case "\x6f\x75\x74\137\157\146\x5f\142\165\144\x67\x65\164": if ($momcykaoccoymeig == 0) { goto gcecieuocqawmgci; } $uamcoiueqaamsqma = sprintf(__("\x25\163\x20\x6f\x66\40\171\157\x75\162\40\162\145\x71\x75\x65\163\x74\x65\x64\x20\160\141\147\145\x73\x20\x61\x64\144\x65\x64\54\x20\x74\x68\145\40\x72\x65\x6d\141\x69\x6e\x73\40\141\162\x65\x20\x6e\157\x74\x20\x61\x6c\x6c\x6f\167\x20\x74\x6f\40\x61\x64\x64\56", PR__PKG__OPTIMIZATION), $this->msywmyaoqmaegsuy($momcykaoccoymeig)); goto msmmiaumiasmsiog; gcecieuocqawmgci: $uamcoiueqaamsqma = __("\123\x6f\162\162\171\54\x20\x79\x6f\165\x72\40\x72\x65\161\165\145\x73\164\145\144\x20\x70\x72\157\x63\145\163\x73\x20\x74\145\x72\x6d\x69\x6e\141\x74\145\144\54\40\x62\x65\x63\x61\x75\163\145\x20\171\x6f\165\x20\x61\x72\145\40\157\x75\164\40\x6f\x66\40\142\x75\144\x67\145\x74\56", PR__PKG__OPTIMIZATION); msmmiaumiasmsiog: goto kcwgiwimgqesukqu; } wicuauokauykwoeu: kcwgiwimgqesukqu: goto qoaawmmcqyacokws; goto gqeoaceyoiicoaec; oksqsucimimsswcg: $sogksuscggsicmac = $jwsqucqyaoaasykk->gscuuyuyauokoyuo($icwicymcioeyeyek); if (!ManipulateArray::get($sogksuscggsicmac, self::SUCCESS)) { goto ggsugekocmsukuci; } $eciuecguuowmeyqg[] = ManipulateArray::get($sogksuscggsicmac, $jwsqucqyaoaasykk->kumuygiiqswoyasy()); goto ceosmkqgqgwsowwg; ggsugekocmsukuci: $uamcoiueqaamsqma .= print_r(ManipulateArray::get($sogksuscggsicmac, self::ERRORS), true); ceosmkqgqgwsowwg: gqeoaceyoiicoaec: kkckyqmcyussauma: ikukqooiowqywyqo: uwyeycaywowwiquu: } qoaawmmcqyacokws: if (!$eciuecguuowmeyqg) { goto cciakcwuweqmcose; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\160\165\162\147\145\x5f\160\141\x67\x65\163"), $eciuecguuowmeyqg); cciakcwuweqmcose: gscyiqmmegqmqcoe: mieoguuqiwqioeqa: if ($uamcoiueqaamsqma) { goto qosswumywsaeyqus; } $uamcoiueqaamsqma = __("\x50\x61\x67\x65\x73\40\141\x64\144\x65\x64\x20\x73\x75\143\143\145\163\163\146\165\154\154\x79\56", PR__PKG__OPTIMIZATION); $occymigcemkqucuw = true; qosswumywsaeyqus: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cysmcyckuueoaiag() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto igmawmwssyskqqag; } $suaemuyiacqyugsm = ManipulateServer::ayueggmoqeeukqmq("\160\x61\x67\x65\137\x69\x64"); $iueymcwwscwqkiyq = ManipulateServer::ayueggmoqeeukqmq("\x70\141\147\145\x5f\163\164\141\164\165\163"); if ($suaemuyiacqyugsm && $iueymcwwscwqkiyq) { goto eekkcooqswqouoei; } $uamcoiueqaamsqma = __("\155\151\x73\163\151\x6e\147\x20\x70\141\162\141\155\x65\x74\x65\162\54\40\x72\x65\161\x75\x65\163\x74\40\151\x73\x20\x6e\157\x74\x20\166\141\x6c\151\x64\x2e", PR__PKG__OPTIMIZATION); goto cuayqmasemsqsume; eekkcooqswqouoei: try { $meywaqqsugaoeyys = Model::symcgieuakksimmu(); $wkawwaegamqisugs = $meywaqqsugaoeyys->akkkoiiymmamsauc($suaemuyiacqyugsm); if ($wkawwaegamqisugs instanceof stdClass) { goto kocaieyauyiqmyiy; } $uamcoiueqaamsqma = __("\x52\x65\x71\165\151\162\x65\x20\160\x61\x72\141\155\x65\164\x65\x72\x20\x6e\157\x74\x20\x66\x6f\165\x6e\x64\x2c\x20\162\145\154\x6f\141\144\40\160\x61\147\x65\40\141\x6e\x64\x20\x74\x72\171\40\141\x67\141\x69\156\56", PR__PKG__OPTIMIZATION); goto gcqssckowmywoesw; kocaieyauyiqmyiy: if (ManipulateArray::get($wkawwaegamqisugs, self::STATUS) === self::IGNORED && $meywaqqsugaoeyys->ewcikckouwmuqkms() <= 0) { goto maguoggkqamaiuag; } if (!$meywaqqsugaoeyys->ayakoikewusskayc($wkawwaegamqisugs, $iueymcwwscwqkiyq, $uamcoiueqaamsqma, $kgicwkyskyemksca)) { goto swicauyqusmgeccu; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\160\165\x72\147\145\x5f\160\141\x67\x65"), $suaemuyiacqyugsm); $occymigcemkqucuw = true; swicauyqusmgeccu: goto icoiqskygugkgmkm; maguoggkqamaiuag: $uamcoiueqaamsqma = __("\x53\x6f\162\x72\x79\x20\171\157\x75\40\x61\x72\x65\40\157\165\x74\40\157\x66\40\x62\165\144\147\145\x74\x2c\40\143\141\156\x20\x6e\157\164\x20\x63\150\x61\x6e\147\145\x20\x74\150\x69\163\40\x70\141\147\145\x20\x73\164\141\164\165\x73\40\x74\157\x20\141\143\164\x69\x76\145\x2e\40\143\150\141\162\x67\x65\x20\171\157\x75\x72\x20\x6c\151\143\x65\x6e\x73\x65\40\x66\x72\x6f\155\40\123\145\x74\x74\151\x6e\x67\163\40\76\40\x44\141\x73\x68\142\157\141\162\144\40\76\40\114\x69\143\145\156\x73\x65", PR__PKG__OPTIMIZATION); icoiqskygugkgmkm: gcqssckowmywoesw: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } cuayqmasemsqsume: igmawmwssyskqqag: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gaeqamemwmwsyukm = 0) : array { $ocqawgquwsqioses = []; $cwwmimsuyiesweye = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_SPECIAL_PAGES, []); $ocykusouawesukco = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_TARGET_FILTER_TYPE); if (!$cwwmimsuyiesweye) { goto okuqsqaiwwiigmyu; } foreach ($cwwmimsuyiesweye as $ooiewiwkegguusum) { switch ($ooiewiwkegguusum) { case self::ARCHIVE: $igqsaukqcqscimok = $this->okgswumokyoaosow(ManipulatePost::waaisqccqacqeium($sqeykgyoooqysmca)); if (!$igqsaukqcqscimok) { goto gqaqamewqeaqwcia; } $ocqawgquwsqioses[$sqeykgyoooqysmca] = $igqsaukqcqscimok; gqaqamewqeaqwcia: goto ewsigoeswimiueqe; } gaskcgoeywuyukke: ewsigoeswimiueqe: eussqkkimciywios: } iomwkkieqcswkkaw: okuqsqaiwwiigmyu: $scsyuucsumiwkqqc = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_TARGET_FILTER); $ywmkwiwkosakssii = [self::POSTS_PER_PAGE => $gaeqamemwmwsyukm]; switch ($ocykusouawesukco) { case self::INCLUDE: $ywmkwiwkosakssii[self::POST__IN] = $scsyuucsumiwkqqc; goto ksiwgckusukisueg; case self::EXCLUDE: $ywmkwiwkosakssii[self::POST__NOT_IN] = $scsyuucsumiwkqqc; goto ksiwgckusukisueg; } sgkqgucguyccaaki: ksiwgckusukisueg: $gsgqiucqammycmco = Model::symcgieuakksimmu()->yicuwciwamwisgsa($sqeykgyoooqysmca); if (!$gsgqiucqammycmco) { goto omuemegmkesqgwys; } $ywmkwiwkosakssii[self::POST__NOT_IN] = array_merge(ManipulateArray::get($ywmkwiwkosakssii, self::POST__NOT_IN, []), $gsgqiucqammycmco); omuemegmkesqgwys: $suuagcecoyuweoqk = ManipulatePost::ciugwooasaqcywas($sqeykgyoooqysmca, $ywmkwiwkosakssii); foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $igqsaukqcqscimok = $this->okgswumokyoaosow($igqsaukqcqscimok); if (!$igqsaukqcqscimok) { goto qmqmskywcgiqgygm; } $ocqawgquwsqioses[$igqsaukqcqscimok[self::TARGET]] = $igqsaukqcqscimok; qmqmskywcgiqgygm: cmsiuimsiycomyay: } geyiosucqswaeasw: return $ocqawgquwsqioses; } public function ioucsiguaciwkgqc($acqqmqmcquukaqsc, &$iswcokucwmiosiaq) : array { $ksaameoqigiaoigg = []; if ($acqqmqmcquukaqsc) { goto sayqggaieocmskko; } $iswcokucwmiosiaq = __("\x52\165\154\x65\x73\40\151\x73\x20\x65\x6d\160\x74\x79", PR__PKG__OPTIMIZATION); goto qmguoqeawegcoeoa; sayqggaieocmskko: $gqswsiquqaayuakq = Model::symcgieuakksimmu()->ewcikckouwmuqkms(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $sqeykgyoooqysmca = ManipulateArray::get($ekuqiqmikiicgoss, self::RULE_TARGET_TYPE); $ocqawgquwsqioses = $this->cssaamgmuamuqeug($ekuqiqmikiicgoss, $sqeykgyoooqysmca, $gqswsiquqaayuakq); $uuwmqqqiwksuaise = count($ocqawgquwsqioses); $sqsyqsscqaauwyyy = min($uuwmqqqiwksuaise, $gqswsiquqaayuakq); $ksaameoqigiaoigg[$sqeykgyoooqysmca] = ["\160\141\x67\145\x73" => $ocqawgquwsqioses, "\x75\163\x65\x64" => $sqsyqsscqaauwyyy, "\164\157\x74\141\154" => $uuwmqqqiwksuaise, "\x72\145\155\x61\151\156" => max($uuwmqqqiwksuaise, $gqswsiquqaayuakq) - $sqsyqsscqaauwyyy]; $gqswsiquqaayuakq -= $sqsyqsscqaauwyyy; gmeiuoeewucukque: } ccgsycueagwegqeu: qmguoqeawegcoeoa: return $ksaameoqigiaoigg; } }
