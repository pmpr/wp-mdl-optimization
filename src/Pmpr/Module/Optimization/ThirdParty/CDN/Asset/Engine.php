<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b4159a97563             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use WP_Dependencies; use WP_Scripts; class Engine extends Common { protected bool $added = false; public function auioqsqaowomwaoe() : bool { return $this->added; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\x70\151\156\164\137\163\164\x79\154\x65\x73", [$this, "\x6b\171\x79\167\167\x71\x6f\x67\143\157\143\147\143\147\x77\155"], 9999)->qcsmikeggeemccuu("\x77\x70\137\x70\x69\156\164\x5f\163\143\x72\x69\x70\x74\x73", [$this, "\157\x79\165\161\163\155\x6b\151\167\x69\153\147\141\x71\x73\x77"], 9999); } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function enqueue($oseqkueswiwsceis) { if (!$this->ocysssyiuaueqiei()) { goto meegaqaesckqmyec; } $ecukkacusqswqoem = false; if (!$oseqkueswiwsceis instanceof WP_Dependencies) { goto emqmqkeygumaasam; } foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; aosasoogesueygak: } wisaekiyyweeemuy: emqmqkeygumaasam: meegaqaesckqmyec: } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { if (!$ugmuiugkaygmsagq) { goto oaciskoioaecgwee; } $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? self::qssgasiyswwaciwc : self::wwukgkqwyakeqwqk; $egsumesakcaaukem = $ugmuiugkaygmsagq->registered[$eueuqacmukymcyya] ?? null; $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\55{$eueuqacmukymcyya}"; if (!($egsumesakcaaukem && !preg_match("\57\x63\144\156\x2e\x6a\x73\x64\145\154\x69\x76\162\56\x6e\x65\164\x7c\147\x6f\157\x67\x6c\145\x61\160\151\x2f\151", $egsumesakcaaukem->src))) { goto yskswskmsgoouyco; } $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $aoikqkkeucuokoay = $gcskoooiimggowew->oqomcmyuuakigusk([$gcskoooiimggowew::ascagqcquwgmygkm => $aguwegoioikwgooy, $gcskoooiimggowew::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw]); if (empty($aoikqkkeucuokoay)) { goto gooqkmwgsmseuiwq; } if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS)) { goto ugowqoisymsioeye; } $gcskoooiimggowew->wqikesawekycweoi($aoikqkkeucuokoay, [$gcskoooiimggowew::equemyqwoqoousqq => time()]); $ogomymegcoacqisg = $gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, self::iocouekmygsaocuo); if ($ogomymegcoacqisg) { goto scccyaiaggeasgqg; } $ogomymegcoacqisg = $egsumesakcaaukem->src; scccyaiaggeasgqg: $this->added = true; $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if (self::qssgasiyswwaciwc === $sqeykgyoooqysmca) { goto wamgcqkaieummksu; } $geoqacegumkcaskk->iqmcmgkyssqgoqok($eueuqacmukymcyya); $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->ciuuyygmkuwgoiki($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); kcwyeqmysgqkoqcm: } isaouwiaamimceeg: goto mwgaaiaswusakkaq; wamgcqkaieummksu: $geoqacegumkcaskk->cawwmsmyseesuyee($eueuqacmukymcyya); $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->keecueggosiqseiw($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); iyocimuyeemkaaso: } asueqykmkoaimguq: mwgaaiaswusakkaq: ugowqoisymsioeye: goto oeosugomyqyekmuq; gooqkmwgsmseuiwq: $gcskoooiimggowew->gscuuyuyauokoyuo([$gcskoooiimggowew::acyomymuuygeoqks => $eueuqacmukymcyya, $gcskoooiimggowew::iocouekmygsaocuo => '', $gcskoooiimggowew::equemyqwoqoousqq => time()]); oeosugomyqyekmuq: foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); ysusaysykymegguk: } emgssiqceagusgyg: yskswskmsgoouyco: oaciskoioaecgwee: } }
