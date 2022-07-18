<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

        // category seeder
        Category::create([
        	"name" => "Web Design",
            "slug" => "web-design"
        ]);
        
        Category::create([
            "name" => "Automotive",
            "slug" => "automotive"
        ]);
        
        Category::create([
            "name" => "Cooking",
            "slug" => "cooking"
        ]);
        
        Category::create([
            "name" => "Cycling",
            "slug" => "cycling"
        ]);

        // user seeder
        User::create([
            "name" => "Yafi",
			"email" => "yafi@gmail.com",
			"password" => bcrypt("yafi")
        ]);

		User::create([
            "name" => "Abyan",
			"email" => "Abyan@gmail.com",
			"password" => bcrypt("Abyan")
        ]);

		User::create([
            "name" => "Falah",
			"email" => "Falah@gmail.com",
			"password" => bcrypt("Falah")
        ]);

		User::create([
            "name" => "Gamtina",
			"email" => "Gamtina@gmail.com",
			"password" => bcrypt("Gamtina")
        ]);
		
		 // Post seeder
		 Post::create([
			"title"       => 'Judul Pertama',
			"category_id" => 1,
			"user_id"      => 1,
			"slug"        => 'judul-pertama',
			"excerpt"     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veritatis ab expedita blanditiis debitis voluptatem inventore voluptate architecto illo libero velit, quisquam beatae eius, quis temporibus et voluptatibus. Illum, officia!',
			"body"        => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus debitis in voluptate ipsa facere aspernatur accusantium id, porro praesentium magnam officiis ab saepe! Cum facilis assumenda provident est libero rem velit numquam, error doloribus perferendis, fugiat tempore aliquam ex in culpa vitae veritatis ratione nisi eos dolorem consequatur optio alias. Officiis magnam minus vero enim ad! Laborum id sint temporibus nesciunt quasi nihil, officiis saepe, quis explicabo corporis nisi labore maxime voluptates tempora minima nulla numquam blanditiis. Nam voluptates tempore repudiandae, voluptate natus rerum vitae quibusdam. Quisquam quidem laborum similique ad, aspernatur, ab blanditiis tenetur rem consectetur doloribus neque reiciendis laudantium ea, maxime molestiae incidunt dignissimos praesentium ex enim? Aliquid fuga tempora doloremque eligendi labore, nulla sed deserunt dicta itaque corporis? Animi odio sapiente quibusdam, nulla aperiam aspernatur cupiditate consectetur magni esse adipisci laboriosam corrupti nam dolorem ullam quia reprehenderit cumque vel autem ut quo possimus excepturi! Temporibus atque, quidem beatae ipsam, dolorem deserunt rem commodi ut ducimus tenetur placeat numquam ea excepturi similique quasi reiciendis, quaerat possimus eos odit. Dolore, soluta nam non dicta ducimus autem quos illum a laborum odio placeat accusantium quibusdam? A culpa eligendi, nulla, labore adipisci quae quidem eveniet voluptatibus enim quia, blanditiis ad dolores aliquid rem quo fugit cum libero neque porro. Aliquid voluptatum possimus a nihil aut architecto quos facere nesciunt, quaerat culpa eaque sapiente officia ratione natus ea mollitia alias inventore in nam explicabo numquam est doloribus! Natus iste quaerat eveniet libero, molestias eligendi laudantium dignissimos odit est fugiat eos aliquam cupiditate, id quia perferendis unde, commodi architecto? Laborum fugit itaque eligendi! Totam omnis ducimus modi perspiciatis velit placeat repellat et autem facere est rem maxime obcaecati sint laborum, sequi necessitatibus consectetur! Voluptate earum voluptatem, maiores dolore facere maxime consequatur aliquid itaque! Laboriosam dolorem, omnis fugiat aliquam saepe assumenda dicta culpa quasi!'
        ]);
        Post::create([
			"title"       => 'Judul kedua',
			"category_id" => 2,
			"user_id"      => 2,
			"slug"        => 'judul-kedua',
			"excerpt"     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veritatis ab expedita blanditiis debitis voluptatem inventore voluptate architecto illo libero velit, quisquam beatae eius, quis temporibus et voluptatibus. Illum, officia!',
			"body"        => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus debitis in voluptate ipsa facere aspernatur accusantium id, porro praesentium magnam officiis ab saepe! Cum facilis assumenda provident est libero rem velit numquam, error doloribus perferendis, fugiat tempore aliquam ex in culpa vitae veritatis ratione nisi eos dolorem consequatur optio alias. Officiis magnam minus vero enim ad! Laborum id sint temporibus nesciunt quasi nihil, officiis saepe, quis explicabo corporis nisi labore maxime voluptates tempora minima nulla numquam blanditiis. Nam voluptates tempore repudiandae, voluptate natus rerum vitae quibusdam. Quisquam quidem laborum similique ad, aspernatur, ab blanditiis tenetur rem consectetur doloribus neque reiciendis laudantium ea, maxime molestiae incidunt dignissimos praesentium ex enim? Aliquid fuga tempora doloremque eligendi labore, nulla sed deserunt dicta itaque corporis? Animi odio sapiente quibusdam, nulla aperiam aspernatur cupiditate consectetur magni esse adipisci laboriosam corrupti nam dolorem ullam quia reprehenderit cumque vel autem ut quo possimus excepturi! Temporibus atque, quidem beatae ipsam, dolorem deserunt rem commodi ut ducimus tenetur placeat numquam ea excepturi similique quasi reiciendis, quaerat possimus eos odit. Dolore, soluta nam non dicta ducimus autem quos illum a laborum odio placeat accusantium quibusdam? A culpa eligendi, nulla, labore adipisci quae quidem eveniet voluptatibus enim quia, blanditiis ad dolores aliquid rem quo fugit cum libero neque porro. Aliquid voluptatum possimus a nihil aut architecto quos facere nesciunt, quaerat culpa eaque sapiente officia ratione natus ea mollitia alias inventore in nam explicabo numquam est doloribus! Natus iste quaerat eveniet libero, molestias eligendi laudantium dignissimos odit est fugiat eos aliquam cupiditate, id quia perferendis unde, commodi architecto? Laborum fugit itaque eligendi! Totam omnis ducimus modi perspiciatis velit placeat repellat et autem facere est rem maxime obcaecati sint laborum, sequi necessitatibus consectetur! Voluptate earum voluptatem, maiores dolore facere maxime consequatur aliquid itaque! Laboriosam dolorem, omnis fugiat aliquam saepe assumenda dicta culpa quasi!'
        ]);
        Post::create([
			"title"       => 'Judul ketiga',
			"category_id" => 3,
			"user_id"      => 3,
			"slug"        => 'judul-ketiga',
			"excerpt"     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veritatis ab expedita blanditiis debitis voluptatem inventore voluptate architecto illo libero velit, quisquam beatae eius, quis temporibus et voluptatibus. Illum, officia!',
			"body"        => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus debitis in voluptate ipsa facere aspernatur accusantium id, porro praesentium magnam officiis ab saepe! Cum facilis assumenda provident est libero rem velit numquam, error doloribus perferendis, fugiat tempore aliquam ex in culpa vitae veritatis ratione nisi eos dolorem consequatur optio alias. Officiis magnam minus vero enim ad! Laborum id sint temporibus nesciunt quasi nihil, officiis saepe, quis explicabo corporis nisi labore maxime voluptates tempora minima nulla numquam blanditiis. Nam voluptates tempore repudiandae, voluptate natus rerum vitae quibusdam. Quisquam quidem laborum similique ad, aspernatur, ab blanditiis tenetur rem consectetur doloribus neque reiciendis laudantium ea, maxime molestiae incidunt dignissimos praesentium ex enim? Aliquid fuga tempora doloremque eligendi labore, nulla sed deserunt dicta itaque corporis? Animi odio sapiente quibusdam, nulla aperiam aspernatur cupiditate consectetur magni esse adipisci laboriosam corrupti nam dolorem ullam quia reprehenderit cumque vel autem ut quo possimus excepturi! Temporibus atque, quidem beatae ipsam, dolorem deserunt rem commodi ut ducimus tenetur placeat numquam ea excepturi similique quasi reiciendis, quaerat possimus eos odit. Dolore, soluta nam non dicta ducimus autem quos illum a laborum odio placeat accusantium quibusdam? A culpa eligendi, nulla, labore adipisci quae quidem eveniet voluptatibus enim quia, blanditiis ad dolores aliquid rem quo fugit cum libero neque porro. Aliquid voluptatum possimus a nihil aut architecto quos facere nesciunt, quaerat culpa eaque sapiente officia ratione natus ea mollitia alias inventore in nam explicabo numquam est doloribus! Natus iste quaerat eveniet libero, molestias eligendi laudantium dignissimos odit est fugiat eos aliquam cupiditate, id quia perferendis unde, commodi architecto? Laborum fugit itaque eligendi! Totam omnis ducimus modi perspiciatis velit placeat repellat et autem facere est rem maxime obcaecati sint laborum, sequi necessitatibus consectetur! Voluptate earum voluptatem, maiores dolore facere maxime consequatur aliquid itaque! Laboriosam dolorem, omnis fugiat aliquam saepe assumenda dicta culpa quasi!'
        ]);
        Post::create([
			"title"       => 'Judul keempat',
			"category_id" => 4,
			"user_id"      => 4,
			"slug"        => 'judul-keempat',
			"excerpt"     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veritatis ab expedita blanditiis debitis voluptatem inventore voluptate architecto illo libero velit, quisquam beatae eius, quis temporibus et voluptatibus. Illum, officia!',
			"body"        => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus debitis in voluptate ipsa facere aspernatur accusantium id, porro praesentium magnam officiis ab saepe! Cum facilis assumenda provident est libero rem velit numquam, error doloribus perferendis, fugiat tempore aliquam ex in culpa vitae veritatis ratione nisi eos dolorem consequatur optio alias. Officiis magnam minus vero enim ad! Laborum id sint temporibus nesciunt quasi nihil, officiis saepe, quis explicabo corporis nisi labore maxime voluptates tempora minima nulla numquam blanditiis. Nam voluptates tempore repudiandae, voluptate natus rerum vitae quibusdam. Quisquam quidem laborum similique ad, aspernatur, ab blanditiis tenetur rem consectetur doloribus neque reiciendis laudantium ea, maxime molestiae incidunt dignissimos praesentium ex enim? Aliquid fuga tempora doloremque eligendi labore, nulla sed deserunt dicta itaque corporis? Animi odio sapiente quibusdam, nulla aperiam aspernatur cupiditate consectetur magni esse adipisci laboriosam corrupti nam dolorem ullam quia reprehenderit cumque vel autem ut quo possimus excepturi! Temporibus atque, quidem beatae ipsam, dolorem deserunt rem commodi ut ducimus tenetur placeat numquam ea excepturi similique quasi reiciendis, quaerat possimus eos odit. Dolore, soluta nam non dicta ducimus autem quos illum a laborum odio placeat accusantium quibusdam? A culpa eligendi, nulla, labore adipisci quae quidem eveniet voluptatibus enim quia, blanditiis ad dolores aliquid rem quo fugit cum libero neque porro. Aliquid voluptatum possimus a nihil aut architecto quos facere nesciunt, quaerat culpa eaque sapiente officia ratione natus ea mollitia alias inventore in nam explicabo numquam est doloribus! Natus iste quaerat eveniet libero, molestias eligendi laudantium dignissimos odit est fugiat eos aliquam cupiditate, id quia perferendis unde, commodi architecto? Laborum fugit itaque eligendi! Totam omnis ducimus modi perspiciatis velit placeat repellat et autem facere est rem maxime obcaecati sint laborum, sequi necessitatibus consectetur! Voluptate earum voluptatem, maiores dolore facere maxime consequatur aliquid itaque! Laboriosam dolorem, omnis fugiat aliquam saepe assumenda dicta culpa quasi!'
        ]);
		Post::create([
			"title"       => 'Judul kelima',
			"category_id" => 4,
			"user_id"      => 3,
			"slug"        => 'judul-kelima',
			"excerpt"     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veritatis ab expedita blanditiis debitis voluptatem inventore voluptate architecto illo libero velit, quisquam beatae eius, quis temporibus et voluptatibus. Illum, officia!',
			"body"        => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus debitis in voluptate ipsa facere aspernatur accusantium id, porro praesentium magnam officiis ab saepe! Cum facilis assumenda provident est libero rem velit numquam, error doloribus perferendis, fugiat tempore aliquam ex in culpa vitae veritatis ratione nisi eos dolorem consequatur optio alias. Officiis magnam minus vero enim ad! Laborum id sint temporibus nesciunt quasi nihil, officiis saepe, quis explicabo corporis nisi labore maxime voluptates tempora minima nulla numquam blanditiis. Nam voluptates tempore repudiandae, voluptate natus rerum vitae quibusdam. Quisquam quidem laborum similique ad, aspernatur, ab blanditiis tenetur rem consectetur doloribus neque reiciendis laudantium ea, maxime molestiae incidunt dignissimos praesentium ex enim? Aliquid fuga tempora doloremque eligendi labore, nulla sed deserunt dicta itaque corporis? Animi odio sapiente quibusdam, nulla aperiam aspernatur cupiditate consectetur magni esse adipisci laboriosam corrupti nam dolorem ullam quia reprehenderit cumque vel autem ut quo possimus excepturi! Temporibus atque, quidem beatae ipsam, dolorem deserunt rem commodi ut ducimus tenetur placeat numquam ea excepturi similique quasi reiciendis, quaerat possimus eos odit. Dolore, soluta nam non dicta ducimus autem quos illum a laborum odio placeat accusantium quibusdam? A culpa eligendi, nulla, labore adipisci quae quidem eveniet voluptatibus enim quia, blanditiis ad dolores aliquid rem quo fugit cum libero neque porro. Aliquid voluptatum possimus a nihil aut architecto quos facere nesciunt, quaerat culpa eaque sapiente officia ratione natus ea mollitia alias inventore in nam explicabo numquam est doloribus! Natus iste quaerat eveniet libero, molestias eligendi laudantium dignissimos odit est fugiat eos aliquam cupiditate, id quia perferendis unde, commodi architecto? Laborum fugit itaque eligendi! Totam omnis ducimus modi perspiciatis velit placeat repellat et autem facere est rem maxime obcaecati sint laborum, sequi necessitatibus consectetur! Voluptate earum voluptatem, maiores dolore facere maxime consequatur aliquid itaque! Laboriosam dolorem, omnis fugiat aliquam saepe assumenda dicta culpa quasi!'
        ]);
	
	}
}
