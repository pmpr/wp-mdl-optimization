<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63921303a86c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Modal\Segment; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Segment as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Traits\CommonTrait; use WP_Post_Type; class Segment extends BaseClass implements CommonInterface { use CommonTrait; protected function wqwkuqceaqeiquqm() : string { return ManipulateHTML::iaaacsuskiakkwui(ManipulateHTML::yuawgssgauywkiia(__("\120\x61\x67\145\x73\x20\120\162\145\x76\151\x65\167", PR__MDL__OPTIMIZATION), "\43", ["\x69\x64" => "\x72\x75\x6c\145\137\x70\141\147\145\137\x70\162\x65\166\x69\x65\x77", "\x63\x6c\141\163\163" => "\142\x74\x6e\x20\x62\164\x6e\55\157\165\x74\x6c\x69\x6e\x65\x2d\x70\162\x69\155\141\162\x79\40\x72\165\x6c\x65\x73\x2d\x70\141\147\x65\163\x2d\x70\x72\145\166\x69\x65\167"]), ["\143\154\x61\163\163" => "\x70\x72\x2d\x61\x63\164\151\157\x6e"]); } public function ggaacuwaaaqksyoa() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto waycokyiesmqgqcg; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto eqmauwqqowsiwaue; } if (!ManipulatePost::qeosassuekcieuuy($sqeykgyoooqysmca)) { goto sqaowueaequoigsa; } $uymyaeeowcuoksgm++; sqaowueaequoigsa: eqmauwqqowsiwaue: waycokyiesmqgqcg: saycoceqywiekqsi: } uccuykggugcmiyam: $oammesyieqmwuwyi = ["\141\154\x6c" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\123\x69\x74\x65\40\120\x61\x67\145\x73", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\101\154\x6c\x20\x79\x6f\x75\162\x20\163\151\164\145\x20\160\x61\x67\x65\163\54\x20\x69\156\143\x6c\x75\x64\151\156\147\40\x73\151\156\x67\x6c\145\40\x6f\x66\40\160\x6f\x73\x74\40\x74\171\160\145\163\x2c\x20\164\x65\x72\155\163\40\x61\x6e\x64\x20\x70\165\x62\151\x63\40\x61\x72\x63\x68\x69\x76\145\40\160\x61\x67\x65\x73", PR__MDL__OPTIMIZATION)], "\142\165\144\147\x65\164" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\x59\x6f\x75\162\x20\102\165\144\147\x65\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\101\154\x6c\x20\142\x75\x64\x67\145\164\x20\160\x75\162\x63\x68\x61\x73\x65\144\x20\x62\171\40\x79\x6f\165", PR__MDL__OPTIMIZATION)]]; if (!($iuekmkswcsacoawq = PageModel::symcgieuakksimmu())) { goto yqkyoaiwcyqeaqwu; } $oammesyieqmwuwyi["\165\163\145\x64"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\125\163\145\144\x20\102\x75\144\147\145\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\103\x6f\x75\x6e\164\40\157\x66\x20\142\x75\x64\x67\145\x74\163\40\x79\x6f\x75\x20\165\163\x65\144", PR__MDL__OPTIMIZATION)]; $oammesyieqmwuwyi["\x72\145\155\141\x69\x6e"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\x52\x65\x6d\x61\151\156\x69\156\x67\40\102\x75\144\x67\145\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\x43\x6f\165\x6e\164\x20\x6f\x66\40\x62\165\144\x67\145\x74\x73\40\171\157\x75\x20\x63\141\156\40\165\163\145", PR__MDL__OPTIMIZATION)]; yqkyoaiwcyqeaqwu: return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\163\164\x61\x74\x69\x73\164\x69\143\x5f\151\x74\145\155\163"), $oammesyieqmwuwyi); } protected function iiomagmskwiawgyo(bool $ssimsmwwkqmmgqeg = false, int $eogccskwymysesoe = 3, int $smiiwkmmoscuieqo = 6) : ?string { return $this->iuygowkemiiwqmiw("\163\x74\x61\164\x69\163\164\x69\143", ["\151\163\x5f\x6d\141\151\x6e" => $ssimsmwwkqmmgqeg, "\163\150\157\167\x5f\x64\x65\x73\143" => $eogccskwymysesoe >= 6, self::qwumqqyuasyskkkc => $this->ggaacuwaaaqksyoa(), self::soquiwyuimckgiow => ['' => 12, self::esgegasyoiyogwqc => $smiiwkmmoscuieqo, self::myiysugguwsqoaqc => $eogccskwymysesoe]]); } }
