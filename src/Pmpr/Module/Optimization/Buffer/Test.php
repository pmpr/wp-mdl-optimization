<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce1908259ad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\151" => 1, "\141\152\141\170" => 1, "\143\x72\x6f\x6e" => 1, "\162\145\163\164" => 1, "\167\160\137\x34\x30\64" => 1, "\163\145\x61\x72\x63\x68" => 1, "\161\x75\x65\162\x79\137\163\x74\162\x69\x6e\147" => 1, "\x69\147\156\x6f\162\145\x64\x5f\x75\x72\154\163" => 1, "\x64\157\156\157\x74\143\x61\143\x68\145\x70\141\147\x65" => 1, "\x72\x65\x6a\x65\143\164\x65\x64\x5f\x63\157\x6f\x6b\151\145" => 1, "\x6d\x61\156\x64\141\164\x6f\162\171\x5f\143\x6f\157\x6b\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\x74" => is_array($_GET) && $_GET ? $_GET : [], "\160\x6f\163\164" => is_array($_POST) && $_POST ? $_POST : [], "\164\x65\x73\x74" => [], "\143\x6f\157\x6b\x69\x65\x73" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\164\145\163\164"]) { goto acaeigkmigikeuyu; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\145\163\164"]); acaeigkmigikeuyu: $this->get = $ywmkwiwkosakssii["\x67\145\x74"] && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\x67\145\x74"] : []; $this->post = $ywmkwiwkosakssii["\x70\157\163\x74"] && is_array($ywmkwiwkosakssii["\x70\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\160\x6f\163\x74"] : []; $this->cookies = $ywmkwiwkosakssii["\143\157\157\153\151\x65\163"] && is_array($ywmkwiwkosakssii["\x63\157\157\153\x69\x65\163"]) ? $ywmkwiwkosakssii["\143\x6f\x6f\153\151\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto kqyeukywmgismyaq; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\x5f\x63\x75\163\164\157\x6d\151\x7a\x65" => '']); kqyeukywmgismyaq: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto mqoygcuqwacgycek; } if ($this->gymgcceeqssmesiu()) { goto yaumwqeommqigswq; } if ($this->goecwaaykqoaaagg()) { goto ywsywoumuaykkeaa; } if ($this->sgsscqasgeyeicoe()) { goto aiqekkyauwswayyq; } if (!$this->gooeyogikcusgwuu()) { goto sqmqwqeoygcmqcim; } if (!$this->cskwmweqysskwckg()) { goto uyksacasqywyessc; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\x73\165\143\143\x65\163\163"]) || !$uiewakwqscemywuo["\163\165\x63\143\x65\163\163"]) { goto aeuosggumiiwoesm; } if ($this->cskwmweqysskwckg("\x71\x75\145\x72\171\x5f\x73\164\x72\151\156\x67") && !$this->koguieumooaesyww()) { goto gsgyayuaekgyoumc; } if ($this->cskwmweqysskwckg("\x72\145\152\145\143\164\x65\144\x5f\x63\157\157\153\151\x65") && $this->cokqaygwwygweuyk()) { goto wykuosegisygosiq; } if ($this->cskwmweqysskwckg("\151\x67\x6e\x6f\162\x65\x64\137\165\x72\154\x73") && $this->sywgeyscigqsokyg()) { goto cqeoguiqiymkyweo; } if (!($this->cskwmweqysskwckg("\162\x65\163\164") && $this->okimameeykkqkuww())) { goto mukwsuuuqcgesmwc; } $uamcoiueqaamsqma = "\x49\x67\156\157\162\x65\x64\x20\x75\162\x6c\40\x72\x65\163\164\40\162\145\x71\x75\145\163\164\163\56"; mukwsuuuqcgesmwc: goto omgcsmsikaggaooc; cqeoguiqiymkyweo: $uamcoiueqaamsqma = "\x49\x67\x6e\157\162\x65\144\x20\x75\162\x6c\x20\146\157\165\156\x64\x2e"; omgcsmsikaggaooc: goto ugikgkwuwmgymgus; wykuosegisygosiq: $uamcoiueqaamsqma = "\105\170\143\x6c\x75\x64\x65\144\x20\143\157\157\x6b\151\145\40\146\x6f\x75\x6e\144\56"; $mgkceomocowocqyo = ["\145\x78\143\154\x75\144\145\144\137\x63\157\x6f\x6b\151\x65\x73" => $this->cokqaygwwygweuyk()]; ugikgkwuwmgymgus: goto omemqagskckoeoog; gsgyayuaekgyoumc: $uamcoiueqaamsqma = "\x51\x75\x65\162\171\x20\163\x74\162\151\x6e\147\40\x55\x52\x4c\x20\x69\163\40\x65\170\143\154\x75\x64\145\144\56"; omemqagskckoeoog: goto wyqmeyoaggwuioak; aeuosggumiiwoesm: $uamcoiueqaamsqma = "\116\x6f\x20\143\157\x6e\146\151\147\40\146\151\x6c\x65\40\146\x6f\x75\156\x64\56"; $mgkceomocowocqyo = ["\x63\157\156\x66\x69\147\x5f\x70\x61\x74\150" => $uiewakwqscemywuo["\x70\141\164\x68"]]; wyqmeyoaggwuioak: uyksacasqywyessc: goto syykqmkiyoekqsek; sqmqwqeoygcmqcim: $uamcoiueqaamsqma = "\122\x65\x71\x75\x65\163\x74\40\155\x65\x74\x68\x6f\x64\x20\x69\163\40\x6e\157\164\40\x61\x6c\x6c\157\167\145\144\56\x20\120\x61\x67\145\40\x63\141\156\x6e\157\164\40\x62\145\40\x63\141\x63\150\x65\x64\x2e"; $mgkceomocowocqyo = ["\162\145\161\x75\145\163\x74\137\155\145\x74\x68\157\x64" => $this->ciyocmkwssocskiy()]; syykqmkiyoekqsek: goto mmcikqikqecaeswu; aiqekkyauwswayyq: $uamcoiueqaamsqma = "\103\165\163\x74\x6f\155\151\172\x65\x72\x20\160\162\145\166\151\145\x77\x20\x69\x73\40\145\x78\143\154\x75\x64\145\144\56"; mmcikqikqecaeswu: goto wsqiqkiucakewgou; ywsywoumuaykkeaa: $uamcoiueqaamsqma = "\101\144\x6d\x69\156\x20\x6f\162\x20\x41\x4a\101\x58\40\125\x52\x4c\x20\151\x73\x20\145\x78\x63\154\x75\144\x65\x64\x2e"; wsqiqkiucakewgou: goto wiiqigwgyuiuksia; yaumwqeommqigswq: $uamcoiueqaamsqma = "\x50\110\120\54\40\x58\x4d\114\x2c\40\157\x72\40\x58\123\114\x20\146\x69\x6c\x65\40\x69\163\x20\x65\170\x63\x6c\165\x64\x65\x64\x2e"; wiiqigwgyuiuksia: goto agyycikucwgmysee; mqoygcuqwacgycek: $uamcoiueqaamsqma = "\x52\x6f\142\157\x74\163\56\164\170\x74\40\157\162\40\56\150\164\x61\x63\143\145\x73\163\40\x66\151\x6c\145\x20\x69\163\40\x65\x78\143\x6c\165\144\x65\144\x2e"; agyycikucwgmysee: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto aiukiwqmikscoswm; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; aiukiwqmikscoswm: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\164\x5f\x61\x6c\x6c\157\167\x5f\164\x6f\137\x6f\160\x74\151\155\x69\172\145"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto wssaaemscmmiomee; } if (!$this->ocysssyiuaueqiei("\x6c\145\x76\x65\154\55\x31")) { goto askukaucmocewkgg; } if (http_response_code() !== 200) { goto gsgkayokisiesciy; } if ($this->cskwmweqysskwckg("\x64\157\156\x6f\164\x63\x61\143\150\145\160\141\147\x65") && $this->uykysuaiooyewmsc()) { goto qgyoesyiasqimcoe; } if ($this->cskwmweqysskwckg("\x77\160\x5f\64\60\x34") && $this->kmmyuiwaogukwqqi()) { goto uueywyysiicuauem; } if ($this->cskwmweqysskwckg("\x73\145\x61\x72\143\150") && $this->gouusicsisumuiei()) { goto qmegcmqemmywoqas; } if ($this->cskwmweqysskwckg("\141\x6a\x61\x78") && $this->mcgoysmkqsqooceq()) { goto yyieomeeqycmikqw; } if ($this->cskwmweqysskwckg("\x63\162\x6f\156") && $this->auqoeckqueqiiike()) { goto ssyukuseoymackeo; } if (!($this->cskwmweqysskwckg("\162\145\x73\x74") && $this->okimameeykkqkuww())) { goto mcmkqgkwyqoiikcq; } $this->log("\122\145\x73\164\x20\101\120\111\40\x52\145\161\x75\145\x73\x74\40\151\x73\x20\145\170\x63\154\165\x64\145\144\56"); $yciaosuiyeieceug = false; mcmkqgkwyqoiikcq: goto gskacikgkwcuauko; ssyukuseoymackeo: $this->log("\x43\162\157\156\x20\x52\x65\x71\x75\x65\163\x74\x20\151\x73\x20\145\x78\x63\154\x75\144\145\x64\56"); $yciaosuiyeieceug = false; gskacikgkwcuauko: goto kwiuqqwamsimqgme; yyieomeeqycmikqw: $this->log("\x41\152\141\170\40\x52\145\x71\x75\145\x73\164\x20\151\x73\x20\x65\170\x63\154\165\144\145\x64\56"); $yciaosuiyeieceug = false; kwiuqqwamsimqgme: goto giooasyeqwaaocea; qmegcmqemmywoqas: $this->log("\123\145\x61\x72\x63\x68\x20\x70\x61\x67\145\40\x69\163\40\x65\x78\x63\154\x75\144\x65\x64\56"); $yciaosuiyeieceug = false; giooasyeqwaaocea: goto seieguyaaiqismgo; uueywyysiicuauem: $this->log("\x57\120\x20\x34\x30\x34\40\160\x61\x67\x65\40\151\163\40\x65\x78\x63\154\165\x64\x65\144\x2e"); $yciaosuiyeieceug = false; seieguyaaiqismgo: goto kkwqmewaksmokuqy; qgyoesyiasqimcoe: $this->log("\104\117\x4e\x4f\x54\103\101\103\110\x45\120\101\107\x45\x20\x69\163\40\144\145\146\x69\156\145\x64\56\x20\x50\x61\x67\145\x20\143\141\x6e\156\157\164\40\142\x65\x20\x63\x61\x63\150\145\x64\56"); $yciaosuiyeieceug = false; kkwqmewaksmokuqy: goto ascogkesqmuuaesq; gsgkayokisiesciy: $this->log("\120\141\x67\145\40\151\x73\x20\x6e\x6f\x74\40\141\40\62\x30\60\x20\x48\124\124\120\x20\x72\x65\163\x70\157\156\x73\145\x20\141\x6e\x64\40\x63\141\x6e\x6e\x6f\x74\x20\x62\145\40\143\x61\x63\x68\x65\x64\56"); $yciaosuiyeieceug = false; ascogkesqmuuaesq: goto kiemqsgcmouqscao; askukaucmocewkgg: $this->log("\156\157\164\x20\141\154\154\x6f\x77\40\164\157\x20\x6f\160\x74\151\x6d\x69\x7a\x65\40\x74\x68\x69\x73\x20\160\x61\147\x65\x2e"); $yciaosuiyeieceug = false; kiemqsgcmouqscao: goto meqmcgmksqiqcoyq; wssaaemscmmiomee: $this->log("\x42\x75\146\x66\x65\162\40\143\157\156\164\145\156\x74\40\165\x6e\144\x65\162\x20\62\x35\65\x20\x63\x61\162\141\143\164\145\x72\163\x2e\x3a\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; meqmcgmksqiqcoyq: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto euskosgaksmimgug; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto iusaeoimukymskgs; euskosgaksmimgug: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); iusaeoimukymskgs: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto asciaakaoygususy; } return $this->eecucukcqkqysiau(__FUNCTION__); asciaakaoygususy: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto eaggoasiwogmquwc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eaggoasiwogmquwc: $ucasskoyoewwmmii = ["\162\x6f\x62\157\x74\163\x2e\164\170\164", "\56\x68\x74\x61\x63\x63\145\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto iaousaauoawkqkkg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iaousaauoawkqkkg: ywmoieqkigsykequ: } meoweqcaaosoomeu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kkwucaoumyayagcq; } return $this->eecucukcqkqysiau(__FUNCTION__); kkwucaoumyayagcq: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto gikaiicgqyueeoco; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto muwyuiikuywigwso; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); muwyuiikuywigwso: gikaiicgqyueeoco: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto akcakssqcqcouwew; } return $this->eecucukcqkqysiau(__FUNCTION__); akcakssqcqcouwew: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto akoiqkoqmmmcieug; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); akoiqkoqmmmcieug: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\x6e\144\145\x78\x2e\160\150\x70")) { goto cgasgmiiqegqesic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cgasgmiiqegqesic: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\160" => 1, "\x78\155\154" => 1, "\x78\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\x44\117\x49\116\x47\137\x41\x4a\101\130") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\x63\165\x73\164\x6f\155\151\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\x54" => 1, "\x48\105\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yamoiggaeugmgkku; } return $this->eecucukcqkqysiau(__FUNCTION__); yamoiggaeugmgkku: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto eqekaoaioiykuaiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eqekaoaioiykuaiw: $yccgiaiouekkouay = [ "\154\141\156\x67" => 1, "\x70\x72\x65\x6c\x6f\141\x64" => 1, "\157\x70\x74\x2d\x70\x72\145\154\157\141\144" => 1, "\160\x65\x72\155\x61\x6c\x69\156\153\137\x6e\x61\155\145" => 1, "\x6c\x70\x2d\166\x61\x72\151\x61\164\x69\157\156\x2d\x69\x64" => 1, "\x58\104\105\x42\x55\x47\x5f\123\x45\123\x53\111\x4f\x4e\137\123\124\101\122\x54" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto qoiuwyogucoeaoew; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qoiuwyogucoeaoew: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\143\x68\x65\x5f\x71\165\145\x72\171\137\163\164\162\151\x6e\x67\163"); if ($yccgiaiouekkouay) { goto qkkqiagwgaoyauki; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qkkqiagwgaoyauki: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oyywywoqaqcykucs; } return $this->eecucukcqkqysiau(__FUNCTION__); oyywywoqaqcykucs: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto iqeqqwcmaiqakawc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iqeqqwcmaiqakawc: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto gioqkcywauuckmua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gioqkcywauuckmua: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto uqagqomggiacosqm; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; uqagqomggiacosqm: suoymucmyegewkmu: } miaiggsoiaekmqwy: if (empty($eiocugauqgouiuyi)) { goto mwskgsimqagmkcgq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); mwskgsimqagmkcgq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\x4f\x50\124\111\115\111\x5a\101\124\111\117\x4e\137\x44\x4f\116\x54\137\x43\101\x43\x48\105\x5f\x50\101\107\105") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto mkuigmcgkawyawee; } return false; mkuigmcgkawyawee: return !apply_filters("\143\x61\x63\x68\x65\137\x6f\x76\x65\x72\162\x69\144\x65\137\144\x6f\156\164\x5f\x63\x61\x63\x68\145\137\x70\x61\x67\x65", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x69\x73\137\64\x30\64")) { goto ouqwmaaskykywyqo; } $weksiguqgqscsoee = is_404(); ouqwmaaskykywyqo: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\x77\x70\x2d\152\x73\x6f\x6e"; if (!function_exists("\162\145\x73\164\x5f\x67\x65\x74\137\165\x72\x6c\x5f\x70\x72\x65\x66\151\170")) { goto agqmoymkiswqswqo; } $cccswkigaicmqkkc = rest_get_url_prefix(); agqmoymkiswqswqo: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\167\160\x5f\x64\x6f\x69\156\147\137\143\x72\x6f\x6e")) { goto kwaqakoogeiacmwi; } $weksiguqgqscsoee = wp_doing_cron(); kwaqakoogeiacmwi: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\x77\160\x5f\x64\157\151\x6e\x67\137\x61\x6a\141\170") && wp_doing_ajax()) { goto wcoqiwuusoeqiqwi; } if (function_exists("\151\163\x5f\141\152\141\170") && is_ajax()) { goto aakwscykmyyykoms; } if (!(isset($_SERVER["\x48\124\x54\x50\137\x58\137\x52\x45\121\125\105\x53\124\105\104\137\127\111\x54\x48"]) && $_SERVER["\110\x54\x54\x50\x5f\x58\137\x52\x45\121\x55\105\x53\124\x45\104\137\x57\111\x54\x48"] === "\130\115\114\110\164\x74\x70\x52\145\x71\165\x65\163\x74")) { goto ccqgkeesikyegcik; } $weksiguqgqscsoee = true; ccqgkeesikyegcik: goto iiuawywwoaeyauge; aakwscykmyyykoms: $weksiguqgqscsoee = true; iiuawywwoaeyauge: goto oqwyemgwoossauyk; wcoqiwuusoeqiqwi: $weksiguqgqscsoee = true; oqwyemgwoossauyk: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\151\x73\137\163\x65\x61\162\143\x68") && !is_search())) { goto cwcmwogseemgqgqq; } return false; cwcmwogseemgqgqq: return !apply_filters("\143\x61\x63\x68\145\137\143\141\143\150\x65\137\163\145\141\162\143\150", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\125\x45\x53\124\137\125\x52\111", ''); if (!$iyiwooigkweeewey) { goto yuoyackaoigyyyso; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); yuoyackaoigyyyso: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto kcqieuukskyiywss; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); kcqieuukskyiywss: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\125\105\x53\x54\x5f\115\x45\124\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto gsimeiqkoyqkuecq; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\143\150\x65\137\151\x67\x6e\157\162\x65\144\x5f\160\141\162\141\155\x65\164\x65\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto wukuisoeoeomgegu; } ksort($eyagkkkqkwcuygso); wukuisoeoeomgegu: gsimeiqkoyqkuecq: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto gqywcowiigceimaw; } $icwicymcioeyeyek["\x70\145\162\155\141\154\x69\156\153"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); gqywcowiigceimaw: } }
