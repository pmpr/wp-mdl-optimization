<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf88a1c26f3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Dependencies; use WP_Scripts; class Engine extends Common { protected bool $added = false; public function auioqsqaowomwaoe() : bool { return $this->added; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\x70\x69\156\164\137\x73\164\x79\x6c\x65\163", [$this, "\x6b\x79\x79\167\167\161\x6f\147\x63\157\x63\x67\x63\x67\167\x6d"], 9999)->qcsmikeggeemccuu("\x77\160\x5f\160\x69\156\x74\x5f\163\143\162\x69\x70\164\163", [$this, "\157\x79\x75\161\163\x6d\x6b\x69\167\151\x6b\x67\141\x71\163\x77"], 9999); } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function enqueue($oseqkueswiwsceis) { if (!$this->ocysssyiuaueqiei()) { goto cyqokqcacysioeyc; } $ecukkacusqswqoem = false; if (!$oseqkueswiwsceis instanceof WP_Dependencies) { goto cksoeiwawiygyiyg; } foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; aayysiegiyweiyuu: } sgikkoswwyesqomo: cksoeiwawiygyiyg: cyqokqcacysioeyc: } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { if (!$ugmuiugkaygmsagq) { goto iyceygqsmokgmams; } $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? Constants::qssgasiyswwaciwc : Constants::wwukgkqwyakeqwqk; $egsumesakcaaukem = $ugmuiugkaygmsagq->registered[$eueuqacmukymcyya] ?? null; $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\x2d{$eueuqacmukymcyya}"; if (!($egsumesakcaaukem && !preg_match("\x2f\143\x64\x6e\x2e\152\163\144\x65\154\x69\x76\162\56\x6e\x65\x74\174\x67\x6f\157\x67\x6c\x65\x61\160\x69\57\x69", $egsumesakcaaukem->src))) { goto qcweoyigoaeacsow; } $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $aoikqkkeucuokoay = $gcskoooiimggowew->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $aguwegoioikwgooy, Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw]); if (empty($aoikqkkeucuokoay)) { goto iyikuwuweqigiuey; } if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS)) { goto gysmmooawoeggaow; } $gcskoooiimggowew->wqikesawekycweoi($aoikqkkeucuokoay, [$gcskoooiimggowew::equemyqwoqoousqq => time()]); $ogomymegcoacqisg = $gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, Constants::iocouekmygsaocuo); if ($ogomymegcoacqisg) { goto akwwuuiykscgicuw; } $ogomymegcoacqisg = $egsumesakcaaukem->src; akwwuuiykscgicuw: $this->added = true; $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if (Constants::qssgasiyswwaciwc === $sqeykgyoooqysmca) { goto scgmwokeuqwiekkk; } $geoqacegumkcaskk->iqmcmgkyssqgoqok($eueuqacmukymcyya); $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->ciuuyygmkuwgoiki($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); wcsysckgigeykkwy: } gsusqquicmukegcs: goto ceusyscosamyaiws; scgmwokeuqwiekkk: $geoqacegumkcaskk->cawwmsmyseesuyee($eueuqacmukymcyya); $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->keecueggosiqseiw($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); iikgiaocummweiga: } ueqsiwuwumoqgsck: ceusyscosamyaiws: gysmmooawoeggaow: goto acsigwcaesyyoiie; iyikuwuweqigiuey: $gcskoooiimggowew->gscuuyuyauokoyuo([Constants::acyomymuuygeoqks => $eueuqacmukymcyya, Constants::iocouekmygsaocuo => '', $gcskoooiimggowew::equemyqwoqoousqq => time()]); acsigwcaesyyoiie: foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); wycmcqaauqkgegau: } aqaaqeucgoegeeuk: qcweoyigoaeacsow: iyceygqsmokgmams: } }