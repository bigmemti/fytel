# Fytel

## Installation
1. Clone the repository.
2. Run `composer install`.
3. Run `npm install`.
4. Run `cp .env.example .env` and set up the `.env` file.
5. Run `php artisan key:generate`.
6. Run `php artisan migrate --seed`.
7. Run `php artisan serve` and `npm run dev` at the same time.

## Configurations
### Email
If you want to test and run  email based features you to sign up to a mail box server like [mailtrap](https://mailtrap.io) and copy and paste that configurations in `.env` file.
### Session
The `SESSION_DRIVER=file` is used by default. No additional setup is required for sessions.

## Database
- Connection: MySQL
- Default DB name: `fytel_db`

## Packages
- [Breeze](https://github.com/laravel/breeze) (dev)



## Auth Setup with laravel breeze
### This project uses **Laravel Breeze** for authentication. the following features are provided by default:
- User Registration
- Login\Logout
- Email Verification
- Password Confirm
- Password Reset
- Password Update
- Profile Management
- Account Deletion

### **UI Features**
Breeze adds **Alpine.js**, configures **Tailwind**, and provides a simple **UI starter kit**. The following components are included by default in `resources/views/components`:


| Component Name           | Description                                                     |
|--------------------------|-----------------------------------------------------------------|
| `application-logo`       | Displays the application's logo.                                |
| `auth-session-status`    | Displays session status messages (e.g., success or errors).     |
| `danger-button`          | A button styled for actions with potential negative effects.    |
| `primary-button`         | A primary button for main actions.                              |
| `secondary-button`       | A secondary button for less emphasized actions.                 |
| `dropdown`               | A dropdown menu container component.                            |
| `dropdown-link`          | Links styled for use inside dropdown menus.                     |
| `nav-link`               | Navigation links styled for the navigation bar.                 |
| `responsive-nav-link`    | Navigation links optimized for responsive layouts.              |
| `text-input`             | Styled input fields for text-based inputs.                      |
| `input-label`            | Labels for input fields.                                        |
| `input-error`            | Displays validation error messages for inputs.                  |
| `modal`                  | A modal dialog box component for displaying overlays.           |

### Layouts
- app (for authenticated pages)
- guest (for login/register pages)

### `navigation` also exists in same directory with `app` for manage this layout navigation.

### Dark Mode Support
This project supports Dark Mode via Tailwind CSS. It is automatically integrated into the UI components.

---


## Tests
Breeze includes pre-built tests using **Pest**:
- Profile
- Authentication
- Email Verification
- Password Confirm
- Password Reset
- Password Update
- Registration

### Running Tests
To execute the included tests, use the following command:
```bash
php artisan test