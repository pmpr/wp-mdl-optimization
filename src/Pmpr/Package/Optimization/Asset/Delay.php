<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use DOMElement; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Delay extends Common { protected array $priorities = []; public function uqaauswqgcmuosqe() : array { return $this->priorities; } public function yywskysiycwkwsgw($eueuqacmukymcyya) { return ManipulateArray::get($this->uqaauswqgcmuosqe(), $eueuqacmukymcyya); } public function kskcemmeowmwkoqa($eueuqacmukymcyya, $sqqewmoeaekuyyas) : self { $this->priorities[$eueuqacmukymcyya] = $sqqewmoeaekuyyas; return $this; } public function wigskegsqequoeks() { goto ogciikaecauiwgyk; meiqywmwuoogckss: $cyoauokciycesgqw = $this->weysguygiseoukqw(Setting::DELAY_LOAD_JAVASCRIPT); goto oyeygeykqwcqoeic; isaacywgkascmcsw: okawiaowosqickgq: goto quiguyyimiqeqcwa; eomcuogskessyicy: $this->qcsmikeggeemccuu("\167\160", [$this, "\x65\x6e\161\x75\x65\x75\x65"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\x5f\142\x75\146\x66\x65\162\137\160\162\x6f\143\145\x73\163"), [$this, "\167\x69\x71\x67\153\143\155\x71\x6b\167\157\165\x69\167\155\165"], 1, 40); goto isaacywgkascmcsw; quiguyyimiqeqcwa: parent::wigskegsqequoeks(); goto iicaisyekagswmey; oyeygeykqwcqoeic: if (!($cyoauokciycesgqw || $cwowmoyqeosugowu)) { goto okawiaowosqickgq; } goto eomcuogskessyicy; ogciikaecauiwgyk: $cwowmoyqeosugowu = $this->weysguygiseoukqw(Setting::DELAY_LOAD_STYLE); goto meiqywmwuoogckss; iicaisyekagswmey: } public function enqueue() { goto sosqgaswegsomgkw; sosqgaswegsomgkw: if (!$this->ocysssyiuaueqiei("\x6c\145\x76\145\154\x2d\62")) { goto ogwwasqkaageiwwi; } goto eiegguecasykwmyq; iaywwgssaoecwmeg: ogwwasqkaageiwwi: goto maeueeueqoywkiom; eiegguecasykwmyq: $eygsasmqycagyayw = $this->miocmcoykayoyyau(); goto qiiqceousoicgeee; qiiqceousoicgeee: $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x64\145\x6c\x61\x79\55\141\163\x73\145\164")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x64\145\154\141\171\x2d\x61\163\163\145\164\x2e\x6a\x73"))); goto iaywwgssaoecwmeg; maeueeueqoywkiom: } public function wiqgkcmqkwouiwmu($moooemyaqewumiay) { goto iumgcesksuawyuyo; qwosyqcomiosguoa: $sqqewmoeaekuyyas = 0; goto qaqooueskgciuqgc; ioiwoukauoeamuca: yagscaikmmuagqcu: goto oqckuigyqswmqcqg; iumgcesksuawyuyo: if (!($this->ocysssyiuaueqiei("\154\x65\x76\x65\154\x2d\62") && !$this->eeegakaauwcyugqy())) { goto iyawqekeeawqkymm; } goto qwosyqcomiosguoa; owismwmeqcmukagu: return $moooemyaqewumiay; goto oiywguooqeasueqq; iuwccksomkkouogy: if (!DOMCrawler::umuecysoywoumgwo($moooemyaqewumiay, $yuumukkaswwoywya)) { goto yagscaikmmuagqcu; } goto cceggewquoaemcwq; omyquyiguuaociwq: if (!$this->sscegwueamckwmcy("\x6f\x70\164\151\x6d\x69\x7a\141\164\x69\157\x6e\137\144\x65\x6c\141\x79\x5f\141\154\154\x6f\167\x5f\154\141\x7a\x79\154\x6f\x61\x64\137\x73\164\171\x6c\145\x73", false, $moooemyaqewumiay)) { goto jyekikocgagcgywq; } goto aqwoykqaquewcaki; qaqooueskgciuqgc: $yuumukkaswwoywya = "\x73\x63\162\151\160\164\133\x73\162\143\135"; goto omyquyiguuaociwq; mesesokuoomcioom: jyekikocgagcgywq: goto iuwccksomkkouogy; cceggewquoaemcwq: $moooemyaqewumiay = DOMCrawler::qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use(&$sqqewmoeaekuyyas) { goto oeogyayooiwqcmia; oeogyayooiwqcmia: $wisgiwskwawciiee = $ymyisaeksssueeik->nodeName == "\x6c\151\156\153" ? "\150\x72\x65\146" : "\163\162\143"; goto uowiiyqmiaaaaoas; kusuakkwcuqkcqaw: $ymyisaeksssueeik->ogaeogwycyqqckeu($wisgiwskwawciiee); goto sikckcmeiwmyakeu; sikckcmeiwmyakeu: $sqqewmoeaekuyyas++; goto qaycycmeqkqcumog; uowiiyqmiaaaaoas: if (!$ymyisaeksssueeik->seeegkogcamaigga($wisgiwskwawciiee)) { goto qoiyiuoyamwimusy; } goto vokekoceocuskqsm; vokekoceocuskqsm: $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee); goto ooykyoowougqkaso; ooykyoowougqkaso: $ymyisaeksssueeik->cmgoqeksagmigwmg("\x64\x61\164\x61\x2d\x73\x6f\x75\x72\x63\x65", $this->ukacwyckseuqsqgc($eqgoocgaqwqcimie)); goto sckyiekoceuisqyq; qaycycmeqkqcumog: qoiyiuoyamwimusy: goto ikuwigsmisimaqoc; sckyiekoceuisqyq: $ymyisaeksssueeik->cmgoqeksagmigwmg("\x64\x61\164\141\55\160\x72\x69\x6f\x72\x69\164\171", $sqqewmoeaekuyyas); goto kusuakkwcuqkcqaw; ikuwigsmisimaqoc: return $ymyisaeksssueeik; goto sigukociqouigous; sigukociqouigous: }, false, true); goto ioiwoukauoeamuca; oqckuigyqswmqcqg: iyawqekeeawqkymm: goto owismwmeqcmukagu; aqwoykqaquewcaki: $yuumukkaswwoywya .= "\x2c\40\154\x69\x6e\153\133\150\x72\145\146\135\x5b\162\145\x6c\75\163\164\171\154\145\163\x68\145\x65\164\135"; goto mesesokuoomcioom; oiywguooqeasueqq: } }