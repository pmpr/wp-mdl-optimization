<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cf4f986c850             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x70\137\141\144\x64\x5f\151\156\x6c\151\x6e\145\x5f\x73\x74\x79\x6c\145\x5f\144\141\x74\141", [$this, "\157\153\x75\147\x75\171\141\x63\x67\147\163\x61\x67\x65\x71\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\163\164\171\154\x65"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\100\56\x2a\x3f\x5b\x5e\x7b\135\53\x7b\50\x5b\x5c\x73\x5c\x53\135\x2b\77\x7d\51\x5c\x73\x2a\x7d\174\50\133\141\55\x7a\x30\55\x39\54\40\56\50\72\x29\43\134\133\x5c\x5d\75\x5f\76\x2b\x7e\x5c\55\100\x5d\x2b\x29\173\x28\133\x5e\x7d\174\136\173\x5d\52\51\175\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto kiwqkcaekqqyuegq; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); qsygcycwieukkgwc: } umgaesggesswoaqe: kiwqkcaekqqyuegq: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\x2f\x5b\136\x7d\73\173\x5c\x6e\135\53\x7b\x5c\163\x2a\x7d\x2f", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto yqykqysmiquwoasu; } $yygmoeguaqyumuui = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\57\x76\141\162\134\50\50\133\136\51\x5d{$yygmoeguaqyumuui}\51\134\x29\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto cmqucgoewuyieoyk; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto gimmuoqwckiseaik; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); gimmuoqwckiseaik: iqcogmsguwoikame: } quwcqmyokicssyew: cmqucgoewuyieoyk: yqykqysmiquwoasu: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\72\x72\157\x6f\164\134\x73\x2a\x7b\50\x5b\134\x73\x5c\x53\135\53\77\51\175\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto ssoucoucsgccekwe; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\73", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\72", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto qqewoyookaskiuek; } if (preg_match("\57\166\x61\162\x5c\x28\50\x5b\x5e\51\135\52\51\134\51\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto kqksuugcgsyeoayy; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto iggyqogweyosuikc; kqksuugcgsyeoayy: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; iggyqogweyosuikc: qqewoyookaskiuek: ygcsmkuycoagwyou: } omugkkesagcyagmk: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); mosqsmqimqgqoase: } ayyweymyuuiauamo: ssoucoucsgccekwe: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (!preg_match("\x2f{$eouekqmooogkoqoo}\57", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto miyqyeiwquwsacsm; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto qkcyqocqqwmqgqww; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); qkcyqocqqwmqgqww: miyqyeiwquwsacsm: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto eeqesooyqagwawae; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; ywqgcegomwaiuquc: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto eegqyykygiccaoeo; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto acaqummmoyiemqss; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); acaqummmoyiemqss: soqqemyioggmoakg: } wmmggowmigekyoso: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto suswcqoyyqkkquuo; } goto eegqyykygiccaoeo; suswcqoyyqkkquuo: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto ywqgcegomwaiuquc; eegqyykygiccaoeo: eeqesooyqagwawae: return $qgowgcsuycquswmo; } }
