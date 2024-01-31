<?php
$loginStyle = "
<style>
    .login {
        width: 300;
        border: 5px solid #75b1d6;
        padding: 10px 50px 30px;
        margin: 30px auto;
        margin-top: 60px;
        border-radius: 10px;
        box-shadow: 0 25.6px 57.6px 0 rgb(0 0 0 / 22%), 0 4.8px 14.4px 0 rgb(0 0 0 / 18%);
        background-color: white;
    }
    #title{
        font-size 32px;
        text-align: center;
        padding: 15px;
    }
    #submit{        
        display: inline-block;
        outline: 0;
        border: 0;
        cursor: pointer;
        will-change: box-shadow,transform;
        background: radial-gradient( 100% 100% at 100% 0%, #89E5FF 0%, #5468FF 100% );
        box-shadow: 0px 2px 4px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px rgb(58 65 111 / 50%);
        padding: 0 32px;
        border-radius: 6px;
        color: #fff;
        height: 48px;
        font-size: 18px;
        text-shadow: 0 1px 0 rgb(0 0 0 / 40%);
        transition: box-shadow 0.15s ease,transform 0.15s ease;
    }
        #submit:hover {
            box-shadow: 0px 4px 8px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px #3c4fe0;
            transform: translateY(-2px);
        }
        #submit:active{
            box-shadow: inset 0px 3px 7px #3c4fe0;
            transform: translateY(2px);
        }        
        #alreadyAccText{
            padding: 3%;
        }
        #notData{
            color: red;
        }
        #notData:hover{
            font-size:18px;
        }
</style>
";
