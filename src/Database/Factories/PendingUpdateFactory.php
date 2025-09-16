<?php

    namespace Blashbrook\PAPIForms\Database\Factories;


    use App\Models\User;
    use Blashbrook\PAPIForms\App\Models\PendingUpdate;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Str;

    class PendingUpdateFactory extends Factory
    {
        protected $model = PendingUpdate::class;

        public function definition(): array
        {
            return [
                'field' => $this->faker->word(),
                'new_value' => $this->faker->word(),
                'token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'user_id' => User::factory(),
            ];
        }
    }
