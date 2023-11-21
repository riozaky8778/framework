// database/seeders/UserSeeder.php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create 10 users using the UserFactory
        User::factory()->count(10)->create();
    }
}
