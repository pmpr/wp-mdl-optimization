<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c026a362a9d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\x70\x5f\x73\160\145\145\x64"; const okeoeeywmosegiiy = "\x66\x61\x69\x6c\x5f\x73\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto yykqaowwsqgqysmq; } if (function_exists("\x67\x65\164\x5f\156\145\x74\x77\x6f\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto oeocukauoyosicso; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto suqceasgacskcmkc; oeocukauoyosicso: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\x74\160\x73\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); suqceasgacskcmkc: yykqaowwsqgqysmq: return $ucaaeyusaoameywi; } }
