<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa7f9435286             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\LazyLoad; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; use Pmpr\Module\Optimization\PageManager\Model\Process; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Engine extends BufferEngine { use PageManagerEngineTrait; const uoogwumawwsywcaq = ["\x73\162\143" => "\144\x61\x74\141\x2d\163\x72\x63", "\x73\x69\172\145\x73" => "\x64\x61\164\x61\55\163\x69\172\145\163", "\x73\162\x63\163\x65\x74" => "\x64\141\x74\141\55\163\x72\x63\163\145\x74", "\160\157\x73\164\145\x72" => "\144\x61\164\x61\55\160\x6f\x73\x74\145\x72"]; public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\x65\x66\x6f\162\x65\x5f\x65\x6e\161\x75\x65\165\145\x5f\146\162\157\x6e\x74\x65\x6e\x64\x5f\x61\163\x73\x65\164\163", [$this, "\x65\156\x71\x75\145\x75\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\137\x6c\x61\x7a\171\x5f\154\x6f\141\x64\x69\156\147\x5f\145\156\141\142\x6c\x65\144", [$this, "\x6d\x67\153\145\161\x71\x6b\x6d\x73\161\x71\151\153\x73\171\x6f"], 10, 2); $this->miasamwyaiagioug([$this, "\x71\163\x75\163\165\145\x67\x67\157\153\x79\x61\x61\x65\x77\155"], 15); } public function enqueue() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto cqeoguiqiymkyweo; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\155\145\144\x69\141\x2d\x6c\x61\172\x79\x6c\x6f\141\x64")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\x61\172\171\154\157\x61\144\56\x6a\163")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\155\145\144\151\x61\x2d\x6c\141\172\171\154\x6f\x61\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\141\x7a\171\x6c\157\x61\x64\x2e\x63\x73\163"))); cqeoguiqiymkyweo: } public function qsusueggokyaaewm($moooemyaqewumiay) { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto ugikgkwuwmgymgus; } $kqywgoqsmuswammk = $this->weysguygiseoukqw(Setting::souisqooyuiygceo); if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::mkousmkiawwousws], true)) { goto omgcsmsikaggaooc; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); omgcsmsikaggaooc: if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::ykigkkwgecsygowo], true)) { goto wykuosegisygosiq; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); wykuosegisygosiq: ugikgkwuwmgymgus: return $moooemyaqewumiay; } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\x5b\x73\x74\x79\154\x65\x5d"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto omemqagskckoeoog; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!($eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\x6c\x65"))) { goto gsgyayuaekgyoumc; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\164\x61\55\x73\x74\x79\x6c\145", $eqgoocgaqwqcimie); gsgyayuaekgyoumc: $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\x73\164\171\x6c\x65"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); omemqagskckoeoog: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\155\x67\x3a\156\157\164\x28\x2e\144\x6f\156\164\x2d\154\141\172\x79\55\154\x6f\141\x64\51\x2c\x20\x70\151\x63\164\x75\162\x65\72\156\157\164\x28\56\144\x6f\x6e\164\55\x6c\141\172\171\x2d\154\x6f\141\144\x29\40\x3e\40\x73\x6f\x75\x72\143\145"); } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\x69\x66\162\x61\x6d\145\72\156\157\164\x28\56\x64\x6f\156\x74\55\154\141\172\171\55\x6c\x6f\x61\x64\x29\54\40\x76\x69\144\145\157\x3a\x6e\157\164\x28\x2e\144\x6f\156\164\55\x6c\141\172\171\x2d\154\157\x61\144\x29", Constants::ykigkkwgecsygowo); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\144\151\166\133\163\x74\x79\154\145\135\x2c\x66\151\147\x75\162\x65\133\x73\x74\171\154\x65\x5d\54\x73\x65\x63\x74\151\157\156\133\x73\x74\x79\x6c\145\135\54\x73\160\141\156\x5b\x73\x74\x79\x6c\x65\135\54\154\x69\133\163\164\171\154\x65\135"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto wyqmeyoaggwuioak; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $samwssuokaguuqcs) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\171\154\145"); if (!(($eeamcawaiqocomwy = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->eqggmuyywiawyigi($kswaimykcacqyaay)) && !$this->ogomcyeyumwiqekm($eeamcawaiqocomwy, $samwssuokaguuqcs))) { goto aeuosggumiiwoesm; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\144\141\164\x61\55\x62\147", $eeamcawaiqocomwy); $kswaimykcacqyaay = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($eeamcawaiqocomwy, "\42{$this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)}\42", $kswaimykcacqyaay); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\163\x74\x79\154\145", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); aeuosggumiiwoesm: return $ymyisaeksssueeik; }); wyqmeyoaggwuioak: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $egkyssmuqcwaciya = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x63\x6c\141\163\x73"); $egkyssmuqcwaciya .= "\x20\154\x61\172\171\154\157\141\144"; $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x63\154\x61\163\x73", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function meqmqgiwykuymcki() : array { $ogomymegcoacqisg = []; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if (!$this->weysguygiseoukqw(Setting::wsksomawosgqayso)) { goto aiqekkyauwswayyq; } $cquauiyyegoequum = $goqqimcssiyagkwy->mmosakwauqogckem(Process::ikkumeueakggamkk); if (!$cquauiyyegoequum) { goto syykqmkiyoekqsek; } foreach ($cquauiyyegoequum as $kiyaycgqkoueoscs) { $ogomymegcoacqisg[$kiyaycgqkoueoscs] = Constants::ymugckeogmscmacc; sqmqwqeoygcmqcim: } uyksacasqywyessc: syykqmkiyoekqsek: aiqekkyauwswayyq: $yiiskoaqwycgymko = $goqqimcssiyagkwy->mmosakwauqogckem(Process::aseoemqucqqamsky); if (!($yiiskoaqwycgymko && isset($yiiskoaqwycgymko["\x73\162\x63"]))) { goto mmcikqikqecaeswu; } $ogomymegcoacqisg[$yiiskoaqwycgymko["\x73\x72\x63"]] = Constants::sgiwkasmqqockceq; mmcikqikqecaeswu: return $ogomymegcoacqisg; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya, string $ccamueccusigaaio = Constants::mkousmkiawwousws) : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto qmegcmqemmywoqas; } $samwssuokaguuqcs = $ycqyusukiuikceae = []; if (!($ccamueccusigaaio === Constants::mkousmkiawwousws)) { goto ywsywoumuaykkeaa; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $ycqyusukiuikceae = $this->meqmqgiwykuymcki(); ywsywoumuaykkeaa: $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $ycqyusukiuikceae, $samwssuokaguuqcs) { if (!$samwssuokaguuqcs) { goto wiiqigwgyuiuksia; } $ogomymegcoacqisg = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\x63"); if (!$this->aosmowmawkceeses($ogomymegcoacqisg, $samwssuokaguuqcs)) { goto yaumwqeommqigswq; } if (!isset($ycqyusukiuikceae[$ogomymegcoacqisg])) { goto wsqiqkiucakewgou; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\146\145\164\x63\150\160\162\151\x6f\162\x69\x74\171", $ycqyusukiuikceae[$ogomymegcoacqisg]); wsqiqkiucakewgou: return $ymyisaeksssueeik; yaumwqeommqigswq: wiiqigwgyuiuksia: foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto kwiuqqwamsimqgme; } $eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto aiukiwqmikscoswm; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); aiukiwqmikscoswm: if ($msqkueqksqwmskak === "\163\x72\143") { goto gskacikgkwcuauko; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto yyieomeeqycmikqw; gskacikgkwcuauko: $wwgucssaecqekuek = $smuykqsageuocuos->wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\x61\x74\141\55\x69\x64"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto mcmkqgkwyqoiikcq; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto ssyukuseoymackeo; mcmkqgkwyqoiikcq: $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); ssyukuseoymackeo: yyieomeeqycmikqw: kwiuqqwamsimqgme: agyycikucwgmysee: } mqoygcuqwacgycek: return $this->akqamsokouooqqgw($ymyisaeksssueeik); }, false); qmegcmqemmywoqas: return $moooemyaqewumiay; } public function mgkeqqkmsqqiksyo($eqgoocgaqwqcimie, $wkgkmowokewiiaoo) : ?bool { if (!($eqgoocgaqwqcimie === false || !$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei())) { goto giooasyeqwaaocea; } return $eqgoocgaqwqcimie; giooasyeqwaaocea: switch ($wkgkmowokewiiaoo) { case "\151\155\x67": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::mkousmkiawwousws); goto uueywyysiicuauem; case "\151\x66\x72\x61\x6d\x65": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::ykigkkwgecsygowo); goto uueywyysiicuauem; } seieguyaaiqismgo: uueywyysiicuauem: return $eqgoocgaqwqcimie; } public function yoqcwmkacmggcksg($kqywgoqsmuswammk) : bool { return in_array($this->weysguygiseoukqw(Setting::souisqooyuiygceo), [Constants::ALL, $kqywgoqsmuswammk], true); } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) : string { $iwiewowoqmoekyqi = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\x64\151\x61\x5f\154\141\172\x79\x5f\x6c\x6f\141\144\137\160\x6c\141\x63\x65\150\157\x6c\144\145\162", '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto qgyoesyiasqimcoe; } $qeswwaqqsyymqawg = absint($wwgucssaecqekuek[Constants::qomookamaskuoswk] ?? 0); $cswemwoyesycwkuq = absint($wwgucssaecqekuek[Constants::sogmkkcwuamuqegw] ?? 0); $iwiewowoqmoekyqi = (string) str_replace("\40", "\45\62\x30", "\144\141\164\x61\x3a\151\x6d\141\x67\145\57\x73\166\147\x2b\170\155\x6c\x2c\45\63\103\163\166\x67\40\170\155\154\x6e\163\75\x27\x68\x74\x74\160\x3a\x2f\x2f\x77\x77\x77\56\167\63\56\x6f\162\x67\x2f\x32\60\x30\x30\57\x73\x76\x67\x27\40\166\x69\145\x77\x42\x6f\170\x3d\x27\60\x20\60\40{$qeswwaqqsyymqawg}\x20{$cswemwoyesycwkuq}\47\x25\x33\x45\45\63\103\x2f\163\166\147\x25\63\105"); qgyoesyiasqimcoe: return $iwiewowoqmoekyqi; } public function aciqoewcqaqqqumc($siquossayskcwkea) : bool { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->asouumsaymkgawie($siquossayskcwkea); return $this->ogomcyeyumwiqekm($siquossayskcwkea, $this->siciigyskwogeucw()); } public function aosmowmawkceeses(string $ogomymegcoacqisg, array $aowmesqseaiqimyu = []) : bool { return $this->ogomcyeyumwiqekm($ogomymegcoacqisg, $aowmesqseaiqimyu); } public function ucoeomeeyokssocw(string $moooemyaqewumiay) { $aowmesqseaiqimyu = ["\57\167\160\143\x66\x37\137\x63\141\x70\x74\x63\x68\141\x2f", "\x74\151\x6d\x74\150\165\155\x62\x2e\160\150\160\x3f\x73\x72\143", "\x77\157\x6f\143\x6f\155\155\x65\162\143\145\x2f\141\x73\163\145\164\x73\57\x69\x6d\x61\147\x65\163\57\x70\154\141\x63\x65\x68\x6f\154\x64\x65\x72\56\x70\x6e\x67"]; $gyoeyakugsuggyoi = $this->meqmqgiwykuymcki(); if (!$gyoeyakugsuggyoi) { goto kkwqmewaksmokuqy; } $aowmesqseaiqimyu = array_merge($aowmesqseaiqimyu, array_keys($gyoeyakugsuggyoi)); kkwqmewaksmokuqy: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\144\x69\x61\137\154\141\172\x79\154\157\141\144\x5f\145\170\143\154\x75\144\x65\144\x5f\x73\x72\143", $aowmesqseaiqimyu, $moooemyaqewumiay); } public function siciigyskwogeucw() : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x6d\145\x64\151\x61\137\x6c\x61\x7a\171\154\x6f\141\144\x5f\x65\170\143\x6c\x75\x64\x65\144\x5f\x61\164\x74\162\151\x62\165\x74\145\163", ["\x64\x61\164\x61\x2d\163\162\143\75", "\144\x61\x74\141\55\x6e\x6f\x2d\x6c\x61\x7a\171\x3d", "\144\141\x74\141\x2d\154\141\172\x79\x2d\157\162\x69\147\151\x6e\141\x6c\75", "\144\x61\164\141\x2d\154\141\172\x79\x2d\x73\162\x63\75", "\144\x61\164\141\x2d\x6c\141\172\171\x73\162\x63\75", "\x64\141\x74\141\55\154\x61\x7a\x79\154\157\141\x64\x3d", "\x64\141\x74\141\x2d\x62\x67\x70\157\163\151\x74\x69\157\156\x3d", "\144\x61\x74\x61\x2d\145\x6e\166\x69\x72\x61\x2d\x73\x72\143\x3d", "\146\165\154\154\165\x72\154\x3d", "\154\141\172\x79\x2d\163\154\x69\x64\x65\x72\55\x69\155\x67\x3d", "\144\x61\x74\x61\x2d\x73\162\143\x73\145\164\x3d", "\x63\x6c\141\163\x73\x3d\42\x6c\163\55\154", "\143\154\141\x73\x73\x3d\x22\x6c\163\x2d\142\147", "\x73\157\x6c\151\154\157\x71\x75\171\x2d\151\155\x61\147\145", "\154\157\x61\144\x69\x6e\147\x3d\42\145\141\x67\145\162\x22", "\x73\167\x61\164\x63\x68\x2d\151\155\147", "\x64\x61\x74\x61\x2d\x68\x65\x69\x67\150\x74\55\x70\145\x72\x63\x65\156\x74\x61\x67\x65", "\144\x61\x74\x61\55\154\141\162\x67\x65\x5f\x69\x6d\x61\x67\145", "\x61\x76\151\x61\55\142\147\x2d\x73\164\171\154\x65\x2d\x66\151\x78\145\144", "\144\x61\x74\141\55\163\153\x69\x70\x2d\x6c\141\172\171", "\163\153\151\x70\x2d\154\x61\x7a\171", "\151\x6d\x61\147\x65\x2d\x63\x6f\x6d\160\141\162\145\x5f\x5f"]); } public function ogomcyeyumwiqekm(string $sociqikgoyemqaac, array $aowmesqseaiqimyu) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ogomcyeyumwiqekm($sociqikgoyemqaac, $aowmesqseaiqimyu); } }
