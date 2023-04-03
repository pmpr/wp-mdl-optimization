<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642a94e023bb4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Symfony\Component\CssSelector\CssSelectorConverter; use DOMDocument; use DOMXPath; use Exception; class Extractor extends Common { protected ?array $rules = []; protected CssSelectorConverter $converter; public function __construct() { $this->converter = new CssSelectorConverter(); parent::__construct(); } public function uosumyqkueiykgiu() : ?array { return $this->rules; } public function aimosgcaukumakge($uusmaiomayssaecw, ?Rule $ekuqiqmikiicgoss) : self { if ($uusmaiomayssaecw) { goto qgegkeomwscwwiuw; } $this->rules[] = $ekuqiqmikiicgoss; goto qmiwsequckckoaei; qgegkeomwscwwiuw: $this->rules[$uusmaiomayssaecw] = $ekuqiqmikiicgoss; qmiwsequckckoaei: return $this; } public function uacmswwoiqckokew() : ?CssSelectorConverter { return $this->converter; } protected function awgiawwcyyywqokg(string $nsmgceoqaqogqmuw) { $cmckowaakauyescq = new DOMDocument("\61\x2e\60", "\125\124\106\55\70"); $eaockgywgswwksqo = libxml_use_internal_errors(true); if (!$nsmgceoqaqogqmuw) { goto goeoymmqqqeeoime; } $cmckowaakauyescq->gseoscwkykeqiegc(mb_convert_encoding($nsmgceoqaqogqmuw, "\110\124\115\x4c\55\x45\x4e\124\111\x54\x49\x45\x53", "\x55\124\x46\55\70")); goeoymmqqqeeoime: libxml_use_internal_errors($eaockgywgswwksqo); $cmckowaakauyescq->formatOutput = true; return $cmckowaakauyescq; } private function iuekyyeesukysksy(string $owqaeesoaygymmcy) { return trailingslashit(Manipulate::guugkagukymokgas()) . $owqaeesoaygymmcy . "\x2e\x63\x61\143\x68\145"; } private function kumkwyksmeikauow(string $owqaeesoaygymmcy) { $acqqmqmcquukaqsc = []; $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); if (!$this->kcciqwskewsuaemk()->exists($qogsmwakwacwqogk)) { goto qmeoaqmsuseueqiy; } $ewgwqamkygiqaawc = $this->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); if (!$ewgwqamkygiqaawc) { goto ickcmqoiosquugwe; } $uomewyckeuqoqocu = unserialize($ewgwqamkygiqaawc); if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto eiawsoasmscmqswa; } $acqqmqmcquukaqsc = $uomewyckeuqoqocu; eiawsoasmscmqswa: ickcmqoiosquugwe: qmeoaqmsuseueqiy: return $acqqmqmcquukaqsc; } private function uiuwkseyqcyweacc(array $acqqmqmcquukaqsc = []) { $qgsciwocmkqyokws = []; foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { if (!$ekuqiqmikiicgoss instanceof Rule) { goto cgewcsueoyaeikgm; } $qgsciwocmkqyokws[$ekuqiqmikiicgoss->mmmcswscsiecscwg()][$ekuqiqmikiicgoss->acskcgywyymegikq()][] = $ekuqiqmikiicgoss; cgewcsueoyaeikgm: cuoqqgaygogsmmic: } ygkcacsyyckescqs: return $qgsciwocmkqyokws; } private function gawksoyiyssqgsgu(?string $yuumukkaswwoywya) { try { $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa($yuumukkaswwoywya); } catch (Exception $umqmkkqcmcaswmwu) { if (!($umqmkkqcmcaswmwu->sagusgigmkeysock() !== "\120\x73\x65\x75\144\157\x2d\145\x6c\145\x6d\145\x6e\x74\x73\x20\141\x72\x65\x20\156\x6f\x74\x20\163\x75\x70\x70\157\162\164\145\x64\x2e")) { goto sukskmcwsoysiuqu; } return false; sukskmcwsoysiuqu: try { $wgqgsuoqkcgaugmc = explode("\72", $yuumukkaswwoywya); $wiokgkkuiumaumci = $this->uacmswwoiqckokew()->qmukceakycqioksa((string) reset($wgqgsuoqkcgaugmc)); } catch (Exception $iewosgggaueeyymg) { return false; } } return $wiokgkkuiumaumci; } public function gsgoaqaskggcakag(?string $migiiksoiymissge) { $kigowwqauiumummw = true; if (!($fkgqmwkusywysaus = Manipulate::uigyooscomiegggk($migiiksoiymissge))) { goto igymseewwyiocoug; } $sogksuscggsicmac = wp_remote_get($migiiksoiymissge); $kigowwqauiumummw = $this->extract(ManipulateArray::get($sogksuscggsicmac, "\142\157\144\x79"), $fkgqmwkusywysaus); igymseewwyiocoug: return $kigowwqauiumummw; } public function extract(?string $nsmgceoqaqogqmuw, ?string $wkcwykowmmmwioqs, $ksaameoqigiaoigg = false) { $kigowwqauiumummw = false; $caokcyqaukiegscs = null; if (!$wkcwykowmmmwioqs) { goto kooskuwkuayiuose; } $icyaoosaykeskiuu = []; DOMCrawler::qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, "\154\x69\x6e\153\x5b\x72\x65\x6c\x3d\x73\x74\171\154\145\x73\150\145\x65\164\x5d", function (DOMElement $ymyisaeksssueeik) use(&$icyaoosaykeskiuu) { $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\150\x72\145\146"); if ($geecqyososceumsk) { goto mqccmesakuemceqi; } $geecqyososceumsk = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\x61\164\141\55\x73\157\165\x72\143\145"); mqccmesakuemceqi: if (!($ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($geecqyososceumsk))) { goto eyiamcekkgkiawqy; } $icyaoosaykeskiuu[$geecqyososceumsk] = $ewgwqamkygiqaawc; eyiamcekkgkiawqy: return $ymyisaeksssueeik; }); if (!$icyaoosaykeskiuu) { goto twkmiuomimomscew; } $caokcyqaukiegscs = $this->kcgmkaaqomwcaemk($nsmgceoqaqogqmuw, implode('', $icyaoosaykeskiuu), implode('', array_keys($icyaoosaykeskiuu))); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\155\x69\156\151\x66\x79\x5f\x63\163\x73"), $caokcyqaukiegscs); $caokcyqaukiegscs = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\141\x64\166\x61\156\x63\145\137\155\x69\x6e\151\x66\171\x5f\143\163\163"), $caokcyqaukiegscs); $caokcyqaukiegscs = preg_replace("\x2f\50\x5b\77\41\73\x5d\x29\134\61\x2b\x2f", "\x24\x31", $caokcyqaukiegscs); $kigowwqauiumummw = $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, $caokcyqaukiegscs); twkmiuomimomscew: kooskuwkuayiuose: if (!($ksaameoqigiaoigg && $caokcyqaukiegscs)) { goto qwcegcuowwgiccos; } $kigowwqauiumummw = $caokcyqaukiegscs; qwcegcuowwgiccos: return $kigowwqauiumummw; } private function eymeukaqaygeyoge(string $owqaeesoaygymmcy, array $acqqmqmcquukaqsc) { $mkomwsiykqigmqca = Manipulate::guugkagukymokgas(); if ($this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto qcessicwuikwqsis; } $this->kcciqwskewsuaemk()->mkdir($mkomwsiykqigmqca); qcessicwuikwqsis: $qogsmwakwacwqogk = $this->iuekyyeesukysksy($owqaeesoaygymmcy); $this->kcciqwskewsuaemk()->touch($qogsmwakwacwqogk); $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($qogsmwakwacwqogk, serialize($acqqmqmcquukaqsc)); } public function kcgmkaaqomwcaemk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq = "\143\x61\143\150\145\x5f\x6b\145\171") { if ($this->uosumyqkueiykgiu()) { goto yssscwioiyygssec; } $this->cegmggqwiqwqcgsk($nsmgceoqaqogqmuw, $icyaoosaykeskiuu, $sewwikwiigsgqiaq); yssscwioiyygssec: return $this->miaqaycqaamiyemm($this->uosumyqkueiykgiu()); } private function ugcmmyocmiksweyq(string $qsmqqqccagyuaiso, array $acqqmqmcquukaqsc) { $ewgwqamkygiqaawc = join('', array_map(function (Rule $ekuqiqmikiicgoss) { return $this->wouggsawqayikygu($ekuqiqmikiicgoss->waoqwiosqiqkcocg(), $ekuqiqmikiicgoss->kikmasogcikysciu()); }, $acqqmqmcquukaqsc)); if (!($qsmqqqccagyuaiso != '')) { goto ieumumsgyguceusy; } $ewgwqamkygiqaawc = "{$qsmqqqccagyuaiso}\173{$ewgwqamkygiqaawc}\175"; ieumumsgyguceusy: return $ewgwqamkygiqaawc; } public function cegmggqwiqwqcgsk(?string $nsmgceoqaqogqmuw, ?string $icyaoosaykeskiuu, string $sewwikwiigsgqiaq) { $owqaeesoaygymmcy = md5($sewwikwiigsgqiaq); $ycoqoegmwiiwyeuo = $this->kumkwyksmeikauow($owqaeesoaygymmcy); if ($ycoqoegmwiiwyeuo) { goto coywmiyqgsweuiic; } $ycoqoegmwiiwyeuo = Manipulate::uosumyqkueiykgiu($icyaoosaykeskiuu); $this->eymeukaqaygeyoge($owqaeesoaygymmcy, $ycoqoegmwiiwyeuo); coywmiyqgsweuiic: $this->rules = []; $cmckowaakauyescq = $this->awgiawwcyyywqokg($nsmgceoqaqogqmuw); $wkusieosoaqkueyi = new DOMXPath($cmckowaakauyescq); array_map(function (Rule $ekuqiqmikiicgoss, $momcykaoccoymeig) use($wkusieosoaqkueyi) { $eisqsskqimiigkay = false; try { $yuumukkaswwoywya = preg_replace("\x2f\x3a\72\x3f\133\x5e\40\54\x3a\135\53\57", '', $ekuqiqmikiicgoss->waoqwiosqiqkcocg()); if (!$yuumukkaswwoywya) { goto ycakugokkqkuqyiu; } $wiokgkkuiumaumci = $this->gawksoyiyssqgsgu($yuumukkaswwoywya); if (!$wiokgkkuiumaumci) { goto siqagquguiemuoku; } $uqyiiwmmueumsgkq = $wkusieosoaqkueyi->query($wiokgkkuiumaumci); $eisqsskqimiigkay = $uqyiiwmmueumsgkq->length > 0; siqagquguiemuoku: goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $eisqsskqimiigkay = true; oouoqimaaqcmccay: } catch (Exception $wgaoewqkwgomoaai) { $eisqsskqimiigkay = true; } if (!$eisqsskqimiigkay) { goto sycygoiaiqqageym; } $this->aimosgcaukumakge($momcykaoccoymeig, $ekuqiqmikiicgoss); sycygoiaiqqageym: }, $ycoqoegmwiiwyeuo, array_keys($ycoqoegmwiiwyeuo)); } private function wouggsawqayikygu(string $yuumukkaswwoywya, array $gmawcgiwcmsukeiu) { $sociqikgoyemqaac = Manipulate::eeewcumgoiuaygow($gmawcgiwcmsukeiu); return "{$yuumukkaswwoywya}\173{$sociqikgoyemqaac}\175"; } public function miaqaycqaamiyemm(array $ckccwysmcauumcei = [], ?string $guuwoyaeoeeaauug = null) { $yuwymayicwwqiske = $guuwoyaeoeeaauug ? $guuwoyaeoeeaauug : ''; $ckccwysmcauumcei = $this->uiuwkseyqcyweacc($ckccwysmcauumcei); return $yuwymayicwwqiske . join('', array_map(function ($iwoiweauwekmisic) { $qsmqqqccagyuaiso = key($iwoiweauwekmisic); $acqqmqmcquukaqsc = reset($iwoiweauwekmisic); return $this->ugcmmyocmiksweyq($qsmqqqccagyuaiso, $acqqmqmcquukaqsc); }, $ckccwysmcauumcei)); } }
