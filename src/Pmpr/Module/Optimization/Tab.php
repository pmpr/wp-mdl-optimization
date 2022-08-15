<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62fab2e386f55             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\x5f\163\160\x65\145\x64"; const okeoeeywmosegiiy = "\x66\x61\x69\154\x5f\x73\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kqsyqwwscwoswsgk; } if (function_exists("\x67\145\164\x5f\156\x65\164\167\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto wskccugoccagaqcw; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto sqyceswygksmmqqa; wskccugoccagaqcw: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\x70\x73\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); sqyceswygksmmqqa: kqsyqwwscwoswsgk: return $ucaaeyusaoameywi; } }
