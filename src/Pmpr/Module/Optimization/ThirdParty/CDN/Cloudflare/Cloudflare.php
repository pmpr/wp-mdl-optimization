<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665875e35aad0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; class Cloudflare extends Common { public function ikcgmcycisiccyuc() { $this->guyooeyuaoocssog(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\151\x6e\x69\x74", [$this, "\x79\x65\171\x69\x67\165\x79\145\147\155\155\x79\165\x73\145\141"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::suyoqewagugqoeuy . self::yyicwqsqaecyqwco, [$this, "\171\165\163\x6f\x6f\145\165\x77\x65\155\157\x71\x63\167\x6d\155"], 10, 0); } public function mameiwsayuyquoeq() { Purge::symcgieuakksimmu(); Setting::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto umamqqwcoewcigew; } Ajax::symcgieuakksimmu(); umamqqwcoewcigew: } public function init() { $this->enqueue(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wigqmiauciuswcom = $eiicaiwgqkgsekce->ekcymmyqoceukosc(); if (!$yyauwyaeewsickwk->skksumsyamssouqc($wigqmiauciuswcom, "\x2f\155\57")) { goto swkeiggkawwgewuw; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($yyauwyaeewsickwk->wiecmkiugmyyqiqc("\x2f\x6d\57", "\57", $eiicaiwgqkgsekce->ekcymmyqoceukosc(true))); exit; swkeiggkawwgewuw: } public function yeyiguyegmmyusea() { $this->osiqmmmksqqmscmc(); if (!$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { goto kuimgwmkcgcoecko; } $wewwcsywcagywaay = $this->uykissogmuaaocsg()->omimwscgequgiaue(); if (!is_wp_error($wewwcsywcagywaay)) { goto gaiaucesmcqgqwac; } $this->cimaucgayqyyccoc(sprintf(__("\120\x6c\145\141\x73\145\40\x63\157\155\160\x6c\x65\x74\145\x20\143\x6c\157\x75\x64\x66\x6c\141\x72\145\40\164\x61\x62\40\x69\156\146\157\162\155\x61\x74\151\x6f\156\x3a\40\45\163", PR__MDL__OPTIMIZATION), $this->gcsweumukyckmgik($wewwcsywcagywaay)), "\x63\146\55\156\157\x74\55\x76\141\x6c\x69\x64\55\143\157\x6e\x66\x69\x67"); gaiaucesmcqgqwac: kuimgwmkcgcoecko: } public function osiqmmmksqqmscmc() { if (!$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { goto zggweikegkcgkmma; } $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if ($this->weysguygiseoukqw(Setting::iqksqseqeqmaukkk)) { goto wammkmaqucqagqww; } $qeqooyuoiasweuck = []; if (!$this->weysguygiseoukqw(Setting::yeeemccgmikyeiqq)) { goto wmycwscioqackeig; } $eggwswqquakgowom = $goqqimcssiyagkwy->iqokecwcgkaookuc(); if (is_wp_error($eggwswqquakgowom)) { goto usmagcaocwiugqum; } if (!is_array($eggwswqquakgowom)) { goto yyyyawaqcowsgqcs; } $this->uiagwusgwcassqua("\103\x6c\x6f\165\x64\x66\154\141\x72\145\x20\172\x6f\156\x65\151\x64\x73\x20\x66\x65\x74\143\150\x65\144\x20\163\165\x63\x63\145\163\x73\146\x75\154\154\x79\x2e", $eggwswqquakgowom); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wegekcwgakqeqsmq = $this->weysguygiseoukqw(Setting::uksumkeyuauyuiqm, Setting::fsekswokoseswcqm); $kwyuqamwgumokoac = $this->goewgasukwccacim(); if ($wegekcwgakqeqsmq === Setting::eywauigiwgqckygk) { goto yywwaaiicukuwcao; } if (!in_array($kwyuqamwgumokoac, $eggwswqquakgowom, true)) { goto miigqygoawqmkkqm; } if (!($kkuqeemoawuaqiwu = $gkyciwoiiisgywcs->get(array_flip($eggwswqquakgowom), $kwyuqamwgumokoac))) { goto aacaoywsaqscgyua; } $qeqooyuoiasweuck[Setting::iqksqseqeqmaukkk] = $kkuqeemoawuaqiwu; $qeqooyuoiasweuck[Setting::kwuagsmkgsoqgqqi] = self::ON; aacaoywsaqscgyua: miigqygoawqmkkqm: goto eykiuqsamowqykam; yywwaaiicukuwcao: $cqwquiiwkgakwmam = $this->weysguygiseoukqw(Setting::kiuyeswmgaikeiuo); if (!$cqwquiiwkgakwmam) { goto oaskqsoyesmmeaew; } $qeqooyuoiasweuck[Setting::iqksqseqeqmaukkk] = $gkyciwoiiisgywcs->get($eggwswqquakgowom, $cqwquiiwkgakwmam); $qeqooyuoiasweuck[Setting::kwuagsmkgsoqgqqi] = self::ON; oaskqsoyesmmeaew: eykiuqsamowqykam: if (!$gkyciwoiiisgywcs->get($qeqooyuoiasweuck, Setting::kwuagsmkgsoqgqqi)) { goto qwsmiaegmcwuskwi; } $sogksuscggsicmac = $goqqimcssiyagkwy->eigwgcuaamoqkuyw(); if (!is_wp_error($sogksuscggsicmac)) { goto wmcucyuieqgqisis; } foreach ($qeqooyuoiasweuck as $amakmumgguksgmum => $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($amakmumgguksgmum, $eqgoocgaqwqcimie); qcwkymcgqacaaywc: } ywqouwqomiqwoquu: wmcucyuieqgqisis: qwsmiaegmcwuskwi: yyyyawaqcowsgqcs: goto sikmqkecsiyciaei; usmagcaocwiugqum: $this->cimaucgayqyyccoc($this->gcsweumukyckmgik($eggwswqquakgowom), self::suyoqewagugqoeuy . "\x67\x65\x74\137\172\x6f\x6e\145\137\x69\x64", self::imkacwmiuiykyuim); sikmqkecsiyciaei: wmycwscioqackeig: wammkmaqucqagqww: if ($this->yoaiuuuwwssswyqa()) { goto eokikuciuqkyauum; } $wquasmyyscuqaqom = $goqqimcssiyagkwy->ymkgoumkoycwwmmq(); if ($wquasmyyscuqaqom && !is_wp_error($wquasmyyscuqaqom)) { goto cquyuwsisgqscemm; } $iswcokucwmiosiaq = $this->gcsweumukyckmgik($wquasmyyscuqaqom); if (!is_wp_error($wquasmyyscuqaqom)) { goto iuooqassskiyeemo; } $this->cimaucgayqyyccoc($iswcokucwmiosiaq, self::suyoqewagugqoeuy . "\147\145\164\137\x64\x65\166\x5f\155\x6f\x64\145", self::imkacwmiuiykyuim); iuooqassskiyeemo: $this->oaumimwssciwumys("\103\x61\156\x20\x6e\x6f\x74\40\147\x65\x74\40\144\x65\166\145\154\x6f\x70\x6d\x65\156\x74\40\x6d\157\144\x65\x20\144\x61\x74\x61\56\x20{$iswcokucwmiosiaq}"); goto imykswegcuekqwio; cquyuwsisgqscemm: $this->awwuyycwuuuggkqy($wquasmyyscuqaqom); imykswegcuekqwio: eokikuciuqkyauum: if (!$this->yusooeuwemoqcwmm()) { goto smkakiyekkqoggao; } $gyamuieuowceasyo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw); $wesqeosimkuoiogg = $this->weysguygiseoukqw(Setting::waigouyyouwkmeak); if (!(!$gyamuieuowceasyo || !$wesqeosimkuoiogg)) { goto mqaamqyoywyekiko; } $sogksuscggsicmac = $goqqimcssiyagkwy->eigwgcuaamoqkuyw(true); if (!is_wp_error($sogksuscggsicmac)) { goto ykuqeyogsasokqis; } $this->cimaucgayqyyccoc($this->gcsweumukyckmgik($sogksuscggsicmac), self::suyoqewagugqoeuy . "\x65\x6e\x61\x62\x6c\x65\137\x70\141\x67\145\x5f\x63\141\x63\x68\x65", self::imkacwmiuiykyuim); ykuqeyogsasokqis: mqaamqyoywyekiko: smkakiyekkqoggao: zggweikegkcgkmma: } public function enqueue() { $seiwgiesegcmssam = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto yisoawmmammassqk; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\x62\165\x73\x74\x65\x72")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\142\x75\163\x74\x65\x72\x2e\152\163"))->yiuoscqaekcgiyuy("\x64\x61\x74\141\55\143\x66\x61\x73\x79\156\x63", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); yisoawmmammassqk: if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto gcsosokicycukoyc; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\143\154\157\x75\144\x66\x6c\141\162\x65", ["\x62\x75\x73\164\x65\162" => self::kakkwkmmmaykeoeq, "\x73\145\x6c\x65\143\x74\x6f\162" => "\x61"]); goto seqammocqkyswaim; gcsosokicycukoyc: $eygsasmqycagyayw->ikqyiskqaaymscgw("\x63\154\157\x75\x64\146\x6c\141\x72\x65", ["\x61\x6a\141\170" => Ajax::myikkigscysoykgy, "\x73\145\154\145\143\164\157\162" => implode("\54\40", ["\43\x65\x64\x69\x74\x6f\x72\x20\56\x65\x64\x69\164\157\x72\x2d\160\157\x73\x74\x2d\160\x65\x72\x6d\141\x6c\x69\156\x6b\137\137\x6c\151\x6e\x6b", "\43\167\160\x2d\x61\x64\x6d\151\x6e\x2d\x62\141\x72\x2d\x6d\171\x2d\163\151\164\145\163\55\154\151\x73\164\40\x61", "\43\145\144\151\164\x6f\x72\x20\x2e\x65\x64\x69\x74\x6f\x72\55\160\x6f\163\x74\x2d\160\162\145\x76\151\x65\x77", "\43\167\160\x2d\141\144\155\151\156\55\x62\x61\162\55\163\x69\164\145\55\156\x61\155\x65\40\x61", "\x23\167\x70\55\x61\x64\x6d\151\156\x2d\142\141\x72\x2d\x76\151\x65\167\x2d\x73\x69\164\145\x20\x61", "\43\163\x61\x6d\x70\x6c\x65\x2d\160\145\x72\155\x61\x6c\x69\x6e\x6b\40\x61", "\43\x77\160\x2d\x61\x64\x6d\151\156\x2d\x62\141\162\x2d\166\x69\x65\x77\40\141", "\x23\x65\x64\151\x74\x6f\x72\40\x2e\x69\163\x2d\154\151\156\x6b", "\56\162\157\167\55\x61\143\x74\151\157\156\x73\40\141", "\x23\155\145\x73\x73\141\147\145\40\141", "\x2e\x70\x72\145\166\x69\x65\x77"]), "\x62\165\x73\x74\145\x72" => self::kakkwkmmmaykeoeq, "\160\165\162\147\145\137\160\x6f\163\164\137\x63\x61\x63\x68\x65" => ["\x74\x69\x74\x6c\x65" => __("\x50\165\162\x67\145\40\120\157\163\164\x20\x43\x61\143\x68\145", PR__MDL__OPTIMIZATION)]]); seqammocqkyswaim: } public function goewgasukwccacim() { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy(untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq())); preg_match("\x23\x5b\x5e\56\135\52\134\56\x5b\136\56\135\x7b\x32\x2c\63\175\x28\x3f\72\x5c\x2e\133\x5e\x2e\135\x7b\62\54\x33\175\x29\77\44\x23", $eeamcawaiqocomwy, $meyiiwcswqmuggyg); return $meyiiwcswqmuggyg[0] ?? ''; } public function guyooeyuaoocssog() { if (!($this->wsaocqmcggmqiskw() && !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim())) { goto coskmuqsawiaeyqg; } $_SERVER["\x48\x54\x54\x50\x53"] = self::ON; coskmuqsawiaeyqg: } private function wsaocqmcggmqiskw() : bool { $aaqqeciegmgusoye = false; $mqkcyikamyyaqicq = ["\110\x54\x54\x50\137\103\x46\x5f\126\x49\x53\111\x54\x4f\x52", "\x48\124\124\120\x5f\x58\x5f\106\117\122\x57\101\x52\x44\105\x44\x5f\x50\x52\x4f\x54\x4f"]; foreach ($mqkcyikamyyaqicq as $kwsemgmaugsiusqg) { if (!(isset($_SERVER[$kwsemgmaugsiusqg]) && strpos($_SERVER[$kwsemgmaugsiusqg], "\150\164\x74\x70\163") !== false)) { goto wyyowcsciaqkuiuq; } $aaqqeciegmgusoye = true; goto umccwcqwkoiaakmu; wyyowcsciaqkuiuq: ekgkiioywougquka: } umccwcqwkoiaakmu: return $aaqqeciegmgusoye; } }
