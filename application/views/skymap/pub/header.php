<html>
<head>
    <style type="text/css">
        body{
            top: 0;
            left: 0;
            margin: 0;
        }
        .head-div
        {
            width: 100%;
            height: auto;
            top: 0;
            left: 0;
            position: fixed;
            background-color: #6bffab;
            margin: 0;
            padding: 0;
            border-bottom-style: solid;
            filter:alpha(opacity=50)
        }
        .head-text-div{
            width:45%;
            height: 120px;
            margin-left:30%;
            padding: 0;
        }
        .head-text-div-text1{
            word-wrap: normal;
            font-style: inherit;
            font-size: 36px;
        }
        .main-div{
            top: 0;
            left: 0;
            padding:0;
            background-color:#dddddd;

        }
        .main-div-over-head-div{
            height: 159px;
            margin-top: 0px;
            padding-top: 0px;

        }
        .main-text-div{
            -webkit-box-shadow: 3px 0px 3px,-3px 0px 3px;
            -moz-box-shadow: 3px 0px 3px,-3px 0px 3px;
            box-shadow: 3px 0px 3px,-3px 0px 3px;
            margin-top: 10px;
            width: 40%;
            min-width: 480px;
            max-width: 800px;
            margin-left: 30%;
            padding: 10px;
        }
        .main-text-card-div{
            -webkit-box-shadow: 1px 0px 1px,-1px 0px 1px;
            -moz-box-shadow: 1px 0px 1px,-1px 0px 1px;
            box-shadow: 1px 0px 1px,-1px 0px 1px;
            margin-top: 10px;
            margin-bottom: 20px;
            padding: 15px;
            border-radius:15px;
            background-color: #fff5ea;
            font-size: 22px;
            clear: both;
        }
        .main-text-card-left-div{
            float: left;
            width: 60%;
            padding: 5px;
            border-radius:4px;
            background-color: #e7e8eb;
        }
        .main-text-card-right-div{

            float: right;
            width: 30%;
            background-color: #e7e8eb;

        }

    </style>
</head>
<body>

<div class="head-div">
    <div class="head-text-div">
        <p class="head-text-div-text1">
            <?php
            echo $headertext1."</br>";
            echo $headertext2."</br>";
            ?>

        </p>
    </div>
</div>
<div class="main-div" >
    <div class="main-div-over-head-div">

    </div>
    <div class="main-text-div">