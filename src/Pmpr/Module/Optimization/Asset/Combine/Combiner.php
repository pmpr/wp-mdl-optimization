<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bb6169562a0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto mqgeseysuwcaqwiy; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\163\x73" : "\x6a\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\x6d\x61\x6e\x69\x66\145\163\164\56\x6a\x73\x6f\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto eqiiaokcgakicaye; } $aoiemswgeosamowe = []; goto gcucsowqoeiwmyyq; eqiiaokcgakicaye: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); gcucsowqoeiwmyyq: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto yiceawuuiusakwiq; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\x6d\x61\151\x6e"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\157\155\x62\151\x6e\x65\x64"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\151\x6e\154\x69\156\x65"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto sgocecweikecwwgq; yiceawuuiusakwiq: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto ygcgoaokauigwuus; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto qyyyycwaookqaoke; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto ssywsaaqqaucesau; qyyyycwaookqaoke: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\x38\x62\151\x74"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto iymaiwqimisgacmk; } if (!$egsumesakcaaukem->extra) { goto qcssigmcayuyweiy; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\141\x66\164\x65\162", "\142\145\146\x6f\162\145"]))) { goto quamuugoocyyceec; } if (!is_array($eqgoocgaqwqcimie)) { goto wwcqoeuwskquakwy; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); wwcqoeuwskquakwy: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; quamuugoocyyceec: omuauimgkygcecsc: } oasggeyceiyieuuo: qcssigmcayuyweiy: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto mugscgugcogcasue; iymaiwqimisgacmk: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; mugscgugcogcasue: ssywsaaqqaucesau: ygcgoaokauigwuus: aumowowgewgqmwci: } kyiuewcikkqagwwg: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\x2f\163\x74\171\154\x65"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\55\x69\156\x6c\x69\156\145\x2e{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto ysiqakyaiooyscwy; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\141\x69\156"] = $umgkqiimgiyocmqy; ysiqakyaiooyscwy: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto auumaoycmsmsgigs; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\x6e\x6c\151\x6e\x65"] = $oqciymuueukmciea; auumaoycmsmsgigs: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto ousmyagwsiooumos; } $aoiemswgeosamowe[$eswwueuissckicww]["\x63\157\155\x62\x69\156\x65\144"] = $siwkgiismmgqgykc; ousmyagwsiooumos: if (!$aoiemswgeosamowe) { goto qeuyekusasqmcqms; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); qeuyekusasqmcqms: sgocecweikecwwgq: if (!is_array($siwkgiismmgqgykc)) { goto yksywwikmeksikqc; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto iwkckkeimmeoquyq; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto masakmomqmeocqqg; iwkckkeimmeoquyq: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); masakmomqmeocqqg: yqcusaeysomccaok: } qwisiamkmkkwucyo: yksywwikmeksikqc: $eueuqacmukymcyya = "\x6f\160\x74\x2d\x63\x6f\x6d\142\x69\x6e\145\144\x2d{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto giugwaeuwaomossq; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto yoqsigmoyaaceqky; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto suqckoccuyeeymww; yoqsigmoyaaceqky: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); suqckoccuyeeymww: giugwaeuwaomossq: if (!$gaemwaimkkayyegw) { goto ssagcgqaucssyego; } if ($qmyyckkowqwaacqi) { goto acgqaeakoyasgkku; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto sycougcyeqmeiagk; acgqaeakoyasgkku: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); sycougcyeqmeiagk: ssagcgqaucssyego: mqgeseysuwcaqwiy: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\117\120\124\x49\115\111\x5a\101\x54\x49\x4f\116\137\103\x4f\115\102\x49\x4e\x45\x5f\x50\101\x54\x48"); return "{$mkomwsiykqigmqca}\x2f{$sqeykgyoooqysmca}\x2f{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto ekoqieigyoeyauqa; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); ekoqieigyoeyauqa: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\160\x74\151\155\151\172\x61\x74\x69\157\156\x5f\x6d\151\156\151\x66\171\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\160\164\151\x6d\151\172\141\x74\151\157\156\137\141\x64\x76\141\156\x63\145\x5f\155\151\156\x69\x66\x79\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
