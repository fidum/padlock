# A Laravel Zero Command for encrypting and decrypting environment files.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fidum/padlock.svg?style=for-the-badge)](https://packagist.org/packages/fidum/padlock)
[![GitHub Workflow Status (with branch)](https://img.shields.io/github/actions/workflow/status/fidum/padlock/run-tests.yml?branch=main&style=for-the-badge)](https://github.com/fidum/padlock/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Twitter Follow](https://img.shields.io/badge/follow-%40danmasonmp-1DA1F2?logo=twitter&style=for-the-badge)](https://twitter.com/danmasonmp)

## Installation

You can install the package via composer:

```bash
composer global require fidum/padlock
```

## Usage
```console
$ padlock

  USAGE: padlock <command> [options] [arguments]

  self-update Allows to self-update a build application

  env:decrypt Decrypt an environment file
      --key[=KEY]            The encryption key
      --cipher[=CIPHER]      The encryption cipher
      --env[=ENV]            The environment the command should run under
      --force                Overwrite the existing encrypted environment file

  env:encrypt Encrypt an environment file
      --key[=KEY]            The encryption key
      --cipher[=CIPHER]      The encryption cipher
      --env[=ENV]            The environment the command should run under
      --force                Overwrite the existing environment file
      --path[=PATH]          Path to write the decrypted file
      --filename[=FILENAME]  Filename of the decrypted file

```

Run the below commands to encrypt and decrypt environment files in the current directory.

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
