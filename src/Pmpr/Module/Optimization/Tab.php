<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554aae47c553             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\x5f\163\x70\x65\145\144"; const okeoeeywmosegiiy = "\146\141\151\154\x5f\x73\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto gqeoaceyoiicoaec; } if (function_exists("\147\145\164\137\156\x65\164\167\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto msmmiaumiasmsiog; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto oksqsucimimsswcg; msmmiaumiasmsiog: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\160\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); oksqsucimimsswcg: gqeoaceyoiicoaec: return $ucaaeyusaoameywi; } }
