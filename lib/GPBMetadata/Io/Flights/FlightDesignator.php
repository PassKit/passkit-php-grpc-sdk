<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/flight_designator.proto

namespace GPBMetadata\Io\Flights;

class FlightDesignator
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        \GPBMetadata\Io\Common\Proximity::initOnce();
        \GPBMetadata\Io\Common\Links::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab3130a22696f2f666c69676874732f666c696768745f64657369676e61746f722e70726f746f1207666c69676874731a19696f2f636f6d6d6f6e2f70726f78696d6974792e70726f746f1a15696f2f636f6d6d6f6e2f6c696e6b732e70726f746f1a2c70726f746f632d67656e2d737761676765722f6f7074696f6e732f616e6e6f746174696f6e732e70726f746f22d1080a10466c6967687444657369676e61746f72122a0a0b63617272696572436f646518012001280942159241128a010f5e5b412d5a302d395d7b332c347d24121b0a0c666c696768744e756d62657218022001280942059241027805121b0a0976616c696446726f6d18032001280b32082e696f2e4461746512100a087265766973696f6e18042001280d12190a0661637469766518052001280842099241063a045452554512290a087363686564756c6518062001280b32172e666c69676874732e466c696768745363686564756c6512260a146f7065726174696e6743617272696572436f64651807200128094208924105780380010212240a156f7065726174696e67466c696768744e756d62657218082001280942059241027805121e0a16636f64655368617265466c696768744e756d62657273180920032809120e0a066f726967696e180a2001280912130a0b64657374696e6174696f6e180b2001280912150a0d7472616e736974506f696e7473180c2003280912190a116465706172747572655465726d696e616c180d2001280912170a0f6172726976616c5465726d696e616c180e2001280912180a107472616e7369745465726d696e616c73180f20032809122f0a0e626f617264696e67506f6c69637918102001280e32172e666c69676874732e426f617264696e67506f6c69637912310a0f73656174436c617373506f6c69637918112001280e32182e666c69676874732e53656174436c617373506f6c69637912250a06616c6572747318122003280e32152e666c69676874732e466c69676874416c6572747312160a0e7061737354656d706c617465496418132001280912260a136175746f496e76616c6964617465416674657218142001280d42099241063a043238383012300a1d6175746f496e76616c696461746543616e63656c6c656450617373657318152001280842099241063a045452554512310a106c6f636174696f6e4d6573736167657318162003280b320f2e696f2e4750534c6f636174696f6e4206924103a0010a122a0a0e626561636f6e4d6573736167657318172003280b320a2e696f2e426561636f6e4206924103a0010a121e0a0c64656661756c744c696e6b7318182003280b32082e696f2e4c696e6b12180a10436f6e646974696f6e616c4974656d73181920012808121d0a15426172636f64654164646974696f6e616c44617461181a200128093ad1019241cd010aca012a11466c696768742044657369676e61746f72325a4120666c696768742064657369676e61746f72207265636f726420646573637269626573206d6f73746c7920737461746963206461746120776974682072656761726420746f206120666c69676874206f7065726174696f6e2ed2010b63617272696572436f6465d2010c666c696768744e756d626572d201066f726967696ed201087363686564756c65d201087265766973696f6ed2010b64657374696e6174696f6ed2010e7061737354656d706c617465496422e6010a17466c6967687444657369676e61746f7252657175657374121d0a0b63617272696572436f646518012001280942089241057803800102121b0a0c666c696768744e756d6265721802200128094205924102780512100a087265766973696f6e18032001280d3a7d92417a0a782a19466c696768742044657369676e61746f722052657175657374323e5573656420666f722072657472696576696e672064657461696c73206f66206120706172746963756c617220666c696768742064657369676e61746f722ed2010b63617272696572436f6465d2010c666c696768744e756d62657222a2020a0e466c696768745363686564756c6512240a066d6f6e64617918012001280b32142e666c69676874732e466c6967687454696d657312250a077475657364617918022001280b32142e666c69676874732e466c6967687454696d657312270a097765646e657364617918032001280b32142e666c69676874732e466c6967687454696d657312260a08746875727364617918042001280b32142e666c69676874732e466c6967687454696d657312240a0666726964617918052001280b32142e666c69676874732e466c6967687454696d657312260a08736174757264617918062001280b32142e666c69676874732e466c6967687454696d657312240a0673756e64617918072001280b32142e666c69676874732e466c6967687454696d657322a2010a0b466c6967687454696d657312280a167363686564756c656444657061727475726554696d6518012001280b32082e696f2e54696d65121e0a0c626f617264696e6754696d6518022001280b32082e696f2e54696d6512210a0f67617465436c6f73696e6754696d6518032001280b32082e696f2e54696d6512260a147363686564756c65644172726976616c54696d6518042001280b32082e696f2e54696d652aa9010a0c466c69676874416c65727473120d0a094e4f5f414c455254531000120e0a0a414c4c5f414c45525453100112180a144445504152545552455f474154455f414c455254100212180a144445504152545552455f54494d455f414c455254100412160a124152524956414c5f474154455f414c455254100812160a124152524956414c5f54494d455f414c455254101012160a12424147474147455f42454c545f414c45525410202a6d0a0e426f617264696e67506f6c696379121f0a1b424f415244494e475f504f4c4943595f554e5350454349464945441000120e0a0a5a4f4e455f42415345441001120f0a0b47524f55505f4241534544100212190a15424f415244494e475f504f4c4943595f4f5448455210032a83010a0f53656174436c617373506f6c69637912210a1d534541545f434c4153535f504f4c4943595f554e5350454349464945441000120f0a0b434142494e5f42415345441001120f0a0b434c4153535f42415345441002120e0a0a544945525f42415345441003121b0a17534541545f434c4153535f504f4c4943595f4f5448455210042a1f0a09417574686f7269747912080a0449415441100012080a044943414f100142530a17696f2e706173736b69742e504b696f2e466c69676874735a2c73746173682e706173736b69742e636f6d2f696f2f6d6f64656c2f73646b2f676f2f696f2f666c6967687473aa0209504b466c6967687473620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

