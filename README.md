# James Gabriele — Portfolio

Personal portfolio site for [James Gabriele](https://github.com/4regab) — AWS Community Builder, Kiro Ambassador, student leader, and open-source builder based in Metro Manila, Philippines.

Live stack: PHP on [Vercel](https://vercel.com) via [`vercel-php`](https://github.com/vercel-community/php).

## Features

- Home with intro and featured projects
- Project write-ups with screenshots
- Writing / articles index
- About page with bio and certifications
- Blue / light / dark theme toggle

## Local development

Requires PHP 8.4+ on your PATH.

```bash
php -S localhost:1234 index.php
```

Open [http://localhost:1234](http://localhost:1234).

`index.php` is a router for the built-in server. On Vercel, traffic goes to `api/index.php`.

## Project structure

```text
api/
  index.php          # App entry + routing
  data.php           # Profile, projects, articles, certifications
  includes/          # Layout, sidebar, page templates
assets/
  css/portfolio.css
  js/theme.js
  images/            # Project covers / screenshots
vercel.json          # vercel-php runtime + static file handling
index.php            # Local PHP server router
```

## Deploy on Vercel

This repo is configured for the [vercel-community/php](https://github.com/vercel-community/php) runtime (`vercel-php@0.9.0`).

```bash
npm i -g vercel
vercel login
vercel
```

Or connect the GitHub repo in the Vercel dashboard — pushes to `main` will deploy automatically once linked.

## Links

- GitHub: [github.com/4regab](https://github.com/4regab)
- LinkedIn: [linkedin.com/in/4regab](https://www.linkedin.com/in/4regab)
- DEV: [dev.to/4regab](https://dev.to/4regab)
- AWS Builder: [builder.aws.com/community/@jamesgabriele](https://builder.aws.com/community/@jamesgabriele)
- Email: [4regab@gmail.com](mailto:4regab@gmail.com)

## License

Personal portfolio. Project code samples and linked repos keep their own licenses.
