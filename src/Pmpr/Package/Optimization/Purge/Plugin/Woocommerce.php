<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ca9bf9f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Purge\Plugin; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; class Woocommerce extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\157\143\157\x6d\155\x65\162\x63\x65\x5f\165\x70\x64\x61\164\x65\x64\137\x70\x72\157\144\x75\143\164\137\x73\164\157\x63\153", [$this, "\141\143\153\143\x63\143\157\167\x6d\147\x73\143\157\171\x75\153"], PHP_INT_MAX)->qcsmikeggeemccuu("\x77\143\137\141\146\164\145\x72\x5f\x70\x72\x6f\x64\x75\x63\164\163\x5f\x65\156\144\x69\156\147\137\x73\x61\x6c\145\163", [$this, "\155\x75\151\x67\151\x65\147\163\161\x61\x79\x6f\167\143\x6f\x63"], PHP_INT_MAX)->qcsmikeggeemccuu("\x77\x63\137\x61\x66\x74\x65\162\x5f\x70\x72\x6f\144\165\143\164\163\137\163\x74\x61\x72\x74\x69\156\x67\137\x73\141\154\145\x73", [$this, "\155\x75\x69\147\151\145\x67\x73\161\141\x79\x6f\167\143\157\x63"], PHP_INT_MAX); } public function ackcccowmgscoyuk($product) { if (!function_exists("\x77\143\x5f\147\x65\164\x5f\x6f\162\x64\145\x72")) { goto gsygwgsiawgmqiyi; } $auwuoyyagaiegwae = []; if (!function_exists("\167\x63\x5f\147\x65\x74\x5f\x70\x61\x67\145\x5f\151\144")) { goto mscgewkcqcoowweg; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy(DecoratorWoocommerce::imsiwqgqaeceoomu("\x73\x68\157\160")); mscgewkcqcoowweg: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); wwukgaquuyoissgy: } suqcsgaosywaauuu: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->cekqoisoaceaqiam($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\120\165\162\147\x65\40\160\162\x6f\x64\165\x63\164\x20\x70\141\x67\145\163\x20\141\156\x64\x20\143\x61\x74\x65\147\157\162\x69\x65\x73\40\146\x6f\x72\40\127\x6f\157\103\x6f\x6d\155\145\x72\x63\145\x20\x6f\162\x64\x65\162"); gsygwgsiawgmqiyi: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto usymasgsyqgsuocg; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto qikaewekoecykeou; } $auwuoyyagaiegwae[] = $migiiksoiymissge; qikaewekoecykeou: yqagomygmeoecwey: } qsgqwyqaqiowkmco: if (!$auwuoyyagaiegwae) { goto eucqomyqykgoiuge; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); eucqomyqykgoiuge: usymasgsyqgsuocg: } }
