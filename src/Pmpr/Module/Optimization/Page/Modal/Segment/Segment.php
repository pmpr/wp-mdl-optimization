<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6318774774141             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Modal\Segment; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Segment as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Traits\CommonTrait; use WP_Post_Type; class Segment extends BaseClass implements CommonInterface { use CommonTrait; protected function wqwkuqceaqeiquqm() : string { return ManipulateHTML::iaaacsuskiakkwui(ManipulateHTML::yuawgssgauywkiia(__("\x50\141\x67\x65\163\40\120\162\145\x76\151\x65\167", PR__MDL__OPTIMIZATION), "\x23", ["\x69\x64" => "\x72\165\x6c\145\137\160\x61\x67\145\137\160\162\x65\166\x69\x65\x77", "\143\154\141\x73\x73" => "\x62\x74\156\40\x62\164\x6e\55\157\x75\x74\x6c\151\156\145\x2d\x70\162\151\x6d\x61\162\x79\40\162\165\x6c\145\x73\55\x70\141\x67\145\163\x2d\160\x72\145\166\x69\x65\x77"]), ["\143\x6c\141\x73\x73" => "\x70\x72\55\x61\143\164\x69\157\156"]); } public function ggaacuwaaaqksyoa() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto oaqeoqsksuyyggmg; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto kiskwawumeiiieuk; } if (!ManipulatePost::qeosassuekcieuuy($sqeykgyoooqysmca)) { goto kwasqmcyiswoaiuu; } $uymyaeeowcuoksgm++; kwasqmcyiswoaiuu: kiskwawumeiiieuk: oaqeoqsksuyyggmg: asoecuscmsyusmkg: } syisomgawcsqeemk: $oammesyieqmwuwyi = ["\141\154\154" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\x53\151\x74\145\x20\x50\141\147\145\163", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\x41\x6c\154\40\171\157\x75\162\x20\x73\x69\164\145\40\x70\141\x67\145\x73\x2c\40\151\x6e\x63\154\x75\x64\x69\x6e\x67\x20\x73\151\156\x67\x6c\x65\x20\157\x66\x20\160\157\163\164\40\x74\x79\x70\x65\163\x2c\40\x74\x65\x72\155\163\x20\141\x6e\144\x20\160\165\x62\151\143\x20\x61\x72\143\150\151\x76\145\40\160\141\x67\x65\163", PR__MDL__OPTIMIZATION)], "\x62\x75\144\147\x65\x74" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\x59\x6f\x75\x72\40\x42\x75\x64\x67\x65\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\101\154\154\40\x62\x75\x64\147\x65\x74\x20\x70\165\162\x63\x68\x61\163\145\x64\x20\142\x79\x20\x79\157\x75", PR__MDL__OPTIMIZATION)]]; if (!($iuekmkswcsacoawq = PageModel::symcgieuakksimmu())) { goto kkmuuoscccmokkiw; } $oammesyieqmwuwyi["\165\x73\x65\144"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\125\x73\x65\144\x20\102\165\x64\147\x65\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\103\x6f\x75\x6e\x74\x20\157\x66\x20\x62\x75\144\147\x65\x74\x73\x20\x79\157\x75\40\x75\163\145\x64", PR__MDL__OPTIMIZATION)]; $oammesyieqmwuwyi["\162\x65\155\141\x69\x6e"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\122\x65\x6d\x61\x69\156\151\x6e\147\40\102\165\x64\147\145\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\x43\157\165\x6e\164\40\x6f\146\x20\142\x75\144\x67\x65\164\163\40\171\157\165\40\143\141\156\x20\x75\163\145", PR__MDL__OPTIMIZATION)]; kkmuuoscccmokkiw: return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\x74\137\x73\x74\x61\164\151\x73\x74\x69\x63\137\151\x74\145\155\x73"), $oammesyieqmwuwyi); } protected function iiomagmskwiawgyo(bool $ssimsmwwkqmmgqeg = false, int $eogccskwymysesoe = 3, int $smiiwkmmoscuieqo = 6) : ?string { return $this->iuygowkemiiwqmiw("\x73\x74\141\164\151\163\164\151\x63", ["\151\x73\x5f\x6d\x61\151\x6e" => $ssimsmwwkqmmgqeg, "\163\x68\x6f\x77\x5f\144\145\163\x63" => $eogccskwymysesoe >= 6, self::qwumqqyuasyskkkc => $this->ggaacuwaaaqksyoa(), self::soquiwyuimckgiow => ['' => 12, self::esgegasyoiyogwqc => $smiiwkmmoscuieqo, self::myiysugguwsqoaqc => $eogccskwymysesoe]]); } }
