<!DOCTYPE html>
<html>

<head>
    <title>Contact Email</title>
</head>

<body>
    <h1>New Message from {{ $data['name'] }}</h1>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>

</html>
