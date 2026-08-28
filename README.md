# Portfolio — Laravel One-Pager

A professional portfolio/resume website built with Laravel 13 and Tailwind CSS 4.

## Quick Start

```bash
# Install dependencies (already done if you cloned this)
composer install
npm install

# Development — run both in separate terminals
php artisan serve
npm run dev

# Production build
npm run build
```

Visit [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Customize Your Content

All portfolio content lives in a single config file:

**`config/portfolio.php`**

Edit your name, title, skills, experience, projects, social links, and more — no need to touch the Blade templates.

## Sections

- **Hero** — Name, title, tagline, social links
- **About** — Bio and career highlights
- **Skills** — Grouped tech stack
- **Experience** — Work history timeline
- **Projects** — Featured projects with tags
- **Contact** — Email info + contact form

## Contact Form

The contact form sends email via Laravel's Mail facade. For local development, emails are logged to `storage/logs/laravel.log` (default `MAIL_MAILER=log` in `.env`).

To send real emails in production, configure your mail driver in `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_FROM_ADDRESS=hello@yourdomain.com
```

## Project Structure

```
config/portfolio.php          ← Your content
resources/views/
  layouts/portfolio.blade.php ← Main layout
  portfolio.blade.php         ← Page entry
  sections/                   ← Section partials
routes/web.php                ← Home + contact routes
app/Http/Controllers/ContactController.php
```

## Tech Stack

- Laravel 13
- Tailwind CSS 4 (via Vite)
- Instrument Sans font (via Bunny Fonts)
- No database required for the portfolio itself
