<?php

use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleOneController;
use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleTwoController;
use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleThreeController;
use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleFourController;
use App\Http\Controllers\backend\WebsiteModule\WebsiteModuleFiveController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;

// Route of WebsiteModuleOneController
Route::get('/slideshow/list', [WebsiteModuleOneController::class, 'slideShow'])->name('slide_show');
Route::get('/message/corner', [WebsiteModuleOneController::class, 'messageCorner'])->name('message_corner');
Route::get('/manage/menu', [WebsiteModuleOneController::class, 'manageMenu'])->name('manage_menu');
// add section
Route::get('/add_slide/show', [WebsiteModuleOneController::class, 'addSlideShow'])->name('add_slide_show');
Route::get('/add/message', [WebsiteModuleOneController::class, 'addMessage'])->name('add_message');
Route::get('/add/menu', [WebsiteModuleOneController::class, 'addMenu'])->name('add_menu');


//Route of WebsiteModuleTwoController
Route::get('/manage/content', [WebsiteModuleTwoController::class, 'manageContent'])->name('manage_content');
Route::get('/breaking/news', [WebsiteModuleTwoController::class, 'breakingNews'])->name('breaking_news');
Route::get('/manage/album', [WebsiteModuleTwoController::class, 'manageAlbum'])->name('manage_album');
// add section
Route::get('/add/content', [WebsiteModuleTwoController::class, 'addContent'])->name('add_content');
Route::get('/add_breaking/news', [WebsiteModuleTwoController::class, 'addBreakingNews'])->name('add_braking_news');
Route::get('/add/album', [WebsiteModuleTwoController::class, 'addAlbum'])->name('add_album');


//Route of WebsiteModuleThreeController
Route::get('/manage/gallery', [WebsiteModuleThreeController::class, 'manageGallery'])->name('manage_gallery');
Route::get('/manage/news', [WebsiteModuleThreeController::class, 'manageNews'])->name('manage_news');
Route::get('/manage/event', [WebsiteModuleThreeController::class, 'manageEvent'])->name('manage_event');
// add section
Route::get('/add/gallery', [WebsiteModuleThreeController::class, 'addGallery'])->name('add_gallery');
Route::get('/add/news', [WebsiteModuleThreeController::class, 'addNews'])->name('add_news');
Route::get('/add/event', [WebsiteModuleThreeController::class, 'addEvent'])->name('add_event');


//Route of WebsiteModuleFourController
Route::get('/manage/notice', [WebsiteModuleFourController::class, 'manageNotice'])->name('manage_notice');
Route::get('/manage/career', [WebsiteModuleFourController::class, 'manageCareer'])->name('manage_career');
Route::get('/board/result', [WebsiteModuleFourController::class, 'boardResult'])->name('board_result');
// add section
Route::get('/add/notice', [WebsiteModuleFourController::class, 'addNotice'])->name('add_notice');
Route::get('/add/career', [WebsiteModuleFourController::class, 'addCareer'])->name('add_career');
Route::get('/add_board/result', [WebsiteModuleFourController::class, 'addBoardResult'])->name('add_board_result');


//Route of WebsiteModuleFiveController
Route::get('/manage/link', [WebsiteModuleFiveController::class, 'manageLink'])->name('manage_link');
Route::get('/manage/social_media', [WebsiteModuleFiveController::class, 'manageSocialMedia'])->name('manage_social_media');
// add section
Route::get('/add/link', [WebsiteModuleFiveController::class, 'addLink'])->name('manage_link');
Route::get('/add/social_media', [WebsiteModuleFiveController::class, 'addSocialMedia'])->name('add_social_media');

?>



