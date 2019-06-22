<?php

Banner ();
Z_Keys ();

function Banner () {
   Clear ();
   print "\033[32;1m\n\n";
   usleep (125000);
   print "\t         _____   _____ ____ ___ \n";
   usleep (125000);
   print "\t        |__  /  |_   _/ ___|_ _|\n";
   usleep (125000);
   print "\t          / /_____| | \___ \| | \n";
   usleep (125000);
   print "\t         / /|_____| |  ___) | | \n";
   usleep (125000);
   print "\t        /____|    |_| |____/___|\n";
   usleep (125000);
   print "\033[0m\n";
   usleep (125000);
   print "    \033[41;1mZ-Termux Shorcut Keys Installer Coded By Zulf-135\n\033[0m";
   usleep (125000);
   print "\n\n";
   usleep (125000);

   print "\033[32;1m [\033[0;1mAuthor\033[32;1m]  =>\033[33;1m Zulf-135\n";
   usleep (125000);
   print "\033[32;1m[\033[0;1mFacebook\033[32;1m] =>\033[33;1m https://m.facebook.com/100013101636250\n";
   usleep (125000);
   print "\033[32;1m[\033[0;1mWhatApps\033[32;1m] =>\033[33;1m 0852-1730-2722\n";
   usleep (125000);
   print "\033[32;1m [\033[0;1mGithub\033[32;1m]  =>\033[33;1m https://github.com/Zulf-135/\n\n";
   usleep (125000);
}

function Z_Keys () {
   $folders = scandir ("/data/data/com.termux/files/home");
   $extra_keys = "extra-keys = [['ESC','/','-','HOME','UP','END','PGUP'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','PGDN']]";

   if (in_array (".termux", $folders)) {
      if (file_exists ("/data/data/com.termux/files/home/.termux/termux.properties")) {
         if (file_get_contents ("/data/data/com.termux/files/home/.termux/termux.properties") === $extra_keys) {
            print "\r\033[32;1m\t << Extra Keys Has Properly Installed >>\n\033[0m";
         }
         else {
            Loading ("<<< Checking Termux Extra Keys On This Device >>>", 1);
            file_put_contents ("/data/data/com.termux/files/home/.termux/termux.properties", $extra_keys);
            Loading ("<<< Checking Termux Extra Keys On This Device >>>", 1);
            Z_Keys ();
            usleep (1750000);
            print "\r\033[33;1m\t      << Restart Termux To Setup >>\n\033[0m";
         }
      }
      else {
         Loading ("<<< Checking Termux Extra Keys On This Device >>>", 1);
         file_put_contents ("/data/data/com.termux/files/home/.termux/termux.properties", $extra_keys);
         Loading ("<<< Checking Termux Extra Keys On This Device >>>", 1);
         Z_Keys ();
         usleep (1750000);
         print "\r\033[33;1m\t      << Restart Termux To Setup >>\n\033[0m";
      }
   }
   else {
      Loading ("<<< Checking Termux Extra Keys On This Device >>>", 1);
      mkdir ("/data/data/com.termux/files/home/.termux/");
      file_put_contents ("/data/data/com.termux/files/home/.termux/termux.properties", $extra_keys);
      Loading ("<<< Checking Termux Extra Keys On This Device >>>", 1);
      Z_Keys ();
      usleep (1750000);
      print "\r\033[33;1m\t      << Restart Termux To Setup >>\n\033[0m";
   }
}

function Clear () {
   system ("clear");
}

function Loading ($_STRING, $waktu) {
   for ($i = 0; $i < $waktu; $i++) {
      for ($j = 0; $j < strlen ($_STRING); $j++) {
         $_LOADING = $_STRING;

         if (preg_match ("/[a-z]/i", $_LOADING[$j])) {
            $_LOADING[$j] = strtoupper ($_LOADING[$j]);
            print "\033[0;1m";
            print "\r    $_LOADING";
            usleep (50000);
            print "\r    ". Spasi ($_LOADING);
         }
      }
   }
}

function Spasi ($_STRING) {
   for ($i = 0; $i < strlen ($_STRING); $i++) {
      $spasi .= " ";
   }
   return $spasi;
}

?>
