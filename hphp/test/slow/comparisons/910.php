<?php

$i = 0;
 print ++$i;
 print "\t";
 print ('php'!=true) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=true) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = true;
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != true	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=false) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=false) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = false;
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != false	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 1;
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != 1	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=0) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=0) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 0;
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != 0	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=-1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=-1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = -1;
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != -1	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!='1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !='1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '1';
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != '1'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!='0') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !='0') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '0';
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != '0'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!='-1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !='-1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '-1';
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != '-1'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=nullptr) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=nullptr) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = nullptr;
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != nullptr	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array()) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array()) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array();
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array()	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array(1)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array(1)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(1);
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array(1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array(2)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array(2)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(2);
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array(2)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array('1')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array('1')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('1');
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array('1')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array('0' => '1')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array('0' => '1')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('0' => '1');
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array('0' => '1')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array('a')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array('a')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('a');
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array('a')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array('a' => 1)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array('a' => 1)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('a' => 1);
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array('a' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array('b' => 1)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array('b' => 1)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('b' => 1);
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array('b' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array('a' => 1, 'b' => 2)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array('a' => 1, 'b' => 2)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('a' => 1, 'b' => 2);
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array('a' => 1, 'b' => 2)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array(array('a' => 1))) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array(array('a' => 1))) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(array('a' => 1));
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array(array('a' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!=array(array('b' => 1))) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !=array(array('b' => 1))) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(array('b' => 1));
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != array(array('b' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!='php') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !='php') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 'php';
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != 'php'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('php'!='') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = 'php';
 print ($a !='') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '';
 print ('php'!=$b) ? 'Y' : 'N';
 print ($a !=$b) ? 'Y' : 'N';
 print "\t";
 print "'php' != ''	";
 print "\n";
