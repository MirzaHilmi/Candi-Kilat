<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Novel', 'Fiction', 'Non-fiction', 'Mystery', 'Romance', 'Science Fiction', 'Fantasy', 'Biography', 'Autobiography', 'Thriller', 'Historical Fiction', 'Poetry', 'Adventure', 'Young Adult', 'Children\'s Literature', 'Drama', 'Crime', 'Horror', 'Suspense', 'Self-help', 'Reference', 'Philosophy', 'Travelogue', 'Memoir', 'Graphic Novel', 'Anthology', 'Comic Book', 'Classic', 'Dystopian', 'Satire', 'Western', 'Picture Book', 'Essay', 'Spiritual', 'Cookbook', 'Art', 'Science', 'Educational', 'True Crime', 'Historical Non-fiction', 'Cultural', 'Political', 'Mythology', 'Psychology', 'Fairy Tale', 'Humor', 'Religion', 'Business', 'Sports', 'Health', 'Fitness', 'War', 'Parenting', 'Gardening', 'Environmental', 'Technology', 'Science Fiction/Fantasy', 'Historical Romance', 'Paranormal', 'Urban Fantasy', 'Magical Realism', 'Crime Fiction', 'Legal Thriller', 'Political Thriller', 'Young Adult Fantasy', 'Young Adult Contemporary', 'Young Adult Dystopian', 'Children\'s Picture Book', 'Middle-Grade Fiction', 'Middle-Grade Mystery', 'Self-help Psychology', 'Inspirational', 'Art History', 'Sociology', 'Cultural Studies', 'Archaeology', 'Linguistics', 'Philosophy of Mind', 'Astrophysics', 'Evolutionary Biology', 'Mathematics', 'Travel Guide', 'Science Journalism', 'Financial Planning', 'Leadership', 'Motivational', 'Meditation', 'Graphic Design', 'Fashion', 'Poetry Collection', 'World History', 'Contemporary Literature'])
        ];
    }
}
