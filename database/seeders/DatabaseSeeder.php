<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Jumbotron;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        User::create([
            "name" => "Dimas Candra",
            "email" => "dimascndraa18@gmail.com",
            "username" => "dimas",
            "password" => bcrypt("password"),
            "role" => "admin",
        ]);

        Jumbotron::create([
            'title' => 'Stay Safe, Stay Healty',
            'title_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus omnis reprehenderit repudiandae praesentium minima optio vitae blanditiis nemo quae, amet vero obcaecati reiciendis accusamus assumenda, doloremque, atque officiis beatae deserunt!',
            'main_image' => 'jumbotron-img/vkqCEJ9b8i4GWuaBSkY61jLDoTc4cd0h0M7LOCFY.svg'
        ]);

        Category::create([
            "name" => "Rumah Sakit",
            "slug" => "rumah-sakit"
        ]);

        Category::create([
            "name" => "Penghargaan",
            "slug" => "penghargaan"
        ]);

        Category::create([
            "name" => "Lain Lain",
            "slug" => "lain-lain"
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     "title" => "Judul Berita Pertama",
        //     "slug" => "judul-berita-pertama",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt iusto culpa quia voluptatem, consequatur officia.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt iusto culpa quia voluptatem, consequatur officia. Temporibus odio, maiores excepturi voluptatibus ea exercitationem, laudantium, dolores perferendis tempora adipisci</p><p>molestias sequi nobis dolorum cumque ut voluptate porro ullam. Dolore facilis accusamus ex atque quod veritatis magni? Beatae, quibusdam. Perspiciatis reiciendis dignissimos iusto? Delectus, corrupti! Ullam eveniet laudantium impedit adipisci labore repellendus quis, at eligendi. Nisi laboriosam mollitia vitae excepturi modi et esse quibusdam natus eum! Quas eius ipsam, esse iste culpa neque, necessitatibus aliquid quasi temporibus ex, voluptatibus dignissimos ratione. Fugiat delectus velit molestias a? Doloribus qui esse fugiat, aspernatur asperiores voluptatem id maxime libero ipsum nesciunt voluptatibus amet nobis veritatis itaque? Sunt sapiente voluptate ad harum quas, dolorum dolor</p><p>suscipit consequuntur? Vitae dicta architecto eaque laboriosam repudiandae. Cum impedit eaque quos eos. Hic deserunt, reiciendis harum rem aut, minus fugit eligendi, doloribus quibusdam animi corporis et. Unde voluptates possimus blanditiis alias ab at qui minus atque enim! Consectetur inventore incidunt earum corporis a quis rerum numquam dolorum velit excepturi vero, esse omnis tempore iste error labore nemo ipsum. Blanditiis, neque voluptatem dolor cupiditate nisi quos ipsum libero, qui rem placeat doloremque dolorum nihil expedita sunt explicabo provident minima alias quasi.</p>",
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

    }
}
