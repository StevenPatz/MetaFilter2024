<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;
use App\Http\Controllers\Music\ChallengesController;
use App\Http\Controllers\Music\ChartsController;
use App\Http\Controllers\Music\TalkController;
use App\Http\Controllers\Posts\MyPostController;
use App\Http\Controllers\Posts\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(MyPostController::class)
        ->prefix('my-posts')
        ->group(function () {
            Route::get('', 'index')
                ->name(RouteNameEnum::MusicMyPostsIndex);

            Route::get('{post}/{slug}', 'show')
                ->name(RouteNameEnum::MusicMyPostsShow);

            Route::get('create', 'create')
                ->name(RouteNameEnum::MusicMyPostsCreate);

            Route::get('create-song', 'create')
                ->name(RouteNameEnum::MusicMyPostsSongCreate);

            Route::get('create-talk', 'create')
                ->name(RouteNameEnum::MusicMyPostsTalkCreate);

            Route::post('store', 'store')
                ->name(RouteNameEnum::MusicMyPostsStore);

            Route::get('preview/{post}', 'preview')
                ->name(RouteNameEnum::MusicMyPostsPreview);

            Route::get('edit/{post}', 'edit')
                ->name(RouteNameEnum::MusicMyPostsEdit);

            Route::post('update', 'update')
                ->name(RouteNameEnum::MusicMyPostsUpdate);
        });
});

Route::get('charts', [ChartsController::class, 'index'])
    ->name(RouteNameEnum::MusicChartsIndex);

Route::get('challenges', [ChallengesController::class, 'index'])
    ->name(RouteNameEnum::MusicChallengesIndex);

Route::get('talk', [TalkController::class, 'index'])
    ->name(RouteNameEnum::MusicTalkIndex);

Route::controller(PostController::class)->group(function () {

    Route::get('', 'index')
        ->name(RouteNameEnum::MusicPostIndex);

    Route::get('{post}/{slug}', 'show')
        ->name(RouteNameEnum::MusicPostShow);
});
