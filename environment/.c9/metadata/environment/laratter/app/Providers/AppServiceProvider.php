{"filter":false,"title":"AppServiceProvider.php","tooltip":"/laratter/app/Providers/AppServiceProvider.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":29,"column":0},"action":"remove","lines":["// database/seeders/DatabaseSeeder.php","","<?php","","namespace Database\\Seeders;","","use Illuminate\\Database\\Seeder;","","class DatabaseSeeder extends Seeder","{","  /**","   * Seed the application's database.","   *","   * @return void","   */","  public function run()","  {","    // 🔽 この行のコメントから外す","    \\App\\Models\\User::factory(10)->create();","","    // 🔽 こちらはそのまま","    // \\App\\Models\\User::factory()->create([","    //     'name' => 'Test User',","    //     'email' => 'test@example.com',","    // ]);","","  }","}","",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":32,"column":0},"action":"insert","lines":["<?php","","namespace App\\Providers;","","use Illuminate\\Support\\ServiceProvider;","// 🔽 1行追加 🔽","use Illuminate\\Routing\\UrlGenerator;","","class AppServiceProvider extends ServiceProvider","{","  /**","   * Register any application services.","   *","   * @return void","   */","  public function register()","  {","    //","  }","","  /**","   * Bootstrap any application services.","   *","   * @return void","   */","  // 🔽 編集 🔽","  public function boot(UrlGenerator $url)","  {","    $url->forceScheme('https');","  }","}","",""]}]]},"ace":{"folds":[],"scrolltop":280,"scrollleft":0,"selection":{"start":{"row":32,"column":0},"end":{"row":32,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1676095645062,"hash":"932224666864181ea75da32b2d38b0b7504b644d"}