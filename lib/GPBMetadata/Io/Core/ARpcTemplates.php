<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/core/a_rpc_templates.proto

namespace GPBMetadata\Io\Core;

class ARpcTemplates
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        \GPBMetadata\Io\Common\Template::initOnce();
        \GPBMetadata\Io\Common\Proximity::initOnce();
        \GPBMetadata\Io\Common\Links::initOnce();
        \GPBMetadata\Io\Common\Pagination::initOnce();
        \GPBMetadata\Io\Common\Filter::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afc740a1d696f2f636f72652f615f7270635f74656d706c617465732e70726f746f1202696f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a2c70726f746f632d67656e2d737761676765722f6f7074696f6e732f616e6e6f746174696f6e732e70726f746f1a1e696f2f636f6d6d6f6e2f636f6d6d6f6e5f6f626a656374732e70726f746f1a18696f2f636f6d6d6f6e2f74656d706c6174652e70726f746f1a19696f2f636f6d6d6f6e2f70726f78696d6974792e70726f746f1a15696f2f636f6d6d6f6e2f6c696e6b732e70726f746f1a1a696f2f636f6d6d6f6e2f706167696e6174696f6e2e70726f746f1a16696f2f636f6d6d6f6e2f66696c7465722e70726f746f32a3720a0954656d706c6174657312f4010a0e63726561746554656d706c61746512102e696f2e5061737354656d706c6174651a062e696f2e496422c70182d3e493020e22092f74656d706c6174653a012a9241af010a0e506173732054656d706c61746573121443726561746520506173732054656d706c6174651a1f43726561746573206120706173732074656d706c617465207265636f72642e4a300a0334303012290a27546865726520697320612070726f626c656d20776974682074686520696e70757420646174612e4a340a03343033122d0a2b52657475726e6564207768656e207468652075736572206c61636b7320617574686f72697a6174696f6e2e12e6020a0e75706461746554656d706c61746512102e696f2e5061737354656d706c6174651a102e696f2e5061737354656d706c61746522af0282d3e493020e1a092f74656d706c6174653a012a924197020a0e506173732054656d706c61746573121455706461746520506173732054656d706c6174651a205570646174657320616e20706173732074656d706c617465207265636f72642e4a300a0334303012290a27546865726520697320612070726f626c656d20776974682074686520696e70757420646174612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e4a570a0335303312500a4e53657276657220697320756e617661696c61626c652e204261636b206f666620666f72203235306d7320616e6420726570656174207265717565737420756e74696c207375636365737366756c2e12e2010a0b67657454656d706c61746512062e696f2e49641a182e696f2e5061737354656d706c617465526573706f6e736522b00182d3e493021512132f74656d706c6174652f646174612f7b69647d924191010a0e506173732054656d706c61746573121847657420506173732054656d706c617465205265636f72641a21526574726965766573206120706173732074656d706c617465207265636f72642e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e1290020a1267657444656661756c7454656d706c617465121a2e696f2e44656661756c7454656d706c617465526571756573741a102e696f2e5061737354656d706c61746522cb0182d3e493022612242f74656d706c6174652f646174612f7b70726f746f636f6c7d2f7b7265766973696f6e7d92419b010a0e506173732054656d706c61746573122247657420412044656661756c7420506173732054656d706c617465205265636f72641a21526574726965766573206120706173732074656d706c617465207265636f72642e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12f1010a0c636f707954656d706c61746512132e696f2e436f70794f626a656374496e7075741a062e696f2e496422c30182d3e4930213220e2f74656d706c6174652f636f70793a012a9241a6010a0e506173732054656d706c61746573121b436f7079206120506173732054656d706c617465205265636f72641a33436f70696573206120706173732074656d706c617465207265636f726420616e642072657475726e732061206e65772069642e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12d8010a0e64656c65746554656d706c61746512062e696f2e49641a162e676f6f676c652e70726f746f6275662e456d70747922a50182d3e49302102a0e2f74656d706c6174652f7b69647d92418b010a0e506173732054656d706c61746573121444656c65746520506173732054656d706c6174651a1f44656c6574657320616e20706173732074656d706c617465207265636f72644a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12d4020a1e6c69737454656d706c61746573466f725573657244657072656361746564120e2e696f2e506167696e6174696f6e1a182e696f2e5061737354656d706c617465526573706f6e736522850282d3e4930211120f2f74656d706c617465732f757365729241ea010a0e506173732054656d706c61746573122c47657420416c6c20506173732054656d706c6174657320466f722055736572205b444550524543415445445d1a665b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d2052657472696576657320616c6c20706173732074656d706c617465732073746f72656420756e646572207468652075736572206163636f756e742e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e300112b6050a146c69737454656d706c61746573466f7255736572120b2e696f2e46696c746572731a182e696f2e5061737354656d706c617465526573706f6e736522f40482d3e493021922142f74656d706c617465732f757365722f6c6973743a012a9241d1040a0e506173732054656d706c61746573121f47657420416c6c20506173732054656d706c6174657320466f7220557365721ad90352657472696576657320616c6c20706173732074656d706c617465732073746f72656420756e646572207468652075736572206163636f756e742e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d706173732d74656d706c61746573223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d706173732d74656d706c617465733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e300112c6020a176c69737454656d706c6174657344657072656361746564120e2e696f2e506167696e6174696f6e1a182e696f2e5061737354656d706c617465526573706f6e736522fe0182d3e493020c120a2f74656d706c617465739241e8010a0e506173732054656d706c61746573122f47657420416c6c20506173732054656d706c6174657320466f7220436f6d70616e79205b444550524543415445445d1a615b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d2052657472696576657320616c6c20706173732074656d706c617465732073746f72656420756e6465722074686520636f6d70616e792e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e300112a8050a0d6c69737454656d706c61746573120b2e696f2e46696c746572731a182e696f2e5061737354656d706c617465526573706f6e736522ed0482d3e4930214220f2f74656d706c617465732f6c6973743a012a9241cf040a0e506173732054656d706c61746573122247657420416c6c20506173732054656d706c6174657320466f7220436f6d70616e791ad40352657472696576657320616c6c20706173732074656d706c617465732073746f72656420756e6465722074686520636f6d70616e792e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d706173732d74656d706c61746573223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d706173732d74656d706c617465733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e300112d6020a18636f756e7454656d706c6174657344657072656361746564120e2e696f2e506167696e6174696f6e1a092e696f2e436f756e74229e0282d3e493021212102f74656d706c617465732f636f756e74924182020a0e506173732054656d706c61746573123b436f756e7420416c6c20506173732054656d706c6174657320417661696c61626c6520746f205468652055736572205b444550524543415445445d1a6f5b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d20526574726965766573206120636f756e74206f6620706173732074656d706c617465732073746f72656420756e646572207468652075736572277320636f6d70616e792e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12b3050a0e636f756e7454656d706c61746573120b2e696f2e46696c746572731a092e696f2e436f756e7422880582d3e493021522102f74656d706c617465732f636f756e743a012a9241e9040a0e506173732054656d706c61746573122e436f756e7420416c6c20506173732054656d706c6174657320417661696c61626c6520746f2054686520557365721ae203526574726965766573206120636f756e74206f6620706173732074656d706c617465732073746f72656420756e646572207468652075736572277320636f6d70616e792e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d706173732d74656d706c61746573223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d706173732d74656d706c617465733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12d7020a1f636f756e7454656d706c61746573466f725573657244657072656361746564120e2e696f2e506167696e6174696f6e1a092e696f2e436f756e7422980282d3e493021712152f74656d706c617465732f757365722f636f756e749241f7010a0e506173732054656d706c617465731237436f756e7420416c6c20506173732054656d706c61746573204f776e6564206279205468652055736572205b444550524543415445445d1a685b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d2052657472696576657320616c6c20706173732074656d706c617465732073746f72656420756e6465722074686520757365722773206163636f756e742e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12b4050a15636f756e7454656d706c61746573466f7255736572120b2e696f2e46696c746572731a092e696f2e436f756e7422820582d3e493021a22152f74656d706c617465732f757365722f636f756e743a012a9241de040a0e506173732054656d706c61746573122a436f756e7420416c6c20506173732054656d706c61746573204f776e65642062792054686520557365721adb0352657472696576657320616c6c20706173732074656d706c617465732073746f72656420756e6465722074686520757365722773206163636f756e742e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d706173732d74656d706c61746573223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d706173732d74656d706c617465733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12e4010a0e6372656174654c6f636174696f6e120f2e696f2e4750534c6f636174696f6e1a062e696f2e496422b80182d3e493020e22092f6c6f636174696f6e3a012a9241a0010a094c6f636174696f6e73120f437265617465204c6f636174696f6e1a1a437265617465732061206c6f636174696f6e206f626a6563742e4a300a0334303012290a27546865726520697320612070726f626c656d20776974682074686520696e70757420646174612e4a340a03343033122d0a2b52657475726e6564207768656e207468652075736572206c61636b7320617574686f72697a6174696f6e2e12d4020a0e7570646174654c6f636174696f6e120f2e696f2e4750534c6f636174696f6e1a0f2e696f2e4750534c6f636174696f6e229f0282d3e493020e1a092f6c6f636174696f6e3a012a924187020a094c6f636174696f6e73120f557064617465204c6f636174696f6e1a1a557064617465732061206c6f636174696f6e206f626a6563742e4a300a0334303012290a27546865726520697320612070726f626c656d20776974682074686520696e70757420646174612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e4a570a0335303312500a4e53657276657220697320756e617661696c61626c652e204261636b206f666620666f72203235306d7320616e6420726570656174207265717565737420756e74696c207375636365737366756c2e12c5010a0b6765744c6f636174696f6e12062e696f2e49641a0f2e696f2e4750534c6f636174696f6e229c0182d3e4930210120e2f6c6f636174696f6e2f7b69647d924182010a094c6f636174696f6e73120c476574204c6f636174696f6e1a2352657472696576657320612073696e676c65206c6f636174696f6e206f626a6563742e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12ab020a176c6973744c6f636174696f6e7344657072656361746564120e2e696f2e506167696e6174696f6e1a0f2e696f2e4750534c6f636174696f6e22ec0182d3e493020c120a2f6c6f636174696f6e739241d6010a094c6f636174696f6e73121b4c697374204c6f636174696f6e73205b444550524543415445445d1a685b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d20526574726965766573206c6f636174696f6e73206f626a656374732074686174206d617463682074686520737570706c6965642063726974657269612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e30011283050a0d6c6973744c6f636174696f6e73120b2e696f2e46696c746572731a0f2e696f2e4750534c6f636174696f6e22d10482d3e4930214220f2f6c6f636174696f6e732f6c6973743a012a9241b3040a094c6f636174696f6e73120e4c697374204c6f636174696f6e731ad103526574726965766573206c6f636174696f6e73206f626a656374732074686174206d617463682074686520737570706c6965642063726974657269612e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6c6f636174696f6e73223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6c6f636174696f6e733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e300112d9010a0c636f70794c6f636174696f6e12132e696f2e436f70794f626a656374496e7075741a062e696f2e496422ab0182d3e4930213220e2f6c6f636174696f6e2f636f70793a012a92418e010a094c6f636174696f6e73120d436f7079204c6f636174696f6e1a2e436f706965732061206c6f636174696f6e207265636f726420616e642072657475726e732061206e65772069642e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12c7010a0e64656c6574654c6f636174696f6e12062e696f2e49641a162e676f6f676c652e70726f746f6275662e456d70747922940182d3e49302102a0e2f6c6f636174696f6e2f7b69647d92417b0a094c6f636174696f6e73120f44656c657465204c6f636174696f6e1a1944656c657465732061206c6f636174696f6e206f626a6563744a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12ae020a18636f756e744c6f636174696f6e7344657072656361746564120e2e696f2e506167696e6174696f6e1a092e696f2e436f756e7422f60182d3e493021212102f6c6f636174696f6e732f636f756e749241da010a094c6f636174696f6e73121c436f756e74204c6f636174696f6e73205b444550524543415445445d1a6b5b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d20526574726965766573206120636f756e74206f66206c6f636174696f6e732074686174206d617463682074686520737570706c6965642063726974657269612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e1281050a0e636f756e744c6f636174696f6e73120b2e696f2e46696c746572731a092e696f2e436f756e7422d60482d3e493021522102f6c6f636174696f6e732f636f756e743a012a9241b7040a094c6f636174696f6e73120f436f756e74204c6f636174696f6e731ad403526574726965766573206120636f756e74206f66206c6f636174696f6e732074686174206d617463682074686520737570706c6965642063726974657269612e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6c6f636174696f6e73223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6c6f636174696f6e733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12d5010a0c637265617465426561636f6e120a2e696f2e426561636f6e1a062e696f2e496422b00182d3e493020c22072f626561636f6e3a012a92419a010a07426561636f6e73120d43726561746520426561636f6e1a1843726561746573206120626561636f6e206f626a6563742e4a300a0334303012290a27546865726520697320612070726f626c656d20776974682074686520696e70757420646174612e4a340a03343033122d0a2b52657475726e6564207768656e207468652075736572206c61636b7320617574686f72697a6174696f6e2e12c0020a0c757064617465426561636f6e120a2e696f2e426561636f6e1a0a2e696f2e426561636f6e22970282d3e493020c1a072f626561636f6e3a012a924181020a07426561636f6e73120d55706461746520426561636f6e1a1855706461746573206120626561636f6e206f626a6563742e4a300a0334303012290a27546865726520697320612070726f626c656d20776974682074686520696e70757420646174612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e4a570a0335303312500a4e53657276657220697320756e617661696c61626c652e204261636b206f666620666f72203235306d7320616e6420726570656174207265717565737420756e74696c207375636365737366756c2e12b5010a09676574426561636f6e12062e696f2e49641a0a2e696f2e426561636f6e22930182d3e493020e120c2f626561636f6e2f7b69647d92417c0a07426561636f6e73120a47657420426561636f6e1a2152657472696576657320612073696e676c6520626561636f6e206f626a6563742e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e129b020a156c697374426561636f6e7344657072656361746564120e2e696f2e506167696e6174696f6e1a0a2e696f2e426561636f6e22e30182d3e493020a12082f626561636f6e739241cf010a07426561636f6e7312194c69737420426561636f6e73205b444550524543415445445d1a655b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d2052657472696576657320626561636f6e206f626a656374732074686174206d617463682074686520737570706c6965642063726974657269612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e300112ef040a0b6c697374426561636f6e73120b2e696f2e46696c746572731a0a2e696f2e426561636f6e22c40482d3e4930212220d2f626561636f6e732f6c6973743a012a9241a8040a07426561636f6e73120c4c69737420426561636f6e731aca0352657472696576657320626561636f6e206f626a656374732074686174206d617463682074686520737570706c6965642063726974657269612e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d626561636f6e73223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d626561636f6e733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e300112cf010a0a636f7079426561636f6e12132e696f2e436f70794f626a656374496e7075741a062e696f2e496422a30182d3e4930211220c2f626561636f6e2f636f70793a012a924188010a07426561636f6e73120b436f707920426561636f6e1a2c436f70696573206120626561636f6e207265636f726420616e642072657475726e732061206e65772069642e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12bd010a0c64656c657465426561636f6e12062e696f2e49641a162e676f6f676c652e70726f746f6275662e456d707479228c0182d3e493020e2a0c2f626561636f6e2f7b69647d9241750a07426561636f6e73120d44656c65746520426561636f6e1a1744656c65746573206120626561636f6e206f626a6563744a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12a4020a16636f756e74426561636f6e7344657072656361746564120e2e696f2e506167696e6174696f6e1a092e696f2e436f756e7422ee0182d3e4930210120e2f626561636f6e732f636f756e749241d4010a07426561636f6e73121a436f756e7420426561636f6e73205b444550524543415445445d1a695b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d20526574726965766573206120636f756e74206f6620626561636f6e732074686174206d617463682074686520737570706c6965642063726974657269612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12f3040a0c636f756e74426561636f6e73120b2e696f2e46696c746572731a092e696f2e436f756e7422ca0482d3e4930213220e2f626561636f6e732f636f756e743a012a9241ad040a07426561636f6e73120d436f756e7420426561636f6e731ace03526574726965766573206120636f756e74206f6620626561636f6e732074686174206d617463682074686520737570706c6965642063726974657269612e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d626561636f6e73223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d626561636f6e733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12c9010a0a6372656174654c696e6b12082e696f2e4c696e6b1a062e696f2e496422a80182d3e493020a22052f6c696e6b3a012a924194010a054c696e6b73120b437265617465204c696e6b1a16437265617465732061206c696e6b206f626a6563742e4a300a0334303012290a27546865726520697320612070726f626c656d20776974682074686520696e70757420646174612e4a340a03343033122d0a2b52657475726e6564207768656e207468652075736572206c61636b7320617574686f72697a6174696f6e2e12b2020a0a7570646174654c696e6b12082e696f2e4c696e6b1a082e696f2e4c696e6b228f0282d3e493020a1a052f6c696e6b3a012a9241fb010a054c696e6b73120b557064617465204c696e6b1a16557064617465732061206c696e6b206f626a6563742e4a300a0334303012290a27546865726520697320612070726f626c656d20776974682074686520696e70757420646174612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e4a570a0335303312500a4e53657276657220697320756e617661696c61626c652e204261636b206f666620666f72203235306d7320616e6420726570656174207265717565737420756e74696c207375636365737366756c2e12a9010a076765744c696e6b12062e696f2e49641a082e696f2e4c696e6b228b0182d3e493020c120a2f6c696e6b2f7b69647d9241760a054c696e6b731208476574204c696e6b1a1f52657472696576657320612073696e676c65206c696e6b206f626a6563742e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e1290020a136c6973744c696e6b7344657072656361746564120e2e696f2e506167696e6174696f6e1a082e696f2e4c696e6b22dc0182d3e493020812062f6c696e6b739241ca010a054c696e6b7312174c697374204c696e6b73205b444550524543415445445d1a645b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d20526574726965766573206c696e6b73206f626a656374732074686174206d617463682074686520737570706c6965642063726974657269612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e300112e0040a096c6973744c696e6b73120b2e696f2e46696c746572731a082e696f2e4c696e6b22b90482d3e4930210220b2f6c696e6b732f6c6973743a012a92419f040a054c696e6b73120a4c697374204c696e6b731ac503526574726965766573206c696e6b73206f626a656374732074686174206d617463682074686520737570706c6965642063726974657269612e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6c696e6b73223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6c696e6b733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e300112c5010a08636f70794c696e6b12132e696f2e436f70794f626a656374496e7075741a062e696f2e4964229b0182d3e493020f220a2f6c696e6b2f636f70793a012a924182010a054c696e6b731209436f7079204c696e6b1a2a436f706965732061206c696e6b207265636f726420616e642072657475726e732061206e65772069642e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12b3010a0a64656c6574654c696e6b12062e696f2e49641a162e676f6f676c652e70726f746f6275662e456d70747922840182d3e493020c2a0a2f6c696e6b2f7b69647d92416f0a054c696e6b73120b44656c657465204c696e6b1a1544656c657465732061206c696e6b206f626a6563744a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e129a020a14636f756e744c696e6b7344657072656361746564120e2e696f2e506167696e6174696f6e1a092e696f2e436f756e7422e60182d3e493020e120c2f6c696e6b732f636f756e749241ce010a054c696e6b731218436f756e74204c696e6b73205b444550524543415445445d1a675b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d20526574726965766573206120636f756e74206f66206c696e6b732074686174206d617463682074686520737570706c6965642063726974657269612e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e12e5040a0a636f756e744c696e6b73120b2e696f2e46696c746572731a092e696f2e436f756e7422be0482d3e4930211220c2f6c696e6b732f636f756e743a012a9241a3040a054c696e6b73120b436f756e74204c696e6b731ac803526574726965766573206120636f756e74206f66206c696e6b732074686174206d617463682074686520737570706c6965642063726974657269612e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6c696e6b73223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343230303235302d706173732d74656d706c617465732d6c6f636174696f6e732d626561636f6e732d6c696e6b732d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6c696e6b733c2f613e4a220a03343033121b0a1955736572206c61636b7320617574686f72697a6174696f6e2e4a1e0a0334303412170a155265636f726420776173206e6f7420666f756e642e423e0a0f696f2e706173736b69742e504b696f5a2473746173682e706173736b69742e636f6d2f696f2f6d6f64656c2f73646b2f676f2f696faa0204504b496f620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

