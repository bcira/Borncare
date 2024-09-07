<center>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<SCRIPT 
src="javascript_f50acb69fd.js" 
type=text/javascript></SCRIPT>
</head>

<body><TABLE cellSpacing=0 cellPadding=0 width="48%" 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD height="313"><IMG class=spacer-gif 
                                title="" height=5 alt="" 
                                src="clear.gif" 
                                width=1 border=0>
                                  <IMG class=spacer-gif 
                                title="" height=10 alt="" 
                                src="clear.gif" 
                                width=1 border=0>
                                  <FONT 
                                face=Verdana>
                                <SCRIPT language=javascript>
function isEmpty(inputStr) {
        if (inputStr == "" || inputStr == null) {
                return true
        }
        return false
}
function isNumber(inputStr) {
        for (var i = 0; i < inputStr.length; i++) {
                var oneChar = inputStr.charAt(i)
                if (oneChar < "0" || oneChar > "9") {
                        return false
                }
        }
        return true
}
function inRangeDay(inputStr) {
        num = parseInt(inputStr)
        if (num < 1 || num > 31) {
                return false
        }
        return true
}
function inRangeYear(inputStr) {
        num = parseInt(inputStr)
        if (num < 1900 || num > 2500) {
                return false
        }
        return true
}
function isValidDay(inputStr) {
        if (isEmpty(inputStr)) {
                alert("Lütfen doğum gününü giriniz.")
                return false
        } else {
               if (!isNumber(inputStr)) {

                        alert("Lütfen sadece sayı giriniz.")

                        return false

                } else {

                        if (!inRangeDay(inputStr)) {

                                alert("Lütfen geçerli bir gün sayısı giriniz.")

                                return false

                        }

                }

        }

        return true

}


function isValidYear(inputStr) {

        if (isEmpty(inputStr)) {

                alert("Lütfen doğum yılını giriniz.")

                return false

        } else {

                if (!isNumber(inputStr)) {
                        alert("Lütfen sadece sayı giriniz.")
                        return false
                } else {
                        if (!inRangeYear(inputStr)) {
                                alert("Lütfen geçerli bir yıl sayısı giriniz. Örnek: 2001 gibi")
                                return false

                        }

                }

        }

        return true

}



function makeArray(n) {

        this.length = n

        for (var i=1; i <= n; i++)

                this[i] = null
                return this
}
var maxday = new makeArray(12)

maxday[1] = 31

maxday[2] = 28

maxday[3] = 31

maxday[4] = 30

maxday[5] = 31

maxday[6] = 30

maxday[7] = 31

maxday[8] = 31

maxday[9] = 30

maxday[10] = 31

maxday[11] = 30

maxday[12] = 31



var monthname = new makeArray(12)

monthname[1] = "Ocak"
monthname[2] = "Şubat"
monthname[3] = "Mart"
monthname[4] = "Nisan"
monthname[5] = "Mayıs"
monthname[6] = "Haziran"
monthname[7] = "Temmuz"
monthname[8] = "Ağustos"
monthname[9] = "Eylül"
monthname[10] = "Ekim"
monthname[11] = "Kasım"
monthname[12] = "Aralık"


var adddays = new makeArray(7)

adddays[1] = 0

adddays[10] = 31

adddays[2] = 60

adddays[3] = 90

adddays[4] = 120

adddays[5] = 180

adddays[6] = 485





function calcNewDate(day,month,year,adddays) {

        newday = eval(day) + adddays
        newmonth = month + 1
	newyear = eval(year)
        var max
        for (var i = 0; i < 192; i++) {
          if (newmonth == 2 && (newyear % 4) == 0) {

            max = 29

          } else

            max = maxday[newmonth]
          if (newday > max) {
            newday = newday - max
            newmonth = newmonth + 1
            if (newmonth > 12) {
              newyear = newyear + 1
              newmonth = 1
            }
          }
          else

            break

        }

        var datestring = newday + " " + monthname[newmonth] + " "  + newyear

        return datestring

}


function calc(form) {

        day = form.day.value
        year = form.year.value
        monthnum = form.month.selectedIndex

        if (isValidDay(day)) {

          if (isValidYear(year)){
		  
		    form.hepatit1.value = calcNewDate(day,monthnum,year,adddays[1])
			
			form.hepatit2.value = calcNewDate(day,monthnum,year,adddays[10])

            form.karma1.value = calcNewDate(day,monthnum,year,adddays[2])

            form.karma2.value = calcNewDate(day,monthnum,year,adddays[3])

            form.karma3.value = calcNewDate(day,monthnum,year,adddays[4])

            form.hepatit3.value = calcNewDate(day,monthnum,year,adddays[5])

            form.karmaR.value = calcNewDate(day,monthnum,year,adddays[6])

            

			
			form.kizamik1.value = calcNewDate(day,monthnum,year,adddays[7])
			
			/* form.kizamikcik2.value = calcNewDate(day,monthnum,year,adddays[8]) */ 

          }

        }



}

