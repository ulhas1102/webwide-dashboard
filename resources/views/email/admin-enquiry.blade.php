<html>
    <head>
        <title>Contact Us Form </title>
</head>
<body style="display:block;margin:0 auto;width:75%;">
                        <div style="background-color:#cccccc;padding:10px;">
                            <img src="https://demo.webwideit.solutions/webwide-dashboard/public/assets/img/webwide-logo.png" style="width:200px; margin:5px auto;">
                        </div>
                        <div style="background-color:#f5f5f5;padding:20px;">
                            <p>Hello Admin,<br>
                            Here is the new enquiry from Webwideit Solutions.</p>
                            <table style="width:100%;margin-top:20px;">
                                <tr>
                                    <td style="border:1px solid #dee2e6;padding:10px;text-align:left;background-color:#62ac2f;color:#ffffff">First Name</td>
                                    <td colspan="3" style="border:1px solid #dee2e6;padding:10px">{{$contact->first_name}}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #dee2e6;padding:10px;text-align:left;background-color:#62ac2f;color:#ffffff">Last Name</td>
                                    <td colspan="3" style="border:1px solid #dee2e6;padding:10px">{{$contact->last_name}}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #dee2e6;padding:10px;text-align:left;background-color:#62ac2f;color:#ffffff">E-mail</td>
                                    <td colspan="3" style="border:1px solid #dee2e6;padding:10px">{{$contact->email}}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #dee2e6;padding:10px;text-align:left;background-color:#62ac2f;color:#ffffff">Phone Number</td>
                                    <td colspan="3" style="border:1px solid #dee2e6;padding:10px">{{$contact->mobile}}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #dee2e6;padding:10px;text-align:left;background-color:#62ac2f;color:#ffffff">Message</td>
                                    <td colspan="3" style="border:1px solid #dee2e6;padding:10px">{{$contact->message}}</td>
                                </tr>
                            </table>
                        </div>
                    </body>
        </html>