<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b7a38689a83             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Package\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected $logger = null; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\151" => 1, "\x77\160\x5f\x34\x30\x34" => 1, "\x73\x65\x61\162\143\x68" => 1, "\x71\165\145\162\x79\137\163\164\162\x69\x6e\147" => 1, "\x69\147\156\157\x72\x65\x64\x5f\165\162\x6c\163" => 1, "\x64\157\156\157\x74\143\x61\x63\x68\145\160\x61\x67\145" => 1, "\162\145\152\145\143\x74\x65\x64\x5f\x63\157\x6f\153\x69\x65" => 1, "\x6d\x61\156\144\x61\x74\157\x72\x79\137\x63\x6f\x6f\153\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { goto gygawoqywkukmqee; kiwqkcaekqqyuegq: $this->get = $ywmkwiwkosakssii["\147\145\164"] && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\147\x65\164"] : []; goto quwcqmyokicssyew; umgaesggesswoaqe: $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\145\x73\164"]); goto qsygcycwieukkgwc; gygawoqywkukmqee: $this->config = $uiewakwqscemywuo; goto kciouyuaqkyqomam; qsygcycwieukkgwc: oouoqimaaqcmccay: goto kiwqkcaekqqyuegq; ayyweymyuuiauamo: sycygoiaiqqageym: goto mosqsmqimqgqoase; kciouyuaqkyqomam: $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\164" => is_array($_GET) && $_GET ? $_GET : [], "\x70\x6f\163\164" => is_array($_POST) && $_POST ? $_POST : [], "\164\x65\163\164" => [], "\154\157\147\x67\x65\x72" => null, "\143\157\x6f\153\x69\145\163" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); goto wwkgkaecgiwggcck; iqcogmsguwoikame: $this->logger = $ywmkwiwkosakssii["\x6c\157\147\x67\x65\x72"] ?: null; goto gimmuoqwckiseaik; wwkgkaecgiwggcck: if ($ywmkwiwkosakssii["\164\145\x73\164"]) { goto oouoqimaaqcmccay; } goto umgaesggesswoaqe; cmqucgoewuyieoyk: if (!$this->ayueggmoqeeukqmq()) { goto sycygoiaiqqageym; } goto yqykqysmiquwoasu; yqykqysmiquwoasu: $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\x5f\x63\165\x73\164\157\155\151\x7a\x65" => '']); goto ayyweymyuuiauamo; gimmuoqwckiseaik: $this->cookies = $ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\145\x73"] && is_array($ywmkwiwkosakssii["\x63\x6f\157\153\x69\145\163"]) ? $ywmkwiwkosakssii["\x63\157\157\x6b\x69\x65\163"] : []; goto cmqucgoewuyieoyk; quwcqmyokicssyew: $this->post = $ywmkwiwkosakssii["\x70\157\163\164"] && is_array($ywmkwiwkosakssii["\160\157\163\164"]) ? $ywmkwiwkosakssii["\x70\157\163\164"] : []; goto iqcogmsguwoikame; mosqsmqimqgqoase: } public function mskuyeumceaigegs() { return $this->logger; } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { goto kymkucucyeoeikim; emmsycooskoqmgeg: eeqesooyqagwawae: goto ouamogymawucwswu; ogsaaqsaogcqiouy: return $yciaosuiyeieceug; goto iwekmyyccgiyuecc; uqqaiagaeqgqgaiy: if ($this->gymgcceeqssmesiu()) { goto eeqesooyqagwawae; } goto esuiysskoweawsue; wcugqegqsuuuwqao: goto suswcqoyyqkkquuo; goto asiqwuoswmigcaki; miweggwqeiaeweia: $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); goto kqqiegkuqagcqsya; guykyqecgswcsmws: $yciaosuiyeieceug = true; goto kkumywowcoycymeo; wmywuusgukmmaams: goto kqksuugcgsyeoayy; goto gkyawqqcmigqgaiq; ewymsmkkiksgwysk: $mgkceomocowocqyo = ["\x70\145\x72\x6d\141\154\151\x6e\x6b" => $this->iqyukmiuoisswoei()]; goto cmegwsegsosyqcai; oomguqikqokqwgku: foeeqckqsyockkak: goto samwkqgwouggsguc; sggawugoykqcmsug: $mgkceomocowocqyo = ["\143\157\156\146\x69\147\137\160\x61\164\150" => $uiewakwqscemywuo["\x70\x61\x74\x68"]]; goto wkeuuycukmuqiaom; msemumccgceyugmg: goto soqqemyioggmoakg; goto wagqgeqymeqoeuyi; soaccwqimeksgwiw: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); goto wiysogeqqwgioyka; ouamogymawucwswu: $uamcoiueqaamsqma = "\120\110\120\x2c\40\x58\115\114\x2c\x20\x6f\x72\40\130\123\x4c\x20\x66\x69\154\x65\x20\x69\163\40\145\x78\x63\x6c\x75\144\145\144\56"; goto mugqyyeayeyggqqk; wiysogeqqwgioyka: if (!isset($uiewakwqscemywuo["\x73\165\x63\x63\x65\163\163"]) || !$uiewakwqscemywuo["\163\x75\143\x63\x65\163\x73"]) { goto ssoucoucsgccekwe; } goto skkamseieeusycye; qicwaskssogcokgm: $this->lastError = []; goto uguigkcmukuouway; gkyawqqcmigqgaiq: ygcsmkuycoagwyou: goto ooeausyowguqicuo; mwsmsguqqkcwiiuk: $uamcoiueqaamsqma = "\x52\145\x71\165\145\x73\164\40\x6d\x65\164\x68\x6f\144\40\151\163\x20\156\157\164\x20\141\x6c\x6c\157\167\x65\144\x2e\x20\x50\x61\x67\145\40\x63\141\156\x6e\157\x74\x20\x62\145\x20\x63\x61\x63\x68\145\x64\x2e"; goto eeauyscekuckoues; omqiayeucoioqoao: $uamcoiueqaamsqma = "\x51\x75\x65\x72\x79\40\163\164\162\x69\156\x67\x20\x55\122\114\40\151\163\40\x65\170\x63\154\165\144\145\144\x2e"; goto ugqaaewwmkocwwgy; ugqaaewwmkocwwgy: qqewoyookaskiuek: goto wgewmqieuamsoayy; ousiuuwgwkiyikyq: hoeeyiowekaeemko: goto ogsaaqsaogcqiouy; mqicocmqegwukkwg: suswcqoyyqkkquuo: goto qgeugwymkkiacwoc; acsqgiuageaasiyy: goto iekumemscwieugqw; goto oomguqikqokqwgku; cmegwsegsosyqcai: omugkkesagcyagmk: goto wmywuusgukmmaams; wakmayaoqoskekqy: miyqyeiwquwsacsm: goto qmuwoecuacmkwgem; eogwckcymuugikuy: ywqgcegomwaiuquc: goto msemumccgceyugmg; wkeuuycukmuqiaom: qkcyqocqqwmqgqww: goto wakmayaoqoskekqy; qoqskyuuwueqkquk: $uamcoiueqaamsqma = "\103\x75\163\164\x6f\x6d\x69\172\145\x72\40\x70\x72\x65\x76\x69\145\x77\40\151\163\40\x65\x78\x63\154\x75\144\145\x64\56"; goto iwsuawwqomaowuii; owmuceyswmgueasi: eegqyykygiccaoeo: goto mwsmsguqqkcwiiuk; egyyiccaeeiooaua: $mgkceomocowocqyo = ["\160\x65\162\155\x61\154\151\x6e\x6b" => $this->iqyukmiuoisswoei(), "\x65\x78\x63\x6c\165\144\x65\x64\137\x63\x6f\x6f\153\151\x65\x73" => $this->cokqaygwwygweuyk()]; goto scisgsyemmsekgos; wagqgeqymeqoeuyi: wmmggowmigekyoso: goto qoqskyuuwueqkquk; aegysmeecgcgayyw: if (!$this->gooeyogikcusgwuu()) { goto eegqyykygiccaoeo; } goto suqkuqygkkgwyaie; suqkuqygkkgwyaie: if (!$this->cskwmweqysskwckg()) { goto miyqyeiwquwsacsm; } goto soaccwqimeksgwiw; esuiysskoweawsue: if ($this->goecwaaykqoaaagg()) { goto acaqummmoyiemqss; } goto gaomwagkcciesyqy; kymkucucyeoeikim: $uamcoiueqaamsqma = ''; goto usquiuuyiyqaeyiu; usquiuuyiyqaeyiu: $mgkceomocowocqyo = []; goto qicwaskssogcokgm; wyuemgggaqogsmsq: iekumemscwieugqw: goto guykyqecgswcsmws; uguigkcmukuouway: if ($this->kgkoeoeseyuugaao()) { goto foeeqckqsyockkak; } goto uqqaiagaeqgqgaiy; wgewmqieuamsoayy: goto qkcyqocqqwmqgqww; goto kqgcyoscsusgoaqi; iwsuawwqomaowuii: soqqemyioggmoakg: goto wcugqegqsuuuwqao; syiqkaasoueowwui: if (!($this->cskwmweqysskwckg("\x69\x67\156\157\162\145\x64\x5f\x75\162\154\163") && $this->sywgeyscigqsokyg())) { goto omugkkesagcyagmk; } goto giaacoqqqsekcayy; kqgcyoscsusgoaqi: ssoucoucsgccekwe: goto ueigkucgaucgeimc; asiqwuoswmigcaki: acaqummmoyiemqss: goto ciykoyeioqgyaeqo; eeauyscekuckoues: $mgkceomocowocqyo = ["\162\145\x71\165\x65\x73\164\137\155\145\x74\x68\157\x64" => $this->ciyocmkwssocskiy()]; goto eogwckcymuugikuy; cgiscsqwwgqqaeqi: if ($this->cskwmweqysskwckg("\162\x65\x6a\x65\x63\164\x65\x64\x5f\143\157\157\153\x69\x65") && $this->cokqaygwwygweuyk()) { goto ygcsmkuycoagwyou; } goto syiqkaasoueowwui; giaacoqqqsekcayy: $uamcoiueqaamsqma = "\111\x67\156\x6f\162\x65\144\x20\x75\162\154\40\x66\x6f\x75\x6e\144\56"; goto ewymsmkkiksgwysk; ueigkucgaucgeimc: $uamcoiueqaamsqma = "\x4e\x6f\40\x63\157\x6e\146\x69\147\40\146\x69\x6c\x65\40\x66\157\165\156\144\56"; goto sggawugoykqcmsug; kqqiegkuqagcqsya: $yciaosuiyeieceug = false; goto ousiuuwgwkiyikyq; kkumywowcoycymeo: if (!$uamcoiueqaamsqma) { goto hoeeyiowekaeemko; } goto miweggwqeiaeweia; igooksugieceoege: iggyqogweyosuikc: goto omqiayeucoioqoao; skkamseieeusycye: if ($this->cskwmweqysskwckg("\161\x75\145\x72\171\x5f\163\164\x72\x69\156\147") && !$this->koguieumooaesyww()) { goto iggyqogweyosuikc; } goto cgiscsqwwgqqaeqi; scisgsyemmsekgos: kqksuugcgsyeoayy: goto cewmoqyysgsmuiya; mugqyyeayeyggqqk: oqugqwcyomiaaoqu: goto acsqgiuageaasiyy; ooeausyowguqicuo: $uamcoiueqaamsqma = "\105\x78\143\154\165\144\145\144\40\143\157\157\x6b\151\145\40\146\x6f\x75\x6e\x64\x2e"; goto egyyiccaeeiooaua; cewmoqyysgsmuiya: goto qqewoyookaskiuek; goto igooksugieceoege; qmuwoecuacmkwgem: goto ywqgcegomwaiuquc; goto owmuceyswmgueasi; samwkqgwouggsguc: $uamcoiueqaamsqma = "\x52\157\142\157\164\x73\56\x74\x78\164\x20\157\162\40\x2e\150\164\x61\x63\x63\x65\x73\163\40\146\x69\x6c\145\x20\151\x73\x20\x65\170\x63\x6c\165\144\x65\144\x2e"; goto wyuemgggaqogsmsq; qgeugwymkkiacwoc: goto oqugqwcyomiaaoqu; goto emmsycooskoqmgeg; gaomwagkcciesyqy: if ($this->sgsscqasgeyeicoe()) { goto wmmggowmigekyoso; } goto aegysmeecgcgayyw; ciykoyeioqgyaeqo: $uamcoiueqaamsqma = "\x41\x64\155\151\156\x20\157\x72\40\101\112\101\130\40\125\122\x4c\x20\x69\x73\x20\x65\170\x63\154\165\144\x65\x64\56"; goto mqicocmqegwukkwg; iwekmyyccgiyuecc: } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\x70\x74\137\141\154\x6c\x6f\x77\137\164\157\137\157\x70\164\x69\155\151\x7a\x65"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { goto cuumeogeomowqisc; kocqqoyymosmuksu: $yciaosuiyeieceug = false; goto uqokiksoqcwwqgio; wusciwkkckmqigms: goto mqkmcysgoiaouiwm; goto iiiccouaaqsyikae; ocaguquugeamqckq: if (http_response_code() !== 200) { goto ykomgumacooyomsk; } goto eekcoeikaeaaeyii; uaukmuiwskcemcsw: $yciaosuiyeieceug = false; goto sockeswygwcskeuq; qukocuwgakemmyga: return $yciaosuiyeieceug; goto sioekkmekwygemyc; mggeqkcksyaymcsa: cwwmimggaaecmucw: goto uegouoiuyoqkcscg; uegouoiuyoqkcscg: goto ogqmesokykywseys; goto cgyakcqgugqgkqiw; uaqackioaiqwcocy: aomysykcgikegiau: goto cscusseysqygsoiy; ukkcmocamwgiqayu: $this->log("\x50\x61\147\x65\40\151\163\40\156\x6f\164\40\x61\40\62\60\x30\x20\110\x54\124\x50\x20\x72\145\163\160\x6f\x6e\x73\x65\40\141\156\144\40\x63\x61\x6e\x6e\157\164\40\142\x65\x20\x63\141\143\x68\x65\x64\x2e"); goto mwysseaekcsiesmm; ugqwuugsweqgmywk: $this->log("\x53\x65\x61\162\143\150\x20\x70\141\147\145\x20\151\x73\40\x65\170\x63\154\x75\x64\145\144\x2e"); goto uaukmuiwskcemcsw; amgsueumgaguceaa: mqkmcysgoiaouiwm: goto gygwewcqsmwqismo; gmwykkouysyaqwqm: if (!($this->cskwmweqysskwckg("\x73\x65\141\162\143\150") && $this->gouusicsisumuiei())) { goto ikqqskkqqwmwssoo; } goto ugqwuugsweqgmywk; kqswcsysqawkcgye: ogqmesokykywseys: goto wusciwkkckmqigms; ucqmumuygcywwqma: gicyayswqyuoekcq: goto uykousayyomcaeaa; cscusseysqygsoiy: $this->log("\x57\x50\40\x34\60\64\40\160\141\147\x65\x20\x69\x73\x20\x65\170\143\154\165\x64\x65\x64\56"); goto isgwkwacoyimiauk; ukqocwewouckikso: $yciaosuiyeieceug = false; goto ucqmumuygcywwqma; eekcoeikaeaaeyii: if ($this->cskwmweqysskwckg("\144\x6f\x6e\x6f\164\143\x61\143\x68\x65\160\x61\147\x65") && $this->uykysuaiooyewmsc()) { goto awoaooyoeoyeeqee; } goto cogywoqcqummsyus; uougwgeyiokewkkm: kosaqwikueyksqmw: goto gommacygsykyussk; uqokiksoqcwwqgio: uiosisocuwokwkie: goto qukocuwgakemmyga; uimeeckqksqeekqq: iikiiioqiyegyaak: goto iuuuususuuuaieem; qmkaeeomgkwggoyo: if (strlen($moooemyaqewumiay) <= 255) { goto iikiiioqiyegyaak; } goto csammceowmqwaamq; mkwkkmkgiqiamacc: goto cwwmimggaaecmucw; goto uaqackioaiqwcocy; csammceowmqwaamq: if (!$this->ocysssyiuaueqiei("\x6c\x65\166\145\154\55\x31")) { goto kosaqwikueyksqmw; } goto ocaguquugeamqckq; isgwkwacoyimiauk: $yciaosuiyeieceug = false; goto mggeqkcksyaymcsa; gcckqucukawcasgk: $yciaosuiyeieceug = true; goto qmkaeeomgkwggoyo; cogywoqcqummsyus: if ($this->cskwmweqysskwckg("\167\x70\x5f\x34\60\x34") && $this->kmmyuiwaogukwqqi()) { goto aomysykcgikegiau; } goto gmwykkouysyaqwqm; iiiccouaaqsyikae: ykomgumacooyomsk: goto ukkcmocamwgiqayu; cgyakcqgugqgkqiw: awoaooyoeoyeeqee: goto eeyyskqsmquyquqw; eeyyskqsmquyquqw: $this->log("\x44\x4f\x4e\x4f\x54\103\x41\103\110\x45\120\101\x47\x45\x20\151\x73\40\x64\145\146\x69\156\x65\144\x2e\40\120\141\147\145\40\143\141\156\156\157\164\40\x62\x65\40\x63\141\143\x68\145\144\x2e"); goto ewscugeuicukkycc; ewscugeuicukkycc: $yciaosuiyeieceug = false; goto kqswcsysqawkcgye; uykousayyomcaeaa: goto uiosisocuwokwkie; goto uimeeckqksqeekqq; mwysseaekcsiesmm: $yciaosuiyeieceug = false; goto amgsueumgaguceaa; cuumeogeomowqisc: $this->lastError = []; goto gcckqucukawcasgk; iuuuususuuuaieem: $this->log("\102\165\x66\x66\145\162\x20\x63\157\156\164\145\156\164\x20\165\156\144\x65\162\40\x32\x35\x35\40\143\x61\x72\141\x63\164\x65\x72\x73\56\72\x20{$moooemyaqewumiay}"); goto kocqqoyymosmuksu; gygwewcqsmwqismo: goto gicyayswqyuoekcq; goto uougwgeyiokewkkm; gommacygsykyussk: $this->log("\156\157\164\x20\x61\154\154\157\167\x20\164\157\40\x6f\160\x74\x69\155\x69\172\145\x20\x74\150\151\x73\x20\x70\141\147\145\56"); goto ukqocwewouckikso; sockeswygwcskeuq: ikqqskkqqwmwssoo: goto mkwkkmkgiqiamacc; sioekkmekwygemyc: } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { goto gamqcwuwkikwqoay; wkwamkgkwykeqkec: ieqesiiageaauiuw: goto oimkeqocuguqqsqk; wsesqmcqoiyyqkqi: yiowgigkkwsoqcci: goto mogkoocsoeuyoqqa; oimkeqocuguqqsqk: return $umuecysoywoumgwo; goto oeocukauoyosicso; gamqcwuwkikwqoay: $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); goto mscyggqcesgqqksu; oyeyomcgkmgymogq: $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto iesekaeqeomeuaui; mscyggqcesgqqksu: if (!$ymqmyyeuycgmigyo) { goto yiowgigkkwsoqcci; } goto oyeyomcgkmgymogq; mogkoocsoeuyoqqa: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); goto wkwamkgkwykeqkec; iesekaeqeomeuaui: goto ieqesiiageaauiuw; goto wsesqmcqoiyyqkqi; oeocukauoyosicso: } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { goto iwsmmkqaoksmocok; suqcsgaosywaauuu: $ucasskoyoewwmmii = ["\162\x6f\142\x6f\164\163\x2e\164\x78\164", "\x2e\x68\x74\141\x63\x63\145\x73\x73"]; goto wwukgaquuyoissgy; mscgewkcqcoowweg: yykqaowwsqgqysmq: goto suqcsgaosywaauuu; qiiigwkqeoewsuwm: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); goto esaqcqqwuussiiwo; qsgqwyqaqiowkmco: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto yqagomygmeoecwey; iwsmmkqaoksmocok: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto suqceasgacskcmkc; } goto esikeyqyuikmaiek; ikqeeaysmqgcgawq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto mscgewkcqcoowweg; gsygwgsiawgmqiyi: kwiggogcgciwuwqk: goto qsgqwyqaqiowkmco; esaqcqqwuussiiwo: if ($iyiwooigkweeewey) { goto yykqaowwsqgqysmq; } goto ikqeeaysmqgcgawq; wwukgaquuyoissgy: foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { goto yoqakewookqoqacm; yuimwyoywaiiqacs: ikuuiauwouuqawuw: goto ocywegekakimmwcq; gswcoeiisamakwii: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goto yuimwyoywaiiqacs; ocywegekakimmwcq: uckewycoogsogwiy: goto emqswoaawgeyosmi; yoqakewookqoqacm: if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto ikuuiauwouuqawuw; } goto gswcoeiisamakwii; emqswoaawgeyosmi: } goto gsygwgsiawgmqiyi; esikeyqyuikmaiek: return $this->eecucukcqkqysiau(__FUNCTION__); goto okkmcocqokkskasy; okkmcocqokkskasy: suqceasgacskcmkc: goto qiiigwkqeoewsuwm; yqagomygmeoecwey: } public function sywgeyscigqsokyg() : bool { goto aiccyaswigkaycqk; mysueeoswqgccmui: if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto usymasgsyqgsuocg; } goto egmayaiikwsskgmy; zayqqeqgcwkekwws: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); goto aueaceeyommgkicu; yuuyikiacmmueosu: eucqomyqykgoiuge: goto sguskaeaaqcagqgc; agkmiayuawacakau: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto syuaummumssgwwee; sqyokemumceysegy: return $this->eecucukcqkqysiau(__FUNCTION__); goto oqousikwiiqagoyw; oqousikwiiqagoyw: qikaewekoecykeou: goto zayqqeqgcwkekwws; ucuoeymyqeokgsya: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goto yuuyikiacmmueosu; aiccyaswigkaycqk: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qikaewekoecykeou; } goto sqyokemumceysegy; aueaceeyommgkicu: $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); goto mysueeoswqgccmui; egmayaiikwsskgmy: if (!($meyiiwcswqmuggyg[0] == $iyiwooigkweeewey)) { goto eucqomyqykgoiuge; } goto ucuoeymyqeokgsya; sguskaeaaqcagqgc: usymasgsyqgsuocg: goto agkmiayuawacakau; syuaummumssgwwee: } public function gymgcceeqssmesiu() : bool { goto egsycocugqyyswsi; gqmewagyagamokok: uoeasoimegouymka: goto sqmoqymckwsogsqg; aoquoewagkseayug: oocuemosmeeekgas: goto osuscoaaomwcqkew; ceiwqkyquikcemmo: $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); goto ukomuiwukymcoaso; cgmgqucewwssmicq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto mkomygccqkmkumsi; osuscoaaomwcqkew: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); goto ciucewqgyoiouesq; ussceseaimqywuiy: if (!(strtolower($iyiwooigkweeewey) === "\57\151\156\x64\x65\x78\x2e\160\150\x70")) { goto uoeasoimegouymka; } goto oyiuemaaykgkqqam; egsycocugqyyswsi: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oocuemosmeeekgas; } goto qiaimmucomukkeka; qiaimmucomukkeka: return $this->eecucukcqkqysiau(__FUNCTION__); goto aoquoewagkseayug; mkomygccqkmkumsi: qkcsykuocwuyaice: goto ussceseaimqywuiy; sqmoqymckwsogsqg: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); goto uycesqqkoeamocgm; ukomuiwukymcoaso: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); goto wkgskiuiukiuyque; oyiuemaaykgkqqam: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto gqmewagyagamokok; ciucewqgyoiouesq: if ($iyiwooigkweeewey) { goto qkcsykuocwuyaice; } goto cgmgqucewwssmicq; uycesqqkoeamocgm: $wscgwsmykwacamuy = ["\160\150\x70" => 1, "\x78\x6d\x6c" => 1, "\170\x73\154" => 1]; goto ceiwqkyquikcemmo; wkgskiuiukiuyque: } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\104\117\x49\x4e\107\137\101\112\101\130") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\x5f\143\x75\x73\164\x6f\155\151\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\124" => 1, "\x48\x45\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { goto easqmyamcmeesgya; wmumywgyyeagqoeq: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); goto smcguieygyqcaqgs; eckcqesiokgwkkiw: $yccgiaiouekkouay = [ "\x6c\141\x6e\x67" => 1, "\x70\x72\x65\x6c\x6f\141\x64" => 1, "\x6f\160\164\x2d\160\x72\145\154\157\x61\x64" => 1, "\x70\x65\x72\155\x61\154\x69\156\153\x5f\x6e\141\x6d\145" => 1, "\x6c\160\55\166\x61\x72\x69\141\164\x69\x6f\x6e\55\x69\x64" => 1, ]; goto ecouwqosmoyyqmkw; yoagcooekomeokwg: goqmywuiicciasyk: goto eckcqesiokgwkkiw; easqmyamcmeesgya: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oyiuyywyeoskckuw; } goto yuqgwwmqwqiuwmaw; mmgmqogugasaqkgg: qkuiwoqksgayqqmg: goto wmumywgyyeagqoeq; quaqmuusokiyqgqe: oyiuyywyeoskckuw: goto smiemmcqqukyguuu; mqiiqkuaoekeuswo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goto qmoocweoekqueuyy; yuqgwwmqwqiuwmaw: return $this->eecucukcqkqysiau(__FUNCTION__); goto quaqmuusokiyqgqe; sgiwoiscywusgmmm: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\143\x68\145\x5f\161\165\x65\x72\171\137\x73\x74\162\151\156\147\x73"); goto skuqigsokaguscas; smcguieygyqcaqgs: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); goto mgcuiguaomoqwwwm; skuqigsokaguscas: if ($yccgiaiouekkouay) { goto qkuiwoqksgayqqmg; } goto quyogmwugsyoaaiu; quyogmwugsyoaaiu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto mmgmqogugasaqkgg; qmoocweoekqueuyy: siecswkggyikqkga: goto sgiwoiscywusgmmm; ecouwqosmoyyqmkw: if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto siecswkggyikqkga; } goto mqiiqkuaoekeuswo; smiemmcqqukyguuu: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); goto iksewmsaugayqaqq; yamyagayiooyeekg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goto yoagcooekomeokwg; iksewmsaugayqaqq: if ($eyagkkkqkwcuygso) { goto goqmywuiicciasyk; } goto yamyagayiooyeekg; mgcuiguaomoqwwwm: } public function cokqaygwwygweuyk() { goto iwueukqcywkiyqge; owuuuiekkaeoeacq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto saauykgakaeiyoua; suuskagowwgsouqw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto omykokikgocoikec; kaiesowkgwogqseg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goto kicwiowcogmauwiy; omykokikgocoikec: eyiwqgqcsqakwqss: goto csieaismmmocyacu; kicwiowcogmauwiy: yuoeumyiuqkuouey: goto cwswueuqoamqasya; mykiyqcqiegkiqys: sckioayasmkcoeoo: goto agemwookwseyycqo; cwswueuqoamqasya: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); goto kgmeiwiakwicgkkk; ykwasaaoeeiuomim: return $this->eecucukcqkqysiau(__FUNCTION__); goto acggikioyeueeowg; acggikioyeueeowg: eoyiumycaigawmmc: goto cwikoaeqmmoimmso; aquqkiggamaoegoo: foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { goto osmmoyqkqoucsgow; wgiygcmqaokywuqa: $eiocugauqgouiuyi[] = $aecgggeoymywyumm; goto iauwuugggmegwisk; osmmoyqkqoucsgow: if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto ooqksueucyagyuoe; } goto wgiygcmqaokywuqa; aukucaieceiwesmm: yssqmyoaokkksukc: goto kqyoakickmseyyeq; iauwuugggmegwisk: ooqksueucyagyuoe: goto aukucaieceiwesmm; kqyoakickmseyyeq: } goto mykiyqcqiegkiqys; csieaismmmocyacu: $eiocugauqgouiuyi = []; goto aquqkiggamaoegoo; iwueukqcywkiyqge: if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eoyiumycaigawmmc; } goto ykwasaaoeeiuomim; agemwookwseyycqo: if (empty($eiocugauqgouiuyi)) { goto micceocwuwkyusic; } goto cquecqekuucwoumw; cquecqekuucwoumw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); goto koiscokkkaimiecq; koiscokkkaimiecq: micceocwuwkyusic: goto owuuuiekkaeoeacq; egaymskkosukqeao: if ($osqkgokmuiasuukg) { goto yuoeumyiuqkuouey; } goto kaiesowkgwogqseg; cwikoaeqmmoimmso: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); goto egaymskkosukqeao; kgmeiwiakwicgkkk: if ($eymuoguywceaakys) { goto eyiwqgqcsqakwqss; } goto suuskagowwgsouqw; saauykgakaeiyoua: } public function uykysuaiooyewmsc() : bool { goto mqimkwickkgqqeoi; mqimkwickkgqqeoi: if (!(!defined("\117\120\124\111\x4d\x49\132\x41\x54\x49\117\x4e\x5f\x44\x4f\x4e\124\137\103\101\103\110\105\137\x50\101\x47\105") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto qwemkcoaseywkuuc; } goto kwyimqumkuuyaiku; kwyimqumkuuyaiku: return false; goto gkqiqaqecmoogmaa; gkqiqaqecmoogmaa: qwemkcoaseywkuuc: goto mceucsaeouuwyumm; mceucsaeouuwyumm: return !apply_filters("\x63\x61\x63\150\145\x5f\157\x76\145\162\162\151\x64\145\x5f\144\x6f\x6e\164\137\143\141\x63\150\145\137\x70\141\x67\x65", false); goto ceiuqsiqgiuiekem; ceiuqsiqgiuiekem: } public function kmmyuiwaogukwqqi() : bool { return !function_exists("\x69\x73\x5f\x34\x30\x34") || is_404(); } public function gouusicsisumuiei() : bool { goto ugykmcouiwiscoqu; wiwoiyoakywqyaiy: gsymkkskwsgggoic: goto igmmqwyawcuuckkq; isewysikysqewkis: return false; goto wiwoiyoakywqyaiy; ugykmcouiwiscoqu: if (!(function_exists("\151\x73\137\x73\x65\141\x72\143\x68") && !is_search())) { goto gsymkkskwsgggoic; } goto isewysikysqewkis; igmmqwyawcuuckkq: return !apply_filters("\143\x61\143\150\x65\x5f\143\141\x63\150\145\137\x73\145\x61\162\x63\x68", false); goto eouwacqiommmeaqc; eouwacqiommmeaqc: } public function iqyukmiuoisswoei() : string { goto uscokkmquayiukag; ykqsuiyyosyeyscc: if (!$iyiwooigkweeewey) { goto sqwuqegeiisoiiuq; } goto ugogoekeckgcmuaw; egesuwkqkmaigaoe: sqwuqegeiisoiiuq: goto syusgosewwkoagoq; ugogoekeckgcmuaw: $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); goto egesuwkqkmaigaoe; syusgosewwkoagoq: return $iyiwooigkweeewey; goto mcqucouuiuoagqwc; uscokkmquayiukag: $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\125\x45\123\124\137\125\122\x49", ''); goto ykqsuiyyosyeyscc; mcqucouuiuoagqwc: } public function mcqmgiwowqqyiewk() : string { goto icumkkykaoqycqqu; kyiwsiakwgiwouyi: eweaaismksecwagy: goto awgmegueeqeyqamu; owgsameoayaogsma: $iyiwooigkweeewey = reset($iyiwooigkweeewey); goto kyiwsiakwgiwouyi; icumkkykaoqycqqu: if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto eweaaismksecwagy; } goto oeamoqweiueaueay; awgmegueeqeyqamu: return $iyiwooigkweeewey; goto gqimwsyemoewagcy; oeamoqweiueaueay: $iyiwooigkweeewey = explode("\x3f", $iyiwooigkweeewey); goto owgsameoayaogsma; gqimwsyemoewagcy: } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\x55\x45\x53\124\x5f\115\x45\124\110\117\104", '')); } public function sgqsyoyomwumyoky() : array { goto maaisuqwkymeguys; sksgcusuyqcwqswe: if (!$ouwwgcimmokaqgeq) { goto esagiiawomyacuiw; } goto ayceeyuocgowqwsa; aeiemwacaiygemmg: ksort($eyagkkkqkwcuygso); goto yyqygaokeccgugos; kwuckkyqaygwgcuy: return $eyagkkkqkwcuygso; goto giuccakymqymawgk; oeusomaaeekakake: esagiiawomyacuiw: goto kwuckkyqaygwgcuy; yggseoaommssscwo: if (!$eyagkkkqkwcuygso) { goto aoaqwygkaagiuuws; } goto aeiemwacaiygemmg; maaisuqwkymeguys: $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); goto qkyciyiwkmgkmquk; yyqygaokeccgugos: aoaqwygkaagiuuws: goto oeusomaaeekakake; ayceeyuocgowqwsa: $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\x63\x68\145\x5f\151\x67\156\x6f\162\x65\144\x5f\x70\141\162\x61\155\145\164\145\x72\x73"); goto iuwkiyimqmgguose; qkyciyiwkmgkmquk: $eyagkkkqkwcuygso = []; goto sksgcusuyqcwqswe; iuwkiyimqmgguose: $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); goto yggseoaommssscwo; giuccakymqymawgk: } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log($uamcoiueqaamsqma, $mgkceomocowocqyo = []) { goto eqiiaokcgakicaye; gcucsowqoeiwmyyq: $eawuoscsaksyqwiw = $this->mskuyeumceaigegs(); goto kyiuewcikkqagwwg; wwcqoeuwskquakwy: $eawuoscsaksyqwiw->uimukyawykswgwsm("\144\x65\146\x61\x75\154\164", $eawuoscsaksyqwiw::INFO_CODE, $uamcoiueqaamsqma, $mgkceomocowocqyo); goto quamuugoocyyceec; omuauimgkygcecsc: sicgyiyiocyygkoc: goto wwcqoeuwskquakwy; aumowowgewgqmwci: error_log($uamcoiueqaamsqma); goto oasggeyceiyieuuo; eqiiaokcgakicaye: if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto ikcwmsgocyuqiumc; } goto gcucsowqoeiwmyyq; kyiuewcikkqagwwg: if ($eawuoscsaksyqwiw && is_a($eawuoscsaksyqwiw, "\120\155\160\x72\134\103\x6f\155\x6d\x6f\x6e\134\x46\157\x75\x6e\144\x61\x74\151\157\x6e\x5c\x4c\x6f\147\x67\x65\x72\x5c\x45\x6e\147\x69\156\x65")) { goto sicgyiyiocyygkoc; } goto aumowowgewgqmwci; qcssigmcayuyweiy: ikcwmsgocyuqiumc: goto iymaiwqimisgacmk; quamuugoocyyceec: cyosacayacumuaks: goto qcssigmcayuyweiy; oasggeyceiyieuuo: goto cyosacayacumuaks; goto omuauimgkygcecsc; iymaiwqimisgacmk: } }
