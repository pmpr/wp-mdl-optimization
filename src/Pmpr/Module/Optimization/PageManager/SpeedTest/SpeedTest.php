<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fa68d1c92             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\SpeedTest; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page as PageModel; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class SpeedTest extends Container { use PageManagerEngineTrait; const smsimmcqmsmgyuii = "\x73\160\145\x65\x64\x74\x65\x73\x74"; const quouokcgsyacigiu = "\x73\160\145\x65\144\x5f\x74\145\x73\164"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x69\156\x69\x74", [$this, "\171\x65\x79\151\x67\x75\x79\x65\147\155\155\171\x75\x73\x65\141"])->qcsmikeggeemccuu(Process::eqcogaqyemgysumq, [$this, "\x61\171\153\171\x65\x67\163\x71\x69\x73\x77\155\151\x6d\x75\171"], 10, 2)->qcsmikeggeemccuu(Process::asueeykmyygakoqs, [$this, "\x61\x65\x6b\165\x69\x6f\x6b\x73\x6d\x71\161\143\x63\171\x75\x75"], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\143\x61\x63\x68\145\x5f\x68\164\155\154\137\147\145\156\x65\162\x61\x74\x65\144", [$this, "\x6d\x63\x6b\167\x71\x69\x6f\155\x6d\x65\x69\x79\167\x65\x79\167"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Page::symcgieuakksimmu(); } } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $this->qckwuesaysuoqcuk() && !$this->guaegcucuwakigoa() && !$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\131\x6f\x75\162\40\x73\x69\164\x65\40\x69\163\x20\165\156\x61\x76\x61\x69\154\141\x62\x6c\145\x20\50\45\x73\51\x20\x62\x79\40\x47\x6f\x6f\147\154\145\40\146\x6f\x72\x20\x70\141\x67\x65\x20\163\160\145\145\144\40\164\x65\x73\164\x69\156\147\56", PR__MDL__OPTIMIZATION), "\x48\124\x54\120\x20\123\164\141\164\x75\163\40\103\157\144\145\x20\64\x30\63") . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\115\x6f\x72\x65\40\111\x6e\146\x6f\x72\155\x61\164\151\157\x6e", PR__MDL__OPTIMIZATION), $this->kmuweyayaqoeqiyw()->gamgkoooceoaaeie("\x73\x70\x65\145\144\137\x74\145\x73\164")), "\163\x69\164\x65\x2d\156\x6f\164\x2d\x64\151\x73\160\141\x74\143\x68\x61\142\154\145"); } } public function mckwqiommeiyweyw($esaqeawoigqgagum, $eeamcawaiqocomwy) { if (basename($esaqeawoigqgagum) === "\151\x6e\x64\145\170\x2e\150\164\155\x6c" && $this->gcqaaiygcykaqwym()) { $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); $eeamcawaiqocomwy = $iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy, false); $suaemuyiacqyugsm = $iuekmkswcsacoawq->iekyeyicoyyawomk()->akkkoiiymmamsauc($eeamcawaiqocomwy, Constants::auqoykcmsiauccao); if ($suaemuyiacqyugsm && $iuekmkswcsacoawq->waecsyqmwascmqoa($suaemuyiacqyugsm, $iuekmkswcsacoawq::aewquksqwqiawiei, 0)) { Process::symcgieuakksimmu()->gkimgkucuskgagqo($iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy), $iuekmkswcsacoawq->mwyqswsaeeewsosm($suaemuyiacqyugsm)); } } } public function aykyegsqiswmimuy($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy); if (!is_wp_error($sogksuscggsicmac)) { $this->wkagassgcaqeosio()->qiskoakuecueiauy($qkcoyiyeuoyyoocy, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $eeamcawaiqocomwy, $qkcoyiyeuoyyoocy); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x6e\157\x74\150\x65\x72\40\160\x72\x6f\143\x65\x73\x73\40\141\x6c\x72\x65\141\x64\171\40\163\x74\x61\162\x74\145\144\x2e", PR__MDL__OPTIMIZATION), 401); } } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $syoewmweaqiqswgu = "\x73\160\145\x65\x64\137\164\x65\163\x74\137\161\x75\x65\165\x65\137{$qkcoyiyeuoyyoocy}\137\164\162\x61\x6e\x73\151\x65\156\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $sogksuscggsicmac = $this->paekekswsswiicis($qkcoyiyeuoyyoocy); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { if (!API::symcgieuakksimmu()->goaikaqccaawcswu()) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::quyascocmiiossme, true); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\131\157\x75\162\x20\163\151\x74\x65\x20\x69\163\40\x75\156\141\166\x61\x69\154\x61\142\154\145\40\50\45\163\x29\x20\142\x79\40\107\157\x6f\x67\154\145\x20\x66\x6f\x72\x20\160\141\x67\145\40\x73\160\145\145\x64\40\x74\x65\163\164\151\156\x67\x2e", PR__MDL__OPTIMIZATION), "\110\x54\x54\120\x20\123\164\141\x74\x75\163\x20\103\x6f\144\x65\40\x34\60\x33")); } else { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $qkcoyiyeuoyyoocy); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\145\145\x64\137\164\x65\163\x74\x5f\x72\x65\164\x72\x69\x65\x76\145\137\162\x65\x73\165\154\x74\x5f\146\141\x69\x6c\x65\x64", $qkcoyiyeuoyyoocy); } $sogksuscggsicmac = false; } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\160\145\x65\144\x5f\x74\145\163\x74\x5f\x72\x65\x74\x72\x69\x65\x76\145\x5f\162\x65\163\165\x6c\x74\x5f\x66\x61\151\154\x65\x64", $qkcoyiyeuoyyoocy); } } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\x65\145\144\x5f\x74\x65\x73\164\x5f\x72\145\164\162\x69\145\x76\145\137\x72\x65\163\x75\154\x74\x5f\146\x61\151\x6c\x65\144", $qkcoyiyeuoyyoocy); } return $sogksuscggsicmac; } public function paekekswsswiicis($qkcoyiyeuoyyoocy) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $qkcoyiyeuoyyoocy); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\57\x73\x70\x65\145\144\x74\x65\x73\164\x2e\x6a\163\157\x6e"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\123\x70\145\x65\x64\x20\124\145\163\164\72\x20\112\x53\x4f\x4e\x20\x46\151\x6c\145\x20\x52\145\164\x72\151\145\x76\145\144\56"); return $kuukgsmqkagwaciu; } return false; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x53\160\145\x65\144\40\124\x65\163\164\40\x73\x74\141\164\x75\x73\x20\146\x61\x69\x6c\x65\x64\x3a\x20\x25\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\145\x61\163\157\x6e", ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x53\160\x65\x65\x64\40\124\145\x73\x74\x3a\x20\163\x74\141\x74\x75\163\40\146\141\151\x6c\145\x64\x20\75\x3e\x20\45\163", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\x65\x61\163\157\x6e", ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\123\x70\145\145\144\40\x54\x65\163\x74\72\40\x73\x74\141\164\x75\163\40\x63\157\155\160\x6c\x65\164\145\144"); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if ($sogksuscggsicmac) { $icwicymcioeyeyek = [Model::aaegquasauuywyey => $sogksuscggsicmac[Constants::auugqowqueaocgsu] ?? 0]; $yygmoeguaqyumuui = ["\x73\x63\x6f\162\145", "\x66\143\x70", "\x6c\143\x70", "\x63\x6c\x73", "\164\142\164", "\163\151"]; $yqkagouksaimoyqa = [Constants::mcaucuyeeiwsmmuy, Constants::skogicecygyyskkq]; foreach ($yqkagouksaimoyqa as $ykeeyqcewuccwkeo) { foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $eqgoocgaqwqcimie = $sogksuscggsicmac[$ykeeyqcewuccwkeo][$uusmaiomayssaecw] ?? false; if ($eqgoocgaqwqcimie !== false) { $icwicymcioeyeyek["{$ykeeyqcewuccwkeo}\137{$uusmaiomayssaecw}"] = $eqgoocgaqwqcimie; } } } if ($icwicymcioeyeyek) { $icwicymcioeyeyek[Constants::egukegmcemkeegqq] = $qkcoyiyeuoyyoocy; $sogksuscggsicmac = Model::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $ksaameoqigiaoigg = true; } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\160\145\145\x64\40\124\145\163\x74\72\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])}\x2e"); } } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\x65\x65\144\137\164\x65\163\164\137\162\x65\163\165\154\x74\137\x73\x61\x76\145\x64", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\160\x65\145\x64\137\164\145\x73\164\x5f\162\145\163\165\x6c\164\137\x73\141\166\x65\x5f\x66\141\x69\x6c\145\x64", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\x73\165\x6c\164\40\146\x65\x74\x63\150\x65\x64\x20\142\165\164\40\143\141\x6e\40\156\157\164\x20\163\x61\x76\x65\40\151\x74\56", PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\x70\x65\x65\x64\x20\x54\x65\163\164\72\x20\122\x65\x73\165\x6c\x74\40\x66\x65\x74\143\x68\x65\x64\40\142\x75\164\40\x63\x61\x6e\40\156\157\164\40\163\x61\x76\145\40\151\164\x2e"); } return $ksaameoqigiaoigg; } public function qckwuesaysuoqcuk() : bool { return $this->weysguygiseoukqw(Setting::uauwkaimuwugwwma, false); } public function guaegcucuwakigoa() : bool { return !$this->weysguygiseoukqw(Setting::quyascocmiiossme, false); } public function gcqaaiygcykaqwym() : bool { return $this->qckwuesaysuoqcuk() && $this->guaegcucuwakigoa(); } }
