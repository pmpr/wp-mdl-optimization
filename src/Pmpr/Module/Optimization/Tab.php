<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c85c689cc91             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\137\x73\160\x65\x65\x64"; const okeoeeywmosegiiy = "\x66\x61\151\154\x5f\x73\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto yykqaowwsqgqysmq; } if (function_exists("\x67\145\x74\x5f\156\x65\164\x77\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto oeocukauoyosicso; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto suqceasgacskcmkc; oeocukauoyosicso: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\x74\x70\x73\72\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); suqceasgacskcmkc: yykqaowwsqgqysmq: return $ucaaeyusaoameywi; } }
