<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

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
        // $post = new Post();

        // $post->title = 'Post 2';
        // $post->save();

        // $post->title = 'Post 3';
        // $post->save();

        // $tag = new Tag();

        // $tag->name = 'Tag 1';
        // $tag->save();

        // $tag->name = 'Tag 2';
        // $tag->save();

        // $tag->name = 'Tag 3';
        // $tag->save();

        // $tag->name = 'Tag 4';
        // $tag->save();

        // DB::insert('insert into post_tag (post_id, tag_id) values (?, ?)', [4, 4]);
        // DB::insert('insert into post_tag (post_id, tag_id) values (?, ?)', [3, 2]);
        // DB::insert('insert into post_tag (post_id, tag_id) values (?, ?)', [2, 1]);

        // $post = Post::find(1);
        // dump($post->tags()->get());

        return Command::SUCCESS;
    }
}
