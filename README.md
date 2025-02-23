# Fytel

Fytel is a Laravel-based web application that provides authentication and user management features out of the box using Laravel Breeze.

## Installation
To set up the project locally, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/fytel.git
   cd fytel
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies:**
   ```bash
   npm install
   ```

4. **Set up environment variables:**
   ```bash
   cp .env.example .env
   ```
   Open the `.env` file and configure it according to your environment (e.g., database credentials, mail settings, etc.).

5. **Generate an application key:**
   ```bash
   php artisan key:generate
   ```

6. **Run database migrations and seed the database:**
   ```bash
   php artisan migrate --seed
   ```

7. **Start the development server and build assets:**
   ```bash
   php artisan serve & npm run dev
   ```
   
   *(Ensure both the Laravel backend and Vite are running simultaneously.)*

## Configuration

### Email Setup
If you want to test email-based features (such as account verification or password reset), you need to configure an SMTP server.

- Sign up for a service like [Mailtrap](https://mailtrap.io) (for development/testing) or use a real SMTP provider (e.g., Gmail, Mailgun, SendGrid).
- Update your `.env` file with the SMTP credentials:
  ```ini
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=your_mailtrap_username
  MAIL_PASSWORD=your_mailtrap_password
  MAIL_ENCRYPTION=tls
  MAIL_FROM_ADDRESS=no-reply@example.com
  MAIL_FROM_NAME="Fytel"
  ```

### Session Configuration
By default, Laravel uses the `file` session driver:
```ini
SESSION_DRIVER=file
```
No additional setup is required unless you wish to use database or Redis for sessions.

## Database
Fytel uses MySQL as the default database.
- **Connection:** MySQL
- **Default Database Name:** `fytel_db`

Ensure your `.env` file contains the correct database credentials:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fytel_db
DB_USERNAME=root
DB_PASSWORD=
```

## Installed Packages
Fytel includes several dependencies for authentication and UI development:

- [Laravel Breeze](https://github.com/laravel/breeze) - Lightweight authentication scaffolding
- [Alpine.js](https://alpinejs.dev/) - Lightweight JavaScript framework
- [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework

## Authentication Setup with Laravel Breeze

Fytel leverages **Laravel Breeze** for authentication, providing the following features:

- **User Registration**
- **Login & Logout**
- **Email Verification**
- **Password Confirmation**
- **Password Reset & Update**
- **Profile Management**
- **Account Deletion**

### UI Features
Breeze integrates Alpine.js and Tailwind CSS, offering a minimal UI starter kit. Below are some key UI components located in `resources/views/components`:

| Component Name           | Description                                                     |
|--------------------------|-----------------------------------------------------------------|
| `application-logo`       | Displays the application's logo.                                |
| `auth-session-status`    | Displays session status messages (e.g., success or errors).     |
| `danger-button`          | A button styled for critical actions.                           |
| `primary-button`         | A primary button for main actions.                              |
| `secondary-button`       | A secondary button for additional actions.                      |
| `dropdown`               | A dropdown menu container component.                            |
| `dropdown-link`          | Links styled for dropdown menus.                                |
| `nav-link`               | Navigation links styled for the navbar.                         |
| `responsive-nav-link`    | Responsive navigation links.                                    |
| `text-input`             | Styled input fields.                                            |
| `input-label`            | Labels for input fields.                                        |
| `input-error`            | Displays validation error messages.                             |
| `modal`                  | A modal dialog box component.                                   |

### Layouts
The project includes predefined layout components for different pages:
- `app.blade.php` - Layout for authenticated pages
- `guest.blade.php` - Layout for login/register pages
- `navigation.blade.php` - Manages navigation elements

### Dark Mode Support
Dark mode is supported via Tailwind CSS and is automatically applied to UI components.

## Running Tests

This project includes pre-built tests using **Pest PHP**.

### Available Tests
- Authentication
- Email Verification
- Password Confirmation
- Password Reset
- Password Update
- Registration
- Profile Management

### Running Tests
To execute the test suite, run:
```bash
php artisan test
```

## Contributing
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit (`git commit -m "Your message"`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a pull request.

## License
This project is licensed under the [MIT License](LICENSE).

---

### Additional Notes
- Make sure you have PHP `^8.0`, MySQL, and Node.js installed.
- If you encounter issues, check `.env` configurations and clear caches:
  ```bash
  php artisan config:clear
  php artisan cache:clear
  ```
