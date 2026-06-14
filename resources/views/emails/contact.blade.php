<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message — Portfolio</title>
    <style>
        body { font-family: 'Inter', Arial, sans-serif; background: #f4f4f8; margin: 0; padding: 0; }
        .wrapper { max-width: 580px; margin: 40px auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.08); }
        .header { background: #0a0a0f; padding: 2rem; text-align: center; }
        .header h1 { color: #a78bfa; font-size: 1.4rem; margin: 0; letter-spacing: 0.02em; }
        .header p  { color: #8888aa; font-size: 0.85rem; margin: 6px 0 0; }
        .body { padding: 2rem; }
        .field { margin-bottom: 1.2rem; }
        .field-label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.08em; color: #8888aa; font-weight: 600; margin-bottom: 4px; }
        .field-value { font-size: 0.95rem; color: #1a1a2e; background: #f4f4f8; padding: 0.75rem 1rem; border-radius: 8px; border-left: 3px solid #6c63ff; }
        .message-box { background: #f4f4f8; border-radius: 10px; padding: 1.2rem; border-left: 3px solid #6c63ff; white-space: pre-wrap; font-size: 0.92rem; color: #2d2d4e; line-height: 1.7; }
        .footer { background: #f4f4f8; padding: 1.2rem 2rem; text-align: center; font-size: 0.78rem; color: #8888aa; border-top: 1px solid #e4e4f0; }
        .reply-btn { display: inline-block; margin-top: 1.5rem; background: #6c63ff; color: #fff; padding: 0.7rem 1.5rem; border-radius: 8px; font-weight: 600; font-size: 0.88rem; text-decoration: none; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>📬 Nouveau message — Portfolio</h1>
            <p>Quelqu'un vous a contacté via votre portfolio</p>
        </div>

        <div class="body">
            <div class="field">
                <div class="field-label">Nom</div>
                <div class="field-value">{{ $contactData['name'] }}</div>
            </div>
            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value">{{ $contactData['email'] }}</div>
            </div>
            <div class="field">
                <div class="field-label">Sujet</div>
                <div class="field-value">{{ $contactData['subject'] }}</div>
            </div>
            <div class="field">
                <div class="field-label">Message</div>
                <div class="message-box">{{ $contactData['message'] }}</div>
            </div>

            <div style="text-align:center">
                <a href="mailto:{{ $contactData['email'] }}?subject=Re: {{ $contactData['subject'] }}"
                   class="reply-btn">
                    Répondre à {{ $contactData['name'] }}
                </a>
            </div>
        </div>

        <div class="footer">
            Ce message a été envoyé depuis votre portfolio professionnel.<br>
            Koe Bi Suy Basile &mdash; Développeur Full Stack & IA &mdash; Abidjan, CI
        </div>
    </div>
</body>
</html>
