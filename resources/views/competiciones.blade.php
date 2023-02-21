<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Competiciones</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
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
    text-align: center;
    font-weight: 750;
    font-size: 20px;
    color: #fff;
    text-transform: uppercase;
  }
  td{
    padding: 15px;
    text-align: center;
    vertical-align:middle;
    font-weight: 300;
    font-size: 16px;
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
  .made-by {
    margin-top: 40px;
    padding: 10px;
    clear: left;
    text-align: center;
    font-size: 16px;
    font-family: arial;
    color: white;
  }
  .made-by i {
    font-style: normal;
    color: white;
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
<div class="made-by">
  <b>Made by
    <i>@jjgn</i>
  </b>
</div>

<script>
    import './bootstrap';
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
  }).resize();
</script>