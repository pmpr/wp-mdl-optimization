<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f13791817e5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\LazyLoad; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; use Pmpr\Module\Optimization\PageManager\Model\Process; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Engine extends BufferEngine { use PageManagerEngineTrait; const uoogwumawwsywcaq = ["\x73\x72\143" => "\144\141\164\141\x2d\163\x72\x63", "\163\x69\172\145\x73" => "\144\x61\x74\141\55\x73\151\172\145\163", "\163\x72\143\x73\x65\164" => "\144\x61\x74\141\55\x73\162\x63\x73\145\164", "\160\157\163\164\145\x72" => "\x64\x61\164\x61\55\160\157\163\x74\x65\162"]; public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\145\146\x6f\162\145\137\145\x6e\x71\165\x65\x75\145\137\146\x72\x6f\156\164\x65\156\144\137\141\x73\x73\x65\164\163", [$this, "\x65\x6e\x71\165\145\x75\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\160\x5f\x6c\141\172\x79\137\x6c\x6f\141\144\x69\156\147\137\145\156\141\x62\154\x65\x64", [$this, "\x6d\x67\x6b\145\x71\x71\153\155\x73\x71\x71\x69\x6b\163\171\x6f"], 10, 2); $this->miasamwyaiagioug([$this, "\161\x73\x75\x73\x75\x65\x67\147\x6f\153\x79\x61\x61\145\167\155"], 15); } public function enqueue() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto cimascmiesomqgqs; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\155\145\144\151\141\55\x6c\141\x7a\x79\x6c\x6f\x61\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\141\172\171\x6c\x6f\141\x64\56\152\x73")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\155\x65\x64\151\x61\x2d\154\x61\x7a\171\x6c\x6f\141\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\x61\172\x79\154\x6f\141\144\x2e\x63\163\x73"))); cimascmiesomqgqs: } public function qsusueggokyaaewm($moooemyaqewumiay) { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto kuuawiosmkgqsscy; } $kqywgoqsmuswammk = $this->weysguygiseoukqw(Setting::souisqooyuiygceo); if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::mkousmkiawwousws], true)) { goto easuiqiooiwgswmm; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); easuiqiooiwgswmm: if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::ykigkkwgecsygowo], true)) { goto saiuoomgskwgyeya; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); saiuoomgskwgyeya: kuuawiosmkgqsscy: return $moooemyaqewumiay; } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\x5b\163\164\x79\154\145\x5d"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto momuweiasiwskekw; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!($eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\x79\x6c\x65"))) { goto kwocaqggwcksesce; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\141\x74\141\55\163\x74\x79\154\x65", $eqgoocgaqwqcimie); kwocaqggwcksesce: $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\x73\164\171\x6c\145"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); momuweiasiwskekw: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\155\147\x3a\156\157\x74\50\x2e\144\x6f\156\164\x2d\x6c\x61\x7a\171\x2d\154\157\141\144\x29\x2c\x20\160\151\x63\164\x75\x72\x65\x3a\x6e\x6f\x74\50\x2e\x64\x6f\x6e\x74\x2d\x6c\141\172\171\x2d\154\157\x61\x64\51\40\x3e\x20\x73\157\165\162\x63\145"); } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\146\x72\x61\155\145\72\x6e\157\164\x28\56\x64\157\x6e\x74\55\154\x61\172\171\55\x6c\x6f\141\x64\x29\x2c\40\x76\x69\x64\x65\157\72\156\x6f\164\x28\56\144\157\x6e\x74\x2d\154\x61\172\x79\55\x6c\x6f\141\x64\x29", Constants::ykigkkwgecsygowo); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\x64\151\166\133\163\164\x79\x6c\x65\x5d\x2c\146\x69\147\165\162\x65\x5b\x73\164\x79\154\145\x5d\x2c\163\145\143\164\x69\x6f\x6e\x5b\x73\x74\171\x6c\145\135\x2c\163\x70\141\156\133\x73\164\171\154\x65\135\x2c\154\151\x5b\163\x74\171\154\145\135"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto bgakaasgwwygosyi; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $samwssuokaguuqcs) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\164\171\x6c\145"); if (!(($eeamcawaiqocomwy = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->eqggmuyywiawyigi($kswaimykcacqyaay)) && !$this->ogomcyeyumwiqekm($eeamcawaiqocomwy, $samwssuokaguuqcs))) { goto qaewauyekqucciyc; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\141\164\141\x2d\x62\x67", $eeamcawaiqocomwy); $kswaimykcacqyaay = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($eeamcawaiqocomwy, "\42{$this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)}\42", $kswaimykcacqyaay); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\163\164\x79\x6c\145", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); qaewauyekqucciyc: return $ymyisaeksssueeik; }); bgakaasgwwygosyi: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $egkyssmuqcwaciya = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\143\x6c\141\163\x73"); $egkyssmuqcwaciya .= "\40\x6c\x61\x7a\171\x6c\157\x61\144"; $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x63\154\x61\x73\163", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function meqmqgiwykuymcki() : array { $ogomymegcoacqisg = []; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if (!$this->weysguygiseoukqw(Setting::wsksomawosgqayso)) { goto mcukocaaoyuugoeu; } $cquauiyyegoequum = $goqqimcssiyagkwy->mmosakwauqogckem(Process::ikkumeueakggamkk); if (!$cquauiyyegoequum) { goto iiiwsgameuomumgw; } foreach ($cquauiyyegoequum as $kiyaycgqkoueoscs) { $ogomymegcoacqisg[$kiyaycgqkoueoscs] = Constants::ymugckeogmscmacc; agyooskogigyayws: } aucwccaiqwsmyuaq: iiiwsgameuomumgw: mcukocaaoyuugoeu: $yiiskoaqwycgymko = $goqqimcssiyagkwy->mmosakwauqogckem(Process::aseoemqucqqamsky); if (!($yiiskoaqwycgymko && isset($yiiskoaqwycgymko["\163\162\143"]))) { goto scockmiqikwwkqse; } $ogomymegcoacqisg[$yiiskoaqwycgymko["\x73\162\143"]] = Constants::sgiwkasmqqockceq; scockmiqikwwkqse: return $ogomymegcoacqisg; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya, string $ccamueccusigaaio = Constants::mkousmkiawwousws) : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ugikgkwuwmgymgus; } $samwssuokaguuqcs = $ycqyusukiuikceae = []; if (!($ccamueccusigaaio === Constants::mkousmkiawwousws)) { goto okycquokqoamsquy; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $ycqyusukiuikceae = $this->meqmqgiwykuymcki(); okycquokqoamsquy: $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $ycqyusukiuikceae, $samwssuokaguuqcs) { if (!$samwssuokaguuqcs) { goto kssuqmsgmaaeqigw; } $ogomymegcoacqisg = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\162\143"); if (!$this->aosmowmawkceeses($ogomymegcoacqisg, $samwssuokaguuqcs)) { goto egwgyekaiqomyeaa; } if (!isset($ycqyusukiuikceae[$ogomymegcoacqisg])) { goto cgwokqwakqcmiieo; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x66\x65\x74\143\x68\x70\x72\151\x6f\x72\x69\x74\x79", $ycqyusukiuikceae[$ogomymegcoacqisg]); cgwokqwakqcmiieo: return $ymyisaeksssueeik; egwgyekaiqomyeaa: kssuqmsgmaaeqigw: foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto wykuosegisygosiq; } $eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto acaeigkmigikeuyu; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); acaeigkmigikeuyu: if ($msqkueqksqwmskak === "\163\x72\x63") { goto cqeoguiqiymkyweo; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto omgcsmsikaggaooc; cqeoguiqiymkyweo: $wwgucssaecqekuek = $smuykqsageuocuos->wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\144\141\x74\x61\x2d\151\144"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto kqyeukywmgismyaq; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto mukwsuuuqcgesmwc; kqyeukywmgismyaq: $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); mukwsuuuqcgesmwc: omgcsmsikaggaooc: wykuosegisygosiq: mciumqyyossyiuyk: } uwusswwekqcsisus: return $this->akqamsokouooqqgw($ymyisaeksssueeik); }, false); ugikgkwuwmgymgus: return $moooemyaqewumiay; } public function mgkeqqkmsqqiksyo($eqgoocgaqwqcimie, $wkgkmowokewiiaoo) : ?bool { if (!($eqgoocgaqwqcimie === false || !$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei())) { goto gsgyayuaekgyoumc; } return $eqgoocgaqwqcimie; gsgyayuaekgyoumc: switch ($wkgkmowokewiiaoo) { case "\151\155\147": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::mkousmkiawwousws); goto omemqagskckoeoog; case "\x69\x66\x72\141\155\145": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::ykigkkwgecsygowo); goto omemqagskckoeoog; } aeuosggumiiwoesm: omemqagskckoeoog: return $eqgoocgaqwqcimie; } public function yoqcwmkacmggcksg($kqywgoqsmuswammk) : bool { return in_array($this->weysguygiseoukqw(Setting::souisqooyuiygceo), [Constants::ALL, $kqywgoqsmuswammk], true); } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) : string { $iwiewowoqmoekyqi = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\x65\x64\151\x61\x5f\x6c\141\172\x79\x5f\154\x6f\141\144\x5f\160\x6c\x61\x63\145\150\157\x6c\x64\x65\x72", '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto wyqmeyoaggwuioak; } $qeswwaqqsyymqawg = absint($wwgucssaecqekuek[Constants::qomookamaskuoswk] ?? 0); $cswemwoyesycwkuq = absint($wwgucssaecqekuek[Constants::sogmkkcwuamuqegw] ?? 0); $iwiewowoqmoekyqi = (string) str_replace("\x20", "\45\x32\x30", "\144\x61\164\141\72\151\155\x61\147\x65\x2f\x73\x76\x67\53\170\x6d\154\x2c\x25\x33\x43\163\x76\147\40\x78\155\x6c\x6e\163\x3d\47\x68\164\164\x70\x3a\x2f\x2f\x77\x77\x77\56\x77\x33\x2e\x6f\x72\x67\57\62\60\x30\60\57\x73\166\147\47\x20\x76\151\x65\x77\x42\157\170\75\x27\x30\x20\60\40{$qeswwaqqsyymqawg}\x20{$cswemwoyesycwkuq}\47\x25\x33\x45\45\x33\103\57\x73\166\x67\45\63\x45"); wyqmeyoaggwuioak: return $iwiewowoqmoekyqi; } public function aciqoewcqaqqqumc($siquossayskcwkea) : bool { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->asouumsaymkgawie($siquossayskcwkea); return $this->ogomcyeyumwiqekm($siquossayskcwkea, $this->siciigyskwogeucw()); } public function aosmowmawkceeses(string $ogomymegcoacqisg, array $aowmesqseaiqimyu = []) : bool { return $this->ogomcyeyumwiqekm($ogomymegcoacqisg, $aowmesqseaiqimyu); } public function ucoeomeeyokssocw(string $moooemyaqewumiay) { $aowmesqseaiqimyu = ["\57\x77\x70\x63\x66\67\137\x63\x61\x70\x74\x63\x68\x61\x2f", "\164\x69\155\164\150\x75\x6d\142\56\160\150\x70\77\163\162\143", "\167\157\157\143\x6f\x6d\155\145\162\143\x65\57\141\x73\x73\145\x74\x73\x2f\151\x6d\141\147\x65\x73\x2f\x70\x6c\141\143\145\x68\x6f\154\144\x65\x72\56\x70\156\x67"]; $gyoeyakugsuggyoi = $this->meqmqgiwykuymcki(); if (!$gyoeyakugsuggyoi) { goto uyksacasqywyessc; } $aowmesqseaiqimyu = array_merge($aowmesqseaiqimyu, array_keys($gyoeyakugsuggyoi)); uyksacasqywyessc: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\x65\144\x69\141\x5f\x6c\x61\172\171\154\x6f\x61\x64\x5f\x65\170\143\x6c\165\144\145\x64\137\163\x72\x63", $aowmesqseaiqimyu, $moooemyaqewumiay); } public function siciigyskwogeucw() : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\144\x69\x61\x5f\154\x61\x7a\171\x6c\x6f\x61\x64\137\145\x78\x63\x6c\165\x64\145\x64\137\141\x74\x74\162\x69\x62\165\x74\145\163", ["\x64\141\164\x61\55\x73\162\143\75", "\144\141\164\141\x2d\156\x6f\x2d\154\141\x7a\171\x3d", "\144\141\x74\141\x2d\154\141\x7a\171\x2d\157\162\x69\x67\151\x6e\x61\x6c\75", "\x64\141\x74\x61\x2d\154\x61\172\x79\55\163\x72\143\75", "\144\x61\x74\x61\x2d\154\141\x7a\171\163\x72\143\x3d", "\x64\x61\x74\141\55\x6c\141\x7a\171\154\157\x61\144\75", "\144\141\164\x61\x2d\142\147\160\x6f\x73\x69\x74\x69\x6f\156\75", "\144\141\164\x61\x2d\145\x6e\166\151\x72\141\x2d\x73\x72\143\75", "\x66\165\x6c\154\x75\x72\x6c\75", "\154\x61\172\x79\55\x73\x6c\x69\x64\145\162\x2d\x69\155\x67\x3d", "\144\141\164\x61\x2d\x73\162\143\x73\x65\x74\75", "\143\154\x61\x73\x73\75\x22\x6c\163\55\154", "\x63\154\141\163\163\x3d\42\x6c\163\x2d\x62\147", "\163\x6f\x6c\x69\154\157\x71\x75\171\x2d\x69\x6d\x61\x67\145", "\154\157\x61\x64\x69\x6e\147\x3d\x22\145\x61\x67\x65\162\x22", "\163\167\x61\164\143\150\55\x69\155\147", "\x64\141\164\141\x2d\150\x65\151\x67\150\164\55\160\145\x72\143\145\x6e\x74\141\147\x65", "\144\141\x74\x61\55\x6c\141\x72\x67\145\137\x69\155\141\147\x65", "\x61\166\x69\141\x2d\142\147\55\x73\x74\171\x6c\x65\55\146\151\170\145\144", "\144\x61\x74\x61\55\x73\153\x69\160\x2d\154\x61\172\x79", "\163\x6b\x69\x70\x2d\x6c\141\x7a\171", "\x69\x6d\x61\x67\x65\x2d\x63\x6f\155\160\141\x72\x65\137\x5f"]); } public function ogomcyeyumwiqekm(string $sociqikgoyemqaac, array $aowmesqseaiqimyu) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ogomcyeyumwiqekm($sociqikgoyemqaac, $aowmesqseaiqimyu); } }
