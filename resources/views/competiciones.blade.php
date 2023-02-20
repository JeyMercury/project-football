<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->
        <link rel="stylesheet" href="app.css">
    </head>

    <body class="antialiased">
        <section>
        <!--for demo wrap-->
        <h1>Fixed Table header</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                <th>Code</th>
                <th>Company</th>
                <th>Price</th>
                <th>Change</th>
                <th>Change %</th>
                </tr>
            </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
                </tr>
                <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-1.36%</td>
                </tr>
                <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+1.36%</td>
                </tr>
                <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>+2.36%</td>
                </tr>
                <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
                </tr>
                <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-1.36%</td>
                </tr>
                <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+1.36%</td>
                </tr>
                <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>+2.36%</td>
                </tr>
                <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
                </tr>
                <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-1.36%</td>
                </tr>
                <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+1.36%</td>
                </tr>
                <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>+2.36%</td>
                </tr>
                <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
                </tr>
                <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-1.36%</td>
                </tr>
                <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+1.36%</td>
                </tr>
                <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>+2.36%</td>
                </tr>
                <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
                </tr>
                <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-1.36%</td>
                </tr>
                <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+1.36%</td>
                </tr>
                <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>+2.36%</td>
                </tr>
                <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
                </tr>
                <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-1.36%</td>
                </tr>
                <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+1.36%</td>
                </tr>
                <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>+2.36%</td>
                </tr>
                <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
                </tr>
                <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-1.36%</td>
                </tr>
                <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+1.36%</td>
                </tr>
                <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>+2.36%</td>
                </tr>
                <tr>
                <td>AAC</td>
                <td>AUSTRALIAN COMPANY </td>
                <td>$1.38</td>
                <td>+2.01</td>
                <td>-0.36%</td>
                </tr>
                <tr>
                <td>AAD</td>
                <td>AUSENCO</td>
                <td>$2.38</td>
                <td>-0.01</td>
                <td>-1.36%</td>
                </tr>
                <tr>
                <td>AAX</td>
                <td>ADELAIDE</td>
                <td>$3.22</td>
                <td>+0.01</td>
                <td>+1.36%</td>
                </tr>
                <tr>
                <td>XXD</td>
                <td>ADITYA BIRLA</td>
                <td>$1.02</td>
                <td>-1.01</td>
                <td>+2.36%</td>
                </tr>
            </tbody>
            </table>
        </div>
        </section>


<!-- follow me template -->
<div class="made-with-love">
  Made with
  <i>♥</i> by
  <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
</div>