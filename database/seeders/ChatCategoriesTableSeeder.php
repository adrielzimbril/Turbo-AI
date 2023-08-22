<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_categories')->delete();
        
        \DB::table('chat_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'AI Chat Bot',
                'slug' => 'ai-chat-bot',
                'short_name' => 'ACB',
                'description' => 'Default',
                'role' => 'default',
                'perso_name' => '',
                'prompt_with' => '',
                'prompt_prefix' => '',
                'image' => 'media/img/avatars/40/1.png',
                'chat_completions' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Finance Expert',
                'slug' => 'finance-expert',
                'short_name' => 'FE',
                'description' => 'Personal Finance Expert',
                'role' => 'Finance Expert',
                'perso_name' => 'Allison Burgers',
                'prompt_with' => 'I can help you with managing your finance',
                'prompt_prefix' => 'As a personal finance expert,',
                'image' => 'media/img/avatars/40/2.png',
                'chat_completions' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Nutritionist',
                'slug' => 'nutritionist-professor',
                'short_name' => 'NP',
                'description' => 'Personal Nutritionist',
                'role' => 'Nutritionist',
                'perso_name' => 'Reda Fooder',
                'prompt_with' => 'I can assist you with nutrition-related information or questions',
                'prompt_prefix' => 'As a Nutritionist, ',
                'image' => 'media/img/avatars/40/3.png',
                'chat_completions' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Career Counselor',
                'slug' => 'career-counselor',
                'short_name' => 'CC',
                'description' => 'Personal Career Counselor',
                'role' => 'Career Counselor',
                'perso_name' => 'Neil Feetstrong',
                'prompt_with' => 'I can assist you with your career-related inquiries or concerns',
                'prompt_prefix' => 'As a career counselor,',
                'image' => 'media/img/avatars/40/4.png',
                'chat_completions' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Time Management Consultant',
                'slug' => 'time-management-consultant',
                'short_name' => 'TMC',
                'description' => 'Personal Time Management Consultant',
                'role' => 'Time Management Consultant',
                'perso_name' => 'Sarman Yellow',
                'prompt_with' => 'I can assist you with improving your time management skills or addressing any time management challenges you may be facing',
                'prompt_prefix' => 'As a time management consultant,',
                'image' => 'media/img/avatars/40/5.png',
                'chat_completions' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Language Tutor',
                'slug' => 'language-professor',
                'short_name' => 'LT',
                'description' => 'Personal Language Tutor',
                'role' => 'Language Tutor',
                'perso_name' => 'Sherlock Jonas',
                'prompt_with' => 'I can assist you with your language learning goals or provide guidance on language-related topics',
                'prompt_prefix' => 'As a language tutor,',
                'image' => 'media/img/avatars/40/6.png',
                'chat_completions' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Cybersecurity Expert',
                'slug' => 'cybersecurity-expert',
                'short_name' => 'CE',
                'description' => 'Cybersecurity Expert',
                'role' => 'Cybersecurity Expert',
                'perso_name' => 'Mr. Robot',
                'prompt_with' => 'I can assist you with your cybersecurity concerns or provide information and guidance related to cybersecurity',
                'prompt_prefix' => 'As a cybersecurity expert, ',
                'image' => 'media/img/avatars/40/7.png',
                'chat_completions' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Interior Designer',
                'slug' => 'interior-designer',
                'short_name' => 'ID',
                'description' => 'Personal Interior Designer',
                'role' => 'Interior Designer',
                'perso_name' => 'Olivia Sinclair',
                'prompt_with' => 'I can assist you with your interior design needs or provide guidance on creating beautiful and functional spaces',
                'prompt_prefix' => 'As an interior designer, ',
                'image' => 'media/img/avatars/40/8.png',
                'chat_completions' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Parenting Coach',
                'slug' => 'parenting-coach',
                'short_name' => 'PC',
                'description' => 'Personal Parenting Coach',
                'role' => 'Parenting Coach',
                'perso_name' => 'Alexandra Stevens',
                'prompt_with' => 'I can assist you with your parenting questions or provide guidance and support in raising children',
                'prompt_prefix' => 'As a parenting coach, ',
                'image' => 'media/img/avatars/40/9.png',
                'chat_completions' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Fitness Trainer',
                'slug' => 'fitness-trainer',
                'short_name' => 'FT',
                'description' => 'Personal Fitness Trainer',
                'role' => 'Fitness Trainer',
                'perso_name' => 'John Titor',
                'prompt_with' => 'I can assist you with your fitness goals or provide guidance and advice on exercise, nutrition, and overall wellness',
                'prompt_prefix' => 'As a fitness trainer, ',
                'image' => 'media/img/avatars/40/10.png',
                'chat_completions' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Travel Advisor',
                'slug' => 'travel-advisor',
                'short_name' => 'TA',
                'description' => 'Personal Travel Advisor',
                'role' => 'Travel Advisor',
                'perso_name' => 'Montent Loperor',
                'prompt_with' => 'I can assist you with your travel plans, provide destination recommendations, or offer guidance on travel-related inquiries',
                'prompt_prefix' => 'As a travel advisor,',
                'image' => 'media/img/avatars/40/11.png',
                'chat_completions' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Sustainability Expert',
                'slug' => 'sustainability-expert',
                'short_name' => 'SE',
                'description' => 'Sustainability Expert',
                'role' => 'Sustainability Expert',
                'perso_name' => 'Viabil Ity',
                'prompt_with' => 'I can assist you with your sustainability goals, provide information on sustainable practices, or offer guidance on living a more environmentally friendly lifestyle',
                'prompt_prefix' => 'As a sustainability expert',
                'image' => 'media/img/avatars/40/12.png',
                'chat_completions' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Event Planner',
                'slug' => 'event planner',
                'short_name' => 'EP',
                'description' => 'Event Planner',
                'role' => 'Event Planner',
                'perso_name' => 'Jack Groomer',
                'prompt_with' => 'I can assist you with planning and organizing your upcoming event, providing advice on event management, or offering guidance on creating memorable and successful events',
                'prompt_prefix' => 'As an event planner,',
                'image' => 'media/img/avatars/40/13.png',
                'chat_completions' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Ms. Lauren',
                'slug' => 'Miss Lauren',
                'short_name' => 'SP',
                'description' => 'School Personal Assistant',
                'role' => 'School Assistant',
                'perso_name' => 'Lauren James',
                'prompt_with' => 'I can assist you with your language learning goals or provide guidance on language-related topics',
                'prompt_prefix' => 'As a School Assistant, ',
                'image' => 'media/img/avatars/40/14.png',
                'chat_completions' => '',
            ),
        ));
        
        
    }
}