<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6673f43f6aa4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = self::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\x5f\x61\144\144\137\x69\156\x6c\151\x6e\x65\137\163\164\171\154\x65\x5f\x64\x61\x74\x61", [$this, "\157\x6b\165\147\165\171\x61\143\x67\x67\163\141\147\145\161\x71"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\x73\164\x79\154\145"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\x40\56\x2a\77\133\136\173\x5d\53\x7b\x28\x5b\134\x73\134\123\x5d\53\77\175\51\134\163\x2a\175\x7c\x28\133\x61\55\x7a\x30\55\x39\54\x20\56\50\x3a\51\x23\x5c\133\x5c\x5d\75\137\76\53\176\x5c\55\x40\x5d\53\x29\x7b\x28\133\136\175\x7c\x5e\x7b\x5d\52\51\175\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto wcugqegqsuuuwqao; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); iwsuawwqomaowuii: } qoqskyuuwueqkquk: wcugqegqsuuuwqao: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\x2f\133\x5e\x7d\73\173\x5c\156\x5d\53\173\x5c\163\x2a\x7d\x2f", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto emmsycooskoqmgeg; } $yygmoeguaqyumuui = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\x2f\x76\141\x72\134\50\x28\x5b\136\51\135{$yygmoeguaqyumuui}\51\134\x29\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto qgeugwymkkiacwoc; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto mqicocmqegwukkwg; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); mqicocmqegwukkwg: ciykoyeioqgyaeqo: } asiqwuoswmigcaki: qgeugwymkkiacwoc: emmsycooskoqmgeg: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\72\x72\x6f\157\x74\134\163\x2a\x7b\x28\x5b\x5c\x73\x5c\x53\135\x2b\77\x29\x7d\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto kkumywowcoycymeo; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\x3b", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\x3a", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto guykyqecgswcsmws; } if (preg_match("\57\x76\x61\x72\134\50\x28\133\x5e\x29\x5d\x2a\51\134\51\57", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto samwkqgwouggsguc; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto wyuemgggaqogsmsq; samwkqgwouggsguc: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; wyuemgggaqogsmsq: guykyqecgswcsmws: oomguqikqokqwgku: } acsqgiuageaasiyy: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); mugqyyeayeyggqqk: } ouamogymawucwswu: kkumywowcoycymeo: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (!preg_match("\x2f{$eouekqmooogkoqoo}\x2f", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto kqqiegkuqagcqsya; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto miweggwqeiaeweia; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); miweggwqeiaeweia: kqqiegkuqagcqsya: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto awoaooyoeoyeeqee; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; ogsaaqsaogcqiouy: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto ousiuuwgwkiyikyq; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto aomysykcgikegiau; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); aomysykcgikegiau: ikqqskkqqwmwssoo: } iwekmyyccgiyuecc: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto cwwmimggaaecmucw; } goto ousiuuwgwkiyikyq; cwwmimggaaecmucw: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: awoaooyoeoyeeqee: return $qgowgcsuycquswmo; } }
