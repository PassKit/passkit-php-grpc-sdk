#!/bin/bash

# No nuget package exists for grpc.gateway.protoc_gen_swagger.options, so we need to manually generate the C# code

protoc --proto_path=./ \
-I ${GOPATH}/src/github.com/grpc-ecosystem/grpc-gateway/third_party/googleapis \
-I ${GOPATH}/src/github.com/grpc-ecosystem/grpc-gateway \
-I ${GOPATH}/src/stash.passkit.com/io/model/protofiles \
--php_out=./ \
./google/api/*.proto
