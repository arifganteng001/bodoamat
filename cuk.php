<?php

date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
include ("goride.php");
echo "\n";
echo "\n";
				  echo "\e[91m         Time:".date('[d-m-Y] [H:i:s]')."\n";
				  echo "\e[92m      ╔══════════════════════════════════╗\n";
				  echo "\e[92m      ║   SELAMAT DATANG DI MENU GOJEK   ║\n";
				  echo "\e[92m      ║ AUTO REGISTRASI & REDEEM VOUCHER ║\n";
				  echo "\e[92m      ║   UNTUK REGISTRASI CALL ADMIN    ║\n";
				  echo "\e[92m      ║      WHATSAPP 08216xxxxxxx       ║\n";
				  echo "\e[92m      ╚══════════════════════════════════╝\n";
				  echo "\e[93m      ╔══════════════════════════════════╗\n";
				  echo "\e[93m      ║\e[91m      VOUCHER YANG TERSEDIA       \e[93m║\n";
				  echo "\e[93m      ║▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬║\n";
				  echo "\e[93m      ║ 1. VOUCHER GOFOOD 15K MINBEL 30K ║\n";
				  echo "\e[93m      ║ 2. VOUCHER GOFOOD 10K MINBEL 30K ║\n";
				  echo "\e[93m      ║ 3. VOUCHER GORIDE 8K GOPAY       ║\n";
				  echo "\e[93m      ║ 4. VOUCHER GOCAR 8K GOPAY        ║\n";
				  echo "\e[93m      ║ 5. VOUCHER GORIDE 3K             ║\n";
				  echo "\e[93m      ║ 6. VOUCHER GOCAR CASBACK 5K      ║\n";
				  echo "\e[93m      ║                                  ║\n";
				  echo "\e[93m      ║▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬║\n";
				  echo "\e[93m      ║\e[94m              RAMA4RT             \e[93m║\n";
				  echo "\e[93m      ╚══════════════════════════════════╝\n";
	echo "\n";
echo "\e[93m╔══════════════════════════════════╗\n";
echo "\e[93m║ \e[91m[?] Sudah Punya User Login ?: ";	
$pilihy = trim(fgets(STDIN));
if($pilihy == "y" || $pilihy == "sudah")
echo "\e[93m╚══════════════════════════════════╝\n";
	goto login;
login:
echo "\e[93m╔══════════════════════════════════╗\n";
$pass = ask_hidden( '║ User Login : ' );
echo "\033[30;40m";
$user = trim(fgets(STDIN));
echo "\033[0m";
if($user == "indonesia" || $user == "gojek")
{
	echo "\e[93m╚══════════════════════════════════╝\n";
	echo "\e[93m╔══════════════════════════════════╗\n";
	echo "\e[93m║ \e[91m[?] Ketik Nama Anda ?: ";	
	$input = trim(fgets(STDIN));
	echo "\e[93m╚══════════════════════════════════╝\n";
		goto ulang;
}
else
{
		echo "\e[93m╚══════════════════════════════════╝\n";	
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
		echo "\e[91m[X] Masukkan User Registrasi [X]\n";
		echo "\e[91m[X]      Segera DONASI       [X]\n";
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
goto login;
}
	return rtrim( $input, "\n" );
