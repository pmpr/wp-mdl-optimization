<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb243a19822             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Dependencies; use WP_Scripts; class Engine extends Common { protected bool $added = false; public function auioqsqaowomwaoe() : bool { return $this->added; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\160\151\156\164\137\163\164\171\154\145\x73", [$this, "\x6b\x79\171\x77\167\x71\157\x67\143\157\143\x67\x63\147\167\155"], 9999)->qcsmikeggeemccuu("\x77\160\137\160\151\156\x74\137\x73\143\x72\x69\160\x74\163", [$this, "\157\x79\x75\x71\163\x6d\153\151\167\x69\153\147\x61\161\x73\167"], 9999); } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function enqueue($oseqkueswiwsceis) { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto ueaiskyiqcquiika; } $ecukkacusqswqoem = false; if (!$oseqkueswiwsceis instanceof WP_Dependencies) { goto koggssokukoukkay; } foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; gwoacimkeyymqccq: } wiqigqgiegmacgsw: koggssokukoukkay: ueaiskyiqcquiika: } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { if (!$ugmuiugkaygmsagq) { goto uscissuaiyuiukea; } $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? Constants::qssgasiyswwaciwc : Constants::wwukgkqwyakeqwqk; $egsumesakcaaukem = $ugmuiugkaygmsagq->registered[$eueuqacmukymcyya] ?? null; $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\x2d{$eueuqacmukymcyya}"; if (!($egsumesakcaaukem && !preg_match("\x2f\x63\144\x6e\56\x6a\163\144\x65\154\x69\166\x72\56\x6e\145\x74\x7c\147\x6f\157\x67\x6c\145\141\160\151\x2f\151", $egsumesakcaaukem->src))) { goto ooqmaweuqmcmwsuk; } $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $aoikqkkeucuokoay = $gcskoooiimggowew->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $aguwegoioikwgooy, Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw]); if (empty($aoikqkkeucuokoay)) { goto qccmuwiwykuegoga; } if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS)) { goto osqgywagokmsicqe; } $gcskoooiimggowew->wqikesawekycweoi($aoikqkkeucuokoay, [$gcskoooiimggowew::equemyqwoqoousqq => time()]); $ogomymegcoacqisg = $gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, Constants::iocouekmygsaocuo); if ($ogomymegcoacqisg) { goto eqemcocqsyasqycq; } $ogomymegcoacqisg = $egsumesakcaaukem->src; eqemcocqsyasqycq: $this->added = true; $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if (Constants::qssgasiyswwaciwc === $sqeykgyoooqysmca) { goto ymwyooosikgokiaa; } $geoqacegumkcaskk->iqmcmgkyssqgoqok($eueuqacmukymcyya); $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->ciuuyygmkuwgoiki($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); yuoamgkigcwaooqu: } kaiqsuaywyuckuoo: goto qaiuogoowcoimwee; ymwyooosikgokiaa: $geoqacegumkcaskk->cawwmsmyseesuyee($eueuqacmukymcyya); $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->keecueggosiqseiw($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); cqugssuesycomqwa: } ucecweoaoyeoyuue: qaiuogoowcoimwee: osqgywagokmsicqe: goto csucwwqcsaymyiuk; qccmuwiwykuegoga: $gcskoooiimggowew->gscuuyuyauokoyuo([Constants::acyomymuuygeoqks => $eueuqacmukymcyya, Constants::iocouekmygsaocuo => '', $gcskoooiimggowew::equemyqwoqoousqq => time()]); csucwwqcsaymyiuk: foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); qmgueimkwqmsakis: } iiuuwuwcwamqegey: ooqmaweuqmcmwsuk: uscissuaiyuiukea: } }
