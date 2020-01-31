# 🔐 PHP Obfuscator

Simple, easy-to-use and effective Obfuscator PHP class.

**Not just a stupid `base64 encoding` script, but a real and effective obfuscation script).**

Ideal to obfuscate some critical pieces of your software such as licensing verification functions.


## 👓 Overview 

If you want to keep your open source code private, but working on all Web hosting, this **Obfuscator** class is THE obfuscator you need!

Not easily readable by developers (unless they are ready to spend lot of time). It will definitely discourage them! :smiley:


## 📓 Usage

### Take out `<php` before to obfuscate

First of all, please make sure to strip the PHP open/close tags `<?php` and `?>`

If you specify code to be obfuscated with `<?php`, you will get a critical syntax error.


### Example 1

```php
<?php
require 'src/Obfuscator.php';

$sData = <<<'DATA'
    echo 'This is my PHP code, can be class class, interface, trait, etc. in PHP 5, 7, 7.2, 7.4 and higher.';
DATA;

$sObfusationData = new Obfuscator($sData, 'Class/Code NAME');
file_put_contents('my_obfuscated_data.php', '<?php ' . "\r\n" . $sObfusationData);
```

Run the `my_obfuscated_data.php` freshly created, and you will see:
> This is my PHP code, can be class class, interface, trait, etc. in PHP 5, 7, 7.2, 7.4 and higher.

If you open the file, you will see that your code is totally hidden (obfuscated).


### Example 2

```php
<?php
require 'src/Obfuscator.php';

$sData = <<<'DATA'
    $hour = date('H');

    echo 'The hour (of the server) is ' . date('H:m');
    echo ', and will give the following message:<br><br>';

    if ($hour < 10) {
        echo 'Have a good morning!';
    } elseif ($hour < 20) {
        echo 'Have a good day!';
    } else {
        echo 'Have a good night! zZz z';
    }
DATA;

$sObfusationData = new Obfuscator($sData, 'Give a name to the piece of code you want to obfuscate');
file_put_contents('obfuscated_code.php', '<?php ' . "\r\n" . $sObfusationData);
```

Run `obfuscated_code.php` file and you will see something like below:

**The hour (of the server) is 19, and will give the following message: Have a good day!**


### Example 3

```php
<?php
require 'src/Obfuscator.php';

$filename = 'myphpfile'; // A PHP filename (without .php) that you want to obfuscate

$sData = file_get_contents($filename . '.php');
$sData = str_replace(array('<?php', '<?', '?>'), '', $sData); // We strip the open/close PHP tags
$sObfusationData = new Obfuscator($sData, 'Class/Code NAME');
file_put_contents($filename . '_obfuscated.php', '<?php ' . "\r\n" . $sObfusationData);
```


## ⚙ Requirement

* PHP 5.3 or higher (works also with PHP 7.2, ..., 7.4, and beyond!)


## 📖 History

I began to create this obfuscation tool in early 2014 for my own needs, especially for pH7CMSPro that had a licensing file which was unlocking some premium features if a valid license key was purchased by a client.
In summer 2016, the Pro version of [pH7CMS](https://github.com/pH7Software/pH7-Social-Dating-CMS) was discontinued, and realize there was no reason to keep this project private and I wanted to share it with others (hoping it will help them and save their time!).

Feel free to add your improvements in it by forking the repo and creating a new PR. I will be pleased to review your contribution!


FYI, in 3 years' time, I never found my obfuscated code unobfuscated (and the software was downloaded by over 50,000 users). You can be quite confident then.


## 🤔 Who Am I?

I'm **[Pierre-Henry Soria][author-url]**, Software Developer, love learning new things every single day and also passionate about e-businesses and e-marketing.

[![@phenrysay][twitter-image]][twitter-url]


## 📧 Wanna Contact Me?

You can email me at: **pierrehenrysoria+github [[AT]] gmail [[D0T]] com** 🤗


## ⚖️ License

Generously distributed under [MIT License][license-url]. See LICENSE.txt file for further information.


<!-- GitHub's Markdown reference links -->
[author-url]: https://ph7.me
[license-url]: https://opensource.org/licenses/MIT
[twitter-image]: https://img.shields.io/twitter/url/https/shields.io.svg?style=social
[twitter-url]: https://twitter.com/phenrysay
