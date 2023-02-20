<?php
{{ URL::asset('css/app.css'); }}
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Competiciones</title>

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    </head>
    <style>
        
h1{
    font-size: 30px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 300;
    text-align: center;
    margin-bottom: 15px;
  }
  table{
    width:100%;
    table-layout: fixed;
  }
  .tbl-header{
    background-color: rgba(255,255,255,0.3);
   }
  .tbl-content{
    height:300px;
    overflow-x:auto;
    margin-top: 0px;
    border: 1px solid rgba(255,255,255,0.3);
  }
  th{
    padding: 20px 15px;
    text-align: left;
    font-weight: 500;
    font-size: 12px;
    color: #fff;
    text-transform: uppercase;
  }
  td{
    padding: 15px;
    text-align: left;
    vertical-align:middle;
    font-weight: 300;
    font-size: 12px;
    color: #fff;
    border-bottom: solid 1px rgba(255,255,255,0.1);
  }
  
  
  /* demo styles */
  
  @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
  body{
    background: -webkit-linear-gradient(left, blue, lightblue, white);
    background: linear-gradient(to right, blue, darkblue);
    font-family: 'Roboto', sans-serif;
  }
  section{
    margin: 50px;
  }
  
  
  /* follow me template */
  .made-with-love {
    margin-top: 40px;
    padding: 10px;
    clear: left;
    text-align: center;
    font-size: 16px;
    font-family: arial;
    color: black;
  }
  .made-with-love i {
    font-style: normal;
    color: black;
    font-size: 18px;
    position: relative;
    top: 2px;
  }
  
  
  /* for custom scrollbar for webkit browser*/
  
  ::-webkit-scrollbar {
      width: 6px;
  } 
  ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
  } 
  ::-webkit-scrollbar-thumb {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
  }
    </style>

    <body class="antialiased">
        <section>
        <!--for demo wrap-->
        <h1>Competiciones</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                <th>Campeonato</th>
                <th>Acciones</th>
                </tr>
            </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                <td>CHAMPION</td>
                <td>-   -   -</td>
                </tr>
                <tr>
                <td>UEFA</td>
                <td>-   -   -</td>
                </tr>
            </tbody>
            </table>
        </div>
        </section>


<!-- follow me template -->
<div class="made-with-love">
  <b>Made by
    <i>@jjgn</i>
  </b>
</div>