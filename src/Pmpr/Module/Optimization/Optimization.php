<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6280d28b3a80d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Asset\Asset; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Bypass\Bypass; use Pmpr\Module\Optimization\Cloudflare\Cloudflare; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; use Pmpr\Module\Optimization\Origin\Origin; use Pmpr\Module\Optimization\Page\Page; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Preloader\Preloader; use Pmpr\Module\Optimization\Purge\Purge; use WP_Post_Type; class Optimization extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto oyywywoqaqcykucs; } parent::__construct(); $this->cyowaaeywssoooeo(); oyywywoqaqcykucs: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\x6e\x5f\x69\156\151\x74", [$this, "\171\x65\x79\x69\x67\x75\171\x65\147\155\155\x79\165\x73\145\x61"])->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\x5f\155\145\156\165", [$this, "\145\x75\161\147\167\151\x73\143\167\x67\161\x6b\x71\x6b\x65\143"])->qcsmikeggeemccuu("\164\x65\155\x70\x6c\141\x74\145\137\162\145\x64\151\162\x65\143\164", [$this, "\x67\151\167\x79\163\153\167\x77\155\x63\x69\145\x75\x61\143\161"])->qcsmikeggeemccuu("\160\154\x75\147\x69\156\163\137\x6c\x6f\x61\x64\x65\x64", [$this, "\x69\x65\x6d\x61\x61\x6b\x67\x71\x67\161\157\x73\x69\x65\x63\155"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\157\160\164\137\x72\x65\x6e\x64\145\x72\137\163\x74\x61\164\x69\163\164\151\143\163"), [$this, "\x73\x79\x61\x71\167\157\161\147\x73\161\141\x61\x71\x63\145\x67"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\x6f\x72\x6d\137\x6d\141\x6b\145\x72\137\x62\x65\x66\157\x72\145\137\164\x61\142\163"), [$this, "\x61\147\x79\x79\163\x79\167\161\145\x6f\157\x69\x6f\x6d\171\x61"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\137\x67\145\x74\x5f\163\164\141\x74\151\x73\164\x69\143\x73\137\150\164\155\154"), [$this, "\x69\151\x6f\x6d\x61\x67\155\163\x6b\x77\x69\x61\167\147\171\157"], 10, 2); } public function iemaakgqgqosiecm() { Page::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Purge::symcgieuakksimmu(); Bypass::symcgieuakksimmu(); Origin::symcgieuakksimmu(); Preloader::symcgieuakksimmu(); Cloudflare::symcgieuakksimmu(); } public function agyysywqeooiomya() { if (!$this->kmuweyayaqoeqiyw()->eaiyegoagkgeowae()) { goto iqeqqwcmaiqakawc; } $this->syaqwoqgsqaaqceg(); iqeqqwcmaiqakawc: } protected function uyeaqmeewagakagw() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto uqagqomggiacosqm; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto suoymucmyegewkmu; } $uymyaeeowcuoksgm++; suoymucmyegewkmu: uqagqomggiacosqm: miaiggsoiaekmqwy: } gioqkcywauuckmua: $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); return ["\141\x6c\154" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\x53\x69\x74\x65\40\x50\141\147\x65\x73", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\x62\x75\144\147\145\x74" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\101\154\154\40\x59\157\165\162\x20\x42\x75\144\147\x65\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\x75\163\145\x64" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\125\163\145\144\x20\x42\x75\144\x67\x65\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes], "\162\145\x6d\x61\x69\x6e" => [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\x52\x65\x6d\141\151\x6e\x69\156\x67\40\102\x75\144\147\x65\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes]]; } public function iiomagmskwiawgyo($nsmgceoqaqogqmuw, $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::qwumqqyuasyskkkc => $this->uyeaqmeewagakagw(), "\x62\165\x74\164\157\x6e\163" => ["\165\160\x64\x61\x74\145" => [self::ELEMENT => "\141", self::qescuiwgsyuikume => __("\x55\x70\144\x61\164\145\40\116\x75\155\142\x65\162\163", PR__MDL__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\143\x6c\x61\x73\163" => "\x62\164\x6e\40\142\164\156\55\163\x65\x63\157\x6e\144\141\x72\x79\40\x75\160\144\141\164\x65\x2d\142\165\144\147\145\x74\40\155\142\x2d\x32", "\x68\162\145\x66" => "\43"]], "\142\165\x79" => [self::ELEMENT => "\x61", self::qescuiwgsyuikume => __("\x49\x6e\x63\x72\x65\x61\163\145\40\102\x75\144\x67\145\x74", PR__MDL__OPTIMIZATION), self::ysskgssgwuwmqwym => ["\143\x6c\x61\x73\x73" => "\142\164\156\x20\142\164\156\x2d\x70\x72\151\155\x61\162\171", "\150\162\145\x66" => self::couwksyewgyeooqe()->giiuwsmyumqwwiyq(self::sauwwsocmukoaayu), "\x74\141\162\x67\145\164" => "\x5f\x62\x6c\x61\156\153"]]], "\x6c\x65\166\x65\x6c\137\x6d\145\163\163\141\x67\x65" => ManipulateHTML::oockkqiqsssakuug(sprintf(__("\x25\x73\40\x6f\x70\164\151\x6d\151\x7a\x61\x74\x69\x6f\156\x20\x61\x70\160\154\171\x20\141\165\x74\x6f\x6d\141\164\x69\x63\141\154\x6c\171\x20\x74\x6f\x20\x61\154\x6c\x20\x70\x61\x67\x65\163\x20\x77\151\164\150\157\x75\164\40\x74\x68\145\x20\156\x65\145\x64\x20\146\x6f\x72\40\141\x20\142\x75\144\147\145\x74\x2e", PR__MDL__OPTIMIZATION), ManipulateHTML::ciuuiyckmsygceis(__("\x4c\145\x76\145\154\x20\61", PR__MDL__OPTIMIZATION))), self::smkwuwawwaqyimcq, [], false, true)]); return $this->iuygowkemiiwqmiw("\x73\x74\141\164\151\x73\164\151\143", $ywmkwiwkosakssii); } public function syaqwoqgsqaaqceg($ywmkwiwkosakssii = []) { echo $this->iiomagmskwiawgyo('', $ywmkwiwkosakssii); } public function cyowaaeywssoooeo() : bool { $ksaameoqigiaoigg = false; if ($skacuygeqykiwiwy = Manipulate::cmaecekuqkwmemms("\120\122\x5f\x5f\103\101\103\x48\105\x5f\x5f\x50\x41\x54\110")) { goto mwskgsimqagmkcgq; } $this->syiuacooagmooima("\143\x6f\x6e\x66\151\147\55\x70\x61\164\x68", __("\103\157\x6e\x66\151\x67\40\x50\141\164\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto mkuigmcgkawyawee; mwskgsimqagmkcgq: $ksaameoqigiaoigg = ManipulateFile::koymmiyegyskqgck(self::muqmwceaiwwakwws, "{$skacuygeqykiwiwy}\x2f\x63\157\156\x66\x69\x67"); mkuigmcgkawyawee: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto kwaqakoogeiacmwi; } $this->qayieuscsskiqacs(); if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto agqmoymkiswqswqo; } $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\141\144\155\x69\x6e", $eygsasmqycagyayw->get("\x61\144\x6d\151\156\56\x6a\163"))->simswskycwagoeqy())->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x61\144\x6d\x69\x6e", $eygsasmqycagyayw->get("\141\x64\x6d\x69\156\x2e\x63\163\x73"))); $usmiuwiumyygmucg = DecoratorOption::get(self::gwccmwywmiccammg); if ($usmiuwiumyygmucg) { goto ouqwmaaskykywyqo; } $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\160\164\137\165\x70\x64\141\x74\145\x5f\x72\x65\x6d\x6f\164\x65\x5f\x61\x70\x70\163")); ouqwmaaskykywyqo: agqmoymkiswqswqo: kwaqakoogeiacmwi: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\x70\141\x67\x65\137\164\151\x74\x6c\145" => __("\x4f\x70\x74\151\x6d\x69\172\x61\x74\x69\157\156", PR__MDL__OPTIMIZATION), "\x6d\145\156\x75\x5f\163\154\165\x67" => self::akuociswqmoigkas(), "\x70\157\163\151\164\x69\157\x6e" => 1]); } public function giwyskwwmcieuacq() { $uiewakwqscemywuo = new Config(["\x70\141\164\150" => Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws)]); new Buffer(new Test($uiewakwqscemywuo, ["\x6c\157\147\x67\x65\x72" => $this->ygaescewwyaseaoy()])); } public function ymioscmsquoqmasi() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto ccqgkeesikyegcik; } $auwuoyyagaiegwae = $kymsmcekmemqmews; ccqgkeesikyegcik: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws); $qogsmwakwacwqogk = ManipulateFormat::gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto wcoqiwuusoeqiqwi; } $mkomwsiykqigmqca = ManipulateArray::get($qogsmwakwacwqogk, "\160\141\164\150"); $qogsmwakwacwqogk["\x70\x61\164\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\163\164"]) . $qogsmwakwacwqogk["\160\141\164\150"] . "\56\160\150\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; wcoqiwuusoeqiqwi: iiuawywwoaeyauge: } aakwscykmyyykoms: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\x63\157\156\146\151\147\x75\162\x61\164\151\157\156\137\146\151\x6c\145\x73\x5f\160\141\x74\x68"), $ucasskoyoewwmmii); } public function qayieuscsskiqacs() { if (!($ucasskoyoewwmmii = $this->ymioscmsquoqmasi())) { goto quewwumogiocouii; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto eyuoecmogqwkmomi; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto gsimeiqkoyqkuecq; } $this->syiuacooagmooima("\143\157\x6e\x66\151\147", __("\103\157\156\x66\151\147\165\x72\141\x74\x69\x6f\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto gqywcowiigceimaw; gsimeiqkoyqkuecq: foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto wukuisoeoeomgegu; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = ManipulateString::amkcmaguoecyiscg($uiewakwqscemywuo); wukuisoeoeomgegu: kcqieuukskyiywss: } yuoyackaoigyyyso: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\156\146\x69\x67\x2e\x70\150\x70", ["\x63\x6f\156\146\x69\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\162\x61\x79\134\163\53\x5c\x28\100\151", "\x61\162\x72\x61\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\162\141\x79\134\50\134\x73\x2b\x5c\x29\x40\x69", "\141\x72\x72\141\x79\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\x74\151\x6d\151\172\141\164\151\x6f\156\40\143\157\156\x66\151\147\40\146\x69\154\145\40\x25\163\40\x67\145\x6e\145\162\x61\164\x65\x64\40\151\156\40\x25\163", PR__MDL__OPTIMIZATION), "\74\143\x6f\x64\145\76{$qogsmwakwacwqogk}\x3c\x2f\143\x6f\x64\x65\76", "\74\x63\x6f\144\x65\76{$mkomwsiykqigmqca}\x3c\x2f\143\157\144\x65\76"), "\x6f\160\164\151\x6d\151\x7a\x61\164\151\157\156\55\x63\x6f\156\x66\x69\147", self::smkwuwawwaqyimcq); gqywcowiigceimaw: eyuoecmogqwkmomi: cwcmwogseemgqgqq: } oqwyemgwoossauyk: quewwumogiocouii: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $oyuikeusicgqgwak = ["\x64\x65\x62\165\x67\x5f\x6d\x6f\x64\145" => $this->weysguygiseoukqw(Setting::cmgikuaeswggsasy, false), "\x63\x6f\x6f\153\151\x65\137\x68\x61\163\x68" => Manipulate::cmaecekuqkwmemms("\103\117\x4f\113\111\x45\x48\x41\123\x48"), "\x72\x65\x6a\x65\x63\x74\137\143\x6f\157\153\x69\x65\x73" => $this->mukwwwucwusmmqau(), "\x6c\157\147\x67\145\144\137\151\156\x5f\143\157\x6f\x6b\151\x65" => Manipulate::cmaecekuqkwmemms("\114\x4f\107\x47\105\104\137\111\116\137\x4b\x45\x59")]; return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\143\157\156\x66\x69\147\165\162\x61\x74\151\157\156\x73"), $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\145\147\137\161\165\x6f\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\55\x70\157\x73\x74\160\141\163\x73\x5f"; $osqkgokmuiasuukg[] = "\x77\x70\x74\x6f\x75\x63\x68\x5f\x73\x77\x69\x74\x63\x68\137\164\x6f\147\147\154\x65"; $osqkgokmuiasuukg[] = "\143\157\155\155\x65\156\164\x5f\141\165\164\x68\157\x72\x5f"; $osqkgokmuiasuukg[] = "\x63\157\155\155\x65\156\164\x5f\x61\165\164\x68\x6f\x72\137\x65\x6d\x61\x69\154\137"; $osqkgokmuiasuukg = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x72\x65\152\x65\x63\x74\137\x63\157\x6f\x6b\x69\145\163"), $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
