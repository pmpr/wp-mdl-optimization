<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d83b2421d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Cloudflare; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Notice; class Cloudflare extends Common { const yuwieqykuwacwmuw = self::wowuwuigyoceikas . "\x5f\143\x66\x5f\x63\157\x6f\153\151\x65"; public function __construct() { if (!$this->cyowaaeywssoooeo()) { goto ykuqeyogsasokqis; } parent::__construct(); $this->iemaakgqgqosiecm(); ykuqeyogsasokqis: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\151\x6e\x69\164"])->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\151\156\x69\164", [$this, "\x79\145\x79\x69\x67\x75\x79\x65\147\155\155\x79\x75\x73\x65\141"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\x70\164\137\x62\x65\146\x6f\162\x65\x5f\x73\164\x61\x72\x74\x5f\x70\x72\x65\x6c\x6f\x61\144"), [$this, "\165\171\x73\145\143\x71\x6b\141\x61\x6d\151\153\171\x69\155\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\160\x72\145\x6c\157\141\144\151\156\x67\x5f\x74\141\x73\x6b\137\x6f\160\x74\x69\157\156\x73"), [$this, "\171\147\x73\x61\x6f\167\151\167\163\163\153\171\x67\x6b\x75\x79"]); parent::kgquecmsgcouyaya(); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\x50\x52\137\137\103\x41\x43\x48\105\x5f\x5f\x50\x41\x54\110")) { goto mqaamqyoywyekiko; } $this->syiuacooagmooima("\x63\154\x6f\x75\144\x66\154\141\x72\145\55\160\x61\x74\150", __("\x4f\x70\164\x69\x6d\151\172\x61\164\x69\157\156\40\103\x6c\157\x75\144\146\154\x61\162\145\40\x50\141\164\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto smkakiyekkqoggao; mqaamqyoywyekiko: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck("\117\120\124\x49\115\x49\132\101\x54\111\x4f\x4e\137\x43\x4c\117\125\104\x46\x4c\101\122\105\x5f\120\101\124\110", "{$skacuygeqykiwiwy}\x2f\x63\x6c\x6f\165\144\x66\x6c\141\x72\x65"); smkakiyekkqoggao: return $ksaameoqigiaoigg; } public function iemaakgqgqosiecm() { Purge::symcgieuakksimmu(); Redirect::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if (ManipulateAjax::mcgoysmkqsqooceq()) { goto yisoawmmammassqk; } if (!is_admin()) { goto zggweikegkcgkmma; } Setting::symcgieuakksimmu(); zggweikegkcgkmma: goto gcsosokicycukoyc; yisoawmmammassqk: Ajax::symcgieuakksimmu(); gcsosokicycukoyc: } public function init() { $seiwgiesegcmssam = DecoratorUser::ksgkoukcicwkkaum(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$seiwgiesegcmssam) { goto seqammocqkyswaim; } $wcyykoegqiuckcku = $eygsasmqycagyayw->owygwqwawqoiusis("\142\x75\x73\x74\x65\162", false)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\142\165\163\164\x65\162\56\152\x73"))->yiuoscqaekcgiyuy("\x64\x61\x74\x61\55\x63\146\141\163\x79\156\143", 1); $eygsasmqycagyayw->oeoquuwkoywiuesy($wcyykoegqiuckcku)->ayeieigcckcmsikq($wcyykoegqiuckcku); seqammocqkyswaim: if (is_admin()) { goto coskmuqsawiaeyqg; } $eygsasmqycagyayw->ieayqiyiuuguowyq("\143\154\x6f\x75\144\146\154\x61\x72\x65", ["\142\x75\x73\164\x65\162" => self::yyeseoqwcecweeii, "\x73\145\154\x65\x63\x74\157\162" => "\x61"]); goto umccwcqwkoiaakmu; coskmuqsawiaeyqg: $eygsasmqycagyayw->ikqyiskqaaymscgw("\143\154\157\x75\x64\146\154\141\x72\145", ["\x61\152\x61\170" => Ajax::myikkigscysoykgy, "\x73\145\x6c\145\x63\164\x6f\162" => implode("\54\40", ["\x23\145\144\151\x74\157\x72\x20\56\145\144\x69\x74\x6f\162\55\160\157\x73\x74\55\x70\145\x72\x6d\x61\x6c\151\156\x6b\x5f\137\154\151\156\x6b", "\43\167\x70\x2d\x61\x64\x6d\151\x6e\55\142\x61\162\55\155\x79\x2d\x73\x69\x74\x65\163\x2d\154\151\163\164\x20\141", "\x23\x65\144\x69\164\x6f\x72\40\x2e\145\144\151\164\x6f\x72\x2d\160\x6f\x73\164\x2d\x70\162\x65\166\151\x65\x77", "\x23\x77\160\x2d\x61\144\155\x69\x6e\55\142\x61\162\x2d\x73\x69\164\145\x2d\156\141\x6d\x65\x20\x61", "\43\x77\160\x2d\x61\144\x6d\151\x6e\55\x62\x61\162\x2d\166\x69\145\x77\x2d\163\151\x74\x65\40\141", "\43\x73\141\x6d\160\x6c\x65\x2d\160\x65\x72\155\141\x6c\151\x6e\x6b\x20\x61", "\x23\167\x70\55\141\144\155\151\156\55\x62\x61\162\55\x76\151\x65\x77\x20\141", "\x23\x65\x64\x69\x74\157\x72\40\56\x69\x73\55\154\151\156\x6b", "\x2e\x72\157\167\x2d\x61\143\164\x69\157\x6e\x73\x20\x61", "\43\155\145\163\163\141\x67\x65\40\141", "\x2e\160\162\x65\x76\x69\x65\167"]), "\x62\165\x73\164\145\x72" => self::yyeseoqwcecweeii, "\160\x75\162\147\x65\x5f\160\x6f\163\164\137\x63\141\143\150\145" => ["\164\x69\x74\154\145" => __("\x50\x75\162\x67\145\x20\x50\x6f\163\x74\x20\x43\x61\x63\x68\145", PR__MDL__OPTIMIZATION)]]); umccwcqwkoiaakmu: } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto gysmigyakgaakeoy; } if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto kmcygqkmwcgwamkw; } $eggwswqquakgowom = $this->yayksoygskcuaygq(); $yqimccamkgmmuuyg = Controller::symcgieuakksimmu()->auamgqiwisysomsa(); if (!(!is_array($eggwswqquakgowom) || !$eggwswqquakgowom || count($eggwswqquakgowom) > 1)) { goto gsggsmmwcmkgyyss; } if ($eggwswqquakgowom = $yqimccamkgmmuuyg->yayksoygskcuaygq($iswcokucwmiosiaq)) { goto uagsgicwwcakecwq; } if (!$iswcokucwmiosiaq) { goto kcqueaewmayywqeq; } $this->yiggueaiwiygoiyi($iswcokucwmiosiaq, "\x63\146\x2d\x67\x65\164\x2d\172\157\x6e\x65\55\x69\x64\55\154\x69\163\164", self::imkacwmiuiykyuim); kcqueaewmayywqeq: goto qocgmocqauaaekii; uagsgicwwcakecwq: $wegekcwgakqeqsmq = $this->weysguygiseoukqw(Setting::qeykiyegimcyucgk, Setting::fsekswokoseswcqm); $qeqooyuoiasweuck = $this->aoqykkmokwseeeie(); if (!$qeqooyuoiasweuck) { goto gcoeaokkagaaeuse; } $ogookoeuwuoiaaac = Manipulate::goewgasukwccacim(); if ($wegekcwgakqeqsmq == Setting::eywauigiwgqckygk) { goto smksoismyouykeoa; } if (!in_array($ogookoeuwuoiaaac, $eggwswqquakgowom)) { goto imquwacukaswoyka; } $cgaiqcoosmmymqqm = ManipulateArray::get(array_flip($eggwswqquakgowom), $ogookoeuwuoiaaac); if (!$cgaiqcoosmmymqqm) { goto wyyowcsciaqkuiuq; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = $cgaiqcoosmmymqqm; $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = "\157\x6e"; $qeqooyuoiasweuck[Setting::suwymqqyesquiqqc] = [$cgaiqcoosmmymqqm => $ogookoeuwuoiaaac]; wyyowcsciaqkuiuq: imquwacukaswoyka: goto qwgkwokcyocqiyee; smksoismyouykeoa: $iiqoeuwqmkiyigwm = $this->weysguygiseoukqw(Setting::kgigwyeaumymgaca); if (!$iiqoeuwqmkiyigwm) { goto ekgkiioywougquka; } $qeqooyuoiasweuck[Setting::kymimiuqukascgmw] = ManipulateArray::get($eggwswqquakgowom, $iiqoeuwqmkiyigwm); $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] = "\x6f\x6e"; ekgkiioywougquka: qwgkwokcyocqiyee: if (!(isset($qeqooyuoiasweuck[Setting::aygoyiggsequgiua]) && $qeqooyuoiasweuck[Setting::aygoyiggsequgiua] == "\157\x6e")) { goto maeccckgcsaaumkw; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq); maeccckgcsaaumkw: $this->kmuweyayaqoeqiyw()::oqyuwccsuskiwgew($qeqooyuoiasweuck); gcoeaokkagaaeuse: qocgmocqauaaekii: gsggsmmwcmkgyyss: if ($this->yoaiuuuwwssswyqa()) { goto cycasoiysmksuwqk; } if ($wquasmyyscuqaqom = $yqimccamkgmmuuyg->ymkgoumkoycwwmmq($iswcokucwmiosiaq)) { goto ikygockuuyimmmwk; } if (!$iswcokucwmiosiaq) { goto yweucowesgsoewyc; } $this->yiggueaiwiygoiyi($iswcokucwmiosiaq, "\x63\146\x2d\147\x65\164\x2d\x7a\x6f\156\145\55\x69\144\x2d\154\x69\163\164", self::imkacwmiuiykyuim); yweucowesgsoewyc: $this->oaumimwssciwumys("\x43\141\x6e\40\156\x6f\x74\x20\147\145\x74\x20\x64\x65\166\x65\x6c\157\160\155\145\x6e\x74\x20\155\x6f\144\145\x20\144\141\164\141\56\x20{$iswcokucwmiosiaq}"); goto uwmcugkwqwcuqqsq; ikygockuuyimmmwk: $this->awwuyycwuuuggkqy($wquasmyyscuqaqom); uwmcugkwqwcuqqsq: cycasoiysmksuwqk: if (!$this->yusooeuwemoqcwmm()) { goto yicaqocukqoauqgc; } $gyamuieuowceasyo = $this->weysguygiseoukqw(Setting::scikeyuygqwyiisg); $wesqeosimkuoiogg = $this->weysguygiseoukqw(Setting::myguioueuiaacsko); if (!(!$gyamuieuowceasyo || !$wesqeosimkuoiogg)) { goto muimagegskoisckc; } $yqimccamkgmmuuyg->eigwgcuaamoqkuyw($iswcokucwmiosiaq, true); muimagegskoisckc: yicaqocukqoauqgc: kmcygqkmwcgwamkw: gysmigyakgaakeoy: } public function uysecqkaamikyime() { $yqimccamkgmmuuyg = API::symcgieuakksimmu(); $aecgggeoymywyumm = $yqimccamkgmmuuyg->ukuooogwaoiwagqs(); if (!$aecgggeoymywyumm) { goto sueeqeioeiwkscao; } DecoratorOption::update(self::yuwieqykuwacwmuw, $aecgggeoymywyumm); sueeqeioeiwkscao: } public function ygsaowiwsskygkuy($qiouiwasaauyaaue) : array { $aecgggeoymywyumm = DecoratorOption::get(self::yuwieqykuwacwmuw); if (!$aecgggeoymywyumm) { goto uieuouugckwokske; } $ymqmyyeuycgmigyo = ManipulateArray::get($aecgggeoymywyumm, "\116\141\155\145"); $eqgoocgaqwqcimie = ManipulateArray::get($aecgggeoymywyumm, "\126\x61\154\165\x65"); if (!($ymqmyyeuycgmigyo && $eqgoocgaqwqcimie)) { goto mmesoisgqucowwms; } $qiouiwasaauyaaue["\150\145\x61\144\x65\162\x73"]["\103\x6f\x6f\153\x69\145"] = "{$ymqmyyeuycgmigyo}\75{$eqgoocgaqwqcimie}"; mmesoisgqucowwms: uieuouugckwokske: return $qiouiwasaauyaaue; } }
