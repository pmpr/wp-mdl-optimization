<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2b5148c02d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\x70\x75\x72\147\145\x5f\143\x61\x63\x68\145"; const wwkyymgusywcykuk = "\160\162\x65\x6c\157\x61\144\x5f\160\141\147\145\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\x70\x72\x5f\157\x70\164\137\144\141\163\x68\x62\157\141\x72\x64", Constants::ysgwugcqguggmigq => __("\x44\x61\x73\x68\x62\157\141\x72\144", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\144\x61\x73\150\142\x6f\x61\162\144", $gaumukogkkgkiiuo->get("\x64\141\163\x68\142\157\141\162\144\56\152\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\144\x61\163\x68\142\x6f\141\x72\x64", ["\141\x6a\x61\x78" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\165\x72\147\x65\x20\x43\141\143\x68\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\151\x73\141\x62\154\x65\40\104\x65\x76\x65\x6c\157\x70\155\145\x6e\164\40\x4d\157\144\x65", PR__MDL__OPTIMIZATION) : __("\x45\x6e\141\x62\x6c\x65\x20\104\145\x76\145\x6c\157\x70\x6d\x65\x6e\164\x20\x4d\157\x64\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\x73\171\x6e\143\137\x64\x61\164\141" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\x41\x72\x65\x20\171\x6f\165\40\x73\x75\162\145\40\x61\x62\157\165\164\x20\160\x75\162\x67\x65\x20\x63\141\143\150\145\x3f", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\120\x72\x65\154\157\141\x64\40\x69\163\x20\x65\156\141\x62\x6c\145\40\x61\x6e\144\40\141\x66\164\145\162\x20\x70\x75\162\147\x65\40\x63\141\x63\150\x65\54\40\162\x65\x67\145\156\x65\x72\x61\164\145\40\x63\x61\x63\150\145\x20\146\151\154\x65\x20\163\x74\x61\162\164\x65\144\x20\141\165\164\157\x6d\141\164\151\143\x61\154\x6c\171\56", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\141\163\163" => "\x70\162\x2d\x6f\x70\164\x2d\x70\x75\162\147\145\x2d\x61\154\154\55\x63\141\143\x68\x65\x20\160\162\55\142\164\x6e\40\142\x74\156\x2d\x64\141\156\147\x65\162", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\x6c\x61\x73\163" => "\x77\x2d\61\x30\x30\40\x70\162\55\x62\x74\156\x20\142\x74\156\55\141\x63\x74\x69\157\156\40\x62\x74\156\x2d\x6f\165\x74\154\151\x6e\x65\55\160\162\x69\155\141\x72\171"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\104\151\163\x61\x62\154\151\x6e\147\x20\x44\x65\166\145\x6c\x6f\x70\x6d\x65\x6e\164\40\x4d\x6f\144\145\40\164\165\x72\x6e\163\x20\x6f\x6e\40\x63\141\143\x68\151\156\147\x20\x66\x6f\162\40\171\x6f\x75\x72\x20\x73\x69\x74\145\x2e\40\101\162\145\x20\x79\157\165\40\x73\x75\x72\145\40\x79\x6f\x75\40\167\141\x6e\164\40\164\x6f\x20\143\x6f\156\164\151\156\x75\x65\77", PR__MDL__OPTIMIZATION) : __("\105\156\141\x62\x6c\x69\156\x67\40\x44\145\x76\145\154\157\x70\x6d\x65\x6e\164\x20\x4d\x6f\144\145\40\164\x75\x72\x6e\163\40\157\146\x66\x20\143\x61\143\150\151\x6e\147\x20\x66\x6f\x72\x20\x79\157\165\x72\x20\163\x69\164\145\56\40\x41\162\x65\x20\171\x6f\x75\40\x73\x75\x72\145\x20\x79\x6f\x75\40\167\x61\x6e\x74\40\164\157\x20\143\157\156\164\x69\156\165\x65\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\141\163\x73" => "\x70\162\55\157\x70\x74\55\x63\x68\141\x6e\147\x65\x2d\144\145\x76\x2d\x6d\x6f\x64\x65\40\160\x72\x2d\x62\x74\x6e\x20\x62\164\x6e\x2d" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\141\x74\141\55\x64\145\166\55\x6d\x6f\x64\x65" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\104\x65\166\x65\154\x6f\x70\x6d\145\156\x74\x20\115\x6f\144\x65", PR__MDL__OPTIMIZATION), ["\143\154\x61\163\x73" => "\x77\55\61\60\60\x20\x70\x72\55\x62\x74\x6e\40\142\x74\x6e\x2d\141\x63\164\151\x6f\x6e\x20\x62\x74\x6e\x2d\157\165\164\154\151\156\145\55\x70\162\x69\155\x61\162\171"])]; if (!$qyaaumygmwoyoeec) { goto kikkkocywiyuyuqw; } kikkkocywiyuyuqw: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\144\141\x73\x68\142\x6f\141\162\x64\x5f\162\x65\160\157\162\x74\x73"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x70\x75\162\x63\150\141\x73\x65\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\40\x70\164\55\x32")->gswweykyogmsyawy(__("\120\x75\162\143\150\141\163\x65\40\x52\x65\160\x6f\x72\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\141\x6f\x73\147\143\x73\157\x69\x77\155\171\x65\x6f\x73\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x75\x73\x61\147\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\x2d\60\40\x70\164\x2d\x32")->gswweykyogmsyawy(__("\x55\x73\141\147\x65\40\x52\x65\160\157\162\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\144\153\143\141\x75\x6d\x6d\x73\x63\153\x75\x6b\157\x67\143\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\x70\141\156\x65\x6c" => $skeuoeoiuwwyqwou->render(false, ["\x68\141\x73\137\x77\162\141\160" => false, "\x76\x65\x72\164\151\143\141\154" => false]), Constants::qescuiwgsyuikume => __("\120\x75\162\x63\150\141\163\145\40\141\x6e\144\40\103\157\156\163\165\x6d\x70\x74\151\x6f\156\x20\122\x65\x70\x6f\x72\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\x75\151\143\153\137\141\143\164\x69\x6f\x6e\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\165\151\x63\x6b\x5f\x61\143\x74\151\157\156\x5f\x74\x69\x74\x6c\145"] = __("\x51\165\151\143\x6b\x20\101\143\164\x69\157\x6e\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
