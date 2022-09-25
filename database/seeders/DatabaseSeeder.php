<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>My Personal post excerpt.</p>',
            'body' => '<p>Tiramisu brownie cotton candy gummies jelly beans sweet sweet toffee sesame snaps. Cupcake caramels chocolate bar sesame snaps fruitcake donut gingerbread. Tart cheesecake biscuit tiramisu candy tart marshmallow marzipan. Halvah dessert dragée icing jujubes marshmallow muffin dragée. Tiramisu dragée tart apple pie pie tiramisu oat cake. Icing chocolate bar tiramisu sesame snaps donut cupcake bonbon. Shortbread bonbon chocolate candy toffee cheesecake cotton candy ice cream powder. Soufflé muffin lemon drops jelly beans gingerbread. Muffin oat cake pastry biscuit oat cake sesame snaps cheesecake wafer. Cake danish shortbread pastry cupcake shortbread. Chocolate cake wafer sweet icing oat cake danish caramels muffin. Pudding cupcake dessert jelly beans halvah cupcake lemon drops cotton candy sesame snaps. Cotton candy cake dessert brownie biscuit pastry halvah pudding marzipan. Liquorice sesame snaps candy jujubes muffin sweet roll dessert.</p>p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>My Work post excerpt.</p>',
            'body' => '<p>Tiramisu brownie cotton candy gummies jelly beans sweet sweet toffee sesame snaps. Cupcake caramels chocolate bar sesame snaps fruitcake donut gingerbread. Tart cheesecake biscuit tiramisu candy tart marshmallow marzipan. Halvah dessert dragée icing jujubes marshmallow muffin dragée. Tiramisu dragée tart apple pie pie tiramisu oat cake. Icing chocolate bar tiramisu sesame snaps donut cupcake bonbon. Shortbread bonbon chocolate candy toffee cheesecake cotton candy ice cream powder. Soufflé muffin lemon drops jelly beans gingerbread. Muffin oat cake pastry biscuit oat cake sesame snaps cheesecake wafer. Cake danish shortbread pastry cupcake shortbread. Chocolate cake wafer sweet icing oat cake danish caramels muffin. Pudding cupcake dessert jelly beans halvah cupcake lemon drops cotton candy sesame snaps. Cotton candy cake dessert brownie biscuit pastry halvah pudding marzipan. Liquorice sesame snaps candy jujubes muffin sweet roll dessert.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Hobbies Post',
            'slug' => 'my-hobbies-post',
            'excerpt' => '<p>My hobbies post excerpt.</p>',
            'body' => '<p>Tiramisu brownie cotton candy gummies jelly beans sweet sweet toffee sesame snaps. Cupcake caramels chocolate bar sesame snaps fruitcake donut gingerbread. Tart cheesecake biscuit tiramisu candy tart marshmallow marzipan. Halvah dessert dragée icing jujubes marshmallow muffin dragée. Tiramisu dragée tart apple pie pie tiramisu oat cake. Icing chocolate bar tiramisu sesame snaps donut cupcake bonbon. Shortbread bonbon chocolate candy toffee cheesecake cotton candy ice cream powder. Soufflé muffin lemon drops jelly beans gingerbread. Muffin oat cake pastry biscuit oat cake sesame snaps cheesecake wafer. Cake danish shortbread pastry cupcake shortbread. Chocolate cake wafer sweet icing oat cake danish caramels muffin. Pudding cupcake dessert jelly beans halvah cupcake lemon drops cotton candy sesame snaps. Cotton candy cake dessert brownie biscuit pastry halvah pudding marzipan. Liquorice sesame snaps candy jujubes muffin sweet roll dessert.</p>'
        ]);
    }
}
