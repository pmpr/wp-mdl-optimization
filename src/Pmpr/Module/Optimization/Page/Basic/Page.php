<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf030b239b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\141\x72\x65\156\164\137\163\154\165\147" => $wksoawcgagcgoask, "\160\x61\147\x65\137\x74\x69\x74\x6c\145" => __("\x4c\145\x76\145\154\40\x31\40\x70\141\147\x65\163", PR__MDL__OPTIMIZATION), "\x6d\x65\156\165\x5f\x73\154\x75\x67" => $this->oyqkaeooscmcweyc("\142\x61\x73\x69\143\x5f\160\141\x67\x65"), "\x70\157\163\x69\x74\x69\157\x6e" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\137\x69\156\x69\164", [$this, "\x79\145\x79\151\x67\165\x79\145\x67\155\x6d\x79\165\x73\145\x61"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\160\162\x65\x6c\x6f\141\144\x5f\141\x6c\x6c\137\x6f\x66\146\154\x69\x6e\x65\x5f\x75\x72\x6c\163"), [$this, "\x63\171\157\163\x69\141\145\x73\147\141\x6f\167\x65\x69\155\155"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto uoewiggumomegksg; } $this->cimaucgayqyyccoc(sprintf(__("\x25\163\40\x6f\x70\x74\x69\155\151\x7a\141\164\x69\157\x6e\40\141\160\160\x6c\171\40\x61\x75\164\x6f\155\x61\x74\151\143\x61\x6c\x6c\171\40\x74\x6f\40\x61\154\x6c\40\x70\x61\147\145\163\40\167\x69\x74\x68\157\165\x74\x20\164\150\x65\40\156\x65\145\x64\x20\146\x6f\x72\40\141\40\x62\x75\x64\x67\145\x74\x2e", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\114\x65\x76\x65\x6c\x20\x31", PR__MDL__OPTIMIZATION))), "\x6c\145\x76\x65\154\x2d\x31", self::smkwuwawwaqyimcq); uoewiggumomegksg: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto sockocsycmkaeosg; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); sockocsycmkaeosg: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto asoecuscmsyusmkg; } $aokagokqyuysuksm = self::uouymeyqasaeckso . "\137{$useksmwkuswkwcqg->name}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); asoecuscmsyusmkg: syisomgawcsqeemk: } ugkwqaywmwqucoeo: parent::suicksywcwiggasc(); } }
