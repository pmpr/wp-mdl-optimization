<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bc22330c5ef             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\x5f\163\160\x65\x65\x64"; const okeoeeywmosegiiy = "\x66\x61\151\x6c\x5f\163\x61\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto yykqaowwsqgqysmq; } if (function_exists("\147\145\x74\137\156\x65\164\x77\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto oeocukauoyosicso; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto suqceasgacskcmkc; oeocukauoyosicso: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\160\163\x3a\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); suqceasgacskcmkc: yykqaowwsqgqysmq: return $ucaaeyusaoameywi; } }
