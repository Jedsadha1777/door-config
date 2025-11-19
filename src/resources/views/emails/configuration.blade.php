<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Door Configuration</title>
</head>
<body style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h1 style="color: #333;">{{ $product->name }}</h1>
    <p>Session ID: <strong>{{ $session->session_id }}</strong></p>
    
    <h2 style="color: #666; margin-top: 30px;">การตั้งค่าของคุณ:</h2>
    
    @foreach($config as $stepKey => $optionCode)
    <div style="margin-bottom: 15px; padding: 10px; background: #f5f5f5; border-left: 4px solid #333;">
        <strong>{{ ucfirst(str_replace('_', ' ', $stepKey)) }}:</strong> {{ $optionCode }}
    </div>
    @endforeach
    
    <p style="margin-top: 30px; color: #666;">
        ขอบคุณที่ใช้บริการของเรา
    </p>
</body>
</html>