<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d83b2421d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulatePlugin; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Exception; use FilesystemIterator; use IteratorIterator; use RegexIterator; use WP_Post; use WP_Taxonomy; use WP_Term; use WP_Upgrader; abstract class Temp extends Container { protected ?string $id = null; protected $paths; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\x77\151\164\x63\x68\137\164\150\x65\155\x65", [$this, "\x77\x65\151\x6b\153\x79\x69\161\x6f\x6f\147\153\157\171\143\145"])->qcsmikeggeemccuu("\x70\162\145\137\160\157\x73\164\137\165\160\x64\141\164\x65", [$this, "\141\165\167\x71\x79\147\155\167\x77\151\165\147\143\x69\145\x65"], 2)->qcsmikeggeemccuu("\165\x70\x67\162\x61\144\x65\162\137\x70\x72\x6f\143\x65\x73\x73\x5f\143\x6f\x6d\160\x6c\x65\x74\145", [$this, "\x6b\157\x6f\x63\165\x79\151\171\151\151\x65\x75\x61\153\x6d\x6d"], 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\160\x75\162\147\x65\x5f\143\x61\x63\x68\x65\137\146\151\x6c\145\163"), [$this, "\167\145\x69\153\153\x79\x69\161\157\157\x67\x6b\x6f\171\x63\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x61\146\164\145\x72\137\x63\154\145\x61\156\x5f\160\157\x73\x74"), [$this, "\x71\141\147\x6d\x77\x77\x6d\161\x69\151\x63\141\171\141\161\x67"])->qcsmikeggeemccuu("\x63\157\x6d\155\x65\156\x74\137\160\157\x73\x74", [$this, "\155\155\145\x69\x75\171\x75\147\x65\x65\x6b\x6f\161\167\x63\163"], 2, 99)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f{$this->mwikyscisascoeea()}\x5f\x63\154\x65\x61\156\x5f\x64\x6f\x6d\x61\151\x6e"), [$this, "\x77\145\x69\x6b\153\x79\x69\161\x6f\157\147\153\x6f\171\x63\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\137\143\154\x65\x61\156\137\146\151\154\145\163"), [$this, "\x69\x6d\x6f\167\141\x6d\x69\167\145\x65\x6b\171\x67\157\x63\155"]); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto kgikoagqwkuocesg; } $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\165\x62\x6c\151\x63" => true, "\x70\x75\142\x6c\151\143\154\171\x5f\161\x75\145\162\x79\141\142\154\x65" => true, self::aisguagukaewucii => self::emgcgiseaoouacge]); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $this->cecaguuoecmccuse("{$kesssewsiegssiya}\x5f\x72\157\x77\137\x61\x63\x74\151\x6f\x6e\163", [$this, "\x77\x73\x71\x79\163\x79\x61\x77\167\167\147\x67\x67\x6f\167\x63"], 2); uqiekawkwcegsumy: } awaaowoqskgokwiy: kgikoagqwkuocesg: parent::kgquecmsgcouyaya(); } public function mmeiuyugeekoqwcs($aqqmosqmsuueyaes, $swyywyqesisooayc) { $post = ManipulateComment::ayueggmoqeeukqmq($aqqmosqmsuueyaes); if (!$post) { goto skaayekywasksoug; } $this->ekcemquyyiqykmoo(ManipulatePost::mwikyscisascoeea($post)); skaayekywasksoug: } public function mwikyscisascoeea() : string { return $this->id; } public function iwqysmawycmsmces() : array { $oegoegssokkyiqam = $this->paths; if (!is_string($oegoegssokkyiqam)) { goto gkoyqgogsukuowqi; } $oegoegssokkyiqam = [$oegoegssokkyiqam]; gkoyqgogsukuowqi: return $oegoegssokkyiqam; } public function auwqygmwwiugciee($yekqqesogweecqyc, $icwicymcioeyeyek) { $post = ManipulatePost::get($yekqqesogweecqyc); if (!($post && "\x70\165\x62\154\151\163\150" === ManipulatePost::ucwmcwqmqwaymkkc($post))) { goto sgikkoswwyesqomo; } $swaukaagekiououo = ManipulateI18N::emqmaiomewcmuacu($yekqqesogweecqyc); $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $owwcaiyoucwcwmmq = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\160\157\163\x74\x5f\x70\165\162\x67\x65\x5f\165\x72\x6c\x73"), $owwcaiyoucwcwmmq, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\142\145\146\157\x72\145\137\x63\154\x65\x61\156\137\x70\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x61\x66\164\x65\162\x5f\143\154\x65\141\x6e\x5f\160\x6f\163\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137{$this->mwikyscisascoeea()}\x5f\141\x66\x74\x65\x72\137\143\x6c\145\x61\x6e\x5f\x70\157\163\164"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); sgikkoswwyesqomo: } public function imowamiweekygocm(array $auwuoyyagaiegwae = []) { $iaceaqwggsgmasqe = []; foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $iaceaqwggsgmasqe[] = $mgoiyiawsmmgasic["\163\143\150\145\x6d\145"] . "\x3a\x2f\57" . $mgoiyiawsmmgasic["\150\157\163\164"] . "\x2a" . $mgoiyiawsmmgasic["\160\141\164\150"]; cksoeiwawiygyiyg: } aayysiegiyweiyuu: return $iaceaqwggsgmasqe; } public function koocuyiyiieuakmm($kkkswwyyaoeysaio, $iaakskwmyqceoscy) { if (!("\x75\160\144\x61\x74\145" === $iaakskwmyqceoscy["\x61\x63\164\151\157\x6e"])) { goto iikgiaocummweiga; } if (!("\164\x68\145\x6d\145" === $iaakskwmyqceoscy["\164\171\x70\145"])) { goto ueqsiwuwumoqgsck; } if (!is_array($iaakskwmyqceoscy["\x74\150\145\155\x65\163"])) { goto akwwuuiykscgicuw; } $current_theme = wp_get_theme(); $sgmuqamasucuikqa = [ $current_theme->get_template(), $current_theme->get_stylesheet(), ]; if (!array_intersect($iaakskwmyqceoscy["\x74\x68\145\155\x65\x73"], $sgmuqamasucuikqa)) { goto cyqokqcacysioeyc; } $this->weikkyiqoogkoyce(); cyqokqcacysioeyc: akwwuuiykscgicuw: ueqsiwuwumoqgsck: iikgiaocummweiga: } public function eugcsqcwkqseakoe($mceokigoiqekskwe, $gywkakmagykqkiei, $kesssewsiegssiya) { if (!ManipulateTaxonomy::cekoogweeooasayu($kesssewsiegssiya)) { goto gsusqquicmukegcs; } $this->weikkyiqoogkoyce(); gsusqquicmukegcs: } private function wgokqcqsmcqsiiue($miawkwqioaeasiig) { if (!$this->kcciqwskewsuaemk()->asysewkmisimumay($miawkwqioaeasiig)) { goto wcsysckgigeykkwy; } ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); wcsysckgigeykkwy: } private function qeoaoiweucueeuqu(string $eeamcawaiqocomwy, $ymiyawysimukkoso = false) { global $wp_rewrite; $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\x6f\163\x74"]) as $miawkwqioaeasiig) { $mkomwsiykqigmqca = $miawkwqioaeasiig . $msimssikcguyqcac["\160\x61\164\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto wycmcqaauqkgegau; } foreach (ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca) as $igqsaukqcqscimok) { if (!ManipulateFile::mecmkmogggamegic($igqsaukqcqscimok)) { goto acsigwcaesyyoiie; } $this->kcciqwskewsuaemk()->remove(ManipulateFile::scikcaaaiwcsqowm($igqsaukqcqscimok)); acsigwcaesyyoiie: iyikuwuweqigiuey: } gysmmooawoeggaow: if (!$ymiyawysimukkoso) { goto aqaaqeucgoegeeuk; } $this->wgokqcqsmcqsiiue(trailingslashit($mkomwsiykqigmqca) . $wp_rewrite->pagination_base); aqaaqeucgoegeeuk: wycmcqaauqkgegau: ceusyscosamyaiws: } scgmwokeuqwiekkk: } public function gqguucgwsqasamke($qcqaayguacmuykwi, $mkomwsiykqigmqca = '', $iuomscuiswckwcoe = false) { if (!$mkomwsiykqigmqca) { goto wcekgciqeggiiwgk; } if (!is_array($mkomwsiykqigmqca)) { goto qcweoyigoaeacsow; } $oegoegssokkyiqam = $mkomwsiykqigmqca; goto iyceygqsmokgmams; qcweoyigoaeacsow: $oegoegssokkyiqam = [$mkomwsiykqigmqca]; iyceygqsmokgmams: goto gkwuewqmqeswqukg; wcekgciqeggiiwgk: $oegoegssokkyiqam = $this->iwqysmawycmsmces(); gkwuewqmqeswqukg: if (isset($eewgemuwouukmwgk[$qcqaayguacmuykwi])) { goto uamuuwkyuqomqyuy; } $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); try { $mcowwqgmkuemoumu = new IteratorIterator(new FilesystemIterator($mkomwsiykqigmqca)); } catch (Exception $iewosgggaueeyymg) { return []; } $ucccueqywigcukcc = sprintf("\x2f\45\61\44\163\x25\x32\44\x73\50\56\52\51\x2f\x69", ManipulateFile::cgwcgscqeqauaagi($mkomwsiykqigmqca, true), $qcqaayguacmuykwi); try { $owouacqkcukeeomw = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc); foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { $eewgemuwouukmwgk[$qcqaayguacmuykwi][] = ManipulateFile::scikcaaaiwcsqowm($uwsgakoiqomwikmy); kkmwwqyesmkescyg: } yeiokcoikcysyimu: } catch (Exception $iewosgggaueeyymg) { $eewgemuwouukmwgk[$qcqaayguacmuykwi] = []; } uqcwyyiykmwygeau: } sagemooicmgceiug: uamuuwkyuqomqyuy: return $eewgemuwouukmwgk[$qcqaayguacmuykwi]; } public function qagmwwmqiicayaqg(WP_Post $post) { foreach ($this->soycogqiiekoekgq($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy); iyaugygcsmqqqkmo: } ekwuycsiuqwycqea: } public function wsqysyawwwgggowc($ccowyogiqwikkkie, $iwewcwusemqaiggk) { if (!DecoratorUser::scmcyesmmikkucie()) { goto cieumoqayigkoocy; } $eeamcawaiqocomwy = wp_nonce_url(ManipulateServer::oiucukewkckkwiqc("\x61\144\x6d\x69\x6e\x2d\160\157\163\164\x2e\x70\x68\160\x3f\141\x63\x74\x69\x6f\156\x3d\157\x70\164\x69\155\x69\172\141\x74\x69\x6f\x6e\137\x70\x75\x72\x67\145\137{$this->mwikyscisascoeea()}\x26\x74\x79\160\x65\75\164\x65\x72\x6d\55{$iwewcwusemqaiggk->term_id}\46\x74\141\170\x6f\156\157\155\x79\75{$iwewcwusemqaiggk->taxonomy}"), "\x6f\x70\164\151\155\151\x7a\141\x74\151\x6f\156\137\160\x75\x72\147\145\x5f{$this->mwikyscisascoeea()}\x5f\164\x65\x72\155\x2d{$iwewcwusemqaiggk->term_id}"); $ccowyogiqwikkkie["\157\160\x74\151\x6d\x69\x7a\x61\x74\151\157\156\x5f\x70\165\x72\x67\145\x5f{$this->mwikyscisascoeea()}"] = ManipulateHTML::yuawgssgauywkiia(sprintf(__("\103\x6c\145\x61\162\40\x74\150\151\x73\x20\45\x73", PR__MDL__OPTIMIZATION), $this->mwikyscisascoeea()), $eeamcawaiqocomwy); cieumoqayigkoocy: return $ccowyogiqwikkkie; } private function wgkqeyqiyacgqeso($post) { $cqgoimumaewouews = get_the_time("\x59\x2d\155\55\x64", $post); $auwuoyyagaiegwae = []; if (!$cqgoimumaewouews) { goto yggciikgkomgeqsc; } $ocogsiouoiuuguym = explode("\55", $cqgoimumaewouews); $auwuoyyagaiegwae = [get_year_link($ocogsiouoiuuguym[0]), get_month_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1]), get_day_link($ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2])]; $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\160\x6f\x73\x74\137\x64\141\x74\x65\x73\x5f\165\162\x6c\x73"), $auwuoyyagaiegwae); yggciikgkomgeqsc: return $auwuoyyagaiegwae; } public function yeimaqssyuewkcgm($post) { foreach ($this->wgkqeyqiyacgqeso($post) as $eeamcawaiqocomwy) { $this->qeoaoiweucueeuqu($eeamcawaiqocomwy, true); owaimkmgemoqewmm: } eoeiaccouaymakgm: } private function soycogqiiekoekgq(WP_Post $post) { $auwuoyyagaiegwae = []; $seyqqsmuaiegkeeq = DecoratorTaxonomy::qgckgkwskmsomoqs($post, self::ckmqoekmugkggeym); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!($kesssewsiegssiya instanceof WP_Taxonomy && $kesssewsiegssiya->public && "\160\162\x6f\x64\x75\x63\x74\137\x73\x68\151\160\x70\x69\x6e\147\x5f\x63\154\141\163\163" === $kesssewsiegssiya->name)) { goto gwyseusuceuwwccu; } $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $kesssewsiegssiya); if (!$uyuaosigqymaqsaa) { goto wywwieycqskuqcwc; } foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya); if (!$migiiksoiymissge) { goto ksawwekgswywwuwm; } $auwuoyyagaiegwae[] = $migiiksoiymissge; ksawwekgswywwuwm: if (!ManipulateTaxonomy::aewcsqigycuaekym($kesssewsiegssiya)) { goto qmoisuweiskkekca; } $mogoquygwgkamaaw = (array) get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya); foreach ($mogoquygwgkamaaw as $aqguqemekkmogkee) { $uasmmsomeawcggee = ManipulateTerm::get($aqguqemekkmogkee, $kesssewsiegssiya); if (!$uasmmsomeawcggee) { goto uqugcugeomqakcqo; } $yaycyieqogmsoamk = ManipulateTerm::qmgcisuuikgmqcsu($uasmmsomeawcggee, $kesssewsiegssiya); if (!$yaycyieqogmsoamk) { goto wmwgeoequuwwwywa; } $auwuoyyagaiegwae[] = $yaycyieqogmsoamk; wmwgeoequuwwwywa: uqugcugeomqakcqo: wickgagwgqqsomum: } yuqisiwgqacgmsym: qmoisuweiskkekca: umcyeiusoakewyaa: } koiiaewwicsckseu: wywwieycqskuqcwc: gwyseusuceuwwccu: usmuqsuwuueogimc: } ysoqeuugiuswykyu: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x70\157\x73\164\x5f\x74\145\x72\x6d\163\137\x75\x72\x6c\x73"), $auwuoyyagaiegwae); } public function weikkyiqoogkoyce($swaukaagekiououo = '') { $auwuoyyagaiegwae = !$swaukaagekiououo || is_object($swaukaagekiououo) || is_array($swaukaagekiououo) || is_int($swaukaagekiououo) ? (array) ManipulateI18N::kmmygsqekuksyeuy() : (array) ManipulateI18N::smickumaawgqkmco($swaukaagekiououo); $auwuoyyagaiegwae = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\x63\154\x65\141\156\137\x64\x6f\155\x61\x69\x6e\137\165\162\154\163"), $auwuoyyagaiegwae, $swaukaagekiououo); $auwuoyyagaiegwae = array_filter($auwuoyyagaiegwae); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); if (!($auwuoyyagaiegwae && $oegoegssokkyiqam)) { goto yoaewquyogiimyic; } foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $gwyacgiwokuuwouo = ManipulateI18N::augqukusksqwwuus($swaukaagekiououo, $mkomwsiykqigmqca); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); $couygeouymagssgw = $mkomwsiykqigmqca . $msimssikcguyqcac["\150\157\x73\164"] . $msimssikcguyqcac["\x70\x61\164\x68"]; $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\x74\x5f\142\145\146\x6f\162\145\x5f\x63\x6c\145\x61\156\x5f\144\157\155\141\x69\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\150\x6f\x73\x74"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\160\x61\x74\x68"]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto caaygouikgagsssc; } if ($iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto ggaucuaykyuiikem; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto egikqoaqqegawugu; ggaucuaykyuiikem: ManipulateFile::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); egikqoaqqegawugu: caaygouikgagsssc: iqwsqykoueqyyomy: } coogyackikgmecic: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\x61\146\x74\145\162\137\143\x6c\x65\x61\156\x5f\144\157\155\141\x69\156"), $couygeouymagssgw, $swaukaagekiououo, $eeamcawaiqocomwy); swckikycciugciqq: } kmqusaiaiogecyiy: ocmwuquguuqigose: } icouowaoycuuisqe: yoaewquyogiimyic: } public function skomiaywsggiyamc($aokagokqyuysuksm, $post) { $auwuoyyagaiegwae = []; $mqqisesagsuooios = Manipulate::yygaymuiikwoakuc($aokagokqyuysuksm); $migiiksoiymissge = str_replace(["\x25\160\x6f\163\x74\156\x61\155\x65\45", "\45\x70\141\147\145\x6e\x61\x6d\x65\45"], $mqqisesagsuooios[1], $mqqisesagsuooios[0]); if (!(ManipulateFormat::eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH) !== "\x2f")) { goto wmcmqmmcweecqmsw; } $auwuoyyagaiegwae[] = $migiiksoiymissge; wmcmqmmcweecqmsw: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $myyccyuumcscsagc = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!$myyccyuumcscsagc) { goto aakoeuuosouyeemc; } global $wp_rewrite; $auwuoyyagaiegwae[] = $myyccyuumcscsagc; $auwuoyyagaiegwae[] = $myyccyuumcscsagc . "{$wp_rewrite->pagination_base}"; aakoeuuosouyeemc: $dokeeoamkysymmqw = []; if (!$dokeeoamkysymmqw) { goto esqiocgueosoksyq; } global $blog_id; $uogwqioiiwqsyksu = DecoratorOption::get("\150\x6f\x6d\145"); if (!(!empty($blog_id) && is_multisite())) { goto qsmoiwqcuamyuwyu; } switch_to_blog($blog_id); $uogwqioiiwqsyksu = DecoratorOption::get("\x68\x6f\x6d\145"); restore_current_blog(); qsmoiwqcuamyuwyu: $scyimseukcmieyuw = ManipulateFormat::kcwgwosqkkkkmuks($uogwqioiiwqsyksu); $uogwqioiiwqsyksu = "{$scyimseukcmieyuw["\163\x63\150\x65\155\145"]}\72\57\x2f{$scyimseukcmieyuw["\150\157\163\x74"]}"; $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $mkomwsiykqigmqca .= $scyimseukcmieyuw["\150\x6f\x73\164"]; foreach ($dokeeoamkysymmqw as $suaemuyiacqyugsm) { if (!strstr($suaemuyiacqyugsm, "\52")) { goto csqakuuiyywassgw; } $meyiiwcswqmuggyg = ManipulateFile::qawkooaucwoseaia($mkomwsiykqigmqca, "\x23" . $suaemuyiacqyugsm . "\x23\151"); foreach ($meyiiwcswqmuggyg as $qogsmwakwacwqogk) { $auwuoyyagaiegwae[] = str_replace($mkomwsiykqigmqca, untrailingslashit($uogwqioiiwqsyksu), $qogsmwakwacwqogk->amqagusacuuuaswg()); sqmiymiemeegegic: } meseuuacmkuowqau: goto wycuyiukyceccaow; csqakuuiyywassgw: $auwuoyyagaiegwae[] = trailingslashit($uogwqioiiwqsyksu) . $suaemuyiacqyugsm; wycuyiukyceccaow: } saekesoeysauokkq: ugcwqacogqoswyse: } cicegcoqyuoggiwy: esqiocgueosoksyq: $auwuoyyagaiegwae[] = ManipulatePost::ocigkomwiuwmmkks($post); $eyagosskwwmgwmog = DecoratorPost::iimmeiugygssweyc($aokagokqyuysuksm); if (!(bool) $eyagosskwwmgwmog) { goto wwwggoemicgwwasy; } foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) { $auwuoyyagaiegwae[] = ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom); sescaagayikiggyq: } csggsqueaqmwgwkk: wwwggoemicgwwasy: return array_flip(array_flip($auwuoyyagaiegwae)); } public function ekcemquyyiqykmoo(?string $yekqqesogweecqyc) { static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$yekqqesogweecqyc])) { goto cewyaqiqmmwmauce; } $gqiuywqwmiieqcww[$yekqqesogweecqyc] = 1; if (defined("\104\x4f\x49\x4e\x47\137\101\x55\124\x4f\123\101\126\105")) { goto kucqcqeesaiacekm; } $post = ManipulatePost::get($yekqqesogweecqyc); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!($post && $useksmwkuswkwcqg && !in_array($useksmwkuswkwcqg, ["\x61\x74\164\x61\143\x68\x6d\x65\156\164", "\156\141\x76\137\155\x65\x6e\165\x5f\x69\164\145\x6d"]) && !in_array($post->post_status, ["\x64\x72\x61\146\x74", "\141\165\x74\x6f\x2d\144\x72\141\146\x74"]))) { goto aaiymmkqmocgakei; } if (!ManipulatePost::qeosassuekcieuuy($useksmwkuswkwcqg)) { goto acisycocoswkekik; } $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); $swaukaagekiououo = false; if ("\x77\x70\x6d\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\157\x6f\x63\x6f\x6d\155\145\162\x63\x65\x2d\x6d\x75\154\164\x69\154\151\x6e\147\x75\x61\x6c\x2f\x77\160\155\154\x2d\167\157\157\143\157\x6d\x6d\145\x72\x63\145\56\160\150\160")) { goto gemwkqocygssmequ; } if (!("\160\x6f\x6c\x79\x6c\x61\x6e\x67" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\x5f\147\145\164\137\160\x6f\163\164\x5f\x6c\141\x6e\147\165\141\x67\145"))) { goto egmocemomockemia; } $swaukaagekiououo = pll_get_post_language($yekqqesogweecqyc); egmocemomockemia: goto cqaeiesyciakcagu; gemwkqocygssmequ: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($yekqqesogweecqyc, "\x70\157\163\x74\x5f" . $useksmwkuswkwcqg); cqaeiesyciakcagu: $owwcaiyoucwcwmmq = $this->skomiaywsggiyamc($yekqqesogweecqyc, $post); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\x5f\x62\145\x66\x6f\x72\145\x5f\143\154\x65\141\x6e\x5f\160\x6f\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\x70\x6f\x73\164\137\160\x75\x72\x67\145\x5f\x75\x72\154\163"), $owwcaiyoucwcwmmq, $post); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->uqigacqieikayuac(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x70\164\137\x61\146\164\145\x72\137\x63\154\145\141\156\137\160\157\x73\x74"), $post, $owwcaiyoucwcwmmq, $swaukaagekiououo); acisycocoswkekik: aaiymmkqmocgakei: kucqcqeesaiacekm: cewyaqiqmmwmauce: } public function wckuqskowgoaoqom($auwuoyyagaiegwae) { $auwuoyyagaiegwae = array_filter((array) $auwuoyyagaiegwae); if (!$auwuoyyagaiegwae) { goto ksqgwiceoomkuuiy; } $oegoegssokkyiqam = $this->iwqysmawycmsmces(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\142\x65\x66\157\162\145\x5f\x63\x6c\145\x61\x6e\x5f\146\151\154\x65\163"), $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x62\x65\146\157\x72\x65\x5f\x63\154\x65\x61\156\137\x66\151\154\145"), $eeamcawaiqocomwy); $msimssikcguyqcac = ManipulateFormat::kcwgwosqkkkkmuks($eeamcawaiqocomwy); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { foreach ($this->gqguucgwsqasamke($msimssikcguyqcac["\x68\x6f\x73\164"], $mkomwsiykqigmqca) as $miawkwqioaeasiig) { $uwsgakoiqomwikmy = $miawkwqioaeasiig . $msimssikcguyqcac["\x70\141\x74\x68"]; if (!$iiaumsgauuyeqksw->exists($uwsgakoiqomwikmy)) { goto qscqkykqskqmisgw; } $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); qscqkykqskqmisgw: qgqasacusgwmoegy: } eokcuuwqaomkooag: sccqekuwywiisami: } ciwggusyecgskagy: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\x61\x66\164\x65\162\137\143\154\145\x61\x6e\137\x66\x69\x6c\145"), $eeamcawaiqocomwy); ycweseaccsomkioa: } scyqmcegwikkoesw: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x61\x66\164\145\162\x5f\143\x6c\145\141\156\137\x66\151\154\x65\163"), $auwuoyyagaiegwae); ksqgwiceoomkuuiy: } public function ciyymuaoqiqmucei($swaukaagekiououo = '') { $mgoiyiawsmmgasic = ManipulateFormat::kcwgwosqkkkkmuks(ManipulateI18N::csacaukgwwayassy($swaukaagekiououo)); $oegoegssokkyiqam = $this->iwqysmawycmsmces(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $couygeouymagssgw = $mkomwsiykqigmqca . $mgoiyiawsmmgasic["\150\x6f\163\164"] . "\x2a" . untrailingslashit($mgoiyiawsmmgasic["\160\x61\164\x68"]); $couygeouymagssgw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x63\x6c\145\141\156\x5f\x68\157\155\145\137\162\157\x6f\164"), $couygeouymagssgw, $mgoiyiawsmmgasic["\150\157\x73\164"], $mgoiyiawsmmgasic["\160\x61\x74\x68"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\160\164\137\142\x65\146\x6f\162\x65\137\143\x6c\x65\x61\156\x5f\x68\x6f\x6d\x65"), $couygeouymagssgw, $swaukaagekiououo); $ucasskoyoewwmmii = glob($couygeouymagssgw . "\x2f\x7b\151\x6e\x64\x65\170\x2c\151\x6e\x64\x65\170\x2d\52\175\x2e\173\150\164\x6d\x6c\x2c\x68\164\x6d\154\x5f\147\x7a\151\160\x7d", GLOB_BRACE | GLOB_NOSORT); if (!$ucasskoyoewwmmii) { goto uwsmcsiiisuocgwg; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { $this->kcciqwskewsuaemk()->remove($qogsmwakwacwqogk); swmgucaogosuueug: } yomoeykcqyukscmi: uwsmcsiiisuocgwg: global $wp_rewrite; $qmwoqyacswkwkiog = glob($couygeouymagssgw . "\x2a\x2f" . $wp_rewrite->pagination_base, GLOB_NOSORT); if (!$qmwoqyacswkwkiog) { goto uekkkmwciocmosgg; } foreach ($qmwoqyacswkwkiog as $miawkwqioaeasiig) { ManipulateFile::cseoaieqoukqgcay($miawkwqioaeasiig); wsqoskqgyooqeyga: } suaymckwwgmugsaa: uekkkmwciocmosgg: $lgqgmusqcgekwgui = glob($couygeouymagssgw . "\x2f\56\155\157\142\x69\154\x65\x2d\x61\143\x74\x69\x76\145", GLOB_BRACE | GLOB_NOSORT); if (!$lgqgmusqcgekwgui) { goto wmcaecgwmmwuuqsq; } foreach ($lgqgmusqcgekwgui as $eagqciqqakiuokus) { $this->kcciqwskewsuaemk()->remove($eagqciqqakiuokus); igscwycsqsckmcuq: } ecqeqquikuomwgsu: wmcaecgwmmwuuqsq: $okyqgikguumqkcas = glob($couygeouymagssgw . "\57\56\156\x6f\x2d\x77\145\142\x70", GLOB_BRACE | GLOB_NOSORT); if (!$okyqgikguumqkcas) { goto iuieskocqoqkkwus; } foreach ($okyqgikguumqkcas as $kaggcuumyeuscqui) { $this->kcciqwskewsuaemk()->remove($kaggcuumyeuscqui); syeeegeygawwqiuu: } ycskuioouwwemgke: iuieskocqoqkkwus: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\x5f\141\146\x74\x65\x72\137\x63\154\145\141\156\137\x68\157\x6d\x65"), $couygeouymagssgw, $swaukaagekiououo); ysssquieawyysiyc: } gkoiyaagwgycysim: } public function uqigacqieikayuac() { $auwuoyyagaiegwae = []; $auwuoyyagaiegwae[] = get_feed_link(); $auwuoyyagaiegwae[] = get_feed_link("\143\x6f\x6d\155\145\156\164\163\137"); $auwuoyyagaiegwae = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x63\154\x65\x61\156\137\x68\x6f\x6d\145\x5f\x66\x65\145\144\163"), $auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\x62\145\146\x6f\162\x65\137\x63\154\x65\141\156\137\x68\x6f\x6d\x65\x5f\x66\x65\145\x64\163"), $auwuoyyagaiegwae); self::wckuqskowgoaoqom($auwuoyyagaiegwae); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\141\146\x74\145\162\137\143\x6c\x65\141\x6e\137\x68\x6f\x6d\x65\137\x66\145\145\x64\163"), $auwuoyyagaiegwae); } public function suiuswewcumcyqms($mceokigoiqekskwe, $uemuuqsgymiqyuuu) { $owwcaiyoucwcwmmq = []; $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa("\151\144", $mceokigoiqekskwe, $uemuuqsgymiqyuuu); $eokyomeiuimoaiac = ManipulateI18N::umuecysoywoumgwo(); if ("\x77\160\155\154" === $eokyomeiuimoaiac && !ManipulatePlugin::ggocakcisguuokai("\x77\157\157\x63\x6f\x6d\155\x65\162\143\x65\55\155\165\154\164\151\154\x69\x6e\x67\x75\141\154\57\167\160\x6d\154\x2d\167\157\157\x63\157\155\155\145\162\x63\145\x2e\160\x68\160")) { goto caoikoqmyeqsqqqe; } if ("\x70\157\154\x79\x6c\x61\156\x67" === $eokyomeiuimoaiac && function_exists("\160\154\x6c\137\x67\x65\164\x5f\x74\145\x72\155\137\154\141\156\147\165\141\147\x65")) { goto isiqkeyciyqgkayu; } $swaukaagekiououo = false; goto gwayeyymscmgwqkg; isiqkeyciyqgkayu: $swaukaagekiououo = pll_get_term_language($mceokigoiqekskwe); gwayeyymscmgwqkg: goto moimkkmkooeiyisc; caoikoqmyeqsqqqe: global $sitepress; $swaukaagekiououo = $sitepress->get_language_for_element($mceokigoiqekskwe, "\164\x61\x78\137" . $uemuuqsgymiqyuuu); moimkkmkooeiyisc: $migiiksoiymissge = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $uemuuqsgymiqyuuu); if (!("\57" !== ManipulateFormat::eyayuwiqsqsmkamc($migiiksoiymissge, PHP_URL_PATH))) { goto amoygaweoeymiuiy; } array_push($owwcaiyoucwcwmmq, $migiiksoiymissge); amoygaweoeymiuiy: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x70\164\137\142\x65\x66\x6f\162\x65\x5f\x63\154\x65\141\x6e\x5f\164\x65\162\x6d"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); $owwcaiyoucwcwmmq = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\x5f\x74\145\162\155\x5f\x70\x75\162\x67\145\137\165\x72\x6c\163"), $owwcaiyoucwcwmmq, $iwewcwusemqaiggk); $this->wckuqskowgoaoqom($owwcaiyoucwcwmmq); $this->ciyymuaoqiqmucei($swaukaagekiououo); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\x61\x66\x74\145\162\x5f\x63\x6c\145\x61\156\x5f\x74\x65\162\x6d"), $iwewcwusemqaiggk, $owwcaiyoucwcwmmq, $swaukaagekiououo); } }
