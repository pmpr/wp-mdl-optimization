<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6658781c3e0dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Module\Optimization\ThirdParty\CDN\Common as BaseClass; abstract class Common extends BaseClass { const kakkwkmmmaykeoeq = self::kgswyesggeyekgmg . "\x63\154\157\165\x64\x66\154\141\162\x65"; const suyoqewagugqoeuy = self::kakkwkmmmaykeoeq . self::wassgkgmoyygyaya; const cuocomkikquemaqq = self::suyoqewagugqoeuy . "\143\141\x63\150\145\x5f\155\x65\164\x61\x64\x61\x74\141"; private ?Engine $engine = null; public function uykissogmuaaocsg() : Engine { if ($this->engine) { goto uoewiggumomegksg; } $this->engine = Engine::symcgieuakksimmu(); uoewiggumomegksg: return $this->engine; } public function yusooeuwemoqcwmm() : bool { return $this->weysguygiseoukqw(Setting::kwuagsmkgsoqgqqi) && $this->weysguygiseoukqw(Setting::iqksqseqeqmaukkk); } public function qoyqoeoicgmuskoc() : bool { return (bool) $this->weysguygiseoukqw(Setting::amkasseuucsemuqm); } public function yoaiuuuwwssswyqa() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Setting::waugumayqaqkeeqq, self::OFF); } public function awwuyycwuuuggkqy($eqgoocgaqwqcimie) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update(Setting::waugumayqaqkeeqq, $eqgoocgaqwqcimie); } public function eisusiekaciioueg() : bool { return $this->yoaiuuuwwssswyqa() === self::ON; } }
