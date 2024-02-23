# Scaffold Digital Code Challenge

### Development Environment
- Windows 10 (10.0.19045 Build 19045)
- Laravel 10.x, Composer 2.7.1
- PHP 8.2.3, MySQL 8.0.17
- Google Chrome (122.0.6261.70)

##
### How to get started
1. Ensure your system environment supports Laravel 10.x [^1]
2. Clone the project: `git clone git@github.com:kutzborski-dev/sd-bed-test.git`
3. Run `composer require` to setup the vendor folder
4. Run `npm install` to install Tailwind[^2] and it's dependencies
5. Copy `.env.example` to `.env`
6. Create app key: `./artisan key:generate` or `php artisan key:generate`
8. Symlink the storage via `./artisan storage:link` or `php artisan storage:link`
9. Migrate all tables by running `./artisan migrate` or `php artisan migrate` and allow it create the database
   * If for some reason allowing laravel to create the database doesn't work, check the .env file for the database name and create it manually
9. Boot the Vite development server with `npm run dev`
10. Serve Laravel using `./artisan serve` or `php artisan serve`

##
### Dev notes/choices
**Branching strategy:** The repository is managed via a half-trunk, half-release based strategy, by having all development work done in the `dev` branch, which, once all testing (automated testing, manual testing, etc) has been completed and it's ready for release, can then be merged straight into the `master` branch, or a release branch can be created first where it's tested again before the release branch is merged into the `master` branch. This brings the makes it easy to switch to another management strategy in the future, e.g. a feature branch driven strategy, should the need ever arise. **NOTE:** In the real world every push or merge request to the master branch, perhaps even a release branch, should trigger an action flow that automatically tests the branch.

**Design/Styling (UI/UX):** Tailwind[^2] is being used due to it's ease of setup[^3] and the sheer amount of designs out there, that are free to pick from, basically out-of-the-box. It's also highly customisable and makes implementing features like dark mode more straightforward.

<br/>

#### References
[^1]: [Laravel documentation](https://laravel.com/docs/10.x/readme)
[^2]: [Tailwind documentation](https://tailwindcss.com)
[^3]: [Tailwind setup guide for Laravel](https://tailwindcss.com/docs/guides/laravel)