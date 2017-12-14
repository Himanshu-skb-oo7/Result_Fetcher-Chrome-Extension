chrome.extension.sendMessage({}, function(response) {

    var readyStateCheckInterval = setInterval(function() {
        if (document.readyState === "complete") {

            clearInterval(readyStateCheckInterval);
            window.localStorage.setItem("rollNo",parseInt(document.getElementById("ctl00_ContentPlaceHolder1_rollno").innerHTML)+1);

            if(parseInt(parseInt(document.getElementById("ctl00_ContentPlaceHolder1_rollno").innerHTML)/1000)%100==10 &&
                parseInt(document.getElementById("ctl00_ContentPlaceHolder1_rollno").innerHTML.substring(0,2))==15)
                window.localStorage.setItem("index",0);



            var myText=document.getElementById("ctl00_ContentPlaceHolder1_rollno").innerHTML;
            var myText1=document.getElementById("ctl00_ContentPlaceHolder1_bname").innerHTML;
            var myText2=document.getElementById("ctl00_ContentPlaceHolder1_sName").innerHTML;
            var myText3=(document.getElementById("ctl00_ContentPlaceHolder1_fName").innerHTML).toString();
            var myText4a=(document.getElementById("ctl00_ContentPlaceHolder1_omk").innerHTML).toString().substring(0,3);
            var myText4b=(document.getElementById("ctl00_ContentPlaceHolder1_emk").innerHTML).toString().substring(0,3);
            var myText4=parseInt(myText4a)+parseInt(myText4b);

            window.localStorage.setItem("rollNo",parseInt(document.getElementById("ctl00_ContentPlaceHolder1_rollno").innerHTML)+1);

            var form =document.createElement("form");
            var input=document.createElement("input");
            var input1=document.createElement("input");
            var input2=document.createElement("input");
            var input3=document.createElement("input");
            var input4=document.createElement("input");
            var btn=document.createElement("input");

            btn.setAttribute("type","submit");
            form.setAttribute("action","http://localhost/PHP/savedata.php");
            form.setAttribute("method","post");
            input.setAttribute("value",myText.toString());
            input1.setAttribute("value",myText1.toString());
            input2.setAttribute("value",myText2.toString());
            input3.setAttribute("value",myText3.toString());
            input4.setAttribute("value",myText4.toString());

            input.setAttribute("name","input");
            input1.setAttribute("name","input1");
            input2.setAttribute("name","input2");
            input3.setAttribute("name","input3");
            input4.setAttribute("name","input4");



            form.appendChild(input);
            form.appendChild(input1);
            form.appendChild(input2);
            form.appendChild(input3);
            form.appendChild(input4);
            form.appendChild(btn);

            document.getElementsByTagName("table")[2].appendChild(form);

            btn.click();
            btn.onclick=function () {

                btn.setAttribute("")
            };


        }
    }, 10);

    return true;
});
