<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bb6169562a0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Page\Admin\Page as BaseClass; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Model; use WP_Post_Type; class Page extends BaseClass { public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\141\162\145\156\x74\137\x73\154\x75\147" => $wksoawcgagcgoask, "\x70\x61\147\145\137\164\x69\x74\154\145" => __("\114\x65\166\x65\154\x20\61\x20\160\141\147\x65\x73", PR__MDL__OPTIMIZATION), "\x6d\145\x6e\x75\x5f\163\x6c\x75\x67" => $this->oyqkaeooscmcweyc("\x62\x61\163\151\x63\x5f\160\x61\x67\x65"), "\160\157\163\x69\x74\x69\157\156" => 0]; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\156\137\x69\x6e\x69\164", [$this, "\x79\145\171\151\x67\x75\x79\145\x67\155\x6d\x79\165\x73\145\x61"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x70\x72\x65\154\157\141\x64\x5f\x61\x6c\154\x5f\x6f\x66\146\154\x69\x6e\x65\137\165\162\x6c\x73"), [$this, "\x63\x79\x6f\x73\x69\x61\145\163\147\141\x6f\167\x65\x69\x6d\155"]); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto ocmwuquguuqigose; } $this->cimaucgayqyyccoc(sprintf(__("\45\x73\x20\x6f\x70\x74\151\x6d\x69\x7a\x61\x74\151\x6f\156\x20\x61\160\160\x6c\x79\40\x61\x75\164\157\155\x61\x74\x69\x63\141\154\x6c\171\40\164\x6f\40\141\154\154\x20\160\141\147\145\x73\40\167\x69\x74\x68\x6f\x75\164\x20\164\150\145\40\156\x65\x65\144\40\146\157\162\x20\141\40\x62\x75\x64\147\x65\164\56", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\114\145\x76\145\x6c\40\x31", PR__MDL__OPTIMIZATION))), "\154\145\x76\145\x6c\55\x31", self::smkwuwawwaqyimcq); ocmwuquguuqigose: } public function cyosiaesgaoweimm($auwuoyyagaiegwae = []) : array { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto kmqusaiaiogecyiy; } $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(); $seyqqsmuaiegkeeq = Manipulate::iikwikykskimciuc(); $auwuoyyagaiegwae = Manipulate::imyuqaesowgauoam([self::ccyeycyyykwuymsy => $jwsqucqyaoaasykk->mqiucouukiymaswc($seyqqsmuaiegkeeq), self::kkekqeuyycwqggou => $auwuoyyagaiegwae, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($sciomagaqmgggsiu)]); kmqusaiaiogecyiy: return $auwuoyyagaiegwae; } public function suicksywcwiggasc() { $sciomagaqmgggsiu = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { goto iqwsqykoueqyyomy; } $aokagokqyuysuksm = self::uouymeyqasaeckso . "\x5f{$useksmwkuswkwcqg->name}"; $this->aucimgwswmgaocae(Tab::ocmycskcuiawkecq($aokagokqyuysuksm, new ListTable($useksmwkuswkwcqg), $aokagokqyuysuksm, ManipulatePost::gaeyeooascowgiac($useksmwkuswkwcqg, self::NAME))); iqwsqykoueqyyomy: coogyackikgmecic: } swckikycciugciqq: parent::suicksywcwiggasc(); } }
