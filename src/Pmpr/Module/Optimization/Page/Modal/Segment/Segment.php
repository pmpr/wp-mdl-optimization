<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643273713ba62             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Modal\Segment; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Segment as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Traits\CommonTrait; use WP_Post_Type; class Segment extends BaseClass implements CommonInterface { use CommonTrait; public function ggaacuwaaaqksyoa() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto uugwoygiyecgymgw; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto gusgywuaimwooawc; } if (!ManipulatePost::qeosassuekcieuuy($sqeykgyoooqysmca)) { goto cauqmacqkssciwyq; } $uymyaeeowcuoksgm++; cauqmacqkssciwyq: gusgywuaimwooawc: uugwoygiyecgymgw: emagssesowicacoa: } sgkwaiuukkaqyqki: $oammesyieqmwuwyi = ["\x61\x6c\154" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\x53\151\164\x65\x20\x50\141\x67\x65\163", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\x41\154\154\x20\x79\157\165\162\x20\163\x69\164\x65\40\x70\x61\147\145\x73\x2c\x20\x69\x6e\x63\154\x75\x64\x69\156\x67\40\163\x69\x6e\147\154\145\40\x6f\x66\40\x70\x6f\x73\164\40\x74\x79\160\x65\x73\54\40\x74\145\162\155\163\x20\x61\156\x64\x20\x70\x75\142\x69\143\x20\141\x72\143\150\151\166\x65\40\160\x61\x67\145\163", PR__MDL__OPTIMIZATION)], "\x62\165\x64\147\145\x74" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\131\x6f\165\162\40\x42\x75\144\x67\145\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\x41\154\x6c\x20\142\165\x64\x67\x65\x74\x20\x70\165\x72\x63\150\141\163\x65\x64\40\142\171\40\171\x6f\x75", PR__MDL__OPTIMIZATION)]]; if (!($iuekmkswcsacoawq = PageModel::symcgieuakksimmu())) { goto acmgueaoaaweiqqu; } $oammesyieqmwuwyi["\165\163\145\x64"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\125\163\145\144\40\102\x75\x64\x67\x65\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\103\x6f\x75\x6e\164\x20\157\146\x20\142\165\x64\147\145\x74\163\x20\x79\x6f\165\x20\165\x73\145\x64", PR__MDL__OPTIMIZATION)]; $oammesyieqmwuwyi["\x72\145\x6d\141\x69\156"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\122\145\x6d\x61\x69\x6e\151\x6e\x67\x20\x42\165\144\x67\145\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\x43\157\165\156\164\40\x6f\146\40\x62\165\144\147\x65\164\x73\40\x79\x6f\x75\40\143\141\156\x20\x75\163\145", PR__MDL__OPTIMIZATION)]; acmgueaoaaweiqqu: return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\163\x74\x61\x74\x69\163\x74\x69\143\x5f\151\x74\x65\x6d\163"), $oammesyieqmwuwyi); } protected function wqwkuqceaqeiquqm() : string { return ManipulateHTML::iaaacsuskiakkwui(ManipulateHTML::yuawgssgauywkiia(__("\x50\x61\147\x65\x73\40\x50\x72\145\x76\151\x65\167", PR__MDL__OPTIMIZATION), "\x23", ["\151\144" => "\162\165\154\145\x5f\x70\141\147\x65\137\x70\162\x65\x76\x69\145\167", "\x63\154\x61\x73\x73" => "\x62\164\156\40\142\164\156\x2d\x6f\x75\x74\x6c\151\x6e\145\55\x70\x72\151\x6d\141\x72\x79\40\162\x75\154\x65\x73\x2d\160\x61\147\x65\x73\55\160\x72\145\166\151\145\x77"]), ["\143\x6c\x61\163\x73" => "\160\x72\55\141\143\164\151\157\156"]); } protected function iiomagmskwiawgyo(bool $ssimsmwwkqmmgqeg = false, int $eogccskwymysesoe = 3, int $smiiwkmmoscuieqo = 6) : ?string { return $this->iuygowkemiiwqmiw("\163\164\141\164\x69\x73\164\x69\143", ["\x69\163\137\x6d\x61\x69\x6e" => $ssimsmwwkqmmgqeg, "\x73\x68\157\x77\137\x64\145\x73\143" => $eogccskwymysesoe >= 6, self::qwumqqyuasyskkkc => $this->ggaacuwaaaqksyoa(), self::soquiwyuimckgiow => ['' => 12, self::esgegasyoiyogwqc => $smiiwkmmoscuieqo, self::myiysugguwsqoaqc => $eogccskwymysesoe]]); } }
