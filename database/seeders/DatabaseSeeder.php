<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(30)->create();
        $this->call(FrontendFeaturesTableSeeder::class);
        $this->call(FrontendFaqsTableSeeder::class);
        $this->call(FrontendUsecasesTableSeeder::class);
        $this->call(FrontendTestimonialsTableSeeder::class);
        $this->call(FrontendPartnersTableSeeder::class);
        $this->call(FrontendHowItWorksTableSeeder::class);
        $this->call(FrontendSectionsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(PromptCategoriesTableSeeder::class);
        $this->call(PromptsTableSeeder::class);
        $this->call(ChatCategoriesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TranslationsStringsTableSeeder::class);
    }
}
