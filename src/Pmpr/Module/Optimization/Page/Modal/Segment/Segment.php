<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631839907f5b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Modal\Segment; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Segment as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Traits\CommonTrait; use WP_Post_Type; class Segment extends BaseClass implements CommonInterface { use CommonTrait; protected function wqwkuqceaqeiquqm() : string { return ManipulateHTML::iaaacsuskiakkwui(ManipulateHTML::yuawgssgauywkiia(__("\x50\141\147\x65\x73\40\x50\x72\145\166\x69\145\x77", PR__MDL__OPTIMIZATION), "\43", ["\x69\144" => "\162\x75\x6c\x65\x5f\160\141\147\x65\x5f\x70\x72\145\x76\x69\x65\x77", "\x63\x6c\141\x73\163" => "\142\164\156\x20\x62\x74\x6e\55\x6f\x75\164\154\x69\x6e\x65\x2d\160\162\x69\155\141\x72\171\x20\x72\165\154\145\x73\55\x70\141\x67\145\x73\55\x70\x72\145\x76\151\x65\x77"]), ["\143\x6c\x61\x73\x73" => "\x70\162\55\x61\143\164\x69\x6f\156"]); } public function ggaacuwaaaqksyoa() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto oaqeoqsksuyyggmg; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto kiskwawumeiiieuk; } if (!ManipulatePost::qeosassuekcieuuy($sqeykgyoooqysmca)) { goto kwasqmcyiswoaiuu; } $uymyaeeowcuoksgm++; kwasqmcyiswoaiuu: kiskwawumeiiieuk: oaqeoqsksuyyggmg: asoecuscmsyusmkg: } syisomgawcsqeemk: $oammesyieqmwuwyi = ["\x61\x6c\154" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\x53\151\164\145\x20\120\141\147\x65\163", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\x41\x6c\x6c\40\171\x6f\x75\162\x20\x73\151\x74\x65\40\x70\x61\147\145\163\x2c\x20\x69\x6e\143\154\165\x64\x69\x6e\x67\40\x73\x69\x6e\147\x6c\145\40\x6f\x66\x20\160\x6f\x73\x74\40\x74\171\x70\145\163\54\40\x74\x65\162\x6d\163\40\141\x6e\144\40\x70\165\142\x69\143\x20\141\162\x63\x68\x69\x76\145\x20\160\141\x67\145\x73", PR__MDL__OPTIMIZATION)], "\x62\x75\x64\147\145\164" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\131\x6f\165\x72\40\102\x75\144\147\145\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\x41\154\154\40\x62\x75\144\147\x65\x74\40\160\165\x72\x63\x68\x61\163\145\144\x20\x62\171\40\x79\x6f\165", PR__MDL__OPTIMIZATION)]]; if (!($iuekmkswcsacoawq = PageModel::symcgieuakksimmu())) { goto kkmuuoscccmokkiw; } $oammesyieqmwuwyi["\165\x73\145\144"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\x55\x73\x65\144\40\102\165\x64\147\145\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\x43\x6f\165\x6e\164\40\x6f\x66\40\142\165\144\147\x65\x74\x73\40\x79\x6f\x75\40\165\x73\145\x64", PR__MDL__OPTIMIZATION)]; $oammesyieqmwuwyi["\162\145\x6d\x61\x69\x6e"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\x52\145\x6d\x61\151\x6e\151\156\147\40\x42\x75\144\147\145\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\x43\x6f\x75\156\x74\x20\157\x66\40\142\x75\144\147\145\x74\x73\40\171\157\x75\x20\143\141\156\x20\x75\x73\145", PR__MDL__OPTIMIZATION)]; kkmuuoscccmokkiw: return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\x73\x74\141\164\151\x73\164\151\143\x5f\x69\x74\x65\x6d\x73"), $oammesyieqmwuwyi); } protected function iiomagmskwiawgyo(bool $ssimsmwwkqmmgqeg = false, int $eogccskwymysesoe = 3, int $smiiwkmmoscuieqo = 6) : ?string { return $this->iuygowkemiiwqmiw("\163\x74\x61\x74\151\x73\164\x69\x63", ["\151\163\x5f\x6d\x61\x69\x6e" => $ssimsmwwkqmmgqeg, "\163\x68\157\167\x5f\x64\145\x73\x63" => $eogccskwymysesoe >= 6, self::qwumqqyuasyskkkc => $this->ggaacuwaaaqksyoa(), self::soquiwyuimckgiow => ['' => 12, self::esgegasyoiyogwqc => $smiiwkmmoscuieqo, self::myiysugguwsqoaqc => $eogccskwymysesoe]]); } }
