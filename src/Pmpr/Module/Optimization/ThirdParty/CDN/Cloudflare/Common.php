<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665ae7eec53d5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Module\Optimization\ThirdParty\CDN\Common as BaseClass; abstract class Common extends BaseClass { const kakkwkmmmaykeoeq = self::kgswyesggeyekgmg . "\x63\x6c\x6f\165\x64\x66\154\x61\162\145"; const suyoqewagugqoeuy = self::kakkwkmmmaykeoeq . self::wassgkgmoyygyaya; const cuocomkikquemaqq = self::suyoqewagugqoeuy . "\143\141\143\150\x65\137\155\x65\x74\141\x64\141\164\141"; private ?Engine $engine = null; public function uykissogmuaaocsg() : Engine { if ($this->engine) { goto yqqseqskcqeqkacm; } $this->engine = Engine::symcgieuakksimmu(); yqqseqskcqeqkacm: return $this->engine; } public function yusooeuwemoqcwmm() : bool { return $this->weysguygiseoukqw(Setting::kwuagsmkgsoqgqqi) && $this->weysguygiseoukqw(Setting::iqksqseqeqmaukkk); } public function qoyqoeoicgmuskoc() : bool { return (bool) $this->weysguygiseoukqw(Setting::amkasseuucsemuqm); } public function yoaiuuuwwssswyqa() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Setting::waugumayqaqkeeqq, self::OFF); } public function awwuyycwuuuggkqy($eqgoocgaqwqcimie) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update(Setting::waugumayqaqkeeqq, $eqgoocgaqwqcimie); } public function eisusiekaciioueg() : bool { return $this->yoaiuuuwwssswyqa() === self::ON; } }
