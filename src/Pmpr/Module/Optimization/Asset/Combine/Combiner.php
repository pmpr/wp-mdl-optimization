<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce1908259ad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto isqwwmikecauwyuc; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\163\163" : "\152\163"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\155\141\156\x69\x66\145\163\x74\56\152\163\157\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto ckwmkquuyyugigom; } $aoiemswgeosamowe = []; goto cumeycwmuuqawwyu; ckwmkquuyyugigom: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); cumeycwmuuqawwyu: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto owgakkqgckqcegoi; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\x6d\x61\x69\156"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\143\157\155\142\x69\156\145\x64"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\x69\156\x6c\151\156\x65"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto cigesysuauaiccms; owgakkqgckqcegoi: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto acesyuieuuqwgkwm; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto makomwwyomweyamm; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto oqwcmgwimeisusoe; makomwwyomweyamm: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\70\142\151\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto cuseccewekgcgkyg; } if (!$egsumesakcaaukem->extra) { goto ookcgumoacskyymy; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\141\146\164\145\x72", "\x62\145\146\x6f\x72\x65"]))) { goto owisckseoogsugqq; } if (!is_array($eqgoocgaqwqcimie)) { goto ysweqawmawicakeo; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); ysweqawmawicakeo: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; owisckseoogsugqq: iaomqomgiwiegoca: } goaowamiyyamueiw: ookcgumoacskyymy: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto kgysyqkoqgwmoscq; cuseccewekgcgkyg: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; kgysyqkoqgwmoscq: oqwcmgwimeisusoe: acesyuieuuqwgkwm: gsqcoqqsioiyoykq: } uaicwcqwauosmsqm: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\x2f\x73\164\171\x6c\x65"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2d\151\x6e\x6c\151\156\145\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto asaowisseacciyia; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\141\151\x6e"] = $umgkqiimgiyocmqy; asaowisseacciyia: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto qiaaqkymeuuueoqk; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\156\x6c\151\x6e\145"] = $oqciymuueukmciea; qiaaqkymeuuueoqk: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto ugswokwmkumcmigc; } $aoiemswgeosamowe[$eswwueuissckicww]["\143\157\x6d\142\x69\x6e\145\144"] = $siwkgiismmgqgykc; ugswokwmkumcmigc: if (!$aoiemswgeosamowe) { goto gwiaimosqoiquwkc; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); gwiaimosqoiquwkc: cigesysuauaiccms: if (!is_array($siwkgiismmgqgykc)) { goto wsemeeocquawyauo; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto kkewoqqowugagwoy; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto wwswmaewcaisauei; kkewoqqowugagwoy: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); wwswmaewcaisauei: gcskyqewysqaceeg: } qumkwsqqocooyuoq: wsemeeocquawyauo: $eueuqacmukymcyya = "\157\160\164\x2d\x63\157\x6d\x62\151\x6e\145\x64\x2d{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto ooysmgyeqoiesgqm; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto ocgkwqqmgasuoies; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto wmaeicoyyciuaiuy; ocgkwqqmgasuoies: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); wmaeicoyyciuaiuy: ooysmgyeqoiesgqm: if (!$gaemwaimkkayyegw) { goto qqmmycmsoqegcqqw; } if ($qmyyckkowqwaacqi) { goto kwoyiysciqumswcy; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto aaogeemgkogagkai; kwoyiysciqumswcy: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); aaogeemgkogagkai: qqmmycmsoqegcqqw: isqwwmikecauwyuc: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\117\x50\124\x49\x4d\111\x5a\x41\124\111\117\x4e\137\x43\117\x4d\102\x49\116\x45\137\x50\x41\x54\x48"); return "{$mkomwsiykqigmqca}\x2f{$sqeykgyoooqysmca}\57{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto oiiqqgyqmggyiums; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); oiiqqgyqmggyiums: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\160\164\151\x6d\151\x7a\x61\164\151\x6f\156\x5f\x6d\x69\156\x69\146\x79\x5f{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\x70\164\151\x6d\x69\x7a\141\164\x69\x6f\156\137\x61\x64\166\141\156\143\145\x5f\x6d\x69\x6e\x69\146\171\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
