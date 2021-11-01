<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class PostExportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $fileName = 'posts.txt';

        Storage::delete($fileName);

        $posts = Post::all();

        foreach ($posts as $post) {
            $content = '';

            $p = Post::where('id', $post->id)->first();

            $content .= $p->title . ': ';

            foreach ($p->tags()->get() as $tag) {
                $content .= $tag->name . ', ';
            }

            Storage::disk('local')->append($fileName, $content);
        }


        return Command::SUCCESS;
    }
}
