<!DOCTYPE html>
<html>
<head>
    <title>Class Routine</title>
    <link rel="stylesheet" type="text/css" href="tic.css">
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.1/getting-started/download/">
    <style type="text/css">

        h1 {
            text-align: center;
        }

        body{
            background-color: ivory;
        }


        table {
            margin: auto;
        }

        td {
            width: 100px;
            height: 100px;

        }

        td:hover {
            /*border: 1px solid grey;*/
            background-color: snow;
            cursor: grab;
        }



        .vertical {
            /*border-left: 1px solid black;
            border-right: 1px solid black;*/
            text-align: center;
            background-color: mediumorchid;
        ;
        }

        .horizontal {
            /*border-top: 1px solid black;
            border-bottom: 1px solid black;*/
            background-color: mediumorchid;
        ;
        }

        .ver {
            /*border-left: 1px solid black;
            border-right: 1px solid black;*/
            text-align: center;
            background-color: #C71585;
        }

        .hor {
            /*border-top: 1px solid black;
            border-bottom: 1px solid black;*/
            background-color: #C71585;
        }

        td
        {
            width: 180px;
            height: 50px;
        }

        h1
        {
            color: red;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Class Routine</h1>

    <table >
        <tr>
            <td class="hor ver"></td>
            <td class="hor ver"><strong>9.50 - 11.25</strong></td>
            <td class="hor ver"><strong>11.30 - 1.05</strong></td>
            <td class="hor ver"><strong>1.30 - 3.05</strong></td>
            <td class="hor ver"><strong>1.30 - 3.05</strong></td>
        </tr>

        <tr>
            <td class="hor ver"><strong>Sunday</strong></td>
            <td class="vertical horizontal " data-tooltip="Click to copy" data-clipboard-text="cursor: default;">Microprocessor</td>
            <td class="horizontal vertical">Algorithm</td>
            <td class="horizontal vertical">Microprocessor Lab</td>
            <td class="horizontal vertical">Microprocessor Lab</td>
        </tr>

        <tr>
            <td class="hor ver"><strong>Monday</strong></td>
            <td class="vertical horizontal">Numerical Methods</td>
            <td class="horizontal vertical">Database</td>
            <td class="horizontal vertical">Algorithm Lab</td>
            <td class="horizontal vertical">Algorithm Lab</td>
        </tr>

        <tr>
            <td class="hor ver"><strong>Tuesday</strong></td>
            <td class="vertical horizontal">Microproessor</td>
            <td class="horizontal vertical">Database</td>
            <td class="horizontal vertical">Numerical Methods Lab</td>
            <td class="horizontal vertical">Numerical Methods Lab</td>
        </tr>

        <tr>
            <td class="hor ver"><strong>Wednesday</strong></td>
            <td class="vertical horizontal">Microprocessor Lab</td>
            <td class="horizontal vertical">Numerical Methods Lab</td>
            <td class="horizontal vertical">Database Lab</td>
            <td class="horizontal vertical">Database Lab</td>
        </tr>

        <tr>
            <td class="hor ver"><strong>Thursday</strong></td>
            <td class="vertical horizontal">Algorithm</td>
            <td class="horizontal vertical">Algorithm Lab</td>
            <td class="horizontal vertical">Numerical Methods</td>
            <td class="horizontal vertical">Numerical Methods</td>
        </tr>
        <tr>
            <td class="hor ver"><strong>Thursday</strong></td>
            <td class="vertical horizontal">Algorithm</td>
            <td class="horizontal vertical">Algorithm Lab</td>
            <td class="horizontal vertical">Numerical Methods</td>
            <td class="horizontal vertical">Numerical Methods
                <br>room:401</td>
        </tr>

    </table>



</div>

</body>
</html>