# Email Configuration Guide for DateMaker

## Your email is now configured to actually send verification codes!

Choose one of these options:

---

## Option 1: Gmail (Easiest for testing)

1. Enable 2-Step Verification in your Google Account
2. Generate an App Password: https://myaccount.google.com/apppasswords
3. Update your `.env` file:

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-16-char-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="DateMaker"
```

---

## Option 2: Outlook/Hotmail

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.office365.com
MAIL_PORT=587
MAIL_USERNAME=your-email@outlook.com
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@outlook.com
MAIL_FROM_NAME="DateMaker"
```

---

## Option 3: Mailtrap (Testing only - doesn't send real emails)

Mailtrap catches all emails for testing purposes.

1. Sign up at https://mailtrap.io (free)
2. Get your SMTP credentials
3. Update `.env`:

```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-mailtrap-username
MAIL_PASSWORD=your-mailtrap-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=hello@datemaker.com
MAIL_FROM_NAME="DateMaker"
```

---

## Option 4: SendGrid (Production ready)

1. Sign up at https://sendgrid.com
2. Create an API key
3. Update `.env`:

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your-sendgrid-api-key
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@datemaker.com
MAIL_FROM_NAME="DateMaker"
```

---

## Testing

After updating `.env`, test the email:

```bash
php artisan tinker
```

Then in tinker:
```php
Mail::raw('Test email', function($message) {
    $message->to('your-email@example.com')->subject('Test');
});
```

---

## What happens now:

1. User clicks "Verify Email" on registration
2. **Real email is sent** to their email address
3. Email contains beautiful HTML with the 6-digit code
4. Code expires in 10 minutes
5. User enters code to verify

The email template is styled with DateMaker's pink theme and includes:
- Large, clear verification code
- Expiry warning
- DateMaker branding
- Links to FAQ and support
