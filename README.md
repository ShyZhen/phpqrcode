# phpqrcode


== UPDATE ==
以前的phpqrcode没有加入中间的logo的功能，自己写的话需要先生成文件，每次读取和生成浪费资源。
于是做了一点小修改，在满足要求的前提下，尽量保证不影响以前的功能。


This is PHP implementation of QR Code 2-D barcode generator. It is pure-php
LGPL-licensed implementation based on C libqrencode by Kentaro Fukuchi.

== UPDATE ==
Added support for eps export
Usage : QRcode::eps('arguments');

Added support for SVG export
Usage : QRcode::svg('arguments');

Added support for color export :
example : 
$back_color = 0xFFFF00;
$fore_color = 0xFF00FF;
QRcode::png('some othertext 1234', false, 'h', 20, 1, false, $back_color, $fore_color);


Copyright (C) 2012 by Alexandre Assouad 

== LICENSING ==

Copyright (C) 2010 by Dominik Dzienia 

This library is free software; you can redistribute it and/or modify it under
the terms of the GNU Lesser General Public License as published by the Free
Software Foundation; either version 3 of the License, or any later version.

This library is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU Lesser General Public License (LICENSE file)
for more details.

You should have received a copy of the GNU Lesser General Public License along
with this library; if not, write to the Free Software Foundation, Inc., 51
Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

== INSTALATION AND USAGE ==

 * INSTALL file
 * http://sourceforge.net/apps/mediawiki/phpqrcode/index.php?title=Main_Page

== CONTACT ==

Fell free to contact me via e-mail (deltalab at poczta dot fm) or using
folowing project pages:

 * http://sourceforge.net/projects/phpqrcode/
 * http://phpqrcode.sourceforge.net/
  
== ACKNOWLEDGMENTS ==

Based on C libqrencode library (ver. 3.1.1) 
Copyright (C) 2006-2010 by Kentaro Fukuchi
http://megaui.net/fukuchi/works/qrencode/index.en.html

QR Code is registered trademarks of DENSO WAVE INCORPORATED in JAPAN and other
countries.

Reed-Solomon code encoder is written by Phil Karn, KA9Q.
Copyright (C) 2002, 2003, 2004, 2006 Phil Karn, KA9Q
