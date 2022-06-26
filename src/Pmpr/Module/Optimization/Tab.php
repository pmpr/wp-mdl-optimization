<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b8861f25a3c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\x70\137\163\160\x65\x65\144"; const okeoeeywmosegiiy = "\146\141\x69\154\137\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto yykqaowwsqgqysmq; } if (function_exists("\x67\x65\x74\x5f\156\x65\x74\167\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto oeocukauoyosicso; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto suqceasgacskcmkc; oeocukauoyosicso: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\160\163\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); suqceasgacskcmkc: yykqaowwsqgqysmq: return $ucaaeyusaoameywi; } }
