<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf1b954785e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Modal\Segment; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Segment as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Traits\CommonTrait; use WP_Post_Type; class Segment extends BaseClass implements CommonInterface { use CommonTrait; protected function wqwkuqceaqeiquqm() : string { return ManipulateHTML::iaaacsuskiakkwui(ManipulateHTML::yuawgssgauywkiia(__("\120\x61\x67\145\x73\40\120\x72\145\x76\x69\145\167", PR__MDL__OPTIMIZATION), "\x23", ["\151\x64" => "\x72\165\x6c\x65\137\160\141\147\145\x5f\x70\162\145\x76\151\x65\167", "\143\x6c\141\163\x73" => "\x62\x74\156\x20\x62\x74\156\x2d\x6f\165\x74\154\151\156\x65\55\x70\x72\x69\x6d\141\x72\171\x20\162\x75\x6c\x65\x73\x2d\160\141\147\145\163\x2d\x70\x72\145\x76\151\x65\x77"]), ["\x63\x6c\x61\163\x73" => "\160\x72\x2d\141\x63\164\x69\157\x6e"]); } public function ggaacuwaaaqksyoa() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto oqgymyiwckkwueuw; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto wqwmuuicoqigqwyc; } if (!ManipulatePost::qeosassuekcieuuy($sqeykgyoooqysmca)) { goto gaouaiemokqqgssw; } $uymyaeeowcuoksgm++; gaouaiemokqqgssw: wqwmuuicoqigqwyc: oqgymyiwckkwueuw: qiikwossequwiuom: } ymucaguacemwsgsi: $oammesyieqmwuwyi = ["\x61\x6c\x6c" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\x53\x69\164\145\40\120\141\x67\x65\x73", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\x41\154\x6c\40\171\x6f\165\162\x20\x73\151\164\x65\x20\x70\x61\147\145\163\x2c\x20\151\156\x63\154\165\144\151\x6e\147\40\x73\151\156\147\x6c\x65\40\x6f\146\40\x70\x6f\163\164\x20\x74\171\160\145\x73\54\40\164\x65\x72\x6d\163\40\x61\x6e\x64\40\160\165\x62\151\x63\x20\141\x72\x63\150\x69\x76\x65\40\x70\141\x67\145\x73", PR__MDL__OPTIMIZATION)], "\x62\x75\x64\147\x65\x74" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\131\x6f\x75\162\x20\x42\x75\x64\x67\145\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\101\154\154\x20\142\x75\144\147\x65\x74\40\x70\x75\x72\x63\150\141\x73\x65\144\x20\142\171\x20\171\157\x75", PR__MDL__OPTIMIZATION)]]; if (!($iuekmkswcsacoawq = PageModel::symcgieuakksimmu())) { goto qywkykqkeeuccoui; } $oammesyieqmwuwyi["\x75\x73\145\x64"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\125\163\145\144\40\102\x75\x64\147\145\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\103\157\165\x6e\164\40\x6f\x66\x20\142\x75\144\147\145\164\x73\40\171\157\x75\x20\165\163\145\144", PR__MDL__OPTIMIZATION)]; $oammesyieqmwuwyi["\162\x65\x6d\x61\x69\x6e"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\122\145\x6d\141\151\156\151\x6e\x67\40\x42\165\x64\147\145\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconFontawesomeInterface::kekeuuqqukocoyes, self::eqkeooqcsscoggia => __("\103\x6f\x75\x6e\164\40\157\x66\x20\142\x75\144\x67\145\164\x73\40\x79\x6f\x75\x20\x63\x61\x6e\x20\165\x73\x65", PR__MDL__OPTIMIZATION)]; qywkykqkeeuccoui: return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\163\164\141\164\151\163\164\x69\x63\x5f\x69\164\x65\x6d\163"), $oammesyieqmwuwyi); } protected function iiomagmskwiawgyo(bool $ssimsmwwkqmmgqeg = false, int $eogccskwymysesoe = 3, int $smiiwkmmoscuieqo = 6) : ?string { return $this->iuygowkemiiwqmiw("\163\x74\x61\x74\x69\163\164\x69\143", ["\151\x73\137\155\141\151\x6e" => $ssimsmwwkqmmgqeg, "\x73\150\157\x77\x5f\144\x65\163\143" => $eogccskwymysesoe >= 6, self::qwumqqyuasyskkkc => $this->ggaacuwaaaqksyoa(), self::soquiwyuimckgiow => ['' => 12, self::esgegasyoiyogwqc => $smiiwkmmoscuieqo, self::myiysugguwsqoaqc => $eogccskwymysesoe]]); } }
