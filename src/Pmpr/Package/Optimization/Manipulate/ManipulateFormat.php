<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class ManipulateFormat extends BaseClass { public static function kcwgwosqkkkkmuks(string $eeamcawaiqocomwy) { goto gsemmoqumiwkagqs; uqekacqgsswywaqm: $yiasugywggckywoa = array_filter($yiasugywggckywoa, "\x75\x72\x6c\x64\145\143\157\144\145"); goto quawmacqusmagccu; yamwymgiamccscgy: if (!is_string($eeamcawaiqocomwy)) { goto myammocygmwwikke; } goto qossqgoqyewwuwiq; iqcuysumigguiquo: $eeamcawaiqocomwy = self::gooqqcmsyseiaikc($kocecsiyeigoycei); goto eaewcssugmemceos; isisosauuckokqss: $gqgemcmoicmgaqie = ManipulateArray::get($eeamcawaiqocomwy, "\x71\165\145\162\171", ''); goto ocgemgqyoaesmugu; iwkscimekaggogea: $yiasugywggckywoa = (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\157\160\x74\x5f\x70\141\x72\x73\145\137\x75\162\x6c"), ["\x68\x6f\163\x74" => $gwgucoaaqcwwciqq, "\x70\141\x74\150" => $mkomwsiykqigmqca, "\163\143\x68\x65\x6d\145" => $aaceqemaqqeckueq, "\161\165\145\x72\x79" => $gqgemcmoicmgaqie, "\146\x72\x61\147\x6d\x65\156\164" => $geqceacmoksoayem]); goto uqekacqgsswywaqm; kwoasqeqkuoqiaaq: $geqceacmoksoayem = ManipulateArray::get($eeamcawaiqocomwy, "\x66\x72\141\147\155\145\156\164", ''); goto iwkscimekaggogea; quawmacqusmagccu: myammocygmwwikke: goto seymqccqwicwoqgs; misccmyeikioaiou: $mkomwsiykqigmqca = ManipulateArray::get($eeamcawaiqocomwy, "\160\x61\164\x68", ''); goto isisosauuckokqss; qossqgoqyewwuwiq: $kocecsiyeigoycei = preg_replace_callback("\45\133\x5e\72\57\x40\77\x26\x3d\x23\135\x2b\45\x75\163\104", function ($meyiiwcswqmuggyg) { return rawurlencode($meyiiwcswqmuggyg[0]); }, $eeamcawaiqocomwy); goto iqcuysumigguiquo; ocgemgqyoaesmugu: $aaceqemaqqeckueq = ManipulateArray::get($eeamcawaiqocomwy, "\x73\143\150\145\155\141", ''); goto kwoasqeqkuoqiaaq; eaewcssugmemceos: $gwgucoaaqcwwciqq = strtolower(ManipulateArray::get("\x68\157\x73\164", '')); goto misccmyeikioaiou; seymqccqwicwoqgs: return $yiasugywggckywoa; goto kciomoomeuueoasm; gsemmoqumiwkagqs: $yiasugywggckywoa = []; goto yamwymgiamccscgy; kciomoomeuueoasm: } public static function cysksgacseyymyqs(string $qogsmwakwacwqogk) { goto mycgmksqcgqkagqe; recmgqwkmewwkocw: yaasmygiqueskqoe: goto igumsqkaccogcgoi; igumsqkaccogcgoi: return false; goto ieaoiwcqywakayai; mguqeqqmaqksyaei: return self::gooqqcmsyseiaikc($qogsmwakwacwqogk, PHP_URL_PATH); goto recmgqwkmewwkocw; mycgmksqcgqkagqe: if (!$qogsmwakwacwqogk) { goto yaasmygiqueskqoe; } goto mguqeqqmaqksyaei; ieaoiwcqywakayai: } public static function eyayuwiqsqsmkamc(?string $eeamcawaiqocomwy, ?string $wksoawcgagcgoask) { return _get_component_from_parsed_url_array(self::gooqqcmsyseiaikc($eeamcawaiqocomwy), $wksoawcgagcgoask); } }