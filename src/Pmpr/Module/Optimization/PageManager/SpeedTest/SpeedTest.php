<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675815b20ad5f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\SpeedTest; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page as PageModel; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class SpeedTest extends Container { use PageManagerEngineTrait; const smsimmcqmsmgyuii = "\163\x70\x65\145\x64\164\x65\163\164"; const quouokcgsyacigiu = "\163\x70\145\x65\144\x5f\x74\145\x73\164"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\x69\156\x69\164", [$this, "\171\145\x79\x69\147\165\x79\145\147\155\x6d\x79\x75\x73\145\141"])->qcsmikeggeemccuu(Process::eqcogaqyemgysumq, [$this, "\141\x79\153\171\x65\147\x73\161\151\163\167\155\x69\x6d\165\171"], 10, 2)->qcsmikeggeemccuu(Process::asueeykmyygakoqs, [$this, "\141\145\x6b\x75\x69\157\x6b\x73\x6d\161\161\x63\143\x79\x75\x75"], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\x63\141\143\x68\145\137\150\x74\155\x6c\137\147\x65\x6e\145\162\x61\x74\x65\144", [$this, "\155\x63\153\x77\x71\151\157\155\x6d\145\x69\x79\x77\x65\x79\167"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Page::symcgieuakksimmu(); } } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $this->qckwuesaysuoqcuk() && !$this->guaegcucuwakigoa() && !$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\x59\157\165\x72\40\x73\x69\x74\x65\x20\151\x73\40\x75\x6e\141\166\x61\x69\154\x61\x62\x6c\145\x20\50\45\163\x29\40\x62\x79\40\x47\x6f\157\x67\154\x65\40\146\x6f\162\x20\x70\141\x67\145\x20\163\x70\x65\x65\x64\40\x74\x65\x73\164\151\156\147\56", PR__MDL__OPTIMIZATION), "\x48\124\x54\120\x20\x53\164\141\x74\x75\163\40\x43\x6f\144\x65\40\64\x30\x33") . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\x4d\157\x72\x65\40\111\156\146\x6f\162\x6d\141\x74\151\x6f\156", PR__MDL__OPTIMIZATION), $this->kmuweyayaqoeqiyw()->gamgkoooceoaaeie("\x73\x70\145\145\x64\137\x74\x65\163\x74")), "\x73\x69\164\145\55\156\x6f\164\x2d\144\x69\163\x70\141\x74\x63\150\141\x62\154\x65"); } } public function mckwqiommeiyweyw($esaqeawoigqgagum, $eeamcawaiqocomwy) { if (basename($esaqeawoigqgagum) === "\x69\156\144\x65\170\x2e\x68\164\x6d\154" && $this->gcqaaiygcykaqwym()) { $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); $eeamcawaiqocomwy = $iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy, false); $suaemuyiacqyugsm = $iuekmkswcsacoawq->iekyeyicoyyawomk()->akkkoiiymmamsauc($eeamcawaiqocomwy, Constants::auqoykcmsiauccao); if ($suaemuyiacqyugsm && $iuekmkswcsacoawq->waecsyqmwascmqoa($suaemuyiacqyugsm, $iuekmkswcsacoawq::aewquksqwqiawiei, 0)) { Process::symcgieuakksimmu()->gkimgkucuskgagqo($iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy), $iuekmkswcsacoawq->mwyqswsaeeewsosm($suaemuyiacqyugsm)); } } } public function aykyegsqiswmimuy($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy); if (!is_wp_error($sogksuscggsicmac)) { $this->wkagassgcaqeosio()->qiskoakuecueiauy($qkcoyiyeuoyyoocy, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $eeamcawaiqocomwy, $qkcoyiyeuoyyoocy); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\156\x6f\164\x68\145\x72\40\x70\x72\157\x63\145\163\x73\x20\x61\154\x72\x65\141\144\171\40\163\164\141\x72\x74\x65\144\56", PR__MDL__OPTIMIZATION), 401); } } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $syoewmweaqiqswgu = "\x73\160\x65\145\x64\137\x74\145\163\x74\x5f\161\165\145\x75\x65\x5f{$qkcoyiyeuoyyoocy}\137\164\162\141\156\x73\x69\145\x6e\x74"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $sogksuscggsicmac = $this->paekekswsswiicis($qkcoyiyeuoyyoocy); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { if (!API::symcgieuakksimmu()->goaikaqccaawcswu()) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::quyascocmiiossme, true); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\131\x6f\165\x72\40\163\x69\164\145\x20\x69\x73\x20\165\x6e\141\x76\x61\x69\x6c\141\x62\x6c\145\40\50\x25\x73\51\40\142\171\40\107\x6f\157\x67\154\145\x20\146\x6f\x72\40\x70\141\147\x65\40\163\x70\145\x65\144\40\x74\x65\x73\164\x69\x6e\x67\x2e", PR__MDL__OPTIMIZATION), "\110\124\x54\x50\x20\x53\x74\x61\164\x75\x73\40\x43\157\x64\145\40\64\60\63")); } else { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $qkcoyiyeuoyyoocy); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\x65\145\x64\137\x74\x65\x73\164\x5f\162\x65\164\162\151\x65\x76\x65\x5f\x72\145\163\x75\x6c\164\x5f\x66\141\151\154\145\144", $qkcoyiyeuoyyoocy); } $sogksuscggsicmac = false; } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\x65\145\144\137\x74\145\x73\x74\x5f\162\145\x74\162\x69\x65\x76\x65\137\162\145\x73\165\x6c\x74\137\146\141\151\154\x65\x64", $qkcoyiyeuoyyoocy); } } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\145\145\144\x5f\164\x65\163\x74\x5f\162\x65\x74\162\151\145\166\x65\137\x72\x65\x73\165\x6c\164\137\x66\x61\151\154\145\144", $qkcoyiyeuoyyoocy); } return $sogksuscggsicmac; } public function paekekswsswiicis($qkcoyiyeuoyyoocy) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $qkcoyiyeuoyyoocy); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\x2f\x73\x70\145\x65\x64\164\145\x73\x74\56\x6a\x73\x6f\x6e"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\x70\x65\x65\144\x20\124\x65\x73\164\72\40\x4a\123\117\x4e\x20\106\151\x6c\145\40\122\145\x74\x72\151\145\x76\145\144\56"); return $kuukgsmqkagwaciu; } return false; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x53\x70\x65\x65\x64\x20\x54\145\163\164\x20\x73\x74\141\164\165\x73\x20\146\x61\x69\x6c\x65\x64\72\x20\x25\163", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\141\163\157\x6e", ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\123\x70\x65\145\x64\40\124\145\x73\164\72\x20\x73\x74\141\164\165\x73\40\146\x61\151\x6c\145\x64\x20\x3d\76\x20\x25\163", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\145\141\163\x6f\x6e", ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\160\x65\145\144\40\x54\x65\x73\164\x3a\x20\x73\x74\141\164\165\163\40\143\x6f\155\160\x6c\145\164\145\x64"); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if ($sogksuscggsicmac) { $icwicymcioeyeyek = [Model::aaegquasauuywyey => $sogksuscggsicmac[Constants::auugqowqueaocgsu] ?? 0]; $yygmoeguaqyumuui = ["\163\143\x6f\162\x65", "\146\x63\160", "\x6c\x63\x70", "\143\x6c\163", "\x74\142\x74", "\x73\x69"]; $yqkagouksaimoyqa = [Constants::mcaucuyeeiwsmmuy, Constants::skogicecygyyskkq]; foreach ($yqkagouksaimoyqa as $ykeeyqcewuccwkeo) { foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $eqgoocgaqwqcimie = $sogksuscggsicmac[$ykeeyqcewuccwkeo][$uusmaiomayssaecw] ?? false; if ($eqgoocgaqwqcimie !== false) { $icwicymcioeyeyek["{$ykeeyqcewuccwkeo}\x5f{$uusmaiomayssaecw}"] = $eqgoocgaqwqcimie; } } } if ($icwicymcioeyeyek) { $icwicymcioeyeyek[Constants::egukegmcemkeegqq] = $qkcoyiyeuoyyoocy; $sogksuscggsicmac = Model::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $ksaameoqigiaoigg = true; } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\x70\x65\145\x64\x20\124\x65\163\164\72\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])}\56"); } } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\x65\x65\144\x5f\164\145\163\164\x5f\x72\x65\x73\x75\x6c\x74\x5f\x73\141\x76\145\144", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\160\145\145\x64\x5f\x74\x65\163\x74\x5f\x72\145\x73\165\x6c\x74\137\x73\x61\166\145\x5f\x66\141\x69\154\x65\144", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\x73\x75\x6c\x74\40\x66\x65\x74\x63\x68\145\144\x20\142\165\164\x20\x63\x61\156\x20\x6e\157\x74\40\163\x61\x76\145\x20\x69\164\x2e", PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\x70\145\145\144\40\x54\x65\163\x74\x3a\40\x52\145\x73\x75\x6c\164\x20\x66\x65\164\143\x68\x65\144\40\x62\x75\x74\40\x63\x61\x6e\x20\156\157\164\40\x73\141\x76\x65\40\151\164\56"); } return $ksaameoqigiaoigg; } public function qckwuesaysuoqcuk() : bool { return $this->weysguygiseoukqw(Setting::uauwkaimuwugwwma, false); } public function guaegcucuwakigoa() : bool { return !$this->weysguygiseoukqw(Setting::quyascocmiiossme, false); } public function gcqaaiygcykaqwym() : bool { return $this->qckwuesaysuoqcuk() && $this->guaegcucuwakigoa(); } }
