<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642c3cb2b5661             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Modal\Segment; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Segment as BaseClass; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Page\Interfaces\CommonInterface; use Pmpr\Module\Optimization\Page\Model as PageModel; use Pmpr\Module\Optimization\Traits\CommonTrait; use WP_Post_Type; class Segment extends BaseClass implements CommonInterface { use CommonTrait; public function ggaacuwaaaqksyoa() : array { $uymyaeeowcuoksgm = 0; $gyiuucqgwckqiiqe = Manipulate::maykkqauyaoqmqeu(self::ckmqoekmugkggeym); foreach ($gyiuucqgwckqiiqe as $ymqmyyeuycgmigyo => $sqeykgyoooqysmca) { if (!$sqeykgyoooqysmca instanceof WP_Post_Type) { goto gcqssckowmywoesw; } $gaeqamemwmwsyukm = ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo); $uymyaeeowcuoksgm += $gaeqamemwmwsyukm; $ygqyiqguoomyooyq = ManipulatePage::eokiwumgqmymgyoa(); if (!($ymqmyyeuycgmigyo !== self::imywcsggckkcywgk || (!$ygqyiqguoomyooyq || $ymqmyyeuycgmigyo !== self::mswoacegomcucaik))) { goto kocaieyauyiqmyiy; } if (!ManipulatePost::qeosassuekcieuuy($sqeykgyoooqysmca)) { goto icoiqskygugkgmkm; } $uymyaeeowcuoksgm++; icoiqskygugkgmkm: kocaieyauyiqmyiy: gcqssckowmywoesw: maguoggkqamaiuag: } swicauyqusmgeccu: $oammesyieqmwuwyi = ["\141\154\x6c" => [self::ciyoccqkiamemcmm => $uymyaeeowcuoksgm, self::qescuiwgsyuikume => __("\x53\151\x74\145\40\x50\141\x67\145\x73", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\x41\154\154\x20\x79\x6f\165\x72\x20\163\151\164\x65\x20\x70\x61\147\145\163\x2c\x20\151\x6e\143\154\165\144\151\x6e\147\40\163\151\x6e\x67\154\145\40\x6f\146\x20\160\x6f\163\x74\40\164\171\x70\145\163\54\40\x74\145\162\x6d\x73\40\141\156\144\40\x70\165\x62\x69\143\x20\x61\162\143\x68\151\x76\x65\40\160\141\147\145\163", PR__MDL__OPTIMIZATION)], "\x62\165\144\x67\x65\164" => [self::ciyoccqkiamemcmm => $this->eiykqgmgyuowgeog(), self::qescuiwgsyuikume => __("\x59\x6f\x75\x72\x20\102\165\144\x67\145\164", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\x41\x6c\x6c\x20\x62\x75\x64\x67\x65\164\x20\160\165\x72\143\x68\x61\x73\x65\x64\x20\x62\171\40\x79\157\x75", PR__MDL__OPTIMIZATION)]]; if (!($iuekmkswcsacoawq = PageModel::symcgieuakksimmu())) { goto eekkcooqswqouoei; } $oammesyieqmwuwyi["\x75\163\145\144"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ggcikeumgqoockyo(), self::qescuiwgsyuikume => __("\125\163\145\144\40\x42\165\x64\x67\145\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\103\157\165\156\164\40\x6f\x66\x20\x62\x75\144\x67\x65\x74\x73\x20\x79\x6f\x75\x20\165\x73\145\x64", PR__MDL__OPTIMIZATION)]; $oammesyieqmwuwyi["\162\x65\155\x61\x69\156"] = [self::ciyoccqkiamemcmm => $iuekmkswcsacoawq->ewcikckouwmuqkms(), self::qescuiwgsyuikume => __("\122\x65\155\141\x69\156\151\156\x67\x20\102\x75\144\x67\145\x74", PR__MDL__OPTIMIZATION), self::qgqyauaqwqmqseim => IconInterface::socwsoqsecumioug, self::eqkeooqcsscoggia => __("\103\157\x75\x6e\164\40\x6f\146\40\x62\x75\144\x67\x65\x74\x73\x20\x79\157\x75\40\x63\141\156\40\x75\163\x65", PR__MDL__OPTIMIZATION)]; eekkcooqswqouoei: return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\x5f\163\164\141\x74\151\163\x74\151\143\x5f\x69\164\145\x6d\163"), $oammesyieqmwuwyi); } protected function wqwkuqceaqeiquqm() : string { return ManipulateHTML::iaaacsuskiakkwui(ManipulateHTML::yuawgssgauywkiia(__("\120\x61\147\145\163\40\120\x72\x65\166\x69\x65\167", PR__MDL__OPTIMIZATION), "\x23", ["\x69\x64" => "\162\165\154\x65\x5f\x70\x61\x67\145\x5f\x70\162\x65\166\x69\145\167", "\x63\x6c\141\x73\163" => "\x62\164\156\x20\142\x74\156\55\x6f\165\x74\x6c\151\x6e\145\x2d\160\x72\x69\155\141\x72\x79\40\162\x75\x6c\145\163\55\160\x61\x67\145\x73\x2d\160\x72\145\166\x69\145\167"]), ["\x63\x6c\x61\x73\163" => "\160\x72\55\141\x63\x74\151\157\x6e"]); } protected function iiomagmskwiawgyo(bool $ssimsmwwkqmmgqeg = false, int $eogccskwymysesoe = 3, int $smiiwkmmoscuieqo = 6) : ?string { return $this->iuygowkemiiwqmiw("\x73\164\141\x74\151\163\x74\x69\143", ["\151\163\x5f\155\x61\x69\156" => $ssimsmwwkqmmgqeg, "\163\150\157\167\x5f\x64\x65\163\143" => $eogccskwymysesoe >= 6, self::qwumqqyuasyskkkc => $this->ggaacuwaaaqksyoa(), self::soquiwyuimckgiow => ['' => 12, self::esgegasyoiyogwqc => $smiiwkmmoscuieqo, self::myiysugguwsqoaqc => $eogccskwymysesoe]]); } }
