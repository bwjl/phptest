<?php

/**
 * Created with PhpStorm.
 * User: bear
 * Date: 2020/9/17 下午4:30
 * Description: 字符串分段为数组
 */

$str = 'yVt382qV3f5TFF3s8C1XEexqlKse/vyKieMDwXAC9zW+GqxeTI1yX4S7IaKRzdHwxw+TZizIGIJl8t0XTr0wQQMfoMRvNOO3zkdzcrr9G6FeiU9Wtk4hh9918pTeF53F+Lhd+zSV+3SvzlUrjCdaARSVLv3SEBpdG9WTKz7lpOMi5CHyM7/A63cYGK/PsARaWgmVpSDlFUVLjPt775ySpEDOpTegSfiVCpzkrXkJQJ5r+rE1t0N4/ypt7jGYDCgoGKdQ/aJsSG6O98AIo6qCAqfKXjCbxaQIo8CL6pBKyYhqM0ICSMpWMmgQPLb2Z/JK7r4JlbaIPVvc8j4b15SVnk/CxhEZ5R184YzdqvpaNJ9/so51WxcLGiJH5/FL6lxB+EhuQHwFHE/oCUgt/XMjjgDqQljMa9NTS5nuO7ScWzE3Vc+x1/0ktzqk7GCj94DcDbpKqlwboCjDPPdwoMF/V86UK8VoU+JEHsPJ5s4rb6lPyHX3fzvkN66UCDRiqkw4MUjIEln097g5TmSCEWVY/DNve965VEYPDgIAONITczg=';

var_dump(str_split($str, 128));

//yVt382qV3f5TFF3s8C1XEexqlKse/vyKieMDwXAC9zW+GqxeTI1yX4S7IaKRzdHwxw+TZizIGIJl8t0XTr0wQQMfoMRvNOO3zkdzcrr9G6FeiU9Wtk4hh9918pTeF53F