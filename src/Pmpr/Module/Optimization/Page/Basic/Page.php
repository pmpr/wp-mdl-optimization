<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce1908259ad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\141\x72\x65\x6e\x74\137\163\154\165\147" => $wksoawcgagcgoask, "\160\x61\147\145\x5f\x74\151\164\154\145" => __("\114\145\166\145\x6c\40\61\40\x70\141\x67\145\x73", PR__MDL__OPTIMIZATION), "\155\145\x6e\x75\137\x73\x6c\x75\147" => $this->oyqkaeooscmcweyc("\x62\x61\163\x69\143\137\x70\x61\x67\145"), "\x70\x6f\163\151\164\x69\157\x6e" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\x69\156\x69\164", [$this, "\x79\x65\x79\x69\x67\x75\x79\x65\147\x6d\x6d\x79\x75\x73\x65\141"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\137\160\x72\145\x6c\x6f\x61\144\137\141\x6c\x6c\137\x6f\146\146\x6c\x69\156\x65\137\165\x72\154\163"), [$this, "\x63\171\157\163\151\141\145\x73\147\141\x6f\167\145\151\x6d\x6d"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto cueuscqkicwwicei; } $this->cimaucgayqyyccoc(sprintf(__("\x25\163\40\x6f\160\164\151\x6d\151\172\141\164\x69\157\156\x20\141\160\x70\154\171\x20\x61\165\x74\x6f\x6d\141\x74\x69\143\x61\x6c\x6c\x79\40\164\x6f\40\141\154\154\x20\x70\x61\x67\145\163\40\167\151\164\x68\157\x75\x74\40\164\x68\145\40\156\x65\x65\144\x20\x66\x6f\162\40\141\40\x62\165\144\147\145\164\56", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\x4c\145\166\145\x6c\x20\x31", PR__MDL__OPTIMIZATION))), "\154\145\166\x65\154\x2d\x31", self::smkwuwawwaqyimcq); cueuscqkicwwicei: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto gcecamucuogcciig; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); gcecamucuogcciig: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = array_reverse(Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym), true); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto eysuawiooiswaseq; } $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($useksmwkuswkwcqg); $aokagokqyuysuksm = self::uouymeyqasaeckso . "\x5f{$ymqmyyeuycgmigyo}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); eysuawiooiswaseq: kiewcwsykccgocuc: } suscosoukqeyyqgs: parent::suicksywcwiggasc(); } }
