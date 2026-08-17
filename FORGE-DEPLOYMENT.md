# Laravel Forge deployment checklist

## Site settings

- PHP version: 8.4
- Web directory: `/public`
- Enable SSL after the domain points to Forge.
- Keep Forge's generated zero-downtime macros if zero-downtime deployment is enabled.

## Required environment values

Configure these in Forge under the site's Environment settings. Never commit the production `.env` file.

```dotenv
APP_NAME="Charlotte Beauty Braids"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=charlotte_beauty_braids
DB_USERNAME=your_forge_database_user
DB_PASSWORD=your_database_password

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database

MAIL_MAILER=smtp
MAIL_HOST=your-mail-provider-host
MAIL_PORT=587
MAIL_USERNAME=your-mail-provider-username
MAIL_PASSWORD=your-mail-provider-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=appointments@your-domain.com
MAIL_FROM_NAME="Charlotte Beauty Braids"
SALON_NOTIFICATION_EMAIL=charlottebeautybraids@gmail.com
```

Use Forge's **Generate Key** action for `APP_KEY`. Obtain SMTP settings from an email provider; Forge does not provide an outbound email mailbox automatically.

## Deployment script requirements

Keep the script Forge generated for the selected deployment strategy. Ensure these commands run after Composer installs the production dependencies and before a zero-downtime release is activated:

```bash
$FORGE_PHP artisan migrate --force
$FORGE_PHP artisan optimize
```

The database migration creates the `booking_requests` table plus Laravel's session, cache, and queue tables.

## After the first deployment

1. Open `/up` and confirm it returns a successful response.
2. Submit one test appointment from the live site.
3. Confirm it is present in the `booking_requests` database table.
4. Confirm the configured salon address receives the notification email.
5. Check `storage/logs/laravel.log` if the appointment saves but the email does not arrive.

## SQLite alternative

MySQL is recommended on Forge. If SQLite is used instead, add `database/database.sqlite` as a Forge shared path during zero-downtime deployments so appointments persist between releases.
