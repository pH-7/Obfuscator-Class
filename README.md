# PHP Obfuscator

Simple and effective Obfuscator PHP class (this is not a stupid `base64 encoding` script, but a real and effective obfuscation script)


## Overview

If you want to keep your open source code private, but working on all Web hosting. This **Obfuscator** class is the obfuscator you need!

Not easy readable by developers (unless they are ready to spend lot of time). This will really discourage them :smiley:


## Usage

```PHP
<?php
$sData = <<<'DATA'
    echo 'This is my PHP code, can be class class, interface, trait,... in PHP , 5, 7, etc.';
DATA;

$sObfusationData = new Obfuscator($sData, 'Class/Code NAME');
file_put_contents('my_obfuscation_data.php', '<?php ' . "\r\n" . $sObfusationData);
```


## History

I first created it for my needs, especially for the license file of my [pH7CMS Software](https://github.com/pH7Software/pH7-Social-Dating-CMS) in early 2014 but now (summer 2016), I don't need to keep this project private and want to share it for the others (hoping it will help you and saving time!).

I did change anything since the first version and didn't review it, so could be improved. Feel free to add your improvements by forking it and create a new PR. It will be a pleasure for me to see your contribution!


FYI, in 3 years, I never found my obfuscated code unobfuscated (and one project which is [pH7CMS](https://sourceforge.net/p/ph7socialdating) had been downloaded by over 50,000 users) so you can be quite confidend (however as you can understand, I cannot give any guarantee on it).


## Who I am?

I'm **[Pierre-Henry Soria](http://about.ph7.me)**, Software Developer, love learning new things every single day and also passionate about e-businesses and e-marketing.


## How Contacting Me?

You can by email at **pierrehenrysoria [[AT]] gmail [[D0T]] com**


## The License

The script is under [Creative Commons Attribution 3.0](http://creativecommons.org/licenses/by/3.0/) license or later; See the LICENSE.txt file.
