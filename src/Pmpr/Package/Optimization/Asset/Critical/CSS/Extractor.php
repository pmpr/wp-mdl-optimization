<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b865b46dbbe             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Rule; use Symfony\Component\CssSelector\CssSelectorConverter; use DOMDocument; use DOMXPath; use Exception; class Extractor extends Common { protected ?array $rules = []; protected CssSelectorConverter $converter; public function __construct() { $this->converter = new CssSelectorConverter(); parent::__construct(); } public function uosumyqkueiykgiu() : ?array { return $this->rules; } public function aimosgcaukumakge($uusmaiomayssaecw, ?Rule $ekuqiqmikiicgoss) : self { if ($uusmaiomayssaecw) { goto yywwaaiicukuwcao; } $this->rules[] = $ekuqiqmikiicgoss; goto eykiuqsamowqykam; yywwaaiicukuwcao: $this->rules[$uusmaiomayssaecw] = $ekuqiqmikiicgoss; eykiuqsamowqykam: return $this; } public function uacmswwoiqckokew() : ?CssSelectorConverter { return $this->converter; } protected function awgiawwcyyywqokg(string $nsmgceoqaqogqmuw) { $cmckowaakauyescq = new DOMDocument("\61\x2e\60", "\125\124\x46\x2d\70"); $eaockgywgswwksqo = libxml_use_internal_errors(true); if (!$nsmgceoqaqogqmuw) { goto ywqouwqomiqwoquu; } $cmckowaakauyescq->gseoscwkykeqiegc(mb_convert_encoding($nsmgceoqaqogqmuw, "\x48\x54\x4d\x4c\x2d\x45\116\124\111\x54\111\105\123", "\x55\x54\106\55\70")); ywqouwqomiqwoquu: libxml_use_internal_errors($eaockgywgswwksqo); $cmckowaakauyescq->formatOutput = true; return $cmckowaakauyescq; } private function iuekyyeesukysksy(string $owqaeesoaygymmcy) { return trailingslashit(Manipulate::guugkagukymokgas()) . $owqaeesoaygymmcy . "\x2e\143\141\143\x68\x65"; } private function kumkwyksmeikauow(string $owqaeesoaygymmcy) { $acqqmqmcquukaqsc = []; $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); if (!$this->kcciqwskewsuaemk()->exists($qogsmwakwacwqogk)) { goto qwsmiaegmcwuskwi; } $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); if (!$ewgwqamkygiqaawc) { goto wmcucyuieqgqisis; } $uomewyckeuqoqocu = unserialize($ewgwqamkygiqaawc); if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto qcwkymcgqacaaywc; } $acqqmqmcquukaqsc = $uomewyckeuqoqocu; qcwkymcgqacaaywc: wmcucyuieqgqisis: qwsmiaegmcwuskwi: return $acqqmqmcquukaqsc; } private function uiuwkseyqcyweacc(array $acqqmqmcquukaqsc = []) { $qgsciwocmkqyokws = []; foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { if (!$ekuqiqmikiicgoss instanceof Rule) { goto sikmqkecsiyciaei; } $qgsciwocmkqyokws[$ekuqiqmikiicgoss->mmmcswscsiecscwg()][$ekuqiqmikiicgoss->acskcgywyymegikq()][] = $ekuqiqmikiicgoss; sikmqkecsiyciaei: usmagcaocwiugqum: } yyyyawaqcowsgqcs: return $qgsciwocmkqyokws; } private function gawksoyiyssqgsgu(?string $yuumukkaswwoywya) { try { $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa($yuumukkaswwoywya); } catch (Exception $umqmkkqcmcaswmwu) { if (!($umqmkkqcmcaswmwu->sagusgigmkeysock() !== "\120\163\x65\165\x64\157\55\145\x6c\x65\x6d\x65\x6e\164\163\40\141\x72\145\40\x6e\x6f\164\x20\x73\165\x70\160\157\162\164\145\144\56")) { goto wmycwscioqackeig; } return false; wmycwscioqackeig: try { $wgqgsuoqkcgaugmc = explode("\72", $yuumukkaswwoywya); $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa((string) reset($wgqgsuoqkcgaugmc)); } catch (Exception $iewosgggaueeyymg) { return false; } } return $wiokgkkuiumaumci; } public function gsgoaqaskggcakag(?string $migiiksoiymissge) { $kigowwqauiumummw = true; if (!($fkgqmwkusywysaus = Manipulate::uigyooscomiegggk($migiiksoiymissge))) { goto wammkmaqucqagqww; } $sogksuscggsicmac = wp_remote_get($migiiksoiymissge); $kigowwqauiumummw = $this->extract(ManipulateArray::get($sogksuscggsicmac, "\142\x6f\x64\x79"), $fkgqmwkusywysaus); wammkmaqucqagqww: return $kigowwqauiumummw; } public function extract(?string $nsmgceoqaqogqmuw, ?string $wkcwykowmmmwioqs, $ksaameoqigiaoigg = false) { $kigowwqauiumummw = false; $caokcyqaukiegscs = null; if (!$wkcwykowmmmwioqs) { goto eokikuciuqkyauum; } $icyaoosaykeskiuu = []; DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, "\154\x69\156\x6b\x5b\162\145\x6c\x3d\x73\164\x79\x6c\145\x73\x68\145\145\x74\135", function (DOMElement $ymyisaeksssueeik) use(&$icyaoosaykeskiuu) { $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\150\162\145\146"); if ($geecqyososceumsk) { goto iuooqassskiyeemo; } $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\141\x74\x61\55\163\x6f\x75\x72\143\x65"); iuooqassskiyeemo: if (!($ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($geecqyososceumsk))) { goto cquyuwsisgqscemm; } $icyaoosaykeskiuu[$geecqyososceumsk] = $ewgwqamkygiqaawc; cquyuwsisgqscemm: return $ymyisaeksssueeik; }); if (!$icyaoosaykeskiuu) { goto imykswegcuekqwio; } $caokcyqaukiegscs = $this->kcgmkaaqomwcaemk($nsmgceoqaqogqmuw, implode('', $icyaoosaykeskiuu), implode('', array_keys($icyaoosaykeskiuu))); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\155\x69\x6e\x69\x66\x79\x5f\x63\163\x73"), $caokcyqaukiegscs); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\x64\x76\141\156\143\x65\x5f\x6d\151\156\x69\x66\x79\137\x63\163\163"), $caokcyqaukiegscs); $caokcyqaukiegscs = preg_replace("\57\50\133\x3f\41\73\x5d\51\134\x31\x2b\57", "\44\61", $caokcyqaukiegscs); $kigowwqauiumummw = $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, $caokcyqaukiegscs); imykswegcuekqwio: eokikuciuqkyauum: if (!($ksaameoqigiaoigg && $caokcyqaukiegscs)) { goto ykuqeyogsasokqis; } $kigowwqauiumummw = $caokcyqaukiegscs; ykuqeyogsasokqis: return $kigowwqauiumummw; } private function eymeukaqaygeyoge(string $owqaeesoaygymmcy, array $acqqmqmcquukaqsc) { $mkomwsiykqigmqca = Manipulate::guugkagukymokgas(); if ($this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto mqaamqyoywyekiko; } $this->kcciqwskewsuaemk()->mkdir($mkomwsiykqigmqca); mqaamqyoywyekiko: $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); $this->kcciqwskewsuaemk()->touch($qogsmwakwacwqogk); $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, serialize($acqqmqmcquukaqsc)); } public function kcgmkaaqomwcaemk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq = "\143\x61\143\150\x65\137\153\x65\171") { if ($this->uosumyqkueiykgiu()) { goto smkakiyekkqoggao; } $this->cegmggqwiqwqcgsk($nsmgceoqaqogqmuw, $icyaoosaykeskiuu, $sewwikwiigsgqiaq); smkakiyekkqoggao: return $this->miaqaycqaamiyemm($this->uosumyqkueiykgiu()); } private function ugcmmyocmiksweyq(string $qsmqqqccagyuaiso, array $acqqmqmcquukaqsc) { $ewgwqamkygiqaawc = join('', array_map(function (Rule $ekuqiqmikiicgoss) { return $this->wouggsawqayikygu($ekuqiqmikiicgoss->waoqwiosqiqkcocg(), $ekuqiqmikiicgoss->kikmasogcikysciu()); }, $acqqmqmcquukaqsc)); if (!($qsmqqqccagyuaiso != '')) { goto zggweikegkcgkmma; } $ewgwqamkygiqaawc = "{$qsmqqqccagyuaiso}\173{$ewgwqamkygiqaawc}\175"; zggweikegkcgkmma: return $ewgwqamkygiqaawc; } public function cegmggqwiqwqcgsk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq) { $owqaeesoaygymmcy = md5($sewwikwiigsgqiaq); $ycoqoegmwiiwyeuo = $this->kumkwyksmeikauow($owqaeesoaygymmcy); if ($ycoqoegmwiiwyeuo) { goto yisoawmmammassqk; } $ycoqoegmwiiwyeuo = Manipulate::uosumyqkueiykgiu($icyaoosaykeskiuu); $this->eymeukaqaygeyoge($owqaeesoaygymmcy, $ycoqoegmwiiwyeuo); yisoawmmammassqk: $this->rules = []; $cmckowaakauyescq = $this->awgiawwcyyywqokg($nsmgceoqaqogqmuw); $wkusieosoaqkueyi = new DOMXPath($cmckowaakauyescq); array_map(function (Rule $ekuqiqmikiicgoss, $momcykaoccoymeig) use($wkusieosoaqkueyi) { $eisqsskqimiigkay = false; try { $yuumukkaswwoywya = preg_replace("\x2f\72\72\77\x5b\x5e\x20\54\72\135\x2b\x2f", '', $ekuqiqmikiicgoss->waoqwiosqiqkcocg()); if (!$yuumukkaswwoywya) { goto seqammocqkyswaim; } $wiokgkkuiumaumci = $this->gawksoyiyssqgsgu($yuumukkaswwoywya); if (!$wiokgkkuiumaumci) { goto gcsosokicycukoyc; } $uqyiiwmmueumsgkq = $wkusieosoaqkueyi->query($wiokgkkuiumaumci); $eisqsskqimiigkay = $uqyiiwmmueumsgkq->length > 0; gcsosokicycukoyc: goto coskmuqsawiaeyqg; seqammocqkyswaim: $eisqsskqimiigkay = true; coskmuqsawiaeyqg: } catch (Exception $wgaoewqkwgomoaai) { $eisqsskqimiigkay = true; } if (!$eisqsskqimiigkay) { goto umccwcqwkoiaakmu; } $this->aimosgcaukumakge($momcykaoccoymeig, $ekuqiqmikiicgoss); umccwcqwkoiaakmu: }, $ycoqoegmwiiwyeuo, array_keys($ycoqoegmwiiwyeuo)); } private function wouggsawqayikygu(string $yuumukkaswwoywya, array $gmawcgiwcmsukeiu) { $sociqikgoyemqaac = Manipulate::eeewcumgoiuaygow($gmawcgiwcmsukeiu); return "{$yuumukkaswwoywya}\x7b{$sociqikgoyemqaac}\175"; } public function miaqaycqaamiyemm(array $ckccwysmcauumcei = [], ?string $guuwoyaeoeeaauug = null) { $yuwymayicwwqiske = $guuwoyaeoeeaauug ? $guuwoyaeoeeaauug : ''; $ckccwysmcauumcei = $this->uiuwkseyqcyweacc($ckccwysmcauumcei); return $yuwymayicwwqiske . join('', array_map(function ($iwoiweauwekmisic) { $qsmqqqccagyuaiso = key($iwoiweauwekmisic); $acqqmqmcquukaqsc = reset($iwoiweauwekmisic); return $this->ugcmmyocmiksweyq($qsmqqqccagyuaiso, $acqqmqmcquukaqsc); }, $ckccwysmcauumcei)); } }
