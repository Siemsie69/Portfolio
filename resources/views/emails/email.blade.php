<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Email</title>
</head>
<body style="background-color: #f8fafc; color: #1f2937; font-family: sans-serif;">

<div style="max-width: 800px; margin: 0 auto; background-color: #ffffff; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-top: 24px;">
    <h3 style="font-size: 24px; font-weight: bold; text-align: left; color: #2563eb; margin-bottom: 16px;">New Contact Message from your Portfolio Website</h3>

    <div style="margin-bottom: 16px;">
        <p style="font-size: 18px; margin-bottom: 8px;">
            <strong style="color: #2563eb;">Subject:</strong> {{ $data['subject'] }}
        </p>
        <p style="font-size: 18px; margin-bottom: 8px;">
            <strong style="color: #2563eb;">Name:</strong> {{ $data['name'] }}
        </p>
        <p style="font-size: 18px; margin-bottom: 8px;">
            <strong style="color: #2563eb;">Email:</strong> {{ $data['email'] }}
        </p>
        <div style="font-size: 18px; margin-bottom: 8px;">
            <strong style="color: #2563eb;">Message:</strong>
            <!-- Use <pre> tag to preserve formatting like line breaks and spaces -->
            <p style="background-color: #f3f4f6; padding: 16px; border-radius: 6px;">
            <pre style="white-space: pre-wrap; word-wrap: break-word;">{{ $data['message'] }}</pre>
            </p>
        </div>
    </div>
</div>

</body>
</html>
