<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae3139832e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\x5f\163\x70\x65\145\144"; const okeoeeywmosegiiy = "\x66\141\151\x6c\137\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto iuuuususuuuaieem; } if (function_exists("\x67\x65\x74\x5f\x6e\x65\164\x77\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto uykousayyomcaeaa; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto uimeeckqksqeekqq; uykousayyomcaeaa: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\x74\160\x73\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); uimeeckqksqeekqq: iuuuususuuuaieem: return $ucaaeyusaoameywi; } }
