<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665aeb001123c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use WP_Error; class Engine extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(self::skcaqcukeyugwmke, [$this, "\141\x65\153\165\151\157\153\x73\x6d\161\x71\143\x63\171\x75\x75"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\x69\x72\x74\165\x61\x6c\x5f\x62\162\157\167\x73\x65\162\x5f\143\x68\x65\143\153\x5f\x66\x69\156\151\x73\150\x65\144", [$this, "\141\145\153\165\x69\157\x6b\163\x6d\161\161\143\143\171\165\165"])->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\x69\x72\164\x75\141\154\x5f\142\162\157\167\163\145\162\x5f\x61\x64\144\137\152\157\x62", [$this, "\167\171\163\157\x61\x71\x6b\153\141\x79\x65\165\163\x73\x6d\165"], 10, 3)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\x61\154\137\x62\162\157\x77\x73\145\162\x5f\151\x73\x5f\143\x61\143\150\x65\144", [$this, "\145\x77\x71\151\141\x65\145\147\x65\x6f\145\x6f\147\171\x63\x67"], 10, 2)->aqaqisyssqeomwom(self::kgswyesggeyekgmg . "\166\x69\x72\x74\165\141\x6c\x5f\142\162\157\x77\163\x65\x72\137\147\x65\x74\137\143\141\x63\150\x65\144\137\144\x61\164\141", [$this, "\x77\x67\161\167\143\161\x65\157\151\x73\x77\155\x69\x71\x65\167"], 10, 2); } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "\166\151\x72\164\165\x61\x6c\x5f\x62\x72\157\x77\x73\x65\x72\x5f\x71\165\x65\165\x65\x5f{$sameaqkagyqomooq}\x5f\x74\162\x61\156\163\x69\x65\156\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { goto iwekmyyccgiyuecc; } if (!is_wp_error($sogksuscggsicmac)) { goto ousiuuwgwkiyikyq; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\151\x72\x74\165\141\x6c\x5f\142\x72\157\x77\163\x65\162\137\x72\145\164\x72\x69\x65\x76\x65\x5f\162\x65\x73\165\x6c\x74\x5f\146\x61\151\x6c\x65\144", $sameaqkagyqomooq); goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (!(empty($wciyuagckicucysk) || $wciyuagckicucysk < 0)) { goto wyuemgggaqogsmsq; } $wciyuagckicucysk = 1; wyuemgggaqogsmsq: if ($wciyuagckicucysk <= 3) { goto guykyqecgswcsmws; } $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; goto kkumywowcoycymeo; guykyqecgswcsmws: $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; kkumywowcoycymeo: if ($wciyuagckicucysk <= 10) { goto miweggwqeiaeweia; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\162\164\x75\141\154\x5f\x62\x72\x6f\167\163\145\x72\137\x72\145\x74\x72\151\x65\166\145\x5f\x72\x65\163\x75\x6c\x74\x5f\146\x61\151\154\x65\144", $sameaqkagyqomooq); goto kqqiegkuqagcqsya; miweggwqeiaeweia: $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); kqqiegkuqagcqsya: $sogksuscggsicmac = false; ogsaaqsaogcqiouy: goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); ikqqskkqqwmwssoo: return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); $scwwcyaqyywsweoq = $ycikkiiimgoqqgsq->oqomcmyuuakigusk([Remote::esewkmgyoesiksyw => self::qakegsaikiimcmkc, Remote::eqgewieksoieoqiq => $sameaqkagyqomooq, Remote::ciywsqoeiymemsys => self::eyemmiwoaayukksq]); $ksaameoqigiaoigg = false; if (!($scwwcyaqyywsweoq && ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)))) { goto ogqmesokykywseys; } if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { goto cwwmimggaaecmucw; } if (!($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq))) { goto aomysykcgikegiau; } $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); aomysykcgikegiau: goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); awoaooyoeoyeeqee: ogqmesokykywseys: if (!($scwwcyaqyywsweoq && !$ksaameoqigiaoigg)) { goto ykomgumacooyomsk; } $ksaameoqigiaoigg = $scwwcyaqyywsweoq; ykomgumacooyomsk: return $ksaameoqigiaoigg; } public function wysoaqkkayeussmu(array $icwicymcioeyeyek, int $sameaqkagyqomooq, string $eeamcawaiqocomwy) { if ($this->ysuiqkgycmagqqyu($sameaqkagyqomooq)) { goto uiosisocuwokwkie; } $ccowyogiqwikkkie = []; if (!(self::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(AssetSetting::eoeewcigeywcquis))) { goto mqkmcysgoiaouiwm; } $ccowyogiqwikkkie[] = self::eoeewcigeywcquis; mqkmcysgoiaouiwm: if (!(LazyLoadSetting::ekoiwoksaoemsgky === $this->weysguygiseoukqw(LazyLoadSetting::kmkkamyqcgmygkoi))) { goto kosaqwikueyksqmw; } $ccowyogiqwikkkie[] = self::esoamusawucumuew; kosaqwikueyksqmw: if (!$ccowyogiqwikkkie) { goto iikiiioqiyegyaak; } $icwicymcioeyeyek = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $ccowyogiqwikkkie); if (is_wp_error($icwicymcioeyeyek)) { goto gicyayswqyuoekcq; } Process::symcgieuakksimmu()->mkgmgessyuewwswa($icwicymcioeyeyek[self::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); gicyayswqyuoekcq: iikiiioqiyegyaak: uiosisocuwokwkie: return $icwicymcioeyeyek; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[self::ciywsqoeiymemsys]) { case self::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->oemauiimmycumcsk(sprintf(__("\126\151\x72\x74\165\141\x6c\x20\142\x72\x6f\167\x73\x65\x72\40\x73\164\x61\x74\x75\163\x20\x66\141\x69\154\145\144\x3a\40\45\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\141\163\x6f\156", ''))); $this->oaumimwssciwumys(sprintf("\x56\102\x3a\x20\126\x69\x72\x74\x75\141\154\x20\142\x72\157\x77\163\x65\162\40\x73\x74\x61\x74\x75\163\x20\x66\141\151\x6c\145\144\x20\x3d\x3e\x20\x25\x73", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\x65\x61\163\x6f\156", ''))); goto cuumeogeomowqisc; case self::amcogigwsaqssuai: case self::gymusgeumuwomwuy: $this->oaumimwssciwumys("\126\x42\72\x20\126\x69\x72\x74\x75\x61\x6c\40\x62\x72\157\x77\x73\145\162\40\163\164\x61\x74\x75\x73\x20\143\x6f\155\x70\154\x65\164\145\x64"); if (!($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium))) { goto qmkaeeomgkwggoyo; } $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); qmkaeeomgkwggoyo: goto cuumeogeomowqisc; } gcckqucukawcasgk: cuumeogeomowqisc: return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\57\166\151\x72\x74\x75\x61\154\x2d\x62\x72\x6f\167\x73\145\162\56\x6a\x73\157\156"); if (!(200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu)))) { goto csammceowmqwaamq; } $this->oaumimwssciwumys("\126\102\x3a\40\112\x53\117\x4e\40\106\x69\x6c\x65\x20\122\x65\164\x72\x69\x65\x76\x65\144\x2e"); return $kuukgsmqkagwaciu; csammceowmqwaamq: return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto cogywoqcqummsyus; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (!isset($icwicymcioeyeyek[self::skogicecygyyskkq], $icwicymcioeyeyek[self::mcaucuyeeiwsmmuy])) { goto eekcoeikaeaaeyii; } $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$swyigkueoywiacam->exists($esaqeawoigqgagum)) { goto ocaguquugeamqckq; } $swyigkueoywiacam->remove($esaqeawoigqgagum); ocaguquugeamqckq: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); eekcoeikaeaaeyii: cogywoqcqummsyus: if ($ksaameoqigiaoigg !== false) { goto gmwykkouysyaqwqm; } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\x69\162\x74\165\x61\x6c\137\142\162\157\x77\x73\145\162\x5f\x72\145\x73\x75\x6c\x74\137\x63\141\x63\150\x65\137\146\x61\151\x6c\x65\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x52\145\x73\165\x6c\x74\x20\x66\x65\x74\143\x68\145\x64\40\x62\x75\x74\40\143\x61\156\x20\x6e\x6f\x74\40\x63\141\143\150\145\40\x69\164\x2e", PR__MDL__OPTIMIZATION)); $this->oaumimwssciwumys("\126\x42\x3a\40\122\x65\163\165\154\x74\40\146\x65\x74\143\x68\x65\144\40\x62\x75\164\40\143\141\x6e\40\x6e\x6f\164\40\143\x61\143\150\x65\x20\151\x74\56"); goto ugqwuugsweqgmywk; gmwykkouysyaqwqm: $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\166\151\162\x74\165\x61\154\137\x62\x72\157\x77\x73\145\162\x5f\x72\145\163\x75\154\164\x5f\143\x61\x63\150\145\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); ugqwuugsweqgmywk: return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto sockeswygwcskeuq; } $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if (!$ewgwqamkygiqaawc) { goto uaukmuiwskcemcsw; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); uaukmuiwskcemcsw: sockeswygwcskeuq: return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if (!($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay))) { goto mkwkkmkgiqiamacc; } $esaqeawoigqgagum = "{$skacuygeqykiwiwy}\x2f{$sameaqkagyqomooq}\56\x6a\163\157\156"; mkwkkmkgiqiamacc: return $esaqeawoigqgagum; } }