ulang:
echo "\n";
echo "\e[92m        Selamat Datang $input         \n";
echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[92m[✓] Masukkan Nomor HP Anda (62/1) : ";
$nope = trim(fgets(STDIN));
$register = register($nope);
if ($register == false)
    {
    echo "\e[91m[X] Nomer Sudah Terdaftar\n";
echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
	sleep (2);
	goto ulang;
    }
  else
    {
    otp:
echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
    echo "\e[92m[✓] Masukkan Kode OTP : ";
    $otp = trim(fgets(STDIN));
    $verif = verif($otp, $register);
	if ($verif == false)
        {
        echo "\e[91m[X] Kode OTP Salah\n";
echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
        goto ulang;
        }
	echo "\n";	
	echo "\e[92m[✓] Registrasi Berhasil\n";
	sleep(2);
	echo "\e[92m[✓] Silahkan Cek Banner Gofood\n";
	echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
	echo "\n";
	echo "\n";
	sleep(2);
	daftar:
	echo "\e[93m[✓] Cek Banner & Voucher (y/n): ";	
$pilihy = trim(fgets(STDIN));
if($pilihy == "Y" || $pilihy == "y")
	goto redeem;
else
	{
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
        echo "\e[92m[✓] Silahkan Cek Promo Anda\n";
		echo "\e[92m[✓] Jangan Lupa Donasi Seikhlasnya\n";
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
		goto login;
		sleep(2);
	}
        {
        file_put_contents("token/".$verif['data']['customer']['name'].".txt", $verif['data']['access_token']);
		redeem:
        echo "\e[93m[✓] Checking Banner Gofood";
		echo "\e[93m.";
		sleep(1);
		echo "\e[93m.";
		sleep(1);
		echo "\e[93m.";
		sleep(1);
		echo "\e[93m.\n";
		sleep(2);
        $claim = gofoodnew($verif);
        if ($claim == false)
            {
            echo "\e[91m[X] Buka Menu Gofood Klik Banner\n";
            sleep(2);
            echo "\e[93m[✓] Checking Voucher Goride 8K";
			echo "\e[93m.";
			sleep(1);
			echo "\e[93m.";
			sleep(1);
			echo "\e[93m.";
			sleep(1);
			echo "\e[93m.\n";
            sleep(2);
            goto next;
            }
            else{
                echo "\e[92m[✓] ".$claim."\n";
                sleep(2);
            echo "\e[93m[✓] Checking Voucher Goride 8K";
			echo "\e[93m.";
			sleep(1);
			echo "\e[93m.";
			sleep(1);
			echo "\e[93m.";
			sleep(1);
			echo "\e[93m.\n";
            sleep(2);
                goto next;
            }
            next:
            $claim = goride8k($verif);
            if ($claim == false) 
		{
                echo  "\e[91m[X] Goride Sedang Kosong\n";
                sleep(3);
               echo "\e[93m[✓] Checking Voucher Gocar 8K";
			echo "\e[93m.";
			sleep(1);
			echo "\e[93m.";
			sleep(1);
			echo "\e[93m.";
			sleep(1);
			echo "\e[93m.\n";
            sleep(2);
               goto next1;
  
         }
            else
			{
                echo "\e[92m[✓] ".$claim."\n";
                sleep(3);
                echo "\e[93m[✓] Checking Voucher Gocar 8K";
				echo "\e[93m.";
				sleep(1);
				echo "\e[93m.";
				sleep(1);
				echo "\e[93m.";
				sleep(1);
				echo "\e[93m.\n";
                sleep(3);
                goto next1;
            }
            next1:
            $claim = gocar8k($verif);
            if ($claim == false) 
			{
                echo  "\e[91m[↓] Voucher Habis !!!\n";
                sleep(3);
                echo "\e[93m[✓] COBAINGOJEK GORIDE 7K\n";
                sleep(3);
                goto ride;
            }
          else
            {
            echo "\e[92m[✓] ".$claim . "\n";
            sleep(3);
            echo "\e[93m[✓] COBAINGOJEK GORIDE 7K\n";
            sleep(3);
            goto ride;
            }
            ride:
            $claim = goride7k($verif);
            if ($claim == false ) 
			{
                echo  "\e[91m[↓] GORIDE HABIS\n";
                sleep(3);
				goto thanks;
                echo "\e[93m[✓] AYOCOBAGOJEK\n";
                sleep(3);

            }
            else{
                echo "\e[92m[✓] ".$claim."\n";
                sleep(3);
				goto thanks;
                echo "\e[93m[✓] AYOCOBAGOJEK\n";
                sleep(3);
                goto goride;
            }
            goride:
            $claim = cekvocer($verif);
		if ($claim == false ) 
			{
                echo "\e[91m[↓] GORIDE HABIS\n";
				echo "\e[93m[✓] VOUCHER GOFOOD 25K\n";
                sleep(3);
				goto free;
                

            }
            else{
                echo "\e[92m[✓] ".$claim."\n";
                sleep(3);
                echo "\e[93m[✓] VOUCHER GOFOOD 25K\n";
                sleep(3);
                goto free;
            }
            free:
            $claim = hemat($verif);
        if ($claim == false ) {
                echo "\e[91m[↓] Anda Belum Beruntung !!\n";
				goto ulang;
            }
            else
			{
                echo "\e[92m[+] ".$claim."\n";
            sleep(3);
			goto ulang;
			}
			}
	}
	thanks:
echo "\n";	
echo "\e[93m╔══════════════════════════════════╗\n";
echo "\e[93m║            Terimakasih           ║\n";
echo "\e[93m║     THANKS TO SUPPORT GOJEK      ║\n";
echo "\e[93m║              RAMA4RT             ║\n";
echo "\e[93m╚══════════════════════════════════╝\n";
echo "\n";
goto ulang;

?>
