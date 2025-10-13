<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #ff6b9d 0%, #fec163 100%);
            padding: 40px 20px;
            text-align: center;
            color: white;
        }
        .email-header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: bold;
        }
        .email-header p {
            margin: 10px 0 0 0;
            font-size: 16px;
            opacity: 0.9;
        }
        .email-body {
            padding: 40px 30px;
            text-align: center;
        }
        .email-body h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .email-body p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .verification-code {
            background: linear-gradient(135deg, #ff6b9d 0%, #fec163 100%);
            color: white;
            font-size: 48px;
            font-weight: bold;
            letter-spacing: 10px;
            padding: 20px 40px;
            border-radius: 10px;
            display: inline-block;
            margin: 20px 0;
            box-shadow: 0 4px 15px rgba(255, 107, 157, 0.3);
        }
        .expiry-notice {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 30px 0;
            text-align: left;
            border-radius: 5px;
        }
        .expiry-notice strong {
            color: #856404;
        }
        .email-footer {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .email-footer p {
            margin: 5px 0;
        }
        .email-footer a {
            color: #ff6b9d;
            text-decoration: none;
        }
        .hearts {
            font-size: 24px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>💕 DateMaker</h1>
            <p>Find Your Perfect Match</p>
        </div>

        <!-- Body -->
        <div class="email-body">
            <h2>Verify Your Email Address</h2>
            <p>
                Welcome to DateMaker! We're excited to help you find your perfect match.
                To complete your registration, please use the verification code below:
            </p>

            <div class="verification-code">
                {{ $code }}
            </div>

            <div class="expiry-notice">
                <strong>⏱️ Important:</strong> This verification code will expire in <strong>10 minutes</strong>.
                If you didn't request this code, you can safely ignore this email.
            </div>

            <p>
                Enter this code on the registration page to verify your email address and
                start your journey to finding love!
            </p>

            <div class="hearts">
                💕 💖 💗 💓 💞
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p><strong>DateMaker - Where Hearts Meet</strong></p>
            <p>This is an automated message, please do not reply to this email.</p>
            <p>
                Need help? Visit our <a href="http://laravelversion.test/faq">FAQ</a> or
                <a href="http://laravelversion.test/about">Contact Us</a>
            </p>
            <p style="margin-top: 20px; color: #999;">
                &copy; {{ date('Y') }} DateMaker. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
