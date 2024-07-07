<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private function getCategoryNameFromSlug(string $slug)
    {
        $categoryName = str_ireplace('-', ' ', $slug);

        if(str_contains($categoryName, ' and ')) {
            $categoryName = str_ireplace(' and ', ' & ', $categoryName);

            // Capitalise each part of the category name string before and after the 'and' stopword
            $categoryName = Str::title($categoryName);
        } else {
            $categoryName = ucfirst($categoryName);
        }

        return $categoryName;
    }

    private function createCategories(array $categories, ?Category $parentCategory = null)
    {
        // Main categories should have 20 products each, sub categories 10 each
        $productCount = !$parentCategory ? 20 : 10;

        foreach($categories as $categorySlug => $subCategories) {
            // Last array is not multidimensional, therefore $categorySlug would be the index
            if(is_numeric($categorySlug)) $categorySlug = $subCategories;

            $categoryName = $this->getCategoryNameFromSlug($categorySlug);
            
            // Initiate relationship query on same table
            // So that this batch of categories become children of the parent category
            if($parentCategory) {
                $category = $parentCategory->subCategories();
            } else {
                $category = Category::query();
            }

            $category = $category->firstOrCreate([
                'name' => $categoryName,
                'slug' => $categorySlug,
                'is_active' => true
            ]);

            // Create products on category
            $products = Product::factory($productCount)->create([
                'category_id' => $category->id
            ]);

            if($subCategories && is_array($subCategories)) {
                $this->createCategories($subCategories, $category);
            }
        }
    }

    public function run(): void
    {
        $categories = [
            'home' => [
                'bedding' => [
                    'duvet-sets',
                    'bed-sheets',
                    'duvets',
                    'pillows',
                    'pillowcases',
                    'bedspreads',
                    'mattresses',
                ],
                'cooking' => [
                    'cookware',
                    'bakeware',
                    'tableware',
                    'drinkware',
                    'pots-and-pans',
                    'food-preparation',
                    'serveware',
                    'utensils',
                    'bins',
                ],
                'furnishings' => [
                    'curtains-and-blinds',
                    'shutters',
                    'cushions',
                    'carpets-and-flooring',
                    'rugs',
                    'blankets',
                    'storage',
                    'wallpaper',
                ],
                'accessories' => [
                    'bathroom-accessories',
                    'towels',
                    'candles-and-diffusers',
                    'wall-art-and-prints',
                    'picture-frames',
                    'mirrors',
                ],
            ],
            'furniture-and-lights' => [
                'bedroom' => [
                    'beds',
                    'mattresses',
                    'bedside-tables',
                    'drawers',
                    'dressing-tables',
                    'wardrobes',
                ],
                'sofas-and-armchairs' => [
                    'sofas',
                    'sofa-beds',
                    'snugglers',
                    'armchairs',
                    'footstools',
                    'garden-sofas',
                ],
                'living-room' => [
                    'cabinets-and-sideboards',
                    'tables',
                    'tv-stands',
                    'coffee-tables',
                    'bookcases-and-shelves',
                ],
                'office' => [
                    'office-desks',
                    'office-chairs',
                    'shelving',
                    'storage',
                    'stationary-containers',
                ],
                'dining-room' => [
                    'tables',
                    'chairs',
                    'benches',
                    'bar-stools',
                ],
                'lighting' => [
                    'ceiling-lights',
                    'table-lights',
                    'floor-lamps',
                    'wall-lighting',
                    'lamp-shades',
                    'outdoor-lights',
                    'bulbs',
                ],
            ],
            'garden' => [
                'furniture' => [
                    'furniture-sets',
                    'chairs',
                    'tables',
                    'bbq',
                    'pizza-ovens',
                    'parasols-and-canopies',
                ],
                'accessories-and-electricals' => [
                    'spring-bulbs',
                    'bulb-combinations',
                    'tulips-bulbs',
                    'daffodil-bulbs',
                    'allium-bulbs',
                    'pots',
                    'watering-cans',
                    'lighting',
                ],
                'indoor-plants' => [
                    'foliage-plants',
                    'flowering-plants',
                    'climbing-plants',
                    'hanging-plants',
                    'tropical-plants',
                ],
                'outdoor-plants' => [
                    'roses',
                    'perennials',
                    'bedding-plants',
                    'olive-trees',
                    'herb-plants',
                ],
            ],
            'electricals' => [
                'tv-and-audio' => [
                    'tvs',
                    'soundbars-and-blu-ray',
                    'accessories',
                    'streaming',
                    'speakers-and-sound-systems',
                ],
                'computing' => [
                    'ipads-and-tablets',
                    'laptops-and-macbooks',
                    'desktops',
                    'accessories',
                    'monitors',
                    'projectors',
                    'printers',
                    'headsets',
                    'microphones',
                    'mice-and-keyboards',
                ],
                'gaming' => [
                    'consoles',
                    'gaming-laptops-and-desktops',
                    'monitors',
                    'accessories',
                    'controllers',
                    'headsets',
                    'mice-and-keyboards',
                ],
                'appliances' => [
                    'laundry',
                    'ironing',
                    'refrigeration',
                    'dishwashing',
                    'cooking',
                ],
                'mobile-and-smart' => [
                    'phones',
                    'cameras',
                    'smart-watches',
                    'smart-speakers',
                    'smart-home',
                ],
            ],
            'sport-and-travel' => [
                'travel-and-luggage' => [
                    'suitcases',
                    'cabin-cases',
                    'backpacks',
                    'accessories',
                    'duffel-bags',
                ],
                'sportswear' => [
                    'women-sports-clothing',
                    'women-sports-trainers',
                    'men-sports-clothings',
                    'men-sports-trainers',
                    'kids-sportswear',
                ],
                'fitness' => [
                    'home-gym-equipment',
                    'sports-equipment',
                    'bikes',
                    'treadmills',
                    'exercise-bikes',
                    'cross-trainers',
                    'weights',
                    'fitness-watches',
                ],
                'outdoor-and-adventure' => [
                    'walking-and-hiking',
                    'water-sports',
                    'camping',
                    'tents',
                    'accessories',
                    'sleeping-bags',
                    'portables',
                ],
            ]
        ];

        $this->createCategories($categories);
    }
}
