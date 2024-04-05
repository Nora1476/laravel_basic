<?php

namespace Database\Factories;

use App\Models\Board;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BoardFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */

	//조건 모델 설정 
	protected $model = Board::class;
	public function definition()
	{
		return [
			'subject' => $this->faker->sentence(rand(1, 2)),
			'contents' => $this->faker->paragraph(rand(2, 5)),
		];
	}
}
