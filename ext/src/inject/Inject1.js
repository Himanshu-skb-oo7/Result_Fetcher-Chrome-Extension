chrome.extension.sendMessage({}, function(response) {

    var readyStateCheckInterval = setInterval(function () {
        if (document.readyState == "complete") {

            var branchCode=["10","10","31","31","40","40","13","13","00","00","20","20","51","51"];
            var limit=["58","910","50","912","40","909","32","907","42","909","43","912","24","906"];



            if(document.getElementById("ctl00_ContentPlaceHolder1_messg").innerHTML==="Result Not Declare; Contact to COE Office")
            {
                if(parseInt(document.getElementById("ctl00_ContentPlaceHolder1_txtRollno").value)%1000 > limit[parseInt(window.localStorage.getItem("index"))])
                {

                    window.localStorage.setItem("index", parseInt(window.localStorage.getItem("index")) + 1);

                    if (parseInt(parseInt(limit[parseInt(window.localStorage.getItem("index"))]) / 100) != "9")
                    {
                        window.localStorage.setItem("rollNo", parseInt("15043" + branchCode[window.localStorage.getItem("index")] + "001"));
                    }

                    else
                    {
                        window.localStorage.setItem("rollNo", parseInt("16043" + branchCode[window.localStorage.getItem("index")] + "901"));
                    }


                }
                else
                {
                    window.localStorage.setItem("rollNo",parseInt(window.localStorage.getItem("rollNo"))+1);
                }


            }


            clearInterval(readyStateCheckInterval);

            var form = document.getElementById("aspnetForm");

          if(parseInt(window.localStorage.getItem("index"))!=14)
          {
              document.getElementById("ctl00_ContentPlaceHolder1_ddlAcademicSession").value = "2016-2017";
              document.getElementById("ctl00_ContentPlaceHolder1_ddlSem").value = "4";
              document.getElementById("ctl00_ContentPlaceHolder1_ddlResultCategory").value = "R";
              document.getElementById("ctl00_ContentPlaceHolder1_txtRollno").setAttribute("value",parseInt(window.localStorage.getItem("rollNo")));
              document.getElementById("ctl00_ContentPlaceHolder1_cmdPrintTR").click();
          }
            else
          {
              window.close();
          }


        }
    },10);


});