<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642bcfa634da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Cleanup; use DOMElement; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Setting; class Image extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\150\x65\141\144", [$this, "\x6b\x63\157\x6b\155\163\x6d\153\165\153\x6b\x71\151\155\x69\x71"])->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\x68\145\141\x64", [$this, "\x6b\143\157\153\155\163\x6d\153\165\x6b\x6b\x71\x69\155\151\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\137\142\165\x66\x66\145\162\x5f\160\x72\157\x63\x65\x73\163"), [$this, "\x79\167\155\x6b\x6b\x69\x6f\x6f\141\155\x75\x69\x77\x67\x6f\x69"]); } public function kcokmsmkukkqimiq() { if (!(!DecoratorOption::get("\163\151\164\x65\x5f\x69\143\x6f\x6e", false) && $this->weysguygiseoukqw(Setting::qoyskaoaaakosmaq))) { goto mcqucouuiuoagqwc; } ManipulateHTML::awwqwouuoioauoaw("\154\x69\x6e\x6b", ["\x68\x72\x65\146" => "\144\141\x74\x61\x3a\151\155\x61\147\x65\57\170\55\x69\x63\157\156\x3b\142\x61\163\145\66\x34\54\151\x56\x42\117\x52\x77\60\x4b\107\147\157\x41\x41\101\x41\116\x53\125\x68\x45\x55\147\x41\101\101\102\101\101\101\101\x41\121\x45\101\131\101\x41\101\x42\120\131\171\115\151\x41\x41\x41\x41\102\155\112\114\122\60\x54\57\x2f\57\57\57\57\57\x38\x4a\x57\120\x66\143\x41\101\101\x41\103\130\x42\111\127\130\x4d\x41\x41\101\x42\111\101\101\x41\x41\123\x41\x42\x47\x79\x57\163\53\x41\101\101\x41\x46\x30\154\x45\121\x56\122\111\170\62\116\147\x47\x41\x57\152\x59\102\x53\x4d\x67\x6c\105\167\103\153\142\x42\x53\101\143\x41\x43\102\101\101\101\x65\x61\122\x39\x63\111\101\101\x41\x41\101\123\x55\x56\117\122\113\65\103\x59\111\x49\75", "\x72\145\154" => "\x69\x63\157\156", "\x74\171\x70\145" => "\151\155\141\147\x65\x2f\x78\55\x69\143\157\156"]); mcqucouuiuoagqwc: } public function ywmkkiooamuiwgoi(?string $moooemyaqewumiay) : ?string { if (!$this->weysguygiseoukqw(Setting::yaggsqosuggmgykq)) { goto iuwkiyimqmgguose; } $yuumukkaswwoywya = "\151\x6d\x67\72\156\x6f\x74\50\133\167\151\x64\x74\150\135\x29\72\156\x6f\x74\x28\133\x68\x65\151\147\x68\x74\x5d\51"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ayceeyuocgowqwsa; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik, $kasgukgceywckyou) { if (!(!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\164\x61\x2d\154\x61\x7a\171\x2d\x6f\x72\x69\x67\x69\x6e\141\x6c") && !DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\x74\x61\55\x6e\157\55\151\155\141\147\145\55\x64\151\x6d\x65\x6e\x73\151\157\x6e\163"))) { goto sksgcusuyqcwqswe; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\162\x63"); $yiasugywggckywoa = wp_parse_url($egsumesakcaaukem); try { if (!$this->aoaeiwswyagmesku($egsumesakcaaukem)) { goto oeamoqweiueaueay; } if (!(ini_get("\141\x6c\x6c\157\x77\x5f\165\162\154\137\146\x6f\x70\x65\x6e") && $this->weysguygiseoukqw(Setting::ookqmecseqmewmeo))) { goto icumkkykaoqycqqu; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\x68\145\x6d\x65"] . "\x3a\57\x2f" . $yiasugywggckywoa["\150\x6f\163\x74"] . $yiasugywggckywoa["\x70\141\x74\150"]); icumkkykaoqycqqu: goto owgsameoayaogsma; oeamoqweiueaueay: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa["\x70\x61\x74\x68"]; if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto eweaaismksecwagy; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); eweaaismksecwagy: owgsameoayaogsma: } catch (Exception $wgaoewqkwgomoaai) { } $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto esagiiawomyacuiw; } if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\x74\171\154\x65")) { goto aoaqwygkaagiuuws; } $kswaimykcacqyaay = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\x79\x6c\145"); if (!preg_match_all("\57\x28\167\151\x64\164\150\51\72\x5c\x73\52\x28\x5c\x64\53\x29\160\170\73\174\50\150\145\151\147\x68\x74\x29\x3a\x5c\163\52\50\x5c\144\53\51\x70\170\x3b\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto gqimwsyemoewagcy; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = ManipulateArray::get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = ManipulateArray::get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; awgmegueeqeyqamu: } kyiwsiakwgiwouyi: $qeswwaqqsyymqawg = ManipulateArray::get($meyiiwcswqmuggyg, self::qomookamaskuoswk, 0); $cswemwoyesycwkuq = ManipulateArray::get($meyiiwcswqmuggyg, self::sogmkkcwuamuqegw, 0); gqimwsyemoewagcy: aoaqwygkaagiuuws: goto maaisuqwkymeguys; esagiiawomyacuiw: $qeswwaqqsyymqawg = ManipulateArray::get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = ManipulateArray::get($wyicceigkekkkwgs, 1); maaisuqwkymeguys: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto qkyciyiwkmgkmquk; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::qomookamaskuoswk, $qeswwaqqsyymqawg); DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, self::sogmkkcwuamuqegw, $cswemwoyesycwkuq); qkyciyiwkmgkmquk: sksgcusuyqcwqswe: return $ymyisaeksssueeik; }, false, true); ayceeyuocgowqwsa: iuwkiyimqmgguose: return $moooemyaqewumiay; } }
