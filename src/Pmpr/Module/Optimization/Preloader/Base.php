<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf1b954785e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; abstract class Base extends Common { const oeccaaoegccisqqe = "\x70\162\x65\x6c\x6f\x61\144\137\x25\163\x5f\163\164\x61\162\164"; const oisqgeeswcsoqcim = "\160\162\145\154\157\x61\144\137\x6f\156\x5f\x69\x6e\x73\145\x72\x74\x5f\x6d\x65\x74\x61\x64\141\x74\x61"; const cusqisyimeiygwqy = "\45\163\x5f\160\162\x65\x6c\157\141\x64\x5f\45\x73\137\x72\165\x6e\156\x69\x6e\147"; protected ?string $name = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function __construct() { if ($this->name) { goto eygqeoiskweuiuqi; } $this->name = strtolower(self::ugwmakayykcmcmqa()); eygqeoiskweuiuqi: parent::__construct(); } public function wigskegsqequoeks() { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\x69\156\151\164", [$this, "\x71\x71\155\171\145\147\x71\155\x69\147\x63\x6d\141\x75\147\141"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\x5f\160\x75\162\x67\145\x5f\x61\x6c\x6c"), [$this, "\x6b\x73\153\153\151\167\x63\141\171\x73\165\167\167\163\x77\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\137\x70\x75\162\147\145\x5f\165\x72\x6c\163"), [$this, "\161\x71\145\161\x6f\141\x73\143\x79\143\165\x65\x6f\151\x69\x75"])->qcsmikeggeemccuu("\143\162\x65\x61\x74\145\x5f\164\x65\x72\155", [$this, "\x6c\163\163\x6b\155\155\x67\163\143\153\147\161\167\x79\145\x71"], 10, 3)->qcsmikeggeemccuu("\x77\160\137\x69\156\x73\145\162\164\137\160\157\x73\164", [$this, "\x71\171\x79\161\141\x79\x63\165\x69\x6d\155\151\x65\x61\165\157"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\x5f\141\x75\164\x6f\137\160\x72\x65\x6c\157\x61\144"), [$this, "\145\165\x6f\x71\143\x61\x6b\163\x61\147\153\x65\x65\x6b\x75\x6d"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\137{$ymqmyyeuycgmigyo}\x5f\141\x75\164\157\x5f\160\162\145\154\x6f\141\144"), [$this, "\x65\165\x6f\161\x63\141\153\163\141\147\153\145\145\x6b\x75\x6d"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\164\137\x70\x72\x65\x6c\x6f\x61\144\x5f\x75\162\154"), [$this, "\x75\x65\x77\x77\145\153\x65\163\155\x69\167\145\157\x61\161\147"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\137{$ymqmyyeuycgmigyo}\137\160\x72\145\x6c\157\x61\x64\137\165\x72\x6c"), [$this, "\x75\145\x77\167\145\x6b\145\x73\155\151\x77\145\157\x61\x71\x67"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\x70\x61\x67\x65\137\x73\x74\x61\x74\165\163"), [$this, "\x79\151\157\x79\x73\x6d\167\145\143\147\x67\163\x65\x69\x6f\165"], 10, 2); } public function yioysmwecggseiou($iueymcwwscwqkiyq, $migiiksoiymissge) { if (!$this->iqqgmieeqemiowuk($migiiksoiymissge)) { goto uykwmucgoywoesui; } $iueymcwwscwqkiyq = self::kywgiyyageyqwuuc; uykwmucgoywoesui: return $iueymcwwscwqkiyq; } public function qyyqaycuimmieauo($gcqseksiskwueksc, $post) { if (!(!ManipulatePost::igawqaomowicuayw(self::oisqgeeswcsoqcim, $gcqseksiskwueksc) && ManipulatePost::ucwmcwqmqwaymkkc($post) === self::wmmucsiyiyusmssm)) { goto iisieuaeyiqwckou; } $this->uewwekesmiweoaqg(ManipulatePost::ycqquoiyyuesegsy($post), $gcqseksiskwueksc); ManipulatePost::ksmqawcowkmegigw(self::oisqgeeswcsoqcim, $gcqseksiskwueksc); iisieuaeyiqwckou: } public function lsskmmgsckgqwyeq($ucicuwcaawugkseg, $aioqgggsymcimwqa, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto oskwkeaemiqcaqkc; } $this->uewwekesmiweoaqg(ManipulateTerm::qmgcisuuikgmqcsu($ucicuwcaawugkseg, $kesssewsiegssiya), $ucicuwcaawugkseg); oskwkeaemiqcaqkc: } public function iaygaicgokyskgmq() : string { return sprintf(self::oeccaaoegccisqqe, $this->aakmagwggmkoiiyu()); } public function mgyqciwsceoswuoq(int $gaeqamemwmwsyukm = 0) : bool { return true; } public function euoqcaksagkeekum() { $this->iycqweieskasuimy(); } public function kskkiwcaysuwwswg() { $this->iycqweieskasuimy(); } public function qqeqoascycueoiiu($auwuoyyagaiegwae) { if (!$auwuoyyagaiegwae) { goto kiqmcymowosckmii; } $this->iycqweieskasuimy($auwuoyyagaiegwae); kiqmcymowosckmii: } public function iycqweieskasuimy($auwuoyyagaiegwae = []) { if ($this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\143\154\157\x75\x64\146\x6c\x61\162\x65\x5f\x65\156\x61\x62\154\x65\144"), false)) { goto wqmwcuggcisqieao; } $this->qqmyegqmigcmauga($auwuoyyagaiegwae, false); $this->uiagwusgwcassqua("\120\162\145\x6c\x6f\x61\x64\x65\x72\x20\163\164\141\162\164\40\151\x6d\155\145\x64\151\141\164\x65\x6c\x79"); goto qsyqcokomswykyso; wqmwcuggcisqieao: $omqquekswieeogws = $this->iaygaicgokyskgmq(); $omkysikckkcieckq = DecoratorOption::get($omqquekswieeogws, []); $omkysikckkcieckq[self::sqsuiimgeguwgmcg] = date("\131\x2d\155\55\144\x20\x48\72\151\72\x73", strtotime("\53\x31\x20\155\x69\x6e\165\x74\145\x73")); if (!(isset($omkysikckkcieckq[self::eimuuyqioyqiqwgq]) && !$auwuoyyagaiegwae)) { goto iaygaasesyymwgss; } unset($omkysikckkcieckq[self::eimuuyqioyqiqwgq]); iaygaasesyymwgss: if (!($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae))) { goto iacwyogogoccmwsg; } if (!isset($omkysikckkcieckq[self::eimuuyqioyqiqwgq])) { goto iwosouqsesoqcska; } $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $omkysikckkcieckq[self::eimuuyqioyqiqwgq]); iwosouqsesoqcska: $omkysikckkcieckq[self::eimuuyqioyqiqwgq] = ManipulateArray::giwoasoewgaqiuis($auwuoyyagaiegwae); iacwyogogoccmwsg: DecoratorOption::update($omqquekswieeogws, $omkysikckkcieckq); $this->uiagwusgwcassqua("\120\162\x65\x6c\x6f\141\144\x65\162\40\x73\x74\x61\162\x74\x20\141\146\164\145\x72\x20\x31\x20\155\x69\x6e\x75\164\145\x73\56"); qsyqcokomswykyso: } public function qqmyegqmigcmauga($auwuoyyagaiegwae = [], bool $gioggcykgoikcwiy = true) { if (!(!$auwuoyyagaiegwae && $gioggcykgoikcwiy)) { goto yueosioyegouuwqo; } $omqquekswieeogws = $this->iaygaicgokyskgmq(); $omkysikckkcieckq = DecoratorOption::get($omqquekswieeogws); $ggkaciewmeqmgckg = ManipulateArray::get($omkysikckkcieckq, self::sqsuiimgeguwgmcg); if ($ggkaciewmeqmgckg && ManipulateDatetime::wguceomqgwouoyks($ggkaciewmeqmgckg)) { goto issgmmkcgesyeoas; } $gioggcykgoikcwiy = false; goto yeiicwscguyokwyu; issgmmkcgesyeoas: $auwuoyyagaiegwae = (array) ManipulateArray::get($omkysikckkcieckq, self::eimuuyqioyqiqwgq, []); DecoratorOption::delete($omqquekswieeogws); yeiicwscguyokwyu: yueosioyegouuwqo: if (!($auwuoyyagaiegwae || $gioggcykgoikcwiy)) { goto ccyiggckemwgooco; } $this->uiagwusgwcassqua("\120\x72\145\154\x6f\141\x64\x65\x72\x20\160\x72\x6f\143\145\163\163\x20\x67\x6f\x69\x6e\147\x20\164\x6f\x20\x73\x74\x61\162\x74\56"); if ($auwuoyyagaiegwae) { goto giuoqsumkimmuaya; } $this->owacqyiaemgywyuy(); goto mssaawaiaimogowg; giuoqsumkimmuaya: $this->sikgsmsiumsmwmsk($auwuoyyagaiegwae); mssaawaiaimogowg: ccyiggckemwgooco: } public function owacqyiaemgywyuy() { $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x70\162\145\154\x6f\x61\144\137\x61\x6c\x6c\137\165\162\x6c\x73"), [], $this->aakmagwggmkoiiyu()); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x70\x72\x65\154\x6f\141\x64\137\x61\154\154\x5f{$this->aakmagwggmkoiiyu()}\137\x75\162\154\x73"), $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto umamqqwcoewcigew; } $this->sikgsmsiumsmwmsk($auwuoyyagaiegwae); umamqqwcoewcigew: } public function uewwekesmiweoaqg($eeamcawaiqocomwy, $aokagokqyuysuksm) { $this->sikgsmsiumsmwmsk([$aokagokqyuysuksm => $eeamcawaiqocomwy]); } public function sikgsmsiumsmwmsk($auwuoyyagaiegwae) { $this->uiagwusgwcassqua("\142\x65\x66\x6f\162\145\x20\x73\x74\x61\x72\x74\40\160\x72\145\154\x6f\141\144\x65\x72\40\146\157\162"); $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\160\162\x65\x6c\x6f\x61\x64\x5f\165\x72\x6c\x73"), $auwuoyyagaiegwae); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\160\x72\145\154\157\x61\x64\x5f{$ymqmyyeuycgmigyo}\137\x75\x72\154\163"), $auwuoyyagaiegwae); if (!($auwuoyyagaiegwae = ManipulateArray::giwoasoewgaqiuis($auwuoyyagaiegwae))) { goto oaskqsoyesmmeaew; } $gaeqamemwmwsyukm = count($auwuoyyagaiegwae); if ($this->mgyqciwsceoswuoq($gaeqamemwmwsyukm)) { goto gaiaucesmcqgqwac; } $this->uiagwusgwcassqua("\x63\x61\156\x20\x6e\157\x74\40\x73\164\x61\162\x74\x20\160\x72\x65\x6c\x6f\x61\144\145\162\x2e"); goto kuimgwmkcgcoecko; gaiaucesmcqgqwac: try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x62\x65\146\x6f\162\x65\x5f\163\164\x61\162\x74\x5f\160\x72\145\x6c\157\141\x64"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x62\145\x66\x6f\162\x65\x5f\x73\x74\x61\162\164\x5f{$ymqmyyeuycgmigyo}\x5f\x70\162\145\154\x6f\x61\144"), $auwuoyyagaiegwae); if (!($auwuoyyagaiegwae = $this->wiocumuiaykkiwgq($auwuoyyagaiegwae))) { goto swkeiggkawwgewuw; } $this->start($auwuoyyagaiegwae); swkeiggkawwgewuw: } catch (Exception $wgaoewqkwgomoaai) { $this->uiagwusgwcassqua($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } kuimgwmkcgcoecko: oaskqsoyesmmeaew: } public function wiocumuiaykkiwgq(array $auwuoyyagaiegwae) : array { foreach ($auwuoyyagaiegwae as $aokagokqyuysuksm => $eeamcawaiqocomwy) { if (is_string($eeamcawaiqocomwy) && ($qsqwqsymmqeoqwcu = $this->asquciqsymgmcuci($eeamcawaiqocomwy))) { goto yywwaaiicukuwcao; } unset($auwuoyyagaiegwae[$aokagokqyuysuksm]); goto eykiuqsamowqykam; yywwaaiicukuwcao: $auwuoyyagaiegwae[$aokagokqyuysuksm] = $qsqwqsymmqeoqwcu; eykiuqsamowqykam: miigqygoawqmkkqm: } aacaoywsaqscgyua: return $auwuoyyagaiegwae; } public function asquciqsymgmcuci(string $eeamcawaiqocomwy) : string { $kuuugksiksqcaaaa = false; if (!(self::amcogigwsaqssuai !== $this->eaoemakycwuywqsy($eeamcawaiqocomwy))) { goto qcwkymcgqacaaywc; } $auauqswyyugocuem = $this->cmwowcwwqqesoagc($eeamcawaiqocomwy); if (!($auauqswyyugocuem && !DecoratorOption::igqksmmwesguiaae($auauqswyyugocuem))) { goto ywqouwqomiqwoquu; } $kuuugksiksqcaaaa = DecoratorOption::gawcqwcqgwgucgya($auauqswyyugocuem, 1, MINUTE_IN_SECONDS * 3); ywqouwqomiqwoquu: qcwkymcgqacaaywc: if ($kuuugksiksqcaaaa) { goto wmcucyuieqgqisis; } $eeamcawaiqocomwy = ''; wmcucyuieqgqisis: return $eeamcawaiqocomwy; } public function iqqgmieeqemiowuk(?string $eeamcawaiqocomwy) : bool { $auauqswyyugocuem = $this->cmwowcwwqqesoagc($eeamcawaiqocomwy); return $auauqswyyugocuem && DecoratorOption::igqksmmwesguiaae($auauqswyyugocuem); } public function ieskuycqsewokycq(?string $eeamcawaiqocomwy) { DecoratorOption::cqgekgeqacmqquas($this->cmwowcwwqqesoagc($eeamcawaiqocomwy)); } public function cmwowcwwqqesoagc(?string $eeamcawaiqocomwy) : ?string { $auauqswyyugocuem = null; if (!($mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_PATH))) { goto qwsmiaegmcwuskwi; } $auauqswyyugocuem = sprintf(self::cusqisyimeiygwqy, $this->aakmagwggmkoiiyu(), $mkomwsiykqigmqca); qwsmiaegmcwuskwi: return $auauqswyyugocuem; } public abstract function start($auwuoyyagaiegwae); }
