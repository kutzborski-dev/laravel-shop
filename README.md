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
9. Migrate all tables and seed the database by running `./artisan migrate --seed` or `php artisan migrate --seed` and allow it create the database, if it prompts
   * If for some reason allowing laravel to create the database doesn't work, check the .env file for the database name and create it manually
10. Boot the Vite development server with `npm run dev`
11. Serve Laravel using `./artisan serve` or `php artisan serve`

##
### Dev notes/choices
**Branching strategy:** The repository is managed via a half-trunk, half-release based strategy, by having all development work done in the `dev` branch, which, once all testing (automated testing, manual testing, etc) has been completed and it's ready for release, can then be merged straight into the `master` branch, or a release branch can be created first where it's tested again before the release branch is merged into the `master` branch. This brings the makes it easy to switch to another management strategy in the future, e.g. a feature branch driven strategy, should the need ever arise. **NOTE:** In the real world every push or merge request to the master branch, perhaps even a release branch, should trigger an action flow that automatically tests the branch.

**Git issues:** Git issues are always referenced in fitting commit messages, to make everything tracable. Different git issues relating to one area or section of the project/app (e.g. a sprint) can be combined into a bigger issue, by creating a parent issue that lists these child issues. While perhaps not so important in a solo or duo dev team, in a team setting this allows for other team members, be they project managers or developers, to easily view the progress, and to pick/manage their own work from a bunch. Additional important details, such as perhaps user stories, can also be attached to this parent git issue.

**Design/Styling (UI/UX):** Tailwind[^2] is being used due to it's ease of setup[^3] and the sheer amount of designs out there, that are free to pick from, basically out-of-the-box. It's also highly customisable and makes implementing features like dark mode more straightforward.

**Migrations and relationship handling:** Foreign key relationships are handled in the migrations (e.g. `2024_02_23_004940_create_products_table.php` on line 16), cascading on update and setting to null on delete, in order to avoid possible unexpected errors creeping up. This, however, also means that any such product would no longer be displayed as part of any category until fixed. **In detail:** There are various ways to deal with this situation, such as restricting the deletion to certain conditions, or defaulting to another category, which may be better choices in a real application, where a category perhaps contains a ton of products. Different however, When a sub category that has further child sub categories is deleted, the child sub categories should move up in the hierarchy (via application logic) and become direct descendents of the parent of the sub category that was deleted.

**Factories and Seeding:** The seeders try to keep things somewhat realistic without putting too much emphasis on this aspect, as it would create too much overhead for something as simple as dummy data. The database is populated with a total of 305 categories (5 parents, 50 children, and 250 grand children), and each of those categories is populated with Products. A total of 1850 products are seeded into the database (20 per parent, 10 per child and 5 per grand child).

<br/>

#### References
[^1]: [Laravel documentation](https://laravel.com/docs/10.x/readme)
[^2]: [Tailwind documentation](https://tailwindcss.com)
[^3]: [Tailwind setup guide for Laravel](https://tailwindcss.com/docs/guides/laravel)