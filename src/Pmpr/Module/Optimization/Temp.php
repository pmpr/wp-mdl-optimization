<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce42dbc0828             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\167\151\164\x63\150\x5f\x74\x68\145\155\145", [$this, "\x77\x65\x69\x6b\153\x79\x69\x71\157\x6f\x67\x6b\157\x79\143\145"])->qcsmikeggeemccuu("\160\162\145\137\x70\157\163\164\137\165\160\144\141\164\145", [$this, "\141\x75\167\161\171\147\x6d\x77\x77\151\165\147\x63\x69\x65\x65"], 2)->qcsmikeggeemccuu("\x75\x70\147\162\x61\144\x65\x72\x5f\160\162\x6f\x63\x65\163\163\x5f\143\157\x6d\x70\154\145\164\145", [$this, "\153\157\x6f\143\x75\x79\151\171\151\151\x65\x75\x61\x6b\155\x6d"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\160\165\x72\147\x65\137\x63\x61\143\150\145\x5f\146\151\x6c\x65\163"), [$this, "\x77\145\151\x6b\x6b\171\x69\x71\x6f\157\147\x6b\x6f\x79\x63\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x61\x66\164\x65\162\x5f\x63\154\x65\141\x6e\137\x70\157\x73\164"), [$this, "\161\141\147\x6d\x77\x77\x6d\161\x69\x69\143\x61\x79\x61\161\147"])->qcsmikeggeemccuu("\x63\x6f\x6d\x6d\145\156\164\137\x70\157\163\164", [$this, "\155\155\x65\x69\165\171\165\147\145\145\153\157\161\x77\x63\x73"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\x74\137{$this->mwikyscisascoeea()}\x5f\143\154\145\141\x6e\x5f\x64\157\x6d\x61\x69\156"), [$this, "\167\x65\151\x6b\153\171\151\161\157\157\147\x6b\157\x79\143\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\143\154\x65\x61\x6e\x5f\x66\x69\154\x65\x73"), [$this, "\151\155\157\x77\x61\155\x69\167\x65\x65\x6b\x79\147\x6f\143\x6d"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ekgcquiosyesyism; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\x70\165\x62\154\x69\x63" => true, "\160\165\142\x6c\151\x63\x6c\x79\x5f\x71\165\145\162\171\x61\142\x6c\145" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\x5f\x72\x6f\167\x5f\x61\x63\164\x69\x6f\x6e\x73", [$this, "\x77\163\x71\x79\x73\171\x61\x77\167\x77\x67\x67\147\157\x77\x63"], 2); qggiogeyowcoaiqy: } usgmimcwygsmcioa: ekgcquiosyesyism: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto qosckaqceoumcasm; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); qosckaqceoumcasm: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto gmcqkoqwkiawaikw; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; gmcqkoqwkiawaikw: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\160\165\142\154\151\x73\150" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto kgeggsckmgcgwcqm; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\x5f\x70\x6f\163\164\x5f\160\x75\162\147\x65\137\165\162\154\x73"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\137\142\x65\146\157\162\x65\x5f\x63\x6c\x65\141\x6e\x5f\x70\157\x73\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\141\x66\x74\x65\162\x5f\143\154\x65\141\156\x5f\x70\157\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137{$this->mwikyscisascoeea()}\137\x61\146\x74\x65\x72\137\143\154\x65\141\x6e\137\x70\x6f\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); kgeggsckmgcgwcqm: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\163\x63\150\x65\x6d\145"] . "\72\x2f\x2f" . $mgoiyiawsmmgasic["\150\x6f\x73\x74"] . "\52" . $mgoiyiawsmmgasic["\x70\x61\x74\150"]; gmymycwymqkuiisi: } qimieogaimwmukmu: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\165\x70\144\141\x74\145" === $iaakskwmyqceoscy["\141\x63\164\151\x6f\x6e"])) { goto cycyaqqawmwiywwe; } if (!("\164\x68\x65\155\145" === $iaakskwmyqceoscy["\x74\x79\x70\x65"])) { goto cokacyaayuueyuuu; } if (!is_array($iaakskwmyqceoscy["\x74\150\x65\155\x65\x73"])) { goto koawwmccgquqqmwa; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\164\x68\145\155\145\x73"], $sgmuqamasucuikqa)) { goto wogokmgkgkumqcws; } $this->weikkyiqoogkoyce(); wogokmgkgkumqcws: koawwmccgquqqmwa: cokacyaayuueyuuu: cycyaqqawmwiywwe: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto ckowiuagwmsqmiqc; } $this->weikkyiqoogkoyce(); ckowiuagwmsqmiqc: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto eqieeecackceeweg; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); eqieeecackceeweg: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\x6f\x73\x74"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\160\141\x74\150"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto wemmseueskwkcwou; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto cuwkqgemkmuuegkc; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); cuwkqgemkmuuegkc: eecgougegqassgyq: } ikeyoyoigsuouokm: if (!$ymiyawysimukkoso) { goto oyicskieeaewgwce; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); oyicskieeaewgwce: wemmseueskwkcwou: iuaommmyqoecmuss: } ygywkqgioiscmuie: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto ceeqguaoysyaasey; } if (!is_array($mkomwsiykqigmqca)) { goto cceakqgoysacqwmc; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto scaimkkukmgoeaya; cceakqgoysacqwmc: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; scaimkkukmgoeaya: goto ekmqouqsgsaukeiq; ceeqguaoysyaasey: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); ekmqouqsgsaukeiq: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto qwogeocemuaaasiw; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\x2f\x25\x31\44\x73\x25\x32\x24\x73\x28\56\52\51\x2f\x69", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); kacgiqwewyeeyyam: } wceiuqaeywmgscww: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } ewooakeuigcyuemu: } cugkqmkuyuwwqcec: qwogeocemuaaasiw: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); cgqkqmiekaageyka: } ywmuoigomwwigqea: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto goimywgsweeqsewo; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\x61\144\155\x69\156\x2d\160\x6f\x73\164\x2e\160\x68\160\77\x61\143\164\151\157\x6e\x3d\x6f\x70\x74\x69\155\x69\172\141\x74\x69\x6f\156\137\x70\x75\162\x67\x65\x5f{$this->mwikyscisascoeea()}\x26\164\171\x70\145\75\x74\x65\x72\155\55{$iwewcwusemqaiggk->term_id}\x26\164\x61\x78\x6f\156\157\155\x79\75{$iwewcwusemqaiggk->taxonomy}"), "\x6f\x70\164\151\x6d\x69\172\x61\164\x69\x6f\156\137\160\165\162\x67\x65\137{$this->mwikyscisascoeea()}\137\164\x65\162\x6d\55{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\x6f\160\x74\x69\155\151\172\141\164\x69\157\156\x5f\160\165\162\x67\145\137{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\x43\154\x65\141\162\x20\x74\150\x69\x73\40\45\x73", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); goimywgsweeqsewo: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\x59\55\155\55\144", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto uomwseyiqckeewgo; } $ocogsiouoiuuguym = explode("\x2d", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\x70\157\163\x74\x5f\x64\141\164\145\163\137\x75\162\154\163"), $auwuoyyagaiegwae); uomwseyiqckeewgo: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); kmocamaieycogugg: } cqyiukmuqceicqwa: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\160\162\157\144\165\x63\x74\x5f\163\x68\x69\x70\160\x69\156\147\137\x63\x6c\141\163\x73" === $kesssewsiegssiya->name)) { goto qcuywygiosoqycaa; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto kmikwoqwigwuyqae; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto sickakeesgcgwisw; } $auwuoyyagaiegwae[] = $migiiksoiymissge; sickakeesgcgwisw: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto gkyguugwwoaqoigy; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto uauqmaeueukkmuwa; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto wggeggkumkwaaesu; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; wggeggkumkwaaesu: uauqmaeueukkmuwa: cqeceeagmysoyoqg: } wmqegaqemgiggsce: gkyguugwwoaqoigy: wwskeewecyukygeg: } eywcgeccsmquugsw: kmikwoqwigwuyqae: qcuywygiosoqycaa: wamkaouokmyoyuqu: } iuieyqacggsykgus: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\160\x6f\163\164\x5f\x74\x65\162\x6d\163\137\165\162\154\x73"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x63\x6c\x65\141\x6e\137\x64\157\x6d\141\x69\156\x5f\x75\x72\x6c\x73"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto aeekgeqawgsmgiqw; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\x68\x6f\x73\x74"] . $msimssikcguyqcac["\160\141\x74\150"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x62\145\x66\x6f\x72\x65\137\143\154\145\x61\156\x5f\x64\157\x6d\141\x69\x6e"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\x6f\163\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\x61\x74\x68"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto qikmwaessamuueoe; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto mgiwqumikeuieocg; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto yegkgccwomcgkumi; mgiwqumikeuieocg: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); yegkgccwomcgkumi: qikmwaessamuueoe: jweeyemwqyqmyuys: } qsyyeoosgigiiequ: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\141\x66\x74\145\162\x5f\x63\x6c\145\141\156\x5f\144\x6f\x6d\141\x69\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); qoigaauuokyusmgk: } uusyaguomkqeakkm: ykymogaqkgaiiiyi: } coaysoeouasaekie: aeekgeqawgsmgiqw: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\x25\x70\x6f\163\x74\156\141\155\145\45", "\x25\x70\x61\x67\x65\156\x61\155\145\45"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!($this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\57")) { goto imgagmqusgiqissi; } $auwuoyyagaiegwae[] = $migiiksoiymissge; imgagmqusgiqissi: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto scaciowogmayswms; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; scaciowogmayswms: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto yquysamwsoyyqcya; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\x68\x6f\x6d\x65"); if (!(!empty($blog_id) && ManipulateServer::gsaomcwyacqcumaa())) { goto cesaaiguwciccysi; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\150\157\x6d\145"); restore_current_blog(); cesaaiguwciccysi: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\x73\143\150\145\x6d\x65"]}\x3a\x2f\x2f{$scyimseukcmieyuw["\150\x6f\163\164"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\x68\x6f\163\164"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\52")) { goto syquiiogeymgicuy; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\43" . $suaemuyiacqyugsm . "\43\x69"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); kywmiquiiwmwgooy: } qocmmyskykeuwsae: goto yemuiyokmqoqckwu; syquiiogeymgicuy: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; yemuiyokmqoqckwu: } kqsyqwwscwoswsgk: sqyceswygksmmqqa: } wskccugoccagaqcw: yquysamwsoyyqcya: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto gyceukwoyaasuwik; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); wsyeqyekimescwkq: } qsycguggqkgywgaq: gyceukwoyaasuwik: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto pscqogmyseiwuqye; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\104\117\x49\x4e\x47\137\101\125\x54\117\123\101\x56\105")) { goto aigeoggkowgwwwqg; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\141\x74\164\141\x63\x68\x6d\x65\x6e\164", "\156\141\x76\137\x6d\x65\156\x75\x5f\151\164\145\155"]) && !in_array($post->post_status, ["\144\x72\x61\x66\x74", "\x61\165\x74\157\x2d\x64\x72\x61\x66\164"]))) { goto ggoyigsoyccmscum; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto agokkauammisaqke; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\x77\160\155\x6c" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\167\157\157\x63\x6f\x6d\155\x65\x72\143\145\55\x6d\165\x6c\164\x69\154\x69\156\x67\165\141\x6c\x2f\167\160\155\154\x2d\x77\x6f\157\143\x6f\x6d\155\x65\x72\x63\145\x2e\160\150\160")) { goto iiyggeuemwuwqiey; } if (!("\x70\x6f\x6c\x79\x6c\141\156\147" === $eokyomeiuimoaiac && function_exists("\x70\x6c\154\137\x67\x65\164\x5f\160\x6f\x73\164\x5f\x6c\141\156\x67\165\141\147\x65"))) { goto iiyamaquicwswcyu; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); iiyamaquicwswcyu: goto omeookmiomoieeee; iiyggeuemwuwqiey: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\x70\157\163\164\x5f" . $useksmwkuswkwcqg); omeookmiomoieeee: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\142\145\146\x6f\x72\x65\137\x63\x6c\x65\x61\x6e\x5f\160\157\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x70\157\163\164\137\x70\165\x72\x67\145\x5f\165\162\154\x73"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\x5f\x61\x66\x74\145\x72\137\143\x6c\x65\x61\x6e\137\160\157\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); agokkauammisaqke: ggoyigsoyccmscum: aigeoggkowgwwwqg: pscqogmyseiwuqye: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto msuyygiskkumokec; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\142\145\x66\x6f\x72\145\x5f\143\x6c\145\141\x6e\137\x66\151\154\x65\163"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\145\x66\157\162\145\137\x63\154\x65\x61\x6e\x5f\146\x69\x6c\145"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\x6f\x73\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\141\x74\150"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto mowauiysyiciqaaa; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); mowauiysyiciqaaa: wiiyageyqowkmmko: } ayggiggmcqckqwom: ogywsgmqcgioaoqk: } wcagqkquasswioos: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\141\x66\x74\145\x72\137\x63\x6c\145\x61\156\x5f\x66\x69\x6c\x65"), $eeamcawaiqocomwy); muqeeocooyiosouk: } cyyecekuwygaqwcy: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\x61\x66\x74\145\x72\137\143\x6c\145\x61\x6e\x5f\146\151\x6c\x65\x73"), $auwuoyyagaiegwae); msuyygiskkumokec: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\x68\157\163\164"] . "\x2a" . untrailingslashit($mgoiyiawsmmgasic["\x70\141\x74\x68"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\143\x6c\x65\x61\x6e\137\150\x6f\x6d\x65\137\162\x6f\157\164"), $couygeouymagssgw, $mgoiyiawsmmgasic["\x68\157\x73\164"], $mgoiyiawsmmgasic["\160\141\164\150"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\x65\x66\x6f\162\x65\x5f\x63\x6c\145\141\x6e\137\150\157\x6d\145"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\173\x69\156\144\x65\170\54\x69\x6e\x64\x65\x78\55\x2a\175\56\173\x68\x74\155\x6c\54\150\164\x6d\154\x5f\147\x7a\151\x70\175", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto sykwygmouoikuyws; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); mgscyaiwekksacco: } eiekcqosmyqmwqag: sykwygmouoikuyws: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\52\57" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto dwciioycickkwawq; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); ggoquyyseekiwukq: } keiciayiyqsemsys: dwciioycickkwawq: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\57\56\155\157\x62\x69\x6c\145\x2d\x61\x63\164\x69\x76\145", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto qooykiaywemimcke; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); ysiuiuqawkaaamus: } yoociieskmuucgms: qooykiaywemimcke: $okyqgikguumqkcas = glob($couygeouymagssgw . "\x2f\56\156\x6f\x2d\x77\145\142\x70", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto iyakeemwaiqeueme; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); uecmkggsueeiyawk: } okceyucmoigyokyy: iyakeemwaiqeueme: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\x74\137\141\146\164\x65\162\137\143\154\x65\x61\156\x5f\x68\157\155\x65"), $couygeouymagssgw, $swaukaagekiououo); iyeswqeqcsmsoueq: } ggkgseywksemuogc: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\x63\157\x6d\155\x65\156\x74\163\x5f"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\143\154\x65\x61\x6e\137\x68\x6f\x6d\x65\137\146\145\145\144\x73"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\142\x65\146\157\x72\145\137\143\154\x65\x61\156\137\150\157\155\145\137\146\x65\x65\144\x73"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x61\x66\x74\x65\162\x5f\x63\x6c\x65\141\156\x5f\x68\x6f\155\x65\x5f\146\x65\145\x64\163"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\151\x64", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\x77\160\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\x6f\157\143\157\155\x6d\145\162\x63\145\x2d\155\x75\x6c\x74\151\154\x69\156\x67\165\x61\154\57\x77\x70\x6d\x6c\x2d\x77\x6f\157\x63\x6f\x6d\x6d\145\x72\x63\x65\56\160\150\160")) { goto iekesyeicomwcuas; } if ("\160\157\x6c\x79\154\x61\x6e\147" === $eokyomeiuimoaiac && function_exists("\x70\x6c\x6c\x5f\x67\145\x74\137\x74\x65\x72\x6d\x5f\x6c\x61\156\x67\165\x61\x67\145")) { goto ouuuacyewgmocwsc; } $swaukaagekiououo = false; goto jgaoqcmiqagoiuko; ouuuacyewgmocwsc: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); jgaoqcmiqagoiuko: goto wimggeysyugwwkca; iekesyeicomwcuas: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\x74\141\170\x5f" . $uemuuqsgymiqyuuu); wimggeysyugwwkca: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\x2f" !== $this->eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto oycikycyewimcaew; } $owwcaiyoucwcwmmq[] = $migiiksoiymissge; oycikycyewimcaew: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\x5f\142\145\146\x6f\x72\x65\x5f\x63\x6c\x65\141\x6e\x5f\x74\x65\162\x6d"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\164\x65\162\x6d\x5f\160\165\162\147\x65\137\x75\162\x6c\163"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\x61\146\164\x65\x72\x5f\x63\154\x65\x61\156\137\164\145\162\155"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } public function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }
