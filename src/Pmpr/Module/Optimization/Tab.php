<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6533a38a20125             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\x5f\x73\160\x65\145\144"; const okeoeeywmosegiiy = "\x66\141\x69\154\137\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto iuwccksomkkouogy; } if (function_exists("\x67\x65\x74\x5f\156\145\164\x77\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto aqwoykqaquewcaki; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto mesesokuoomcioom; aqwoykqaquewcaki: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\x70\163\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); mesesokuoomcioom: iuwccksomkkouogy: return $ucaaeyusaoameywi; } }
