<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c868b328afe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Preloader\Online; use Pmpr\Module\Optimization\Preloader\Base; use Pmpr\Module\Optimization\Preloader\Manager; class Online extends Base { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { Process::symcgieuakksimmu(); } public function start($auwuoyyagaiegwae) { if (!($ekacyecmisewiayg = Remote::symcgieuakksimmu())) { goto ciiyqsiswkcwsocm; } $this->uiagwusgwcassqua("\142\x65\146\157\x72\145\40\x73\x65\156\144\40\157\156\x6c\x69\x6e\145\x20\160\x72\x65\154\157\x61\144\x65\x72\x20\162\145\x71\165\145\x73\x74\x2e"); $sogksuscggsicmac = $ekacyecmisewiayg->start($auwuoyyagaiegwae); if (is_numeric($sogksuscggsicmac)) { goto kwowggaooiyqawyq; } foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->ieskuycqsewokycq($eeamcawaiqocomwy); mcuoyseuwoueyaie: } mqacqosyicuiqwia: goto ieoeeyieoskuyiyw; kwowggaooiyqawyq: if (!($acoioasmiqcwagsa = Process::symcgieuakksimmu())) { goto guummoewucyeuiek; } $acoioasmiqcwagsa->mykuoqakuiwsoiss([self::gouqcwikiiygyasc => $sogksuscggsicmac, self::eimuuyqioyqiqwgq => $auwuoyyagaiegwae])->save()->ieyosyaaisyquesq(); guummoewucyeuiek: ieoeeyieoskuyiyw: ciiyqsiswkcwsocm: } public function mgyqciwsceoswuoq(int $gaeqamemwmwsyukm = 0) : bool { $sogksuscggsicmac = Manager::symcgieuakksimmu()->qwmwewiqecwieoue($gaeqamemwmwsyukm); return $sogksuscggsicmac && !is_wp_error($sogksuscggsicmac); } }
