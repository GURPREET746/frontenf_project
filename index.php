<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example for Data Class</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

<!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

<style>
        .main{
            margin-left: 28%;
            text-align: center;
            margin-bottom: 28%;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }

        }
        @media (max-width: 768px) {
           .main{
            margin-left: 0%;
            margin-top: 44%;
           }
            
        }
      
        html,
        body {
            height: 1200px;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        table{
            display: none;
        }
        #myInput{
            margin-bottom: 20px;
            width: 64%;
        }
    </style>

</head>

<body>
<div  class="main">
        <div style="margin-bottom: 8%;">
            <h1>WELCOME TO ABC RESTAURANT</h1>
        </div>
        <div>
            <h2 class="heading">CHOOSE MENU</h2>
        </div>
        <div class="form-group" style="margin-top: 9%;">
           <!-- <label for="exampleFormControlSelect1" style="margin-right: 81%;">SELECT ITEM:-</label> -->
           <form action="index.php" method="post">
           <input type="text" id="myInput" placeholder="ENTER ITEM NUMBER FROM 0 TO 218"> <br>
           <button type="button" class="btn btn-primary" id="myBtn">FIND ITEM</button>
</form>   
</div>
<table class="table" style="margin-top: 15%;">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ITEM</th>
                <th scope="col">CONTENTS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>SHORT NAME</td>
                <td class="sname">NULL</td>
              </tr>
              <tr>
                <td>NAME</td>
                <td class="name">NULL</td>
              </tr>
              <tr>
                <td>Description</td>
                <td class="desc">NULL</td>
              </tr>
              <tr>
                <td>PRICE SMALL</td>
                <td class="psmall">NULL</td>
              </tr>
              <tr>
                <td>PRICE LARGE</td>
                <td class="plarge">NULL</td>
              </tr>
            </tbody>
  </table>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        let base_url = "http://localhost/five/student.php";

        $("document").ready(function(){
            $("#myBtn").click(function(){
                var str = $("#myInput").val();
                if(str>=0 && str<=218 ){
                    getStudentByPrn(str);
                }
                else{
                    alert("Enter valid input i.e from 0 to 218");
                }
            });              
        });

            function getStudentByPrn(id) {
           
            let url = base_url + "?req=student_data&id="+ id;
            $.get(url,function(data,success){
                $("table").css("display", "block");
                $(".sname").html(data.short_name);
                $(".name").html(data.name);
                $(".desc").html(data.description);
                $(".psmall").html(data.price_small);
                $(".plarge").html(data.price_large);
            });
        }
    </script>


</body>
</html>