<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb243a19822             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\CDN; use CF\WordPress\Hooks; use Pmpr\Common\Foundation\Interfaces\Constants; class Cloudflare extends Common { private $hooks = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\156\157\164\x69\143\145\x73", [$this, "\x6d\145\171\147\163\171\167\x75\151\x6b\x69\x6f\x6b\163\153\x67"])->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\x5f\x6e\x6f\164\x69\x63\145\x73", [$this, "\157\151\153\x6d\x69\x65\171\x6f\157\x73\x77\153\x75\x71\167\x6f"])->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\156\x6f\164\x69\x63\145\163", [$this, "\155\x79\153\x63\147\165\x77\155\141\143\161\165\x65\x6d\153\x73"]); } public function meygsywuikiokskg() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!(!$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\114\x4f\125\x44\x46\114\101\x52\x45\137\120\114\125\x47\111\x4e\x5f\x44\x49\122") || !$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\114\117\x55\104\x46\x4c\101\122\x45\137\x48\124\124\x50\62\x5f\123\105\122\x56\x45\122\x5f\120\x55\x53\110\137\101\103\124\x49\126\x45"))) { goto yqqwweuisgoskcwa; } return; yqqwweuisgoskcwa: if (!($this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw() || !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie(Constants::gewmeskawiqikkoc))) { goto uaaiuqickwysiqiy; } return; uaaiuqickwysiqiy: $uamcoiueqaamsqma = __("\103\154\157\x75\x64\146\x6c\x61\x72\145\47\x73\x20\110\x54\124\x50\x2f\62\x20\123\145\162\166\x65\162\40\120\x75\x73\150\40\x69\163\x20\x69\x6e\143\157\155\160\x61\x74\151\142\x6c\145\40\x77\151\x74\150\x20\164\150\145\40\x66\145\141\x74\x75\162\x65\x73\40\x6f\x66\x20\122\145\x6d\157\166\x65\x20\125\156\x75\x73\x65\x64\40\x43\123\123\x2e\40\127\145\40\x73\x74\x72\x6f\156\147\x6c\x79\40\162\x65\143\x6f\155\155\x65\156\144\x20\144\151\163\141\x62\x6c\151\156\147\40\x69\x74\56", PR__MDL__OPTIMIZATION); $this->cimaucgayqyyccoc($uamcoiueqaamsqma, "\x63\154\x6f\165\144\x66\x6c\x61\162\x65\137\163\145\162\x76\145\x72\x5f\160\x75\163\x68"); } public function oikmieyooswkuqwo() { } public function mykcguwmacquemks() { } private function aiomiwiwyeyqeoqs() : bool { if ($this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai("\143\154\x6f\x75\x64\146\x6c\x61\x72\145\57\x63\x6c\157\165\144\x66\x6c\x61\x72\x65\x2e\x70\150\160")) { goto iioauiogmamumiym; } return false; iioauiogmamumiym: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!(empty($qkqgcaykemoiecma->get("\143\154\157\x75\144\x66\x6c\141\162\x65\137\x61\x70\x69\137\x65\155\x61\151\x6c")) || empty($qkqgcaykemoiecma->get("\143\154\x6f\x75\144\x66\x6c\141\x72\145\137\141\160\151\137\x6b\145\171")) || empty($qkqgcaykemoiecma->get("\143\x6c\x6f\x75\x64\x66\154\x61\x72\145\137\x63\141\143\150\x65\x64\137\x64\x6f\x6d\x61\151\x6e\x5f\x6e\141\x6d\145")))) { goto gmwcqkgsaesmsuea; } return false; gmwcqkgsaesmsuea: return true; } private function egakasqqyawukwco() : Hooks { if ($this->hooks) { goto cgkaoiyoqwmkaqck; } $this->hooks = new Hooks(); cgkaoiyoqwmkaqck: return $this->hooks; } public function wciuogmwscgcqkmc() { $this->egakasqqyawukwco()->purgeCacheEverything(); } public function kggeaycqkokcquqk($ooosquycguwewsao) { $this->egakasqqyawukwco()->purgeCacheByRelevantURLs($ooosquycguwewsao); } }
