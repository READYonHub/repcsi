<?php
$loginBackground = "
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: consolas;
        }

        .error {
            min-height: 100vh;
            background: linear-gradient(0deg, #fff, #03a9f4);
        }

        .sky {
            position: relative;
            widows: 100%;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /*404 mertezes*/
        .sky h2 {
            font-size: 16em;
            color: #fff;
            text-shadow: 15px 15px 0 rgba(0, 0, 0, 0.1);
        }

        /*404 mozgas*/
        .sky h2 span {
            display: inline-block;
            animation: animate 2s ease-in-out infinite;
        }

        /*ettol mozognak kulon a 404*/
        .sky h2 span:nth-child(even) {
            animation-delay: -1s;
        }

        @keyframes animate {

            0%,
            100% {
                transform: translateY(-50px);
            }

            50% {
                transform: translateY(50px);
            }
        }


        /*.sky ha csak az eg latszodjon */
        .field {
            padding: 100px;
            height: 40vh;
            background: #6e2308;
            /* ne legyen fold background-position: #6e2308;*/
            box-shadow: inset 0 20px 10px #51680c;
            /* ne legyen fuuuu box-shadow: 0 20px 10px #51680c;*/
            text-align: center;
        }

        .field h2 {
            color: #fff;
            font-size: 2em;
            margin-bottom: 20px;
        }

        /*go back gomb*/
        .field a {
            background: #fff;
            color: #000;
            width: 160px;
            height: 50px;
            line-height: 50px;
            border-radius: 50px;
            display: inline-block;
            text-decoration: none;
            font-size: 20px;
        }

        .plane {
            position: absolute;
            bottom: 25%;
            left: 10%;
            max-width: 300px;           
            /*mozgatas animation: animatePlane 0.5s ease-in-out infinite;*/
        }

        /*@keyframes animatePlane {

            0%,
            100% {
                transform: translateY(-5px);
            }

            50% {
                transform: translateY(5px);
            }
        }*/

        .grass {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 20px;
            background: url(./images/grass.png);
            background-position: bottom;
            animation: animateGrass 0.2s linear infinite;
        }

        @keyframes animateGrass {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: -94px 0;
            }
        }
    </style>
";
