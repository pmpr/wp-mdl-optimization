<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236574ee781a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Manipulate\ManipulateI18N; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\163\167\x69\x74\x63\x68\137\x74\150\x65\x6d\145", [$this, "\x77\145\151\x6b\x6b\x79\x69\161\157\x6f\x67\x6b\x6f\171\x63\145"])->qcsmikeggeemccuu("\x70\x72\145\x5f\160\157\163\x74\x5f\x75\x70\x64\x61\x74\x65", [$this, "\x61\x75\x77\x71\171\x67\155\167\167\x69\x75\147\x63\x69\x65\x65"], 2)->qcsmikeggeemccuu("\x75\x70\147\x72\141\x64\x65\x72\x5f\160\162\x6f\x63\x65\163\x73\x5f\x63\157\155\x70\154\145\x74\145", [$this, "\153\x6f\x6f\x63\165\x79\151\171\151\151\x65\165\x61\x6b\155\x6d"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\x70\x74\x5f\160\165\162\x67\x65\137\143\x61\x63\x68\x65\x5f\x66\x69\x6c\x65\163"), [$this, "\x77\145\151\x6b\x6b\171\151\x71\157\x6f\147\153\x6f\x79\x63\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\141\146\164\145\x72\x5f\x63\x6c\x65\x61\x6e\137\x70\157\163\x74"), [$this, "\161\141\x67\x6d\x77\167\x6d\x71\151\x69\143\141\171\141\x71\x67"])->qcsmikeggeemccuu("\x63\157\x6d\x6d\x65\x6e\164\x5f\160\x6f\x73\164", [$this, "\x6d\x6d\x65\x69\165\x79\x75\x67\x65\145\x6b\x6f\x71\167\x63\x73"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\x5f{$this->mwikyscisascoeea()}\137\143\154\145\141\156\137\144\x6f\x6d\141\151\156"), [$this, "\167\x65\151\x6b\153\171\x69\161\157\157\x67\153\x6f\x79\143\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\137\143\x6c\x65\141\x6e\x5f\x66\151\x6c\x65\x73"), [$this, "\151\155\x6f\x77\x61\155\x69\x77\145\x65\x6b\x79\x67\x6f\x63\x6d"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto eogomkswkaqwyycm; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\x70\165\x62\x6c\151\143" => true, "\x70\165\x62\154\151\x63\154\x79\137\x71\165\x65\x72\x79\141\x62\154\145" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\x5f\x72\x6f\167\x5f\141\143\164\151\x6f\x6e\163", [$this, "\167\x73\161\171\163\171\141\x77\167\x77\x67\147\x67\157\x77\143"], 2); iecqkqoiqimmisyw: } eysuawiooiswaseq: eogomkswkaqwyycm: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto egiauwuekseyeaeq; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); egiauwuekseyeaeq: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto euuekiyqwkowiees; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; euuekiyqwkowiees: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\160\165\142\x6c\151\x73\x68" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto assoyoeukmqiucyq; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\160\157\x73\164\x5f\x70\165\x72\147\x65\x5f\165\162\154\x73"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\145\x66\157\x72\x65\137\x63\154\x65\141\156\x5f\160\157\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\141\x66\x74\x65\162\x5f\x63\154\x65\141\x6e\x5f\x70\157\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137{$this->mwikyscisascoeea()}\137\141\146\x74\x65\162\x5f\143\x6c\x65\141\156\137\160\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); assoyoeukmqiucyq: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\163\143\x68\145\x6d\x65"] . "\72\57\x2f" . $mgoiyiawsmmgasic["\150\157\163\x74"] . "\52" . $mgoiyiawsmmgasic["\x70\x61\164\x68"]; wyqueeskecameuks: } kikkkoqiumqoeiyy: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\165\160\x64\x61\164\x65" === $iaakskwmyqceoscy["\141\x63\x74\x69\157\156"])) { goto sqiyuasgusgawuoi; } if (!("\x74\150\x65\155\145" === $iaakskwmyqceoscy["\164\171\160\145"])) { goto gqycmyieayoegcsy; } if (!is_array($iaakskwmyqceoscy["\164\150\x65\155\145\163"])) { goto msiuqseowuumiwuo; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\x74\150\145\155\145\163"], $sgmuqamasucuikqa)) { goto esokkakkumskkmiu; } $this->weikkyiqoogkoyce(); esokkakkumskkmiu: msiuqseowuumiwuo: gqycmyieayoegcsy: sqiyuasgusgawuoi: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto iayguaeseyaemwkk; } $this->weikkyiqoogkoyce(); iayguaeseyaemwkk: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto akyiiioycmgqyuok; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); akyiiioycmgqyuok: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\157\163\164"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\x61\x74\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ieoeeyieoskuyiyw; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto mcuoyseuwoueyaie; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); mcuoyseuwoueyaie: mqacqosyicuiqwia: } guummoewucyeuiek: if (!$ymiyawysimukkoso) { goto kwowggaooiyqawyq; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); kwowggaooiyqawyq: ieoeeyieoskuyiyw: owiguescmqyqukui: } ycomeuqeessamows: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto soqkewsayowwcmco; } if (!is_array($mkomwsiykqigmqca)) { goto ciiyqsiswkcwsocm; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto ugyawwukegyoqmsq; ciiyqsiswkcwsocm: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; ugyawwukegyoqmsq: goto ukigmkeewuqomooc; soqkewsayowwcmco: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); ukigmkeewuqomooc: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto qoaawmmcqyacokws; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\x2f\45\x31\x24\163\45\62\x24\163\50\x2e\x2a\x29\x2f\151", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); ykcmomsiayaymysm: } uugiuqkesegaamqw: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } seyygcwcaogkmaqe: } wwgikwuigiiqsswq: qoaawmmcqyacokws: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); cwmuqmoeauqcewoy: } uwyeycaywowwiquu: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto eiecgqokmuekaesc; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\x61\x64\155\x69\156\x2d\160\x6f\163\164\x2e\x70\x68\x70\77\x61\143\164\151\157\x6e\x3d\157\x70\x74\x69\x6d\151\172\x61\x74\x69\x6f\156\137\160\x75\162\147\145\137{$this->mwikyscisascoeea()}\46\164\x79\160\x65\75\164\x65\162\155\55{$iwewcwusemqaiggk->term_id}\46\164\x61\170\x6f\x6e\x6f\x6d\x79\x3d{$iwewcwusemqaiggk->taxonomy}"), "\157\x70\164\x69\x6d\x69\x7a\141\x74\151\157\156\x5f\x70\165\x72\147\145\137{$this->mwikyscisascoeea()}\137\x74\x65\162\155\55{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\160\x74\x69\x6d\151\x7a\x61\x74\151\x6f\x6e\137\160\x75\x72\147\x65\x5f{$this->mwikyscisascoeea()}"] = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\x65\146" => $eeamcawaiqocomwy], sprintf(__("\103\154\x65\141\162\40\164\x68\x69\x73\40\45\x73", PR__PKG__OPTIMIZATION), $this->mwikyscisascoeea())); eiecgqokmuekaesc: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\131\x2d\x6d\x2d\144", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto ggsugekocmsukuci; } $ocogsiouoiuuguym = explode("\x2d", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x70\x6f\163\x74\137\144\x61\x74\145\x73\137\165\x72\154\163"), $auwuoyyagaiegwae); ggsugekocmsukuci: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); kcwgiwimgqesukqu: } ceosmkqgqgwsowwg: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\160\x72\x6f\144\x75\143\x74\x5f\163\x68\x69\160\160\x69\x6e\147\137\143\x6c\x61\163\163" === $kesssewsiegssiya->name)) { goto qosswumywsaeyqus; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto mieoguuqiwqioeqa; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto gqeoaceyoiicoaec; } $auwuoyyagaiegwae[] = $migiiksoiymissge; gqeoaceyoiicoaec: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto gscyiqmmegqmqcoe; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto uckusgwkoycmkeam; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto cciakcwuweqmcose; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; cciakcwuweqmcose: uckusgwkoycmkeam: ikukqooiowqywyqo: } kkckyqmcyussauma: gscyiqmmegqmqcoe: oksqsucimimsswcg: } msmmiaumiasmsiog: mieoguuqiwqioeqa: qosswumywsaeyqus: gcecieuocqawmgci: } wicuauokauykwoeu: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\160\x6f\163\x74\137\164\x65\162\x6d\x73\137\x75\162\x6c\163"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\143\154\x65\x61\156\137\144\157\x6d\141\x69\156\137\x75\x72\154\x73"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto eussqkkimciywios; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\150\157\163\x74"] . $msimssikcguyqcac["\x70\x61\164\150"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\145\x66\157\162\145\x5f\x63\154\145\141\156\137\x64\157\x6d\141\x69\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\x6f\163\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\141\164\150"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto iomwkkieqcswkkaw; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto cuayqmasemsqsume; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto igmawmwssyskqqag; cuayqmasemsqsume: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); igmawmwssyskqqag: iomwkkieqcswkkaw: eekkcooqswqouoei: } gcqssckowmywoesw: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\141\146\164\x65\162\137\143\x6c\145\x61\x6e\137\x64\157\x6d\141\x69\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); kocaieyauyiqmyiy: } icoiqskygugkgmkm: maguoggkqamaiuag: } swicauyqusmgeccu: eussqkkimciywios: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\x25\160\x6f\x73\164\x6e\x61\x6d\x65\45", "\x25\160\x61\147\x65\156\141\155\145\x25"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!(ManipulateFormat::eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\x2f")) { goto ewsigoeswimiueqe; } $auwuoyyagaiegwae[] = $migiiksoiymissge; ewsigoeswimiueqe: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto gaskcgoeywuyukke; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; gaskcgoeywuyukke: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto ccgsycueagwegqeu; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\150\157\x6d\145"); if (!(!empty($blog_id) && is_multisite())) { goto gqaqamewqeaqwcia; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\150\x6f\x6d\x65"); restore_current_blog(); gqaqamewqeaqwcia: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\x73\x63\x68\145\x6d\x65"]}\x3a\57\x2f{$scyimseukcmieyuw["\x68\x6f\x73\164"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\x68\x6f\163\164"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\x2a")) { goto qmqmskywcgiqgygm; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\43" . $suaemuyiacqyugsm . "\43\151"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); cmsiuimsiycomyay: } geyiosucqswaeasw: goto omuemegmkesqgwys; qmqmskywcgiqgygm: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; omuemegmkesqgwys: } sgkqgucguyccaaki: ksiwgckusukisueg: } okuqsqaiwwiigmyu: ccgsycueagwegqeu: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto qmguoqeawegcoeoa; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); sayqggaieocmskko: } gmeiuoeewucukque: qmguoqeawegcoeoa: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto ymucaguacemwsgsi; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\x44\x4f\x49\116\107\x5f\x41\x55\124\x4f\x53\101\x56\x45")) { goto ociesuicgmkekcue; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\x61\x74\x74\x61\x63\150\x6d\145\156\x74", "\x6e\x61\166\137\155\145\156\x75\x5f\151\164\x65\155"]) && !in_array($post->post_status, ["\x64\162\141\x66\x74", "\x61\165\x74\157\55\144\x72\141\146\x74"]))) { goto wiaymoucakyaikii; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto igyesgemqesackws; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\x77\x70\x6d\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\157\157\x63\157\155\155\145\x72\x63\145\x2d\x6d\165\154\x74\x69\x6c\151\156\x67\165\x61\154\57\x77\160\155\x6c\x2d\167\x6f\157\143\157\x6d\155\x65\162\x63\145\x2e\160\150\160")) { goto ceaamccscgcmqgka; } if (!("\160\x6f\x6c\171\154\x61\156\x67" === $eokyomeiuimoaiac && function_exists("\160\154\154\x5f\147\x65\x74\137\160\x6f\163\x74\137\x6c\x61\156\x67\165\x61\147\x65"))) { goto ycecaauekkiqacuu; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); ycecaauekkiqacuu: goto omumkeywqqogwwue; ceaamccscgcmqgka: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\x70\x6f\163\x74\x5f" . $useksmwkuswkwcqg); omumkeywqqogwwue: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x62\x65\x66\157\162\145\x5f\143\x6c\x65\141\156\x5f\x70\x6f\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\x70\157\x73\x74\x5f\160\x75\x72\x67\x65\137\165\162\154\163"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x61\146\x74\145\162\x5f\143\x6c\x65\x61\x6e\137\x70\x6f\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); igyesgemqesackws: wiaymoucakyaikii: ociesuicgmkekcue: ymucaguacemwsgsi: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto uoewiggumomegksg; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\142\x65\x66\x6f\162\x65\x5f\x63\x6c\145\141\156\x5f\146\x69\x6c\x65\163"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\145\x66\x6f\x72\x65\137\x63\154\145\x61\x6e\137\146\151\x6c\145"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\157\x73\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\x61\x74\150"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto ywokggauuiosegog; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); ywokggauuiosegog: yqqseqskcqeqkacm: } qywkykqkeeuccoui: oqgymyiwckkwueuw: } wqwmuuicoqigqwyc: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\x61\x66\164\x65\162\x5f\143\154\x65\141\x6e\137\146\x69\x6c\x65"), $eeamcawaiqocomwy); gaouaiemokqqgssw: } qiikwossequwiuom: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\x61\146\x74\x65\x72\137\143\154\x65\141\156\137\x66\x69\154\145\x73"), $auwuoyyagaiegwae); uoewiggumomegksg: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\x68\x6f\163\164"] . "\52" . untrailingslashit($mgoiyiawsmmgasic["\160\141\164\150"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\137\x63\x6c\145\141\156\137\x68\x6f\155\145\x5f\162\x6f\x6f\164"), $couygeouymagssgw, $mgoiyiawsmmgasic["\150\157\163\164"], $mgoiyiawsmmgasic["\160\141\164\150"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\142\x65\x66\157\x72\x65\137\x63\154\145\141\156\137\x68\x6f\155\x65"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\173\x69\x6e\144\145\x78\x2c\x69\156\x64\145\x78\x2d\x2a\175\x2e\x7b\x68\164\155\x6c\54\150\x74\x6d\154\137\147\172\x69\x70\175", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto kwasqmcyiswoaiuu; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); asoecuscmsyusmkg: } syisomgawcsqeemk: kwasqmcyiswoaiuu: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\52\x2f" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto kkmuuoscccmokkiw; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); oaqeoqsksuyyggmg: } kiskwawumeiiieuk: kkmuuoscccmokkiw: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\x2f\x2e\x6d\x6f\142\151\154\x65\x2d\141\143\164\151\x76\x65", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto aqekkeqmmewoyawu; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); miugmimciywcgswm: } awuwuuuagqysukku: aqekkeqmmewoyawu: $okyqgikguumqkcas = glob($couygeouymagssgw . "\57\56\x6e\x6f\x2d\167\145\142\160", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto maggecymmmesqmqs; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); emeeocqaisksyioq: } mcqwuawosciucemq: maggecymmmesqmqs: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\141\146\x74\x65\x72\137\143\x6c\145\141\x6e\x5f\150\157\x6d\x65"), $couygeouymagssgw, $swaukaagekiououo); ugkwqaywmwqucoeo: } sockocsycmkaeosg: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\143\157\x6d\x6d\145\156\x74\163\x5f"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\x74\x5f\143\154\145\x61\x6e\137\x68\x6f\155\145\x5f\146\145\x65\144\163"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\142\145\x66\x6f\x72\x65\x5f\143\x6c\x65\141\x6e\x5f\x68\157\155\x65\x5f\146\145\x65\x64\x73"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\141\x66\x74\x65\162\x5f\143\154\x65\141\156\x5f\150\157\x6d\145\137\x66\x65\145\x64\x73"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\151\144", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\167\x70\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\x6f\157\143\x6f\x6d\155\145\162\x63\x65\55\155\165\x6c\164\151\154\151\x6e\147\165\141\x6c\x2f\167\x70\155\154\55\x77\157\157\x63\157\155\x6d\145\162\143\145\x2e\x70\x68\160")) { goto qkiyyywwuiuackao; } if ("\160\157\x6c\171\x6c\x61\156\x67" === $eokyomeiuimoaiac && function_exists("\160\154\154\x5f\x67\145\x74\x5f\164\x65\162\x6d\x5f\x6c\141\156\x67\x75\141\x67\145")) { goto csaksaisgawusswg; } $swaukaagekiououo = false; goto ecgwgamiseokmise; csaksaisgawusswg: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); ecgwgamiseokmise: goto gyskcwykkyakeims; qkiyyywwuiuackao: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\164\141\170\137" . $uemuuqsgymiqyuuu); gyskcwykkyakeims: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\57" !== ManipulateFormat::eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto ossakckwskyqusmm; } array_push($owwcaiyoucwcwmmq, $migiiksoiymissge); ossakckwskyqusmm: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\142\145\146\x6f\x72\145\137\x63\154\145\141\x6e\137\164\145\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\x74\x65\162\155\x5f\x70\165\x72\x67\145\137\x75\x72\x6c\x73"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x61\146\164\x65\162\137\143\154\x65\141\x6e\137\164\145\x72\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } }
