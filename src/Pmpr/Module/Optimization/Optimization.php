<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66bd21640c7ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator implements CommonInterface { use CommonTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\160\x74\x69\155\x69\172\x61\164\151\x6f\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . self::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\165\162\147\x65\137\x63\x61\x63\150\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\156\137\x69\x6e\x69\x74", [$this, "\x79\145\x79\x69\x67\x75\171\x65\147\155\x6d\171\165\163\145\x61"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\x6c\154\x6f\167\x5f\164\x6f\x5f\141\144\144\x5f\x62\141\143\153\154\151\156\x6b", [$this, "\163\145\x69\x61\x69\157\x6b\x75\163\x67\x79\x73\x6d\163\x79\x71"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto icmsyimgycuocisu; } Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); icmsyimgycuocisu: Optimizer::symcgieuakksimmu(); Capability::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto wassyiqsqasaoiau; } $this->qayieuscsskiqacs(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x62\141\x63\153\x65\x6e\144", $eygsasmqycagyayw->get("\x62\141\x63\153\x65\156\x64\x2e\152\163"))->okawmmwsiuauwsiu(self::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\142\141\143\x6b\145\x6e\x64", $eygsasmqycagyayw->get("\142\x61\143\x6b\145\156\x64\x2e\143\163\163"))); wassyiqsqasaoiau: } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto uekueeyqaackuwao; } $cuakwceieagskoaa = false; uekueeyqaackuwao: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto qugsgsscqyikugyc; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto ykuycowuguumseuu; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto gigiwwouakeekoim; } $this->syiuacooagmooima("\143\157\x6e\x66\151\x67", __("\x43\x6f\156\146\151\147\x75\x72\x61\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto esuuweysgwuwcuue; gigiwwouakeekoim: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto eauiumeeyckucuyc; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); eauiumeeyckucuyc: gokwmwmaumiwscua: } eieiwacwqkgsewai: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\x6e\x66\151\x67\x2e\160\150\160", ["\143\x6f\x6e\146\151\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\141\171\134\163\x2b\x5c\x28\100\151", "\x61\162\162\141\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\x72\141\171\134\50\134\163\53\x5c\x29\100\151", "\141\162\x72\x61\171\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\164\x69\155\x69\172\x61\164\151\157\x6e\x20\x63\157\x6e\146\151\x67\x20\146\x69\x6c\145\40\x25\x73\40\x67\145\x6e\145\162\x61\x74\145\144\40\151\156\x20\45\163", PR__MDL__OPTIMIZATION), "\x3c\143\157\144\x65\76{$qogsmwakwacwqogk}\74\57\143\x6f\x64\145\76", "\x3c\x63\157\x64\x65\76{$mkomwsiykqigmqca}\74\x2f\143\157\144\145\x3e"), "\157\x70\164\x69\155\x69\172\141\x74\x69\157\x6e\55\x63\x6f\156\x66\x69\x67", self::smkwuwawwaqyimcq); esuuweysgwuwcuue: ykuycowuguumseuu: ysiwoiqiaosqoikm: } uaiiuywoakccusge: qugsgsscqyikugyc: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\x65\166\x5f\155\157\144\145" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(self::qeuquamuuwueeiyi, false), "\144\x65\x62\165\x67\x5f\155\x6f\x64\145" => false, "\143\157\157\153\151\145\137\x68\141\163\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\117\117\x4b\111\105\x48\x41\x53\x48"), "\162\x65\x6a\145\143\x74\137\143\157\x6f\x6b\x69\x65\x73" => $this->mukwwwucwusmmqau(), "\x6c\157\x67\x67\x65\144\137\151\x6e\x5f\x63\x6f\x6f\153\151\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\117\107\x47\105\x44\x5f\111\x4e\x5f\113\x45\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\157\x6e\x66\151\147\x75\x72\x61\164\x69\157\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\145\x67\x5f\161\165\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\x2d\160\157\x73\164\x70\141\163\x73\137"; $osqkgokmuiasuukg[] = "\167\x70\x74\157\x75\143\x68\x5f\x73\x77\151\164\143\150\137\164\157\x67\x67\x6c\x65"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\145\x6e\x74\137\x61\x75\x74\x68\x6f\x72\x5f"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\x65\x6e\x74\x5f\141\165\x74\150\x6f\x72\137\x65\x6d\141\151\154\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\x65\152\x65\143\x74\137\x63\157\157\x6b\x69\145\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
