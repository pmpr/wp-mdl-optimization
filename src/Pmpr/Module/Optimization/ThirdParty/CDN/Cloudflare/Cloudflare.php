<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6658781c3e0dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; class Cloudflare extends Common { public function ikcgmcycisiccyuc() { $this->guyooeyuaoocssog(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\151\x6e\151\164", [$this, "\171\x65\x79\x69\x67\165\x79\145\147\x6d\x6d\171\x75\163\145\141"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(self::suyoqewagugqoeuy . self::yyicwqsqaecyqwco, [$this, "\171\x75\x73\157\157\145\x75\167\145\155\x6f\x71\143\167\x6d\x6d"], 10, 0); } public function mameiwsayuyquoeq() { Purge::symcgieuakksimmu(); Setting::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto ccyiggckemwgooco; } Ajax::symcgieuakksimmu(); ccyiggckemwgooco: } public function init() { $this->enqueue(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wigqmiauciuswcom = $eiicaiwgqkgsekce->ekcymmyqoceukosc(); if (!$yyauwyaeewsickwk->skksumsyamssouqc($wigqmiauciuswcom, "\57\155\x2f")) { goto umamqqwcoewcigew; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($yyauwyaeewsickwk->wiecmkiugmyyqiqc("\x2f\155\57", "\x2f", $eiicaiwgqkgsekce->ekcymmyqoceukosc(true))); exit; umamqqwcoewcigew: } public function yeyiguyegmmyusea() { $this->osiqmmmksqqmscmc(); if (!$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { goto gaiaucesmcqgqwac; } $wewwcsywcagywaay = $this->uykissogmuaaocsg()->omimwscgequgiaue(); if (!is_wp_error($wewwcsywcagywaay)) { goto swkeiggkawwgewuw; } $this->cimaucgayqyyccoc(sprintf(__("\x50\154\x65\141\x73\x65\x20\x63\157\x6d\160\x6c\x65\164\145\x20\x63\x6c\157\x75\x64\146\154\141\162\x65\40\164\x61\x62\x20\151\156\146\157\x72\155\141\164\x69\x6f\x6e\x3a\x20\45\163", PR__MDL__OPTIMIZATION), $this->gcsweumukyckmgik($wewwcsywcagywaay)), "\x63\x66\x2d\x6e\157\164\x2d\x76\141\x6c\151\144\55\x63\x6f\x6e\146\151\147"); swkeiggkawwgewuw: gaiaucesmcqgqwac: } public function osiqmmmksqqmscmc() { if (!$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { goto smkakiyekkqoggao; } $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if ($this->weysguygiseoukqw(Setting::iqksqseqeqmaukkk)) { goto wmycwscioqackeig; } $qeqooyuoiasweuck = []; if (!$this->weysguygiseoukqw(Setting::yeeemccgmikyeiqq)) { goto sikmqkecsiyciaei; } $eggwswqquakgowom = $goqqimcssiyagkwy->iqokecwcgkaookuc(); if (is_wp_error($eggwswqquakgowom)) { goto yyyyawaqcowsgqcs; } if (!is_array($eggwswqquakgowom)) { goto qwsmiaegmcwuskwi; } $this->uiagwusgwcassqua("\103\x6c\157\165\x64\146\154\x61\x72\x65\40\172\157\x6e\145\151\144\163\40\146\x65\x74\143\x68\145\x64\x20\163\165\143\x63\145\x73\x73\x66\165\x6c\x6c\x79\x2e", $eggwswqquakgowom); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wegekcwgakqeqsmq = $this->weysguygiseoukqw(Setting::uksumkeyuauyuiqm, Setting::fsekswokoseswcqm); $kwyuqamwgumokoac = $this->goewgasukwccacim(); if ($wegekcwgakqeqsmq === Setting::eywauigiwgqckygk) { goto miigqygoawqmkkqm; } if (!in_array($kwyuqamwgumokoac, $eggwswqquakgowom, true)) { goto aacaoywsaqscgyua; } if (!($kkuqeemoawuaqiwu = $gkyciwoiiisgywcs->get(array_flip($eggwswqquakgowom), $kwyuqamwgumokoac))) { goto oaskqsoyesmmeaew; } $qeqooyuoiasweuck[Setting::iqksqseqeqmaukkk] = $kkuqeemoawuaqiwu; $qeqooyuoiasweuck[Setting::kwuagsmkgsoqgqqi] = self::ON; oaskqsoyesmmeaew: aacaoywsaqscgyua: goto yywwaaiicukuwcao; miigqygoawqmkkqm: $cqwquiiwkgakwmam = $this->weysguygiseoukqw(Setting::kiuyeswmgaikeiuo); if (!$cqwquiiwkgakwmam) { goto kuimgwmkcgcoecko; } $qeqooyuoiasweuck[Setting::iqksqseqeqmaukkk] = $gkyciwoiiisgywcs->get($eggwswqquakgowom, $cqwquiiwkgakwmam); $qeqooyuoiasweuck[Setting::kwuagsmkgsoqgqqi] = self::ON; kuimgwmkcgcoecko: yywwaaiicukuwcao: if (!$gkyciwoiiisgywcs->get($qeqooyuoiasweuck, Setting::kwuagsmkgsoqgqqi)) { goto wmcucyuieqgqisis; } $sogksuscggsicmac = $goqqimcssiyagkwy->eigwgcuaamoqkuyw(); if (!is_wp_error($sogksuscggsicmac)) { goto qcwkymcgqacaaywc; } foreach ($qeqooyuoiasweuck as $amakmumgguksgmum => $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($amakmumgguksgmum, $eqgoocgaqwqcimie); ywqouwqomiqwoquu: } eykiuqsamowqykam: qcwkymcgqacaaywc: wmcucyuieqgqisis: qwsmiaegmcwuskwi: goto usmagcaocwiugqum; yyyyawaqcowsgqcs: $this->cimaucgayqyyccoc($this->gcsweumukyckmgik($eggwswqquakgowom), self::suyoqewagugqoeuy . "\147\x65\164\x5f\x7a\157\156\x65\x5f\151\x64", self::imkacwmiuiykyuim); usmagcaocwiugqum: sikmqkecsiyciaei: wmycwscioqackeig: if ($this->yoaiuuuwwssswyqa()) { goto imykswegcuekqwio; } $wquasmyyscuqaqom = $goqqimcssiyagkwy->ymkgoumkoycwwmmq(); if ($wquasmyyscuqaqom && !is_wp_error($wquasmyyscuqaqom)) { goto iuooqassskiyeemo; } $iswcokucwmiosiaq = $this->gcsweumukyckmgik($wquasmyyscuqaqom); if (!is_wp_error($wquasmyyscuqaqom)) { goto wammkmaqucqagqww; } $this->cimaucgayqyyccoc($iswcokucwmiosiaq, self::suyoqewagugqoeuy . "\147\145\x74\x5f\144\x65\x76\x5f\x6d\157\144\x65", self::imkacwmiuiykyuim); wammkmaqucqagqww: $this->oaumimwssciwumys("\x43\x61\156\40\x6e\157\164\40\x67\145\x74\40\x64\x65\166\145\x6c\157\160\155\145\156\164\40\x6d\157\144\x65\40\144\141\x74\x61\56\40{$iswcokucwmiosiaq}"); goto cquyuwsisgqscemm; iuooqassskiyeemo: $this->awwuyycwuuuggkqy($wquasmyyscuqaqom); cquyuwsisgqscemm: imykswegcuekqwio: if (!$this->yusooeuwemoqcwmm()) { goto mqaamqyoywyekiko; } $gyamuieuowceasyo = $this->weysguygiseoukqw(Setting::aamcsokqosuccmmw); $wesqeosimkuoiogg = $this->weysguygiseoukqw(Setting::waigouyyouwkmeak); if (!(!$gyamuieuowceasyo || !$wesqeosimkuoiogg)) { goto ykuqeyogsasokqis; } $sogksuscggsicmac = $goqqimcssiyagkwy->eigwgcuaamoqkuyw(true); if (!is_wp_error($sogksuscggsicmac)) { goto eokikuciuqkyauum; } $this->cimaucgayqyyccoc($this->gcsweumukyckmgik($sogksuscggsicmac), self::suyoqewagugqoeuy . "\x65\x6e\x61\142\x6c\145\x5f\160\141\147\145\x5f\x63\x61\x63\150\x65", self::imkacwmiuiykyuim); eokikuciuqkyauum: ykuqeyogsasokqis: mqaamqyoywyekiko: smkakiyekkqoggao: } public function enqueue() { $seiwgiesegcmssam = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto zggweikegkcgkmma; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\x62\x75\163\164\145\162")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\142\x75\x73\164\x65\x72\56\152\x73"))->yiuoscqaekcgiyuy("\144\141\164\x61\x2d\x63\x66\141\163\171\x6e\143", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); zggweikegkcgkmma: if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto yisoawmmammassqk; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\x63\x6c\157\x75\144\146\x6c\141\162\145", ["\x62\165\163\164\145\x72" => self::kakkwkmmmaykeoeq, "\163\145\x6c\145\143\x74\157\162" => "\x61"]); goto gcsosokicycukoyc; yisoawmmammassqk: $eygsasmqycagyayw->ikqyiskqaaymscgw("\143\154\x6f\x75\x64\x66\154\x61\x72\145", ["\141\x6a\x61\170" => Ajax::myikkigscysoykgy, "\x73\x65\154\145\x63\x74\x6f\162" => implode("\54\40", ["\43\x65\x64\151\x74\157\162\40\56\145\144\x69\x74\157\162\55\160\x6f\x73\x74\55\160\x65\162\x6d\x61\x6c\151\156\x6b\x5f\x5f\154\151\x6e\x6b", "\43\167\160\55\x61\144\155\x69\156\x2d\x62\141\162\55\x6d\171\55\x73\x69\x74\x65\163\55\x6c\x69\163\164\x20\x61", "\43\x65\144\151\x74\157\162\x20\x2e\x65\144\151\164\x6f\162\55\160\157\163\164\x2d\x70\x72\x65\166\x69\x65\167", "\43\x77\x70\55\x61\x64\x6d\151\156\55\142\x61\162\55\x73\x69\164\145\55\x6e\141\x6d\x65\x20\141", "\x23\x77\160\x2d\x61\x64\155\151\156\x2d\142\141\x72\55\x76\x69\145\x77\55\x73\151\164\145\x20\x61", "\43\x73\141\x6d\x70\154\145\55\160\x65\x72\x6d\141\x6c\151\x6e\x6b\x20\141", "\x23\x77\160\55\x61\144\x6d\151\x6e\x2d\142\x61\162\x2d\x76\151\145\x77\x20\x61", "\43\145\x64\x69\x74\157\x72\x20\56\151\163\55\154\x69\156\153", "\x2e\x72\157\167\x2d\141\x63\x74\151\x6f\156\163\x20\x61", "\x23\155\x65\163\163\x61\147\x65\40\x61", "\56\160\x72\145\166\151\x65\167"]), "\142\165\163\x74\145\162" => self::kakkwkmmmaykeoeq, "\x70\x75\x72\147\145\137\160\157\x73\164\x5f\x63\x61\x63\150\145" => ["\164\151\x74\154\145" => __("\x50\x75\x72\x67\x65\40\120\x6f\163\x74\40\x43\141\x63\150\x65", PR__MDL__OPTIMIZATION)]]); gcsosokicycukoyc: } public function goewgasukwccacim() { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy(untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq())); preg_match("\43\x5b\136\x2e\135\x2a\x5c\56\x5b\x5e\x2e\135\x7b\x32\54\63\x7d\50\x3f\72\x5c\56\x5b\x5e\x2e\x5d\x7b\62\x2c\x33\175\x29\x3f\44\43", $eeamcawaiqocomwy, $meyiiwcswqmuggyg); return $meyiiwcswqmuggyg[0] ?? ''; } public function guyooeyuaoocssog() { if (!($this->wsaocqmcggmqiskw() && !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim())) { goto seqammocqkyswaim; } $_SERVER["\x48\x54\124\x50\123"] = self::ON; seqammocqkyswaim: } private function wsaocqmcggmqiskw() : bool { $aaqqeciegmgusoye = false; $mqkcyikamyyaqicq = ["\x48\x54\124\x50\137\103\106\x5f\126\111\123\x49\124\117\122", "\110\x54\x54\120\x5f\x58\x5f\106\117\x52\127\x41\x52\104\x45\104\137\120\122\x4f\x54\x4f"]; foreach ($mqkcyikamyyaqicq as $kwsemgmaugsiusqg) { if (!(isset($_SERVER[$kwsemgmaugsiusqg]) && strpos($_SERVER[$kwsemgmaugsiusqg], "\150\164\164\160\163") !== false)) { goto ekgkiioywougquka; } $aaqqeciegmgusoye = true; goto coskmuqsawiaeyqg; ekgkiioywougquka: umccwcqwkoiaakmu: } coskmuqsawiaeyqg: return $aaqqeciegmgusoye; } }
