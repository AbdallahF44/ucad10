<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نموذج اتصل بنا</title>
    <link rel="stylesheet" href="{{ asset('site/assets/css/mystyles.css')}}">
    <style>
        .contact-us-body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .contact-us-container {
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
        }

        .contact-us-card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }

        .contact-us-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-us-header h1 {
            color: #333;
            font-size: 28px;
            margin: 0;
        }

        .contact-us-header h3 {
            color: #666;
            font-size: 18px;
            margin: 0;
        }

        .contact-us-form {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .contact-us-form th,
        .contact-us-form td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: right;
        }

        .contact-us-form th {
            background-color: #f3f3f3;
        }
    </style>
    
    
    {{-- <style>

        .contact-us-body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .contact-us-container {
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
        }

        .contact-us-card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }

        .contact-us-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-us-header h1 {
            color: #333;
            font-size: 28px;
            margin: 0;
        }

        .contact-us-header h3 {
            color: #666;
            font-size: 18px;
            margin: 0;
        }

        .contact-us-form table {
            width: 100%;
            border-collapse: collapse;
        }

        .contact-us-form th,
        .contact-us-form td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: right;
        }

        .contact-us-form th {
            background-color: #f3f3f3;
        }
    </style> --}}


    {{-- <style>
    .contact-us-body {
    font-family: 'Tahoma', sans-serif;
    background-color: #f3f3f3;
    margin: 0;
    padding: 0;
    /* display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; */
}

.contact-us-container {
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    border-radius: 10px;
    /* max-width: 800px; */
}

.contact-us-card {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 10px;
}

.contact-us-header {
    text-align: center;
    margin-bottom: 20px;
}

.contact-us-header h1 {
    color: #333;
    font-size: 28px;
    margin: 0;
}

.contact-us-header h5 {
    color: #666;
    font-size: 18px;
    margin: 0;
}

.contact-us-form table {
    width: 100%;
    border-collapse: collapse;
}

.contact-us-form th,
.contact-us-form td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: right;
}

.contact-us-form th {
    background-color: #f3f3f3;
}

</style> --}}

    
</head>

<body class="contact-us-body" dir="rtl">
    <div class="contact-us-container">
        <div class="contact-us-card">
            <div class="contact-us-header">
                <h1>نموذج اتصل بنا </h1>
                {{-- <h2>البيانات :</h2> --}}
            </div>
            <div class="contact-us-content">

                <table border="1px">
                    <tbody class="contact_us_form">
                        <tr>
                            <td>الاسم:</td>
                            <td>{{ $formData['name'] }}</td>
                        </tr>
                        <tr>
                            <td>الايميل: </td>
                            <td>{{ $formData['email'] }}</td>
                        </tr>
                        <tr>
                            <td>التيلفون</td>
                            <td>{{ $formData['tel'] }}</td>
                        </tr>
                        <tr>
                            <td>نوع المستلم</td>
                            <td>{{ $formData['receiverType'] }}</td>
                        </tr>
                        <tr>
                            <td>المستلم</td>
                            <td>{{ isset($formData['deanship']) ? $formData['deanship'] : $formData['faculty'] }}</td>
                        </tr>
                        <tr>
                            <td>العنوان </td>
                            <td>{{ $formData['subject'] }}</td>
                        </tr>
                        <tr>
                            <td>الموضوع</td>
                            <td>{{ $formData['body'] }}</td>
                        </tr>
                        {{-- @foreach ($formData as $key => $value)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>
