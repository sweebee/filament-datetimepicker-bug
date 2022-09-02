<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class TestCommand extends Command
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
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $post = Post::first();
        $post->setLocale('en');
        $content = $post->content;
        dd($content);
//        $content[0]['data']['title'] = 'nieuwe titel NL';
        $post->content = $content;

        $post->title = 'testsadf';
        $post->save();
    }
}
