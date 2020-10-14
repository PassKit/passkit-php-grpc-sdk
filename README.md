# passkit-grpc-members-rest-sdk
Use the PassKit PHP gRPC SDK to issue and manage Apple Wallet and Google Pay Passes from your PHP application.

For more information, please visit [the documentation](https://docs.passkit.io).

## Table Of Contents
- [Requirements](#requirements)
- [Installation](#installation)
- [Getting Started](#getting-started)
- [PassKit Portal](#passkit-portal)
- [Known Issues & Unsupported Endpoints](#known-issues--unsupported-endpoints)
- [Getting Help](#getting-help)
- [Contributing](#contributing)
- [Author & License](#author--license)

## Requirements
1. PHP 5.5 and later, 7.0 or higher
2. PECL.
3. Composer.
4. A PassKit account; sign up for free at [https://app.passkit.com](https://app.passkit.com/signup).
5. Your [SDK API credentials](https://app.passkit.com/app/account/developer-tools) (Home >> Account >> Developer Tools >> Generate New SDK Credentials).

## Installation

### Instal & Enable the gRPC PHP extension
```bash
sudo pecl install grpc-1.32.0
```

After installing the gRPC extension, make sure the extension is enabled in your php.ini file, (e.g. /etc/php5/cli/php.ini, /etc/php5/apache2/php.ini, or /usr/local/etc/php/5.6/php.ini), depending on where your PHP installation is.
```bash
extension=grpc.so
```

For detailed steps visit the [gRPC PHP quickstart](https://grpc.io/docs/languages/php/quickstart/).

### Add bindings to composer
To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/passkit/passkit-php-grpc-sdk.git"
    }
  ],
  "require": {
    "passkit/passkit-php-grpc-sdk": "1.0.0"
  }
}
```

Then run `composer install`

### Manual Installation
Clone the repo and include `autoload.php`:

```php
require_once('/path/to/passkit-php-grpc-sdk/vendor/autoload.php');
```

## Getting Started
Follow the [installation procedure](#installation), and see general usage format & examples below.

### Authorization
Simply request your SDK credentials from the [PassKit Portal](https://app.passkit.com/app/account/developer-tools). You will receive an email with your credentials on your registered email address.
Follow the instructions in the email to decrypt `key.pem`, and then copy the files into your project (in this project & for the samples to work they are in the `certs` directory).
 
You will need the credentials when you setup the SSL connection to the server.

Your credentials consist of 3 files:
- `ca-chain.pem`: the PassKit CA chain.
- `certificate.pem`: the certificate for your account.
- `key.pem`: the key that belongs to your certificate.

Setting up the connection:
```php
putenv("GRPC_SSL_CIPHER_SUITES=HIGH+ECDSA");

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
```

### General Instructions
The general format is shown below. Each API has its own client that you will need to initialise. Clients can re-use the credentials object.

General format:

```php
<?php
require_once "../vendor/autoload.php";

putenv("GRPC_SSL_CIPHER_SUITES=HIGH+ECDSA");

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
    $member->setProgramId("5fbCcr7f4NuBg9lvjJayvV");
    $member->setTierId("bronze");

    $person = new Io\Person();
    $person->setDisplayName("Patrick Kosterman");
    $dateOfBirth = new Io\Date();
    $dateOfBirth->setDay(22);
    $dateOfBirth->setMonth(6);
    $dateOfBirth->setYear(2020);
    $person->setDateOfBirth($dateOfBirth);
    $person->setEmailAddress("patrick@passkit.com");
    $member->setPerson($person);

    list($id, $status) = $client->enrolMember($member)->wait();
    if ($status->code !== 0) {
        throw new Exception(sprintf('Status Code: %s, Details: %s, Meta: %s', $status->code, $status->details, var_dump($status->metadata)));
    }

    echo "https://pub1.pskt.io/" . $id->getId();
} catch (Exception $e) {
    echo $e;
}
?>
```

### Examples
The [examples](/examples) folder contains a working sample project for using the SDK. 

To successfully run the program:
- ensure your gPRC certificates are in the `certs` folder in this repo (you will need `ca-chain.pem`, `certificate.pem` & `key.pem`).
- modify the variables with the values for your programs & campaigns.
- run `cd examples && php enrol-member.php`.

## PassKit Portal
The [https://app.passkit.com](https://app.passkit.com) allows you to easily design loyalty cards, membership cards and coupons for both Apple Wallet and Google Pay. 

Additionally, the PassKit portal facilitates management, distribution and simple analysis of your Mobile Wallet projects.

Best Practices:
- Use the web portal for initial account and project setup.
- Then use the SDKs / APIs to issue, update and delete your individual passes.

## Known Issues & Unsupported Endpoints
The following methods are currently not implemented:

__Members__:
- Update Members by Segment: can be done by updating individual members and looping on client side
- Delete Members by Segment: can be done by deleting individual members and looping on client side
- Check In / Out Member

__Coupons__:
- GetAnalytics

## Getting Help
- [Official documentation](https://docs.passkit.io/)
- [support@passkit.com](mailto:support@passkit.com)
- [Online Chat Support](https://app.passkit.com/)

## Contributing
Send bug reports, feature requests and code contributions into this repository.

## Author & License
PassKit Inc.: [support@passkit.com](mailto:support@passkit.com)

Distributed under MIT License. Details available in [license file](LICENSE).