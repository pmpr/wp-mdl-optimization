<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642bcfa634da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Media; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Asset\Setting; class LazyLoad extends Common { const uoogwumawwsywcaq = ["\x73\x72\143" => "\x64\141\x74\141\55\163\x72\x63", "\163\x69\x7a\145\163" => "\x64\x61\x74\141\55\x73\151\x7a\145\163", "\163\x72\x63\x73\x65\x74" => "\x64\x61\x74\x61\x2d\163\162\143\163\x65\x74", "\160\157\163\x74\145\x72" => "\144\141\x74\x61\x2d\x70\157\163\164\x65\x72"]; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\x65\156\x71\x75\x65\x75\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\160\x5f\154\141\x7a\171\137\154\x6f\x61\x64\x69\x6e\147\x5f\x65\156\141\142\154\x65\x64", "\137\137\162\x65\164\165\x72\x6e\x5f\x66\141\x6c\163\x65")->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x62\165\146\146\x65\162\137\x70\x72\157\x63\145\x73\163"), [$this, "\141\x6d\x6b\x77\x67\153\155\x79\x67\x6b\x67\155\141\x71\163\147"], 15)->cecaguuoecmccuse("\x77\160\137\x67\x65\164\137\x61\164\x74\x61\x63\150\x6d\x65\x6e\x74\x5f\151\x6d\x61\x67\x65\137\x61\164\x74\x72\x69\142\165\x74\145\x73", [$this, "\x6f\167\171\147\x71\145\141\x77\143\165\167\141\147\x6b\x67\147"], 999, 3); } public function owygqeawcuwagkgg($wwgucssaecqekuek, $aiooqyausygaasqm, $oiegiwogmwmawkeo) { if (!is_array($wwgucssaecqekuek)) { goto qoqskyuuwueqkquk; } ManipulateArray::unset($wwgucssaecqekuek, "\154\157\x61\144\x69\x6e\147"); if (is_string($oiegiwogmwmawkeo)) { goto wagqgeqymeqoeuyi; } $oiegiwogmwmawkeo = implode("\55", (array) $oiegiwogmwmawkeo); wagqgeqymeqoeuyi: $cwgqkcumeaswoscu = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm); $wwgucssaecqekuek["\144\x61\164\141\55\x75\156\151\x71"] = "{$cwgqkcumeaswoscu}\55{$oiegiwogmwmawkeo}"; qoqskyuuwueqkquk: return $wwgucssaecqekuek; } public function enqueue() { if (!$this->gaogimymcgsiqois()) { goto iwsuawwqomaowuii; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x6d\x65\144\151\x61\55\x6c\141\x7a\171\154\157\x61\x64")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\141\x7a\x79\154\x6f\x61\x64\x2e\x6a\163")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\x6d\145\144\x69\x61\x2d\x6c\141\x7a\171\154\157\x61\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\x61\x7a\171\154\157\x61\144\56\x63\x73\163"))); iwsuawwqomaowuii: } public function gaogimymcgsiqois() : bool { return (bool) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\x6c\x61\x7a\x79\x5f\154\157\141\x64\x5f\143\x61\156\137\160\x72\x6f\x63\145\x73\x73"), true); } public function amkwgkmygkgmaqsg($moooemyaqewumiay) { if (!($moooemyaqewumiay && $this->gaogimymcgsiqois() && $this->ocysssyiuaueqiei())) { goto ciykoyeioqgyaeqo; } if (!$this->weysguygiseoukqw(Setting::uwgswmisuuigoucw)) { goto wcugqegqsuuuwqao; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); wcugqegqsuuuwqao: if (!$this->weysguygiseoukqw(Setting::gowiqmkskqiqsgsc)) { goto asiqwuoswmigcaki; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); asiqwuoswmigcaki: ciykoyeioqgyaeqo: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\155\x67\x2c\40\x70\151\x63\x74\x75\x72\x65\x20\x3e\x20\x73\x6f\x75\162\x63\145"); } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\x5b\163\164\x79\154\x65\x5d"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto qgeugwymkkiacwoc; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) { $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\154\x65"); if (!$eqgoocgaqwqcimie) { goto mqicocmqegwukkwg; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\164\x61\55\x73\x74\171\154\145", $eqgoocgaqwqcimie); mqicocmqegwukkwg: DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, "\x73\164\x79\x6c\145"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); qgeugwymkkiacwoc: return $moooemyaqewumiay; } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\x69\146\x72\x61\155\x65\54\x20\166\x69\144\x65\x6f"); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\144\x69\x76\133\x73\164\x79\x6c\145\x5d\x2c\x20\146\151\147\165\162\x65\x5b\x73\164\171\154\x65\135\x2c\40\163\x65\143\x74\151\157\x6e\x5b\163\164\171\x6c\145\135\54\40\163\x70\141\156\133\x73\164\171\154\145\135\54\40\154\151\x5b\x73\164\x79\154\145\135"; if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto acsqgiuageaasiyy; } $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) { $kswaimykcacqyaay = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\x6c\x65"); if (!preg_match("\43\x62\141\143\153\x67\x72\157\x75\x6e\x64\50\x2d\151\155\141\x67\145\x29\x3f\134\x73\52\72\134\x73\52\x28\134\163\x2a\x75\162\154\x5c\x73\52\x5c\50\x28\77\74\x75\x72\x6c\76\133\x5e\x29\135\53\x29\134\51\51\134\163\x2a\73\77\x23\151\x73", $kswaimykcacqyaay, $meyiiwcswqmuggyg)) { goto mugqyyeayeyggqqk; } $eeamcawaiqocomwy = $meyiiwcswqmuggyg["\x75\x72\x6c"]; DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\x74\x61\55\142\x67", esc_attr(trim($eeamcawaiqocomwy, "\x27\x22\x20"))); if ($iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)) { goto emmsycooskoqmgeg; } $kswaimykcacqyaay = ManipulateString::wiecmkiugmyyqiqc($meyiiwcswqmuggyg[0], '', $kswaimykcacqyaay); goto ouamogymawucwswu; emmsycooskoqmgeg: $kswaimykcacqyaay = ManipulateString::wiecmkiugmyyqiqc($eeamcawaiqocomwy, $iwiewowoqmoekyqi, $kswaimykcacqyaay); ouamogymawucwswu: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\x73\164\x79\154\x65", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); mugqyyeayeyggqqk: return $ymyisaeksssueeik; }); acsqgiuageaasiyy: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $egkyssmuqcwaciya = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x63\154\141\x73\163"); $egkyssmuqcwaciya .= "\40\x6c\x61\x7a\171\x6c\x6f\x61\x64"; DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, "\143\x6c\141\163\163", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya) : string { if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto iwekmyyccgiyuecc; } $yemgmmgogcwccuky = ManipulateArray::get($this->cyoqmkeuiuaasqmo(), "\x6e\x6f\55\154\x61\x7a\171\154\x6f\141\144", []); $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($yemgmmgogcwccuky) { $ooqiacaskuuekygc = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\144\141\x74\x61\x2d\x75\156\151\161"); if (!(!$yemgmmgogcwccuky || !in_array($ooqiacaskuuekygc, $yemgmmgogcwccuky, true))) { goto ogsaaqsaogcqiouy; } foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!DOMCrawler::owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto ousiuuwgwkiyikyq; } $eqgoocgaqwqcimie = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto wyuemgggaqogsmsq; } DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); wyuemgggaqogsmsq: if ($msqkueqksqwmskak === "\163\x72\143") { goto miweggwqeiaeweia; } DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto kqqiegkuqagcqsya; miweggwqeiaeweia: $wwgucssaecqekuek = DOMCrawler::wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = DOMCrawler::guaqqcyuaeucmgoy($ymyisaeksssueeik, "\144\141\x74\141\x2d\x69\x64"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto guykyqecgswcsmws; } DOMCrawler::qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto kkumywowcoycymeo; guykyqecgswcsmws: DOMCrawler::cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); kkumywowcoycymeo: kqqiegkuqagcqsya: ousiuuwgwkiyikyq: samwkqgwouggsguc: } oomguqikqokqwgku: $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); ogsaaqsaogcqiouy: return $ymyisaeksssueeik; }, false, true); iwekmyyccgiyuecc: return $moooemyaqewumiay; } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) { $iwiewowoqmoekyqi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\x6d\x65\144\151\x61\x5f\154\x61\172\x79\x5f\154\x6f\141\144\x5f\160\154\141\143\x65\150\157\154\144\x65\x72"), '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto ikqqskkqqwmwssoo; } $iwiewowoqmoekyqi = "\x64\x61\164\141\x3a\151\155\x61\147\145\57\x70\x6e\147\x3b\x62\141\163\145\x36\x34\54\151\126\102\x4f\122\167\x30\113\107\x67\x6f\x41\101\x41\x41\116\123\x55\x68\x45\125\x67\x41\101\x41\x41\105\x41\101\101\x41\x42\103\x41\131\x41\x41\101\101\x66\106\143\x53\x4a\x41\101\x41\x41\x44\x55\x6c\x45\121\x56\122\x34\62\x6d\x4e\x6b\131\x50\150\146\x44\167\x41\103\150\x77\x47\101\66\60\145\x36\153\147\101\101\x41\x41\x42\x4a\x52\125\65\x45\x72\153\112\147\x67\x67\x3d\x3d"; ikqqskkqqwmwssoo: return $iwiewowoqmoekyqi; } }
