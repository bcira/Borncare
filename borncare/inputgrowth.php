<?php


$ay =$_GET["ay"];
$cm =$_GET["cm"];
$kg =$_GET["kg"];
$gender =$_GET["gender"];
$g = ($kg)*1000;

/*for girls*/
if ($gender=="girl") {
	if($ay==1){
		if(($g>=2950 && $g<=5000)&&($cm>=50 && $cm<=59)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}
		if($g<2950 || $cm<50){	
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";

		}if($g>5000 || $cm>59){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==2){
		if(($g>=3500 && $g<=6400)&&($cm>=52 && $cm<=62)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<3500 || $cm<52){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>6400 || $cm>62){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==3){
		if(($g>=4000 && $g<=7200)&&($cm>=54 && $cm<=64)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<4000 || $cm<54){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>7200 || $cm>64){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==4){
		if(($g>=4500 && $g<=8000)&&($cm>=56 && $cm<=67)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<4500 || $cm<56){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>8000 || $cm>67){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==5){
		if(($g>=5000 && $g<=8700)&&($cm>=57 && $cm<=70)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<5000 || $cm<57){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>8700 || $cm>70){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==6){
		if(($g>=5400 && $g<=9250)&&($cm>=59 && $cm<=72)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<5400 || $cm<59){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>9250 || $cm>72){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==7){
		if(($g>=5800 && $g<=9800)&&($cm>=60 && $cm<=73)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<5800 || $cm<60){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>9800 || $cm>73){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==8){
		if(($g>=6150 && $g<=10350)&&($cm>=61 && $cm<=75)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<6150 || $cm<61){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>10350 || $cm>75){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==9){
		if(($g>=6500 && $g<=10800)&&($cm>=62 && $cm<=77)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<6500 || $cm<62){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>10800 || $cm>77){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==10){
		if(($g>=6750 && $g<=11200)&&($cm>=63 && $cm<=78)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<6750 || $cm<63){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>11200 || $cm>78){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==11){
		if(($g>=7000 && $g<=11700)&&($cm>=65 && $cm<=79)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<7000 || $cm<65){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>11700 || $cm>79){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==12){
		if(($g>=7200 && $g<=12000)&&($cm>=66 && $cm<=81)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
        }else if($g<7200 || $cm<66){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}else if($g>12000 || $cm>81){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}if($ay==13){
		if(($g>=7300 && $g<=12100)&&($cm>=67 && $cm<=82)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<7300 || $cm<67){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>12100 || $cm>82){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}



	}
	else if($ay==14){
		if(($g>=7500 && $g<=12400)&&($cm>=70 && $cm<=83)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<7500 || $cm<70){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>12400 || $cm>83){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==15){
		if(($g>=7700 && $g<=12500)&&($cm>=72 && $cm<=84)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<7700 || $cm<72){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>12500 || $cm>84){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==16){
		if(($g>=7800 && $g<=12700)&&($cm>=73 && $cm<=85)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<7800 || $cm<73){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>12700 || $cm>85){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==17){
		if(($g>=8000 && $g<=12900)&&($cm>=74 && $cm<=86)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8000 || $cm<74){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>12900 || $cm>86){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==18){
		if(($g>=8200 && $g<=13100)&&($cm>=75 && $cm<=87)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8200 || $cm<75){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>13100 || $cm>87){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==19){
		if(($g>=8300 && $g<=13400)&&($cm>=76 && $cm<=88)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8300 || $cm<76){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>13400 || $cm>88){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==20){
		if(($g>=8500 && $g<=13600)&&($cm>=77 && $cm<=89)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8500 || $cm<77){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>13600 || $cm>89){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==21){
		if(($g>=8700 && $g<=13900)&&($cm>=78 && $cm<=90)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8700 || $cm<78){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>13900 || $cm>90){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==22){
		if(($g>=8800 && $g<=14100)&&($cm>=79 && $cm<=91)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8800 || $cm<79){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>14100 || $cm>91){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==23){
		if(($g>=9000 && $g<=14300)&&($cm>=80 && $cm<=92)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<9000 || $cm<80){
			echo "Your baby's growth rate is subnormal!";
		}if($g>14300 || $cm>92){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}
	else if($ay==24){
		if(($g>=9200 && $g<=14600)&&($cm>=81 && $cm<=93)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<9200 || $cm<81){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>14600 || $cm>93){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}

	}


}


/*for boys*/
if ($gender=="boy") {
	if($ay==1){
		if(($g>=3000 && $g<=5750)&&($cm>=51 && $cm<=59)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<3000 || $cm<51){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>5750 || $cm>59){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}

		
	else if($ay==2){
		if(($g>=3600 && $g<=6600)&&($cm>=53 && $cm<=62)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<3600 || $cm<53){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>6600 || $cm>62){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";		}}

	
	else if($ay==3){
		if(($g>=4150 && $g<=7500)&&($cm>=55 && $cm<=65)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<4150 || $cm<55){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>7500 || $cm>65){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}


	
	else if($ay==4){
		if(($g>=4600 && $g<=8250)&&($cm>=57 && $cm<=67)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<4600 || $cm<57){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>8250 || $cm>67){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}


	
	else if($ay==5){
		if(($g>=5100 && $g<=9000)&&($cm>=58 && $cm<=70)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<5100 || $cm<58){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>9000 || $cm>70){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}


	
	else if($ay==6){
		if(($g>=5500 && $g<=9600)&&($cm>=60 && $cm<=72)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<5500 || $cm<60){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>9600 || $cm>72){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}


	
	else if($ay==7){
		if(($g>=6000 && $g<=10250)&&($cm>=62 && $cm<=75)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<6000 || $cm<62){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>10250 || $cm>75){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}


	
	else if($ay==8){
		if(($g>=6300 && $g<=10900)&&($cm>=63 && $cm<=77)){
		    echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<6300 || $cm<63){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>10900 || $cm>77){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}


	
	else if($ay==9){
		if(($g>=6700 && $g<=11300)&&($cm>=64 && $cm<=78)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<6700 || $cm<64){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>11300 || $cm>778){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}


	
	else if($ay==10){
		if(($g>=6950 && $g<=11900)&&($cm>=66 && $cm<=80)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<6950 || $cm<66){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>11900 || $cm>80){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}


	else if($ay==11){
		if(($g>=7200 && $g<=12200)&&($cm>=67 && $cm<=81)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<7200 || $cm<67){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>12200 || $cm>81){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}


	
	else if($ay==12){
		if(($g>=7450 && $g<=12500)&&($cm>=68 && $cm<=82)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<7450 || $cm<68){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>12500 || $cm>82){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==13){
		if(($g>=8000 && $g<=12600)&&($cm>=69 && $cm<=83)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8000 || $cm<69){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>12600 || $cm>83){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==14){
		if(($g>=8200 && $g<=12800)&&($cm>=70 && $cm<=84)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8200 || $cm<70){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>12800 || $cm>84){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==15){
		if(($g>=8400 && $g<=13000)&&($cm>=72 && $cm<=85)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8400 || $cm<72){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>13000 || $cm>85){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==16){
		if(($g>=8500 && $g<=13200)&&($cm>=73 && $cm<=86)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8500 || $cm<73){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>13200 || $cm>86){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==17){
		if(($g>=8700 && $g<=13500)&&($cm>=74 && $cm<=87)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8700 || $cm<74){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>13500 || $cm>87){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==18){
		if(($g>=8900 && $g<=13500)&&($cm>=75 && $cm<=88)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<8900 || $cm<75){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>13500 || $cm>88){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==19){
		if(($g>=9000 && $g<=14000)&&($cm>=76 && $cm<=89)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<9000 || $cm<76){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>14000 || $cm>89){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==20){
		if(($g>=9200 && $g<=14300)&&($cm>=77 && $cm<=90)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<9200 || $cm<77){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>14300 || $cm>90){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==21){
		if(($g>=9300 && $g<=14600)&&($cm>=78 && $cm<=91)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<9300 || $cm<78){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>14600 || $cm>91){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==22){
		if(($g>=9500 && $g<=14800)&&($cm>=79 && $cm<=92)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<9500 || $cm<79){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>14800 || $cm>92){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==23){
		if(($g>=9700 && $g<=15000)&&($cm>=80 && $cm<=93)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<9700 || $cm<80){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>15000 || $cm>93){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
		}}
	else if($ay==24){
		if(($g>=9800 && $g<=15100)&&($cm>=81 && $cm<=95)){
			echo "<script type='text/javascript'>alert('Growth of your baby is optimum');</script>";
		}if($g<9800 || $cm<81){
			echo "<script type='text/javascript'>alert('Growth of your baby is subnormal');</script>";
		}if($g>15100 || $cm>95){
			echo "<script type='text/javascript'>alert('Growth of your baby is above normal');</script>";
	
		}}
	
	


	

	
}

