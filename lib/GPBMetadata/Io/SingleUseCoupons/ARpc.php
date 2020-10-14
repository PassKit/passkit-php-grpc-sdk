<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/single_use_coupons/a_rpc.proto

namespace GPBMetadata\Io\SingleUseCoupons;

class ARpc
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        \GPBMetadata\Io\Common\Pagination::initOnce();
        \GPBMetadata\Io\Common\Filter::initOnce();
        \GPBMetadata\Io\Common\Reporting::initOnce();
        \GPBMetadata\Io\SingleUseCoupons\Campaign::initOnce();
        \GPBMetadata\Io\SingleUseCoupons\Offer::initOnce();
        \GPBMetadata\Io\SingleUseCoupons\Coupon::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa8470a21696f2f73696e676c655f7573655f636f75706f6e732f615f7270632e70726f746f121273696e676c655f7573655f636f75706f6e731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a1e696f2f636f6d6d6f6e2f636f6d6d6f6e5f6f626a656374732e70726f746f1a1a696f2f636f6d6d6f6e2f706167696e6174696f6e2e70726f746f1a16696f2f636f6d6d6f6e2f66696c7465722e70726f746f1a19696f2f636f6d6d6f6e2f7265706f7274696e672e70726f746f1a24696f2f73696e676c655f7573655f636f75706f6e732f63616d706169676e2e70726f746f1a21696f2f73696e676c655f7573655f636f75706f6e732f6f666665722e70726f746f1a22696f2f73696e676c655f7573655f636f75706f6e732f636f75706f6e2e70726f746f1a2c70726f746f632d67656e2d737761676765722f6f7074696f6e732f616e6e6f746174696f6e732e70726f746f32a63d0a1053696e676c65557365436f75706f6e7312c0010a14637265617465436f75706f6e43616d706169676e12222e73696e676c655f7573655f636f75706f6e732e436f75706f6e43616d706169676e1a062e696f2e4964227c82d3e493021f221a2f636f75706f6e2f73696e676c655573652f63616d706169676e3a012a9241540a10436f75706f6e2043616d706169676e73121643726561746520436f75706f6e2043616d706169676e1a28437265617465732061206e65772053696e676c652055736520436f75706f6e2043616d706169676e12d4010a14757064617465436f75706f6e43616d706169676e12222e73696e676c655f7573655f636f75706f6e732e436f75706f6e43616d706169676e1a222e73696e676c655f7573655f636f75706f6e732e436f75706f6e43616d706169676e227482d3e493021f1a1a2f636f75706f6e2f73696e676c655573652f63616d706169676e3a012a92414c0a10436f75706f6e2043616d706169676e73121655706461746520436f75706f6e2043616d706169676e1a205570646174657320616e206578697374696e6720506173732050726f6a65637412b4010a11676574436f75706f6e43616d706169676e12062e696f2e49641a222e73696e676c655f7573655f636f75706f6e732e436f75706f6e43616d706169676e227382d3e4930221121f2f636f75706f6e2f73696e676c655573652f63616d706169676e2f7b69647d9241490a10436f75706f6e2043616d706169676e73121347657420436f75706f6e2043616d706169676e1a204765747320616e206578697374696e6720436f75706f6e2043616d706169676e129e030a1464656c657465436f75706f6e43616d706169676e12062e696f2e49641a162e676f6f676c652e70726f746f6275662e456d70747922e50282d3e49302242a1f2f636f75706f6e2f73696e676c655573652f63616d706169676e2f7b69647d3a012a9241b7020a10436f75706f6e2043616d706169676e73121644656c65746520436f75706f6e2043616d706169676e1a8a0244656c6574657320616e206578697374696e6720436f75706f6e2043616d706169676e2062792069642e2044656c6574696e67206120436f75706f6e2043616d706169676e20726573756c747320696e207468652072656c61746564206f66666572206265696e672064656c657465642c20616e6420616c6c20636f75706f6e73206265696e6720696e76616c69646174656420696e2074686520637573746f6d657273204d6f62696c652057616c6c65743b2072656e646572696e67207468656d20756e757361626c652e2054686973206d6574686f64206e6565647320746f2062652075736564207769746820636172652c207468697320697320697272657665727369626c652e1294020a1d6c697374436f75706f6e43616d706169676e7344657072656361746564120e2e696f2e506167696e6174696f6e1a222e73696e676c655f7573655f636f75706f6e732e436f75706f6e43616d706169676e22bc0182d3e493021d121b2f636f75706f6e2f73696e676c655573652f63616d706169676e73924195010a10436f75706f6e2043616d706169676e7312224c69737420436f75706f6e2043616d706169676e73205b444550524543415445445d1a5d5b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d204c6973747320616c6c20436f75706f6e2043616d706169676e7320666f7220746865206c6f6767656420696e20757365722e300112be040a136c697374436f75706f6e43616d706169676e73120b2e696f2e46696c746572731a222e73696e676c655f7573655f636f75706f6e732e436f75706f6e43616d706169676e22f30382d3e493022522202f636f75706f6e2f73696e676c655573652f63616d706169676e732f6c6973743a012a9241c4030a10436f75706f6e2043616d706169676e7312154c69737420436f75706f6e2043616d706169676e731a98034c6973747320616c6c20436f75706f6e2043616d706169676e7320666f7220746865206c6f6767656420696e20757365722e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343133303936372d636f75706f6e2d70726f746f636f6c2d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d63616d706169676e73223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343133303936372d636f75706f6e2d70726f746f636f6c2d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d63616d706169676e733c2f613e300112f2010a0c676574416e616c797469637312142e696f2e416e616c7974696373526571756573741a332e73696e676c655f7573655f636f75706f6e732e436f75706f6e43616d706169676e416e616c7974696373526573706f6e736522960182d3e4930230122e2f636f75706f6e2f73696e676c655573652f63616d706169676e2f7b636c61737349647d2f616e616c797469637392415d0a10436f75706f6e2043616d706169676e73121d47657420436f75706f6e2043616d706169676e20416e616c79746963731a2a5265747269657665732070726f746f636f6c20737065636966696320616e616c7974696373206461746112a3010a11637265617465436f75706f6e4f66666572121f2e73696e676c655f7573655f636f75706f6e732e436f75706f6e4f666665721a062e696f2e4964226582d3e493021c22172f636f75706f6e2f73696e676c655573652f6f666665723a012a9241400a0d436f75706f6e204f6666657273121343726561746520436f75706f6e204f666665721a1a437265617465732061206e657720436f75706f6e204f6666657212c2010a11757064617465436f75706f6e4f66666572121f2e73696e676c655f7573655f636f75706f6e732e436f75706f6e4f666665721a1f2e73696e676c655f7573655f636f75706f6e732e436f75706f6e4f66666572226b82d3e493021c1a172f636f75706f6e2f73696e676c655573652f6f666665723a012a9241460a0d436f75706f6e204f6666657273121355706461746520436f75706f6e204f666665721a205570646174657320616e206578697374696e6720436f75706f6e204f6666657212a2010a0e676574436f75706f6e4f6666657212062e696f2e49641a1f2e73696e676c655f7573655f636f75706f6e732e436f75706f6e4f66666572226782d3e493021e121c2f636f75706f6e2f73696e676c655573652f6f666665722f7b69647d9241400a0d436f75706f6e204f6666657273121047657420436f75706f6e204f666665721a1d4765747320616e206578697374696e6720436f75706f6e204f6666657212db020a1164656c657465436f75706f6e4f6666657212062e696f2e49641a162e676f6f676c652e70726f746f6275662e456d70747922a50282d3e49302212a1c2f636f75706f6e2f73696e676c655573652f6f666665722f7b69647d3a012a9241fa010a0d436f75706f6e204f6666657273121344656c65746520436f75706f6e204f666665721ad30144656c6574657320616e206578697374696e6720436f75706f6e204f666665722062792069642e2044656c6574696e67206120436f75706f6e204f6666657220726573756c747320696e20616c6c20636f75706f6e73206265696e6720696e76616c69646174656420696e2074686520637573746f6d657273204d6f62696c652057616c6c65743b2072656e646572696e67207468656d20756e757361626c652e204e6565647320746f2062652075736564207769746820636172652c207468697320697320697272657665727369626c652e12a1020a1a6c697374436f75706f6e4f66666572734465707265636174656412352e73696e676c655f7573655f636f75706f6e732e436f75706f6e4f66666572734c69737452657175657374446570726563617465641a1f2e73696e676c655f7573655f636f75706f6e732e436f75706f6e4f6666657222a80182d3e493021a12182f636f75706f6e2f73696e676c655573652f6f6666657273924184010a0d436f75706f6e204f6666657273121f4c69737420436f75706f6e204f6666657273205b444550524543415445445d1a525b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d204c6973747320616c6c20436f75706f6e204f666665727320666f7220612063616d706169676e2e300112be040a106c697374436f75706f6e4f6666657273122b2e73696e676c655f7573655f636f75706f6e732e436f75706f6e4f66666572734c697374526571756573741a1f2e73696e676c655f7573655f636f75706f6e732e436f75706f6e4f6666657222d90382d3e4930222221d2f636f75706f6e2f73696e676c655573652f6f66666572732f6c6973743a012a9241ad030a0d436f75706f6e204f666665727312124c69737420436f75706f6e204f66666572731a87034c6973747320616c6c20436f75706f6e204f666665727320666f7220612063616d706169676e2e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343133303936372d636f75706f6e2d70726f746f636f6c2d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6f6666657273223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343133303936372d636f75706f6e2d70726f746f636f6c2d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d6f66666572733c2f613e3001128f010a0c637265617465436f75706f6e121a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e1a062e696f2e4964225b82d3e493021d22182f636f75706f6e2f73696e676c655573652f636f75706f6e3a012a9241350a07436f75706f6e73120d43726561746520436f75706f6e1a1b437265617465732061206e657720756e6971756520436f75706f6e128e010a0c757064617465436f75706f6e121a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e1a062e696f2e4964225a82d3e493021d1a182f636f75706f6e2f73696e676c655573652f636f75706f6e3a012a9241340a07436f75706f6e73120d55706461746520436f75706f6e1a1a5570646174657320616e206578697374696e6720436f75706f6e12be010a1373747265616d436f75706f6e55706461746573121a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e1a062e696f2e4964227f92417c0a07436f75706f6e73122753747265616d20436f75706f6e20557064617465732028675250432053444b7373206f6e6c79291a4855706461746573206578697374696e6720436f75706f6e207265636f726473207669612073747265616d2e20546f206265207573656420666f72206261746368207570646174652e2801300112eb020a0c72656465656d436f75706f6e121a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e1a062e696f2e496422b60282d3e49302241a1f2f636f75706f6e2f73696e676c655573652f636f75706f6e2f72656465656d3a012a924188020a07436f75706f6e73120d52656465656d20436f75706f6e1aed0152656465656d7320616e206578697374696e6720436f75706f6e2e20557365207468697320656e64706f696e74207768656e20796f752077616e7420746f206361707475726520726564656d7074696f6e206461746120616e642074726967676572207468652073776974636820746f2074686520726564656d7074696f6e2064657369676e206f662074686520636f75706f6e2e2054686520636f75706f6e2063616e6e6f74206265207573656420616761696e2061667465722063616c6c696e67207468697320656e64706f696e742c20616e64206973206d61726b65642061732072656465656d65642e12cb010a1773747265616d436f75706f6e526564656d7074696f6e73121a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e1a062e696f2e4964228701924183010a07436f75706f6e73122a53747265616d20436f75706f6e20526564656d7074696f6e732028675250432053444b73206f6e6c79291a4c52656465656d73206578697374696e6720436f75706f6e207265636f726473207669612073747265616d2e20546f206265207573656420666f7220626174636820726564656d7074696f6e2e28013001128e010a0d676574436f75706f6e4279496412062e696f2e49641a1a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e225982d3e493021f121d2f636f75706f6e2f73696e676c655573652f636f75706f6e2f7b69647d9241310a07436f75706f6e73121047657420436f75706f6e2062792049441a1447657473206120436f75706f6e207265636f726412f4010a15676574436f75706f6e427945787465726e616c496412252e73696e676c655f7573655f636f75706f6e732e45787465726e616c4964526571756573741a1a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e22970182d3e493024512432f636f75706f6e2f73696e676c655573652f636f75706f6e2f65787465726e616c49642f7b636f75706f6e43616d706169676e49647d2f7b65787465726e616c49647d9241490a07436f75706f6e73121947657420436f75706f6e2062792045787465726e616c2049441a2347657473206120436f75706f6e207265636f72642062792045787465726e616c20494412c2020a0a766f6964436f75706f6e121a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e1a162e676f6f676c652e70726f746f6275662e456d70747922ff0182d3e493021d2a182f636f75706f6e2f73696e676c655573652f636f75706f6e3a012a9241d8010a07436f75706f6e73120b566f696420436f75706f6e1abf01566f696473202864656c657465732920616e206578697374696e6720436f75706f6e206279204944206f722045787465726e616c2049442e20496e76616c6964617465732074686520636f75706f6e20696e2074686520637573746f6d657273204d6f62696c652057616c6c65743b2072656e646572696e67206974207573656c6573732e2054686973206d6574686f6420697320697272657665727369626c6520616e642073686f756c642062652075736564207769746820636172652e12b8020a256c697374436f75706f6e734279436f75706f6e43616d706169676e4465707265636174656412292e73696e676c655f7573655f636f75706f6e732e4c69737452657175657374446570726563617465641a1a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e22c50182d3e493022e122c2f636f75706f6e2f73696e676c655573652f636f75706f6e732f7b636f75706f6e43616d706169676e49647d92418d010a07436f75706f6e7312194c69737420436f75706f6e73205b444550524543415445445d1a675b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d204c69737420616c6c20636f75706f6e7320666f72206120436f75706f6e2043616d706169676e2e20537570706f72747320706167696e6174696f6e2e300112d7040a1b6c697374436f75706f6e734279436f75706f6e43616d706169676e121f2e73696e676c655f7573655f636f75706f6e732e4c697374526571756573741a1a2e73696e676c655f7573655f636f75706f6e732e436f75706f6e22f80382d3e493023622312f636f75706f6e2f73696e676c655573652f636f75706f6e732f6c6973742f7b636f75706f6e43616d706169676e49647d3a012a9241b8030a07436f75706f6e73120c4c69737420436f75706f6e731a9e034c69737420616c6c20636f75706f6e7320666f72206120436f75706f6e2043616d706169676e2e20537570706f72747320706167696e6174696f6e2e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343133303936372d636f75706f6e2d70726f746f636f6c2d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d636f75706f6e73223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343133303936372d636f75706f6e2d70726f746f636f6c2d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d636f75706f6e733c2f613e30011298020a26636f756e74436f75706f6e734279436f75706f6e43616d706169676e4465707265636174656412292e73696e676c655f7573655f636f75706f6e732e4c69737452657175657374446570726563617465641a092e696f2e436f756e7422b70182d3e493023412322f636f75706f6e2f73696e676c655573652f636f75706f6e732f636f756e742f7b636f75706f6e43616d706169676e49647d92417a0a07436f75706f6e73121a436f756e7420436f75706f6e73205b444550524543415445445d1a535b444550524543415445443a204f52206f70657261746f72206973206e6f7420737570706f727465645d20436f756e7420616c6c20636f75706f6e7320666f72206120436f75706f6e2043616d706169676e2e12b3040a1c636f756e74436f75706f6e734279436f75706f6e43616d706169676e121f2e73696e676c655f7573655f636f75706f6e732e4c697374526571756573741a092e696f2e436f756e7422e60382d3e493023722322f636f75706f6e2f73696e676c655573652f636f75706f6e732f636f756e742f7b636f75706f6e43616d706169676e49647d3a012a9241a5030a07436f75706f6e73120d436f756e7420436f75706f6e731a8a03436f756e7420616c6c20636f75706f6e7320666f72206120436f75706f6e2043616d706169676e2e0a0a3c7370616e207374796c653d22666f6e742d7765696768743a626f6c64223e41626f75742066696c746572206669656c64206e616d65732c206f70657261746f727320616e642073616d706c65207061796c6f6164733a3c2f7370616e3e203c61207461726765743d225f626c616e6b2220687265663d2268747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343133303936372d636f75706f6e2d70726f746f636f6c2d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d636f75706f6e73223e68747470733a2f2f68656c702e706173736b69742e636f6d2f656e2f61727469636c65732f343133303936372d636f75706f6e2d70726f746f636f6c2d66696c746572696e672d6c697374696e672d616e642d636f756e74696e672d62792d6170692366696c7465722d636f75706f6e733c2f613e12b9010a12636f7079436f75706f6e43616d706169676e12272e73696e676c655f7573655f636f75706f6e732e43616d706169676e436f7079526571756573741a062e696f2e4964227282d3e4930224221f2f636f75706f6e2f73696e676c655573652f63616d706169676e2f636f70793a012a9241450a10436f75706f6e2043616d706169676e73120d436f70792043616d706169676e1a22436f7069657320616e206578697374696e672063616d706169676e207265636f726412f0010a166765744d6574614b657973466f7243616d706169676e12062e696f2e49641a0b2e696f2e537472696e677322c00182d3e493022612242f636f75706f6e2f73696e676c655573652f63616d706169676e2f6d6574612f7b69647d924190010a10436f75706f6e2043616d706169676e73121c476574204d657461204b65797320666f7220612043616d706169676e1a5e52657475726e732061206c697374206f662064697374696e6374206d657461206669656c64206b6579732e2043616e206265207573656420666f72206275696c64696e672066696c74657273202f207461626c652068656164696e67732e4295070a20696f2e706173736b69742e504b696f2e53696e676c65557365436f75706f6e735a3773746173682e706173736b69742e636f6d2f696f2f6d6f64656c2f73646b2f676f2f696f2f73696e676c655f7573655f636f75706f6e73aa0212504b53696e676c65557365436f75706f6e739241a10612be020a1d506173734b69742053696e676c652055736520436f75706f6e20415049129c01546869732070726f746f636f6c206973207375697420666f72206361736573207768657265207468652075736572207265717569726573206120636c65616e20616e642073696d706c652073696e676c652075736520636f75706f6e20666f722073686f7274207465726d20636f75706f6e2063616d706169676e7320696e204170706c652057616c6c657420616e6420476f6f676c65205061792e1a3868747470733a2f2f706173736b69742e636f6d2f6c6567616c2f7465726d732d6f662d737562736372697074696f6e2d736572766963652f223f0a0f506173734b697420537570706f7274121768747470733a2f2f646f63732e706173736b69742e696f1a13737570706f727440706173736b69742e636f6d3203312e302a010232106170706c69636174696f6e2f6a736f6e3a106170706c69636174696f6e2f6a736f6e52390a0332303012320a2852657475726e6564207768656e207468652072657175657374206973207375636365737366756c2e12060a049a02010752500a0334303312490a4752657475726e6564207768656e20746865207573657220646f6573206e6f742068617665207065726d697373696f6e20746f2061636365737320746865207265736f757263652e523b0a0334303412340a2a52657475726e6564207768656e20746865207265736f7572636520646f6573206e6f742065786973742e12060a049a020107523c0a0335303012350a2b52657475726e6564207768656e20746865726520697320616e20756e6578706563746564206572726f722e12060a049a020107525d0a0335303312560a5452657475726e6564207768656e207468652075736572206973206265696e67207468726f74746c65642e204261636b206f666620666f72206120666577206d7320616e64207468656e2074727920616761696e2e5a3e0a3c0a0a6170694b657941757468122e080212194a57542041757468656e7469636174696f6e20746f6b656e2e1a0d417574686f72697a6174696f6e200262100a0e0a0a6170694b6579417574681200620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

