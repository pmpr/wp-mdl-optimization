<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fa68d1c92             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Exception; use GuzzleHttp\Cookie\CookieJar; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use WP_Error; class API extends BaseClass { const kcyyywioiaimkqks = "\x58\x2d\101\165\x74\150\x2d\x4b\x65\x79"; const sskckkiuimayuoeg = "\130\x2d\101\x75\164\150\55\x45\155\x61\x69\154"; const gqkuwmsyysusmquw = "\x74\145\170\164\57\x68\164\x6d\154\54\141\x70\x70\x6c\151\143\141\164\x69\157\x6e\57\170\150\164\x6d\154\x2b\170\x6d\x6c\54\141\x70\x70\x6c\151\x63\x61\x74\x69\x6f\x6e\x2f\x78\x6d\x6c\73\x71\x3d\60\x2e\71\54" . "\151\155\141\147\145\x2f\167\145\142\160\54\151\x6d\141\147\145\57\141\160\156\147\54\52\57\x2a\x3b\161\75\60\x2e\70\x2c\x61\160\160\x6c\x69\x63\141\164\151\157\156\x2f\163\x69\147\x6e\145\144\x2d\x65\x78\x63\150\x61\x6e\x67\145\x3b\166\75\x62\x33"; const keasgekkgaeuueau = "\115\157\x7a\x69\154\x6c\x61\57\65\56\x30\x20\x28\x4c\x69\156\165\170\x3b\40\101\156\144\x72\x6f\x69\x64\40\x37\56\60\x3b\x20\x4d\x6f\164\157\40\x47\40\x28\64\51\51\40\x41\x70\x70\154\145\127\145\142\113\x69\x74\57\65\63\x37\56\63\66\x20" . "\50\113\110\124\115\x4c\x2c\x20\x6c\151\153\x65\x20\107\145\x63\x6b\x6f\51\x20\103\150\162\x6f\155\x65\x2f\x38\64\x2e\60\x2e\64\x31\64\x33\56\x37\x20\x4d\157\142\x69\x6c\x65\x20\123\141\x66\141\162\151\x2f\65\63\x37\x2e\63\x36\x20\103\150\x72\x6f\155\145\x2d\114\x69\x67\150\164\150\157\165\x73\145"; const guaqqecaewyquueo = "\150\164\164\160\137\162\x65\161\x75\x65\163\x74\137\x63\x61\x63\x68\145\x5f\163\x65\164\164\x69\x6e\147\163"; protected ?string $email = ''; protected ?string $zoneId = ''; protected ?string $apiKey = ''; protected ?string $cfDomain = ''; protected ?string $apiToken = ''; protected ?string $authMode = ''; protected array $accountIds = []; public function __construct() { $this->suyquyoaausqsuay("\150\164\164\160\x73\x3a\x2f\x2f\x61\x70\151\x2e\x63\154\x6f\165\144\x66\x6c\x61\x72\145\x2e\143\x6f\155\x2f\143\x6c\x69\145\156\x74\x2f\166\64"); $aqimoomqmscqikma = Cloudflare::symcgieuakksimmu(); $this->email = $aqimoomqmscqikma->weysguygiseoukqw(Setting::yeeemccgmikyeiqq); $this->apiKey = $aqimoomqmscqikma->weysguygiseoukqw(Setting::ekecawsykcwisikm); $this->zoneId = $aqimoomqmscqikma->weysguygiseoukqw(Setting::iqksqseqeqmaukkk); $this->authMode = $aqimoomqmscqikma->weysguygiseoukqw(Setting::uksumkeyuauyuiqm, Setting::fsekswokoseswcqm); $this->cfDomain = $aqimoomqmscqikma->weysguygiseoukqw(Setting::kiuyeswmgaikeiuo); $this->apiToken = $aqimoomqmscqikma->weysguygiseoukqw(Setting::uwkciiskgyqaigqe); parent::__construct(); $this->iwoewaiwqaisaagy(); if ($this->caeygcowcuqeqkeo() === Setting::eywauigiwgqckygk) { $this->amskqmemsacmksye($this->gkuoyaqwcaqcqmck()); } else { $this->kiaqywwoysssqgig(self::kcyyywioiaimkqks, $this->aocqkkgewgggwwys())->kiaqywwoysssqgig(self::sskckkiuimayuoeg, $this->cseqaqmuaswgwuoo()); } $this->ueakuaywsqiooygo(20); } public function kmegomwosoueimki() : array { return $this->accountIds; } public function cseqaqmuaswgwuoo() : ?string { return $this->email; } public function mekmkysuwsuseaow() : ?string { return $this->zoneId; } public function sawoqaskqkasksge() : ?string { return $this->cfDomain; } public function aocqkkgewgggwwys() : ?string { return $this->apiKey; } public function gkuoyaqwcaqcqmck() : ?string { return $this->apiToken; } public function caeygcowcuqeqkeo() : ?string { return $this->authMode; } public function iqokecwcgkaookuc() { $ksaameoqigiaoigg = []; $yeacayasgueouoqc = 1; $weyoqgcesqgeusiu = 50; $ymiyawysimukkoso = false; do { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); $cokqekgqeigaoqsy = $this->sawoqaskqkasksge(); $wegekcwgakqeqsmq = $this->caeygcowcuqeqkeo(); $mkomwsiykqigmqca = "\x2f\x7a\x6f\156\145\163"; if ($cokqekgqeigaoqsy && $wegekcwgakqeqsmq === Setting::eywauigiwgqckygk) { $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::NAME, $cokqekgqeigaoqsy, $mkomwsiykqigmqca); } else { $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::imywcsggckkcywgk => $yeacayasgueouoqc, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu], $mkomwsiykqigmqca); } $keccaugmemegoimu = $this->get($mkomwsiykqigmqca, $qiouiwasaauyaaue); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $yyimiwcuegayoskq = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\145\163\165\154\164\x5f\x69\156\x66\x6f", []); if ($yyimiwcuegayoskq && is_array($yyimiwcuegayoskq)) { $saawqymgwcseukqa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\x74\157\x74\141\x6c\x5f\x70\x61\147\x65\x73"); if ($saawqymgwcseukqa && (int) $saawqymgwcseukqa > $yeacayasgueouoqc) { $ymiyawysimukkoso = true; $yeacayasgueouoqc++; } else { $ymiyawysimukkoso = false; } } else { if ($ymiyawysimukkoso) { $ymiyawysimukkoso = false; } } $sogksuscggsicmac = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::syomkiqgogwyuiyw, []); if ($sogksuscggsicmac && is_array($sogksuscggsicmac)) { foreach ($sogksuscggsicmac as $icwicymcioeyeyek) { $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::gouqcwikiiygyasc); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::NAME); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo) { $ksaameoqigiaoigg[$aokagokqyuysuksm] = $ymqmyyeuycgmigyo; } else { $iswcokucwmiosiaq = __("\125\156\x61\142\x6c\145\40\164\x6f\40\162\x65\164\x72\151\166\x65\40\x7a\x6f\x6e\145\x20\x69\144\x20\144\165\x65\x20\x74\157\x20\151\156\x76\x61\154\x69\x64\x20\162\x65\163\160\157\x6e\x73\145\x20\x64\x61\164\x61", PR__MDL__OPTIMIZATION); break; } } } } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } } while ($ymiyawysimukkoso); if (!$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\156\x61\x62\x6c\145\x20\164\x6f\x20\146\151\x6e\x64\40\144\157\155\x61\x69\x6e\x73\x20\143\157\x6e\146\151\147\165\162\145\x64\40\x6f\156\40\x43\154\x6f\x75\x64\146\x6c\x61\162\x65", PR__MDL__OPTIMIZATION)); } return $ksaameoqigiaoigg; } public function smayommusayuweky(string $qcsumeqqumqgymei) { $ksaameoqigiaoigg = ''; $keccaugmemegoimu = $this->get("\57\172\157\x6e\x65\x73\x2f{$this->mekmkysuwsuseaow()}\x2f\x72\x75\154\x65\x73\145\x74\163"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wygwekwwaigweioa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::syomkiqgogwyuiyw, []); if (is_array($wygwekwwaigweioa)) { foreach ($wygwekwwaigweioa as $ucyqiiueossykume) { if ($qcsumeqqumqgymei === $gkyciwoiiisgywcs->get($ucyqiiueossykume, Constants::qsysckqimsuoumwu)) { $ksaameoqigiaoigg = (string) $gkyciwoiiisgywcs->get($ucyqiiueossykume, Constants::gouqcwikiiygyasc, ''); break; } } } } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function aecaaquaemuuascc(array $ywmkwiwkosakssii = []) { $ksaameoqigiaoigg = ''; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\172\157\x6e\145\x73\x2f{$this->mekmkysuwsuseaow()}\x2f\162\x75\x6c\145\163\145\164\x73", [Constants::qmwqkaeamecekiso => $ywmkwiwkosakssii]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\x72\145\163\165\154\x74\56\151\x64", false); } } if ($iswcokucwmiosiaq || !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function kwogmsuwiyakckuo(?string $uiwqqmmiwqqqaugc) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->delete("\57\x7a\157\x6e\145\x73\57{$this->mekmkysuwsuseaow()}\57\162\x75\154\145\x73\145\164\163\57{$uiwqqmmiwqqqaugc}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($this->qemyqseaomicaacs($keccaugmemegoimu), $iswcokucwmiosiaq); } if ($iswcokucwmiosiaq || !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function wooogwsuiygsuuso(?string $uiwqqmmiwqqqaugc) { $ksaameoqigiaoigg = []; $keccaugmemegoimu = $this->get("\x2f\172\157\156\x65\163\x2f{$this->mekmkysuwsuseaow()}\x2f\162\x75\x6c\x65\x73\x65\x74\x73\x2f{$uiwqqmmiwqqqaugc}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = (array) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\x72\145\163\x75\x6c\x74\56\x72\x75\154\145\163", []); } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function icgowyskqkokqisu(?string $uiwqqmmiwqqqaugc, array $ywmkwiwkosakssii = []) { $ksaameoqigiaoigg = ''; if ($uiwqqmmiwqqqaugc) { $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\x7a\157\x6e\x65\x73\57{$this->mekmkysuwsuseaow()}\x2f\x72\165\x6c\x65\x73\145\164\x73\x2f{$uiwqqmmiwqqqaugc}\57\162\x75\154\145\x73", [Constants::qmwqkaeamecekiso => $ywmkwiwkosakssii]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\162\145\163\165\154\164\x2e\x69\144", false); } } } else { $iswcokucwmiosiaq = __("\122\165\154\145\163\x65\x74\x20\x49\x44\40\156\x6f\164\40\x73\x70\145\x63\151\146\151\145\x64\x2e", PR__MDL__OPTIMIZATION); } if ($iswcokucwmiosiaq || !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function koakkeimqaokakym(?string $uiwqqmmiwqqqaugc, ?string $ymawgemiwyykseqg) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->delete("\x2f\172\157\156\145\163\57{$this->mekmkysuwsuseaow()}\57\x72\165\154\x65\163\x65\164\163\x2f{$uiwqqmmiwqqqaugc}\57\x72\165\x6c\x65\163\57{$ymawgemiwyykseqg}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = true; } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function ymygowkkwyigwcea() { return $this->smayommusayuweky(self::guaqqecaewyquueo); } public function cgkaaimwgiesmwaw() { return $this->aecaaquaemuuascc([Constants::iysqkumcmmioious => Constants::qwokosymwqwyqmww, Constants::qsysckqimsuoumwu => self::guaqqecaewyquueo, Constants::eeeoygaqqmoukaeg => [], Constants::NAME => "\x43\141\x63\150\145\x20\122\165\154\x65\x73\x65\164\40\103\162\x65\141\164\x65\x64\x20\142\x79\x20\120\115\120\x52\x20\x4f\x70\164\151\x6d\151\172\x61\x74\151\157\156\40\x4d\x6f\144\x75\154\145"]); } public function sqmcyegkigweiwks() { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\154\x6f\165\x64\x66\x6c\x61\x72\145\x5f\x70\x75\162\x67\x65\137\167\x68\x6f\x6c\x65\x5f\143\141\x63\x68\145\137\142\145\146\x6f\x72\145"); $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\172\157\x6e\145\163\x2f{$this->mekmkysuwsuseaow()}\57\x70\165\162\x67\x65\x5f\x63\x61\143\150\145", [Constants::qmwqkaeamecekiso => ["\x70\x75\x72\x67\x65\x5f\x65\166\145\x72\171\164\150\151\x6e\x67" => true]]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\154\157\165\x64\146\154\141\162\x65\137\x70\165\162\x67\x65\137\x77\150\x6f\x6c\145\x5f\x63\x61\143\150\145\x5f\141\146\164\145\162"); $ksaameoqigiaoigg = true; } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } private function awkkygqayciogqym($auwuoyyagaiegwae) { $ukgsssmgkskkuoow = array_chunk($auwuoyyagaiegwae, 30); $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); try { $eeamcawaiqocomwy = "{$this->wwawisckiqeueoua()}\57\172\x6f\156\x65\163\x2f{$this->mekmkysuwsuseaow()}\57\x70\165\x72\x67\x65\137\143\x61\143\150\145"; foreach ($ukgsssmgkskkuoow as $wegougocoeeookww) { $this->wiwocsyueqyyakmy($eeamcawaiqocomwy, function ($keccaugmemegoimu) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x52\145\161\x75\145\163\164\x20\146\x6f\x72\40\165\x72\154\163\x20\x63\x6f\155\x70\x6c\145\164\x65\x64\56\40\45\x73", $this->saegmcouuukeykgi($keccaugmemegoimu))); }, function ($keccaugmemegoimu) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x52\x65\161\x75\x65\163\x74\40\146\157\x72\x20\165\162\154\163\x20\146\x61\x69\154\x65\x64\56\x20\45\163", $this->saegmcouuukeykgi($keccaugmemegoimu))); }, array_merge($qiouiwasaauyaaue, [Constants::qmwqkaeamecekiso => [Constants::cywikqeomiuewqim => array_values($wegougocoeeookww)]])); } $ksaameoqigiaoigg = true; } catch (Exception $wgaoewqkwgomoaai) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai); } return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = false; $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\154\157\x75\144\146\x6c\x61\x72\145\x5f\160\x75\162\147\145\x5f\143\x61\x63\150\x65\137\x62\171\x5f\165\162\154\x73\x5f\142\x65\x66\x6f\162\x65"); if ($eaouccqceiqewoai || count($auwuoyyagaiegwae) > 30) { $ksaameoqigiaoigg = $this->awkkygqayciogqym($auwuoyyagaiegwae); } else { $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\172\x6f\x6e\x65\x73\57{$this->mekmkysuwsuseaow()}\57\x70\165\162\147\145\x5f\143\x61\143\150\145", ["\x6a\x73\157\156" => ["\x66\151\x6c\x65\x73" => array_values($auwuoyyagaiegwae)]]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); } } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\x6c\x6f\x75\144\x66\154\141\x72\145\x5f\160\x75\x72\x67\x65\x5f\143\x61\143\150\145\x5f\142\x79\137\x75\162\154\163\137\x61\x66\164\145\162"); return $ksaameoqigiaoigg; } public function yuyomsisoyaokqgu($eeamcawaiqocomwy = false) { $ksaameoqigiaoigg = false; if (!$eeamcawaiqocomwy) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } $this->wsyymykqcoucagma(self::gqkuwmsyysusmquw)->ueakuaywsqiooygo(60)->kiaqywwoysssqgig("\125\163\x65\x72\55\101\147\x65\156\x74", self::keasgekkgaeuueau); $askcwwaauwqisyeq = "\x5f\137\143\146\x64\165\x69\x64"; $keccaugmemegoimu = $this->get($eeamcawaiqocomwy, ["\x76\145\x72\151\x66\171" => false]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg instanceof CookieJar) { $ceiyomgiaywmmogi = $osqkgokmuiasuukg->toArray(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ceiyomgiaywmmogi as $aecgggeoymywyumm) { if ($gkyciwoiiisgywcs->get($aecgggeoymywyumm, "\116\141\155\x65") === $askcwwaauwqisyeq) { $ksaameoqigiaoigg = $aecgggeoymywyumm; break; } } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x4e\157\40\143\x6f\157\153\x69\145\x73\40\146\157\165\x6e\x64\40\x69\x6e\x20\162\145\163\160\157\x6e\x73\145\40\110\x54\124\120\40\x70\x61\x63\153\x65\164"); } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($iswcokucwmiosiaq); } if (!$ksaameoqigiaoigg) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\103\x6f\x6f\x6b\151\x65\x20\x25\x73\x20\156\x6f\164\x20\x66\157\x75\156\x64", $askcwwaauwqisyeq)); } return $ksaameoqigiaoigg; } private function kswoakmasgociiay(string $uusmaiomayssaecw) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->get("\57\x7a\157\156\x65\x73\x2f{$this->mekmkysuwsuseaow()}\57\x73\145\x74\x74\x69\x6e\x67\163\57{$uusmaiomayssaecw}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\162\145\163\x75\154\x74\x2e\166\141\x6c\x75\x65", false); } else { $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\125\x6e\141\142\154\x65\x20\x74\x6f\40\x66\x69\x6e\x64\40\45\x73\40\x73\145\164\164\151\156\x67\163\x3a\40\x25\163", PR__MDL__OPTIMIZATION), $uusmaiomayssaecw, $iswcokucwmiosiaq)); } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x55\x6e\x61\142\x6c\145\x20\164\157\40\x67\145\x74\x20\45\x73\40\x73\145\x74\x74\x69\156\147\163\72\40\x25\163", PR__MDL__OPTIMIZATION), $uusmaiomayssaecw, $iswcokucwmiosiaq)); } return $ksaameoqigiaoigg; } private function aawmsiaumqygusow(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->kqcyawyscakoskke("{$this->wwawisckiqeueoua()}\x2f\x7a\157\156\145\x73\x2f{$this->mekmkysuwsuseaow()}\57\163\x65\x74\164\151\156\147\x73\x2f{$uusmaiomayssaecw}", [Constants::qmwqkaeamecekiso => [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($this->qemyqseaomicaacs($keccaugmemegoimu), $iswcokucwmiosiaq); } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function emukusgiakigsoms($wmekckkyoiyickmk) { return $this->aawmsiaumqygusow("\x64\145\x76\x65\x6c\x6f\x70\x6d\x65\156\164\x5f\x6d\x6f\x64\145", $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($wmekckkyoiyickmk)); } public function ymkgoumkoycwwmmq() { return $this->kswoakmasgociiay("\x64\145\166\x65\154\157\x70\155\x65\x6e\164\x5f\155\157\x64\x65"); } }
