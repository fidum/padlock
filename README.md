# A Laravel Zero Command for encrypting and decrypting environment files.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fidum/padlock.svg?style=for-the-badge)](https://packagist.org/packages/fidum/padlock)
[![GitHub Workflow Status (with branch)](https://img.shields.io/github/actions/workflow/status/fidum/padlock/run-tests.yml?branch=main&style=for-the-badge)](https://github.com/fidum/padlock/actions?
query=workflow%3Arun-tests+branch%3Amaster)
[![Twitter Follow](https://img.shields.io/badge/follow-%40danmasonmp-1DA1F2?logo=twitter&style=for-the-badge)](https://twitter.com/danmasonmp)

## Installation

You can install the package via composer:

```bash
composer require --global fidum/padlock
```

## Usage

Run the below commands to encrypt and decrypt environment files in the current directory. 

**You must run the `padlock` command in the current directory as we are reusing the laravel commands here to ensure that it encrypts the 
environment files correctly for laravel usage.** 

[Please see the Laravel documentation for environment encryption.](https://laravel.com/docs/9.x/configuration#encrypting-environment-files) 

```console
$ padlock env:encrypt --env=testing

   INFO  Environment successfully encrypted.  

  Key ................ base64:RR480kEd+Yen6cCMkXmmGUz38cJYwlP/qNctQ7MA6zo=  
  Cipher ............. AES-256-CBC  
  Encrypted file ..... .env.testing.encrypted
```

```console 
$ padlock env:decrypt --env=testing --key=base64:RR480kEd+Yen6cCMkXmmGUz38cJYwlP/qNctQ7MA6zo=

   INFO  Environment successfully decrypted.  

  Decrypted file ..... .env.testing 
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/dmason30/.github/blob/main/CONTRIBUTING.md) for details.

## Credits

- [Dan Mason](https://github.com/dmason30)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