</SCRIPT>
                                </FONT>
                                <center style= "background-color:FFC733">
                                <DIV align=center >
                                <TABLE id=table1 cellSpacing=0 cellPadding=0 
                                width="100%" border=0>
                                <TBODY style= "background-color:FFC733">
                                <TR>
                                <TD vAlign=top align=middle>
                                <TABLE id=table2 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px" 
                                height=257 cellSpacing=100 cellPadding=30 width=400 
                                border=0>
                                <TBODY>
                                <TR>
                                <TD width=452 height=102>
                                <FORM 
                                style="FONT-SIZE: 8pt; FONT-FAMILY: Verdana" 
                                name=dates action=method=post>
                                <DIV style="WIDTH: 440px; HEIGHT: 31px" 
                                align=center>
                                <CENTER>
                                <TABLE id=table3 
                                style="BORDER-COLLAPSE: collapse" 
                                borderColor=#111111 height=1 cellSpacing=0 
                                cellPadding=0 width=283 border=0>
                                <TBODY style= "background-color:FFC733">
                                <TR >
                                <TD vAlign=center align=middle width=1 height=1>
                                <P align=left></P></TD>
                                <TD vAlign=center align=middle width=25 
								height=1>
                                <P align=left></P></TD>
                                <TD vAlign=center align=middle width=256 
                                height=1>
                                <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"
                                align=left ><B><FONT face=Verdana 
                                size=1>GÜN: </FONT></B><FONT face=Verdana 
                                size=3><INPUT 
                                style="FONT-SIZE: 10px; FONT-FAMILY: v" size=2 
                                name=day></FONT><FONT size=1> </FONT><B><FONT 
                                face=Verdana size=1  >AY: </FONT></B><FONT size=2> 
                                </FONT><FONT face="Times New Roman" 
                                size=2><SELECT 
                                style="FONT-SIZE: 10px; FONT-FAMILY: Verdana" 
                                size=1 name=month> <OPTION 
                                selected>Ocak</OPTION> <OPTION>Şubat</OPTION> 
                                <OPTION>Mart</OPTION> <OPTION>Nisan</OPTION> 
                                <OPTION>Mayıs</OPTION> <OPTION>Haziran</OPTION> 
                                <OPTION>Temmuz</OPTION> <OPTION>Ağustos</OPTION> 
                                <OPTION>Eylül</OPTION> <OPTION>Ekim</OPTION> 
                                <OPTION>Kasım</OPTION> 
                                <OPTION>Aralık</OPTION></SELECT></FONT><B> <FONT 
                                face=Verdana size=1>YIL: </FONT></B><FONT 
                                face=Verdana size=3><INPUT 
                                style="FONT-SIZE: 10px; FONT-FAMILY: v" size=4 
                                name=year></FONT> <br></br><SPAN 
                                style="BACKGROUND-COLOR: #336699"><INPUT style="FONT-WEIGHT: bold; FONT-SIZE: 8pt; FLOAT: left; WIDTH: 113px; COLOR: #408b74; FONT-FAMILY: Verdana; HEIGHT: 18px" onclick=calc(this.form) type=button value=Hesapla></SPAN><INPUT style="FONT-WEIGHT: bold; FONT-SIZE: 8pt; FLOAT: right; WIDTH: 115px; COLOR: #408b74; FONT-FAMILY: Verdana; HEIGHT: 20px" type=reset value="Formu Temizle"></P></TD></TR>
                                <TR >
                                <TD vAlign=center align=middle width=283 
                                colSpan=3 height=1>
                                <P 
                                align=left></P></TD></TR></TBODY></TABLE></CENTER></DIV>
                                <DIV align=center >
                                <CENTER>
                                <TABLE id=table4 
                                style="BORDER-COLLAPSE: collapse " 
                                borderColor=#111111 height=172 cellSpacing=0 
                                cellPadding=0 width="100%" border=0>
                                <TBODY >
                                <TR>
                                <TD vAlign=top align=left width="100%" 
                                bgColor=#ffffff colSpan=2 height=14>
                                <P style="MARGIN: -2px 0px 4px "><B><FONT 
                                face=Verdana size=1>
                                <br></br>
                                <BR>Aşı takvimi için doğum 
                                tarihini girdikten sonra Hesapla butonuna 
                                basınız. </B><br></br></P></FONT></TD></TR>
                                <TR >
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=1>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
                                face=Verdana color=#408b74 size=1>&nbsp;� 
                                Birinci Hepatit B</FONT></B></P></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                size=1><INPUT 
                                style="FONT-SIZE: 8pt; WIDTH: 102px; FONT-FAMILY: Verdana; HEIGHT: 14px" 
                                size=16 name=hepatit1></FONT></P></TD></TR>
                                <TR>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height="8%">
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
                                face=Verdana color=#408b74 size=1>&nbsp;� 
                                İkinci&nbsp; Hepatit B</FONT></B></P></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                size=1><INPUT 
                                style="FONT-SIZE: 8pt; WIDTH: 102px; FONT-FAMILY: Verdana; HEIGHT: 14px" 
                                size=16 name=hepatit2></FONT></P></TD></TR>
                                <TR>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                face=Verdana color=#408b74 size=1><B>&nbsp;� 
                                Verem (BCG), 1. Karma (DBT), Hib, (Çocuk Felci) 
                                OPA</B></FONT></P></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                size=1><INPUT 
                                style="FONT-SIZE: 8pt; WIDTH: 102px; FONT-FAMILY: Verdana; HEIGHT: 14px" 
                                size=16 name=karma1></FONT></P></TD></TR>
                                <TR>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
                                face=Verdana color=#408b74 size=1>&nbsp;� 2. 
                                Karma (DBT), Hib, </FONT></B><FONT face=Verdana 
                                color=#408b74 size=1><B>(Çocuk Felci)&nbsp; 
                                </B></FONT><B><FONT face=Verdana color=#408b74 
                                size=1>OPA</FONT></B></P></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                size=1><INPUT 
                                style="FONT-SIZE: 8pt; WIDTH: 102px; FONT-FAMILY: Verdana; HEIGHT: 14px" 
                                size=16 name=karma2></FONT></P></TD></TR>
                                <TR>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
                                face=Verdana color=#408b74 size=1>&nbsp;� 3. 
                                Karma (DBT), Hib, </FONT></B><FONT face=Verdana 
                                color=#408b74 size=1><B>(Çocuk Felci) 
                                </B></FONT><B><FONT face=Verdana color=#408b74 
                                size=1>OPA</FONT></B></P></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                size=1><INPUT 
                                style="FONT-SIZE: 8pt; WIDTH: 102px; FONT-FAMILY: Verdana; HEIGHT: 14px" 
                                size=16 name=karma3></FONT></P></TD></TR>
                                <TR>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
                                face=Verdana color=#408b74 size=1>&nbsp;� Üçüncü 
                                Hepatit B</FONT></B></P></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                size=1><INPUT 
                                style="FONT-SIZE: 8pt; WIDTH: 102px; FONT-FAMILY: Verdana; HEIGHT: 14px" 
                                size=16 name=hepatit3></FONT></P></TD></TR>
                                <TR>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                face=Verdana color=#408b74 size=1><B>&nbsp;� 
                                Kızamık, Kızamıkçık, 
                                Kabakulak</B></FONT></P></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                size=1><INPUT 
                                style="FONT-SIZE: 8pt; WIDTH: 102px; FONT-FAMILY: Verdana; HEIGHT: 14px" 
                                size=16 name=kizamik1></FONT></P></TD></TR>
                                <TR>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width=342 bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
                                face=Verdana color=#408b74 size=1>&nbsp;� Karma 
                                (DBT), Hib, OPA (R)</FONT></B></P></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                <P 
                                style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
                                size=1><INPUT 
                                style="FONT-SIZE: 8pt; WIDTH: 102px; FONT-FAMILY: Verdana; HEIGHT: 14px" 
                                size=16 name=karmaR></FONT></P></TD></TR>
                                <TR>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#FFC733 height=14>
                                
                               </FONT></B></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#ffffff height=14>
                               </FONT></TD></TR>
                                <TR>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#ffffff height=14>
                                
                                </FONT></B></P></TD>
                                <TD vAlign=top borderColor=#ffffff align=left 
                                width="100%" bgColor=#ffffff height=14>
                                </FONT></TD></TR></TBODY></TABLE></CENTER></DIV></center></FORM></TD></TR>
                                <TR>
                                <TD width=452 height=26>
                                <P style="MARGIN: -2px 0px 4px"><FONT 
                                face=Verdana size=1></FONT></P></TD></TR></TBODY></TABLE>
                                </TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
</body>
</html>
</center>