<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b865b46dbbe             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Cleanup; use DOMElement; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Setting; class Image extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\x5f\x68\x65\x61\x64", [$this, "\153\x63\x6f\153\x6d\163\155\x6b\x75\x6b\x6b\161\151\x6d\x69\161"])->qcsmikeggeemccuu("\x61\144\155\151\x6e\137\x68\x65\x61\144", [$this, "\153\x63\x6f\x6b\x6d\163\x6d\x6b\x75\153\153\x71\x69\155\151\161"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\x5f\x62\x75\x66\146\x65\x72\137\x70\x72\x6f\143\x65\163\163"), [$this, "\x79\x77\155\153\153\x69\157\157\141\155\165\151\167\147\x6f\151"]); parent::kgquecmsgcouyaya(); } public function kcokmsmkukkqimiq() { if (!(!DecoratorOption::get("\x73\151\164\x65\x5f\x69\x63\157\156", false) && $this->weysguygiseoukqw(Setting::ADD_BLANK_FAVICON))) { goto gsusqquicmukegcs; } ManipulateHTML::awwqwouuoioauoaw("\154\x69\156\153", ["\x68\x72\x65\146" => "\x64\x61\x74\x61\x3a\x69\155\141\x67\x65\x2f\x78\x2d\151\x63\x6f\x6e\73\142\x61\x73\145\x36\x34\54\151\126\102\117\122\167\x30\x4b\107\x67\157\101\x41\101\101\116\x53\125\150\105\125\147\x41\101\101\102\x41\x41\101\101\x41\121\105\101\x59\101\x41\101\102\120\131\171\x4d\151\101\x41\101\x41\102\x6d\112\x4c\122\60\x54\x2f\57\x2f\57\57\57\x2f\x38\112\x57\x50\146\x63\x41\101\x41\101\103\130\x42\x49\127\130\115\x41\101\x41\x42\x49\101\101\101\101\x53\101\x42\107\x79\x57\163\x2b\x41\101\x41\x41\x46\x30\154\x45\x51\126\x52\x49\x78\62\x4e\147\x47\x41\x57\152\x59\x42\x53\x4d\x67\154\x45\x77\103\153\x62\102\123\x41\143\x41\103\x42\x41\x41\x41\x65\141\122\x39\x63\111\101\101\101\101\101\123\x55\126\x4f\x52\x4b\x35\103\x59\x49\111\x3d", "\162\145\x6c" => "\151\143\x6f\156", "\164\171\x70\x65" => "\x69\x6d\141\x67\145\x2f\x78\x2d\151\143\x6f\x6e"]); gsusqquicmukegcs: } public function ywmkkiooamuiwgoi(?string $moooemyaqewumiay) : ?string { if (!$this->weysguygiseoukqw(Setting::SPECIFY_DIMENSIONS)) { goto yeiokcoikcysyimu; } $yuumukkaswwoywya = "\x69\155\147\72\x6e\x6f\x74\x28\x5b\167\x69\x64\x74\150\135\x29\72\156\157\x74\50\133\150\x65\x69\147\150\164\135\51"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto uqcwyyiykmwygeau; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik, $kasgukgceywckyou) { if (!(!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\164\141\x2d\x6c\x61\172\x79\x2d\x6f\x72\x69\147\151\x6e\141\154") && !DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\164\141\55\x6e\157\x2d\x69\155\x61\x67\145\x2d\x64\151\x6d\145\156\163\151\x6f\156\x73"))) { goto sagemooicmgceiug; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\162\x63"); $yiasugywggckywoa = wp_parse_url($egsumesakcaaukem); if (!$this->aoaeiwswyagmesku($egsumesakcaaukem)) { goto ceusyscosamyaiws; } if (!(ini_get("\141\x6c\154\157\167\137\165\162\154\x5f\146\157\x70\x65\x6e") && $this->weysguygiseoukqw(Setting::IMAGE_EXTERNAL_SPECIFY_DIMENSIONS))) { goto scgmwokeuqwiekkk; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\150\x65\155\x65"] . "\x3a\57\57" . $yiasugywggckywoa["\150\x6f\x73\164"] . $yiasugywggckywoa["\x70\141\164\150"]); scgmwokeuqwiekkk: goto gysmmooawoeggaow; ceusyscosamyaiws: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\160\x61\x74\150"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto wcsysckgigeykkwy; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); wcsysckgigeykkwy: gysmmooawoeggaow: $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto qcweoyigoaeacsow; } if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\163\x74\171\x6c\x65")) { goto wycmcqaauqkgegau; } $kswaimykcacqyaay = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\x79\x6c\x65"); if (!preg_match_all("\57\50\167\x69\144\164\150\x29\x3a\x5c\163\52\x28\134\144\53\51\160\170\x3b\x7c\50\x68\145\x69\147\x68\x74\51\72\134\163\52\x28\x5c\144\x2b\51\160\170\x3b\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto aqaaqeucgoegeeuk; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = ManipulateArray::get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = ManipulateArray::get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; acsigwcaesyyoiie: } iyikuwuweqigiuey: $qeswwaqqsyymqawg = ManipulateArray::get($meyiiwcswqmuggyg, "\x77\x69\144\164\150", 0); $cswemwoyesycwkuq = ManipulateArray::get($meyiiwcswqmuggyg, "\x68\x65\151\147\x68\x74", 0); aqaaqeucgoegeeuk: wycmcqaauqkgegau: goto iyceygqsmokgmams; qcweoyigoaeacsow: $qeswwaqqsyymqawg = ManipulateArray::get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = ManipulateArray::get($wyicceigkekkkwgs, 1); iyceygqsmokgmams: if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { goto wcekgciqeggiiwgk; } $this->oaumimwssciwumys("\143\x61\156\40\x6e\157\x74\40\146\x6f\x75\156\144\x20\167\x69\x64\164\x68\40\x61\x6e\144\x20\150\x65\x69\147\x68\x74\x20\164\x6f\40\x73\x70\x65\x63\x69\146\171\x20\x69\156\x20\x69\x6d\141\x67\x65\x2e"); goto gkwuewqmqeswqukg; wcekgciqeggiiwgk: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\167\x69\x64\x74\150", $qeswwaqqsyymqawg); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x68\x65\151\147\x68\164", $cswemwoyesycwkuq); gkwuewqmqeswqukg: sagemooicmgceiug: return $ymyisaeksssueeik; }, false, true); uqcwyyiykmwygeau: yeiokcoikcysyimu: return $moooemyaqewumiay; } }
