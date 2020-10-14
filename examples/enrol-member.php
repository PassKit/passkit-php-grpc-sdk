<?php
require_once "../vendor/autoload.php";

putenv("GRPC_SSL_CIPHER_SUITES=HIGH+ECDSA");

// MODIFY WITH THE VARIABLES OF YOUR PROGRAM AND TIER
$programId = "5fbCcr7f4NuBg9lvjJayvV";
$tierId = "bronze";

try {
    $ca_filename = "ca-chain.pem";
    $key_filename = "key.pem";
    $cert_filename = "certificate.pem";
    $path = "../certs/";

    $credentials = Grpc\ChannelCredentials::createSsl(
        file_get_contents($path . $ca_filename),
        file_get_contents($path . $key_filename),
        file_get_contents($path . $cert_filename)
    );

    $client = new Members\MembersClient('grpc.pub1.passkit.io:443', [
        'credentials' => $credentials
    ]);

    // Set the Member body
    $member = new Members\Member();
    $member->setProgramId($programId);
    $member->setTierId($tierId);

    $person = new Io\Person();
    $person->setDisplayName("Peter Pan");
    $dateOfBirth = new Io\Date();
    $dateOfBirth->setDay(22);
    $dateOfBirth->setMonth(6);
    $dateOfBirth->setYear(2020);
    $person->setDateOfBirth($dateOfBirth);
    $person->setEmailAddress("peter@pan.com");
    $member->setPerson($person);

    list($id, $status) = $client->enrolMember($member)->wait();
    if ($status->code !== 0) {
        throw new Exception(sprintf('Status Code: %s, Details: %s, Meta: %s', $status->code, $status->details, var_dump($status->metadata)));
    }

    echo "https://pub1.pskt.io/" . $id->getId() . "\n";
} catch (Exception $e) {
    echo $e;
}
?>