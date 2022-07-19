# Kirby CMS & Tailwind CSS setup

This template based on [Patrick Evans](https://github.com/evanspj) github project [kirby-vite-tailwindcss-starter](https://github.com/evanspj/kirby-vite-tailwindcss-starter.git).

It uses the [Kirby plainkit](https://github.com/getkirby/plainkit) version of _Kirby CMS_ while leveraging [Vite](https://vitejs.dev/) and [Tailwind CSS](https://tailwindcss.com/).

## Prerequisites

- Nodejs with either npm or yarn (for frontend)
- PHP 7.4+
- Kirby CMS is free to try on your local machine, however, for production, you will need to [purchase a license](https://getkirby.com/buy)

## Setup

1. Load repo to your local machine.

- Download this repo or
- Clone the repo

2. Once installed on your local machine, while in the root directory run the command `yarn` or `npm install` to install _Vite_, _Tailwind CSS_ and other dependencies.

## Usage

### For development run:

1. open two terminal windows
2. on the first terminal run `$ php -S localhost:8080 kirby/router.php` to start local _Kirby_ development-server
3. on the second run `$ npm run dev` to start tailwind development-server
4. run `$ npm run build` to build the project into `/public/dist/`.

If you are using the build in _Kirby_ development-server, _Kirby_ is looking for changes under `http://localhost:3000/@vite/client` and `http://localhost:3000/index.js`.

When _Kirby_ runs in a productive environment it implements the build files from `/public/dist/`.

Code snippet in `header.php` to toggle development and production mode:

```php
<?php if (c::get('debug')) { ?>
  <!-- Development Scripts -->
  <script type='module' src='http://localhost:3000/@vite/client'></script>
  <script type='module' src='http://localhost:3000/index.js'></script>
<?php } else { ?>
  <!-- Production Scripts -->
  <?= css('public/dist/index.css') ?>
  <?= js('public/dist/index.js') ?>
<?php } ?>
```

## License

[MIT](./LICENSE) License © 2021 [Patrick Evans](https://github.com/evanspj)
