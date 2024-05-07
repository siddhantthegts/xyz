<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <table style="border:4px solid #efefef;border-collapse:collapse;width:660px;margin:0 auto;background:#fff;font-family:sans-serif">
        <tbody>
            <tr>
            <td style="padding:30px 30px 20px">
                <h3 style="margin:0">Hello Team,</h3><br>
                <h4 style="margin:0">A new of SOP from {{$data['source']}} lead has been added</h4><br>
                <table style="border:4px solid #000;border-collapse:collapse;width:660px;margin:0 auto;background:#fff;font-family:sans-serif;font-size:24px">
                <tr style="border:2px solid #000">
                    <td style="border:2px solid #000; width:30%"> Name: </td>
                    <td style="border:2px solid #000; width:70%"> {{$data['name']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> Email: </td>
                    <td style="border:2px solid #000; width:70%"> {{$data['email']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> Phone No.: </td>
                    <td style="border:2px solid #000; width:70%"> {{$data['mobile']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> Country: </td>
                    <td style="border:2px solid #000; width:70%"> {{$data['country']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> University: </td>
                    <td style="border:2px solid #000; width:70%"> {{$data['university']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> Course: </td>
                    <td style="border:2px solid #000; width:70%"> {{$data['course']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> Experience: </td>
                    <td style="border:2px solid #000; width:70%"> {{$data['experience']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> Requirement: </td>
                    <td style="border:2px solid #000; width:70%"> {{$data['requirement']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> Source: </td>
                    <td style="border:2px solid #000; width:70%"> {{$data['source']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> IP: </td>
                    <td style="border:2px solid #000; width:70%"> {{$_SERVER['REMOTE_ADDR']}} </td>
                </tr>
                <tr>
                    <td style="border:2px solid #000; width:30%"> User Agent: </td>
                    <td style="border:2px solid #000; width:70%"> {{$_SERVER['HTTP_USER_AGENT']}} </td>
                </tr>

            </tbody>
        </table>
    </body>
</html>
