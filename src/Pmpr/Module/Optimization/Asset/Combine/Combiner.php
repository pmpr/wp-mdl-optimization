<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642c3cb2b5661             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Combine; use _WP_Dependency; use Pmpr\Common\Foundation\Decorator\DecoratorAsset; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; use WP_Dependencies; use WP_Styles; abstract class Combiner extends Common { const qqckkouoyyeimmac = 90000; const osusmouuukykwasy = 30000; public function gaiaksuyqkeeiqgo($ugmuiugkaygmsagq) { $megmggkiokqkcwou = 0; $ssimsmwwkqmmgqeg = []; $usyqkyomqcuocgoa = []; $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($this->ocysssyiuaueqiei() && $ugmuiugkaygmsagq instanceof WP_Dependencies)) { goto mwsmsguqqkcwiiuk; } $qmyyckkowqwaacqi = $ugmuiugkaygmsagq instanceof WP_Styles; $okcwyqcycoicewqy = $qmyyckkowqwaacqi ? "\x63\x73\163" : "\152\x73"; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $qamuuegkguqmisam = $this->agkwcckksaegcsce("\155\141\156\151\146\145\x73\164\x2e\x6a\163\x6f\x6e", $okcwyqcycoicewqy); if ($iiaumsgauuyeqksw->exists($qamuuegkguqmisam)) { goto uguigkcmukuouway; } $aoiemswgeosamowe = []; goto uqqaiagaeqgqgaiy; uguigkcmukuouway: $aoiemswgeosamowe = json_decode($iiaumsgauuyeqksw->souwykwwmyygqyqi($qamuuegkguqmisam), true); uqqaiagaeqgqgaiy: $coagmqgaakeqmqmw = $ugmuiugkaygmsagq->queue; $eswwueuissckicww = ManipulateServer::ekcymmyqoceukosc(); $yyimiwcuegayoskq = ManipulateArray::get($aoiemswgeosamowe, $eswwueuissckicww); if (!$yyimiwcuegayoskq) { goto scisgsyemmsekgos; } $umgkqiimgiyocmqy = ManipulateArray::get($yyimiwcuegayoskq, "\155\x61\151\156"); $siwkgiismmgqgykc = ManipulateArray::get($yyimiwcuegayoskq, "\x63\157\x6d\x62\x69\156\x65\144"); $oqciymuueukmciea = ManipulateArray::get($yyimiwcuegayoskq, "\151\x6e\154\x69\156\145"); $gaemwaimkkayyegw = $iiaumsgauuyeqksw->souwykwwmyygqyqi($oqciymuueukmciea); goto cewmoqyysgsmuiya; scisgsyemmsekgos: foreach ($coagmqgaakeqmqmw as $momcykaoccoymeig => $eueuqacmukymcyya) { $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); if (!$egsumesakcaaukem instanceof _WP_Dependency) { goto cmegwsegsosyqcai; } $ogomymegcoacqisg = $this->mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq); $ewgwqamkygiqaawc = $this->miocmcoykayoyyau()->souwykwwmyygqyqi($ogomymegcoacqisg); $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem); if ($ewgwqamkygiqaawc) { goto giaacoqqqsekcayy; } ManipulateArray::unset($coagmqgaakeqmqmw, $momcykaoccoymeig); goto ewymsmkkiksgwysk; giaacoqqqsekcayy: $oiegiwogmwmawkeo = mb_strlen($ewgwqamkygiqaawc, "\x38\x62\x69\164"); if ($oiegiwogmwmawkeo <= self::osusmouuukykwasy && $megmggkiokqkcwou <= self::qqckkouoyyeimmac) { goto cgiscsqwwgqqaeqi; } if (!$egsumesakcaaukem->extra) { goto skkamseieeusycye; } foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!($eqgoocgaqwqcimie && in_array($uusmaiomayssaecw, ["\141\x66\164\145\162", "\x62\x65\x66\x6f\162\x65"]))) { goto wiysogeqqwgioyka; } if (!is_array($eqgoocgaqwqcimie)) { goto soaccwqimeksgwiw; } $eqgoocgaqwqcimie = implode('', $eqgoocgaqwqcimie); soaccwqimeksgwiw: $usyqkyomqcuocgoa[] = $eqgoocgaqwqcimie; wiysogeqqwgioyka: suqkuqygkkgwyaie: } aegysmeecgcgayyw: skkamseieeusycye: $ssimsmwwkqmmgqeg[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $megmggkiokqkcwou += $oiegiwogmwmawkeo; $usyqkyomqcuocgoa[$eueuqacmukymcyya] = $ewgwqamkygiqaawc; syiqkaasoueowwui: ewymsmkkiksgwysk: cmegwsegsosyqcai: gaomwagkcciesyqy: } esuiysskoweawsue: $wkcwykowmmmwioqs = "{$this->ygykiseoqukukskk($okcwyqcycoicewqy)}\x2f\163\164\171\x6c\145"; $umgkqiimgiyocmqy = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $oqciymuueukmciea = $this->agkwcckksaegcsce("{$wkcwykowmmmwioqs}\x2d\151\x6e\154\x69\156\145\56{$okcwyqcycoicewqy}", $okcwyqcycoicewqy); $ewwqgggaowaceeso = $this->wamiiiagcwwigucu(implode('', $ssimsmwwkqmmgqeg), $okcwyqcycoicewqy); $gaemwaimkkayyegw = $this->wamiiiagcwwigucu(implode('', $usyqkyomqcuocgoa), $okcwyqcycoicewqy); if (!($ewwqgggaowaceeso && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($umgkqiimgiyocmqy, $ewwqgggaowaceeso))) { goto wmywuusgukmmaams; } $aoiemswgeosamowe[$eswwueuissckicww]["\x6d\141\151\156"] = $umgkqiimgiyocmqy; wmywuusgukmmaams: if (!($gaemwaimkkayyegw && $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($oqciymuueukmciea, $gaemwaimkkayyegw))) { goto gkyawqqcmigqgaiq; } $aoiemswgeosamowe[$eswwueuissckicww]["\x69\x6e\x6c\151\x6e\145"] = $oqciymuueukmciea; gkyawqqcmigqgaiq: $siwkgiismmgqgykc = $coagmqgaakeqmqmw; if (!$siwkgiismmgqgykc) { goto ooeausyowguqicuo; } $aoiemswgeosamowe[$eswwueuissckicww]["\143\x6f\x6d\x62\151\x6e\x65\144"] = $siwkgiismmgqgykc; ooeausyowguqicuo: if (!$aoiemswgeosamowe) { goto egyyiccaeeiooaua; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($qamuuegkguqmisam, json_encode($aoiemswgeosamowe, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)); egyyiccaeeiooaua: cewmoqyysgsmuiya: if (!is_array($siwkgiismmgqgykc)) { goto kqgcyoscsusgoaqi; } foreach ($siwkgiismmgqgykc as $eueuqacmukymcyya) { if ($qmyyckkowqwaacqi) { goto ugqaaewwmkocwwgy; } wp_dequeue_script($eueuqacmukymcyya); wp_deregister_script($eueuqacmukymcyya); goto wgewmqieuamsoayy; ugqaaewwmkocwwgy: wp_dequeue_style($eueuqacmukymcyya); wp_deregister_style($eueuqacmukymcyya); wgewmqieuamsoayy: omqiayeucoioqoao: } igooksugieceoege: kqgcyoscsusgoaqi: $eueuqacmukymcyya = "\x6f\x70\164\x2d\143\157\x6d\142\x69\x6e\x65\x64\x2d{$okcwyqcycoicewqy}"; if (!($umgkqiimgiyocmqy && $iiaumsgauuyeqksw->exists($umgkqiimgiyocmqy))) { goto wkeuuycukmuqiaom; } $eeamcawaiqocomwy = $eygsasmqycagyayw->cwuqascimsgmiyca($umgkqiimgiyocmqy); if ($qmyyckkowqwaacqi) { goto ueigkucgaucgeimc; } DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); goto sggawugoykqcmsug; ueigkucgaucgeimc: DecoratorAsset::myyikeyuuomqoyew($eueuqacmukymcyya, $eeamcawaiqocomwy); sggawugoykqcmsug: wkeuuycukmuqiaom: if (!$gaemwaimkkayyegw) { goto owmuceyswmgueasi; } if ($qmyyckkowqwaacqi) { goto wakmayaoqoskekqy; } DecoratorAsset::yocqwqycwegayowg($eueuqacmukymcyya, $gaemwaimkkayyegw); goto qmuwoecuacmkwgem; wakmayaoqoskekqy: DecoratorAsset::oiqqguakwcieaioo($eueuqacmukymcyya, $gaemwaimkkayyegw); qmuwoecuacmkwgem: owmuceyswmgueasi: mwsmsguqqkcwiiuk: } public abstract function qqcykaeioiwwaqos(); public function ywgkkwweiyqsyiwu($esaqeawoigqgagum) : bool { return $this->kcciqwskewsuaemk()->exists($esaqeawoigqgagum); } public function mgaeeqsgeoukeokc($egsumesakcaaukem, $ugmuiugkaygmsagq) { return $this->ukacwyckseuqsqgc($egsumesakcaaukem->src); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $egsumesakcaaukem) { return $ewgwqamkygiqaawc; } public function agkwcckksaegcsce($wkcwykowmmmwioqs, $sqeykgyoooqysmca) : string { $mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms("\x4f\x50\x54\x49\x4d\x49\132\101\x54\111\117\x4e\137\103\117\115\102\x49\116\105\x5f\120\x41\x54\110"); return "{$mkomwsiykqigmqca}\x2f{$sqeykgyoooqysmca}\57{$wkcwykowmmmwioqs}"; } public function ygykiseoqukukskk($sqeykgyoooqysmca, $cywsgckammeuyqyq = 4) { $ymqmyyeuycgmigyo = ManipulateString::uniqid($cywsgckammeuyqyq); $mkomwsiykqigmqca = $this->agkwcckksaegcsce($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto eeauyscekuckoues; } $ymqmyyeuycgmigyo = $this->ygykiseoqukukskk($sqeykgyoooqysmca); eeauyscekuckoues: return $ymqmyyeuycgmigyo; } public function wamiiiagcwwigucu($ewgwqamkygiqaawc, $sqeykgyoooqysmca) { $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\157\160\164\151\x6d\x69\x7a\141\164\x69\157\x6e\x5f\155\x69\x6e\x69\x66\171\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $this->sscegwueamckwmcy("\x6f\x70\x74\151\x6d\x69\172\x61\x74\151\x6f\156\x5f\141\144\166\141\156\x63\145\x5f\155\151\156\x69\x66\x79\137{$sqeykgyoooqysmca}", $ewgwqamkygiqaawc); return $ewgwqamkygiqaawc; } }
